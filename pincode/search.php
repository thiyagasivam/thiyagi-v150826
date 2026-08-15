<?php
/**
 * Enhanced Pincode Search with API Integration
 * Handles both pincode and area name searches
 */

// Include API configuration and dynamic generator
require_once 'api_config.php';
require_once 'dynamic.php';

class PincodeSearchEngine {
    private $generator;
    
    public function __construct() {
        $this->generator = new DynamicPincodeGenerator();
    }
    
    /**
     * Search by pincode or area name
     */
    public function search($query) {
        $query = trim($query);
        
        // If query is 6 digits, treat as pincode
        if (preg_match('/^\d{6}$/', $query)) {
            return $this->searchByPincode($query);
        }
        
        // Otherwise, search by area name using API
        return $this->searchByAreaName($query);
    }
    
    /**
     * Search by pincode
     */
    private function searchByPincode($pincode) {
        // Use the same method as dynamic generator
        $reflection = new ReflectionClass($this->generator);
        $method = $reflection->getMethod('getPincodeData');
        $method->setAccessible(true);
        
        $data = $method->invoke($this->generator, $pincode);
        
        if ($data && isset($data['Name'])) {
            return [
                'type' => 'pincode',
                'query' => $pincode,
                'results' => [$data],
                'count' => 1
            ];
        }
        
        return [
            'type' => 'pincode',
            'query' => $pincode,
            'results' => [],
            'count' => 0,
            'error' => 'No data found for this pincode'
        ];
    }
    
    /**
     * Search by area/post office name
     */
    private function searchByAreaName($areaName) {
        // Use postalpincode.in API for area name search
        $url = "https://api.postalpincode.in/postoffice/" . urlencode($areaName);
        
        $response = $this->makeAPIRequest($url);
        
        if ($response && $this->isValidResponse($response)) {
            $results = $response[0]['PostOffice'] ?? [];
            
            return [
                'type' => 'area',
                'query' => $areaName,
                'results' => $results,
                'count' => count($results)
            ];
        }
        
        return [
            'type' => 'area',
            'query' => $areaName,
            'results' => [],
            'count' => 0,
            'error' => 'No areas found matching your search'
        ];
    }
    
    /**
     * Make API request
     */
    private function makeAPIRequest($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
            'Accept: application/json'
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($httpCode === 200 && $response) {
            return json_decode($response, true);
        }
        
        return null;
    }
    
    /**
     * Validate API response
     */
    private function isValidResponse($response) {
        return is_array($response) && 
               isset($response[0]['Status']) && 
               $response[0]['Status'] === 'Success' &&
               isset($response[0]['PostOffice']) &&
               !empty($response[0]['PostOffice']);
    }
}

// Handle AJAX search requests
if (isset($_GET['action']) && $_GET['action'] === 'search') {
    header('Content-Type: application/json');
    
    $query = $_GET['q'] ?? '';
    if (empty($query) || strlen($query) < 3) {
        echo json_encode(['error' => 'Query must be at least 3 characters']);
        exit;
    }
    
    $searchEngine = new PincodeSearchEngine();
    $results = $searchEngine->search($query);
    
    echo json_encode($results);
    exit;
}

