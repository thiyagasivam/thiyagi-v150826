<?php
if (!function_exists('thiyagi_fix_misplaced_seo_tags')) {
  function thiyagi_fix_misplaced_seo_tags($html) {
    if (stripos($html, '</head>') === false) {
      return $html;
    }

    $headClosePos = stripos($html, '</head>');
    $headPart = substr($html, 0, $headClosePos);
    $tailPart = substr($html, $headClosePos);

    $titleTag = '';
    $descriptionTag = '';
    $keywordsTag = '';

    if (preg_match('/<title\b[^>]*>.*?<\/title>/is', $tailPart, $match)) {
      $titleTag = trim($match[0]);
      $tailPart = preg_replace('/<title\b[^>]*>.*?<\/title>\s*/is', '', $tailPart, 1);
    }

    if (preg_match('/<meta\s+name=["\']description["\'][^>]*>/is', $tailPart, $match)) {
      $descriptionTag = trim($match[0]);
      $tailPart = preg_replace('/<meta\s+name=["\']description["\'][^>]*>\s*/is', '', $tailPart, 1);
    }

    if (preg_match('/<meta\s+name=["\']keywords["\'][^>]*>/is', $tailPart, $match)) {
      $keywordsTag = trim($match[0]);
      $tailPart = preg_replace('/<meta\s+name=["\']keywords["\'][^>]*>\s*/is', '', $tailPart, 1);
    }

    $inserts = [];
    if ($titleTag !== '' && !preg_match('/<title\b[^>]*>.*?<\/title>/is', $headPart)) {
      $inserts[] = '  ' . $titleTag;
    }
    if ($descriptionTag !== '' && !preg_match('/<meta\s+name=["\']description["\'][^>]*>/is', $headPart)) {
      $inserts[] = '  ' . $descriptionTag;
    }
    if ($keywordsTag !== '' && !preg_match('/<meta\s+name=["\']keywords["\'][^>]*>/is', $headPart)) {
      $inserts[] = '  ' . $keywordsTag;
    }

    if (!empty($inserts)) {
      $headPart .= "\n" . implode("\n", $inserts) . "\n";
    }

    // Ensure every page has a title, even if none was defined.
    if (!preg_match('/<title\b[^>]*>.*?<\/title>/is', $headPart)) {
      $headPart .= "\n  <title>Thiyagi Tools - Free Online Calculators, Converters & Utilities</title>\n";
    }

    return $headPart . $tailPart;
  }

  ob_start('thiyagi_fix_misplaced_seo_tags');
}

// Generate canonical URL - Always use https://www.thiyagi.com for consistency
$uri = strtok($_SERVER['REQUEST_URI'], '?');

// Normalize homepage aliases to root URL.
if ($uri === '/index' || $uri === '/index.php' || $uri === '/index.html') {
  $uri = '/';
}

// Normalize directory index aliases: /folder/index(.php|.html) -> /folder
$uri = preg_replace('#/index(?:\.php|\.html)?$#i', '', $uri);
if ($uri === '') {
  $uri = '/';
}

// Remove trailing slash for consistency (except for root)
if ($uri !== '/' && substr($uri, -1) === '/') {
    $uri = rtrim($uri, '/');
}
// Remove .php extension from canonical URL
$uri = preg_replace('/\.php$/', '', $uri);
$canonicalUrl = "https://www.thiyagi.com" . $uri;

