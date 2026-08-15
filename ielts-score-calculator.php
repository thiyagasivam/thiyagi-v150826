<?php include 'header.php';?>
<?php
// ============================================================
// IELTS Score Conversion Tables
// ============================================================

$listeningTable = [
    [39, 40, 9], [37, 38, 8.5], [35, 36, 8], [32, 34, 7.5],
    [30, 31, 7], [26, 29, 6.5], [23, 25, 6], [18, 22, 5.5],
    [16, 17, 5], [13, 15, 4.5], [11, 12, 4], [9, 10, 3.5],
    [6, 8, 3], [4, 5, 2.5], [3, 3, 2], [2, 2, 1.5], [1, 1, 1]
];

$academicReadingTable = [
    [39, 40, 9], [37, 38, 8.5], [35, 36, 8], [33, 34, 7.5],
    [30, 32, 7], [27, 29, 6.5], [23, 26, 6], [19, 22, 5.5],
    [15, 18, 5], [13, 14, 4.5], [10, 12, 4], [8, 9, 3.5],
    [6, 7, 3], [4, 5, 2.5], [3, 3, 2], [2, 2, 1.5], [1, 1, 1]
];

$generalReadingTable = [
    [40, 40, 9], [39, 39, 8.5], [37, 38, 8], [36, 36, 7.5],
    [34, 35, 7], [32, 33, 6.5], [30, 31, 6], [27, 29, 5.5],
    [23, 26, 5], [19, 22, 4.5], [15, 18, 4], [12, 14, 3.5],
    [9, 11, 3], [6, 8, 2.5], [4, 5, 2], [3, 3, 1.5], [1, 2, 1]
];

$bandDescriptions = [
    9   => 'Expert User',
    8.5 => 'Very Good User',
    8   => 'Very Good User',
    7.5 => 'Good User',
    7   => 'Good User',
    6.5 => 'Competent User',
    6   => 'Competent User',
    5.5 => 'Modest User',
    5   => 'Modest User',
    4.5 => 'Limited User',
    4   => 'Limited User',
    3.5 => 'Extremely Limited User',
    3   => 'Extremely Limited User',
    2.5 => 'Intermittent User',
    2   => 'Intermittent User',
    1.5 => 'Non User',
    1   => 'Non User',
    0   => 'Did Not Attempt'
];

function convertScore($correct, $table) {
    foreach ($table as $row) {
        if ($correct >= $row[0] && $correct <= $row[1]) {
            return $row[2];
        }
    }
    return 0;
}

