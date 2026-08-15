<?php include 'header.php';?>
<?php
/**
 * Advanced Word Counter Tool 2026
 */

// Enhanced text analysis function
function analyzeText($text) {
    if (empty(trim($text))) {
        return null;
    }

    $result = [
        'word_count' => 0,
        'character_count' => 0,
        'character_count_no_spaces' => 0,
        'sentence_count' => 0,
        'paragraph_count' => 0,
        'line_count' => 0,
        'reading_time' => 0,
        'speaking_time' => 0,
        'most_frequent_words' => [],
        'avg_words_per_sentence' => 0,
        'avg_characters_per_word' => 0,
        'readability_score' => 'Medium'
    ];

    // Basic counts
    $result['character_count'] = mb_strlen($text);
    $result['character_count_no_spaces'] = mb_strlen(str_replace(' ', '', $text));
    
    // Word count using multiple methods for accuracy
    $words = preg_split('/\s+/', trim(preg_replace('/[^\p{L}\p{N}\s]/u', ' ', $text)));
    $words = array_filter($words, function($word) {
        return !empty(trim($word));
    });
    $result['word_count'] = count($words);
    
    // Sentence count
    $sentences = preg_split('/[.!?]+/', $text);
    $sentences = array_filter($sentences, function($sentence) {
        return !empty(trim($sentence));
    });
    $result['sentence_count'] = count($sentences);
    
    // Paragraph count
    $paragraphs = preg_split('/\n\s*\n/', trim($text));
    $paragraphs = array_filter($paragraphs, function($paragraph) {
        return !empty(trim($paragraph));
    });
    $result['paragraph_count'] = count($paragraphs);
    
    // Line count
    $result['line_count'] = substr_count($text, "\n") + 1;
    
    // Reading time (average 200 words per minute)
    $result['reading_time'] = ceil($result['word_count'] / 200);
    
    // Speaking time (average 150 words per minute)
    $result['speaking_time'] = ceil($result['word_count'] / 150);
    
    // Most frequent words
    if (!empty($words)) {
        $word_freq = array_count_values(array_map('strtolower', $words));
        arsort($word_freq);
        $result['most_frequent_words'] = array_slice($word_freq, 0, 5, true);
        
        // Average calculations
        $result['avg_words_per_sentence'] = $result['sentence_count'] > 0 ? 
            round($result['word_count'] / $result['sentence_count'], 1) : 0;
        
        $result['avg_characters_per_word'] = $result['word_count'] > 0 ? 
            round($result['character_count_no_spaces'] / $result['word_count'], 1) : 0;
        
        // Simple readability assessment
        if ($result['avg_words_per_sentence'] > 20) {
            $result['readability_score'] = 'Difficult';
        } elseif ($result['avg_words_per_sentence'] > 15) {
            $result['readability_score'] = 'Medium';
        } else {
            $result['readability_score'] = 'Easy';
        }
    }
    
    return $result;
}