$metaTitle = isset($pageTitle) && is_string($pageTitle) ? trim($pageTitle) : '';
$metaDescription = isset($pageDescription) && is_string($pageDescription) ? trim($pageDescription) : '';
$metaKeywords = isset($pageKeywords) && is_string($pageKeywords) ? trim($pageKeywords) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ($metaTitle !== ''): ?>
  <title><?php echo htmlspecialchars($metaTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<?php endif; ?>
<?php if ($metaDescription !== ''): ?>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>
<?php if ($metaKeywords !== ''): ?>
  <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>
  <link href="https://www.thiyagi.com/nt.png" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>" />
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1381776395680802"
     crossorigin="anonymous"></script>
     <meta name="google-adsense-account" content="ca-pub-1381776395680802">
     <!-- Clarity tracking code for https://www.thiyagi.com/ -->
<script>
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "su9bgvyyjw");
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5PGTVJ1CV1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5PGTVJ1CV1');
</script>
</head>
<body>
<nav class="bg-white shadow-sm px-3 py-2 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <!-- Logo -->
    <a class="flex items-center" href="https://www.thiyagi.com/">
      <img src="https://www.thiyagi.com/nt.png" alt="Thiyagi Logo" class="h-10 w-10 mr-2">
    </a>
    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button"
            class="md:hidden p-2 rounded text-gray-700 hover:bg-gray-100 focus:outline-none"
            aria-expanded="false" aria-controls="mobile-menu-expanded">
      <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <!-- Main Navigation (desktop) -->
    <div class="hidden md:flex md:items-center w-auto" id="desktop-menu">
      <ul class="flex space-x-2 lg:space-x-4 items-center">
        <!-- Financial Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Financial Tools <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
            <div class="py-1">
              <a href="https://www.thiyagi.com/emi-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">EMI Calculator</a>
              <a href="https://www.thiyagi.com/loan-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Loan Calculator</a>
              <a href="https://www.thiyagi.com/rd-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">RD Calculator</a>
              <a href="https://www.thiyagi.com/fd-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">FD Calculator</a>
              <a href="https://www.thiyagi.com/ppf-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">PPF Calculator</a>
              <a href="https://www.thiyagi.com/sip-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SIP Calculator</a>
              <a href="https://www.thiyagi.com/step-up-sip-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Step Up SIP</a>
              <a href="https://www.thiyagi.com/lumpsum-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lumpsum Calculator</a>
              <a href="https://www.thiyagi.com/swp-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SWP Calculator</a>
              <a href="https://www.thiyagi.com/sukanya-samriddhi-yojana-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sukanya Samriddhi Yojana</a>
            </div>
          </div>
        </li>
        <!-- Developer Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Developer Tools <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
            <div class="py-1">
              <a href="https://www.thiyagi.com/json-viewer" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Viewer</a>
              <a href="https://www.thiyagi.com/json-validator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Validator</a>
              <a href="https://www.thiyagi.com/html-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">HTML Beautifier</a>
              <a href="https://www.thiyagi.com/html-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">HTML Minifier</a>
              <a href="https://www.thiyagi.com/css-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">CSS Beautifier</a>
              <a href="https://www.thiyagi.com/css-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">CSS Minifier</a>
              <a href="https://www.thiyagi.com/javascript-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JavaScript Minifier</a>
              <a href="https://www.thiyagi.com/javascript-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JS Beautifier</a>
            </div>
          </div>
        </li>
        <!-- YouTube Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            YouTube Tools <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
            <div class="py-1">
              <a href="https://www.thiyagi.com/youtube-channel-search" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Channel Search</a>
              <a href="https://www.thiyagi.com/youtube-video-statistics" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Video Stats</a>
              <a href="https://www.thiyagi.com/youtube-hashtag-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hashtag Generator</a>
              <a href="https://www.thiyagi.com/youtube-title-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Title Generator</a>
              <a href="https://www.thiyagi.com/youtube-subscribe-link-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Subscribe Link Generator</a>
              <a href="https://www.thiyagi.com/youtube-thumbnail-downloader" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Thumbnail Downloader</a>
              <a href="https://www.thiyagi.com/youtube-money-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Money Calculator</a>
            </div>
          </div>
        </li>
        <!-- Converter Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Converters <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
            <div class="py-1">
              <a href="https://www.thiyagi.com/hex-to-decimal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hex to Decimal</a>
              <a href="https://www.thiyagi.com/binary-translator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Binary Translator</a>
              <a href="https://www.thiyagi.com/decimal-to-ascii-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Decimal to ASCII</a>
              <a href="https://www.thiyagi.com/currency-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Currency Converter</a>
            </div>
          </div>
        </li>
        <!-- Text Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Text Tools <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
            <div class="py-1">
              <a href="https://www.thiyagi.com/bold-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bold Text Generator</a>
              <a href="https://www.thiyagi.com/italic-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Italic Text Generator</a>
              <a href="https://www.thiyagi.com/cursive-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cursive Text Generator</a>
              <a href="https://www.thiyagi.com/gothic-font-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gothic Font Generator</a>
              <a href="https://www.thiyagi.com/tiny-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tiny Text Generator</a>
            </div>
          </div>
        </li>

             <!-- Resources Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Resources <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
            <div class="py-1">
              <a href="https://www.thiyagi.com/holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">All Holidays</a>
              <a href="https://www.thiyagi.com/holiday/uk-holiday/england-cities/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">England Cities</a>
              <a href="https://www.thiyagi.com/holiday/uk-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">UK Holidays</a>
              <a href="https://www.thiyagi.com/holiday/usa-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">USA Holidays</a>
              <a href="https://www.thiyagi.com/holiday/indian-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">India Holidays</a>
              <a href="https://www.thiyagi.com/holiday/canada-holidays/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">Canada Holidays</a>
              <a href="https://www.thiyagi.com/holiday/australia-holidays/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">Australia Holidays</a>
              <a href="https://www.thiyagi.com/electricity-board/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Electricity Board</a>
              <a href="https://www.thiyagi.com/rto-details" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">RTO Details</a>
              <a href="https://www.thiyagi.com/service-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Service Center</a>
              <a href="https://www.thiyagi.com/contact" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contact Us</a>
             
            </div>
          </div>
        </li>

        <!-- Blog Link -->
        

        <!-- Contact Us (on same navbar line) -->
      
      </ul>
      <div class="ml-4 flex items-center space-x-2" id="auth-section">
        <!-- Google Sign-In Button (Firebase) -->
        <button id="google-signin-btn" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm rounded-full text-gray-700 bg-white hover:bg-gray-50 shadow-sm">
          <svg class="w-5 h-5 mr-2" viewBox="0 0 48 48"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>
          Sign in with Google
        </button>
        <!-- User Info (shown after login) -->
        <div id="user-info" class="hidden items-center space-x-2">
          <a href="https://www.thiyagi.com/user-profile" class="flex items-center space-x-2 hover:opacity-80">
            <img id="user-pic" src="" alt="Profile" class="h-8 w-8 rounded-full border">
            <span id="user-name" class="font-semibold text-gray-700"></span>
          </a>
          <button id="signout-btn" class="px-3 py-1 border border-red-400 text-xs rounded text-red-700 bg-white hover:bg-red-50">Sign out</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div class="md:hidden hidden" id="mobile-menu-expanded">
    <ul class="space-y-1 py-4 px-1 bg-white shadow">
      <!-- Financial Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">Financial Tools 
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/emi-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">EMI Calculator</a>
          <a href="https://www.thiyagi.com/loan-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Loan Calculator</a>
          <a href="https://www.thiyagi.com/rd-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">RD Calculator</a>
          <a href="https://www.thiyagi.com/fd-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">FD Calculator</a>
          <a href="https://www.thiyagi.com/ppf-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">PPF Calculator</a>
          <a href="https://www.thiyagi.com/sip-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SIP Calculator</a>
          <a href="https://www.thiyagi.com/step-up-sip-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Step Up SIP</a>
          <a href="https://www.thiyagi.com/lumpsum-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lumpsum Calculator</a>
          <a href="https://www.thiyagi.com/swp-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SWP Calculator</a>
          <a href="https://www.thiyagi.com/sukanya-samriddhi-yojana-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sukanya Samriddhi Yojana</a>
        </div>
      </li>
      <!-- Developer Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">Developer Tools
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/json-viewer" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Viewer</a>
          <a href="https://www.thiyagi.com/json-validator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Validator</a>
          <a href="https://www.thiyagi.com/html-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">HTML Beautifier</a>
          <a href="https://www.thiyagi.com/html-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">HTML Minifier</a>
          <a href="https://www.thiyagi.com/css-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">CSS Beautifier</a>
          <a href="https://www.thiyagi.com/css-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">CSS Minifier</a>
          <a href="https://www.thiyagi.com/javascript-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JavaScript Minifier</a>
          <a href="https://www.thiyagi.com/javascript-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JS Beautifier</a>
        </div>
      </li>
      <!-- YouTube Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">YouTube Tools
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/youtube-channel-search" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Channel Search</a>
          <a href="https://www.thiyagi.com/youtube-video-statistics" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Video Stats</a>
          <a href="https://www.thiyagi.com/youtube-hashtag-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hashtag Generator</a>
          <a href="https://www.thiyagi.com/youtube-title-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Title Generator</a>
          <a href="https://www.thiyagi.com/youtube-subscribe-link-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Subscribe Link Generator</a>
          <a href="https://www.thiyagi.com/youtube-thumbnail-downloader" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Thumbnail Downloader</a>
          <a href="https://www.thiyagi.com/youtube-money-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Money Calculator</a>
        </div>
      </li>
      <!-- Converter Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">Converters
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/hex-to-decimal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hex to Decimal</a>
          <a href="https://www.thiyagi.com/binary-translator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Binary Translator</a>
          <a href="https://www.thiyagi.com/decimal-to-ascii-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Decimal to ASCII</a>
          <a href="https://www.thiyagi.com/currency-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Currency Converter</a>
        </div>
      </li>
      <!-- Text Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">Text Tools
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/bold-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bold Text Generator</a>
          <a href="https://www.thiyagi.com/italic-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Italic Text Generator</a>
          <a href="https://www.thiyagi.com/cursive-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cursive Text Generator</a>
          <a href="https://www.thiyagi.com/gothic-font-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gothic Font Generator</a>
          <a href="https://www.thiyagi.com/tiny-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tiny Text Generator</a>
        </div>
      </li>

      <!-- Resources (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">  Resources
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">All Holidays</a>
          <a href="https://www.thiyagi.com/holiday/uk-holiday/england-cities/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">England Cities</a>
          <a href="https://www.thiyagi.com/holiday/uk-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">UK Holidays</a>
          <a href="https://www.thiyagi.com/holiday/usa-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">USA Holidays</a>
          <a href="https://www.thiyagi.com/holiday/indian-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">India Holidays</a>
          <a href="https://www.thiyagi.com/holiday/canada-holidays/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">Canada Holidays</a>
          <a href="https://www.thiyagi.com/holiday/australia-holidays/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">Australia Holidays</a>
          <a href="https://www.thiyagi.com/electricity-board/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Electricity Board</a>
          <a href="https://www.thiyagi.com/rto-details" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">RTO Details</a>
          <a href="https://www.thiyagi.com/service-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Service Center</a>
           <a href="https://www.thiyagi.com/contact" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contact Us</a>
        </div>
      </li>

      

      <!-- Mobile Auth Section -->
      <li class="mt-4 px-4">
        <button id="mobile-google-signin-btn" class="w-full inline-flex items-center justify-center px-4 py-2 border border-gray-300 text-sm rounded-full text-gray-700 bg-white hover:bg-gray-50 shadow-sm">
          <svg class="w-5 h-5 mr-2" viewBox="0 0 48 48"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>
          Sign in with Google
        </button>
        <!-- Mobile User Info (shown after login) -->
        <div id="mobile-user-info" class="hidden flex items-center mt-2 p-2 bg-gray-50 rounded">
          <a href="https://www.thiyagi.com/user-profile" class="flex items-center flex-1">
            <img id="mobile-user-pic" src="" alt="Profile" class="h-6 w-6 rounded-full mr-2">
            <span id="mobile-user-name" class="text-sm font-medium"></span>
          </a>
          <button id="mobile-signout-btn" class="text-xs text-red-600 hover:text-red-800">Sign out</button>
        </div>
      </li>
    </ul>
  </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Toggle mobile menu
  const mobileBtn = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu-expanded');
  mobileBtn.onclick = function(e) {
    e.stopPropagation();
    const expanded = mobileMenu.classList.toggle('hidden');
    mobileBtn.setAttribute('aria-expanded', expanded ? "false" : "true");
  };

  // Desktop dropdowns: Show on hover and close others
  document.querySelectorAll('#desktop-menu .group').forEach(group => {
    const btn = group.querySelector('.nav-dropdown');
    const dropdown = group.querySelector('.dropdown');
    btn && btn.addEventListener('mouseenter', () => {
      document.querySelectorAll('#desktop-menu .dropdown').forEach(d => d.classList.add('hidden'));
      dropdown.classList.remove('hidden');
    });
    group.addEventListener('mouseleave', () => {
      dropdown.classList.add('hidden');
    });
    // Support click to open (optional)
    btn && btn.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelectorAll('#desktop-menu .dropdown').forEach(d => d !== dropdown && d.classList.add('hidden'));
      dropdown.classList.toggle('hidden');
    });
  });

  // Mobile dropdowns: Accordion style
  document.querySelectorAll('#mobile-menu-expanded .nav-mobile-dropdown').forEach((btn, idx, arr) => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      arr.forEach((otherBtn, j) => {
        if (j !== idx) otherBtn.nextElementSibling.classList.add('hidden');
      });
      const drop = btn.nextElementSibling;
      drop && drop.classList.toggle('hidden');
    });
  });

  // Click outside to close
  document.addEventListener('click', function(e){
    if (!e.target.closest('nav')) {
      mobileMenu.classList.add('hidden');
      mobileBtn.setAttribute('aria-expanded', 'false');
      document.querySelectorAll('#desktop-menu .dropdown').forEach(d => d.classList.add('hidden'));
      document.querySelectorAll('#mobile-menu-expanded .dropdown').forEach(d => d.classList.add('hidden'));
    }
  });

});
</script>