function ieltsRound($avg) {
    $decimal = $avg - floor($avg);
    if ($decimal < 0.25) return floor($avg);
    if ($decimal >= 0.25 && $decimal < 0.75) return floor($avg) + 0.5;
    return ceil($avg);
}
?>
<title>IELTS Score Calculator – Calculate Your IELTS Band Score Instantly</title>
<meta name="description" content="Free IELTS score calculator to estimate your overall band score for Listening, Reading, Writing and Speaking. Includes official IELTS rounding rules.">
<meta name="keywords" content="IELTS score calculator, IELTS band score, IELTS overall score, IELTS listening score, IELTS reading score, IELTS calculator 2026">
<meta property="og:title" content="IELTS Score Calculator – Calculate Your IELTS Band Score Instantly">
<meta property="og:description" content="Free IELTS score calculator to estimate your overall band score for Listening, Reading, Writing and Speaking.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/ielts-score-calculator">
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<style>
    .band-circle{width:140px;height:140px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:2.8rem;font-weight:800;margin:0 auto;box-shadow:0 4px 24px rgba(37,99,235,.18)}
    .module-card{transition:transform .18s,box-shadow .18s}.module-card:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(0,0,0,.08)}
    .score-bar{height:10px;border-radius:999px;transition:width .5s ease}
    .toggle-btn{transition:all .2s}.toggle-btn.active{background:#2563eb;color:#fff;box-shadow:0 2px 8px rgba(37,99,235,.25)}
    .fade-in{animation:fadeIn .4s ease}@keyframes fadeIn{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
    .input-range::-webkit-slider-thumb{-webkit-appearance:none;height:22px;width:22px;border-radius:50%;background:#2563eb;cursor:pointer;box-shadow:0 2px 6px rgba(37,99,235,.3)}
    .input-range::-webkit-slider-runnable-track{height:6px;border-radius:999px;background:#e2e8f0}
    .input-range{-webkit-appearance:none;appearance:none;width:100%;cursor:pointer}
    @media print{.no-print{display:none!important}.print-only{display:block!important}}
    .print-only{display:none}
    .share-toast{position:fixed;bottom:24px;left:50%;transform:translateX(-50%) translateY(80px);background:#1e293b;color:#fff;padding:12px 28px;border-radius:12px;font-size:.95rem;opacity:0;transition:all .4s ease;z-index:9999;pointer-events:none}
    .share-toast.show{opacity:1;transform:translateX(-50%) translateY(0)}
</style>
<body class="bg-gray-50 min-h-screen">

<!-- Toast Notification -->
<div id="shareToast" class="share-toast"><i class="fas fa-check-circle mr-2"></i>Copied to clipboard!</div>

<!-- Hero -->
<section class="bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white py-12 no-print">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold mb-3">IELTS Score Calculator</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Calculate your IELTS overall band score instantly using official rounding rules. Enter your scores below.</p>
    </div>
</section>

<!-- Main Calculator -->
<section class="max-w-5xl mx-auto px-4 -mt-6 relative z-10 mb-12">
    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10">

        <!-- Reading Mode Toggle -->
        <div class="flex items-center justify-center gap-2 mb-8 no-print">
            <span class="text-sm font-medium text-gray-500">Reading Type:</span>
            <button type="button" id="btnAcademic" onclick="setReadingMode('academic')" class="toggle-btn active px-4 py-2 rounded-lg text-sm font-semibold border border-blue-200">Academic</button>
            <button type="button" id="btnGeneral" onclick="setReadingMode('general')" class="toggle-btn px-4 py-2 rounded-lg text-sm font-semibold border border-gray-200 bg-white text-gray-600">General Training</button>
        </div>

        <!-- Input Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8" id="inputSection">

            <!-- Listening -->
            <div class="module-card bg-gradient-to-br from-blue-50 to-white border border-blue-100 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center"><i class="fas fa-headphones text-blue-600"></i></div>
                    <div>
                        <h3 class="font-bold text-gray-800">Listening</h3>
                        <p class="text-xs text-gray-400">Correct answers out of 40</p>
                    </div>
                    <span id="listeningBadge" class="ml-auto text-lg font-extrabold text-blue-700">—</span>
                </div>
                <input type="range" id="listeningInput" min="0" max="40" value="0" class="input-range w-full" oninput="onScoreChange()">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>0</span><span id="listeningVal" class="font-semibold text-gray-600">0</span><span>40</span></div>
            </div>

            <!-- Reading -->
            <div class="module-card bg-gradient-to-br from-green-50 to-white border border-green-100 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center"><i class="fas fa-book-open text-green-600"></i></div>
                    <div>
                        <h3 class="font-bold text-gray-800">Reading</h3>
                        <p class="text-xs text-gray-400">Correct answers out of 40</p>
                    </div>
                    <span id="readingBadge" class="ml-auto text-lg font-extrabold text-green-700">—</span>
                </div>
                <input type="range" id="readingInput" min="0" max="40" value="0" class="input-range w-full" oninput="onScoreChange()">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>0</span><span id="readingVal" class="font-semibold text-gray-600">0</span><span>40</span></div>
            </div>

            <!-- Writing -->
            <div class="module-card bg-gradient-to-br from-purple-50 to-white border border-purple-100 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center"><i class="fas fa-pen-fancy text-purple-600"></i></div>
                    <div>
                        <h3 class="font-bold text-gray-800">Writing</h3>
                        <p class="text-xs text-gray-400">Band score (0 – 9, in 0.5 steps)</p>
                    </div>
                    <span id="writingBadge" class="ml-auto text-lg font-extrabold text-purple-700">—</span>
                </div>
                <input type="range" id="writingInput" min="0" max="18" value="0" step="1" class="input-range w-full" oninput="onScoreChange()">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>0</span><span id="writingVal" class="font-semibold text-gray-600">0</span><span>9</span></div>
            </div>

            <!-- Speaking -->
            <div class="module-card bg-gradient-to-br from-orange-50 to-white border border-orange-100 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center"><i class="fas fa-microphone text-orange-600"></i></div>
                    <div>
                        <h3 class="font-bold text-gray-800">Speaking</h3>
                        <p class="text-xs text-gray-400">Band score (0 – 9, in 0.5 steps)</p>
                    </div>
                    <span id="speakingBadge" class="ml-auto text-lg font-extrabold text-orange-700">—</span>
                </div>
                <input type="range" id="speakingInput" min="0" max="18" value="0" step="1" class="input-range w-full" oninput="onScoreChange()">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>0</span><span id="speakingVal" class="font-semibold text-gray-600">0</span><span>9</span></div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-wrap gap-3 justify-center mb-8 no-print">
            <button onclick="resetAll()" class="px-5 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold text-sm transition"><i class="fas fa-redo mr-1"></i> Reset</button>
            <button onclick="shareResults()" class="px-5 py-2.5 rounded-lg bg-blue-50 hover:bg-blue-100 text-blue-700 font-semibold text-sm transition"><i class="fas fa-share-alt mr-1"></i> Share</button>
            <button onclick="window.print()" class="px-5 py-2.5 rounded-lg bg-green-50 hover:bg-green-100 text-green-700 font-semibold text-sm transition"><i class="fas fa-print mr-1"></i> Print</button>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="fade-in" style="display:none">
            <hr class="mb-8">

            <!-- Overall Band -->
            <div class="text-center mb-8">
                <p class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Overall Band Score</p>
                <div id="overallCircle" class="band-circle bg-gradient-to-br from-blue-500 to-indigo-600 text-white">—</div>
                <p id="overallDesc" class="mt-3 text-lg font-semibold text-gray-600"></p>
                <p id="overallAvg" class="text-sm text-gray-400 mt-1"></p>
            </div>

            <!-- Module Breakdown -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                <div class="text-center p-4 rounded-xl bg-blue-50">
                    <p class="text-xs font-semibold text-blue-500 uppercase mb-1">Listening</p>
                    <p id="resListening" class="text-2xl font-extrabold text-blue-700">—</p>
                    <div class="w-full bg-blue-100 rounded-full mt-2"><div id="barListening" class="score-bar bg-blue-500" style="width:0%"></div></div>
                </div>
                <div class="text-center p-4 rounded-xl bg-green-50">
                    <p class="text-xs font-semibold text-green-500 uppercase mb-1">Reading</p>
                    <p id="resReading" class="text-2xl font-extrabold text-green-700">—</p>
                    <div class="w-full bg-green-100 rounded-full mt-2"><div id="barReading" class="score-bar bg-green-500" style="width:0%"></div></div>
                </div>
                <div class="text-center p-4 rounded-xl bg-purple-50">
                    <p class="text-xs font-semibold text-purple-500 uppercase mb-1">Writing</p>
                    <p id="resWriting" class="text-2xl font-extrabold text-purple-700">—</p>
                    <div class="w-full bg-purple-100 rounded-full mt-2"><div id="barWriting" class="score-bar bg-purple-500" style="width:0%"></div></div>
                </div>
                <div class="text-center p-4 rounded-xl bg-orange-50">
                    <p class="text-xs font-semibold text-orange-500 uppercase mb-1">Speaking</p>
                    <p id="resSpeaking" class="text-2xl font-extrabold text-orange-700">—</p>
                    <div class="w-full bg-orange-100 rounded-full mt-2"><div id="barSpeaking" class="score-bar bg-orange-500" style="width:0%"></div></div>
                </div>
            </div>

            <!-- Chart -->
            <div class="max-w-lg mx-auto mb-8">
                <canvas id="scoreChart" height="220"></canvas>
            </div>

            <!-- Score Explanation -->
            <div id="explanationCard" class="bg-gray-50 border border-gray-100 rounded-xl p-6 mb-8">
                <h3 class="font-bold text-gray-800 mb-3"><i class="fas fa-info-circle text-blue-500 mr-2"></i>Score Explanation</h3>
                <p id="explanationText" class="text-gray-600 text-sm leading-relaxed"></p>
            </div>
        </div>

        <!-- Target Band Calculator -->
        <div class="no-print">
            <hr class="mb-8">
            <div class="bg-gradient-to-br from-indigo-50 to-white border border-indigo-100 rounded-xl p-6">
                <h3 class="font-bold text-gray-800 mb-1"><i class="fas fa-bullseye text-indigo-500 mr-2"></i>Target Band Calculator</h3>
                <p class="text-sm text-gray-400 mb-4">Find out what scores you need in each module to achieve your target overall band.</p>
                <div class="flex flex-wrap items-end gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 mb-1">Target Band</label>
                        <select id="targetBand" class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm font-semibold focus:ring-2 focus:ring-indigo-300 focus:outline-none" onchange="calcTarget()">
                            <option value="">Select</option>
                            <option value="9">9.0</option><option value="8.5">8.5</option><option value="8">8.0</option>
                            <option value="7.5">7.5</option><option value="7" selected>7.0</option><option value="6.5">6.5</option>
                            <option value="6">6.0</option><option value="5.5">5.5</option><option value="5">5.0</option>
                            <option value="4.5">4.5</option><option value="4">4.0</option>
                        </select>
                    </div>
                    <div class="flex-1">
                        <div id="targetResult" class="text-sm text-gray-600"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Print-only Results -->
<div class="print-only max-w-2xl mx-auto px-8 py-6">
    <h2 class="text-2xl font-bold mb-6 text-center">IELTS Score Report</h2>
    <div id="printContent"></div>
    <p class="text-xs text-gray-400 mt-8 text-center">Generated by thiyagi.com/ielts-score-calculator</p>
</div>

<!-- Landing Page Content -->
<section class="max-w-5xl mx-auto px-4 mb-12 no-print">

    <!-- Introduction -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">IELTS Score Calculator – Calculate Your IELTS Band Score Instantly</h2>
        <p class="text-gray-600 leading-relaxed mb-4">We have developed this <strong>IELTS Score Calculator</strong> to provide test-takers with a precise, reliable, and instantaneous method of estimating their <strong>overall IELTS band score</strong>. Whether you are preparing for <strong>IELTS Academic</strong> or <strong>IELTS General Training</strong>, our tool applies the <strong>official IELTS rounding rules</strong> to deliver an accurate calculation based on the four core modules: <strong>Listening, Reading, Writing,</strong> and <strong>Speaking</strong>. This is the most comprehensive free IELTS band score calculator available online in 2026, and it is designed to help students, professionals, and immigration applicants plan their preparation with confidence.</p>
        <p class="text-gray-600 leading-relaxed mb-4">The <strong>International English Language Testing System (IELTS)</strong> is the world's most widely recognised English language proficiency test, accepted by over <strong>11,000 organisations</strong> in more than <strong>140 countries</strong>. Millions of candidates sit for the IELTS examination each year for purposes including <strong>university admission, skilled migration, professional registration,</strong> and <strong>workplace communication</strong>. Understanding how your raw scores translate into band scores — and how those band scores combine into an <strong>overall IELTS band</strong> — is essential for effective preparation and realistic goal-setting.</p>
        <p class="text-gray-600 leading-relaxed">Our calculator eliminates guesswork. Simply enter your <strong>Listening correct answers</strong> (out of 40), your <strong>Reading correct answers</strong> (out of 40, with separate tables for Academic and General Training), and your <strong>Writing and Speaking band scores</strong> (in 0.5 increments from 0 to 9). The tool instantly computes your individual module band scores and your <strong>overall IELTS band score</strong> using the exact rounding methodology employed by official IELTS test centres worldwide.</p>
    </div>

    <!-- How the IELTS Scoring System Works -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">How the IELTS Scoring System Works</h2>
        <p class="text-gray-600 leading-relaxed mb-4">The <strong>IELTS scoring system</strong> uses a <strong>9-band scale</strong> to measure English language proficiency across four distinct modules. Each module is scored independently, and the <strong>overall band score</strong> is calculated as the arithmetic mean of the four individual band scores, subject to specific rounding conventions.</p>

        <h3 class="text-lg font-bold text-gray-800 mb-3 mt-6"><i class="fas fa-headphones text-blue-500 mr-2"></i>IELTS Listening Band Score Conversion</h3>
        <p class="text-gray-600 leading-relaxed mb-4">The <strong>IELTS Listening test</strong> consists of <strong>40 questions</strong> across four recorded sections of increasing difficulty. Each correct answer receives one mark, and the total number of correct answers is converted into a <strong>band score</strong> using the official conversion table. The Listening conversion table is identical for both Academic and General Training candidates. Scores range from <strong>Band 1</strong> (1 correct answer) to <strong>Band 9</strong> (39–40 correct answers). Our calculator stores this complete mapping and automatically converts your raw score the moment you adjust the slider.</p>

        <h3 class="text-lg font-bold text-gray-800 mb-3 mt-6"><i class="fas fa-book-open text-green-500 mr-2"></i>IELTS Reading Band Score Conversion – Academic vs General Training</h3>
        <p class="text-gray-600 leading-relaxed mb-4">The <strong>IELTS Reading test</strong> also comprises <strong>40 questions</strong>, but the conversion from raw scores to band scores differs significantly between <strong>Academic Reading</strong> and <strong>General Training Reading</strong>. The Academic Reading module features more demanding texts — typically sourced from journals, textbooks, and academic publications — therefore requiring <strong>fewer correct answers to achieve higher bands</strong> relative to the General Training paper. For example, 30 correct answers in the Academic test equate to <strong>Band 7.0</strong>, whereas the same number in the General Training test yields <strong>Band 6.0</strong>. Our calculator includes a convenient toggle so you can switch between these two conversion tables seamlessly.</p>

        <h3 class="text-lg font-bold text-gray-800 mb-3 mt-6"><i class="fas fa-pen-fancy text-purple-500 mr-2"></i>IELTS Writing Band Score</h3>
        <p class="text-gray-600 leading-relaxed mb-4">The <strong>IELTS Writing test</strong> is evaluated by certified examiners who assess your response across four criteria: <strong>Task Achievement (Task 1) / Task Response (Task 2), Coherence and Cohesion, Lexical Resource,</strong> and <strong>Grammatical Range and Accuracy</strong>. Each criterion is scored on the 9-band scale, and the average of these four criteria produces your Writing band score. Scores are reported in <strong>whole and half-band increments</strong> (e.g., 5.0, 5.5, 6.0, 6.5, 7.0). Because Writing is examiner-assessed rather than objectively marked, you enter your band score directly into our calculator.</p>

        <h3 class="text-lg font-bold text-gray-800 mb-3 mt-6"><i class="fas fa-microphone text-orange-500 mr-2"></i>IELTS Speaking Band Score</h3>
        <p class="text-gray-600 leading-relaxed mb-4">The <strong>IELTS Speaking test</strong> is a face-to-face interview lasting 11 to 14 minutes, conducted by a trained examiner. Your performance is assessed on four criteria: <strong>Fluency and Coherence, Lexical Resource, Grammatical Range and Accuracy,</strong> and <strong>Pronunciation</strong>. Like Writing, Speaking scores are reported in <strong>0.5 increments</strong> from 0 to 9. Enter your estimated or actual Speaking band score into our calculator to see how it affects your overall result.</p>
    </div>

    <!-- Official IELTS Rounding Rules -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Official IELTS Rounding Rules Explained</h2>
        <p class="text-gray-600 leading-relaxed mb-4">One of the most frequently misunderstood aspects of the IELTS scoring process is the <strong>official rounding mechanism</strong> applied to the overall band score. The overall band is not simply the average of your four module scores rounded to the nearest 0.5. Instead, IELTS applies a <strong>specific rounding convention</strong> that always rounds <strong>upward</strong> at the quarter-band threshold:</p>

        <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden mb-6">
            <thead>
                <tr class="bg-blue-50">
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Raw Average Ending</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Rounding Rule</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Example</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Final Band</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 text-gray-600">.00</td><td class="px-4 py-2.5 text-gray-600">Stays the same</td><td class="px-4 py-2.5 text-gray-600">7.00</td><td class="px-4 py-2.5 font-bold text-gray-800">7.0</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 text-gray-600">.125</td><td class="px-4 py-2.5 text-gray-600">Rounds down to .0</td><td class="px-4 py-2.5 text-gray-600">6.125</td><td class="px-4 py-2.5 font-bold text-gray-800">6.0</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 text-gray-600">.25</td><td class="px-4 py-2.5 text-gray-600">Rounds up to .5</td><td class="px-4 py-2.5 text-gray-600">6.25</td><td class="px-4 py-2.5 font-bold text-gray-800">6.5</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 text-gray-600">.50</td><td class="px-4 py-2.5 text-gray-600">Stays the same</td><td class="px-4 py-2.5 text-gray-600">6.50</td><td class="px-4 py-2.5 font-bold text-gray-800">6.5</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 text-gray-600">.625</td><td class="px-4 py-2.5 text-gray-600">Rounds down to .5</td><td class="px-4 py-2.5 text-gray-600">6.625</td><td class="px-4 py-2.5 font-bold text-gray-800">6.5</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 text-gray-600">.75</td><td class="px-4 py-2.5 text-gray-600">Rounds up to next whole band</td><td class="px-4 py-2.5 text-gray-600">6.75</td><td class="px-4 py-2.5 font-bold text-gray-800">7.0</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 text-gray-600">.875</td><td class="px-4 py-2.5 text-gray-600">Rounds down to .5 of next band</td><td class="px-4 py-2.5 text-gray-600">6.875</td><td class="px-4 py-2.5 font-bold text-gray-800">7.0</td></tr>
            </tbody>
        </table>

        <p class="text-gray-600 leading-relaxed">This rounding mechanism means that an average of <strong>6.25 will yield an overall band of 6.5</strong>, and an average of <strong>6.75 will yield an overall band of 7.0</strong>. Our IELTS Score Calculator applies this exact logic automatically, so you always see the precise official result without manual arithmetic.</p>
    </div>

    <!-- Conversion Tables -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Complete IELTS Score Conversion Tables 2026</h2>
        <p class="text-gray-600 leading-relaxed mb-6">Below are the <strong>complete IELTS score conversion tables</strong> for Listening, Academic Reading, and General Training Reading. These tables show the exact relationship between <strong>raw correct answers</strong> and the corresponding <strong>band score</strong>. We keep these tables updated to reflect the latest officially published data.</p>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Listening Table -->
            <div>
                <h3 class="font-bold text-gray-800 mb-3 text-center">Listening Score Conversion Table</h3>
                <table class="w-full text-sm">
                    <thead><tr class="bg-blue-50"><th class="px-3 py-2 text-left rounded-tl-lg font-bold">Correct Answers</th><th class="px-3 py-2 text-right rounded-tr-lg font-bold">Band Score</th></tr></thead>
                    <tbody>
                    <?php foreach($listeningTable as $r): ?>
                        <tr class="border-b border-gray-50">
                            <td class="px-3 py-1.5 text-gray-600"><?php echo $r[0] === $r[1] ? $r[0] : $r[0].'–'.$r[1]; ?></td>
                            <td class="px-3 py-1.5 text-right font-semibold text-gray-800"><?php echo number_format($r[2], 1); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Academic Reading Table -->
            <div>
                <h3 class="font-bold text-gray-800 mb-3 text-center">Academic Reading Conversion Table</h3>
                <table class="w-full text-sm">
                    <thead><tr class="bg-green-50"><th class="px-3 py-2 text-left rounded-tl-lg font-bold">Correct Answers</th><th class="px-3 py-2 text-right rounded-tr-lg font-bold">Band Score</th></tr></thead>
                    <tbody>
                    <?php foreach($academicReadingTable as $r): ?>
                        <tr class="border-b border-gray-50">
                            <td class="px-3 py-1.5 text-gray-600"><?php echo $r[0] === $r[1] ? $r[0] : $r[0].'–'.$r[1]; ?></td>
                            <td class="px-3 py-1.5 text-right font-semibold text-gray-800"><?php echo number_format($r[2], 1); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- General Training Reading Table -->
            <div>
                <h3 class="font-bold text-gray-800 mb-3 text-center">General Training Reading Conversion Table</h3>
                <table class="w-full text-sm">
                    <thead><tr class="bg-emerald-50"><th class="px-3 py-2 text-left rounded-tl-lg font-bold">Correct Answers</th><th class="px-3 py-2 text-right rounded-tr-lg font-bold">Band Score</th></tr></thead>
                    <tbody>
                    <?php foreach($generalReadingTable as $r): ?>
                        <tr class="border-b border-gray-50">
                            <td class="px-3 py-1.5 text-gray-600"><?php echo $r[0] === $r[1] ? $r[0] : $r[0].'–'.$r[1]; ?></td>
                            <td class="px-3 py-1.5 text-right font-semibold text-gray-800"><?php echo number_format($r[2], 1); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Band Descriptions -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">IELTS Band Score Descriptions – What Each Band Means</h2>
        <p class="text-gray-600 leading-relaxed mb-6">Each <strong>IELTS band score</strong> corresponds to a specific level of English language competence. Understanding these descriptions helps you set realistic targets and interpret your results meaningfully. The table below outlines the <strong>official IELTS band descriptors</strong> from Band 9 (Expert User) down to Band 1 (Non User).</p>

        <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden mb-6">
            <thead>
                <tr class="bg-blue-50">
                    <th class="px-4 py-3 text-left font-bold text-gray-800 w-20">Band</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800 w-44">Skill Level</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $descDetails = [
                    9 => ['Expert User', 'Has <strong>fully operational command</strong> of the language. Appropriate, accurate, and fluent with complete understanding.'],
                    8 => ['Very Good User', 'Has <strong>fully operational command</strong> with only occasional unsystematic inaccuracies. May have difficulty in unfamiliar situations. Handles complex, detailed argumentation well.'],
                    7 => ['Good User', 'Has <strong>operational command</strong> of the language, though with occasional inaccuracies, inappropriate usage, and misunderstandings. Generally handles complex language well and understands detailed reasoning.'],
                    6 => ['Competent User', 'Has an <strong>effective command</strong> of the language despite some inaccuracies, inappropriate usage, and misunderstandings. Can use and understand fairly complex language, particularly in familiar situations.'],
                    5 => ['Modest User', 'Has a <strong>partial command</strong> of the language and copes with overall meaning in most situations, although likely to make many mistakes. Should be able to handle basic communication in their own field.'],
                    4 => ['Limited User', '<strong>Basic competence</strong> is limited to familiar situations. Has frequent problems in understanding and expression. Is not able to use complex language.'],
                    3 => ['Extremely Limited User', 'Conveys and understands only <strong>general meaning</strong> in very familiar situations. Frequent breakdowns in communication occur.'],
                    2 => ['Intermittent User', '<strong>No real communication</strong> is possible except for the most basic information using isolated words or short formulae in familiar situations and to meet immediate needs.'],
                    1 => ['Non User', 'Essentially has <strong>no ability</strong> to use the language beyond possibly a few isolated words.'],
                ];
                $i = 0;
                foreach($descDetails as $band => $info): $i++; ?>
                <tr class="border-t border-gray-100 <?php echo $i % 2 === 0 ? 'bg-gray-50' : ''; ?>">
                    <td class="px-4 py-3 font-extrabold text-blue-700 text-center text-lg"><?php echo $band; ?></td>
                    <td class="px-4 py-3 font-semibold text-gray-800"><?php echo $info[0]; ?></td>
                    <td class="px-4 py-3 text-gray-600"><?php echo $info[1]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- How to Use This Calculator -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">How to Use Our IELTS Score Calculator – Step-by-Step Guide</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Our <strong>IELTS band score calculator</strong> is designed for simplicity and speed. Follow these steps to calculate your overall band score in seconds:</p>
        <ol class="list-decimal list-inside text-gray-600 leading-relaxed space-y-3 mb-4">
            <li><strong>Select your Reading type</strong> – Choose between <strong>Academic</strong> or <strong>General Training</strong> using the toggle at the top of the calculator. This ensures the correct conversion table is applied to your Reading score.</li>
            <li><strong>Enter your Listening score</strong> – Drag the slider to indicate the number of <strong>correct answers out of 40</strong> you achieved in the Listening test. The band score is calculated instantly.</li>
            <li><strong>Enter your Reading score</strong> – Drag the slider to indicate the number of <strong>correct answers out of 40</strong> you achieved in the Reading test. The conversion is applied automatically based on your selected test type.</li>
            <li><strong>Enter your Writing band score</strong> – Use the slider to select your <strong>Writing band score</strong> in 0.5 increments. If you are estimating, use the band descriptors above for guidance.</li>
            <li><strong>Enter your Speaking band score</strong> – Use the slider to select your <strong>Speaking band score</strong> in 0.5 increments.</li>
            <li><strong>View your results</strong> – Your <strong>individual module scores, overall band score, score chart,</strong> and <strong>detailed explanation</strong> appear instantly below the input section.</li>
            <li><strong>Use additional features</strong> – Share your results, print a clean report, or use the <strong>Target Band Calculator</strong> to plan score improvements.</li>
        </ol>
    </div>

    <!-- Who Should Use This Calculator -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Who Should Use the IELTS Score Calculator?</h2>
        <p class="text-gray-600 leading-relaxed mb-4">This tool provides value to a wide range of IELTS stakeholders:</p>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>IELTS test-takers preparing for the exam</strong> – Run practice test scores through the calculator to track progress and identify weak areas.</li>
            <li><strong>Students applying to universities abroad</strong> – Determine whether your projected scores meet the <strong>minimum IELTS requirements</strong> for your chosen institution.</li>
            <li><strong>Immigration applicants</strong> – Verify that your scores meet the <strong>CLB (Canadian Language Benchmark)</strong> or other immigration band requirements for countries like <strong>Canada, Australia, New Zealand,</strong> and the <strong>United Kingdom</strong>.</li>
            <li><strong>IELTS tutors and coaching centres</strong> – Use the calculator as a teaching aid to demonstrate how raw scores translate into band scores and how the rounding system works.</li>
            <li><strong>Professionals requiring IELTS for registration</strong> – Many professional bodies in healthcare, engineering, and accounting require specific IELTS band scores for overseas registration.</li>
        </ul>
    </div>

    <!-- IELTS Score Requirements -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">IELTS Score Requirements by Country and Purpose</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Different countries and institutions set varying <strong>minimum IELTS band score requirements</strong>. The table below provides a general guide to typical requirements across major destinations:</p>

        <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden mb-6">
            <thead>
                <tr class="bg-indigo-50">
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Country / Purpose</th>
                    <th class="px-4 py-3 text-center font-bold text-gray-800">Test Type</th>
                    <th class="px-4 py-3 text-center font-bold text-gray-800">Overall Band</th>
                    <th class="px-4 py-3 text-center font-bold text-gray-800">Minimum per Module</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 text-gray-600"><strong>Canada – Express Entry (FSW)</strong></td><td class="px-4 py-2.5 text-center text-gray-600">General</td><td class="px-4 py-2.5 text-center font-semibold">6.0</td><td class="px-4 py-2.5 text-center text-gray-600">6.0 each</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 text-gray-600"><strong>Australia – Skilled Migration (189/190)</strong></td><td class="px-4 py-2.5 text-center text-gray-600">Academic / General</td><td class="px-4 py-2.5 text-center font-semibold">6.0</td><td class="px-4 py-2.5 text-center text-gray-600">6.0 each</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 text-gray-600"><strong>UK – Tier 2 / Skilled Worker Visa</strong></td><td class="px-4 py-2.5 text-center text-gray-600">Academic / General</td><td class="px-4 py-2.5 text-center font-semibold">4.0 – 7.0</td><td class="px-4 py-2.5 text-center text-gray-600">Varies by role</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 text-gray-600"><strong>New Zealand – Skilled Migrant</strong></td><td class="px-4 py-2.5 text-center text-gray-600">General</td><td class="px-4 py-2.5 text-center font-semibold">6.5</td><td class="px-4 py-2.5 text-center text-gray-600">6.0 each</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 text-gray-600"><strong>University Undergraduate Admission</strong></td><td class="px-4 py-2.5 text-center text-gray-600">Academic</td><td class="px-4 py-2.5 text-center font-semibold">5.5 – 6.5</td><td class="px-4 py-2.5 text-center text-gray-600">5.0 – 6.0</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 text-gray-600"><strong>University Postgraduate Admission</strong></td><td class="px-4 py-2.5 text-center text-gray-600">Academic</td><td class="px-4 py-2.5 text-center font-semibold">6.5 – 7.5</td><td class="px-4 py-2.5 text-center text-gray-600">6.0 – 7.0</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 text-gray-600"><strong>Medical / Nursing Registration (UK, AU)</strong></td><td class="px-4 py-2.5 text-center text-gray-600">Academic</td><td class="px-4 py-2.5 text-center font-semibold">7.0 – 7.5</td><td class="px-4 py-2.5 text-center text-gray-600">6.5 – 7.0</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 text-gray-600"><strong>Germany – University Admission</strong></td><td class="px-4 py-2.5 text-center text-gray-600">Academic</td><td class="px-4 py-2.5 text-center font-semibold">6.0 – 6.5</td><td class="px-4 py-2.5 text-center text-gray-600">5.5 – 6.0</td></tr>
            </tbody>
        </table>

        <p class="text-gray-600 leading-relaxed">Use our calculator alongside this reference table to verify whether your current or projected scores meet the requirements. We also recommend our <a href="/age-calculator" class="text-blue-600 font-semibold hover:underline">Age Calculator</a> if you need to confirm eligibility criteria based on age limits for certain immigration programmes.</p>
    </div>

    <!-- Tips to Improve IELTS Score -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Proven Tips to Improve Your IELTS Band Score</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Achieving your desired <strong>IELTS band score</strong> requires a strategic, module-specific approach. Below are our recommended strategies for improving performance in each section:</p>

        <h3 class="text-lg font-bold text-gray-800 mb-3 mt-4">Listening Improvement Strategies</h3>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Practice with authentic recordings</strong> – Listen to BBC podcasts, TED talks, and academic lectures daily to build familiarity with a range of English accents.</li>
            <li><strong>Develop note-taking skills</strong> – Focus on writing keywords and abbreviations while listening, as the audio plays only once in the actual test.</li>
            <li><strong>Review common question types</strong> – Multiple choice, map/diagram labelling, sentence completion, and matching heading questions each require specific techniques.</li>
            <li><strong>Use the 30-second transfer time wisely</strong> – Check spelling and grammar of your answers during this period at the end of the Listening section.</li>
        </ul>

        <h3 class="text-lg font-bold text-gray-800 mb-3 mt-4">Reading Improvement Strategies</h3>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Practice skimming and scanning</strong> – Read the questions first, then locate relevant sections in the passage rather than reading every word.</li>
            <li><strong>Time management is critical</strong> – Allocate no more than 20 minutes per passage. Passage 3 is typically the most difficult.</li>
            <li><strong>Build academic vocabulary</strong> – Read scientific articles, newspaper editorials, and research summaries to expand your lexical resource.</li>
            <li><strong>Understand paraphrasing</strong> – IELTS Reading answers are almost never word-for-word matches from the text; they use synonyms and rephrasing.</li>
        </ul>

        <h3 class="text-lg font-bold text-gray-800 mb-3 mt-4">Writing Improvement Strategies</h3>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Master the essay structures</strong> – Task 2 typically requires an introduction, 2–3 body paragraphs, and a conclusion. Each paragraph should have a clear topic sentence.</li>
            <li><strong>Use cohesive devices correctly</strong> – Furthermore, moreover, however, nevertheless, in contrast — use these connectors to improve coherence and raise your Coherence and Cohesion score.</li>
            <li><strong>Write at least 150 words for Task 1 and 250 words for Task 2</strong> – Writing under the word limit results in a penalty.</li>
            <li><strong>Proofread rigorously</strong> – Reserve 2–3 minutes at the end to check for grammar, spelling, and punctuation errors.</li>
        </ul>

        <h3 class="text-lg font-bold text-gray-800 mb-3 mt-4">Speaking Improvement Strategies</h3>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Record yourself</strong> – Practise answering Part 2 cue cards and review your recordings for fluency, pronunciation, and filler word usage.</li>
            <li><strong>Develop topic-specific vocabulary</strong> – Common topics include technology, education, health, environment, and culture. Prepare idiomatic expressions for each.</li>
            <li><strong>Expand your answers naturally</strong> – In Part 3, provide detailed opinions with examples and explanations rather than one-sentence responses.</li>
            <li><strong>Focus on pronunciation</strong> – Clear word stress, intonation patterns, and connected speech are weighted heavily in the pronunciation criterion.</li>
        </ul>
    </div>

    <!-- Academic vs General Training -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">IELTS Academic vs General Training – Key Differences</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Many candidates are unsure whether to take <strong>IELTS Academic</strong> or <strong>IELTS General Training</strong>. The choice depends entirely on your purpose for taking the test. Here is a detailed comparison:</p>

        <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden mb-6">
            <thead>
                <tr class="bg-purple-50">
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Feature</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Academic</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">General Training</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-semibold text-gray-800">Purpose</td><td class="px-4 py-2.5 text-gray-600">University admission, professional registration</td><td class="px-4 py-2.5 text-gray-600">Immigration, workplace, secondary education</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-semibold text-gray-800">Reading Texts</td><td class="px-4 py-2.5 text-gray-600">Academic journals, textbooks, research papers</td><td class="px-4 py-2.5 text-gray-600">Advertisements, notices, workplace documents, general articles</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-semibold text-gray-800">Writing Task 1</td><td class="px-4 py-2.5 text-gray-600">Describe a graph, chart, diagram, or process</td><td class="px-4 py-2.5 text-gray-600">Write a letter (formal, semi-formal, or informal)</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-semibold text-gray-800">Writing Task 2</td><td class="px-4 py-2.5 text-gray-600">Academic essay (same format for both)</td><td class="px-4 py-2.5 text-gray-600">Academic essay (same format for both)</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-semibold text-gray-800">Listening</td><td class="px-4 py-2.5 text-gray-600">Identical for both versions</td><td class="px-4 py-2.5 text-gray-600">Identical for both versions</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-semibold text-gray-800">Speaking</td><td class="px-4 py-2.5 text-gray-600">Identical for both versions</td><td class="px-4 py-2.5 text-gray-600">Identical for both versions</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-semibold text-gray-800">Score Conversion (Reading)</td><td class="px-4 py-2.5 text-gray-600">Stricter — higher raw score required for same band</td><td class="px-4 py-2.5 text-gray-600">More lenient conversion table</td></tr>
            </tbody>
        </table>

        <p class="text-gray-600 leading-relaxed">Our IELTS Score Calculator fully supports both versions. Simply toggle between <strong>Academic</strong> and <strong>General Training</strong> at the top of the calculator to apply the correct Reading conversion table.</p>
    </div>

    <!-- Target Band Strategy -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">How to Use the Target Band Calculator for Strategic IELTS Planning</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Our built-in <strong>Target Band Calculator</strong> is a powerful planning tool that reverse-engineers the scores you need. If your target is <strong>Band 7.0 overall</strong>, for example, the calculator analyses your current module scores and identifies the most efficient path to achieving that goal.</p>
        <p class="text-gray-600 leading-relaxed mb-4">The strategy prioritises <strong>improving your weakest modules first</strong>, as this yields the greatest return on effort. If your Listening is already at Band 8.0 but your Writing is at Band 5.5, investing preparation time in Writing improvement will have a far greater impact on your overall score than pushing Listening from 8.0 to 8.5.</p>
        <p class="text-gray-600 leading-relaxed mb-4">Key points to remember:</p>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li>The overall band is the <strong>average of four module scores</strong>, so each module contributes equally</li>
            <li>A <strong>0.5 increase</strong> in any single module raises your overall average by <strong>0.125</strong></li>
            <li>Due to IELTS rounding, even a small improvement can sometimes push your overall band to the next level</li>
            <li>Aim for <strong>balanced scores</strong> rather than an extremely high score in one module and a low score in another, as many institutions require <strong>minimum scores per module</strong></li>
        </ul>
    </div>

    <!-- IELTS Test Format Overview -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">IELTS Test Format – Complete Module Overview</h2>
        <p class="text-gray-600 leading-relaxed mb-4">The IELTS examination comprises <strong>four modules</strong> completed over approximately <strong>2 hours and 45 minutes</strong>. Here is a detailed breakdown of each module's format, timing, and scoring:</p>

        <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden mb-6">
            <thead>
                <tr class="bg-orange-50">
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Module</th>
                    <th class="px-4 py-3 text-center font-bold text-gray-800">Duration</th>
                    <th class="px-4 py-3 text-center font-bold text-gray-800">Questions</th>
                    <th class="px-4 py-3 text-center font-bold text-gray-800">Sections</th>
                    <th class="px-4 py-3 text-left font-bold text-gray-800">Scoring Method</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-semibold text-gray-800">Listening</td><td class="px-4 py-2.5 text-center text-gray-600">30 min + 10 min transfer</td><td class="px-4 py-2.5 text-center text-gray-600">40</td><td class="px-4 py-2.5 text-center text-gray-600">4</td><td class="px-4 py-2.5 text-gray-600">Raw score → Band conversion</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-semibold text-gray-800">Reading</td><td class="px-4 py-2.5 text-center text-gray-600">60 min</td><td class="px-4 py-2.5 text-center text-gray-600">40</td><td class="px-4 py-2.5 text-center text-gray-600">3</td><td class="px-4 py-2.5 text-gray-600">Raw score → Band conversion</td></tr>
                <tr class="border-t border-gray-100"><td class="px-4 py-2.5 font-semibold text-gray-800">Writing</td><td class="px-4 py-2.5 text-center text-gray-600">60 min</td><td class="px-4 py-2.5 text-center text-gray-600">2 tasks</td><td class="px-4 py-2.5 text-center text-gray-600">2</td><td class="px-4 py-2.5 text-gray-600">Examiner-assessed (4 criteria)</td></tr>
                <tr class="border-t border-gray-100 bg-gray-50"><td class="px-4 py-2.5 font-semibold text-gray-800">Speaking</td><td class="px-4 py-2.5 text-center text-gray-600">11–14 min</td><td class="px-4 py-2.5 text-center text-gray-600">3 parts</td><td class="px-4 py-2.5 text-center text-gray-600">3</td><td class="px-4 py-2.5 text-gray-600">Examiner-assessed (4 criteria)</td></tr>
            </tbody>
        </table>
    </div>

    <!-- IELTS Paper-Based vs Computer-Based -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">IELTS Paper-Based vs Computer-Based – Which Should You Choose?</h2>
        <p class="text-gray-600 leading-relaxed mb-4">IELTS is now available in both <strong>paper-based</strong> and <strong>computer-delivered</strong> formats. The content, difficulty level, and scoring are identical in both modes. The key differences lie in the delivery method and result turnaround time:</p>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Computer-delivered IELTS</strong> – Results available in <strong>3–5 days</strong>. Typing is faster for most candidates, and the on-screen timer helps with time management. Available at more frequent dates.</li>
            <li><strong>Paper-based IELTS</strong> – Results available in <strong>13 days</strong>. Some candidates prefer writing by hand, especially for Writing Task 1 diagrams. Available on fixed dates, typically 4 times per month.</li>
            <li><strong>Speaking test</strong> – Conducted face-to-face with an examiner in both formats, either on the same day or within a few days of the main test.</li>
            <li><strong>Scoring</strong> – The same conversion tables and rounding rules apply to both formats. Our calculator works for both paper-based and computer-delivered results.</li>
        </ul>
    </div>

    <!-- Common Mistakes -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Common Mistakes That Lower IELTS Scores</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Many candidates lose marks through <strong>avoidable errors</strong> rather than a lack of English proficiency. We have compiled the most common mistakes across all four modules:</p>
        <ul class="list-disc list-inside text-gray-600 leading-relaxed space-y-2 mb-4">
            <li><strong>Spelling errors in Listening and Reading</strong> – Answers must be spelled correctly. "Goverment" instead of "government" costs you the mark.</li>
            <li><strong>Exceeding word limits</strong> – If the instruction says "no more than two words," writing three words means zero marks for that question.</li>
            <li><strong>Poor time management in Reading</strong> – Spending too long on Passage 1 leaves insufficient time for the harder Passage 3.</li>
            <li><strong>Not answering the Writing prompt directly</strong> – Off-topic or partially addressed responses receive significantly lower Task Achievement scores.</li>
            <li><strong>Memorised answers in Speaking</strong> – Examiners are trained to detect rehearsed responses, which results in lower Fluency and Coherence scores.</li>
            <li><strong>Leaving questions blank</strong> – There is no negative marking in IELTS. Always guess if you are unsure.</li>
            <li><strong>Ignoring capitalisation rules in Listening</strong> – While IELTS accepts both uppercase and lowercase, proper nouns and specific terms should be capitalised correctly.</li>
        </ul>
    </div>

    <!-- Internal Links Section -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Explore More Free Calculators and Tools</h2>
        <p class="text-gray-600 leading-relaxed mb-4">We offer a comprehensive suite of free online calculators and tools to help with education, finance, and everyday computations. Here are some of our most popular resources:</p>
        <div class="grid md:grid-cols-3 gap-4">
            <a href="/age-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-blue-50 hover:border-blue-200 transition">
                <i class="fas fa-birthday-cake text-blue-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Age Calculator</p><p class="text-xs text-gray-400">Calculate exact age in years, months, days</p></div>
            </a>
            <a href="/bmi-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-green-50 hover:border-green-200 transition">
                <i class="fas fa-weight text-green-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">BMI Calculator</p><p class="text-xs text-gray-400">Check your Body Mass Index instantly</p></div>
            </a>
            <a href="/grade-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-purple-50 hover:border-purple-200 transition">
                <i class="fas fa-graduation-cap text-purple-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Grade Calculator</p><p class="text-xs text-gray-400">Calculate GPA and final grades</p></div>
            </a>
            <a href="/percentage-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-orange-50 hover:border-orange-200 transition">
                <i class="fas fa-percent text-orange-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Percentage Calculator</p><p class="text-xs text-gray-400">Calculate percentages quickly</p></div>
            </a>
            <a href="/average-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-teal-50 hover:border-teal-200 transition">
                <i class="fas fa-chart-bar text-teal-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Average Calculator</p><p class="text-xs text-gray-400">Calculate mean, median, mode</p></div>
            </a>
            <a href="/compound-interest-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-indigo-50 hover:border-indigo-200 transition">
                <i class="fas fa-coins text-indigo-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Compound Interest Calculator</p><p class="text-xs text-gray-400">Calculate compound interest growth</p></div>
            </a>
            <a href="/emi-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-red-50 hover:border-red-200 transition">
                <i class="fas fa-calculator text-red-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">EMI Calculator</p><p class="text-xs text-gray-400">Calculate loan EMI payments</p></div>
            </a>
            <a href="/hours-calculator" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-yellow-50 hover:border-yellow-200 transition">
                <i class="fas fa-clock text-yellow-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Hours Calculator</p><p class="text-xs text-gray-400">Calculate hours between times</p></div>
            </a>
            <a href="/currency-converter" class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-pink-50 hover:border-pink-200 transition">
                <i class="fas fa-exchange-alt text-pink-500 text-lg"></i>
                <div><p class="font-semibold text-gray-800 text-sm">Currency Converter</p><p class="text-xs text-gray-400">Convert between world currencies</p></div>
            </a>
        </div>
    </div>

    <!-- 25 FAQs -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10" itemscope itemtype="https://schema.org/FAQPage">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Frequently Asked Questions About IELTS Scores</h2>
        <div class="space-y-4 text-sm">

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    1. How is the overall IELTS band score calculated?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The <strong>overall IELTS band score</strong> is the arithmetic average of your four individual module scores (Listening, Reading, Writing, Speaking). The formula is: Overall Band = (L + R + W + S) / 4. The result is then rounded using official IELTS rounding rules — averages ending in .25 round up to .5, and averages ending in .75 round up to the next whole number. For example, an average of 6.25 becomes 6.5, and an average of 6.75 becomes 7.0.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    2. What is the difference between IELTS Academic and General Training Reading scores?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The <strong>Academic Reading test</strong> uses more complex academic texts and requires a higher number of correct answers to achieve the same band score compared to General Training. For instance, 30 correct answers yield Band 7.0 in Academic but only Band 6.0 in General Training. The General Training texts are sourced from everyday materials like advertisements, workplace documents, and general interest articles.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    3. Can I get a 0.5 band score for Writing and Speaking?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Yes. Both Writing and Speaking are scored by trained IELTS examiners in <strong>whole and half-band increments</strong> (e.g., 5.0, 5.5, 6.0, 6.5, 7.0). The examiner assesses your performance across four criteria for each module and calculates the average, which is reported as a whole or half band.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    4. Is this IELTS score calculator accurate?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Our calculator uses the <strong>official IELTS conversion tables and rounding rules</strong> as published by the British Council, IDP, and Cambridge Assessment. While actual test conversions may vary marginally between test sessions, our tool provides a highly reliable estimation that matches the officially published data.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    5. What IELTS score do I need for Canada immigration?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">For <strong>Canada Express Entry (Federal Skilled Worker)</strong>, the minimum IELTS requirement is CLB 7, which corresponds to Band 6.0 in each module (Listening 6.0, Reading 6.0, Writing 6.0, Speaking 6.0) on the General Training test. Higher scores earn more Comprehensive Ranking System (CRS) points, so candidates typically aim for Band 7.0 or above in each module.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    6. What IELTS score do I need for Australia PR?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">For <strong>Australian Skilled Migration (Subclass 189/190)</strong>, the minimum is Band 6.0 in each module (termed "Competent English"). However, scoring Band 7.0 in each module ("Proficient English") earns 10 additional points, and Band 8.0 in each module ("Superior English") earns 20 additional points, which can significantly improve your chances of receiving an invitation.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    7. How many correct answers do I need for Band 7 in Listening?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">You need <strong>30 to 31 correct answers out of 40</strong> to achieve Band 7.0 in the IELTS Listening test. This means you can afford to get 9 to 10 questions wrong and still obtain a Band 7 score.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    8. How many correct answers do I need for Band 7 in Academic Reading?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">For <strong>Academic Reading Band 7.0</strong>, you need <strong>30 to 32 correct answers out of 40</strong>. This equates to answering at least 75% of the questions correctly.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    9. What does IELTS Band 6.5 mean?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">IELTS Band 6.5 is classified as a <strong>Competent User</strong>. It indicates that the candidate has an effective command of the language with some inaccuracies and misunderstandings, but can generally use and understand fairly complex language, particularly in familiar contexts. Band 6.5 is commonly accepted for undergraduate university admission and some immigration programmes.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    10. Is the IELTS Listening test the same for Academic and General Training?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Yes. The <strong>IELTS Listening test is identical</strong> for both Academic and General Training candidates. The same recordings, questions, and conversion table apply regardless of which version of IELTS you are taking.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    11. How long are IELTS scores valid?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">IELTS scores are valid for <strong>two years</strong> from the date of the test. After this period, most institutions and immigration authorities will require you to retake the test. Some organisations may accept scores older than two years if you can demonstrate that you have maintained or improved your English proficiency.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    12. Can I retake only one module of IELTS?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Yes. <strong>IELTS One Skill Retake</strong> allows candidates to retake a single module (Listening, Reading, Writing, or Speaking) if they are not satisfied with their score in that module. This option is available within 60 days of your original test and must be taken at the same test centre or through the same booking platform. Your overall band score is then recalculated using the new module score.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    13. What is the highest IELTS band score?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The highest IELTS band score is <strong>Band 9 (Expert User)</strong>, which indicates complete command of the English language with appropriate, accurate, and fluent usage. To achieve an overall Band 9, you must score Band 9 in all four modules — requiring 39–40 correct answers in both Listening and Reading, plus Band 9 in both Writing and Speaking.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    14. Is there negative marking in IELTS?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">No. There is <strong>no negative marking</strong> in the IELTS examination. Each correct answer in the Listening and Reading tests earns one mark, and incorrect or blank answers receive zero marks. It is always advisable to attempt every question, even if you need to make an educated guess.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    15. How is the IELTS Writing score calculated?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The IELTS Writing score is calculated by averaging your scores across <strong>four assessment criteria</strong>: Task Achievement/Response, Coherence and Cohesion, Lexical Resource, and Grammatical Range and Accuracy. Each criterion is scored individually on the 9-band scale by a certified examiner. The average is then reported as a whole or half band score. Task 2 carries <strong>twice the weight</strong> of Task 1.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    16. What is CLB and how does it relate to IELTS scores?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><strong>CLB (Canadian Language Benchmarks)</strong> is Canada's national standard for measuring English language proficiency. IELTS General Training scores map directly to CLB levels. CLB 7 corresponds to IELTS 6.0 in each module, CLB 8 to IELTS 6.5 (L:7.5, R:6.5, W:6.5, S:6.5), and CLB 9 to IELTS 7.0 (L:8.0, R:7.0, W:7.0, S:7.0). Higher CLB levels earn more CRS points in the Express Entry system.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    17. Can I use this calculator for IELTS practice test scores?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Absolutely. Our calculator is ideal for <strong>IELTS practice test evaluation</strong>. After completing a full practice test, enter your Listening and Reading correct answers along with your estimated Writing and Speaking band scores to see your projected overall band. This helps you track your progress over multiple practice sessions and identify areas requiring improvement.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    18. What is the average IELTS score worldwide?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The global average IELTS score for Academic test-takers is approximately <strong>Band 6.0</strong>, with Listening and Reading averaging slightly higher (around 6.2) and Writing averaging lower (around 5.6). General Training candidates average around <strong>Band 6.2</strong> overall. These figures are published annually by IELTS in their Global Performance Statistics report.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    19. How do I improve from Band 6.5 to Band 7.0?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Moving from Band 6.5 to 7.0 requires a <strong>0.5 increase in your overall average</strong>, which means gaining a total of 2.0 points across your four modules. Focus on your <strong>weakest module</strong> for the most efficient improvement. Common strategies include: daily Listening practice with authentic materials, learning academic vocabulary for Reading, mastering essay structures for Writing, and improving pronunciation for Speaking. Use our Target Band Calculator to plan the exact improvements needed.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    20. What happens if my IELTS overall score is 6.125 or 6.375?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Under the IELTS rounding rules, <strong>6.125 rounds down to 6.0</strong> (because the decimal portion is less than .25) and <strong>6.375 rounds up to 6.5</strong> (because the decimal portion falls between .25 and .75). The key thresholds are .25 (rounds up to .5) and .75 (rounds up to the next whole number). Our calculator applies this logic automatically for every possible score combination.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    21. Is IELTS harder than TOEFL or PTE?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Each test assesses English differently and "harder" is subjective. <strong>IELTS</strong> features a face-to-face Speaking interview and handwritten/typed responses. <strong>TOEFL iBT</strong> is entirely computer-based with a spoken response recorded via microphone. <strong>PTE Academic</strong> is also computer-based with AI scoring. Most candidates find IELTS Writing and Speaking more personal but also more susceptible to examiner subjectivity. Choose the test that aligns best with your strengths and the requirements of your target institution.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    22. Can I request an IELTS score remark (Enquiry on Results)?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Yes. You can apply for an <strong>Enquiry on Results (EOR)</strong> within 6 weeks of receiving your Test Report Form. You can request a remark for one or more modules. The fee is refunded if any of your scores change. Writing and Speaking are the most commonly remarked modules, as they are subject to examiner judgement.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    23. How much does IELTS cost in 2026?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">The IELTS test fee varies by country. In 2026, typical fees range from <strong>USD 215 to USD 260</strong> for both Academic and General Training versions. In India, the fee is approximately INR 16,250–16,500. In the UK, it is around GBP 185–195. Computer-delivered and paper-based tests are generally priced the same. Check with your local test centre for the exact fee.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    24. How many times can I take IELTS?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">There is <strong>no limit</strong> on the number of times you can take the IELTS test. You can register for and take the test as many times as you wish. There is also no mandatory waiting period between tests. Many candidates retake the test after focused preparation to improve specific module scores.</div></div>
            </details>

            <details class="group border border-gray-100 rounded-xl" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl" itemprop="name">
                    25. How does our IELTS Score Calculator help with preparation planning?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">Our calculator provides three key benefits for preparation planning: <strong>(1)</strong> It instantly converts practice test raw scores into band scores, so you know exactly where you stand. <strong>(2)</strong> The visual bar chart helps you identify your strongest and weakest modules at a glance. <strong>(3)</strong> The built-in Target Band Calculator reverse-engineers the exact score improvements needed across modules to reach your desired overall band. Together, these features allow you to allocate your study time efficiently and focus on the areas that will have the greatest impact on your final result.</div></div>
            </details>

        </div>
    </div>

</section>

<script>
// ============================================================
// Score Conversion Tables (mirrored from PHP)
// ============================================================
const listeningTable = <?php echo json_encode($listeningTable); ?>;
const academicReadingTable = <?php echo json_encode($academicReadingTable); ?>;
const generalReadingTable = <?php echo json_encode($generalReadingTable); ?>;

const bandDescriptions = {
    9:'Expert User',8.5:'Very Good User',8:'Very Good User',7.5:'Good User',
    7:'Good User',6.5:'Competent User',6:'Competent User',5.5:'Modest User',
    5:'Modest User',4.5:'Limited User',4:'Limited User',3.5:'Extremely Limited User',
    3:'Extremely Limited User',2.5:'Intermittent User',2:'Intermittent User',
    1.5:'Non User',1:'Non User',0:'Did Not Attempt'
};

let readingMode = 'academic';
let scoreChart = null;

// ============================================================
// Reading Mode Toggle
// ============================================================
function setReadingMode(mode) {
    readingMode = mode;
    document.getElementById('btnAcademic').classList.toggle('active', mode === 'academic');
    document.getElementById('btnGeneral').classList.toggle('active', mode === 'general');
    if (mode === 'academic') {
        document.getElementById('btnAcademic').className = 'toggle-btn active px-4 py-2 rounded-lg text-sm font-semibold border border-blue-200';
        document.getElementById('btnGeneral').className = 'toggle-btn px-4 py-2 rounded-lg text-sm font-semibold border border-gray-200 bg-white text-gray-600';
    } else {
        document.getElementById('btnGeneral').className = 'toggle-btn active px-4 py-2 rounded-lg text-sm font-semibold border border-blue-200';
        document.getElementById('btnAcademic').className = 'toggle-btn px-4 py-2 rounded-lg text-sm font-semibold border border-gray-200 bg-white text-gray-600';
    }
    onScoreChange();
}

// ============================================================
// Conversion Functions
// ============================================================
function convertRaw(correct, table) {
    for (const row of table) {
        if (correct >= row[0] && correct <= row[1]) return row[2];
    }
    return 0;
}

function ieltsRound(avg) {
    const decimal = avg - Math.floor(avg);
    if (decimal < 0.25) return Math.floor(avg);
    if (decimal >= 0.25 && decimal < 0.75) return Math.floor(avg) + 0.5;
    return Math.ceil(avg);
}

function sliderToBand(val) {
    return parseFloat(val) / 2;
}

// ============================================================
// Main Calculation
// ============================================================
function onScoreChange() {
    const lRaw = parseInt(document.getElementById('listeningInput').value);
    const rRaw = parseInt(document.getElementById('readingInput').value);
    const wSlider = parseInt(document.getElementById('writingInput').value);
    const sSlider = parseInt(document.getElementById('speakingInput').value);

    // Convert
    const lBand = convertRaw(lRaw, listeningTable);
    const rTable = readingMode === 'academic' ? academicReadingTable : generalReadingTable;
    const rBand = convertRaw(rRaw, rTable);
    const wBand = sliderToBand(wSlider);
    const sBand = sliderToBand(sSlider);

    // Update value displays
    document.getElementById('listeningVal').textContent = lRaw;
    document.getElementById('readingVal').textContent = rRaw;
    document.getElementById('writingVal').textContent = wBand.toFixed(1);
    document.getElementById('speakingVal').textContent = sBand.toFixed(1);

    // Update badges
    document.getElementById('listeningBadge').textContent = lBand.toFixed(1);
    document.getElementById('readingBadge').textContent = rBand.toFixed(1);
    document.getElementById('writingBadge').textContent = wBand.toFixed(1);
    document.getElementById('speakingBadge').textContent = sBand.toFixed(1);

    // Check if any score entered
    const anyInput = lRaw > 0 || rRaw > 0 || wSlider > 0 || sSlider > 0;
    document.getElementById('resultsSection').style.display = anyInput ? 'block' : 'none';

    if (!anyInput) return;

    // Overall
    const rawAvg = (lBand + rBand + wBand + sBand) / 4;
    const overall = ieltsRound(rawAvg);

    // Update results
    document.getElementById('overallCircle').textContent = overall.toFixed(1);
    document.getElementById('overallDesc').textContent = bandDescriptions[overall] || '';
    document.getElementById('overallAvg').textContent = 'Raw average: ' + rawAvg.toFixed(2) + ' → Rounded: ' + overall.toFixed(1);

    document.getElementById('resListening').textContent = lBand.toFixed(1);
    document.getElementById('resReading').textContent = rBand.toFixed(1);
    document.getElementById('resWriting').textContent = wBand.toFixed(1);
    document.getElementById('resSpeaking').textContent = sBand.toFixed(1);

    // Progress bars
    document.getElementById('barListening').style.width = (lBand / 9 * 100) + '%';
    document.getElementById('barReading').style.width = (rBand / 9 * 100) + '%';
    document.getElementById('barWriting').style.width = (wBand / 9 * 100) + '%';
    document.getElementById('barSpeaking').style.width = (sBand / 9 * 100) + '%';

    // Explanation
    const strongest = Math.max(lBand, rBand, wBand, sBand);
    const weakest = Math.min(lBand, rBand, wBand, sBand);
    const modules = {Listening: lBand, Reading: rBand, Writing: wBand, Speaking: sBand};
    const strongName = Object.keys(modules).find(k => modules[k] === strongest);
    const weakName = Object.keys(modules).find(k => modules[k] === weakest);

    let explanation = `Your overall IELTS band score is <strong>${overall.toFixed(1)}</strong> (${bandDescriptions[overall] || 'N/A'}). `;
    explanation += `The raw average of your four modules is ${rawAvg.toFixed(2)}, which rounds to ${overall.toFixed(1)} under official IELTS rules. `;
    if (strongest !== weakest) {
        explanation += `Your strongest module is <strong>${strongName}</strong> at ${strongest.toFixed(1)}, `;
        explanation += `while <strong>${weakName}</strong> at ${weakest.toFixed(1)} has the most room for improvement.`;
    } else {
        explanation += `All your module scores are balanced at ${strongest.toFixed(1)}.`;
    }
    document.getElementById('explanationText').innerHTML = explanation;

    // Chart
    updateChart(lBand, rBand, wBand, sBand);

    // Print content
    document.getElementById('printContent').innerHTML = `
        <div style="text-align:center;margin-bottom:24px">
            <div style="font-size:3rem;font-weight:800;color:#2563eb">${overall.toFixed(1)}</div>
            <div style="color:#666">${bandDescriptions[overall] || ''}</div>
        </div>
        <table style="width:100%;border-collapse:collapse;margin-top:16px">
            <tr style="border-bottom:1px solid #e5e7eb"><td style="padding:8px;font-weight:600">Listening</td><td style="padding:8px;text-align:right">${lBand.toFixed(1)}</td></tr>
            <tr style="border-bottom:1px solid #e5e7eb"><td style="padding:8px;font-weight:600">Reading (${readingMode})</td><td style="padding:8px;text-align:right">${rBand.toFixed(1)}</td></tr>
            <tr style="border-bottom:1px solid #e5e7eb"><td style="padding:8px;font-weight:600">Writing</td><td style="padding:8px;text-align:right">${wBand.toFixed(1)}</td></tr>
            <tr style="border-bottom:1px solid #e5e7eb"><td style="padding:8px;font-weight:600">Speaking</td><td style="padding:8px;text-align:right">${sBand.toFixed(1)}</td></tr>
            <tr><td style="padding:8px;font-weight:800">Overall</td><td style="padding:8px;text-align:right;font-weight:800">${overall.toFixed(1)}</td></tr>
        </table>`;

    // Target calc
    calcTarget();
}

// ============================================================
// Chart
// ============================================================
function updateChart(l, r, w, s) {
    const ctx = document.getElementById('scoreChart').getContext('2d');
    const data = {
        labels: ['Listening', 'Reading', 'Writing', 'Speaking'],
        datasets: [{
            label: 'Band Score',
            data: [l, r, w, s],
            backgroundColor: ['rgba(59,130,246,.15)', 'rgba(34,197,94,.15)', 'rgba(168,85,247,.15)', 'rgba(249,115,22,.15)'],
            borderColor: ['#3b82f6', '#22c55e', '#a855f7', '#f97316'],
            borderWidth: 2,
            borderRadius: 8,
            barPercentage: 0.6
        }]
    };
    if (scoreChart) {
        scoreChart.data = data;
        scoreChart.update();
    } else {
        scoreChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: {
                    y: { min: 0, max: 9, ticks: { stepSize: 1 }, grid: { color: '#f1f5f9' } },
                    x: { grid: { display: false } }
                }
            }
        });
    }
}

// ============================================================
// Reset
// ============================================================
function resetAll() {
    document.getElementById('listeningInput').value = 0;
    document.getElementById('readingInput').value = 0;
    document.getElementById('writingInput').value = 0;
    document.getElementById('speakingInput').value = 0;
    document.getElementById('resultsSection').style.display = 'none';
    ['listeningVal','readingVal'].forEach(id => document.getElementById(id).textContent = '0');
    ['writingVal','speakingVal'].forEach(id => document.getElementById(id).textContent = '0');
    ['listeningBadge','readingBadge','writingBadge','speakingBadge'].forEach(id => document.getElementById(id).textContent = '—');
    document.getElementById('targetResult').innerHTML = '';
    if (scoreChart) { scoreChart.destroy(); scoreChart = null; }
}

// ============================================================
// Share
// ============================================================
function shareResults() {
    const l = document.getElementById('resListening').textContent;
    const r = document.getElementById('resReading').textContent;
    const w = document.getElementById('resWriting').textContent;
    const s = document.getElementById('resSpeaking').textContent;
    const o = document.getElementById('overallCircle').textContent;

    if (o === '—') return;

    const text = `My IELTS Score\n` +
        `Listening: ${l}\n` +
        `Reading: ${r}\n` +
        `Writing: ${w}\n` +
        `Speaking: ${s}\n` +
        `Overall Band: ${o}\n` +
        `\nCalculated at thiyagi.com/ielts-score-calculator`;

    if (navigator.share) {
        navigator.share({ title: 'My IELTS Score', text: text }).catch(() => {});
    } else if (navigator.clipboard) {
        navigator.clipboard.writeText(text).then(() => {
            showToast('Copied to clipboard!');
        });
    }
}

function showToast(msg) {
    const t = document.getElementById('shareToast');
    t.innerHTML = '<i class="fas fa-check-circle mr-2"></i>' + msg;
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 2500);
}

