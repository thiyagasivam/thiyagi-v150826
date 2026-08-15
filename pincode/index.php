<?php
$pageTitle = 'India Pincode Lookup - Find Pincode, Post Office Details | Thiyagi';
$pageDescription = 'Find pincode details, post office information, district, state for any location in India. Search by pincode or post office name instantly.';
$pageKeywords = 'pincode lookup, postal code, post office finder, india pincode, pincode search, postal code india';
include '../header.php';
?>

<style>
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }
    .accordion-content.open {
        max-height: 500px;
    }
    .rotate-180 {
        transform: rotate(180deg);
    }
    body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
    }
</style>

<div class="bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 min-h-screen font-sans">
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <!-- Main Search Card -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-2xl overflow-hidden">
            <div class="bg-gradient-to-r from-green-500 to-green-600 text-white text-center py-8 px-6">
                <h1 class="text-3xl font-bold flex items-center justify-center">
                    <i class="fas fa-map-marker-alt mr-3"></i>India Pincode Lookup
                </h1>
                <p class="mt-2 opacity-90">Find pincode details and post office information across India</p>
            </div>
            
            <div class="p-6">
                <!-- Search Tabs -->
                <div class="flex justify-center mb-8 space-x-2">
                    <button id="pincode-tab" class="tab-btn px-6 py-3 rounded-full bg-gradient-to-r from-green-500 to-green-600 text-white font-medium transition-all duration-300 transform hover:scale-105" onclick="switchTab('pincode')">
                        <i class="fas fa-hashtag mr-2"></i>Search by Pincode
                    </button>
                    <button id="postoffice-tab" class="tab-btn px-6 py-3 rounded-full bg-gray-100 text-gray-600 font-medium transition-all duration-300 transform hover:scale-105" onclick="switchTab('postoffice')">
                        <i class="fas fa-building mr-2"></i>Search by Post Office
                    </button>
                </div>

                <!-- Pincode Search -->
                <div id="pincode-search" class="search-container mb-8">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-1">
                            <input type="text" id="pincode-input" class="w-full px-6 py-4 rounded-full border-2 border-gray-200 focus:border-green-500 focus:outline-none transition-colors duration-300" 
                                   placeholder="Enter 6-digit pincode (e.g., 110001)" 
                                   maxlength="6" pattern="[0-9]{6}">
                        </div>
                        <div class="md:w-auto">
                            <button class="w-full md:w-auto px-8 py-4 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-full font-semibold hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 shadow-lg" onclick="searchByPincode()">
                                <i class="fas fa-search mr-2"></i>Search
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Post Office Search -->
                <div id="postoffice-search" class="search-container mb-8 hidden">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-1">
                            <input type="text" id="postoffice-input" class="w-full px-6 py-4 rounded-full border-2 border-gray-200 focus:border-green-500 focus:outline-none transition-colors duration-300" 
                                   placeholder="Enter post office name (e.g., New Delhi)">
                        </div>
                        <div class="md:w-auto">
                            <button class="w-full md:w-auto px-8 py-4 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-full font-semibold hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 shadow-lg" onclick="searchByPostOffice()">
                                <i class="fas fa-search mr-2"></i>Search
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Results Container -->
                <div id="results-container" class="results-container"></div>
            </div>
        </div>

        <!-- Usage Instructions -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mt-6 overflow-hidden">
            <div class="p-6">
                <h4 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-info-circle mr-3 text-blue-500"></i>How to Use
                </h4>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h6 class="text-lg font-semibold text-green-600 mb-3 flex items-center">
                            <i class="fas fa-hashtag mr-2"></i>Search by Pincode:
                        </h6>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check mr-3 text-green-500"></i>Enter any 6-digit Indian pincode
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check mr-3 text-green-500"></i>Get complete post office details
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check mr-3 text-green-500"></i>View district, state, and region info
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h6 class="text-lg font-semibold text-blue-600 mb-3 flex items-center">
                            <i class="fas fa-building mr-2"></i>Search by Post Office:
                        </h6>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check mr-3 text-blue-500"></i>Enter post office name
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check mr-3 text-blue-500"></i>Find multiple matching offices
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check mr-3 text-blue-500"></i>Get pincode and location details
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Popular Pincodes Section -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mt-6 overflow-hidden">
            <div class="p-6">
                <h4 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-star mr-3 text-yellow-500"></i>Popular Indian Pincodes
                </h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="#" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-red-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-pin text-red-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">110001</div>
                            <div class="text-sm text-gray-500">New Delhi</div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-blue-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-pin text-blue-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">400001</div>
                            <div class="text-sm text-gray-500">Mumbai</div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-green-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-pin text-green-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">700001</div>
                            <div class="text-sm text-gray-500">Kolkata</div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-yellow-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-pin text-yellow-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">560001</div>
                            <div class="text-sm text-gray-500">Bangalore</div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-cyan-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-pin text-cyan-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">600001</div>
                            <div class="text-sm text-gray-500">Chennai</div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-200 transition-colors cursor-pointer">
                        <i class="fas fa-map-pin text-gray-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">500001</div>
                            <div class="text-sm text-gray-500">Hyderabad</div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-300 transition-colors cursor-pointer">
                        <i class="fas fa-map-pin text-gray-800 mr-3"></i>
                        <div>
                            <div class="font-semibold">411001</div>
                            <div class="text-sm text-gray-500">Pune</div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-orange-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-pin text-orange-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">380001</div>
                            <div class="text-sm text-gray-500">Ahmedabad</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Browse by State Section -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mt-6 overflow-hidden">
            <div class="p-6">
                <h4 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-map mr-3 text-purple-500"></i>Browse by State
                </h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="/pincode/tamil-nadu" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-red-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-marker-alt text-red-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">Tamil Nadu</div>
                            <div class="text-sm text-gray-500">39 Districts</div>
                        </div>
                    </a>
                    <a href="/pincode/karnataka" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-blue-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-marker-alt text-blue-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">Karnataka</div>
                            <div class="text-sm text-gray-500">30 Districts</div>
                        </div>
                    </a>
                    <a href="/pincode/kerala" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-green-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-marker-alt text-green-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">Kerala</div>
                            <div class="text-sm text-gray-500">14 Districts</div>
                        </div>
                    </a>
                    <a href="/pincode/maharashtra" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-yellow-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-marker-alt text-yellow-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">Maharashtra</div>
                            <div class="text-sm text-gray-500">36 Districts</div>
                        </div>
                    </a>
                    <a href="/pincode/gujarat" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-cyan-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-marker-alt text-cyan-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">Gujarat</div>
                            <div class="text-sm text-gray-500">33 Districts</div>
                        </div>
                    </a>
                    <a href="/pincode/rajasthan" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-indigo-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-marker-alt text-indigo-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">Rajasthan</div>
                            <div class="text-sm text-gray-500">33 Districts</div>
                        </div>
                    </a>
                    <a href="/pincode/uttar-pradesh" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-pink-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-marker-alt text-pink-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">Uttar Pradesh</div>
                            <div class="text-sm text-gray-500">75 Districts</div>
                        </div>
                    </a>
                    <a href="/pincode/west-bengal" class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-orange-100 transition-colors cursor-pointer">
                        <i class="fas fa-map-marker-alt text-orange-500 mr-3"></i>
                        <div>
                            <div class="font-semibold">West Bengal</div>
                            <div class="text-sm text-gray-500">23 Districts</div>
                        </div>
                    </a>
                </div>
                <div class="text-center mt-6">
                    <a href="/pincode/all-states" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-500 to-purple-600 text-white font-medium rounded-full hover:from-purple-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-list mr-2"></i>View All States & UTs
                    </a>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mt-6 overflow-hidden">
            <div class="p-6">
                <h4 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-rocket mr-3 text-green-500"></i>Key Features
                </h4>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center p-4">
                        <i class="fas fa-bolt text-4xl text-yellow-500 mb-4"></i>
                        <h6 class="font-semibold text-lg mb-2">Instant Results</h6>
                        <p class="text-gray-600 text-sm">Get pincode information in milliseconds with our fast API integration.</p>
                    </div>
                    <div class="text-center p-4">
                        <i class="fas fa-database text-4xl text-blue-500 mb-4"></i>
                        <h6 class="font-semibold text-lg mb-2">Complete Database</h6>
                        <p class="text-gray-600 text-sm">Access comprehensive data for all Indian pincodes and post offices.</p>
                    </div>
                    <div class="text-center p-4">
                        <i class="fas fa-mobile-alt text-4xl text-green-500 mb-4"></i>
                        <h6 class="font-semibold text-lg mb-2">Mobile Friendly</h6>
                        <p class="text-gray-600 text-sm">Optimized for all devices - desktop, tablet, and mobile phones.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Pincodes Section -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mt-6 overflow-hidden">
            <div class="p-6">
                <h4 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-book mr-3 text-blue-500"></i>About Indian Pincodes
                </h4>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h6 class="text-lg font-semibold text-gray-700 mb-3 flex items-center">
                            <i class="fas fa-history mr-2"></i>Pincode System:
                        </h6>
                        <p class="text-gray-600 mb-4">The PIN (Postal Index Number) system was introduced by India Post in 1972 to mechanize mail sorting and speed up delivery. Each pincode consists of 6 digits representing different geographical regions.</p>
                        
                        <h6 class="text-lg font-semibold text-gray-700 mb-3 flex items-center">
                            <i class="fas fa-map mr-2"></i>Pincode Structure:
                        </h6>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                                <strong>First digit:</strong> Represents the region
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                                <strong>Second digit:</strong> Sub-region or circle
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></span>
                                <strong>Third digit:</strong> Sorting district
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-red-500 rounded-full mr-3"></span>
                                <strong>Last three:</strong> Individual post office
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h6 class="text-lg font-semibold text-gray-700 mb-3 flex items-center">
                            <i class="fas fa-globe-asia mr-2"></i>Regional Distribution:
                        </h6>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded mr-3 font-bold">1</span>
                                North (Delhi, Punjab, Haryana)
                            </div>
                            <div class="flex items-center">
                                <span class="bg-green-500 text-white px-2 py-1 rounded mr-3 font-bold">2</span>
                                North (Himachal, Jammu & Kashmir)
                            </div>
                            <div class="flex items-center">
                                <span class="bg-cyan-500 text-white px-2 py-1 rounded mr-3 font-bold">3</span>
                                North (Rajasthan, Gujarat)
                            </div>
                            <div class="flex items-center">
                                <span class="bg-yellow-500 text-white px-2 py-1 rounded mr-3 font-bold">4</span>
                                West (Maharashtra, Goa)
                            </div>
                            <div class="flex items-center">
                                <span class="bg-red-500 text-white px-2 py-1 rounded mr-3 font-bold">5</span>
                                South (Andhra Pradesh, Karnataka)
                            </div>
                            <div class="flex items-center">
                                <span class="bg-gray-500 text-white px-2 py-1 rounded mr-3 font-bold">6</span>
                                South (Kerala, Tamil Nadu)
                            </div>
                            <div class="flex items-center">
                                <span class="bg-gray-800 text-white px-2 py-1 rounded mr-3 font-bold">7</span>
                                East (West Bengal, Odisha)
                            </div>
                            <div class="flex items-center">
                                <span class="bg-purple-500 text-white px-2 py-1 rounded mr-3 font-bold">8</span>
                                East (Bihar, Jharkhand)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mt-6 overflow-hidden">
            <div class="p-6">
                <h4 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-question-circle mr-3 text-cyan-500"></i>Frequently Asked Questions
                </h4>
                <div class="space-y-4">
                    <div class="border rounded-lg overflow-hidden">
                        <button class="accordion-toggle w-full text-left p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none flex items-center justify-between" onclick="toggleAccordion(0)">
                            <span class="flex items-center">
                                <i class="fas fa-question mr-3 text-blue-500"></i>What is a pincode and why is it important?
                            </span>
                            <i class="fas fa-chevron-down transform transition-transform duration-200" id="arrow-0"></i>
                        </button>
                        <div class="accordion-content" id="content-0">
                            <div class="p-4 bg-white border-t">
                                A pincode (PIN - Postal Index Number) is a 6-digit code used by India Post to identify specific post offices and facilitate efficient mail sorting and delivery across India. It helps ensure your mail reaches the correct destination quickly and accurately.
                            </div>
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="accordion-toggle w-full text-left p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none flex items-center justify-between" onclick="toggleAccordion(1)">
                            <span class="flex items-center">
                                <i class="fas fa-search mr-3 text-green-500"></i>How do I find my area's pincode?
                            </span>
                            <i class="fas fa-chevron-down transform transition-transform duration-200" id="arrow-1"></i>
                        </button>
                        <div class="accordion-content" id="content-1">
                            <div class="p-4 bg-white border-t">
                                Simply enter your post office name or area name in the "Search by Post Office" tab above, and you'll get the complete pincode details for your location. You can also ask at your local post office or check official documents like Aadhaar card.
                            </div>
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="accordion-toggle w-full text-left p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none flex items-center justify-between" onclick="toggleAccordion(2)">
                            <span class="flex items-center">
                                <i class="fas fa-database mr-3 text-cyan-500"></i>Is this pincode data accurate and up-to-date?
                            </span>
                            <i class="fas fa-chevron-down transform transition-transform duration-200" id="arrow-2"></i>
                        </button>
                        <div class="accordion-content" id="content-2">
                            <div class="p-4 bg-white border-t">
                                Yes, our tool uses the official Indian postal database API (postalpincode.in) which is regularly updated by India Post to ensure accuracy and completeness of information. The data includes all active post offices across India.
                            </div>
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="accordion-toggle w-full text-left p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none flex items-center justify-between" onclick="toggleAccordion(3)">
                            <span class="flex items-center">
                                <i class="fas fa-globe mr-3 text-yellow-500"></i>Can I use this tool for international postal codes?
                            </span>
                            <i class="fas fa-chevron-down transform transition-transform duration-200" id="arrow-3"></i>
                        </button>
                        <div class="accordion-content" id="content-3">
                            <div class="p-4 bg-white border-t">
                                This tool is specifically designed for Indian pincodes only. It covers all states and union territories of India including remote areas. For international postal codes, you would need different tools specific to those countries.
                            </div>
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="accordion-toggle w-full text-left p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none flex items-center justify-between" onclick="toggleAccordion(4)">
                            <span class="flex items-center">
                                <i class="fas fa-mobile-alt mr-3 text-green-500"></i>Does this work on mobile devices?
                            </span>
                            <i class="fas fa-chevron-down transform transition-transform duration-200" id="arrow-4"></i>
                        </button>
                        <div class="accordion-content" id="content-4">
                            <div class="p-4 bg-white border-t">
                                Absolutely! Our pincode lookup tool is fully optimized for mobile devices, tablets, and desktops. You can access it from any device with an internet connection and get the same fast, accurate results.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab switching functionality
        function switchTab(tab) {
            const pincodeTab = document.getElementById('pincode-tab');
            const postofficeTab = document.getElementById('postoffice-tab');
            const pincodeSearch = document.getElementById('pincode-search');
            const postofficeSearch = document.getElementById('postoffice-search');

            if (tab === 'pincode') {
                pincodeTab.className = 'tab-btn px-6 py-3 rounded-full bg-gradient-to-r from-green-500 to-green-600 text-white font-medium transition-all duration-300 transform hover:scale-105';
                postofficeTab.className = 'tab-btn px-6 py-3 rounded-full bg-gray-100 text-gray-600 font-medium transition-all duration-300 transform hover:scale-105';
                pincodeSearch.classList.remove('hidden');
                postofficeSearch.classList.add('hidden');
            } else {
                postofficeTab.className = 'tab-btn px-6 py-3 rounded-full bg-gradient-to-r from-green-500 to-green-600 text-white font-medium transition-all duration-300 transform hover:scale-105';
                pincodeTab.className = 'tab-btn px-6 py-3 rounded-full bg-gray-100 text-gray-600 font-medium transition-all duration-300 transform hover:scale-105';
                postofficeSearch.classList.remove('hidden');
                pincodeSearch.classList.add('hidden');
            }

            clearResults();
        }

        // Accordion functionality
        function toggleAccordion(index) {
            const content = document.getElementById('content-' + index);
            const arrow = document.getElementById('arrow-' + index);
            
            if (content.classList.contains('open')) {
                content.classList.remove('open');
                arrow.classList.remove('rotate-180');
            } else {
                // Close all other accordions
                document.querySelectorAll('.accordion-content').forEach(el => el.classList.remove('open'));
                document.querySelectorAll('[id^="arrow-"]').forEach(el => el.classList.remove('rotate-180'));
                
                // Open current accordion
                content.classList.add('open');
                arrow.classList.add('rotate-180');
            }
        }

        // Clear results
        function clearResults() {
            document.getElementById('results-container').innerHTML = '';
        }

        // Show loading state
        function showLoading() {
            document.getElementById('results-container').innerHTML = `
                <div class="text-center py-12">
                    <i class="fas fa-spinner fa-spin text-4xl text-green-500 mb-4"></i>
                    <p class="text-gray-600">Searching...</p>
                </div>
            `;
        }

        // Show error message
        function showError(message) {
            document.getElementById('results-container').innerHTML = `
                <div class="bg-red-50 border border-red-200 rounded-lg p-4 mt-6">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle text-red-500 mr-3"></i>
                        <span class="text-red-700">${message}</span>
                    </div>
                </div>
            `;
        }

        // Show no results
        function showNoResults(searchTerm) {
            document.getElementById('results-container').innerHTML = `
                <div class="text-center py-12">
                    <i class="fas fa-search text-4xl text-gray-400 mb-4"></i>
                    <p class="text-gray-600 mb-2">No results found for "${searchTerm}"</p>
                    <p class="text-gray-500 text-sm">Please check your input and try again.</p>
                </div>
            `;
        }

        // Display results
        function displayResults(data, searchType) {
            const container = document.getElementById('results-container');
            
            if (!data || !data[0] || data[0].Status !== 'Success') {
                showError('No data found or API error occurred.');
                return;
            }

            const postOffices = data[0].PostOffice;
            
            if (!postOffices || postOffices.length === 0) {
                showNoResults(searchType === 'pincode' ? 
                    document.getElementById('pincode-input').value : 
                    document.getElementById('postoffice-input').value
                );
                return;
            }

            let html = '<div class="mt-8 space-y-4">';
            postOffices.forEach((office, index) => {
                html += `
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-building text-green-500 mr-3 text-lg"></i>
                            <h3 class="text-xl font-semibold text-gray-800">${office.Name}</h3>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-hashtag text-green-500 mr-3 w-4"></i>
                                    <strong>Pincode:</strong> <span class="ml-2">${office.Pincode}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-map-marker-alt text-red-500 mr-3 w-4"></i>
                                    <strong>District:</strong> <span class="ml-2">${office.District}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-flag text-blue-500 mr-3 w-4"></i>
                                    <strong>State:</strong> <span class="ml-2">${office.State}</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-globe text-cyan-500 mr-3 w-4"></i>
                                    <strong>Division:</strong> <span class="ml-2">${office.Division}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-map text-purple-500 mr-3 w-4"></i>
                                    <strong>Region:</strong> <span class="ml-2">${office.Region}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-building text-orange-500 mr-3 w-4"></i>
                                    <strong>Branch Type:</strong> <span class="ml-2">${office.BranchType}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
            html += '</div>';

            container.innerHTML = html;
        }

        // Search by pincode
        async function searchByPincode() {
            const pincode = document.getElementById('pincode-input').value.trim();
            
            if (!pincode) {
                showError('Please enter a pincode.');
                return;
            }

            if (!/^\d{6}$/.test(pincode)) {
                showError('Please enter a valid 6-digit pincode.');
                return;
            }

            showLoading();

            try {
                // Try multiple APIs in sequence for better reliability
                let data = null;
                let apiUsed = '';

                // API 1: postalpincode.in (Primary)
                try {
                    const response1 = await fetch(`https://api.postalpincode.in/pincode/${pincode}`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        }
                    });
                    
                    if (response1.ok) {
                        const result = await response1.json();
                        if (result && result[0] && result[0].Status === 'Success') {
                            data = result;
                            apiUsed = 'postalpincode.in';
                        }
                    }
                } catch (error) {
                    console.log('API 1 failed:', error);
                }

                // API 2: zippopotam.us (Secondary)
                if (!data) {
                    try {
                        const response2 = await fetch(`https://api.zippopotam.us/in/${pincode}`, {
                            method: 'GET',
                            headers: {
                                'Accept': 'application/json'
                            }
                        });
                        
                        if (response2.ok) {
                            const result = await response2.json();
                            if (result && result.places && result.places.length > 0) {
                                displayZippopotamResults(result, 'pincode');
                                return;
                            }
                        }
                    } catch (error) {
                        console.log('API 2 failed:', error);
                    }
                }

                // API 3: Custom Indian Postal API (Tertiary)
                if (!data) {
                    try {
                        const response3 = await fetch(`https://india-pincode-with-latitude-and-longitude.p.rapidapi.com/api/v1/pincode/${pincode}`, {
                            method: 'GET',
                            headers: {
                                'X-RapidAPI-Key': 'demo-key',
                                'X-RapidAPI-Host': 'india-pincode-with-latitude-and-longitude.p.rapidapi.com'
                            }
                        });
                        
                        if (response3.ok) {
                            const result = await response3.json();
                            if (result && result.length > 0) {
                                displayCustomAPIResults(result, 'pincode');
                                return;
                            }
                        }
                    } catch (error) {
                        console.log('API 3 failed:', error);
                    }
                }

                // If all APIs succeeded but no data found
                if (data) {
                    displayResults(data, 'pincode');
                    showAPIStatus(apiUsed);
                } else {
                    // Show enhanced sample data with API status
                    showEnhancedSampleResults(pincode);
                }

            } catch (error) {
                console.error('All APIs failed:', error);
                showEnhancedSampleResults(pincode);
            }
        }

        // Search by post office name
        async function searchByPostOffice() {
            const postoffice = document.getElementById('postoffice-input').value.trim();
            
            if (!postoffice) {
                showError('Please enter a post office name.');
                return;
            }

            if (postoffice.length < 2) {
                showError('Please enter at least 2 characters.');
                return;
            }

            showLoading();

            try {
                let data = null;
                let apiUsed = '';

                // Primary API for post office search
                try {
                    const response = await fetch(`https://api.postalpincode.in/postoffice/${encodeURIComponent(postoffice)}`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        }
                    });
                    
                    if (response.ok) {
                        const result = await response.json();
                        if (result && result[0] && result[0].Status === 'Success') {
                            data = result;
                            apiUsed = 'postalpincode.in';
                        }
                    }
                } catch (error) {
                    console.log('Post office API failed:', error);
                }

                if (data) {
                    displayResults(data, 'postoffice');
                    showAPIStatus(apiUsed);
                } else {
                    showEnhancedPostOfficeResults(postoffice);
                }

            } catch (error) {
                console.error('Post office search failed:', error);
                showEnhancedPostOfficeResults(postoffice);
            }
        }

        // Fallback function for sample pincode results
        function showSampleResults(pincode) {
            const sampleData = [{
                "Status": "Success",
                "PostOffice": [{
                    "Name": "Sample Post Office",
                    "Pincode": pincode,
                    "District": "Sample District",
                    "State": "Sample State",
                    "Division": "Sample Division",
                    "Region": "Sample Region",
                    "BranchType": "Head Office"
                }]
            }];
            
            document.getElementById('results-container').innerHTML = `
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mt-6 mb-4">
                    <div class="flex items-center">
                        <i class="fas fa-info-circle text-yellow-500 mr-3"></i>
                        <span class="text-yellow-800"><strong>Demo Mode:</strong> API unavailable. Showing sample data.</span>
                    </div>
                </div>
            `;
            
            displayResults(sampleData, 'pincode');
        }

        // Fallback function for sample post office results
        function showSamplePostOfficeResults(searchTerm) {
            const sampleData = [{
                "Status": "Success",
                "PostOffice": [{
                    "Name": searchTerm + " Post Office",
                    "Pincode": "000000",
                    "District": "Sample District",
                    "State": "Sample State", 
                    "Division": "Sample Division",
                    "Region": "Sample Region",
                    "BranchType": "Sub Office"
                }]
            }];
            
            document.getElementById('results-container').innerHTML = `
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mt-6 mb-4">
                    <div class="flex items-center">
                        <i class="fas fa-info-circle text-yellow-500 mr-3"></i>
                        <span class="text-yellow-800"><strong>Demo Mode:</strong> API unavailable. Showing sample data.</span>
                    </div>
                </div>
            `;
            
            displayResults(sampleData, 'postoffice');
        }

        // Display results from Zippopotamus API
        function displayZippopotamResults(data, searchType) {
            if (!data || !data.places) {
                showNoResults(searchType === 'pincode' ? 
                    document.getElementById('pincode-input').value : 
                    document.getElementById('postoffice-input').value
                );
                return;
            }

            const container = document.getElementById('results-container');
            let html = '<div class="mt-8 space-y-4">';
            
            data.places.forEach((place, index) => {
                html += `
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-building text-blue-500 mr-3 text-lg"></i>
                            <h3 class="text-xl font-semibold text-gray-800">${place['place name']}</h3>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-hashtag text-green-500 mr-3 w-4"></i>
                                    <strong>Pincode:</strong> <span class="ml-2">${data['post code']}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-map-marker-alt text-red-500 mr-3 w-4"></i>
                                    <strong>State:</strong> <span class="ml-2">${place['state']}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-globe text-cyan-500 mr-3 w-4"></i>
                                    <strong>Country:</strong> <span class="ml-2">${data['country']}</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-map text-purple-500 mr-3 w-4"></i>
                                    <strong>Latitude:</strong> <span class="ml-2">${place['latitude']}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-map text-purple-500 mr-3 w-4"></i>
                                    <strong>Longitude:</strong> <span class="ml-2">${place['longitude']}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
            html += '</div>';

            container.innerHTML = html;
        }

        // Enhanced sample results with better data and API status
        function showEnhancedSampleResults(pincode) {
            // Enhanced sample data based on pincode patterns
            const sampleData = generateSampleDataByPincode(pincode);
            
            document.getElementById('results-container').innerHTML = `
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mt-6 mb-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-server text-blue-500 mr-3"></i>
                            <span class="text-blue-800"><strong>Demo Mode:</strong> APIs temporarily unavailable. Showing realistic sample data.</span>
                        </div>
                        <button onclick="retryAPI('${pincode}')" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600 transition-colors">
                            <i class="fas fa-redo mr-1"></i>Retry
                        </button>
                    </div>
                </div>
            `;
            
            displayResults(sampleData, 'pincode');
        }

        // Enhanced post office sample results
        function showEnhancedPostOfficeResults(searchTerm) {
            const sampleData = [{
                "Status": "Success",
                "PostOffice": [{
                    "Name": searchTerm + " H.O",
                    "Pincode": "000001",
                    "District": "Sample District",
                    "State": "Sample State", 
                    "Division": "Sample Division",
                    "Region": "Sample Region",
                    "BranchType": "Head Office"
                }, {
                    "Name": searchTerm + " S.O",
                    "Pincode": "000002", 
                    "District": "Sample District",
                    "State": "Sample State",
                    "Division": "Sample Division", 
                    "Region": "Sample Region",
                    "BranchType": "Sub Office"
                }]
            }];
            
            document.getElementById('results-container').innerHTML = `
                <div class="bg-green-50 border border-green-200 rounded-lg p-4 mt-6 mb-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-database text-green-500 mr-3"></i>
                            <span class="text-green-800"><strong>Demo Results:</strong> Showing sample post offices for "${searchTerm}"</span>
                        </div>
                        <button onclick="retryPostOfficeAPI('${searchTerm}')" class="bg-green-500 text-white px-3 py-1 rounded text-sm hover:bg-green-600 transition-colors">
                            <i class="fas fa-redo mr-1"></i>Retry
                        </button>
                    </div>
                </div>
            `;
            
            displayResults(sampleData, 'postoffice');
        }

        // Generate realistic sample data based on pincode patterns
        function generateSampleDataByPincode(pincode) {
            const regions = {
                '1': { state: 'Delhi', region: 'Delhi', division: 'New Delhi' },
                '2': { state: 'Haryana', region: 'Ambala', division: 'Ambala' },
                '3': { state: 'Rajasthan', region: 'Jaipur', division: 'Jaipur' },
                '4': { state: 'Maharashtra', region: 'Mumbai', division: 'Mumbai' },
                '5': { state: 'Karnataka', region: 'Bangalore', division: 'Bangalore' },
                '6': { state: 'Tamil Nadu', region: 'Chennai', division: 'Chennai' },
                '7': { state: 'West Bengal', region: 'Kolkata', division: 'Kolkata' },
                '8': { state: 'Bihar', region: 'Patna', division: 'Patna' }
            };

            const firstDigit = pincode.charAt(0);
            const regionData = regions[firstDigit] || { state: 'Sample State', region: 'Sample Region', division: 'Sample Division' };

            return [{
                "Status": "Success",
                "PostOffice": [{
                    "Name": `Sample Post Office ${pincode}`,
                    "Pincode": pincode,
                    "District": "Sample District",
                    "State": regionData.state,
                    "Division": regionData.division,
                    "Region": regionData.region,
                    "BranchType": "Head Office"
                }]
            }];
        }

        // Show API status indicator
        function showAPIStatus(apiUsed) {
            const statusHTML = `
                <div class="bg-green-50 border border-green-200 rounded-lg p-3 mt-2 mb-4">
                    <div class="flex items-center text-sm">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span class="text-green-800"><strong>Live Data:</strong> Retrieved from ${apiUsed}</span>
                        <span class="ml-auto text-green-600 text-xs">● Online</span>
                    </div>
                </div>
            `;
            
            const container = document.getElementById('results-container');
            container.innerHTML = statusHTML + container.innerHTML;
        }

        // Display results from custom API
        function displayCustomAPIResults(data, searchType) {
            if (!data || data.length === 0) {
                showNoResults(searchType === 'pincode' ? 
                    document.getElementById('pincode-input').value : 
                    document.getElementById('postoffice-input').value
                );
                return;
            }

            const container = document.getElementById('results-container');
            let html = '<div class="mt-8 space-y-4">';
            
            data.forEach((location, index) => {
                html += `
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-500 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-map-marker-alt text-purple-500 mr-3 text-lg"></i>
                            <h3 class="text-xl font-semibold text-gray-800">${location.officeName || location.postOffice || 'Post Office'}</h3>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-hashtag text-green-500 mr-3 w-4"></i>
                                    <strong>Pincode:</strong> <span class="ml-2">${location.pincode}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-map-marker-alt text-red-500 mr-3 w-4"></i>
                                    <strong>District:</strong> <span class="ml-2">${location.districtName || 'N/A'}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-flag text-blue-500 mr-3 w-4"></i>
                                    <strong>State:</strong> <span class="ml-2">${location.stateName || 'N/A'}</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-map text-purple-500 mr-3 w-4"></i>
                                    <strong>Latitude:</strong> <span class="ml-2">${location.latitude || 'N/A'}</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-map text-purple-500 mr-3 w-4"></i>
                                    <strong>Longitude:</strong> <span class="ml-2">${location.longitude || 'N/A'}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
            html += '</div>';

            container.innerHTML = html;
        }

        // Retry API functions
        function retryAPI(pincode) {
            document.getElementById('pincode-input').value = pincode;
            searchByPincode();
        }

        function retryPostOfficeAPI(searchTerm) {
            document.getElementById('postoffice-input').value = searchTerm;
            searchByPostOffice();
        }

        // API health check function
        async function checkAPIHealth() {
            const apis = [
                { name: 'postalpincode.in', url: 'https://api.postalpincode.in/pincode/110001' },
                { name: 'zippopotam.us', url: 'https://api.zippopotam.us/in/110001' }
            ];

            const results = {};
            
            for (const api of apis) {
                try {
                    const response = await fetch(api.url, { 
                        method: 'GET',
                        timeout: 5000 
                    });
                    results[api.name] = response.ok ? 'online' : 'offline';
                } catch (error) {
                    results[api.name] = 'offline';
                }
            }

            console.log('API Health Status:', results);
            return results;
        }

        // Initialize API health check on page load
        document.addEventListener('DOMContentLoaded', function() {
            checkAPIHealth();
        });

        // Enter key support
        document.getElementById('pincode-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchByPincode();
            }
        });

        document.getElementById('postoffice-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchByPostOffice();
            }
        });

        // Only allow numbers in pincode input
        document.getElementById('pincode-input').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^0-9]/g, '');
        });
    </script>
    </div>
</div>
<?php include '../footer.php'; ?>