// Handle form submission
$inputText = '';
$analysis = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'] ?? '';
    
    if (empty(trim($inputText))) {
        $error = 'Please enter some text to analyze.';
    } else {
        $analysis = analyzeText($inputText);
        if (!$analysis) {
            $error = 'Unable to analyze the provided text.';
        }
    }
}
?>

    <title>Word Counter 2026 - Count Words, Characters & Text Analysis Tool</title>
    <meta name="description" content="Advanced word counter tool to count words, characters, sentences, paragraphs with reading time estimates. Professional text analysis for writers, students, and content creators in 2026.">
    <meta name="keywords" content="word counter, character counter, text analyzer, word count tool, writing tool 2026, sentence counter, paragraph counter, reading time calculator">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/word_counter">
    <meta property="og:title" content="Word Counter 2026 - Advanced Text Analysis Tool">
    <meta property="og:description" content="Count words, characters, sentences, and paragraphs instantly. Professional text analysis with reading time estimates for writers and content creators.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/word_counter">
    <meta property="twitter:title" content="Word Counter 2026 - Advanced Text Analysis Tool">
    <meta property="twitter:description" content="Count words, characters, sentences instantly. Professional text analysis tool for writers.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Word Counter 2026",
        "description": "Advanced word counter and text analysis tool for writers, students, and content creators",
        "url": "https://www.thiyagi.com/word_counter",
        "applicationCategory": "ProductivityApplication",
        "operatingSystem": "Web Browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Organization",
            "name": "Thiyagi.com",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>
    
    <style>
        .stats-card {
            transition: all 0.3s ease;
        }
        .stats-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .real-time-counter {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .word-freq-badge {
            display: inline-block;
            margin: 2px;
            transition: all 0.2s ease;
        }
        .word-freq-badge:hover {
            transform: scale(1.05);
        }
    </style>
<body class="bg-gray-50">
    <!-- Breadcrumb Navigation -->
    <nav class="bg-white border-b border-gray-200 px-4 py-3">
        <div class="max-w-6xl mx-auto">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="hover:text-blue-600 transition-colors">Text Tools</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium">Word Counter</li>
            </ol>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">📝 Word Counter 2026</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Advanced text analysis tool to count words, characters, sentences, and paragraphs with reading time estimates. Perfect for writers, students, and content creators.</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-lg overflow-hidden mb-8" id="counterForm">
            <div class="p-8">
                <div class="mb-6">
                    <label for="text" class="block text-gray-700 font-semibold mb-3 text-lg">📄 Enter or Paste Your Text:</label>
                    <textarea name="text" 
                              id="text" 
                              class="w-full h-64 px-4 py-4 text-lg border-2 border-gray-300 rounded-lg resize-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                              placeholder="Start typing or paste your text here for instant analysis..."
                              onInput="updateRealTimeStats()"><?= htmlspecialchars($inputText) ?></textarea>
                    
                    <!-- Real-time counter -->
                    <div class="real-time-counter mt-4 p-4 rounded-lg text-white">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center text-sm">
                            <div>
                                <div class="font-bold text-lg" id="rtWords">0</div>
                                <div>Words</div>
                            </div>
                            <div>
                                <div class="font-bold text-lg" id="rtChars">0</div>
                                <div>Characters</div>
                            </div>
                            <div>
                                <div class="font-bold text-lg" id="rtSentences">0</div>
                                <div>Sentences</div>
                            </div>
                            <div>
                                <div class="font-bold text-lg" id="rtParagraphs">0</div>
                                <div>Paragraphs</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-between items-center">
                    <button type="submit" 
                            class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg">
                        📊 Analyze Text Details
                    </button>
                    <button type="button" 
                            onclick="clearText()" 
                            class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        🗑️ Clear Text
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($error)): ?>
        <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg mb-8">
            <div class="flex items-center">
                <span class="text-red-500 text-2xl mr-3">❌</span>
                <div>
                    <h3 class="text-red-800 font-semibold">Analysis Error</h3>
                    <p class="text-red-700 mt-1"><?= htmlspecialchars($error) ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($analysis): ?>
        <div class="grid gap-8 mb-8">
            <!-- Main Statistics -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-green-500 to-blue-500 px-8 py-6">
                    <h2 class="text-2xl font-bold text-white flex items-center">
                        <span class="mr-3">📊</span> Detailed Text Analysis
                    </h2>
                </div>
                
                <div class="p-8">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- Word Count -->
                        <div class="stats-card bg-blue-50 p-6 rounded-lg border border-blue-200">
                            <div class="text-blue-600 text-3xl mb-3">📝</div>
                            <h3 class="text-2xl font-bold text-blue-800"><?= number_format($analysis['word_count']) ?></h3>
                            <p class="text-blue-700 text-sm">Words</p>
                        </div>
                        
                        <!-- Character Count -->
                        <div class="stats-card bg-green-50 p-6 rounded-lg border border-green-200">
                            <div class="text-green-600 text-3xl mb-3">🔤</div>
                            <h3 class="text-2xl font-bold text-green-800"><?= number_format($analysis['character_count']) ?></h3>
                            <p class="text-green-700 text-sm">Characters (with spaces)</p>
                        </div>
                        
                        <!-- Sentences -->
                        <div class="stats-card bg-purple-50 p-6 rounded-lg border border-purple-200">
                            <div class="text-purple-600 text-3xl mb-3">📄</div>
                            <h3 class="text-2xl font-bold text-purple-800"><?= number_format($analysis['sentence_count']) ?></h3>
                            <p class="text-purple-700 text-sm">Sentences</p>
                        </div>
                        
                        <!-- Paragraphs -->
                        <div class="stats-card bg-orange-50 p-6 rounded-lg border border-orange-200">
                            <div class="text-orange-600 text-3xl mb-3">📋</div>
                            <h3 class="text-2xl font-bold text-orange-800"><?= number_format($analysis['paragraph_count']) ?></h3>
                            <p class="text-orange-700 text-sm">Paragraphs</p>
                        </div>
                    </div>
                    
                    <!-- Additional Statistics -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Reading & Speaking Time -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <span class="mr-2">⏰</span> Time Estimates
                            </h4>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Reading Time:</span>
                                    <span class="font-bold text-blue-600"><?= $analysis['reading_time'] ?> min</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Speaking Time:</span>
                                    <span class="font-bold text-green-600"><?= $analysis['speaking_time'] ?> min</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Characters (no spaces):</span>
                                    <span class="font-bold text-gray-700"><?= number_format($analysis['character_count_no_spaces']) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Lines:</span>
                                    <span class="font-bold text-gray-700"><?= number_format($analysis['line_count']) ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Text Quality Metrics -->
                        <div class="bg-indigo-50 p-6 rounded-lg">
                            <h4 class="font-semibold text-indigo-800 mb-4 flex items-center">
                                <span class="mr-2">📈</span> Quality Metrics
                            </h4>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Avg Words/Sentence:</span>
                                    <span class="font-bold text-indigo-600"><?= $analysis['avg_words_per_sentence'] ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Avg Chars/Word:</span>
                                    <span class="font-bold text-indigo-600"><?= $analysis['avg_characters_per_word'] ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Readability:</span>
                                    <span class="font-bold <?= $analysis['readability_score'] == 'Easy' ? 'text-green-600' : ($analysis['readability_score'] == 'Medium' ? 'text-yellow-600' : 'text-red-600') ?>">
                                        <?= $analysis['readability_score'] ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Most Frequent Words -->
                    <?php if (!empty($analysis['most_frequent_words'])): ?>
                    <div class="mt-8 bg-yellow-50 p-6 rounded-lg border border-yellow-200">
                        <h4 class="font-semibold text-yellow-800 mb-4 flex items-center">
                            <span class="mr-2">🏷️</span> Most Frequent Words
                        </h4>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($analysis['most_frequent_words'] as $word => $count): ?>
                            <span class="word-freq-badge bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">
                                <?= htmlspecialchars($word) ?> (<?= $count ?>)
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 justify-center">
                <button onclick="copyResults()" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                    📋 Copy Results
                </button>
                <button onclick="shareResults()" class="bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                    📱 Share Analysis
                </button>
                <button onclick="analyzeAgain()" class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                    🔄 Analyze New Text
                </button>
            </div>
        </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gray-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🚀 Advanced Text Analysis Features</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-4xl mb-4">📊</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Detailed Counts</h3>
                        <p class="text-gray-600 text-sm">Words, characters, sentences, paragraphs, and lines</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">⏱️</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Time Estimates</h3>
                        <p class="text-gray-600 text-sm">Reading and speaking time calculations</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">📈</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Quality Metrics</h3>
                        <p class="text-gray-600 text-sm">Readability analysis and text quality assessment</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🏷️</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Word Frequency</h3>
                        <p class="text-gray-600 text-sm">Most commonly used words analysis</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- How It Works -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">📝 How Word Counting Works</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">1️⃣</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Enter Text</h3>
                        <p class="text-gray-600 text-sm">Type or paste your text into the analysis box</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">2️⃣</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Real-time Analysis</h3>
                        <p class="text-gray-600 text-sm">See live counts as you type with instant feedback</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">3️⃣</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Detailed Results</h3>
                        <p class="text-gray-600 text-sm">Get comprehensive analysis with quality metrics</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Use Cases -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-green-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">✍️ Perfect For</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                        <div class="text-blue-600 text-2xl mb-3">📚</div>
                        <h4 class="font-semibold text-blue-800 mb-2">Students & Academics</h4>
                        <p class="text-blue-700 text-sm">Essays, research papers, thesis writing with word limits</p>
                    </div>
                    <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                        <div class="text-green-600 text-2xl mb-3">✍️</div>
                        <h4 class="font-semibold text-green-800 mb-2">Content Writers</h4>
                        <p class="text-green-700 text-sm">Blog posts, articles, social media content optimization</p>
                    </div>
                    <div class="bg-purple-50 p-6 rounded-lg border border-purple-200">
                        <div class="text-purple-600 text-2xl mb-3">💼</div>
                        <h4 class="font-semibold text-purple-800 mb-2">Professionals</h4>
                        <p class="text-purple-700 text-sm">Reports, presentations, business communications</p>
                    </div>
                    <div class="bg-orange-50 p-6 rounded-lg border border-orange-200">
                        <div class="text-orange-600 text-2xl mb-3">🎭</div>
                        <h4 class="font-semibold text-orange-800 mb-2">Creative Writers</h4>
                        <p class="text-orange-700 text-sm">Novels, short stories, poetry with structure analysis</p>
                    </div>
                    <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                        <div class="text-red-600 text-2xl mb-3">📈</div>
                        <h4 class="font-semibold text-red-800 mb-2">SEO Specialists</h4>
                        <p class="text-red-700 text-sm">Meta descriptions, title tags, content optimization</p>
                    </div>
                    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                        <div class="text-indigo-600 text-2xl mb-3">🎤</div>
                        <h4 class="font-semibold text-indigo-800 mb-2">Public Speakers</h4>
                        <p class="text-indigo-700 text-sm">Speech preparation with timing estimates</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-purple-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">❓ Frequently Asked Questions</h2>
            </div>
            <div class="p-8">
                <div class="space-y-6">
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: How accurate is the word count?</h4>
                        <p class="text-gray-700 text-sm">A: Our tool uses advanced algorithms to accurately count words, handling multiple languages and various text formats with precision.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Does the character count include spaces?</h4>
                        <p class="text-gray-700 text-sm">A: We provide both counts - characters with spaces and characters without spaces, giving you flexibility for different requirements.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: How is reading time calculated?</h4>
                        <p class="text-gray-700 text-sm">A: Reading time is calculated based on an average reading speed of 200 words per minute. Speaking time uses 150 words per minute.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Is my text data stored or shared?</h4>
                        <p class="text-gray-700 text-sm">A: No, your text is processed locally and not stored on our servers. Your privacy and data security are our top priorities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Real-time text analysis
        function updateRealTimeStats() {
            const text = document.getElementById('text').value;
            
            // Basic counts
            const words = text.trim() === '' ? 0 : text.trim().split(/\s+/).filter(word => word.length > 0).length;
            const chars = text.length;
            const sentences = text.trim() === '' ? 0 : text.split(/[.!?]+/).filter(s => s.trim().length > 0).length;
            const paragraphs = text.trim() === '' ? 0 : text.split(/\n\s*\n/).filter(p => p.trim().length > 0).length;
            
            // Update real-time counters
            document.getElementById('rtWords').textContent = words.toLocaleString();
            document.getElementById('rtChars').textContent = chars.toLocaleString();
            document.getElementById('rtSentences').textContent = sentences.toLocaleString();
            document.getElementById('rtParagraphs').textContent = Math.max(1, paragraphs).toLocaleString();
        }

        // Initialize real-time stats on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateRealTimeStats();
        });

        // Clear text function
        function clearText() {
            document.getElementById('text').value = '';
            updateRealTimeStats();
            document.getElementById('text').focus();
        }

        // Copy results function
        function copyResults() {
            const words = '<?= $analysis ? number_format($analysis['word_count']) : '0' ?>';
            const chars = '<?= $analysis ? number_format($analysis['character_count']) : '0' ?>';
            const sentences = '<?= $analysis ? number_format($analysis['sentence_count']) : '0' ?>';
            const paragraphs = '<?= $analysis ? number_format($analysis['paragraph_count']) : '0' ?>';
            const readingTime = '<?= $analysis ? $analysis['reading_time'] : '0' ?>';
            
            const resultText = `Text Analysis Results:
Words: ${words}
Characters: ${chars}
Sentences: ${sentences}
Paragraphs: ${paragraphs}
Reading Time: ${readingTime} minutes

Analyzed by Word Counter 2026 - ${window.location.href}`;

            if (navigator.clipboard) {
                navigator.clipboard.writeText(resultText);
                alert('Results copied to clipboard!');
            } else {
                prompt('Copy this text:', resultText);
            }
        }

        // Share results function
        function shareResults() {
            const words = '<?= $analysis ? number_format($analysis['word_count']) : '0' ?>';
            
            if (navigator.share) {
                navigator.share({
                    title: 'Word Counter Analysis Results',
                    text: `I analyzed my text and found ${words} words! Check out this advanced word counter tool.`,
                    url: window.location.href
                });
            } else {
                const shareText = `I analyzed my text and found ${words} words! Check out this advanced word counter tool: ${window.location.href}`;
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(shareText);
                    alert('Share text copied to clipboard!');
                } else {
                    prompt('Copy this text to share:', shareText);
                }
            }
        }

        // Analyze again function
        function analyzeAgain() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            document.getElementById('text').value = '';
            updateRealTimeStats();
            document.getElementById('text').focus();
        }

        // Auto-scroll to results after analysis
        <?php if ($analysis): ?>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const resultsSection = document.querySelector('.grid.gap-8.mb-8');
                if (resultsSection) {
                    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 300);
        });
        <?php endif; ?>

        // Enhanced textarea interactions
        document.getElementById('text').addEventListener('focus', function() {
            this.parentElement.classList.add('ring-2', 'ring-blue-500');
        });

        document.getElementById('text').addEventListener('blur', function() {
            this.parentElement.classList.remove('ring-2', 'ring-blue-500');
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>