// ============================================================
// Target Band Calculator
// ============================================================
function calcTarget() {
    const targetEl = document.getElementById('targetBand');
    const target = parseFloat(targetEl.value);
    const container = document.getElementById('targetResult');

    if (!target) { container.innerHTML = ''; return; }

    const lRaw = parseInt(document.getElementById('listeningInput').value);
    const rRaw = parseInt(document.getElementById('readingInput').value);
    const wSlider = parseInt(document.getElementById('writingInput').value);
    const sSlider = parseInt(document.getElementById('speakingInput').value);

    const lBand = convertRaw(lRaw, listeningTable);
    const rTable = readingMode === 'academic' ? academicReadingTable : generalReadingTable;
    const rBand = convertRaw(rRaw, rTable);
    const wBand = sliderToBand(wSlider);
    const sBand = sliderToBand(sSlider);

    const currentSum = lBand + rBand + wBand + sBand;
    const currentOverall = ieltsRound(currentSum / 4);

    if (currentOverall >= target) {
        container.innerHTML = '<p class="text-green-600 font-semibold mt-2"><i class="fas fa-check-circle mr-1"></i> You already meet or exceed your target band of ' + target.toFixed(1) + '!</p>';
        return;
    }

    // Calculate minimum total needed to achieve target
    // Target X.0 needs sum >= X*4 - 0.99 (after rounding)
    // We find the minimum sum where ieltsRound(sum/4) >= target
    let minSum = target * 4;
    // Adjust: find actual minimum
    for (let s = target * 4 - 2; s <= target * 4 + 2; s += 0.5) {
        if (ieltsRound(s / 4) >= target) { minSum = s; break; }
    }

    const deficit = minSum - currentSum;

    if (deficit <= 0) {
        container.innerHTML = '<p class="text-green-600 font-semibold mt-2"><i class="fas fa-check-circle mr-1"></i> You already meet your target!</p>';
        return;
    }

    // Suggest improvements
    const modules = [
        { name: 'Listening', band: lBand, max: 9 },
        { name: 'Reading', band: rBand, max: 9 },
        { name: 'Writing', band: wBand, max: 9 },
        { name: 'Speaking', band: sBand, max: 9 }
    ];

    // Sort by lowest score first (most room for improvement)
    modules.sort((a, b) => a.band - b.band);

    let remaining = deficit;
    const suggestions = [];
    for (const m of modules) {
        if (remaining <= 0) break;
        const room = m.max - m.band;
        const increase = Math.min(room, remaining);
        if (increase > 0) {
            suggestions.push(`<strong>${m.name}</strong>: ${m.band.toFixed(1)} → ${(m.band + increase).toFixed(1)} (+${increase.toFixed(1)})`);
            remaining -= increase;
        }
    }

    let html = `<div class="mt-3 p-3 bg-indigo-50 rounded-lg">`;
    html += `<p class="font-semibold text-indigo-800 mb-2">To reach band ${target.toFixed(1)}, you need +${deficit.toFixed(1)} total points. Suggested improvements:</p>`;
    html += `<ul class="space-y-1 text-indigo-700">`;
    for (const s of suggestions) html += `<li><i class="fas fa-arrow-up text-xs mr-1"></i>${s}</li>`;
    html += `</ul></div>`;

    container.innerHTML = html;
}
</script>

<?php include 'footer.php';?>
