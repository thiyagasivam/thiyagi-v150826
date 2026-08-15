<?php
$pageTitle = 'Canada Holidays 2026 | Complete Calendar | National & Provincial Holidays';
$pageDescription = 'Complete Canada Holiday Calendar 2026. Find all national holidays, provincial holidays, statutory holidays, and observances across all Canadian provinces and territories.';
$pageKeywords = 'Canada holidays 2026, Canadian holidays, statutory holidays Canada, provincial holidays, national holidays Canada, Victoria Day, Canada Day, Thanksgiving';
include '../../header.php';
?>

<style>
:root {
    --canada-red: #FF0000;
    --canada-white: #FFFFFF;
}
.bg-canada-red { background-color: var(--canada-red); }
.text-canada-red { color: var(--canada-red); }
.border-canada-red { border-color: var(--canada-red); }
</style>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 py-3 text-sm">
            <a href="../../" class="text-blue-600 hover:text-blue-800 flex items-center">
                <i class="fas fa-home mr-1"></i>
                Home
            </a>
            <span class="text-gray-500">/</span>
            <a href="../" class="text-blue-600 hover:text-blue-800">Holidays</a>
            <span class="text-gray-500">/</span>
            <span class="text-gray-900 font-medium">Canada Holidays 2026</span>
        </div>
    </div>
</nav>

