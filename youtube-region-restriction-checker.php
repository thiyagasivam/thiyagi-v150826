<?php include 'header.php';?>

<?php
/**
 * YouTube Region Restriction Checker Tool
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to check region restrictions for a YouTube video
function checkRegionRestrictions($videoId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/videos?part=contentDetails,snippet,statistics&id=$videoId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);

    if (isset($data['items'][0])) {
        $item = $data['items'][0];
        $contentDetails = $item['contentDetails'] ?? [];
        $snippet = $item['snippet'] ?? [];
        $stats = $item['statistics'] ?? [];
        
        return [
            'title' => $snippet['title'] ?? '',
            'channelTitle' => $snippet['channelTitle'] ?? '',
            'publishedAt' => $snippet['publishedAt'] ?? '',
            'viewCount' => $stats['viewCount'] ?? 0,
            'regionRestriction' => $contentDetails['regionRestriction'] ?? null,
            'hasRestrictions' => isset($contentDetails['regionRestriction'])
        ];
    }
    return null;
}

// Function to extract video ID from YouTube URL
function extractVideoId($url) {
    $patterns = [
        '/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/',
        '/youtu\.be\/([a-zA-Z0-9_-]+)/',
        '/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/',
    ];
    
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $url, $matches)) {
            return $matches[1];
        }
    }
    return false;
}

// Function to get country name from country code
function getCountryName($code) {
    $countries = [
        'AD' => 'Andorra', 'AE' => 'United Arab Emirates', 'AF' => 'Afghanistan', 'AG' => 'Antigua and Barbuda',
        'AI' => 'Anguilla', 'AL' => 'Albania', 'AM' => 'Armenia', 'AO' => 'Angola', 'AQ' => 'Antarctica',
        'AR' => 'Argentina', 'AS' => 'American Samoa', 'AT' => 'Austria', 'AU' => 'Australia', 'AW' => 'Aruba',
        'AX' => 'Åland Islands', 'AZ' => 'Azerbaijan', 'BA' => 'Bosnia and Herzegovina', 'BB' => 'Barbados',
        'BD' => 'Bangladesh', 'BE' => 'Belgium', 'BF' => 'Burkina Faso', 'BG' => 'Bulgaria', 'BH' => 'Bahrain',
        'BI' => 'Burundi', 'BJ' => 'Benin', 'BL' => 'Saint Barthélemy', 'BM' => 'Bermuda', 'BN' => 'Brunei',
        'BO' => 'Bolivia', 'BQ' => 'Bonaire', 'BR' => 'Brazil', 'BS' => 'Bahamas', 'BT' => 'Bhutan',
        'BV' => 'Bouvet Island', 'BW' => 'Botswana', 'BY' => 'Belarus', 'BZ' => 'Belize', 'CA' => 'Canada',
        'CC' => 'Cocos Islands', 'CD' => 'Congo (DRC)', 'CF' => 'Central African Republic', 'CG' => 'Congo',
        'CH' => 'Switzerland', 'CI' => 'Côte d\'Ivoire', 'CK' => 'Cook Islands', 'CL' => 'Chile',
        'CM' => 'Cameroon', 'CN' => 'China', 'CO' => 'Colombia', 'CR' => 'Costa Rica', 'CU' => 'Cuba',
        'CV' => 'Cape Verde', 'CW' => 'Curaçao', 'CX' => 'Christmas Island', 'CY' => 'Cyprus', 'CZ' => 'Czech Republic',
        'DE' => 'Germany', 'DJ' => 'Djibouti', 'DK' => 'Denmark', 'DM' => 'Dominica', 'DO' => 'Dominican Republic',
        'DZ' => 'Algeria', 'EC' => 'Ecuador', 'EE' => 'Estonia', 'EG' => 'Egypt', 'EH' => 'Western Sahara',
        'ER' => 'Eritrea', 'ES' => 'Spain', 'ET' => 'Ethiopia', 'FI' => 'Finland', 'FJ' => 'Fiji',
        'FK' => 'Falkland Islands', 'FM' => 'Micronesia', 'FO' => 'Faroe Islands', 'FR' => 'France',
        'GA' => 'Gabon', 'GB' => 'United Kingdom', 'GD' => 'Grenada', 'GE' => 'Georgia', 'GF' => 'French Guiana',
        'GG' => 'Guernsey', 'GH' => 'Ghana', 'GI' => 'Gibraltar', 'GL' => 'Greenland', 'GM' => 'Gambia',
        'GN' => 'Guinea', 'GP' => 'Guadeloupe', 'GQ' => 'Equatorial Guinea', 'GR' => 'Greece',
        'GS' => 'South Georgia', 'GT' => 'Guatemala', 'GU' => 'Guam', 'GW' => 'Guinea-Bissau', 'GY' => 'Guyana',
        'HK' => 'Hong Kong', 'HM' => 'Heard Island', 'HN' => 'Honduras', 'HR' => 'Croatia', 'HT' => 'Haiti',
        'HU' => 'Hungary', 'ID' => 'Indonesia', 'IE' => 'Ireland', 'IL' => 'Israel', 'IM' => 'Isle of Man',
        'IN' => 'India', 'IO' => 'British Indian Ocean Territory', 'IQ' => 'Iraq', 'IR' => 'Iran', 'IS' => 'Iceland',
        'IT' => 'Italy', 'JE' => 'Jersey', 'JM' => 'Jamaica', 'JO' => 'Jordan', 'JP' => 'Japan',
        'KE' => 'Kenya', 'KG' => 'Kyrgyzstan', 'KH' => 'Cambodia', 'KI' => 'Kiribati', 'KM' => 'Comoros',
        'KN' => 'Saint Kitts and Nevis', 'KP' => 'North Korea', 'KR' => 'South Korea', 'KW' => 'Kuwait',
        'KY' => 'Cayman Islands', 'KZ' => 'Kazakhstan', 'LA' => 'Laos', 'LB' => 'Lebanon', 'LC' => 'Saint Lucia',
        'LI' => 'Liechtenstein', 'LK' => 'Sri Lanka', 'LR' => 'Liberia', 'LS' => 'Lesotho', 'LT' => 'Lithuania',
        'LU' => 'Luxembourg', 'LV' => 'Latvia', 'LY' => 'Libya', 'MA' => 'Morocco', 'MC' => 'Monaco',
        'MD' => 'Moldova', 'ME' => 'Montenegro', 'MF' => 'Saint Martin', 'MG' => 'Madagascar', 'MH' => 'Marshall Islands',
        'MK' => 'North Macedonia', 'ML' => 'Mali', 'MM' => 'Myanmar', 'MN' => 'Mongolia', 'MO' => 'Macao',
        'MP' => 'Northern Mariana Islands', 'MQ' => 'Martinique', 'MR' => 'Mauritania', 'MS' => 'Montserrat',
        'MT' => 'Malta', 'MU' => 'Mauritius', 'MV' => 'Maldives', 'MW' => 'Malawi', 'MX' => 'Mexico',
        'MY' => 'Malaysia', 'MZ' => 'Mozambique', 'NA' => 'Namibia', 'NC' => 'New Caledonia', 'NE' => 'Niger',
        'NF' => 'Norfolk Island', 'NG' => 'Nigeria', 'NI' => 'Nicaragua', 'NL' => 'Netherlands', 'NO' => 'Norway',
        'NP' => 'Nepal', 'NR' => 'Nauru', 'NU' => 'Niue', 'NZ' => 'New Zealand', 'OM' => 'Oman',
        'PA' => 'Panama', 'PE' => 'Peru', 'PF' => 'French Polynesia', 'PG' => 'Papua New Guinea', 'PH' => 'Philippines',
        'PK' => 'Pakistan', 'PL' => 'Poland', 'PM' => 'Saint Pierre and Miquelon', 'PN' => 'Pitcairn',
        'PR' => 'Puerto Rico', 'PS' => 'Palestinian Territory', 'PT' => 'Portugal', 'PW' => 'Palau', 'PY' => 'Paraguay',
        'QA' => 'Qatar', 'RE' => 'Réunion', 'RO' => 'Romania', 'RS' => 'Serbia', 'RU' => 'Russia', 'RW' => 'Rwanda',
        'SA' => 'Saudi Arabia', 'SB' => 'Solomon Islands', 'SC' => 'Seychelles', 'SD' => 'Sudan', 'SE' => 'Sweden',
        'SG' => 'Singapore', 'SH' => 'Saint Helena', 'SI' => 'Slovenia', 'SJ' => 'Svalbard and Jan Mayen',
        'SK' => 'Slovakia', 'SL' => 'Sierra Leone', 'SM' => 'San Marino', 'SN' => 'Senegal', 'SO' => 'Somalia',
        'SR' => 'Suriname', 'SS' => 'South Sudan', 'ST' => 'São Tomé and Príncipe', 'SV' => 'El Salvador',
        'SX' => 'Sint Maarten', 'SY' => 'Syria', 'SZ' => 'Eswatini', 'TC' => 'Turks and Caicos Islands',
        'TD' => 'Chad', 'TF' => 'French Southern Territories', 'TG' => 'Togo', 'TH' => 'Thailand', 'TJ' => 'Tajikistan',
        'TK' => 'Tokelau', 'TL' => 'Timor-Leste', 'TM' => 'Turkmenistan', 'TN' => 'Tunisia', 'TO' => 'Tonga',
        'TR' => 'Turkey', 'TT' => 'Trinidad and Tobago', 'TV' => 'Tuvalu', 'TW' => 'Taiwan', 'TZ' => 'Tanzania',
        'UA' => 'Ukraine', 'UG' => 'Uganda', 'UM' => 'United States Minor Outlying Islands', 'US' => 'United States',
        'UY' => 'Uruguay', 'UZ' => 'Uzbekistan', 'VA' => 'Vatican City', 'VC' => 'Saint Vincent and the Grenadines',
        'VE' => 'Venezuela', 'VG' => 'British Virgin Islands', 'VI' => 'U.S. Virgin Islands', 'VN' => 'Vietnam',
        'VU' => 'Vanuatu', 'WF' => 'Wallis and Futuna', 'WS' => 'Samoa', 'YE' => 'Yemen', 'YT' => 'Mayotte',
        'ZA' => 'South Africa', 'ZM' => 'Zambia', 'ZW' => 'Zimbabwe'
    ];
    
    return $countries[$code] ?? $code;
}

// Handle form submission
$videoData = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = trim($_POST['video_url'] ?? '');
    
    if (empty($videoUrl)) {
        $error = 'Please enter a YouTube video URL.';
    } else {
        $videoId = extractVideoId($videoUrl);
        
        if (!$videoId) {
            $error = 'Invalid YouTube video URL. Please enter a valid YouTube URL.';
        } else {
            $videoData = checkRegionRestrictions($videoId, $apiKey);
            if (!$videoData) {
                $error = 'Unable to fetch video data. Please check the URL and try again.';
            }
        }
    }
}
?>
    <title>Free YouTube Region Restriction Checker 2026 - Check Video Availability</title>
    <meta name="description" content="Check YouTube video region restrictions and availability worldwide. Professional tool to verify if videos are blocked in specific countries (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Region Restriction Checker",
        "description": "Check YouTube video region restrictions and availability worldwide. Professional tool to verify if videos are blocked in specific countries.",
        "url": "https://www.thiyagi.com/youtube-region-restriction-checker",
        "applicationCategory": "WebApplication",
        "operatingSystem": "Any",
        "permissions": "browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "provider": {
            "@type": "Organization",
            "name": "Thiyagi",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.thiyagi.com"
        },{
            "@type": "ListItem",
            "position": 2,
            "name": "YouTube Region Restriction Checker",
            "item": "https://www.thiyagi.com/youtube-region-restriction-checker"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "Why are some YouTube videos region-blocked?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "YouTube videos can be region-blocked due to copyright restrictions, licensing agreements, local laws, content policies, or creator preferences. These restrictions are set by content owners or legal requirements."
            }
        },{
            "@type": "Question",
            "name": "How can I check if my video is blocked in certain countries?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Use our region restriction checker by entering your YouTube video URL. We'll show you if your video has any geographical restrictions and which countries are affected."
            }
        },{
            "@type": "Question",
            "name": "Can I remove region restrictions from my YouTube videos?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "As a video creator, you can manage region restrictions in YouTube Studio under the video's visibility settings, unless the restrictions are due to copyright claims or legal requirements."
            }
        }]
    }
    </script>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Region Restriction Checker</h1>
            <p class="text-gray-600">Check video availability and region restrictions worldwide</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="video_url" class="block text-gray-700 font-medium mb-2">Enter YouTube Video URL:</label>
                    <input type="url" name="video_url" id="video_url" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="https://www.youtube.com/watch?v=VIDEO_ID" 
                           value="<?= htmlspecialchars($_POST['video_url'] ?? '') ?>"
                           required>
                    <p class="text-gray-500 text-sm mt-1">We'll check if this video is available worldwide or has regional restrictions</p>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Check Restrictions
                    </button>
                    <button type="button" onclick="document.getElementById('video_url').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($videoData) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Region Restriction Analysis</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($videoData)): ?>
                    <div class="space-y-6">
                        <!-- Video Information -->
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-semibold text-blue-800 mb-2">Video Information</h3>
                            <div class="space-y-2">
                                <p><span class="font-medium text-blue-700">Title:</span> <?= htmlspecialchars($videoData['title']) ?></p>
                                <p><span class="font-medium text-blue-700">Channel:</span> <?= htmlspecialchars($videoData['channelTitle']) ?></p>
                                <?php if (!empty($videoData['publishedAt'])): ?>
                                <p><span class="font-medium text-blue-700">Published:</span> <?= date('F j, Y', strtotime($videoData['publishedAt'])) ?></p>
                                <?php endif; ?>
                                <p><span class="font-medium text-blue-700">Views:</span> <?= number_format($videoData['viewCount']) ?></p>
                            </div>
                        </div>

                        <!-- Restriction Status -->
                        <?php if (!$videoData['hasRestrictions']): ?>
                        <div class="bg-green-50 p-6 rounded-lg border border-green-200 text-center">
                            <div class="text-green-600 mb-4">
                                <svg class="w-16 h-16 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-green-800 mb-2">✅ Globally Available</h3>
                            <p class="text-green-700">This video has no region restrictions and is available worldwide!</p>
                        </div>
                        <?php else: ?>
                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <div class="text-red-600 mb-4 text-center">
                                <svg class="w-16 h-16 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 008.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-red-800 mb-4 text-center">🚫 Region Restrictions Found</h3>
                            
                            <!-- Allowed Countries -->
                            <?php if (isset($videoData['regionRestriction']['allowed'])): ?>
                            <div class="mb-6">
                                <h4 class="text-lg font-semibold text-green-700 mb-3">✅ Available in these countries:</h4>
                                <div class="grid md:grid-cols-3 gap-2">
                                    <?php foreach ($videoData['regionRestriction']['allowed'] as $countryCode): ?>
                                    <div class="bg-green-100 px-3 py-2 rounded text-sm">
                                        <span class="font-medium"><?= htmlspecialchars($countryCode) ?></span> - <?= htmlspecialchars(getCountryName($countryCode)) ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <p class="text-green-600 text-sm mt-2">
                                    Available in <?= count($videoData['regionRestriction']['allowed']) ?> countries only
                                </p>
                            </div>
                            <?php endif; ?>
                            
                            <!-- Blocked Countries -->
                            <?php if (isset($videoData['regionRestriction']['blocked'])): ?>
                            <div>
                                <h4 class="text-lg font-semibold text-red-700 mb-3">❌ Blocked in these countries:</h4>
                                <div class="grid md:grid-cols-3 gap-2">
                                    <?php foreach ($videoData['regionRestriction']['blocked'] as $countryCode): ?>
                                    <div class="bg-red-100 px-3 py-2 rounded text-sm">
                                        <span class="font-medium"><?= htmlspecialchars($countryCode) ?></span> - <?= htmlspecialchars(getCountryName($countryCode)) ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <p class="text-red-600 text-sm mt-2">
                                    Blocked in <?= count($videoData['regionRestriction']['blocked']) ?> countries
                                </p>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About Region Restrictions</h2>
            <div class="prose max-w-none text-gray-700">
                <p class="mb-4">YouTube region restrictions (geo-blocking) limit where videos can be viewed based on the viewer's geographic location. These restrictions exist for various legal, licensing, and business reasons.</p>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-blue-800 mb-2">🔍 Common Reasons for Restrictions:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Copyright and licensing agreements</li>
                            <li>Music distribution rights</li>
                            <li>Local content regulations</li>
                            <li>Government censorship</li>
                            <li>Creator's choice</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-green-800 mb-2">💡 For Content Creators:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Check restrictions in YouTube Studio</li>
                            <li>Review copyright claims</li>
                            <li>Consider licensing issues</li>
                            <li>Monitor global audience access</li>
                            <li>Use royalty-free content when possible</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Understanding the Results</h2>
            <div class="space-y-4">
                <div class="flex items-start space-x-3 p-3 bg-green-50 rounded-lg">
                    <div class="text-green-600">✅</div>
                    <div>
                        <strong class="text-green-800">Globally Available:</strong>
                        <p class="text-green-700 text-sm">The video can be viewed from anywhere in the world without restrictions.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3 p-3 bg-blue-50 rounded-lg">
                    <div class="text-blue-600">🌍</div>
                    <div>
                        <strong class="text-blue-800">Available In:</strong>
                        <p class="text-blue-700 text-sm">Video is only accessible in the listed countries (whitelist).</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg">
                    <div class="text-red-600">❌</div>
                    <div>
                        <strong class="text-red-800">Blocked In:</strong>
                        <p class="text-red-700 text-sm">Video is not accessible in the listed countries (blacklist).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php';?>
</html>