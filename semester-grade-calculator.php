<?php include 'header.php';?>
<?php
$gradeScales = [
    '4.0' => [
        'A+' => 4.0, 'A' => 4.0, 'A-' => 3.7,
        'B+' => 3.3, 'B' => 3.0, 'B-' => 2.7,
        'C+' => 2.3, 'C' => 2.0, 'C-' => 1.7,
        'D+' => 1.3, 'D' => 1.0, 'D-' => 0.7,
        'F'  => 0.0
    ],
    '10.0' => [
        'A+' => 10, 'A' => 9, 'B+' => 8, 'B' => 7,
        'C+' => 6,  'C' => 5, 'D'  => 4, 'F' => 0
    ]
];
?>
<title>Semester Grade Calculator – Calculate GPA Instantly | Free Online Tool 2026</title>
<meta name="description" content="Free semester GPA calculator to calculate your grade point average based on credits and grades. Add unlimited courses, get instant GPA results with our easy-to-use tool.">
<meta name="keywords" content="semester grade calculator, GPA calculator, semester GPA calculator, college grade calculator, calculate GPA online, CGPA calculator, grade point average calculator 2026">
<meta property="og:title" content="Semester Grade Calculator – Calculate GPA Instantly">
<meta property="og:description" content="Free semester GPA calculator to calculate your grade point average based on credits and grades.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/semester-grade-calculator">
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<style>
    .fade-in{animation:fadeIn .35s ease}@keyframes fadeIn{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
    .card-hover{transition:transform .18s,box-shadow .18s}.card-hover:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(0,0,0,.07)}
    .gpa-circle{width:150px;height:150px;border-radius:50%;display:flex;flex-direction:column;align-items:center;justify-content:center;margin:0 auto;box-shadow:0 4px 28px rgba(16,185,129,.18)}
    .score-bar{height:8px;border-radius:999px;transition:width .5s ease}
    .tab-btn{transition:all .2s}.tab-btn.active{background:#2563eb;color:#fff;box-shadow:0 2px 8px rgba(37,99,235,.25)}
    @media print{.no-print{display:none!important}.print-only{display:block!important}}
    .print-only{display:none}
    .toast{position:fixed;bottom:24px;left:50%;transform:translateX(-50%) translateY(80px);background:#1e293b;color:#fff;padding:12px 28px;border-radius:12px;font-size:.95rem;opacity:0;transition:all .4s ease;z-index:9999;pointer-events:none}
    .toast.show{opacity:1;transform:translateX(-50%) translateY(0)}
    .course-row{animation:fadeIn .25s ease}
    select.grade-select{-webkit-appearance:none;appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath d='M6 8L1 3h10z' fill='%236b7280'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 12px center;padding-right:32px}
</style>
<body class="bg-gray-50 min-h-screen">

<!-- Toast -->
<div id="toast" class="toast"><i class="fas fa-check-circle mr-2"></i><span id="toastMsg">Copied!</span></div>

<!-- Hero -->
<section class="bg-gradient-to-br from-emerald-600 via-emerald-700 to-teal-800 text-white py-12 no-print">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold mb-3">Semester Grade Calculator</h1>
        <p class="text-emerald-100 text-lg max-w-2xl mx-auto">Calculate your semester GPA instantly. Add courses, enter grades and credit hours, and get your weighted GPA in real time.</p>
    </div>
</section>

<!-- Main Calculator -->
<section class="max-w-5xl mx-auto px-4 -mt-6 relative z-10 mb-12">
<div class="bg-white rounded-2xl shadow-lg p-6 md:p-10">

    <!-- Tab Navigation -->
    <div class="flex flex-wrap gap-2 justify-center mb-8 no-print">
        <button type="button" onclick="switchTab('gpa')" id="tabGpa" class="tab-btn active px-5 py-2.5 rounded-lg text-sm font-semibold border border-emerald-200"><i class="fas fa-graduation-cap mr-1"></i> GPA Calculator</button>
        <button type="button" onclick="switchTab('cgpa')" id="tabCgpa" class="tab-btn px-5 py-2.5 rounded-lg text-sm font-semibold border border-gray-200 bg-white text-gray-600"><i class="fas fa-layer-group mr-1"></i> CGPA Calculator</button>
        <button type="button" onclick="switchTab('goal')" id="tabGoal" class="tab-btn px-5 py-2.5 rounded-lg text-sm font-semibold border border-gray-200 bg-white text-gray-600"><i class="fas fa-bullseye mr-1"></i> GPA Goal</button>
    </div>

    <!-- Grading Scale Selector -->
    <div class="flex items-center justify-center gap-3 mb-6 no-print">
        <label class="text-sm font-medium text-gray-500">Grading Scale:</label>
        <select id="scaleSelect" onchange="onScaleChange()" class="border border-gray-200 rounded-lg px-4 py-2 text-sm font-semibold focus:ring-2 focus:ring-emerald-300 focus:outline-none">
            <option value="4.0" selected>4.0 Scale (US Standard)</option>
            <option value="10.0">10.0 Scale (India)</option>
        </select>
    </div>

    <!-- ==================== GPA TAB ==================== -->
    <div id="panelGpa">

        <!-- Course Table -->
        <div class="overflow-x-auto mb-4">
            <table class="w-full text-sm" id="courseTable">
                <thead>
                    <tr class="bg-emerald-50 text-left">
                        <th class="px-3 py-3 rounded-tl-lg font-bold text-gray-700 w-8">#</th>
                        <th class="px-3 py-3 font-bold text-gray-700">Course Name</th>
                        <th class="px-3 py-3 font-bold text-gray-700 w-28 text-center">Credits</th>
                        <th class="px-3 py-3 font-bold text-gray-700 w-32 text-center">Grade</th>
                        <th class="px-3 py-3 font-bold text-gray-700 w-28 text-center">Points</th>
                        <th class="px-3 py-3 rounded-tr-lg w-12"></th>
                    </tr>
                </thead>
                <tbody id="courseBody"></tbody>
            </table>
        </div>

        <!-- Add / Action Buttons -->
        <div class="flex flex-wrap gap-3 mb-6 no-print">
            <button onclick="addCourse()" class="px-4 py-2.5 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm transition shadow-sm"><i class="fas fa-plus mr-1"></i> Add Course</button>
            <button onclick="addSampleData()" class="px-4 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold text-sm transition"><i class="fas fa-magic mr-1"></i> Sample Data</button>
            <button onclick="resetGpa()" class="px-4 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold text-sm transition"><i class="fas fa-redo mr-1"></i> Reset</button>
            <button onclick="shareResults()" class="px-4 py-2.5 rounded-lg bg-blue-50 hover:bg-blue-100 text-blue-700 font-semibold text-sm transition"><i class="fas fa-share-alt mr-1"></i> Share</button>
            <button onclick="window.print()" class="px-4 py-2.5 rounded-lg bg-green-50 hover:bg-green-100 text-green-700 font-semibold text-sm transition"><i class="fas fa-print mr-1"></i> Print</button>
        </div>

        <!-- Results -->
        <div id="gpaResults" class="fade-in" style="display:none">
            <hr class="mb-8">

            <!-- GPA Circle -->
            <div class="text-center mb-8">
                <p class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Semester GPA</p>
                <div id="gpaCircle" class="gpa-circle bg-gradient-to-br from-emerald-500 to-teal-600 text-white">
                    <span class="text-4xl font-extrabold" id="gpaValue">0.00</span>
                    <span class="text-xs opacity-80 mt-1" id="gpaScaleLabel">/ 4.0</span>
                </div>
                <p id="gpaDesc" class="mt-3 text-lg font-semibold text-gray-600"></p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                <div class="text-center p-4 rounded-xl bg-emerald-50 card-hover">
                    <p class="text-xs font-semibold text-emerald-500 uppercase mb-1">GPA</p>
                    <p id="statGpa" class="text-2xl font-extrabold text-emerald-700">—</p>
                </div>
                <div class="text-center p-4 rounded-xl bg-blue-50 card-hover">
                    <p class="text-xs font-semibold text-blue-500 uppercase mb-1">Total Credits</p>
                    <p id="statCredits" class="text-2xl font-extrabold text-blue-700">—</p>
                </div>
                <div class="text-center p-4 rounded-xl bg-purple-50 card-hover">
                    <p class="text-xs font-semibold text-purple-500 uppercase mb-1">Total Points</p>
                    <p id="statPoints" class="text-2xl font-extrabold text-purple-700">—</p>
                </div>
                <div class="text-center p-4 rounded-xl bg-orange-50 card-hover">
                    <p class="text-xs font-semibold text-orange-500 uppercase mb-1">Courses</p>
                    <p id="statCourses" class="text-2xl font-extrabold text-orange-700">—</p>
                </div>
            </div>

            <!-- Grade Breakdown Table -->
            <div class="mb-8">
                <h3 class="font-bold text-gray-800 mb-3"><i class="fas fa-table text-emerald-500 mr-2"></i>Grade Breakdown</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border border-gray-100 rounded-xl overflow-hidden">
                        <thead><tr class="bg-gray-50"><th class="px-4 py-2.5 text-left font-bold text-gray-700">Course</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Credits</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Grade</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Grade Pts</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Weighted Pts</th></tr></thead>
                        <tbody id="breakdownBody"></tbody>
                        <tfoot id="breakdownFoot"></tfoot>
                    </table>
                </div>
            </div>

            <!-- Chart -->
            <div class="max-w-lg mx-auto mb-8">
                <canvas id="gradeChart" height="220"></canvas>
            </div>
        </div>
    </div>

    <!-- ==================== CGPA TAB ==================== -->
    <div id="panelCgpa" style="display:none">
        <div class="max-w-xl mx-auto">
            <h3 class="font-bold text-gray-800 mb-1"><i class="fas fa-layer-group text-emerald-500 mr-2"></i>Cumulative GPA Calculator</h3>
            <p class="text-sm text-gray-400 mb-6">Enter each semester's GPA and credits to calculate your cumulative GPA across all semesters.</p>

            <div class="overflow-x-auto mb-4">
                <table class="w-full text-sm" id="cgpaTable">
                    <thead>
                        <tr class="bg-emerald-50 text-left">
                            <th class="px-3 py-3 rounded-tl-lg font-bold text-gray-700 w-12">Sem</th>
                            <th class="px-3 py-3 font-bold text-gray-700 text-center">GPA</th>
                            <th class="px-3 py-3 font-bold text-gray-700 text-center">Credits</th>
                            <th class="px-3 py-3 rounded-tr-lg w-12"></th>
                        </tr>
                    </thead>
                    <tbody id="cgpaBody"></tbody>
                </table>
            </div>

            <div class="flex gap-3 mb-6 no-print">
                <button onclick="addSemester()" class="px-4 py-2.5 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm transition shadow-sm"><i class="fas fa-plus mr-1"></i> Add Semester</button>
                <button onclick="resetCgpa()" class="px-4 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold text-sm transition"><i class="fas fa-redo mr-1"></i> Reset</button>
            </div>

            <!-- CGPA Result -->
            <div id="cgpaResult" class="text-center p-6 bg-gradient-to-br from-emerald-50 to-teal-50 border border-emerald-100 rounded-xl" style="display:none">
                <p class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2">Cumulative GPA</p>
                <p id="cgpaValue" class="text-4xl font-extrabold text-emerald-700">0.00</p>
                <p id="cgpaMeta" class="text-sm text-gray-500 mt-2"></p>
            </div>

            <!-- CGPA Trend Chart -->
            <div class="max-w-lg mx-auto mt-6 mb-4">
                <canvas id="cgpaChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- ==================== GOAL TAB ==================== -->
    <div id="panelGoal" style="display:none">
        <div class="max-w-xl mx-auto">
            <h3 class="font-bold text-gray-800 mb-1"><i class="fas fa-bullseye text-emerald-500 mr-2"></i>GPA Goal Calculator</h3>
            <p class="text-sm text-gray-400 mb-6">Calculate what GPA you need in remaining credits to reach your target cumulative GPA.</p>

            <div class="space-y-4 mb-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">Current Cumulative GPA</label>
                    <input type="number" id="goalCurrentGpa" min="0" max="10" step="0.01" value="3.0" class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-emerald-300 focus:outline-none" oninput="calcGoal()">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">Credits Completed</label>
                    <input type="number" id="goalCompletedCredits" min="0" step="1" value="60" class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-emerald-300 focus:outline-none" oninput="calcGoal()">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">Remaining Credits</label>
                    <input type="number" id="goalRemainingCredits" min="1" step="1" value="30" class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-emerald-300 focus:outline-none" oninput="calcGoal()">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">Target Cumulative GPA</label>
                    <input type="number" id="goalTargetGpa" min="0" max="10" step="0.01" value="3.5" class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-emerald-300 focus:outline-none" oninput="calcGoal()">
                </div>
            </div>

            <div id="goalResult" class="p-6 bg-gradient-to-br from-indigo-50 to-blue-50 border border-indigo-100 rounded-xl"></div>
        </div>
    </div>

</div>
</section>

<!-- Print-only -->
<div class="print-only max-w-2xl mx-auto px-8 py-6">
    <h2 class="text-2xl font-bold mb-4 text-center">Semester GPA Report</h2>
    <div id="printContent"></div>
    <p class="text-xs text-gray-400 mt-8 text-center">Generated by thiyagi.com/semester-grade-calculator</p>
</div>

<!-- ==================== SEO LANDING PAGE CONTENT ==================== -->
<section class="max-w-5xl mx-auto px-4 mb-12 no-print">

    <!-- Introduction -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Semester Grade Calculator – Calculate Your GPA Online for Free</h2>
        <p class="text-gray-600 leading-relaxed mb-4">We have built this <strong>Semester Grade Calculator</strong> to give students a fast, accurate, and reliable tool for computing their <strong>semester GPA</strong> and <strong>cumulative GPA (CGPA)</strong> in seconds. Whether you are an undergraduate, graduate student, or high school learner, our calculator supports multiple <strong>grading scales</strong> — including the standard <strong>4.0 GPA scale</strong> used across the United States and the <strong>10-point scale</strong> widely adopted in India — and produces weighted results based on <strong>credit hours</strong> and <strong>course grades</strong>.</p>
        <p class="text-gray-600 leading-relaxed mb-4">The <strong>Grade Point Average (GPA)</strong> is one of the single most important metrics in academic life. It determines eligibility for <strong>scholarships, dean's list honours, graduate school admissions, internship opportunities,</strong> and <strong>employment prospects</strong>. Despite its importance, many students struggle with the mathematics behind weighted GPA calculation — especially when courses carry different credit weights. Our <strong>semester GPA calculator</strong> eliminates this confusion entirely by performing all weighted arithmetic instantly as you enter your course data.</p>
        <p class="text-gray-600 leading-relaxed">This tool is production-grade, mobile-responsive, and designed for real-world academic planning. You can add <strong>unlimited courses</strong>, switch grading scales, visualise your grade distribution with an interactive chart, and use our companion <strong>CGPA Calculator</strong> and <strong>GPA Goal Calculator</strong> to plan ahead. Every calculation follows the universal weighted average formula used by universities worldwide.</p>
    </div>

    <!-- How a Semester GPA Calculator Works -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">How a Semester GPA Calculator Works</h2>
        <p class="text-gray-600 leading-relaxed mb-4">A <strong>semester GPA calculator</strong> works by converting your letter grades (or numerical grades) into <strong>grade points</strong> using a standardised conversion table, then weighting those points by the <strong>number of credit hours</strong> each course carries. The process involves three distinct steps:</p>
        <ol class="list-decimal list-inside text-gray-600 leading-relaxed space-y-3 mb-4">
            <li><strong>Grade conversion</strong> — Each letter grade (A+, A, B+, B, etc.) is mapped to a numerical grade point value. On the US 4.0 scale, an A equals 4.0 grade points, a B equals 3.0 grade points, and so on.</li>
            <li><strong>Weighted multiplication</strong> — The grade point for each course is multiplied by the credit hours assigned to that course. A 4-credit course with a grade of A produces 4 × 4.0 = 16.0 quality points. A 3-credit course with a B+ produces 3 × 3.3 = 9.9 quality points.</li>
            <li><strong>Division by total credits</strong> — The sum of all weighted quality points is divided by the total number of credit hours attempted. This produces your <strong>semester GPA</strong>.</li>
        </ol>
        <p class="text-gray-600 leading-relaxed mb-4">The formula expressed mathematically is:</p>
        <div class="bg-gray-50 border border-gray-100 rounded-xl p-4 mb-4 text-center">
            <p class="text-lg font-bold text-gray-800">GPA = Σ (Grade Point × Credit Hours) ÷ Σ Credit Hours</p>
        </div>
        <p class="text-gray-600 leading-relaxed">Our calculator automates this entire process. The moment you enter or change a grade, the <strong>weighted GPA recalculates instantly</strong> without any page reload. This live calculation makes it ideal for exploring "what-if" scenarios — for example, seeing how your GPA changes if you improve a C to a B in a particular course.</p>
    </div>

    <!-- Understanding the GPA Grading System -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Understanding the GPA Grading System</h2>
        <p class="text-gray-600 leading-relaxed mb-4">The <strong>GPA grading system</strong> translates qualitative academic performance into a standardised numerical value. While different countries and institutions use varying scales, the two most common systems worldwide are the <strong>4.0 scale</strong> (predominantly used in the United States, Canada, and many international universities) and the <strong>10-point scale</strong> (used in India, some European and Asian institutions).</p>
        <p class="text-gray-600 leading-relaxed mb-4">On the <strong>4.0 scale</strong>, the highest possible GPA is 4.0, which corresponds to straight A grades across all courses. The scale uses plus/minus modifiers (A-, B+, C-, etc.) to provide finer granularity. This means there are typically 13 distinct grade levels, ranging from A+ (4.0) down to F (0.0).</p>
        <p class="text-gray-600 leading-relaxed mb-4">On the <strong>10-point scale</strong>, grades range from A+ (10 points) to F (0 points), with fewer intermediate levels. This system is standard in Indian universities following UGC guidelines and is also used in some professional certification programmes.</p>
        <p class="text-gray-600 leading-relaxed">Our <strong>semester grade calculator</strong> supports both systems. Select your grading scale from the dropdown at the top of the calculator, and all grade options and calculations will adjust automatically. This makes our tool suitable for students at American community colleges, Ivy League universities, IITs, state universities in India, and international institutions alike.</p>
    </div>

    <!-- Grade Point Conversion Chart -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Grade Point Conversion Chart</h2>
        <p class="text-gray-600 leading-relaxed mb-6">The tables below show the <strong>complete grade-to-grade-point conversion</strong> for both supported scales. These mappings are embedded directly into our calculator and applied automatically when you select a grade.</p>

        <div class="grid md:grid-cols-2 gap-6">
            <!-- 4.0 Scale -->
            <div>
                <h3 class="font-bold text-gray-800 mb-3 text-center">US 4.0 Scale</h3>
                <table class="w-full text-sm border border-gray-100 rounded-xl overflow-hidden">
                    <thead><tr class="bg-emerald-50"><th class="px-4 py-2.5 text-left font-bold text-gray-700">Letter Grade</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Grade Points</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Percentage Range</th></tr></thead>
                    <tbody>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">A+</td><td class="px-4 py-2 text-center font-bold text-emerald-700">4.0</td><td class="px-4 py-2 text-center text-gray-500">97–100%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">A</td><td class="px-4 py-2 text-center font-bold text-emerald-700">4.0</td><td class="px-4 py-2 text-center text-gray-500">93–96%</td></tr>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">A-</td><td class="px-4 py-2 text-center font-bold text-emerald-700">3.7</td><td class="px-4 py-2 text-center text-gray-500">90–92%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">B+</td><td class="px-4 py-2 text-center font-bold text-blue-700">3.3</td><td class="px-4 py-2 text-center text-gray-500">87–89%</td></tr>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">B</td><td class="px-4 py-2 text-center font-bold text-blue-700">3.0</td><td class="px-4 py-2 text-center text-gray-500">83–86%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">B-</td><td class="px-4 py-2 text-center font-bold text-blue-700">2.7</td><td class="px-4 py-2 text-center text-gray-500">80–82%</td></tr>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">C+</td><td class="px-4 py-2 text-center font-bold text-yellow-700">2.3</td><td class="px-4 py-2 text-center text-gray-500">77–79%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">C</td><td class="px-4 py-2 text-center font-bold text-yellow-700">2.0</td><td class="px-4 py-2 text-center text-gray-500">73–76%</td></tr>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">C-</td><td class="px-4 py-2 text-center font-bold text-yellow-700">1.7</td><td class="px-4 py-2 text-center text-gray-500">70–72%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">D+</td><td class="px-4 py-2 text-center font-bold text-orange-700">1.3</td><td class="px-4 py-2 text-center text-gray-500">67–69%</td></tr>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">D</td><td class="px-4 py-2 text-center font-bold text-orange-700">1.0</td><td class="px-4 py-2 text-center text-gray-500">63–66%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">D-</td><td class="px-4 py-2 text-center font-bold text-orange-700">0.7</td><td class="px-4 py-2 text-center text-gray-500">60–62%</td></tr>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">F</td><td class="px-4 py-2 text-center font-bold text-red-700">0.0</td><td class="px-4 py-2 text-center text-gray-500">0–59%</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- 10.0 Scale -->
            <div>
                <h3 class="font-bold text-gray-800 mb-3 text-center">India 10-Point Scale</h3>
                <table class="w-full text-sm border border-gray-100 rounded-xl overflow-hidden">
                    <thead><tr class="bg-blue-50"><th class="px-4 py-2.5 text-left font-bold text-gray-700">Letter Grade</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Grade Points</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Percentage Range</th></tr></thead>
                    <tbody>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">A+ (Outstanding)</td><td class="px-4 py-2 text-center font-bold text-emerald-700">10</td><td class="px-4 py-2 text-center text-gray-500">90–100%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">A (Excellent)</td><td class="px-4 py-2 text-center font-bold text-emerald-700">9</td><td class="px-4 py-2 text-center text-gray-500">80–89%</td></tr>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">B+ (Very Good)</td><td class="px-4 py-2 text-center font-bold text-blue-700">8</td><td class="px-4 py-2 text-center text-gray-500">70–79%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">B (Good)</td><td class="px-4 py-2 text-center font-bold text-blue-700">7</td><td class="px-4 py-2 text-center text-gray-500">60–69%</td></tr>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">C+ (Above Average)</td><td class="px-4 py-2 text-center font-bold text-yellow-700">6</td><td class="px-4 py-2 text-center text-gray-500">55–59%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">C (Average)</td><td class="px-4 py-2 text-center font-bold text-yellow-700">5</td><td class="px-4 py-2 text-center text-gray-500">50–54%</td></tr>
                        <tr class="border-t border-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">D (Below Average)</td><td class="px-4 py-2 text-center font-bold text-orange-700">4</td><td class="px-4 py-2 text-center text-gray-500">40–49%</td></tr>
                        <tr class="border-t border-gray-50 bg-gray-50"><td class="px-4 py-2 font-semibold text-gray-800">F (Fail)</td><td class="px-4 py-2 text-center font-bold text-red-700">0</td><td class="px-4 py-2 text-center text-gray-500">0–39%</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- How to Calculate GPA Step by Step -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">How to Calculate GPA Step by Step</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Understanding GPA calculation manually is valuable even if you use an online tool. Here is a <strong>complete walkthrough</strong> using the US 4.0 scale:</p>

        <h3 class="text-lg font-bold text-gray-800 mb-3">Example: Calculating GPA for 5 Courses</h3>
        <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden mb-4">
            <thead><tr class="bg-emerald-50"><th class="px-4 py-2.5 text-left font-bold text-gray-700">Course</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Credits</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Grade</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Grade Pts</th><th class="px-4 py-2.5 text-center font-bold text-gray-700">Quality Points</th></tr></thead>
            <tbody>
                <tr class="border-t border-gray-100"><td class="px-4 py-2 text-gray-700">Mathematics</td><td class="px-4 py-2 text-center">4</td><td class="px-4 py-2 text-center font-semibold">A</td><td class="px-4 py-2 text-center">4.0</td><td class="px-4 py-2 text-center font-bold text-emerald-700">16.0</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2 text-gray-700">English Literature</td><td class="px-4 py-2 text-center">3</td><td class="px-4 py-2 text-center font-semibold">B+</td><td class="px-4 py-2 text-center">3.3</td><td class="px-4 py-2 text-center font-bold text-blue-700">9.9</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2 text-gray-700">Physics</td><td class="px-4 py-2 text-center">4</td><td class="px-4 py-2 text-center font-semibold">B</td><td class="px-4 py-2 text-center">3.0</td><td class="px-4 py-2 text-center font-bold text-blue-700">12.0</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2 text-gray-700">Chemistry</td><td class="px-4 py-2 text-center">3</td><td class="px-4 py-2 text-center font-semibold">A-</td><td class="px-4 py-2 text-center">3.7</td><td class="px-4 py-2 text-center font-bold text-emerald-700">11.1</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2 text-gray-700">History</td><td class="px-4 py-2 text-center">3</td><td class="px-4 py-2 text-center font-semibold">A</td><td class="px-4 py-2 text-center">4.0</td><td class="px-4 py-2 text-center font-bold text-emerald-700">12.0</td></tr>
            </tbody>
            <tfoot><tr class="bg-gray-50 border-t-2 border-emerald-200"><td class="px-4 py-2.5 font-bold text-gray-800">Total</td><td class="px-4 py-2.5 text-center font-bold text-gray-800">17</td><td class="px-4 py-2.5"></td><td class="px-4 py-2.5"></td><td class="px-4 py-2.5 text-center font-bold text-emerald-700">61.0</td></tr></tfoot>
        </table>

        <div class="bg-emerald-50 border border-emerald-100 rounded-xl p-4 mb-4">
            <p class="text-gray-700"><strong>Step 1:</strong> Multiply each course's grade point by its credit hours to get quality points.</p>
            <p class="text-gray-700"><strong>Step 2:</strong> Sum all quality points: 16.0 + 9.9 + 12.0 + 11.1 + 12.0 = <strong>61.0</strong></p>
            <p class="text-gray-700"><strong>Step 3:</strong> Sum all credit hours: 4 + 3 + 4 + 3 + 3 = <strong>17</strong></p>
            <p class="text-gray-700"><strong>Step 4:</strong> Divide: 61.0 ÷ 17 = <strong>3.59 GPA</strong></p>
        </div>
        <p class="text-gray-600 leading-relaxed">This student earned a <strong>semester GPA of 3.59</strong>, which falls in the B+ to A- range — a strong academic performance. Notice how the 4-credit Mathematics course (with an A) has a larger impact on the final GPA than the 3-credit courses. This is the <strong>weighting effect of credit hours</strong>, which our calculator handles automatically.</p>
    </div>

    <!-- Credit Hours and Their Impact on GPA -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Credit Hours and Their Impact on GPA</h2>
        <p class="text-gray-600 leading-relaxed mb-4"><strong>Credit hours</strong> (also called credit units or semester hours) represent the weight of a course in your academic programme. A course with more credit hours has a proportionally greater impact on your GPA. This is why the GPA calculation uses a <strong>weighted average</strong> rather than a simple average — it ensures that challenging, time-intensive courses are reflected accurately in your overall academic performance.</p>
        <p class="text-gray-600 leading-relaxed mb-4">Consider two scenarios:</p>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Scenario A:</strong> You earn an A (4.0) in a 1-credit seminar course and a C (2.0) in a 4-credit core course. Your weighted GPA would be (4.0×1 + 2.0×4) / (1+4) = 12.0/5 = <strong>2.40</strong>.</li>
            <li><strong>Scenario B:</strong> You earn a C (2.0) in a 1-credit seminar course and an A (4.0) in a 4-credit core course. Your weighted GPA would be (2.0×1 + 4.0×4) / (1+4) = 18.0/5 = <strong>3.60</strong>.</li>
        </ul>
        <p class="text-gray-600 leading-relaxed">The difference between 2.40 and 3.60 is enormous — and the only variable that changed was <strong>which course received the higher grade</strong>. This demonstrates why prioritising high grades in <strong>high-credit courses</strong> is the most effective strategy for maximising your GPA. Our calculator clearly shows the weighted impact of each course so you can make informed academic decisions.</p>
    </div>

    <!-- How Universities Calculate Semester GPA -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">How Universities Calculate Semester GPA</h2>
        <p class="text-gray-600 leading-relaxed mb-4">While the core formula (total quality points ÷ total credit hours) is universal, universities apply it with some important nuances:</p>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Pass/Fail courses</strong> — Most universities exclude pass/fail courses from GPA calculations. The credits count toward graduation requirements but do not affect the GPA.</li>
            <li><strong>Withdrawn courses (W)</strong> — A withdrawal typically does not impact GPA but may count against satisfactory academic progress metrics.</li>
            <li><strong>Repeated courses</strong> — Policies vary: some institutions replace the original grade entirely, some average both attempts, and some count only the most recent attempt. Our calculator allows you to enter the grade that will appear on your transcript.</li>
            <li><strong>Transfer credits</strong> — Credits transferred from another institution usually count toward degree requirements but are often excluded from the GPA calculation at the receiving institution.</li>
            <li><strong>Incomplete grades (I)</strong> — An incomplete is typically not factored into GPA until it is resolved. If unresolved, it may convert to an F.</li>
        </ul>
        <p class="text-gray-600 leading-relaxed">Our <strong>semester grade calculator</strong> produces the standard weighted GPA based on the courses you enter. For the most precise results, enter only courses where a letter grade has been (or will be) assigned, and ensure the credit hours match your institution's catalogue.</p>
    </div>

    <!-- Tips to Improve Your GPA -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Proven Tips to Improve Your GPA</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Raising your GPA is entirely achievable with the right strategies. Here are <strong>research-backed approaches</strong> that consistently help students improve their academic standing:</p>

        <h3 class="text-lg font-bold text-gray-800 mb-2 mt-4">Academic Strategies</h3>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Prioritise high-credit courses</strong> — Earning an A in a 4-credit course has more than twice the GPA impact of an A in a 1-credit course. Focus your best effort on courses with the highest credit weight.</li>
            <li><strong>Attend every class</strong> — Research consistently shows a strong correlation between attendance and grades. Simply being present increases comprehension and reduces the study time needed before exams.</li>
            <li><strong>Use active recall and spaced repetition</strong> — Instead of passive re-reading, test yourself on the material regularly. Tools like flashcards and practice problems dramatically improve retention.</li>
            <li><strong>Visit office hours</strong> — Professors and teaching assistants can clarify concepts, provide study tips, and sometimes offer opportunities for extra credit. Building rapport also helps when grades are borderline.</li>
            <li><strong>Start assignments early</strong> — Beginning coursework well before the deadline allows time for research, revision, and feedback, all of which improve the quality of your submissions.</li>
        </ul>

        <h3 class="text-lg font-bold text-gray-800 mb-2 mt-4">Strategic Planning</h3>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Balance your course load</strong> — Avoid taking too many difficult courses in a single semester. Mix challenging core subjects with lighter electives to maintain a manageable workload.</li>
            <li><strong>Retake low-grade courses</strong> — If your university offers grade replacement, retaking a course where you earned a D or F can significantly boost your GPA.</li>
            <li><strong>Use our GPA Goal Calculator</strong> — Enter your current CGPA, remaining credits, and target GPA to see exactly what grades you need. This eliminates guesswork and provides a clear, actionable target.</li>
            <li><strong>Monitor your GPA each semester</strong> — Use our calculator after every grading period to stay aware of your standing and course-correct early if your GPA begins to dip.</li>
        </ul>
    </div>

    <!-- Common GPA Calculation Mistakes -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Common GPA Calculation Mistakes to Avoid</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Students frequently make errors when computing their GPA manually. Here are the most common pitfalls:</p>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Using a simple average instead of a weighted average</strong> — This is the most common mistake. Simply averaging your grade points (e.g., 4.0 + 3.0 + 2.0 = 3.0) ignores credit weighting and produces incorrect results. A 4-credit A contributes more than a 2-credit A.</li>
            <li><strong>Confusing semester GPA with cumulative GPA</strong> — Semester GPA reflects only the current term; cumulative GPA (CGPA) encompasses all semesters. A poor semester can be offset by strong performance in others.</li>
            <li><strong>Including pass/fail or audited courses</strong> — These typically do not carry grade points and should be excluded from calculations. Including them artificially deflates your GPA.</li>
            <li><strong>Using the wrong grading scale</strong> — Mixing up the 4.0 and 10-point scales, or failing to account for plus/minus grading, leads to significant errors. Always confirm which scale your institution uses.</li>
            <li><strong>Not accounting for grade replacement policies</strong> — If you retook a course, check whether your university replaces the old grade or averages both. Using the wrong method distorts your calculation.</li>
            <li><strong>Rounding errors</strong> — GPA calculations should carry at least two decimal places throughout the computation. Premature rounding of intermediate values can shift the final GPA by tenths of a point.</li>
        </ul>
        <p class="text-gray-600 leading-relaxed">Our calculator eliminates all of these errors by handling the full weighted calculation precisely. Every intermediate value is computed with full floating-point precision before being rounded for display.</p>
    </div>

    <!-- How GPA Affects Scholarships and Admissions -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">How GPA Affects Scholarships, Admissions, and Career Opportunities</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Your GPA is one of the most consequential numbers in your academic and early professional life. Here is how it impacts key milestones:</p>

        <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden mb-6">
            <thead>
                <tr class="bg-indigo-50">
                    <th class="px-4 py-3 text-left font-bold text-gray-800">GPA Range (4.0 Scale)</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Classification</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Typical Opportunities</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-bold text-emerald-700">3.7 – 4.0</td><td class="px-4 py-2.5 text-gray-700">Summa Cum Laude / Dean's List</td><td class="px-4 py-2.5 text-gray-600">Top-tier graduate schools, merit scholarships, competitive internships, honours programmes</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-bold text-emerald-700">3.5 – 3.69</td><td class="px-4 py-2.5 text-gray-700">Magna Cum Laude</td><td class="px-4 py-2.5 text-gray-600">Graduate school admission, research assistantships, most scholarships, strong employment prospects</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-bold text-blue-700">3.0 – 3.49</td><td class="px-4 py-2.5 text-gray-700">Cum Laude / Good Standing</td><td class="px-4 py-2.5 text-gray-600">Many graduate programmes, some scholarships, most employment positions, dean's list at some schools</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-bold text-yellow-700">2.5 – 2.99</td><td class="px-4 py-2.5 text-gray-700">Satisfactory</td><td class="px-4 py-2.5 text-gray-600">Graduation requirement met, some graduate programmes, limited scholarship eligibility</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-bold text-orange-700">2.0 – 2.49</td><td class="px-4 py-2.5 text-gray-700">Minimum Passing</td><td class="px-4 py-2.5 text-gray-600">Meets minimum graduation requirement at many institutions, may trigger academic probation at some</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-bold text-red-700">Below 2.0</td><td class="px-4 py-2.5 text-gray-700">Academic Probation</td><td class="px-4 py-2.5 text-gray-600">May lead to academic dismissal, loss of financial aid, ineligibility for student organisations</td></tr>
            </tbody>
        </table>

        <p class="text-gray-600 leading-relaxed mb-4"><strong>Scholarships:</strong> Most merit-based scholarships require a minimum GPA of 3.0, with competitive awards typically requiring 3.5 or above. Many scholarships also have semester-by-semester GPA maintenance requirements — falling below the threshold can result in loss of funding.</p>
        <p class="text-gray-600 leading-relaxed mb-4"><strong>Graduate admissions:</strong> Top MBA, medical, law, and engineering graduate programmes typically expect applicants with GPAs of 3.5 or higher. A strong GPA can also partially offset a lower standardised test score (GRE, GMAT, LSAT).</p>
        <p class="text-gray-600 leading-relaxed"><strong>Employment:</strong> Many employers in consulting, finance, and technology use GPA as an initial screening criterion — particularly for entry-level positions. A 3.0 minimum is common; top-tier firms often screen for 3.5+. While experience gradually outweighs GPA over your career, your academic record remains relevant for the first several years after graduation.</p>
    </div>

    <!-- Using a Semester Grade Calculator for Academic Planning -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Using a Semester Grade Calculator for Academic Planning</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Our <strong>semester grade calculator</strong> is not just a tool for computing your GPA after grades are released — it is a <strong>strategic planning instrument</strong> that you should use throughout the semester. Here are the most effective ways to leverage it:</p>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Pre-semester planning</strong> — Before the semester begins, enter your planned courses, credit hours, and target grades. This gives you a projected GPA to aim for and helps you decide whether to adjust your course load.</li>
            <li><strong>"What-if" analysis</strong> — During the semester, run different grade scenarios. What happens if you get a B instead of an A in your hardest class? How does dropping a course affect your GPA? These scenarios help you make informed decisions about where to allocate your study time.</li>
            <li><strong>Midterm check-in</strong> — After midterm exams, enter your estimated grades to see where your GPA is trending. If it is below your target, you still have time to adjust your study strategies before finals.</li>
            <li><strong>CGPA tracking</strong> — Use the CGPA tab to monitor your cumulative GPA across all semesters. This long-term view is critical for scholarship maintenance, graduation honours eligibility, and graduate school applications.</li>
            <li><strong>Goal setting with the GPA Goal Calculator</strong> — If you need to raise your CGPA from 3.0 to 3.5, the Goal Calculator tells you exactly what GPA you need to earn in your remaining credits. This transforms a vague ambition into a concrete, measurable target.</li>
        </ul>
    </div>

    <!-- Difference Between GPA and CGPA -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">GPA vs CGPA – What Is the Difference?</h2>
        <p class="text-gray-600 leading-relaxed mb-4">These two terms are frequently confused, but they represent distinctly different measurements:</p>
        <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden mb-4">
            <thead>
                <tr class="bg-purple-50">
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Feature</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">GPA (Semester)</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">CGPA (Cumulative)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-semibold text-gray-800">Scope</td><td class="px-4 py-2.5 text-gray-600">Single semester only</td><td class="px-4 py-2.5 text-gray-600">All semesters combined</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-semibold text-gray-800">Calculation</td><td class="px-4 py-2.5 text-gray-600">Weighted avg of one term's courses</td><td class="px-4 py-2.5 text-gray-600">Weighted avg of all courses to date</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-semibold text-gray-800">Variability</td><td class="px-4 py-2.5 text-gray-600">Can change dramatically each term</td><td class="px-4 py-2.5 text-gray-600">Becomes increasingly stable over time</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-semibold text-gray-800">Used by</td><td class="px-4 py-2.5 text-gray-600">Dean's list, semester awards</td><td class="px-4 py-2.5 text-gray-600">Graduate school, scholarships, employers</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-semibold text-gray-800">Our tool</td><td class="px-4 py-2.5 text-gray-600">GPA Calculator tab</td><td class="px-4 py-2.5 text-gray-600">CGPA Calculator tab</td></tr>
            </tbody>
        </table>
        <p class="text-gray-600 leading-relaxed">Both metrics are important. A single strong semester can boost a low CGPA, while one poor semester has a limited downward impact on a well-established CGPA. Use both tabs of our calculator to get the full picture of your academic standing.</p>
    </div>

    <!-- Internal Links -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Explore More Free Calculators and Educational Tools</h2>
        <p class="text-gray-600 leading-relaxed mb-4">We offer a comprehensive library of free online calculators for students, professionals, and everyday use. Explore our most popular tools below:</p>
        <div class="grid md:grid-cols-3 gap-4">
            <a href="/grade-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-emerald-50 hover:border-emerald-200 transition">
                <i class="fas fa-graduation-cap text-emerald-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Grade Calculator</p><p class="text-xs text-gray-400">Calculate final exam grade needed</p></div>
            </a>
            <a href="/percentage-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-blue-50 hover:border-blue-200 transition">
                <i class="fas fa-percent text-blue-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Percentage Calculator</p><p class="text-xs text-gray-400">Calculate percentages instantly</p></div>
            </a>
            <a href="/average-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-purple-50 hover:border-purple-200 transition">
                <i class="fas fa-chart-bar text-purple-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Average Calculator</p><p class="text-xs text-gray-400">Calculate mean, median, mode</p></div>
            </a>
            <a href="/age-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-orange-50 hover:border-orange-200 transition">
                <i class="fas fa-birthday-cake text-orange-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Age Calculator</p><p class="text-xs text-gray-400">Calculate exact age in detail</p></div>
            </a>
            <a href="/bmi-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-teal-50 hover:border-teal-200 transition">
                <i class="fas fa-weight text-teal-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">BMI Calculator</p><p class="text-xs text-gray-400">Check your Body Mass Index</p></div>
            </a>
            <a href="/emi-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-red-50 hover:border-red-200 transition">
                <i class="fas fa-calculator text-red-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">EMI Calculator</p><p class="text-xs text-gray-400">Calculate loan EMI payments</p></div>
            </a>
            <a href="/compound-interest-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-indigo-50 hover:border-indigo-200 transition">
                <i class="fas fa-coins text-indigo-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Compound Interest Calculator</p><p class="text-xs text-gray-400">Calculate interest growth</p></div>
            </a>
            <a href="/ielts-score-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-pink-50 hover:border-pink-200 transition">
                <i class="fas fa-language text-pink-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">IELTS Score Calculator</p><p class="text-xs text-gray-400">Calculate IELTS band score</p></div>
            </a>
            <a href="/hours-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-yellow-50 hover:border-yellow-200 transition">
                <i class="fas fa-clock text-yellow-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Hours Calculator</p><p class="text-xs text-gray-400">Calculate hours between times</p></div>
            </a>
        </div>
    </div>

    <!-- 25 FAQs -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10" itemscope itemtype="https://schema.org/FAQPage">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Frequently Asked Questions About GPA and Semester Grades</h2>
        <div class="space-y-4 text-sm">

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">1. What is a semester GPA?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">A <strong>semester GPA</strong> is the grade point average calculated for a single academic term. It is determined by dividing your total quality points (grade points × credit hours) by your total credit hours for that semester. For example, if you earn 48 quality points across 15 credit hours, your semester GPA is 48 ÷ 15 = 3.20.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">2. How do I calculate GPA for one semester?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Multiply each course's grade point by its credit hours to get quality points. Sum all quality points, then divide by the total credit hours. The formula is: <strong>GPA = Σ(Grade Point × Credits) ÷ Σ Credits</strong>. Our calculator automates this entire process — simply enter your courses, credits, and grades.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">3. How many credits affect GPA?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">All credit-bearing courses with letter grades affect your GPA. A 4-credit course influences your GPA four times more than a 1-credit course with the same grade. Pass/fail, audited, and withdrawn courses typically do not affect GPA calculations.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">4. What GPA is considered good in college?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">On a 4.0 scale, a GPA of <strong>3.0 or above</strong> is generally considered good. A GPA of <strong>3.5+</strong> is strong, and <strong>3.7+</strong> is excellent. For scholarships and top graduate programmes, a 3.5 or higher is typically expected. For the 10-point scale, a CGPA of 8.0+ is considered very good, and 9.0+ is excellent.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">5. How do credit hours affect GPA?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Credit hours determine the weight of each course in the GPA calculation. A high grade in a high-credit course boosts your GPA significantly more than the same grade in a low-credit course. This is why GPA uses a <strong>weighted average</strong> rather than a simple average of grades.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">6. What is the difference between GPA and CGPA?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><strong>GPA</strong> refers to the Grade Point Average for a single semester, while <strong>CGPA (Cumulative GPA)</strong> is the weighted average of GPAs across all semesters. CGPA provides a holistic view of your entire academic career, while semester GPA shows your performance in one specific term.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">7. Can I add more than 10 courses in the calculator?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Yes. Our calculator allows you to add <strong>unlimited courses</strong>. Click the "Add Course" button to add as many course rows as you need. There is no cap on the number of courses you can include in a single semester GPA calculation.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">8. What is the 4.0 GPA scale?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The <strong>4.0 scale</strong> is the most common grading system in the United States. Letter grades are converted as follows: A/A+ = 4.0, A- = 3.7, B+ = 3.3, B = 3.0, B- = 2.7, C+ = 2.3, C = 2.0, C- = 1.7, D+ = 1.3, D = 1.0, D- = 0.7, F = 0.0. The maximum possible GPA on this scale is 4.0.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">9. What is the 10-point grading scale?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The <strong>10-point scale</strong> is widely used in Indian universities following UGC guidelines. Grades range from A+ (10 points, Outstanding) to F (0 points, Fail). It uses broader grade bands than the 4.0 system, with each letter grade typically spanning a 10-percentage-point range.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">10. How does the GPA Goal Calculator work?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The GPA Goal Calculator uses the formula: <strong>Required GPA = (Target CGPA × Total Credits − Current Quality Points) ÷ Remaining Credits</strong>. You enter your current CGPA, credits completed, remaining credits, and target CGPA. The tool instantly tells you what semester GPA you need to earn in the remaining credits to reach your goal.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">11. Does a withdrawn course (W) affect GPA?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">No. A withdrawal (W) grade does not carry grade points and is <strong>not included in GPA calculations</strong>. However, excessive withdrawals may affect financial aid eligibility and satisfactory academic progress metrics. Do not include withdrawn courses in our calculator.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">12. How do pass/fail courses affect GPA?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Pass/fail courses typically <strong>do not affect GPA</strong>. A "Pass" earns credit toward graduation but does not contribute grade points. A "Fail" may or may not affect GPA depending on institutional policy — some universities record a Fail as 0.0 grade points while others exclude it entirely.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">13. Can I retake a course to improve my GPA?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Yes, most universities allow <strong>course retakes</strong>. Policies vary: some institutions replace the old grade entirely (grade replacement), others average both attempts, and some count only the higher grade. Check your university's specific retake policy and enter the grade that will appear on your official transcript.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">14. What GPA do I need for graduate school?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Most graduate programmes require a minimum CGPA of <strong>3.0 (on a 4.0 scale)</strong>. Competitive programmes at top universities typically prefer 3.5+. Medical schools often require 3.6+, and top law schools prefer 3.7+. On a 10-point scale, most Indian universities expect 7.0 CGPA or above for postgraduate admission.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">15. How is cumulative GPA (CGPA) calculated?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><strong>CGPA = Σ(Semester GPA × Semester Credits) ÷ Σ Total Credits</strong>. For each semester, multiply the GPA by the credits taken in that semester. Sum these products across all semesters, then divide by the total cumulative credits. Our CGPA Calculator tab automates this calculation.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">16. What is a quality point?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">A <strong>quality point</strong> (also called a weighted grade point) is the product of a course's grade point value and its credit hours. For example, an A (4.0) in a 3-credit course yields 4.0 × 3 = 12.0 quality points. The sum of all quality points divided by total credits gives your GPA.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">17. Can I convert my 10-point CGPA to a 4.0 scale?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">A common approximation is: <strong>4.0 Scale GPA ≈ (10-Point CGPA − 0.5) × 0.4</strong>. For example, a CGPA of 8.5 converts to roughly (8.5 − 0.5) × 0.4 = 3.2 on the 4.0 scale. However, this is an approximation — different universities use different conversion methodologies. Always check with the receiving institution.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">18. Is a 4.0 GPA straight A's?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Yes. A <strong>4.0 GPA</strong> means you earned an A or A+ in every credit-bearing course. On the standard 4.0 scale, both A and A+ carry a grade point value of 4.0, which is the maximum. Achieving a 4.0 GPA for an entire degree is rare and highly impressive.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">19. How much does one F affect GPA?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The impact depends on credit hours and your other grades. In a 15-credit semester with four A grades (12 credits) and one F (3 credits), your GPA would be (48 + 0) / 15 = 3.20 instead of a potential 4.0. A single F in a 3-credit course drops a perfect GPA by 0.8 points, which is substantial.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">20. What is Dean's List GPA requirement?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Dean's List requirements vary by institution but typically require a <strong>semester GPA of 3.5 or higher</strong> on the 4.0 scale, with a full course load (usually at least 12 credits) and no failing grades. Some selective institutions set the threshold at 3.7. Our calculator helps you determine exactly which grades you need to achieve Dean's List recognition.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">21. Does summer school affect GPA?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Yes, at most institutions. Summer courses taken at your home university typically count toward your cumulative GPA just like fall and spring courses. Courses taken at other institutions during summer may transfer as credit only (without affecting GPA), depending on your university's transfer credit policy.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">22. How can I raise my GPA quickly?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The fastest strategies include: <strong>(1)</strong> Retake courses where you received low grades under a grade replacement policy. <strong>(2)</strong> Prioritise high performance in high-credit courses. <strong>(3)</strong> Take courses in subjects where you are strongest. <strong>(4)</strong> Use our GPA Goal Calculator to set precise targets for each remaining semester.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">23. What happens if my GPA falls below 2.0?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">A CGPA below 2.0 typically places you on <strong>academic probation</strong>. You may be required to meet with an academic advisor, maintain a specified semester GPA, and restrict your course load. If your GPA remains below 2.0 for consecutive semesters, you may face academic suspension or dismissal. Check your institution's specific policies.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">24. Is this calculator free to use?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Yes. Our <strong>semester grade calculator</strong> is completely free with no sign-up, no ads blocking functionality, and no usage limits. You can calculate GPA for unlimited semesters, add unlimited courses, and use all features including the CGPA Calculator and GPA Goal Calculator at no cost.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">25. How accurate is this semester grade calculator?<i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i></summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Our calculator uses the standard weighted GPA formula (Σ Grade Points × Credits ÷ Σ Credits) with the officially recognised grade-to-point conversions for both the 4.0 and 10-point scales. The calculations are performed with full floating-point precision. For the most accurate results, ensure your grade letters and credit hours match those shown on your official transcript or course catalogue.</div></div>
            </details>

        </div>
    </div>

</section>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
// Grade Scales
const scales = {
    '4.0': {
        grades: {'A+':4.0,'A':4.0,'A-':3.7,'B+':3.3,'B':3.0,'B-':2.7,'C+':2.3,'C':2.0,'C-':1.7,'D+':1.3,'D':1.0,'D-':0.7,'F':0.0},
        max: 4.0,
        descriptions: {3.7:'Excellent',3.0:'Good',2.0:'Satisfactory',1.0:'Below Average',0:'Failing'}
    },
    '10.0': {
        grades: {'A+':10,'A':9,'B+':8,'B':7,'C+':6,'C':5,'D':4,'F':0},
        max: 10,
        descriptions: {9:'Excellent',7:'Good',5:'Average',4:'Below Average',0:'Failing'}
    }
};

let currentScale = '4.0';
let courseCount = 0;
let semesterCount = 0;
let gradeChart = null;
let cgpaTrendChart = null;

// ============ SCALE ============
function onScaleChange() {
    currentScale = document.getElementById('scaleSelect').value;
    document.querySelectorAll('.grade-select').forEach(sel => rebuildGradeOptions(sel));
    recalcGpa();
}

function rebuildGradeOptions(sel) {
    const current = sel.value;
    const grades = scales[currentScale].grades;
    sel.innerHTML = '<option value="">—</option>';
    for (const g in grades) {
        const opt = document.createElement('option');
        opt.value = g;
        opt.textContent = g + ' (' + grades[g] + ')';
        sel.appendChild(opt);
    }
    if (grades[current] !== undefined) sel.value = current;
}

// ============ TABS ============
function switchTab(tab) {
    ['gpa','cgpa','goal'].forEach(t => {
        document.getElementById('panel' + t.charAt(0).toUpperCase() + t.slice(1)).style.display = t === tab ? 'block' : 'none';
        const btn = document.getElementById('tab' + t.charAt(0).toUpperCase() + t.slice(1));
        if (t === tab) {
            btn.className = 'tab-btn active px-5 py-2.5 rounded-lg text-sm font-semibold border border-emerald-200';
        } else {
            btn.className = 'tab-btn px-5 py-2.5 rounded-lg text-sm font-semibold border border-gray-200 bg-white text-gray-600';
        }
    });
    if (tab === 'cgpa' && semesterCount === 0) { addSemester(); addSemester(); }
    if (tab === 'goal') calcGoal();
}

// ============ GPA CALCULATOR ============
function addCourse(name, credits, grade) {
    courseCount++;
    const n = courseCount;
    const tbody = document.getElementById('courseBody');
    const tr = document.createElement('tr');
    tr.className = 'course-row border-t border-gray-100';
    tr.id = 'row' + n;

    const gradeOpts = Object.entries(scales[currentScale].grades).map(([g,v]) =>
        `<option value="${g}" ${grade===g?'selected':''}>${g} (${v})</option>`
    ).join('');

    tr.innerHTML = `
        <td class="px-3 py-2 text-gray-400 font-mono text-xs">${n}</td>
        <td class="px-3 py-2"><input type="text" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-emerald-300 focus:outline-none course-name" placeholder="Course ${n}" value="${name||''}" oninput="recalcGpa()"></td>
        <td class="px-3 py-2"><input type="number" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm text-center focus:ring-2 focus:ring-emerald-300 focus:outline-none course-credits" min="0.5" max="12" step="0.5" value="${credits||3}" oninput="recalcGpa()"></td>
        <td class="px-3 py-2"><select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm grade-select focus:ring-2 focus:ring-emerald-300 focus:outline-none" onchange="recalcGpa()"><option value="">—</option>${gradeOpts}</select></td>
        <td class="px-3 py-2 text-center font-semibold text-gray-700 course-points">—</td>
        <td class="px-3 py-2 text-center"><button onclick="removeCourse(${n})" class="text-red-400 hover:text-red-600 transition text-xs"><i class="fas fa-times-circle"></i></button></td>`;
    tbody.appendChild(tr);
    recalcGpa();
}

function removeCourse(n) {
    const row = document.getElementById('row' + n);
    if (row) { row.remove(); recalcGpa(); }
}

function recalcGpa() {
    const rows = document.querySelectorAll('#courseBody tr');
    let totalCredits = 0, totalPoints = 0, count = 0;
    const grades = scales[currentScale].grades;
    const courseData = [];

    rows.forEach(tr => {
        const credits = parseFloat(tr.querySelector('.course-credits').value) || 0;
        const gradeVal = tr.querySelector('.grade-select').value;
        const name = tr.querySelector('.course-name').value || 'Course';
        const gp = grades[gradeVal];
        const pointsCell = tr.querySelector('.course-points');

        if (gradeVal && credits > 0 && gp !== undefined) {
            const weighted = credits * gp;
            totalCredits += credits;
            totalPoints += weighted;
            count++;
            pointsCell.textContent = weighted.toFixed(1);
            courseData.push({name, credits, grade: gradeVal, gp, weighted});
        } else {
            pointsCell.textContent = '—';
            if (credits > 0) courseData.push({name, credits, grade: '—', gp: 0, weighted: 0});
        }
    });

    const hasData = count > 0;
    document.getElementById('gpaResults').style.display = hasData ? 'block' : 'none';
    if (!hasData) return;

    const gpa = totalCredits > 0 ? totalPoints / totalCredits : 0;
    const max = scales[currentScale].max;

    document.getElementById('gpaValue').textContent = gpa.toFixed(2);
    document.getElementById('gpaScaleLabel').textContent = '/ ' + max.toFixed(1);
    document.getElementById('statGpa').textContent = gpa.toFixed(2);
    document.getElementById('statCredits').textContent = totalCredits;
    document.getElementById('statPoints').textContent = totalPoints.toFixed(1);
    document.getElementById('statCourses').textContent = count;

    // Description
    const descs = scales[currentScale].descriptions;
    let desc = '';
    for (const threshold of Object.keys(descs).map(Number).sort((a,b)=>b-a)) {
        if (gpa >= threshold) { desc = descs[threshold]; break; }
    }
    document.getElementById('gpaDesc').textContent = desc ? desc + ' Performance' : '';

    // GPA circle color
    const ratio = gpa / max;
    const circle = document.getElementById('gpaCircle');
    if (ratio >= 0.85) circle.className = 'gpa-circle bg-gradient-to-br from-emerald-500 to-teal-600 text-white';
    else if (ratio >= 0.7) circle.className = 'gpa-circle bg-gradient-to-br from-blue-500 to-indigo-600 text-white';
    else if (ratio >= 0.5) circle.className = 'gpa-circle bg-gradient-to-br from-yellow-500 to-orange-500 text-white';
    else circle.className = 'gpa-circle bg-gradient-to-br from-red-500 to-pink-600 text-white';

    // Breakdown table
    const bb = document.getElementById('breakdownBody');
    const bf = document.getElementById('breakdownFoot');
    bb.innerHTML = '';
    courseData.forEach((c, i) => {
        bb.innerHTML += `<tr class="border-t border-gray-100 ${i%2?'bg-gray-50':''}">
            <td class="px-4 py-2 text-gray-700">${escHtml(c.name)}</td>
            <td class="px-4 py-2 text-center">${c.credits}</td>
            <td class="px-4 py-2 text-center font-semibold">${c.grade}</td>
            <td class="px-4 py-2 text-center">${c.gp.toFixed(1)}</td>
            <td class="px-4 py-2 text-center font-bold">${c.weighted.toFixed(1)}</td></tr>`;
    });
    bf.innerHTML = `<tr class="bg-emerald-50 border-t-2 border-emerald-200">
        <td class="px-4 py-2.5 font-bold text-gray-800">Total / GPA</td>
        <td class="px-4 py-2.5 text-center font-bold">${totalCredits}</td>
        <td class="px-4 py-2.5"></td><td class="px-4 py-2.5"></td>
        <td class="px-4 py-2.5 text-center font-extrabold text-emerald-700">${totalPoints.toFixed(1)} → ${gpa.toFixed(2)}</td></tr>`;

    // Chart
    updateGradeChart(courseData);

    // Print content
    document.getElementById('printContent').innerHTML = `
        <div style="text-align:center;margin-bottom:24px">
            <div style="font-size:3rem;font-weight:800;color:#059669">${gpa.toFixed(2)}</div>
            <div style="color:#666">out of ${max.toFixed(1)}</div>
        </div>
        <table style="width:100%;border-collapse:collapse;margin-top:16px">
            ${courseData.map(c=>`<tr style="border-bottom:1px solid #e5e7eb"><td style="padding:8px">${escHtml(c.name)}</td><td style="padding:8px;text-align:center">${c.credits}</td><td style="padding:8px;text-align:center;font-weight:600">${c.grade}</td><td style="padding:8px;text-align:right">${c.weighted.toFixed(1)}</td></tr>`).join('')}
            <tr><td style="padding:8px;font-weight:800">Total</td><td style="padding:8px;text-align:center;font-weight:800">${totalCredits}</td><td></td><td style="padding:8px;text-align:right;font-weight:800">${totalPoints.toFixed(1)}</td></tr>
        </table>
        <p style="text-align:center;margin-top:16px;font-weight:800;font-size:1.2rem">Semester GPA: ${gpa.toFixed(2)}</p>`;
}

function updateGradeChart(data) {
    const ctx = document.getElementById('gradeChart').getContext('2d');
    const colors = ['#10b981','#3b82f6','#8b5cf6','#f97316','#ef4444','#06b6d4','#f59e0b','#ec4899','#6366f1','#14b8a6'];
    const chartData = {
        labels: data.map(c => c.name),
        datasets: [{
            label: 'Grade Points',
            data: data.map(c => c.gp),
            backgroundColor: data.map((_, i) => colors[i % colors.length] + '22'),
            borderColor: data.map((_, i) => colors[i % colors.length]),
            borderWidth: 2, borderRadius: 8, barPercentage: 0.6
        }]
    };
    if (gradeChart) { gradeChart.data = chartData; gradeChart.update(); }
    else {
        gradeChart = new Chart(ctx, {
            type: 'bar', data: chartData,
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: {
                    y: { min: 0, max: scales[currentScale].max, ticks: { stepSize: 1 }, grid: { color: '#f1f5f9' } },
                    x: { grid: { display: false } }
                }
            }
        });
    }
}

function addSampleData() {
    resetGpa();
    const samples = [
        ['Mathematics', 4, 'A'], ['English Literature', 3, 'B+'], ['Physics', 4, 'B'],
        ['Chemistry', 3, 'A-'], ['History', 3, 'A'], ['Computer Science', 3, 'A']
    ];
    samples.forEach(s => addCourse(s[0], s[1], s[2]));
}

function resetGpa() {
    document.getElementById('courseBody').innerHTML = '';
    document.getElementById('gpaResults').style.display = 'none';
    courseCount = 0;
    if (gradeChart) { gradeChart.destroy(); gradeChart = null; }
    addCourse(); addCourse(); addCourse();
}

// ============ CGPA CALCULATOR ============
function addSemester(gpa, credits) {
    semesterCount++;
    const n = semesterCount;
    const tbody = document.getElementById('cgpaBody');
    const tr = document.createElement('tr');
    tr.className = 'course-row border-t border-gray-100';
    tr.id = 'sem' + n;
    tr.innerHTML = `
        <td class="px-3 py-2 text-center font-semibold text-gray-500">${n}</td>
        <td class="px-3 py-2"><input type="number" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm text-center focus:ring-2 focus:ring-emerald-300 focus:outline-none sem-gpa" min="0" max="${scales[currentScale].max}" step="0.01" value="${gpa||''}" placeholder="GPA" oninput="recalcCgpa()"></td>
        <td class="px-3 py-2"><input type="number" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm text-center focus:ring-2 focus:ring-emerald-300 focus:outline-none sem-credits" min="1" max="30" step="1" value="${credits||''}" placeholder="Credits" oninput="recalcCgpa()"></td>
        <td class="px-3 py-2 text-center"><button onclick="removeSemester(${n})" class="text-red-400 hover:text-red-600 transition text-xs"><i class="fas fa-times-circle"></i></button></td>`;
    tbody.appendChild(tr);
}

function removeSemester(n) {
    const row = document.getElementById('sem' + n);
    if (row) { row.remove(); recalcCgpa(); }
}

function recalcCgpa() {
    const rows = document.querySelectorAll('#cgpaBody tr');
    let totalCredits = 0, totalPoints = 0;
    const semGpas = [], semLabels = [];
    let idx = 0;

    rows.forEach(tr => {
        idx++;
        const gpa = parseFloat(tr.querySelector('.sem-gpa').value);
        const credits = parseFloat(tr.querySelector('.sem-credits').value);
        if (!isNaN(gpa) && !isNaN(credits) && credits > 0) {
            totalCredits += credits;
            totalPoints += gpa * credits;
            semGpas.push(gpa);
            semLabels.push('Sem ' + idx);
        }
    });

    const res = document.getElementById('cgpaResult');
    if (totalCredits > 0) {
        const cgpa = totalPoints / totalCredits;
        document.getElementById('cgpaValue').textContent = cgpa.toFixed(2);
        document.getElementById('cgpaMeta').textContent = 'Total Credits: ' + totalCredits + ' | Total Quality Points: ' + totalPoints.toFixed(1);
        res.style.display = 'block';
        updateCgpaChart(semLabels, semGpas);
    } else {
        res.style.display = 'none';
    }
}

function updateCgpaChart(labels, data) {
    const ctx = document.getElementById('cgpaChart').getContext('2d');
    const chartData = {
        labels: labels,
        datasets: [{
            label: 'Semester GPA',
            data: data,
            borderColor: '#10b981',
            backgroundColor: 'rgba(16,185,129,.1)',
            fill: true,
            tension: 0.3,
            pointBackgroundColor: '#10b981',
            pointRadius: 5
        }]
    };
    if (cgpaTrendChart) { cgpaTrendChart.data = chartData; cgpaTrendChart.update(); }
    else {
        cgpaTrendChart = new Chart(ctx, {
            type: 'line', data: chartData,
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: {
                    y: { min: 0, max: scales[currentScale].max, grid: { color: '#f1f5f9' } },
                    x: { grid: { display: false } }
                }
            }
        });
    }
}