<main class="container mx-auto px-4 py-8">
    <header class="mb-8">
        <h1 class="text-4xl font-bold text-center text-canada-red flex items-center justify-center gap-3">
            <i class="fas fa-maple-leaf text-canada-red"></i>
            Canada Holidays 2026
            <i class="fas fa-calendar-days text-blue-500"></i>
        </h1>
        <p class="text-center text-lg text-gray-700 mt-2">National and Provincial Holiday Calendar for Canada</p>
    </header>

    <section class="mb-10">
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-canada-red">
            <h2 class="text-2xl font-bold text-canada-red mb-4 flex items-center gap-2">
                <i class="fas fa-flag"></i>
                National Holidays 2026
            </h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">New Year's Day</h3>
                    <p class="text-gray-600">January 1, 2026 (Wednesday)</p>
                    <p class="text-sm text-gray-500 mt-1">National statutory holiday</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">Good Friday</h3>
                    <p class="text-gray-600">April 18, 2026 (Friday)</p>
                    <p class="text-sm text-gray-500 mt-1">National statutory holiday</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">Victoria Day</h3>
                    <p class="text-gray-600">May 19, 2026 (Monday)</p>
                    <p class="text-sm text-gray-500 mt-1">National statutory holiday</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">Canada Day</h3>
                    <p class="text-gray-600">July 1, 2026 (Tuesday)</p>
                    <p class="text-sm text-gray-500 mt-1">National statutory holiday</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">Labour Day</h3>
                    <p class="text-gray-600">September 1, 2026 (Monday)</p>
                    <p class="text-sm text-gray-500 mt-1">National statutory holiday</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">Thanksgiving</h3>
                    <p class="text-gray-600">October 13, 2026 (Monday)</p>
                    <p class="text-sm text-gray-500 mt-1">National statutory holiday</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">Christmas Day</h3>
                    <p class="text-gray-600">December 25, 2026 (Thursday)</p>
                    <p class="text-sm text-gray-500 mt-1">National statutory holiday</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">Boxing Day</h3>
                    <p class="text-gray-600">December 26, 2026 (Friday)</p>
                    <p class="text-sm text-gray-500 mt-1">Federal statutory holiday</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-10">
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
            <h2 class="text-2xl font-bold text-blue-800 mb-4 flex items-center gap-2">
                <i class="fas fa-map"></i>
                Provincial Holiday Calendars
            </h2>
            <p class="text-gray-600 mb-4">Click on your province to view complete holiday calendar with provincial-specific holidays:</p>
            <div class="grid md:grid-cols-3 gap-4">
                <a href="ontario-holidays.php" class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                    <h3 class="font-semibold text-blue-800 flex items-center gap-2">
                        <i class="fas fa-calendar"></i>
                        Ontario Holidays
                    </h3>
                    <p class="text-sm text-gray-600">Family Day, Civic Holiday</p>
                </a>
                <a href="quebec-holidays.php" class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                    <h3 class="font-semibold text-blue-800 flex items-center gap-2">
                        <i class="fas fa-calendar"></i>
                        Quebec Holidays
                    </h3>
                    <p class="text-sm text-gray-600">Patriots' Day, St-Jean-Baptiste</p>
                </a>
                <a href="british-columbia-holidays.php" class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                    <h3 class="font-semibold text-blue-800 flex items-center gap-2">
                        <i class="fas fa-calendar"></i>
                        British Columbia
                    </h3>
                    <p class="text-sm text-gray-600">Family Day, BC Day</p>
                </a>
                <a href="alberta-holidays.php" class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                    <h3 class="font-semibold text-blue-800 flex items-center gap-2">
                        <i class="fas fa-calendar"></i>
                        Alberta Holidays
                    </h3>
                    <p class="text-sm text-gray-600">Family Day, Heritage Day</p>
                </a>
                <a href="nova-scotia-holidays.php" class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                    <h3 class="font-semibold text-blue-800 flex items-center gap-2">
                        <i class="fas fa-calendar"></i>
                        Nova Scotia
                    </h3>
                    <p class="text-sm text-gray-600">Heritage Day, Natal Day</p>
                </a>
                <a href="manitoba-holidays.php" class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                    <h3 class="font-semibold text-blue-800 flex items-center gap-2">
                        <i class="fas fa-calendar"></i>
                        Manitoba Holidays
                    </h3>
                    <p class="text-sm text-gray-600">Louis Riel Day, Terry Fox Day</p>
                </a>
                <a href="saskatchewan-holidays.php" class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                    <h3 class="font-semibold text-blue-800 flex items-center gap-2">
                        <i class="fas fa-calendar"></i>
                        Saskatchewan
                    </h3>
                    <p class="text-sm text-gray-600">Family Day, Saskatchewan Day</p>
                </a>
                <div class="bg-blue-50 p-4 rounded-lg opacity-75">
                    <h3 class="font-semibold text-gray-600">New Brunswick</h3>
                    <p class="text-sm text-gray-500">Coming Soon - New Brunswick Day</p>
                </div>
        </div>
    </section>

    <section class="mb-10">
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500">
            <h2 class="text-2xl font-bold text-green-800 mb-4 flex items-center gap-2">
                <i class="fas fa-info-circle"></i>
                Holiday Information
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold text-lg mb-2">Statutory Holidays</h3>
                    <p class="text-gray-600 text-sm">
                        Statutory holidays are paid holidays for eligible employees. Most businesses, banks, and government offices are closed on these days.
                    </p>
                </div>
                <div>
                    <h3 class="font-semibold text-lg mb-2">Provincial Variations</h3>
                    <p class="text-gray-600 text-sm">
                        While national holidays are observed across Canada, each province and territory may have additional holidays specific to their region.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

    <!-- Bank Holidays Section -->
    <section class="mt-12 bg-gradient-to-br from-green-50 to-emerald-50 rounded-lg shadow-lg p-8 border-l-4 border-green-500">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center flex items-center justify-center space-x-3">
                <i class="fas fa-university text-green-600"></i>
                <span>Bank Holidays 2026</span>
                <i class="fas fa-credit-card text-green-500"></i>
            </h2>
            
            <div class="mb-6 bg-white rounded-lg p-6 border border-green-200 shadow-sm">
                <div class="flex items-center space-x-3 mb-4">
                    <i class="fas fa-info-circle text-blue-500 text-xl"></i>
                    <h3 class="text-xl font-semibold text-gray-800">Important Banking Information</h3>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Banks across Canada are typically closed on federal statutory holidays. Provincial holidays may also affect banking hours depending on the province. 
                    ATMs and online banking services remain available 24/7. Always check with your specific bank for their holiday schedule.
                </p>
            </div>

            <div class="grid lg:grid-cols-1 gap-8">
                <!-- Federal Bank Holidays -->
                <div class="bg-white rounded-lg shadow-md p-6 border border-blue-200">
                    <h3 class="text-2xl font-bold text-blue-700 mb-6 flex items-center space-x-3">
                        <i class="fas fa-flag text-blue-600"></i>
                        <span>Federal Bank Holidays</span>
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3">
                                <div class="bg-blue-100 rounded-full p-2">
                                    <i class="fas fa-calendar-day text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800">New Year's Day</div>
                                    <div class="text-sm text-gray-600">Wednesday, Jan 1, 2026</div>
                                </div>
                            </div>
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-times-circle mr-1"></i>Closed
                            </span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3">
                                <div class="bg-blue-100 rounded-full p-2">
                                    <i class="fas fa-cross text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800">Good Friday</div>
                                    <div class="text-sm text-gray-600">Friday, Apr 18, 2026</div>
                                </div>
                            </div>
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-times-circle mr-1"></i>Closed
                            </span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3">
                                <div class="bg-blue-100 rounded-full p-2">
                                    <i class="fas fa-crown text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800">Victoria Day</div>
                                    <div class="text-sm text-gray-600">Monday, May 19, 2026</div>
                                </div>
                            </div>
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-times-circle mr-1"></i>Closed
                            </span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3">
                                <div class="bg-blue-100 rounded-full p-2">
                                    <i class="fas fa-maple-leaf text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800">Canada Day</div>
                                    <div class="text-sm text-gray-600">Tuesday, Jul 1, 2026</div>
                                </div>
                            </div>
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-times-circle mr-1"></i>Closed
                            </span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3">
                                <div class="bg-blue-100 rounded-full p-2">
                                    <i class="fas fa-hammer text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800">Labour Day</div>
                                    <div class="text-sm text-gray-600">Monday, Sep 1, 2026</div>
                                </div>
                            </div>
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-times-circle mr-1"></i>Closed
                            </span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3">
                                <div class="bg-blue-100 rounded-full p-2">
                                    <i class="fas fa-feather text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800">Truth and Reconciliation Day</div>
                                    <div class="text-sm text-gray-600">Tuesday, Sep 30, 2026</div>
                                </div>
                            </div>
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-times-circle mr-1"></i>Closed
                            </span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3">
                                <div class="bg-blue-100 rounded-full p-2">
                                    <i class="fas fa-turkey text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800">Thanksgiving</div>
                                    <div class="text-sm text-gray-600">Monday, Oct 13, 2026</div>
                                </div>
                            </div>
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-times-circle mr-1"></i>Closed
                            </span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3">
                                <div class="bg-blue-100 rounded-full p-2">
                                    <i class="fas fa-tree text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800">Christmas Day</div>
                                    <div class="text-sm text-gray-600">Thursday, Dec 25, 2026</div>
                                </div>
                            </div>
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-times-circle mr-1"></i>Closed
                            </span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3">
                                <div class="bg-blue-100 rounded-full p-2">
                                    <i class="fas fa-gift text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800">Boxing Day</div>
                                    <div class="text-sm text-gray-600">Friday, Dec 26, 2026</div>
                                </div>
                            </div>
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-times-circle mr-1"></i>Closed
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bank Holiday Summary Stats -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg p-6 text-center shadow-md border border-gray-200">
                    <div class="text-3xl font-bold text-blue-600">9</div>
                    <div class="text-sm text-gray-600">Federal Bank Holidays</div>
                </div>
                <div class="bg-white rounded-lg p-6 text-center shadow-md border border-gray-200">
                    <div class="text-3xl font-bold text-green-600">10</div>
                    <div class="text-sm text-gray-600">Total Provinces</div>
                </div>
                <div class="bg-white rounded-lg p-6 text-center shadow-md border border-gray-200">
                    <div class="text-3xl font-bold text-orange-600">2-3</div>
                    <div class="text-sm text-gray-600">Provincial Holidays per Province</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="mt-12 bg-white rounded-lg shadow-lg p-8 border-l-4 border-canada-red">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center flex items-center justify-center space-x-3">
                <i class="fas fa-question-circle text-canada-red"></i>
                <span>Frequently Asked Questions</span>
                <i class="fas fa-lightbulb text-yellow-500"></i>
            </h2>
            <div class="space-y-6">
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">What are the federal statutory holidays in Canada 2026?</h3>
                    <p class="text-gray-700 leading-relaxed">Canada observes 9 federal statutory holidays: New Year's Day, Good Friday, Victoria Day, Canada Day, Labour Day, Truth and Reconciliation Day, Thanksgiving, Christmas Day, and Boxing Day.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Do all provinces observe the same holidays?</h3>
                    <p class="text-gray-700 leading-relaxed">All provinces observe federal statutory holidays, but each province also has its own provincial holidays. These vary by province and may have different names or dates.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Is Truth and Reconciliation Day observed across Canada?</h3>
                    <p class="text-gray-700 leading-relaxed">Yes, Truth and Reconciliation Day (September 30) is a federal statutory holiday observed across Canada since 2021, honoring survivors of residential schools and their families.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Are banks closed on all statutory holidays?</h3>
                    <p class="text-gray-700 leading-relaxed">Banks are typically closed on federal statutory holidays and may also be closed on provincial holidays depending on the province. ATMs and online banking remain available 24/7.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">What is Family Day and which provinces observe it?</h3>
                    <p class="text-gray-700 leading-relaxed">Family Day is a provincial holiday observed on the third Monday in February by Alberta, Ontario, Saskatchewan, and New Brunswick. Manitoba calls it Louis Riel Day, and BC also observes Family Day.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Do employees get paid for statutory holidays in Canada?</h3>
                    <p class="text-gray-700 leading-relaxed">Under federal and provincial employment standards, eligible employees are entitled to statutory holiday pay. Rules vary by province and employment terms.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">What happens if a statutory holiday falls on a weekend?</h3>
                    <p class="text-gray-700 leading-relaxed">If a statutory holiday falls on a non-working day, it is usually observed on the next working day. Specific rules may vary by province and employer.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Is Remembrance Day a statutory holiday in all provinces?</h3>
                    <p class="text-gray-700 leading-relaxed">Remembrance Day (November 11) is a federal statutory holiday, but not all provinces observe it as a statutory holiday. It is statutory in some provinces like Newfoundland, New Brunswick, Prince Edward Island, and others.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Are there differences between provinces for civic holidays?</h3>
                    <p class="text-gray-700 leading-relaxed">Yes, the first Monday in August is observed differently across provinces - Ontario calls it Civic Holiday, Alberta has Heritage Day, BC has BC Day, Manitoba has Terry Fox Day, etc.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">How can I find specific holiday information for my province?</h3>
                    <p class="text-gray-700 leading-relaxed">Visit the specific province page on this site or check your provincial government's official website for detailed information about provincial statutory holidays and employment standards.</p>
                </div>
            </div>
        </div>
    </section>

<?php include '../../footer.php'; ?>
