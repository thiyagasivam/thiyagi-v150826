<?php
$pageTitle = 'Service Centers Directory | Find Authorized Repair Locations Near You';
$pageDescription = 'Browse popular brands and find authorized service centers near you. Quick search, mobile-friendly layout, and direct links to official repair locations.';
include '../header.php';
?>
<?php include 'breadcrumb-schema.php';?>

    <style>
        .brand-card:hover { transform: translateY(-6px); box-shadow: 0 12px 28px -6px rgba(0,0,0,0.18); }
        .brand-card { transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease; }
        .glass { backdrop-filter: saturate(180%) blur(8px); background: rgba(255,255,255,.65); }
    </style>

<body class="bg-gray-50">
    <!-- Hero / Search -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-blue-50 via-indigo-50 to-transparent"></div>
        <div class="relative container mx-auto px-4 py-10 sm:py-14">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-xs font-medium text-blue-700 bg-blue-100 rounded-full px-3 py-1 mb-3">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    Service Center Directory
                </span>
                <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">Find authorized repair locations</h1>
                <p class="mt-2 text-gray-600">Search brand service centers and contact official support faster. Mobile-friendly and always up to date.</p>
            </div>
            <div class="mt-6 max-w-2xl">
                <div class="glass rounded-xl border border-white/60 shadow-sm">
                    <div class="relative">
                        <label for="brandSearch" class="sr-only">Search brands</label>
                        <input id="brandSearch" type="text" placeholder="Search brands (e.g., Apple, Dell, Xiaomi)" autocomplete="off"
                               class="w-full pl-11 pr-24 py-3 sm:py-3.5 bg-transparent rounded-xl outline-none placeholder:text-gray-400">
                        <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <button id="clearSearch" type="button" class="hidden absolute right-2 top-1/2 -translate-y-1/2 text-xs px-3 py-1.5 rounded-lg text-gray-700 bg-gray-100 hover:bg-gray-200">Clear</button>
                    </div>
                    <div class="flex items-center justify-between px-4 py-2 text-xs text-gray-600">
                        <div id="brandStats" aria-live="polite">Showing <span id="shownCount">–</span> of <span id="totalCount">–</span> brands</div>
                        <a href="#all-brands" class="text-blue-700 hover:text-blue-800 font-medium">Browse all</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <main class="container mx-auto px-4 pb-12 -mt-3">
                <div class="mb-8">
                        <div class="flex items-center justify-between gap-3 mb-3">
                                <h2 class="text-xl sm:text-2xl font-semibold text-gray-900">Popular Brands</h2>
                                <span class="hidden sm:inline-flex items-center text-xs px-2.5 py-1 rounded-full bg-gray-100 text-gray-700">Curated</span>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 sm:gap-4">
                <!-- Brand Cards -->
                                <a href="/service-center/apple/" aria-label="Apple service centers" class="brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fab fa-apple text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Apple</h3>
                </a>

                                <a href="/service-center/motorola/" aria-label="Motorola service centers" class="brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-mobile-alt text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Motorola</h3>
                </a>

                                <a href="/service-center/xiaomi/" aria-label="Xiaomi service centers" class="brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-bolt text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Xiaomi</h3>
                </a>

                                <a href="/service-center/dell/" aria-label="Dell service centers" class="brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-laptop text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Dell</h3>
                </a>

                                <a href="/service-center/asus/" aria-label="Asus service centers" class="brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-laptop-code text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Asus</h3>
                </a>
            </div>
        </div>

                <div class="mb-4 sm:mb-8" id="all-brands">
                        <h2 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-3 sm:mb-4">All Brands</h2>
                        <div id="allBrandsGrid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 sm:gap-4">
                <!-- Alcatel -->
                                <a href="/service-center/alcatel/" data-brand="alcatel" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-mobile text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Alcatel</h3>
                </a>

                <!-- Apple (duplicate from popular, can remove if needed) -->
                                <a href="/service-center/apple/" data-brand="apple" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fab fa-apple text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Apple</h3>
                </a>

                <!-- Asus -->
                                <a href="/service-center/asus/" data-brand="asus" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-laptop-code text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Asus</h3>
                </a>

                <!-- BenQ -->
                                <a href="/service-center/benq/" data-brand="benq" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-tv text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">BenQ</h3>
                </a>

                <!-- Boat -->
                                <a href="/service-center/boat/" data-brand="boat" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-headphones text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Boat</h3>
                </a>

                <!-- Canon -->
                                <a href="/service-center/canon/" data-brand="canon" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-camera text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Canon</h3>
                </a>

                <!-- Casio -->
                                <a href="/service-center/casio/" data-brand="casio" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-watch text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Casio</h3>
                </a>

                <!-- Crompton -->
                                <a href="/service-center/crompton/" data-brand="crompton" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-lightbulb text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Crompton</h3>
                </a>

                <!-- Daikin -->
                                <a href="/service-center/daikin/" data-brand="daikin" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-snowflake text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Daikin</h3>
                </a>

                <!-- Dell -->
                                <a href="/service-center/dell/" data-brand="dell" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-laptop text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Dell</h3>
                </a>

                <!-- Xiaomi -->
                                <a href="/service-center/xiaomi/" data-brand="xiaomi" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-bolt text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Xiaomi</h3>
                </a>
                
                <!-- Godrej -->
                                <a href="/service-center/godrej/" data-brand="godrej" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-industry text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Godrej</h3>
                </a>

                <!-- Hero -->
                                <a href="/service-center/hero/" data-brand="hero" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-motorcycle text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Hero</h3>
                </a>

                <!-- Motorola -->
                                <a href="/service-center/motorola/" data-brand="motorola" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-mobile-alt text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Motorola</h3>
                </a>

                <!-- Poco -->
                                <a href="/service-center/poco/" data-brand="poco" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-mobile-alt text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Poco</h3>
                </a>

                <!-- Tata Motors -->
                                <a href="/service-center/tata-motors/" data-brand="tata motors" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-car text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">Tata Motors</h3>
                </a>

                <!-- TVS -->
                                <a href="/service-center/tvs/" data-brand="tvs" class="all-brand-item brand-card bg-white rounded-xl p-4 sm:p-5 flex flex-col items-center justify-center border border-gray-200 hover:border-blue-200">
                    <div class="bg-gray-100 p-3 rounded-full mb-3">
                        <i class="fas fa-motorcycle text-3xl text-gray-800"></i>
                    </div>
                    <h3 class="font-medium text-gray-800">TVS</h3>
                </a>
            </div>
                        <p id="noResults" class="hidden mt-4 text-sm text-gray-600">No brands match your search. Try a different keyword.</p>
        </div>
    </main>
    
        <!-- Enhance: client-side search/filter + stats -->
        <script>
            (function(){
                const input = document.getElementById('brandSearch');
                const clearBtn = document.getElementById('clearSearch');
                const items = Array.from(document.querySelectorAll('#allBrandsGrid .all-brand-item'));
                const totalCountEl = document.getElementById('totalCount');
                const shownCountEl = document.getElementById('shownCount');
                const noResultsEl = document.getElementById('noResults');

                function normalize(s){ return (s||'').toString().trim().toLowerCase(); }

                function updateStats(){
                    const shown = items.filter(el => !el.classList.contains('hidden')).length;
                    shownCountEl.textContent = shown;
                    totalCountEl.textContent = items.length;
                    noResultsEl.classList.toggle('hidden', shown !== 0);
                }

                function filter(){
                    const q = normalize(input.value);
                    clearBtn.classList.toggle('hidden', q.length === 0);
                    if(!q){ items.forEach(el => el.classList.remove('hidden')); updateStats(); return; }
                    items.forEach(el => {
                        const name = normalize(el.getAttribute('data-brand'));
                        el.classList.toggle('hidden', !name.includes(q));
                    });
                    updateStats();
                }

                input && input.addEventListener('input', filter);
                clearBtn && clearBtn.addEventListener('click', () => { input.value=''; input.focus(); filter(); });

                // Init on load
                if(items.length){ updateStats(); }
            })();
        </script>

</body>
<?php include '../footer.php';?>
</html>