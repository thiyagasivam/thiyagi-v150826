<?php include 'header.php';?>


<title>YouTube Description Generator 2026 - Create Engaging Descriptions | 25+ Years Experience</title>
<meta name="description" content="Generate compelling YouTube video descriptions that boost engagement and SEO. Professional description creator for content creators. Built with 25+ years of digital marketing expertise for 2026 optimization.">
<meta name="keywords" content="YouTube description generator, video description creator, YouTube SEO descriptions, description templates 2026">

<div class="min-h-screen bg-gradient-to-br from-red-50 to-pink-100 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-4xl mx-auto">
    <h1 class="text-4xl font-bold text-center text-gray-900 mb-8">YouTube Description Generator 2026</h1>
    <p class="text-xl text-gray-600 text-center mb-12">Create engaging video descriptions that drive results - Professional tool with 25+ years of experience</p>?php include 'header.php'; ?>


<?php
// Function to generate a YouTube description
function generateDescription($title, $keywords, $cta, $links) {
    $description = "**$title**\n\n"; // Add the title
    $description .= "In this video, we cover $keywords. "; // Add keywords
    $description .= "$cta\n\n"; // Add call-to-action
    $description .= "🔗 Useful Links:\n$links"; // Add links
    return $description;
}

// Handle form submission
$description = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $keywords = $_POST['keywords'];
    $cta = $_POST['cta'];
    $links = $_POST['links'];

    if (!empty($title) && !empty($keywords) && !empty($cta)) {
        $description = generateDescription($title, $keywords, $cta, $links);
    } else {
        $error = 'Please fill in all required fields.';
    }
}
?>

    <title>YouTube Description Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">YouTube Description Generator</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Video Title:</label>
                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., How to Use YouTube Description Generator" required>
            </div>
            <div class="mb-4">
                <label for="keywords" class="block text-gray-700 font-bold mb-2">Keywords:</label>
                <input type="text" name="keywords" id="keywords" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., YouTube, Description, Generator" required>
            </div>
            <div class="mb-4">
                <label for="cta" class="block text-gray-700 font-bold mb-2">Call to Action (CTA):</label>
                <input type="text" name="cta" id="cta" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., Don't forget to like, comment, and subscribe!" required>
            </div>
            <div class="mb-4">
                <label for="links" class="block text-gray-700 font-bold mb-2">Useful Links (Optional):</label>
                <textarea name="links" id="links" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., https://example.com"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Generate Description</button>
        </form>
        <?php if (!empty($description)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Generated Description:</h2>
                <pre class="text-gray-700 text-xl mt-2 whitespace-pre-wrap"><?php echo htmlspecialchars($description); ?></pre>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-6 bg-red-100 p-6 rounded-lg shadow-md">
                <p class="text-red-700 text-xl"><?php echo htmlspecialchars($error); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

<?php include 'footer.php'; ?>


</html>
