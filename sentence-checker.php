<?php include 'header.php';?>


<?php
// Function to analyze sentences
function analyzeSentence($text) {
    $results = [
        'characters' => mb_strlen($text),
        'words' => str_word_count($text),
        'sentences' => preg_match_all('/[^\s]([.!?])(?!\w)/', $text, $matches),
        'paragraphs' => substr_count($text, "\n") + 1,
        'reading_time' => ceil(str_word_count($text) / 200) // 200 wpm average
    ];

    // Grammar check simulation (in a real app, use API like LanguageTool)
    $grammarIssues = [];
    if (preg_match('/\b(their|there|they\'re)\b/i', $text, $matches)) {
        $grammarIssues[] = "Potential homophone issue: " . $matches[0];
    }
    if (!preg_match('/[.!?]$/', trim($text))) {
        $grammarIssues[] = "Sentence may be incomplete or missing punctuation";
    }

    $results['grammar_issues'] = $grammarIssues;
    return $results;
}

// Handle form submission
$results = null;
$inputText = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'] ?? '';
    if (!empty($inputText)) {
        $results = analyzeSentence($inputText);
    }
}
?>
    <title>Free Sentence  Checker (2026) - Grammar, Spelling & Punctuation Corrector</title>
<meta name="description" content="Instantly check and improve your sentences for grammar errors, spelling mistakes, and punctuation. Enhance your writing for emails, essays, and content with AI-powered suggestions.">
    <style>
        :root {
            --primary-color: #4a6ee0;
            /* --secondary-color: #f8f9fa; - bg-gray-100 */
            --accent-color: #ff6b6b;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* background-color: #f5f7ff; - bg-blue-50 or custom */
            background-color: #f5f7ff;
            color: #333; /* text-gray-800 */
            line-height: 1.6; /* leading-relaxed or leading-loose */
        }

        .tool-container {
            max-width: 900px;
            margin: 2rem auto; /* mx-auto mt-8 mb-8 */
            background: white; /* bg-white */
            border-radius: 10px; /* rounded-xl */
            box-shadow: 0 5px 15px rgba(0,0,0,0.1); /* shadow-xl */
            overflow: hidden; /* Already applied */
        }

        .tool-header {
            background: var(--primary-color); /* bg-[var(--primary-color)] */
            color: white; /* text-white */
            padding: 1.5rem; /* p-6 */
            text-align: center; /* text-center */
        }

        .tool-header h1 {
            font-size: 2rem; /* text-3xl */
            margin-bottom: 0.5rem; /* mb-2 */
        }

        .tool-body {
            padding: 2rem; /* p-8 */
        }

        textarea {
            min-height: 200px; /* min-h-48 */
            resize: vertical; /* resize-y */
        }

        .result-card {
            border-left: 4px solid var(--primary-color); /* border-l-4 border-[var(--primary-color)] */
            transition: all 0.3s ease; /* transition duration-300 ease-in-out */
        }

        .result-card:hover {
            transform: translateY(-3px); /* hover:-translate-y-1 */
            box-shadow: 0 5px 15px rgba(0,0,0,0.1); /* hover:shadow-xl */
        }

        .stat-number {
            font-size: 2rem; /* text-3xl */
            font-weight: bold; /* font-bold */
            color: var(--primary-color); /* text-[var(--primary-color)] */
        }

        .grammar-issue {
            color: var(--accent-color); /* text-[var(--accent-color)] */
            position: relative; /* relative */
            padding-left: 1.5rem; /* pl-6 */
        }

        .grammar-issue:before {
            content: "⚠";
            position: absolute; /* absolute */
            left: 0; /* left-0 */
        }

        @media (max-width: 768px) {
            .tool-header h1 {
                font-size: 1.5rem; /* text-2xl */
            }

            .stat-number {
                font-size: 1.5rem; /* text-2xl */
            }
        }
    </style>

    <div class="tool-container">
        <div class="tool-header">
            <h1 class="text-3xl font-semibold mb-2">Sentence Checker</h1> <!-- h1 -> text-3xl font-semibold mb-2 -->
            <p class="mb-0">Analyze and improve your sentences for better readability</p> <!-- mb-0 -->
        </div>

        <div class="tool-body">
            <form method="POST">
                <div class="mb-4"> <!-- mb-3 -> mb-4 -->
                    <label for="text" class="block mb-2 font-medium">Enter your text to analyze:</label> <!-- form-label -> block mb-2 font-medium -->
                    <textarea class="w-full min-h-48 px-4 py-2 border border-gray-300 rounded resize-y focus:outline-none focus:ring-2 focus:ring-blue-500" id="text" name="text" rows="8" required><?= htmlspecialchars($inputText) ?></textarea> <!-- form-control -> w-full min-h-48 px-4 py-2 border border-gray-300 rounded resize-y focus:outline-none focus:ring-2 focus:ring-blue-500 -->
                </div>
                <button type="submit" class="w-full bg-[var(--primary-color)] hover:opacity-90 text-white font-medium py-3 px-4 rounded text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">Analyze Sentence</button> <!-- btn btn-primary btn-lg w-100 -> w-full bg-[var(--primary-color)] text-white font-medium py-3 px-4 rounded text-lg ... -->
            </form>

            <?php if ($results): ?>
                <div class="mt-12"> <!-- mt-5 -> mt-12 -->
                    <h2 class="text-2xl font-semibold mb-6">Analysis Results</h2> <!-- mb-4 -> mb-6 -->

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6"> <!-- row g-4 -> grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 -->
                        <div>
                            <div class="result-card h-full bg-white rounded-lg shadow p-6"> <!-- col-md-3 -> ... | card result-card h-100 -> result-card h-full bg-white rounded-lg shadow p-6 -->
                                <div class="text-center"> <!-- card-body text-center -> text-center -->
                                    <div class="stat-number text-3xl font-bold"><?= $results['characters'] ?></div> <!-- stat-number -> stat-number text-3xl font-bold | card-text -> removed, implicit -->
                                    <div>Characters</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="result-card h-full bg-white rounded-lg shadow p-6">
                                <div class="text-center">
                                    <div class="stat-number text-3xl font-bold"><?= $results['words'] ?></div>
                                    <div>Words</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="result-card h-full bg-white rounded-lg shadow p-6">
                                <div class="text-center">
                                    <div class="stat-number text-3xl font-bold"><?= $results['sentences'] ?></div>
                                    <div>Sentences</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="result-card h-full bg-white rounded-lg shadow p-6">
                                <div class="text-center">
                                    <div class="stat-number text-3xl font-bold"><?= $results['reading_time'] ?></div>
                                    <div>Min. Reading Time</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if (!empty($results['grammar_issues'])): ?>
                        <div class="mt-6 border border-yellow-500 rounded-lg"> <!-- mt-4 card border-warning -> mt-6 border border-yellow-500 rounded-lg -->
                            <div class="bg-yellow-500 text-white px-4 py-2 rounded-t-lg"> <!-- card-header bg-warning text-white -> bg-yellow-500 text-white px-4 py-2 rounded-t-lg -->
                                Potential Grammar Issues
                            </div>
                            <div class="p-4 bg-white rounded-b-lg"> <!-- card-body -> p-4 bg-white rounded-b-lg -->
                                <ul class="mb-0 space-y-2"> <!-- mb-0 -> mb-0 space-y-2 -->
                                    <?php foreach ($results['grammar_issues'] as $issue): ?>
                                        <li class="grammar-issue pl-6 relative"><?= htmlspecialchars($issue) ?></li> <!-- grammar-issue -> grammar-issue pl-6 relative -->
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded"> <!-- mt-4 alert alert-success -> mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded -->
                            No obvious grammar issues found. Great job!
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Scripts (Bootstrap JS removed) -->
</body>

<?php include 'footer.php';?>


</html>
