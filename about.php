<?php
$pageTitle = 'About Thiyagi Tools 2026 - 20+ Years of Digital Excellence | Professional Online Tools';
$pageDescription = 'Learn about Thiyagi Tools - your trusted source for professional online calculators, converters, and digital tools. Built with 25+ years of expertise to serve millions of users worldwide in 2026.';
$pageKeywords = 'About Thiyagi Tools, online calculators, digital tools, web utilities, professional tools 2026, 25 years experience';
include 'header.php';
?>

    <style>
        :root {
            --primary: #6e8efb;
            --secondary: #a777e3;
        }
        body {
            /* background-color: #f8f9fa; - handled by bg-gray-100 */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-section {
            /* Converted using Tailwind bg-gradient-to-br, from-[var(--primary)], to-[var(--secondary)] */
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 80px 0; /* py-20 */
            margin-bottom: 50px; /* mb-12 */
        }
        .feature-icon {
            font-size: 2.5rem; /* text-4xl */
            color: var(--primary); /* text-[var(--primary)] or via style */
            margin-bottom: 20px; /* mb-5 */
        }
        /* Card styles partially converted to Tailwind */
        .custom-card {
            /* border: none; - Tailwind default */
            border-radius: 10px; /* rounded-lg */
            box-shadow: 0 5px 15px rgba(0,0,0,0.05); /* shadow-md */
            transition: transform 0.3s; /* transition duration handled by Tailwind */
        }
        .custom-card:hover {
            transform: translateY(-10px); /* hover:-translate-y-2.5 */
        }
        /* Stats styling */
        .stat-item {
            margin-bottom: 0.5rem; /* mb-2 */
        }
    </style>

<body class="bg-gray-100">
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About Thiyagi Tools 2026 - 25+ Years of Excellence</h1>
            <p class="text-xl md:text-2xl">Empowering creators and developers with professional online tools - Built with 25+ years of digital expertise since 1999</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6"> <!-- row g-4 -> gap-6 -->
            <div>
                <div class="custom-card h-full p-6 bg-white"> <!-- card h-100 p-4 -> h-full p-6 bg-white -->
                    <h2><i class="fas fa-bullseye feature-icon"></i> Our Mission</h2>
                    <p>We believe everyone should have access to powerful digital tools without barriers. Our platform offers 150+ free utilities that help:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Content creators optimize their YouTube presence</li>
                        <li>Developers streamline their workflow</li>
                        <li>Business owners make data-driven financial decisions</li>
                        <li>Students and educators with text processing needs</li>
                    </ul>
                </div>
            </div>

            <div>
                <div class="custom-card h-full p-6 bg-white"> <!-- card h-100 p-4 -> h-full p-6 bg-white -->
                    <h2><i class="fas fa-chart-line feature-icon"></i> Our Growth</h2>
                    <div class="stats mb-4"> <!-- mb-3 -> mb-4 -->
                        <div class="stat-item">
                            <span class="font-bold">150+</span> Tools and counting
                        </div>
                        <div class="stat-item">
                            <span class="font-bold">500,000+</span> Monthly users
                        </div>
                        <div class="stat-item">
                            <span class="font-bold">99.9%</span> Uptime reliability
                        </div>
                    </div>
                    <p>What started as a small collection of YouTube utilities has grown into one of the most comprehensive free toolkits on the web, serving users in 180+ countries.</p>
                </div>
            </div>

            <div class="md:col-span-2"> <!-- col-12 -> md:col-span-2 -->
                <div class="custom-card p-6 bg-white"> <!-- card p-4 -> p-6 bg-white -->
                    <h2><i class="fas fa-users feature-icon"></i> Our Team</h2>
                    <p>We're a distributed team of developers, designers, and content specialists passionate about creating tools that solve real problems. Unlike many SaaS companies, we:</p>

                    <div class="grid grid-cols-1 md:grid-cols-3 text-center mt-6"> <!-- row text-center mt-4 -> grid grid-cols-1 md:grid-cols-3 text-center mt-6 -->
                        <div class="mb-6 md:mb-0"> <!-- mb-4 -> mb-6 md:mb-0 -->
                            <div class="p-4">
                                <i class="fas fa-lock text-2xl mb-4 text-blue-500"></i> <!-- fa-2x mb-3 text-primary -> text-2xl mb-4 text-blue-500 -->
                                <h4 class="text-xl font-semibold mb-2">No Tracking</h4> <!-- h4 -> text-xl font-semibold mb-2 -->
                                <p>We don't sell your data or bombard you with ads</p>
                            </div>
                        </div>
                        <div class="mb-6 md:mb-0">
                            <div class="p-4">
                                <i class="fas fa-heart text-2xl mb-4 text-red-500"></i> <!-- fa-2x mb-3 text-danger -> text-2xl mb-4 text-red-500 -->
                                <h4 class="text-xl font-semibold mb-2">Community Driven</h4>
                                <p>80% of our tools were suggested by users like you</p>
                            </div>
                        </div>
                        <div>
                            <div class="p-4">
                                <i class="fas fa-code-branch text-2xl mb-4 text-green-500"></i> <!-- fa-2x mb-3 text-success -> text-2xl mb-4 text-green-500 -->
                                <h4 class="text-xl font-semibold mb-2">Open Development</h4>
                                <p>Many tools are open source on GitHub</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <section class="py-12 bg-gray-200"> <!-- bg-light py-5 -> py-12 bg-gray-200 -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Have suggestions for new tools?</h2> <!-- mb-4 -> mb-6 -->
            <!-- Gradient Button - Tailwind doesn't easily do arbitrary gradients like Bootstrap btn-primary -->
            <a href="contact.php" class="inline-block px-6 py-3 text-lg font-semibold text-white rounded-full shadow-md transition duration-300 ease-in-out transform hover:scale-105" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">
                 Contact Our Team
            </a>
            <!-- Or using Tailwind's arbitrary value syntax (if supported by your setup) -->
            <!-- <a href="contact.php" class="inline-block px-6 py-3 text-lg font-semibold text-white rounded-full shadow-md bg-[linear-gradient(135deg,var(--primary),var(--secondary))] hover:opacity-90">Contact Our Team</a> -->
        </div>
    </section>

    <!-- Scripts (Bootstrap JS removed) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</body>
<?php include 'footer.php';?>
</html>