// Handle form submission
$searchResults = null;
if (isset($_POST['search_query']) && !empty($_POST['search_query'])) {
    $searchEngine = new PincodeSearchEngine();
    $searchResults = $searchEngine->search($_POST['search_query']);
}
?>
<title>Enhanced Pincode Search - Thiyagi</title>
    <meta name="description" content="Search Indian pincodes by pincode number or area name. Get complete postal information with real-time API data.">
    
    
    <style>
        .search-suggestion {
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .search-suggestion:hover {
            background-color: #f3f4f6;
        }
        .search-suggestions {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
<body class="bg-gray-50">
    <?php include_once '../header.php'; ?>
    
    <main class="container mx-auto px-4 py-8">
        
        <!-- Hero Section -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-8 text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                <i class="fas fa-search text-blue-600 mr-3"></i>
                Enhanced Pincode Search
            </h1>
            <p class="text-xl text-gray-600 mb-6">
                Search by pincode number or area name to get complete postal information
            </p>
            
            <!-- Main Search Form -->
            <form method="POST" class="max-w-2xl mx-auto">
                <div class="relative">
                    <input type="text" 
                           name="search_query" 
                           id="searchInput"
                           value="<?php echo isset($_POST['search_query']) ? htmlspecialchars($_POST['search_query']) : ''; ?>"
                           class="w-full px-6 py-4 pr-16 text-lg border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                           placeholder="Enter pincode (110001) or area name (New Delhi)..."
                           autocomplete="off">
                    
                    <button type="submit" 
                            class="absolute right-2 top-2 bottom-2 px-6 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        <i class="fas fa-search"></i>
                    </button>
                    
                    <!-- Search Suggestions (AJAX) -->
                    <div id="searchSuggestions" 
                         class="hidden absolute top-full left-0 right-0 bg-white border border-gray-300 rounded-b-lg shadow-lg z-10 search-suggestions">
                        <!-- Dynamic suggestions will appear here -->
                    </div>
                </div>
            </form>
            
            <!-- Quick Search Examples -->
            <div class="mt-6 flex flex-wrap justify-center gap-2">
                <span class="text-sm text-gray-600">Try:</span>
                <?php
                $examples = [
                    '110001' => 'New Delhi',
                    '400001' => 'Mumbai',
                    '560001' => 'Bangalore',
                    'Ballari' => 'Area Search',
                    'Ariyalur' => 'District Search'
                ];
                
                foreach ($examples as $query => $label) {
                    echo '<button onclick="searchExample(\'' . $query . '\')" class="bg-blue-100 hover:bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm transition-colors">';
                    echo $label . ' (' . $query . ')';
                    echo '</button>';
                }
                ?>
            </div>
        </div>

        <!-- Search Results -->
        <?php if ($searchResults): ?>
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-900">
                    Search Results for "<?php echo htmlspecialchars($_POST['search_query']); ?>"
                </h2>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                    <?php echo $searchResults['count']; ?> result<?php echo $searchResults['count'] !== 1 ? 's' : ''; ?>
                </span>
            </div>
            
            <?php if (isset($searchResults['error'])): ?>
                <div class="bg-red-50 border border-red-200 rounded-lg p-4 text-center">
                    <i class="fas fa-exclamation-triangle text-red-600 text-2xl mb-2"></i>
                    <p class="text-red-800"><?php echo htmlspecialchars($searchResults['error']); ?></p>
                    <p class="text-red-600 text-sm mt-2">Try searching with a different term or check the spelling.</p>
                </div>
            <?php else: ?>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($searchResults['results'] as $result): ?>
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="font-bold text-gray-900"><?php echo htmlspecialchars($result['Name'] ?? 'Unknown'); ?></h3>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">
                                <?php echo htmlspecialchars($result['Pincode'] ?? $result['PINCode'] ?? 'N/A'); ?>
                            </span>
                        </div>
                        
                        <div class="space-y-1 text-sm text-gray-600">
                            <?php if (!empty($result['District'])): ?>
                            <div><i class="fas fa-map-marker-alt w-4"></i> <?php echo htmlspecialchars($result['District']); ?></div>
                            <?php endif; ?>
                            
                            <?php if (!empty($result['State'])): ?>
                            <div><i class="fas fa-flag w-4"></i> <?php echo htmlspecialchars($result['State']); ?></div>
                            <?php endif; ?>
                            
                            <?php if (!empty($result['BranchType'])): ?>
                            <div><i class="fas fa-building w-4"></i> <?php echo htmlspecialchars($result['BranchType']); ?></div>
                            <?php endif; ?>
                        </div>
                        
                        <?php if (!empty($result['Pincode']) || !empty($result['PINCode'])): ?>
                        <div class="mt-3">
                            <?php 
                            $pincode = $result['Pincode'] ?? $result['PINCode'];
                            $state = strtolower(str_replace(' ', '-', $result['State'] ?? ''));
                            $district = strtolower(str_replace(' ', '-', $result['District'] ?? ''));
                            $area = strtolower(str_replace(' ', '-', $result['Name'] ?? ''));
                            ?>
                            <a href="/pincode/<?php echo $state; ?>/<?php echo $district; ?>/<?php echo $area; ?>-pincode-<?php echo $pincode; ?>" 
                               class="inline-flex items-center text-blue-600 hover:text-blue-800 text-sm font-medium">
                                View Details <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-search-location text-blue-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Smart Search</h3>
                <p class="text-gray-600 text-sm">Search by pincode or area name with real-time suggestions</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-database text-green-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Real-time API</h3>
                <p class="text-gray-600 text-sm">Live data from India Post official records</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-lightning text-purple-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Fast Results</h3>
                <p class="text-gray-600 text-sm">Get complete postal information instantly</p>
            </div>
        </div>

        <!-- Popular Searches -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">
                <i class="fas fa-fire text-orange-600 mr-2"></i>
                Popular Searches
            </h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <?php
                $popularSearches = [
                    ['pincode' => '110001', 'area' => 'New Delhi', 'state' => 'Delhi'],
                    ['pincode' => '400001', 'area' => 'Mumbai GPO', 'state' => 'Maharashtra'],
                    ['pincode' => '560001', 'area' => 'Bangalore GPO', 'state' => 'Karnataka'],
                    ['pincode' => '600001', 'area' => 'Chennai GPO', 'state' => 'Tamil Nadu'],
                    ['pincode' => '700001', 'area' => 'Kolkata GPO', 'state' => 'West Bengal'],
                    ['pincode' => '500001', 'area' => 'Hyderabad GPO', 'state' => 'Telangana'],
                    ['pincode' => '380001', 'area' => 'Ahmedabad GPO', 'state' => 'Gujarat'],
                    ['pincode' => '583101', 'area' => 'Ballari', 'state' => 'Karnataka']
                ];
                
                foreach ($popularSearches as $search) {
                    echo '<a href="?search_query=' . $search['pincode'] . '" class="block bg-gray-50 hover:bg-gray-100 border border-gray-200 rounded-lg p-3 transition-colors">';
                    echo '<div class="font-medium text-gray-900">' . htmlspecialchars($search['area']) . '</div>';
                    echo '<div class="text-sm text-gray-600">' . $search['pincode'] . ' • ' . htmlspecialchars($search['state']) . '</div>';
                    echo '</a>';
                }
                ?>
            </div>
        </div>

    </main>

    <?php include_once '../footer.php'; ?>

    <script>
        let searchTimeout;
        
        // Search input handler with debouncing
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const query = e.target.value.trim();
            
            clearTimeout(searchTimeout);
            
            if (query.length >= 3) {
                searchTimeout = setTimeout(() => {
                    fetchSuggestions(query);
                }, 300);
            } else {
                hideSuggestions();
            }
        });
        
        // Hide suggestions when clicking outside
        document.addEventListener('click', function(e) {
            if (!document.getElementById('searchInput').contains(e.target)) {
                hideSuggestions();
            }
        });
        
        // Fetch search suggestions
        function fetchSuggestions(query) {
            fetch(`?action=search&q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    displaySuggestions(data);
                })
                .catch(error => {
                    console.error('Error fetching suggestions:', error);
                    hideSuggestions();
                });
        }
        
        // Display suggestions
        function displaySuggestions(data) {
            const container = document.getElementById('searchSuggestions');
            
            if (!data.results || data.results.length === 0) {
                hideSuggestions();
                return;
            }
            
            let html = '';
            const maxResults = Math.min(5, data.results.length);
            
            for (let i = 0; i < maxResults; i++) {
                const result = data.results[i];
                const pincode = result.Pincode || result.PINCode || '';
                const name = result.Name || '';
                const district = result.District || '';
                const state = result.State || '';
                
                html += `
                    <div class="search-suggestion px-4 py-3 border-b border-gray-100 last:border-b-0" 
                         onclick="selectSuggestion('${pincode}')">
                        <div class="font-medium text-gray-900">${name}</div>
                        <div class="text-sm text-gray-600">${pincode} • ${district}, ${state}</div>
                    </div>
                `;
            }
            
            container.innerHTML = html;
            container.classList.remove('hidden');
        }
        
        // Hide suggestions
        function hideSuggestions() {
            document.getElementById('searchSuggestions').classList.add('hidden');
        }
        
        // Select suggestion
        function selectSuggestion(pincode) {
            document.getElementById('searchInput').value = pincode;
            hideSuggestions();
            document.forms[0].submit();
        }
        
        // Search example
        function searchExample(query) {
            document.getElementById('searchInput').value = query;
            document.forms[0].submit();
        }
    </script>
</body>
</html>