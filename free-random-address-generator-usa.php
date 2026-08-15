<?php include 'header.php'; ?>

    <title>Free Random Address Generator USA 2026 - Generate US Addresses | Thiyagi.com</title>
    <meta name="description" content="Generate random US addresses 2026 for testing, development, and form filling. Free American address generator with real ZIP codes, cities, and states.">
    <meta name="keywords" content="random address generator usa 2026, fake address generator, us address generator, random american addresses, testing addresses, development addresses">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Free Random Address Generator USA 2026 - Generate US Addresses">
    <meta property="og:description" content="Generate random US addresses for testing, development, and form filling. Free American address generator with real ZIP codes and cities.">
    <meta property="og:url" content="https://www.thiyagi.com/free-random-address-generator-usa">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Free Random Address Generator USA 2026 - Generate US Addresses">
    <meta name="twitter:description" content="Generate random US addresses for testing and development. Free American address generator with real ZIP codes.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    }
    .address-card {
        transition: all 0.3s ease;
        border-left: 4px solid #3b82f6;
    }
    .address-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #1d4ed8;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .copy-success {
        animation: copyFlash 0.3s ease-in-out;
    }
    @keyframes copyFlash {
        0% { background-color: #10b981; }
        100% { background-color: transparent; }
    }
    .state-flag {
        width: 24px;
        height: 16px;
        background-size: cover;
        border-radius: 2px;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Free Random Address Generator USA 2026",
  "description": "Generate random US addresses for testing, development, and form filling purposes. Free American address generator with real ZIP codes, cities, and states.",
  "url": "https://www.thiyagi.com/free-random-address-generator-usa",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Any",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "creator": {
    "@type": "Organization",
    "name": "Thiyagi.com"
  }
}
</script>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="gradient-bg shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-3 rounded-full shadow-lg">
                        <i class="fas fa-map-marker-alt text-2xl text-red-600" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Free Random Address Generator USA</h1>
                        <p class="text-red-100">Generate realistic US addresses for testing</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <nav class="bg-white border-b" aria-label="Breadcrumb">
        <div class="max-w-6xl mx-auto px-4 py-3">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="/" class="text-gray-500 hover:text-gray-700">Home</a></li>
                <li><i class="fas fa-chevron-right text-gray-400" aria-hidden="true"></i></li>
                <li class="text-gray-900 font-medium">Free Random Address Generator USA</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Generator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                    <i class="fas fa-home text-2xl text-red-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Random US Address Generator</h2>
                <p class="text-gray-600">Generate realistic American addresses for testing, development, and form filling</p>
            </div>

            <!-- Generator Options -->
            <div class="max-w-4xl mx-auto space-y-6">
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label for="addressCount" class="block text-sm font-medium text-gray-700 mb-2">Number of Addresses</label>
                        <select id="addressCount" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            <option value="1">1 Address</option>
                            <option value="5">5 Addresses</option>
                            <option value="10" selected>10 Addresses</option>
                            <option value="25">25 Addresses</option>
                            <option value="50">50 Addresses</option>
                        </select>
                    </div>

                    <div>
                        <label for="stateFilter" class="block text-sm font-medium text-gray-700 mb-2">State Filter</label>
                        <select id="stateFilter" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            <option value="">All States</option>
                            <option value="CA">California</option>
                            <option value="TX">Texas</option>
                            <option value="FL">Florida</option>
                            <option value="NY">New York</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="IL">Illinois</option>
                            <option value="OH">Ohio</option>
                            <option value="GA">Georgia</option>
                            <option value="NC">North Carolina</option>
                            <option value="MI">Michigan</option>
                        </select>
                    </div>

                    <div>
                        <label for="addressType" class="block text-sm font-medium text-gray-700 mb-2">Address Type</label>
                        <select id="addressType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            <option value="all">All Types</option>
                            <option value="residential">Residential Only</option>
                            <option value="business">Business Only</option>
                        </select>
                    </div>
                </div>

                <!-- Format Options -->
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h4 class="font-medium text-blue-800 mb-3">Output Format</h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        <label class="flex items-center">
                            <input type="checkbox" id="includePhone" checked class="mr-2 text-red-600 focus:ring-red-500">
                            <span class="text-sm">Phone Number</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="includeEmail" checked class="mr-2 text-red-600 focus:ring-red-500">
                            <span class="text-sm">Email Address</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="includeName" checked class="mr-2 text-red-600 focus:ring-red-500">
                            <span class="text-sm">Full Name</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="includeApartment" class="mr-2 text-red-600 focus:ring-red-500">
                            <span class="text-sm">Apartment Numbers</span>
                        </label>
                    </div>
                </div>

                <!-- Generate Button -->
                <div class="text-center">
                    <button id="generateBtn" class="bg-red-600 hover:bg-red-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-random mr-2" aria-hidden="true"></i>
                        Generate Random Addresses
                    </button>
                </div>
            </div>

            <!-- Generated Addresses Display -->
            <div id="addressesSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-red-50 to-pink-50 border-2 border-red-200 rounded-xl p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-gray-800">
                            <i class="fas fa-list mr-2 text-red-600" aria-hidden="true"></i>
                            Generated Addresses
                        </h3>
                        <div class="flex space-x-2">
                            <button id="copyAllBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors text-sm">
                                <i class="fas fa-copy mr-2" aria-hidden="true"></i>
                                Copy All
                            </button>
                            <button id="exportBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors text-sm">
                                <i class="fas fa-download mr-2" aria-hidden="true"></i>
                                Export
                            </button>
                        </div>
                    </div>
                    
                    <!-- Addresses Container -->
                    <div id="addressesList" class="space-y-4 max-h-96 overflow-y-auto">
                        <!-- Addresses will be populated here -->
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center mt-6">
                        <button id="generateMoreBtn" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-plus mr-2" aria-hidden="true"></i>
                            Generate More
                        </button>
                        <button id="clearBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-trash mr-2" aria-hidden="true"></i>
                            Clear All
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Usage Examples -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-lightbulb mr-3 text-yellow-500" aria-hidden="true"></i>
                Common Use Cases
            </h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-blue-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-code text-2xl text-blue-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Software Testing</h3>
                    </div>
                    <p class="text-gray-600">Use for testing address validation, form submissions, and database operations without using real personal information.</p>
                </div>

                <div class="bg-green-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-database text-2xl text-green-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Database Seeding</h3>
                    </div>
                    <p class="text-gray-600">Populate development databases with realistic address data for comprehensive testing scenarios.</p>
                </div>

                <div class="bg-purple-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-desktop text-2xl text-purple-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">UI/UX Design</h3>
                    </div>
                    <p class="text-gray-600">Create mockups and prototypes with realistic address data to demonstrate form layouts and address displays.</p>
                </div>

                <div class="bg-orange-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-shield-alt text-2xl text-orange-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Privacy Protection</h3>
                    </div>
                    <p class="text-gray-600">Avoid using real addresses in public demos, tutorials, and educational materials to protect privacy.</p>
                </div>

                <div class="bg-pink-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-play-circle text-2xl text-pink-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Demo Applications</h3>
                    </div>
                    <p class="text-gray-600">Showcase applications with realistic data without compromising actual customer information.</p>
                </div>

                <div class="bg-indigo-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-graduation-cap text-2xl text-indigo-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Educational Projects</h3>
                    </div>
                    <p class="text-gray-600">Use in coding bootcamps, computer science courses, and training programs for realistic examples.</p>
                </div>
            </div>
        </section>

        <!-- Important Notice -->
        <section class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-r-xl mb-8">
            <div class="flex items-start">
                <i class="fas fa-exclamation-triangle text-yellow-600 text-xl mr-3 mt-1" aria-hidden="true"></i>
                <div>
                    <h3 class="text-lg font-semibold text-yellow-800 mb-2">Important Notice</h3>
                    <p class="text-yellow-700 mb-2">
                        These addresses are generated for <strong>testing and development purposes only</strong>. They should not be used for:
                    </p>
                    <ul class="list-disc list-inside text-yellow-700 space-y-1">
                        <li>Mail delivery or shipping</li>
                        <li>Official documentation</li>
                        <li>Identity verification</li>
                        <li>Fraudulent activities</li>
                        <li>Any illegal purposes</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- FAQs Section -->
        <section class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-question-circle mr-3 text-purple-600" aria-hidden="true"></i>
                Frequently Asked Questions
            </h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-blue-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Are these real addresses?</h3>
                    <p class="text-gray-600">No, these are randomly generated fictional addresses created for testing purposes. While they follow real US address formats and may use real ZIP codes and city names, the specific combinations are fictional.</p>
                </div>
                
                <div class="border-l-4 border-green-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Can I use these for shipping?</h3>
                    <p class="text-gray-600">Absolutely not. These addresses are not real locations and should never be used for mail delivery, package shipping, or any actual postal services. They are strictly for development and testing purposes.</p>
                </div>
                
                <div class="border-l-4 border-orange-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How are the addresses generated?</h3>
                    <p class="text-gray-600">Addresses are created using algorithms that combine random house numbers, street names, and real city/state/ZIP combinations to create realistic-looking but fictional addresses.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Is this service free?</h3>
                    <p class="text-gray-600">Yes, this random address generator is completely free to use for testing and development purposes. There are no limits on the number of addresses you can generate.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class RandomAddressGenerator {
            constructor() {
                this.streetNames = ['Main', 'Oak', 'Pine', 'Maple', 'Cedar', 'Elm', 'Washington', 'Park', 'Hill', 'First', 'Second', 'Third', 'Broadway', 'Church', 'Spring', 'State', 'High', 'School', 'Union', 'Water'];
                this.streetTypes = ['St', 'Ave', 'Dr', 'Ln', 'Rd', 'Blvd', 'Way', 'Ct', 'Pl', 'Ter'];
                this.firstNames = ['James', 'Mary', 'John', 'Patricia', 'Robert', 'Jennifer', 'Michael', 'Linda', 'William', 'Elizabeth', 'David', 'Barbara', 'Richard', 'Susan', 'Joseph', 'Jessica', 'Thomas', 'Sarah', 'Christopher', 'Karen'];
                this.lastNames = ['Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Garcia', 'Miller', 'Davis', 'Rodriguez', 'Martinez', 'Hernandez', 'Lopez', 'Gonzalez', 'Wilson', 'Anderson', 'Thomas', 'Taylor', 'Moore', 'Jackson', 'Martin'];
                
                this.cities = {
                    'CA': [
                        {name: 'Los Angeles', zip: '90210'}, {name: 'San Francisco', zip: '94102'}, {name: 'San Diego', zip: '92101'},
                        {name: 'Sacramento', zip: '95814'}, {name: 'Fresno', zip: '93650'}, {name: 'Long Beach', zip: '90802'}
                    ],
                    'TX': [
                        {name: 'Houston', zip: '77002'}, {name: 'Dallas', zip: '75201'}, {name: 'Austin', zip: '78701'},
                        {name: 'San Antonio', zip: '78205'}, {name: 'Fort Worth', zip: '76102'}, {name: 'El Paso', zip: '79901'}
                    ],
                    'FL': [
                        {name: 'Miami', zip: '33101'}, {name: 'Orlando', zip: '32801'}, {name: 'Tampa', zip: '33602'},
                        {name: 'Jacksonville', zip: '32202'}, {name: 'Fort Lauderdale', zip: '33301'}, {name: 'St. Petersburg', zip: '33701'}
                    ],
                    'NY': [
                        {name: 'New York', zip: '10001'}, {name: 'Buffalo', zip: '14201'}, {name: 'Albany', zip: '12207'},
                        {name: 'Rochester', zip: '14604'}, {name: 'Syracuse', zip: '13202'}, {name: 'Yonkers', zip: '10701'}
                    ],
                    'PA': [
                        {name: 'Philadelphia', zip: '19102'}, {name: 'Pittsburgh', zip: '15222'}, {name: 'Allentown', zip: '18101'},
                        {name: 'Erie', zip: '16501'}, {name: 'Reading', zip: '19601'}, {name: 'Scranton', zip: '18503'}
                    ]
                };

                this.generatedAddresses = [];
                this.init();
            }

            init() {
                this.bindEvents();
            }

            bindEvents() {
                document.getElementById('generateBtn').addEventListener('click', () => this.generateAddresses());
                document.getElementById('generateMoreBtn')?.addEventListener('click', () => this.generateAddresses());
                document.getElementById('copyAllBtn')?.addEventListener('click', () => this.copyAllAddresses());
                document.getElementById('exportBtn')?.addEventListener('click', () => this.exportAddresses());
                document.getElementById('clearBtn')?.addEventListener('click', () => this.clearAddresses());
            }

            generateAddresses() {
                const count = parseInt(document.getElementById('addressCount').value);
                const stateFilter = document.getElementById('stateFilter').value;
                const addressType = document.getElementById('addressType').value;
                
                const includePhone = document.getElementById('includePhone').checked;
                const includeEmail = document.getElementById('includeEmail').checked;
                const includeName = document.getElementById('includeName').checked;
                const includeApartment = document.getElementById('includeApartment').checked;

                for (let i = 0; i < count; i++) {
                    const address = this.createRandomAddress(stateFilter, addressType, {
                        includePhone,
                        includeEmail,
                        includeName,
                        includeApartment
                    });
                    this.generatedAddresses.push(address);
                }

                this.displayAddresses();
            }

            createRandomAddress(stateFilter, addressType, options) {
                // Select state
                const states = stateFilter ? [stateFilter] : Object.keys(this.cities);
                const randomState = states[Math.floor(Math.random() * states.length)];
                
                // Get cities for selected state or default
                let availableCities = this.cities[randomState];
                if (!availableCities) {
                    availableCities = this.cities['CA']; // Fallback
                }
                
                const randomCity = availableCities[Math.floor(Math.random() * availableCities.length)];

                // Generate street address
                const houseNumber = Math.floor(Math.random() * 9999) + 1;
                const streetName = this.streetNames[Math.floor(Math.random() * this.streetNames.length)];
                const streetType = this.streetTypes[Math.floor(Math.random() * this.streetTypes.length)];
                
                let streetAddress = `${houseNumber} ${streetName} ${streetType}`;
                
                // Add apartment number if requested
                if (options.includeApartment && Math.random() > 0.7) {
                    const aptNumber = Math.floor(Math.random() * 999) + 1;
                    streetAddress += ` Apt ${aptNumber}`;
                }

                const address = {
                    street: streetAddress,
                    city: randomCity.name,
                    state: randomState,
                    zip: this.generateZipCode(randomCity.zip),
                    type: addressType === 'all' ? (Math.random() > 0.5 ? 'Residential' : 'Business') : 
                          addressType === 'residential' ? 'Residential' : 'Business'
                };

                // Add optional fields
                if (options.includeName) {
                    const firstName = this.firstNames[Math.floor(Math.random() * this.firstNames.length)];
                    const lastName = this.lastNames[Math.floor(Math.random() * this.lastNames.length)];
                    address.name = `${firstName} ${lastName}`;
                }

                if (options.includePhone) {
                    address.phone = this.generatePhoneNumber();
                }

                if (options.includeEmail && address.name) {
                    const emailName = address.name.toLowerCase().replace(' ', '.');
                    const domains = ['gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com', 'aol.com'];
                    const domain = domains[Math.floor(Math.random() * domains.length)];
                    address.email = `${emailName}${Math.floor(Math.random() * 999)}@${domain}`;
                }

                return address;
            }

            generateZipCode(baseZip) {
                const base = parseInt(baseZip.substring(0, 3));
                const random = Math.floor(Math.random() * 99);
                return `${base}${random.toString().padStart(2, '0')}`;
            }

            generatePhoneNumber() {
                const areaCode = Math.floor(Math.random() * 999) + 100;
                const exchange = Math.floor(Math.random() * 999) + 100;
                const number = Math.floor(Math.random() * 9999) + 1000;
                return `(${areaCode}) ${exchange}-${number}`;
            }

            displayAddresses() {
                const addressesSection = document.getElementById('addressesSection');
                const addressesList = document.getElementById('addressesList');
                
                addressesSection.classList.remove('hidden');
                
                // Clear existing content
                addressesList.innerHTML = '';

                this.generatedAddresses.forEach((address, index) => {
                    const addressCard = this.createAddressCard(address, index);
                    addressesList.appendChild(addressCard);
                });

                // Scroll to results
                addressesSection.scrollIntoView({ behavior: 'smooth' });
            }

            createAddressCard(address, index) {
                const card = document.createElement('div');
                card.className = 'address-card bg-white p-4 rounded-lg shadow-md';
                
                let cardHTML = `
                    <div class="flex justify-between items-start mb-3">
                        <div class="flex items-center">
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2 py-1 rounded mr-2">#${index + 1}</span>
                            <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">${address.type}</span>
                        </div>
                        <button onclick="copyAddress(${index})" class="text-blue-600 hover:text-blue-800 text-sm">
                            <i class="fas fa-copy" aria-hidden="true"></i> Copy
                        </button>
                    </div>
                `;

                if (address.name) {
                    cardHTML += `<div class="font-semibold text-gray-800 mb-1">${address.name}</div>`;
                }

                cardHTML += `
                    <div class="text-gray-700 mb-1">${address.street}</div>
                    <div class="text-gray-700 mb-2">${address.city}, ${address.state} ${address.zip}</div>
                `;

                if (address.phone || address.email) {
                    cardHTML += '<div class="text-sm text-gray-600 space-y-1">';
                    if (address.phone) {
                        cardHTML += `<div><i class="fas fa-phone mr-2" aria-hidden="true"></i>${address.phone}</div>`;
                    }
                    if (address.email) {
                        cardHTML += `<div><i class="fas fa-envelope mr-2" aria-hidden="true"></i>${address.email}</div>`;
                    }
                    cardHTML += '</div>';
                }

                card.innerHTML = cardHTML;
                return card;
            }

            copyAllAddresses() {
                const text = this.generatedAddresses.map(addr => this.formatAddressText(addr)).join('\n\n');
                this.copyToClipboard(text);
            }

            formatAddressText(address) {
                let text = '';
                if (address.name) text += `${address.name}\n`;
                text += `${address.street}\n`;
                text += `${address.city}, ${address.state} ${address.zip}`;
                if (address.phone) text += `\nPhone: ${address.phone}`;
                if (address.email) text += `\nEmail: ${address.email}`;
                return text;
            }

            copyToClipboard(text) {
                navigator.clipboard.writeText(text).then(() => {
                    this.showCopySuccess();
                }).catch(() => {
                    // Fallback for older browsers
                    const textarea = document.createElement('textarea');
                    textarea.value = text;
                    document.body.appendChild(textarea);
                    textarea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textarea);
                    this.showCopySuccess();
                });
            }

            showCopySuccess() {
                const btn = document.getElementById('copyAllBtn');
                btn.classList.add('copy-success');
                btn.innerHTML = '<i class="fas fa-check mr-2" aria-hidden="true"></i>Copied!';
                setTimeout(() => {
                    btn.classList.remove('copy-success');
                    btn.innerHTML = '<i class="fas fa-copy mr-2" aria-hidden="true"></i>Copy All';
                }, 2000);
            }

            exportAddresses() {
                const data = this.generatedAddresses.map(addr => this.formatAddressText(addr)).join('\n\n');
                const blob = new Blob([data], { type: 'text/plain' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'random_addresses.txt';
                a.click();
                URL.revokeObjectURL(url);
            }

            clearAddresses() {
                this.generatedAddresses = [];
                document.getElementById('addressesSection').classList.add('hidden');
            }
        }

        // Global function for copy buttons
        function copyAddress(index) {
            const address = generator.generatedAddresses[index];
            const text = generator.formatAddressText(address);
            generator.copyToClipboard(text);
        }

        // Initialize generator when page loads
        let generator;
        document.addEventListener('DOMContentLoaded', () => {
            generator = new RandomAddressGenerator();
        });

        // Add scroll animations
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            });

            document.querySelectorAll('section').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>