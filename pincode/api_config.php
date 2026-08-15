<?php
/**
 * API Configuration for Pincode System
 * Update your API keys here
 */

class PincodeAPIConfig {
    
    // ====== API KEYS CONFIGURATION ======
    
    // Government Data API (FREE - Get from https://data.gov.in/)
    public static $DATA_GOV_API_KEY = 'YOUR_DATA_GOV_API_KEY_HERE';
    
    // RapidAPI Key (Freemium - Get from https://rapidapi.com/)
    public static $RAPIDAPI_KEY = 'YOUR_RAPIDAPI_KEY_HERE';
    
    // OpenCage Geocoding API (FREE - 2500 requests/day)
    public static $OPENCAGE_API_KEY = 'YOUR_OPENCAGE_KEY_HERE';
    
    // MapBox API Key (FREE - 100k requests/month)
    public static $MAPBOX_ACCESS_TOKEN = 'YOUR_MAPBOX_TOKEN_HERE';
    
    
    // ====== API ENDPOINTS ======
    
    // Free APIs (No key required)
    public static $FREE_APIS = [
        'postalpincode' => 'https://api.postalpincode.in/pincode/{pincode}',
        'zippopotam' => 'https://api.zippopotam.us/in/{pincode}',
        'postalpincode_alt' => 'https://www.postalpincode.in/api/pincode/{pincode}',
        'geocode_xyz' => 'https://geocode.xyz/{pincode}?json=1&region=IN'
    ];
    
    // Premium APIs (Key required)
    public static $PREMIUM_APIS = [
        'data_gov' => 'https://api.data.gov.in/resource/04090aaa-5342-4dcb-b0a6-515d74fff141?api-key={api_key}&format=json&filters[pincode]={pincode}',
        'rapidapi' => 'https://india-pincode-with-latitude-and-longitude.p.rapidapi.com/api/v1/pincode/{pincode}',
        'opencage' => 'https://api.opencagedata.com/geocode/v1/json?q={pincode},India&key={api_key}',
        'mapbox' => 'https://api.mapbox.com/geocoding/v5/mapbox.places/{pincode}.json?access_token={api_key}'
    ];
    
    
    // ====== API CONFIGURATION METHODS ======
    
    /**
     * Get API URL with proper key substitution
     */
    public static function getAPIUrl($apiName, $pincode, $apiKey = null) {
        // Check free APIs first
        if (isset(self::$FREE_APIS[$apiName])) {
            return str_replace('{pincode}', $pincode, self::$FREE_APIS[$apiName]);
        }
        
        // Check premium APIs
        if (isset(self::$PREMIUM_APIS[$apiName])) {
            $url = self::$PREMIUM_APIS[$apiName];
            $url = str_replace('{pincode}', $pincode, $url);
            
            if ($apiKey) {
                $url = str_replace('{api_key}', $apiKey, $url);
            } else {
                // Use configured keys
                switch($apiName) {
                    case 'data_gov':
                        $url = str_replace('{api_key}', self::$DATA_GOV_API_KEY, $url);
                        break;
                    case 'opencage':
                        $url = str_replace('{api_key}', self::$OPENCAGE_API_KEY, $url);
                        break;
                    case 'mapbox':
                        $url = str_replace('{api_key}', self::$MAPBOX_ACCESS_TOKEN, $url);
                        break;
                }
            }
            
            return $url;
        }
        
        return false;
    }
    
    /**
     * Get headers for API requests
     */
    public static function getAPIHeaders($apiName) {
        switch($apiName) {
            case 'rapidapi':
                return [
                    'X-RapidAPI-Key: ' . self::$RAPIDAPI_KEY,
                    'X-RapidAPI-Host: india-pincode-with-latitude-and-longitude.p.rapidapi.com',
                    'Content-Type: application/json'
                ];
            
            case 'data_gov':
            case 'opencage':
            case 'mapbox':
                return [
                    'Content-Type: application/json',
                    'Accept: application/json'
                ];
            
            default:
                return [
                    'Content-Type: application/json',
                    'Accept: application/json',
                    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
                ];
        }
    }
    
