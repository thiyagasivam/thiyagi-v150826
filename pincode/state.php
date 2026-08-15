<?php
/**
 * Pincode State Page Generator
 * Handles URLs like: /pincode/tamil-nadu
 */

class PincodeStatePage {
    private $stateData = [
        'andhra-pradesh' => [
            'name' => 'Andhra Pradesh',
            'districts' => ['anantapur', 'chittoor', 'east-godavari', 'guntur', 'kadapa', 'krishna', 'kurnool', 'nellore', 'prakasam', 'srikakulam', 'visakhapatnam', 'vizianagaram', 'west-godavari']
        ],
        'arunachal-pradesh' => [
            'name' => 'Arunachal Pradesh', 
            'districts' => ['anjaw', 'changlang', 'dibang-valley', 'east-kameng', 'east-siang', 'kamle', 'kra-daadi', 'kurung-kumey', 'lepa-rada', 'lohit', 'longding', 'lower-dibang-valley', 'lower-siang', 'lower-subansiri', 'namsai', 'pakke-kessang', 'papum-pare', 'shi-yomi', 'siang', 'tawang', 'tirap', 'upper-siang', 'upper-subansiri', 'west-kameng', 'west-siang']
        ],
        'assam' => [
            'name' => 'Assam',
            'districts' => ['baksa', 'barpeta', 'biswanath', 'bongaigaon', 'cachar', 'charaideo', 'chirang', 'darrang', 'dhemaji', 'dhubri', 'dibrugarh', 'dima-hasao', 'goalpara', 'golaghat', 'hailakandi', 'hojai', 'jorhat', 'kamrup', 'kamrup-metropolitan', 'karbi-anglong', 'karimganj', 'kokrajhar', 'lakhimpur', 'majuli', 'morigaon', 'nagaon', 'nalbari', 'sivasagar', 'sonitpur', 'south-salmara-mankachar', 'tinsukia', 'udalguri', 'west-karbi-anglong']
        ],
        'bihar' => [
            'name' => 'Bihar',
            'districts' => ['araria', 'arwal', 'aurangabad', 'banka', 'begusarai', 'bhagalpur', 'bhojpur', 'buxar', 'darbhanga', 'east-champaran', 'gaya', 'gopalganj', 'jamui', 'jehanabad', 'kaimur', 'katihar', 'khagaria', 'kishanganj', 'lakhisarai', 'madhepura', 'madhubani', 'munger', 'muzaffarpur', 'nalanda', 'nawada', 'patna', 'purnia', 'rohtas', 'saharsa', 'samastipur', 'saran', 'sheikhpura', 'sheohar', 'sitamarhi', 'siwan', 'supaul', 'vaishali', 'west-champaran']
        ],
        'chhattisgarh' => [
            'name' => 'Chhattisgarh',
            'districts' => ['balod', 'baloda-bazar', 'balrampur', 'bastar', 'bemetara', 'bijapur', 'bilaspur', 'dantewada', 'dhamtari', 'durg', 'gariaband', 'gaurela-pendra-marwahi', 'janjgir-champa', 'jashpur', 'kabirdham', 'kanker', 'kondagaon', 'korba', 'koriya', 'mahasamund', 'mungeli', 'narayanpur', 'raigarh', 'raipur', 'rajnandgaon', 'sukma', 'surajpur', 'surguja']
        ],
        'goa' => [
            'name' => 'Goa',
            'districts' => ['north-goa', 'south-goa']
        ],
        'gujarat' => [
            'name' => 'Gujarat',
            'districts' => ['ahmedabad', 'amreli', 'anand', 'aravalli', 'banaskantha', 'bharuch', 'bhavnagar', 'botad', 'chhota-udaipur', 'dahod', 'dang', 'devbhoomi-dwarka', 'gandhinagar', 'gir-somnath', 'jamnagar', 'junagadh', 'kachchh', 'kheda', 'mahisagar', 'mehsana', 'morbi', 'narmada', 'navsari', 'panchmahal', 'patan', 'porbandar', 'rajkot', 'sabarkantha', 'surat', 'surendranagar', 'tapi', 'vadodara', 'valsad']
        ],
        'haryana' => [
            'name' => 'Haryana',
            'districts' => ['ambala', 'bhiwani', 'charkhi-dadri', 'faridabad', 'fatehabad', 'gurugram', 'hisar', 'jhajjar', 'jind', 'kaithal', 'karnal', 'kurukshetra', 'mahendragarh', 'mewat', 'palwal', 'panchkula', 'panipat', 'rewari', 'rohtak', 'sirsa', 'sonipat', 'yamunanagar']
        ],
        'himachal-pradesh' => [
            'name' => 'Himachal Pradesh',
            'districts' => ['bilaspur', 'chamba', 'hamirpur', 'kangra', 'kinnaur', 'kullu', 'lahaul-spiti', 'mandi', 'shimla', 'sirmaur', 'solan', 'una']
        ],
        'jharkhand' => [
            'name' => 'Jharkhand',
            'districts' => ['bokaro', 'chatra', 'deoghar', 'dhanbad', 'dumka', 'east-singhbhum', 'garhwa', 'giridih', 'godda', 'gumla', 'hazaribagh', 'jamtara', 'khunti', 'koderma', 'latehar', 'lohardaga', 'pakur', 'palamu', 'ramgarh', 'ranchi', 'sahebganj', 'seraikela-kharsawan', 'simdega', 'west-singhbhum']
        ],
        'karnataka' => [
            'name' => 'Karnataka',
            'districts' => ['bagalkot', 'ballari', 'belagavi', 'bengaluru-rural', 'bengaluru-urban', 'bidar', 'chamarajanagar', 'chikballapur', 'chikkamagaluru', 'chitradurga', 'dakshina-kannada', 'davanagere', 'dharwad', 'gadag', 'hassan', 'haveri', 'kalaburagi', 'kodagu', 'kolar', 'koppal', 'mandya', 'mysuru', 'raichur', 'ramanagara', 'shivamogga', 'tumakuru', 'udupi', 'uttara-kannada', 'vijayapura', 'yadgir']
        ],
        'kerala' => [
            'name' => 'Kerala',
            'districts' => ['alappuzha', 'ernakulam', 'idukki', 'kannur', 'kasaragod', 'kollam', 'kottayam', 'kozhikode', 'malappuram', 'palakkad', 'pathanamthitta', 'thiruvananthapuram', 'thrissur', 'wayanad']
        ],
        'madhya-pradesh' => [
            'name' => 'Madhya Pradesh',
            'districts' => ['agar-malwa', 'alirajpur', 'anuppur', 'ashoknagar', 'balaghat', 'barwani', 'betul', 'bhind', 'bhopal', 'burhanpur', 'chhatarpur', 'chhindwara', 'damoh', 'datia', 'dewas', 'dhar', 'dindori', 'guna', 'gwalior', 'harda', 'hoshangabad', 'indore', 'jabalpur', 'jhabua', 'katni', 'khandwa', 'khargone', 'mandla', 'mandsaur', 'morena', 'narsinghpur', 'neemuch', 'panna', 'raisen', 'rajgarh', 'ratlam', 'rewa', 'sagar', 'satna', 'sehore', 'seoni', 'shahdol', 'shajapur', 'sheopur', 'shivpuri', 'sidhi', 'singrauli', 'tikamgarh', 'ujjain', 'umaria', 'vidisha']
        ],
        'maharashtra' => [
            'name' => 'Maharashtra',
            'districts' => ['ahmednagar', 'akola', 'amravati', 'aurangabad', 'beed', 'bhandara', 'buldhana', 'chandrapur', 'dhule', 'gadchiroli', 'gondia', 'hingoli', 'jalgaon', 'jalna', 'kolhapur', 'latur', 'mumbai-city', 'mumbai-suburban', 'nagpur', 'nanded', 'nandurbar', 'nashik', 'osmanabad', 'palghar', 'parbhani', 'pune', 'raigad', 'ratnagiri', 'sangli', 'satara', 'sindhudurg', 'solapur', 'thane', 'wardha', 'washim', 'yavatmal']
        ],
        'manipur' => [
            'name' => 'Manipur',
            'districts' => ['bishnupur', 'chandel', 'churachandpur', 'imphal-east', 'imphal-west', 'jiribam', 'kakching', 'kamjong', 'kangpokpi', 'noney', 'pherzawl', 'senapati', 'tamenglong', 'tengnoupal', 'thoubal', 'ukhrul']
        ],
        'meghalaya' => [
            'name' => 'Meghalaya',
            'districts' => ['east-garo-hills', 'east-jaintia-hills', 'east-khasi-hills', 'north-garo-hills', 'ri-bhoi', 'south-garo-hills', 'south-west-garo-hills', 'south-west-khasi-hills', 'west-garo-hills', 'west-jaintia-hills', 'west-khasi-hills']
        ],
        'mizoram' => [
            'name' => 'Mizoram',
            'districts' => ['aizawl', 'champhai', 'hnahthial', 'kolasib', 'khawzawl', 'lawngtlai', 'lunglei', 'mamit', 'saiha', 'saitual', 'serchhip']
        ],
        'nagaland' => [
            'name' => 'Nagaland',
            'districts' => ['dimapur', 'kiphire', 'kohima', 'longleng', 'mokokchung', 'mon', 'noklak', 'peren', 'phek', 'tuensang', 'wokha', 'zunheboto']
        ],
        'odisha' => [
            'name' => 'Odisha',
            'districts' => ['angul', 'balangir', 'balasore', 'bargarh', 'bhadrak', 'boudh', 'cuttack', 'deogarh', 'dhenkanal', 'gajapati', 'ganjam', 'jagatsinghpur', 'jajpur', 'jharsuguda', 'kalahandi', 'kandhamal', 'kendrapara', 'kendujhar', 'khordha', 'koraput', 'malkangiri', 'mayurbhanj', 'nabarangpur', 'nayagarh', 'nuapada', 'puri', 'rayagada', 'sambalpur', 'subarnapur', 'sundargarh']
        ],
        'punjab' => [
            'name' => 'Punjab',
            'districts' => ['amritsar', 'barnala', 'bathinda', 'faridkot', 'fatehgarh-sahib', 'fazilka', 'ferozepur', 'gurdaspur', 'hoshiarpur', 'jalandhar', 'kapurthala', 'ludhiana', 'mansa', 'moga', 'mohali', 'muktsar', 'pathankot', 'patiala', 'rupnagar', 'sangrur', 'shaheed-bhagat-singh-nagar', 'tarn-taran']
        ],
        'rajasthan' => [
            'name' => 'Rajasthan',
            'districts' => ['ajmer', 'alwar', 'banswara', 'baran', 'barmer', 'bharatpur', 'bhilwara', 'bikaner', 'bundi', 'chittorgarh', 'churu', 'dausa', 'dholpur', 'dungarpur', 'ganganagar', 'hanumangarh', 'jaipur', 'jaisalmer', 'jalore', 'jhalawar', 'jhunjhunu', 'jodhpur', 'karauli', 'kota', 'nagaur', 'pali', 'pratapgarh', 'rajsamand', 'sawai-madhopur', 'sikar', 'sirohi', 'tonk', 'udaipur']
        ],
        'sikkim' => [
            'name' => 'Sikkim',
            'districts' => ['east-sikkim', 'north-sikkim', 'south-sikkim', 'west-sikkim']
        ],
        'tamil-nadu' => [
            'name' => 'Tamil Nadu',
            'districts' => ['ariyalur', 'chengalpattu', 'chennai', 'coimbatore', 'cuddalore', 'dharmapuri', 'dindigul', 'erode', 'kallakurichi', 'kanchipuram', 'kanyakumari', 'karur', 'krishnagiri', 'madurai', 'mayiladuthurai', 'nagapattinam', 'namakkal', 'nilgiris', 'perambalur', 'pudukkottai', 'ramanathapuram', 'ranipet', 'salem', 'sivaganga', 'tenkasi', 'thanjavur', 'theni', 'thoothukudi', 'tiruchirappalli', 'tirunelveli', 'tirupattur', 'tiruppur', 'tiruvallur', 'tiruvannamalai', 'tiruvarur', 'vellore', 'viluppuram', 'virudhunagar']
        ],
        'telangana' => [
            'name' => 'Telangana',
            'districts' => ['adilabad', 'bhadradri-kothagudem', 'hyderabad', 'jagtial', 'jangaon', 'jayashankar-bhupalpally', 'jogulamba-gadwal', 'kamareddy', 'karimnagar', 'khammam', 'komaram-bheem', 'mahabubabad', 'mahabubnagar', 'mancherial', 'medak', 'medchal-malkajgiri', 'mulugu', 'nagarkurnool', 'nalgonda', 'narayanpet', 'nirmal', 'nizamabad', 'peddapalli', 'rajanna-sircilla', 'rangareddy', 'sangareddy', 'siddipet', 'suryapet', 'vikarabad', 'wanaparthy', 'warangal-rural', 'warangal-urban', 'yadadri-bhuvanagiri']
        ],
        'tripura' => [
            'name' => 'Tripura',
            'districts' => ['dhalai', 'gomati', 'khowai', 'north-tripura', 'sepahijala', 'south-tripura', 'unakoti', 'west-tripura']
        ],
        'uttar-pradesh' => [
            'name' => 'Uttar Pradesh',
            'districts' => ['agra', 'aligarh', 'ambedkar-nagar', 'amethi', 'amroha', 'auraiya', 'ayodhya', 'azamgarh', 'baghpat', 'bahraich', 'ballia', 'balrampur', 'banda', 'barabanki', 'bareilly', 'basti', 'bhadohi', 'bijnor', 'budaun', 'bulandshahr', 'chandauli', 'chitrakoot', 'deoria', 'etah', 'etawah', 'farrukhabad', 'fatehpur', 'firozabad', 'gautam-buddha-nagar', 'ghaziabad', 'ghazipur', 'gonda', 'gorakhpur', 'hamirpur', 'hapur', 'hardoi', 'hathras', 'jalaun', 'jaunpur', 'jhansi', 'kannauj', 'kanpur-dehat', 'kanpur-nagar', 'kasganj', 'kaushambi', 'kheri', 'kushinagar', 'lalitpur', 'lucknow', 'maharajganj', 'mahoba', 'mainpuri', 'mathura', 'mau', 'meerut', 'mirzapur', 'moradabad', 'muzaffarnagar', 'pilibhit', 'pratapgarh', 'prayagraj', 'raebareli', 'rampur', 'saharanpur', 'sambhal', 'sant-kabir-nagar', 'shahjahanpur', 'shamli', 'shrawasti', 'siddharthnagar', 'sitapur', 'sonbhadra', 'sultanpur', 'unnao', 'varanasi']
        ],
        'uttarakhand' => [
            'name' => 'Uttarakhand',
            'districts' => ['almora', 'bageshwar', 'chamoli', 'champawat', 'dehradun', 'haridwar', 'nainital', 'pauri-garhwal', 'pithoragarh', 'rudraprayag', 'tehri-garhwal', 'udham-singh-nagar', 'uttarkashi']
        ],
        'west-bengal' => [
            'name' => 'West Bengal',
            'districts' => ['alipurduar', 'bankura', 'birbhum', 'cooch-behar', 'dakshin-dinajpur', 'darjeeling', 'hooghly', 'howrah', 'jalpaiguri', 'jhargram', 'kalimpong', 'kolkata', 'malda', 'murshidabad', 'nadia', 'north-24-parganas', 'paschim-bardhaman', 'paschim-medinipur', 'purba-bardhaman', 'purba-medinipur', 'purulia', 'south-24-parganas', 'uttar-dinajpur']
        ],
        
        // Union Territories
        'andaman-nicobar-islands' => [
            'name' => 'Andaman and Nicobar Islands',
            'districts' => ['nicobar', 'north-middle-andaman', 'south-andaman']
        ],
        'chandigarh' => [
            'name' => 'Chandigarh',
            'districts' => ['chandigarh']
        ],
        'dadra-nagar-haveli-daman-diu' => [
            'name' => 'Dadra and Nagar Haveli and Daman and Diu',
            'districts' => ['dadra-nagar-haveli', 'daman', 'diu']
        ],
        'delhi' => [
            'name' => 'Delhi',
            'districts' => ['central-delhi', 'east-delhi', 'new-delhi', 'north-delhi', 'north-east-delhi', 'north-west-delhi', 'shahdara', 'south-delhi', 'south-east-delhi', 'south-west-delhi', 'west-delhi']
        ],
        'jammu-kashmir' => [
            'name' => 'Jammu and Kashmir',
            'districts' => ['anantnag', 'bandipora', 'baramulla', 'budgam', 'doda', 'ganderbal', 'jammu', 'kathua', 'kishtwar', 'kulgam', 'kupwara', 'poonch', 'pulwama', 'rajouri', 'ramban', 'reasi', 'samba', 'shopian', 'srinagar', 'udhampur']
        ],
        'ladakh' => [
            'name' => 'Ladakh',
            'districts' => ['kargil', 'leh']
        ],
        'lakshadweep' => [
            'name' => 'Lakshadweep',
            'districts' => ['lakshadweep']
        ],
        'puducherry' => [
            'name' => 'Puducherry',
            'districts' => ['karaikal', 'mahe', 'puducherry', 'yanam']
        ]
    ];
    