<!-- Firebase SDK (compat) -->
<script src="https://www.gstatic.com/firebasejs/10.12.2/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.12.2/firebase-auth-compat.js"></script>
<script>
(function() {
  var firebaseConfig = {
    apiKey: "AIzaSyCjmKTu5jgt1wiXKmpWo238Lt6KP1JU-Vk",
    authDomain: "thiyagi-cd556.firebaseapp.com",
    projectId: "thiyagi-cd556",
    storageBucket: "thiyagi-cd556.firebasestorage.app",
    messagingSenderId: "583973862604",
    appId: "1:583973862604:web:10a58afafe215827561669"
  };

  if (!firebase.apps.length) {
    firebase.initializeApp(firebaseConfig);
  }

  var auth = firebase.auth();
  var provider = new firebase.auth.GoogleAuthProvider();

  // Show signed-in state
  function showUser(user) {
    var pic = document.getElementById('user-pic');
    var name = document.getElementById('user-name');
    var info = document.getElementById('user-info');
    var signInBtn = document.getElementById('google-signin-btn');
    if (pic) pic.src = user.photoURL || '';
    if (name) name.textContent = user.displayName || user.email;
    if (info) { info.classList.remove('hidden'); info.classList.add('flex'); }
    if (signInBtn) signInBtn.classList.add('hidden');

    var mPic = document.getElementById('mobile-user-pic');
    var mName = document.getElementById('mobile-user-name');
    var mInfo = document.getElementById('mobile-user-info');
    var mBtn = document.getElementById('mobile-google-signin-btn');
    if (mPic) mPic.src = user.photoURL || '';
    if (mName) mName.textContent = user.displayName || user.email;
    if (mInfo) { mInfo.classList.remove('hidden'); mInfo.classList.add('flex'); }
    if (mBtn) mBtn.classList.add('hidden');
  }

  // Show signed-out state
  function showSignedOut() {
    var info = document.getElementById('user-info');
    var signInBtn = document.getElementById('google-signin-btn');
    if (info) { info.classList.add('hidden'); info.classList.remove('flex'); }
    if (signInBtn) signInBtn.classList.remove('hidden');

    var mInfo = document.getElementById('mobile-user-info');
    var mBtn = document.getElementById('mobile-google-signin-btn');
    if (mInfo) { mInfo.classList.add('hidden'); mInfo.classList.remove('flex'); }
    if (mBtn) mBtn.classList.remove('hidden');
  }

  // Google Sign-In — opens Google popup
  function handleGoogleSignIn() {
    auth.signInWithPopup(provider).catch(function(error) {
      console.error('Google Sign-In error:', error.code, error.message);
    });
  }

  // Sign out
  function handleSignOut() {
    auth.signOut().catch(function(error) {
      console.error('Sign-Out error:', error);
    });
  }

  // Listen to auth state
  auth.onAuthStateChanged(function(user) {
    if (user) {
      showUser(user);
    } else {
      showSignedOut();
    }
    // Dispatch custom event for other pages (e.g., profile page)
    window.dispatchEvent(new CustomEvent('firebaseAuthReady', { detail: { user: user } }));
  });

  // Attach click events
  var gBtn = document.getElementById('google-signin-btn');
  if (gBtn) gBtn.addEventListener('click', handleGoogleSignIn);

  var mGBtn = document.getElementById('mobile-google-signin-btn');
  if (mGBtn) mGBtn.addEventListener('click', handleGoogleSignIn);

  var soBtn = document.getElementById('signout-btn');
  if (soBtn) soBtn.addEventListener('click', handleSignOut);

  var mSoBtn = document.getElementById('mobile-signout-btn');
  if (mSoBtn) mSoBtn.addEventListener('click', handleSignOut);

  // Expose for other pages
  window.thiyagiAuth = {
    auth: auth,
    provider: provider,
    signIn: handleGoogleSignIn,
    signOut: handleSignOut
  };
})();
</script>
</body>
</html>