    /**
     * Check if API key is configured
     */
    public static function isAPIKeyConfigured($apiName) {
        switch($apiName) {
            case 'data_gov':
                return !empty(self::$DATA_GOV_API_KEY) && self::$DATA_GOV_API_KEY !== 'YOUR_DATA_GOV_API_KEY_HERE';
            case 'rapidapi':
                return !empty(self::$RAPIDAPI_KEY) && self::$RAPIDAPI_KEY !== 'YOUR_RAPIDAPI_KEY_HERE';
            case 'opencage':
                return !empty(self::$OPENCAGE_API_KEY) && self::$OPENCAGE_API_KEY !== 'YOUR_OPENCAGE_KEY_HERE';
            case 'mapbox':
                return !empty(self::$MAPBOX_ACCESS_TOKEN) && self::$MAPBOX_ACCESS_TOKEN !== 'YOUR_MAPBOX_TOKEN_HERE';
            default:
                return true; // Free APIs don't need keys
        }
    }
    
    /**
     * Get all available APIs with their status
     */
    public static function getAPIStatus() {
        $status = [];
        
        // Free APIs
        foreach (self::$FREE_APIS as $name => $url) {
            $status[$name] = [
                'type' => 'free',
                'configured' => true,
                'url' => $url,
                'cost' => 'FREE'
            ];
        }
        
        // Premium APIs
        $premiumStatus = [
            'data_gov' => ['cost' => 'FREE (Registration Required)', 'limit' => 'Government Limits'],
            'rapidapi' => ['cost' => 'Freemium (500/month)', 'limit' => '500 requests/month'],
            'opencage' => ['cost' => 'FREE', 'limit' => '2,500 requests/day'],
            'mapbox' => ['cost' => 'FREE', 'limit' => '100,000 requests/month']
        ];
        
        foreach (self::$PREMIUM_APIS as $name => $url) {
            $status[$name] = [
                'type' => 'premium',
                'configured' => self::isAPIKeyConfigured($name),
                'url' => $url,
                'cost' => $premiumStatus[$name]['cost'] ?? 'Unknown',
                'limit' => $premiumStatus[$name]['limit'] ?? 'Unknown'
            ];
        }
        
        return $status;
    }
}

/**
 * Quick function to get API configuration
 */
function getPincodeAPIConfig() {
    return PincodeAPIConfig::getAPIStatus();
}

/**
 * Display API configuration status
 */
function displayAPIStatus() {
    $status = PincodeAPIConfig::getAPIStatus();
    
    echo "<h2>🔧 API Configuration Status</h2>\n";
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>\n";
    echo "<tr><th>API Name</th><th>Type</th><th>Status</th><th>Cost</th><th>Rate Limit</th></tr>\n";
    
    foreach ($status as $name => $info) {
        $statusIcon = $info['configured'] ? '✅' : '❌';
        $statusText = $info['configured'] ? 'Configured' : 'Not Configured';
        $rowColor = $info['configured'] ? '#e8f5e8' : '#ffe8e8';
        
        echo "<tr style='background-color: {$rowColor};'>";
        echo "<td><strong>{$name}</strong></td>";
        echo "<td>" . ucfirst($info['type']) . "</td>";
        echo "<td>{$statusIcon} {$statusText}</td>";
        echo "<td>{$info['cost']}</td>";
        echo "<td>{$info['limit']}</td>";
        echo "</tr>\n";
    }
    
    echo "</table>\n";
}

// Usage Example:
// include 'api_config.php';
// $url = PincodeAPIConfig::getAPIUrl('postalpincode', '110001');
// $headers = PincodeAPIConfig::getAPIHeaders('rapidapi');
?>