    public function generateStatePage($stateSlug) {
        if (!isset($this->stateData[$stateSlug])) {
            return $this->generate404();
        }
        
        $state = $this->stateData[$stateSlug];
        $stateName = $state['name'];
        $districts = $state['districts'];
        
        $title = "Pincode Directory for {$stateName} - All Districts & Areas";
        $description = "Complete pincode directory for {$stateName} state. Find postal codes for all districts and areas in {$stateName}. Search by district, area name, or pincode number.";
        
        ob_start();
        ?>
    
    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($title); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($stateName); ?> pincode, <?php echo $stateSlug; ?> postal code, India post <?php echo htmlspecialchars($stateName); ?>, pincode directory">
    <meta name="author" content="Thiyagi">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/pincode/<?php echo $stateSlug; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/pincode/<?php echo $stateSlug; ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">

    <!-- CSS Framework -->
<body class="bg-gray-50">
    <?php include_once '../header.php'; ?>
    
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600">Home</a></li>
                <li><i class="fas fa-chevron-right text-gray-400"></i></li>
                <li><a href="/pincode" class="hover:text-blue-600">Pincode</a></li>
                <li><i class="fas fa-chevron-right text-gray-400"></i></li>
                <li class="text-gray-900"><?php echo htmlspecialchars($stateName); ?></li>
            </ol>
        </nav>

        <!-- Page Header -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2"><?php echo htmlspecialchars($title); ?></h1>
            <p class="text-gray-600 text-lg"><?php echo htmlspecialchars($description); ?></p>
        </div>

        <!-- Districts Grid -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                Districts in <?php echo htmlspecialchars($stateName); ?>
            </h2>
            
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-4">
                <?php foreach ($districts as $district): ?>
                    <a href="/pincode/<?php echo $stateSlug; ?>/<?php echo $district; ?>" 
                       class="block bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-lg p-4 text-center transition-colors group">
                        <i class="fas fa-map-pin text-blue-600 text-xl mb-2 group-hover:scale-110 transition-transform"></i>
                        <div class="font-semibold text-blue-900 capitalize">
                            <?php echo str_replace('-', ' ', $district); ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <?php include_once '../footer.php'; ?>
</body>
</html>
        <?php
        return ob_get_clean();
    }
    
    private function generate404() {
        // Log the 404 for debugging
        error_log("State page 404: " . ($_GET['state'] ?? 'unknown'));
        
        // Redirect to main pincode page instead of hard 404
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /pincode/');
        exit;
    }
}

// Handle the request
if (isset($_GET['state'])) {
    $generator = new PincodeStatePage();
    echo $generator->generateStatePage($_GET['state']);
} else {
    header('Location: /pincode');
    exit;
}
?>