function resetCgpa() {
    document.getElementById('cgpaBody').innerHTML = '';
    document.getElementById('cgpaResult').style.display = 'none';
    semesterCount = 0;
    if (cgpaTrendChart) { cgpaTrendChart.destroy(); cgpaTrendChart = null; }
    addSemester(); addSemester();
}

// ============ GPA GOAL ============
function calcGoal() {
    const currentGpa = parseFloat(document.getElementById('goalCurrentGpa').value);
    const completed = parseFloat(document.getElementById('goalCompletedCredits').value);
    const remaining = parseFloat(document.getElementById('goalRemainingCredits').value);
    const target = parseFloat(document.getElementById('goalTargetGpa').value);
    const max = scales[currentScale].max;
    const container = document.getElementById('goalResult');

    if (isNaN(currentGpa) || isNaN(completed) || isNaN(remaining) || isNaN(target) || remaining <= 0) {
        container.innerHTML = '<p class="text-gray-400 text-sm text-center">Enter all values to see results.</p>';
        return;
    }

    const currentPoints = currentGpa * completed;
    const targetPoints = target * (completed + remaining);
    const neededPoints = targetPoints - currentPoints;
    const neededGpa = neededPoints / remaining;

    if (neededGpa <= 0) {
        container.innerHTML = `<p class="text-emerald-600 font-semibold"><i class="fas fa-check-circle mr-1"></i> You have already achieved or surpassed your target GPA of ${target.toFixed(2)}! Even with the minimum grades in your remaining ${remaining} credits, your CGPA will meet the target.</p>`;
    } else if (neededGpa > max) {
        container.innerHTML = `<div>
            <p class="text-red-600 font-semibold mb-2"><i class="fas fa-exclamation-triangle mr-1"></i> Unfortunately, reaching a ${target.toFixed(2)} CGPA is not achievable with ${remaining} remaining credits.</p>
            <p class="text-gray-600 text-sm">You would need a GPA of <strong>${neededGpa.toFixed(2)}</strong> which exceeds the maximum of ${max.toFixed(1)}.</p>
            <p class="text-gray-600 text-sm mt-2">The highest achievable CGPA with perfect grades (${max.toFixed(1)}) in remaining credits would be: <strong>${((currentPoints + max * remaining) / (completed + remaining)).toFixed(2)}</strong></p>
        </div>`;
    } else {
        container.innerHTML = `<div>
            <p class="text-indigo-700 font-semibold mb-2"><i class="fas fa-bullseye mr-1"></i> To reach a CGPA of ${target.toFixed(2)}:</p>
            <p class="text-gray-700 text-sm mb-3">You need a GPA of <strong class="text-2xl text-indigo-700">${neededGpa.toFixed(2)}</strong> across your remaining <strong>${remaining}</strong> credits.</p>
            <div class="bg-white rounded-lg p-3 text-sm text-gray-600 space-y-1">
                <p>Current quality points: ${currentPoints.toFixed(1)}</p>
                <p>Points needed for target: ${targetPoints.toFixed(1)}</p>
                <p>Additional points required: ${neededPoints.toFixed(1)}</p>
            </div>
        </div>`;
    }
}

// ============ SHARE ============
function shareResults() {
    const gpa = document.getElementById('gpaValue').textContent;
    const credits = document.getElementById('statCredits').textContent;
    const points = document.getElementById('statPoints').textContent;

    if (gpa === '0.00') return;

    const text = `My Semester GPA: ${gpa}\nTotal Credits: ${credits}\nTotal Grade Points: ${points}\n\nCalculated using thiyagi.com/semester-grade-calculator`;

    if (navigator.share) {
        navigator.share({ title: 'My Semester GPA', text: text }).catch(() => {});
    } else if (navigator.clipboard) {
        navigator.clipboard.writeText(text).then(() => showToast('Copied to clipboard!'));
    }
}

function showToast(msg) {
    const t = document.getElementById('toast');
    document.getElementById('toastMsg').textContent = msg;
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 2500);
}

// ============ UTILS ============
function escHtml(str) {
    const div = document.createElement('div');
    div.appendChild(document.createTextNode(str));
    return div.innerHTML;
}

// ============ INIT ============
addCourse(); addCourse(); addCourse();
calcGoal();
</script>

<?php include 'footer.php';?>
