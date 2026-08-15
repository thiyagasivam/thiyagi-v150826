<?php
// Set the HTTP response code to 404 BEFORE any output
header("HTTP/1.0 404 Not Found");
include 'header.php';
?>
<title>Page Not Found | Thiyagi Tool</title>
<meta name="description" content="The page you're looking for could not be found. Browse our collection of calculators, converters, and tools, or return to the homepage.">
<meta name="robots" content="noindex, follow">
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
            min-height: 100vh;
            overflow-x: hidden;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .funny-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        .error-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 50px;
            text-align: center;
            max-width: 800px;
            position: relative;
            overflow: hidden;
        }

        .error-number {
            font-size: 120px;
            font-weight: 900;
            color: #ff6b6b;
            text-shadow: 5px 5px 0px #ffeb3b;
            margin: 0;
            animation: wiggle 1s ease-in-out infinite;
            cursor: pointer;
        }

        .error-number:hover {
            animation: spin 0.5s ease-in-out;
        }

        @keyframes wiggle {
            0%, 7%, 14%, 21%, 28%, 35%, 42%, 49%, 56%, 63%, 70%, 77%, 84%, 91%, 98%, 100% {
                transform: translate3d(0, 0, 0);
            }
            4%, 18%, 32%, 46%, 60%, 74%, 88% {
                transform: translate3d(-1px, 0, 0);
            }
            11%, 25%, 39%, 53%, 67%, 81%, 95% {
                transform: translate3d(1px, 0, 0);
            }
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .funny-title {
            font-size: 32px;
            color: #2c3e50;
            margin: 20px 0;
            font-weight: bold;
        }

        .funny-message {
            font-size: 18px;
            color: #7f8c8d;
            margin: 30px 0;
            line-height: 1.6;
        }

        .emoji {
            font-size: 40px;
            animation: bounce 2s infinite;
            display: inline-block;
            margin: 0 10px;
        }

        .emoji:nth-child(2) { animation-delay: 0.1s; }
        .emoji:nth-child(3) { animation-delay: 0.2s; }
        .emoji:nth-child(4) { animation-delay: 0.3s; }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }

        .fun-button {
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .fun-button:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-element {
            position: absolute;
            font-size: 30px;
            opacity: 0.7;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
        .floating-element:nth-child(2) { top: 20%; right: 10%; animation-delay: 1s; }
        .floating-element:nth-child(3) { bottom: 20%; left: 15%; animation-delay: 2s; }
        .floating-element:nth-child(4) { bottom: 30%; right: 20%; animation-delay: 3s; }
        .floating-element:nth-child(5) { top: 50%; left: 5%; animation-delay: 4s; }
        .floating-element:nth-child(6) { top: 60%; right: 5%; animation-delay: 5s; }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        .joke-section {
            background: linear-gradient(45deg, #ffeaa7, #fab1a0);
            border-radius: 20px;
            padding: 20px;
            margin: 30px 0;
            border: 3px dashed #e17055;
        }

        .joke-text {
            font-size: 16px;
            color: #2d3436;
            font-style: italic;
            margin: 10px 0;
        }

        .search-box {
            background: white;
            border: 3px solid #74b9ff;
            border-radius: 25px;
            padding: 15px 20px;
            font-size: 16px;
            margin: 20px 0;
            width: 300px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            outline: none;
            border-color: #0984e3;
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(116, 185, 255, 0.5);
        }

        .tool-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 30px 0;
        }

        .tool-card {
            background: linear-gradient(135deg, #a29bfe, #6c5ce7);
            color: white;
            padding: 15px;
            border-radius: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
            transform: perspective(1000px) rotateX(0deg);
        }

        .tool-card:hover {
            transform: perspective(1000px) rotateX(10deg) scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            color: white;
            text-decoration: none;
        }

        .easter-egg {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background: #ff6b6b;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            cursor: pointer;
            animation: pulse 2s infinite;
            z-index: 1000;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .hidden-message {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            z-index: 1001;
            text-align: center;
        }

        @media (max-width: 768px) {
            .error-card {
                padding: 30px 20px;
                margin: 10px;
            }
            .error-number {
                font-size: 80px;
            }
            .funny-title {
                font-size: 24px;
            }
            .search-box {
                width: 100%;
            }
        }
    </style>

    <!-- Floating Background Elements -->
    <div class="floating-elements">
        <div class="floating-element">🚀</div>
        <div class="floating-element">🎈</div>
        <div class="floating-element">⭐</div>
        <div class="floating-element">🎨</div>
        <div class="floating-element">🎭</div>
        <div class="floating-element">🎪</div>
    </div>

    <!-- 404 Content -->
    <div class="funny-container">
        <div class="error-card">
            <h1 class="error-number" onclick="this.style.animation='spin 0.5s ease-in-out'">404</h1>
            
            <div class="emoji-row">
                <span class="emoji">🤔</span>
                <span class="emoji">😅</span>
                <span class="emoji">🔍</span>
                <span class="emoji">🤷‍♂️</span>
            </div>
            
            <h2 class="funny-title">Oops! This Page Went on Vacation! 🏖️</h2>
            
            <p class="funny-message">
                Looks like this page packed its bags and left for a tropical getaway! 
                <br>Don't worry, we've sent a search party (with snacks). 🕵️‍♀️🥨
                <br><strong>Meanwhile, let's find you something awesome!</strong>
            </p>

            <div class="joke-section">
                <p class="joke-text">
                    💡 <strong>Fun Fact:</strong> 404 errors are like missing socks - they disappear when you need them most!
                </p>
                <p class="joke-text">
                    🎯 <strong>Pro Tip:</strong> Try our tools below, they're guaranteed to exist (we checked twice)!
                </p>
            </div>

            <input type="text" class="search-box" placeholder="🔍 Search for tools..." id="searchBox" onkeyup="searchTools()">

            <div style="margin: 30px 0;">
                <a href="/" class="fun-button">
                    🏠 Take Me Home
                </a>
                <button class="fun-button" onclick="tellJoke()">
                    😂 Tell Me a Joke
                </button>
                <button class="fun-button" onclick="window.history.back()">
                    ⏪ Go Back
                </button>
            </div>

            <div class="tool-grid" id="toolGrid">
                <a href="/youtube-thumbnail-downloader" class="tool-card">
                    <i class="fab fa-youtube"></i><br>
                    YouTube Thumbnail Downloader
                </a>
                <a href="/word_counter" class="tool-card">
                    <i class="fas fa-text-width"></i><br>
                    Word Counter
                </a>
                <a href="/compound-interest-calculator" class="tool-card">
                    <i class="fas fa-calculator"></i><br>
                    Compound Interest Calculator
                </a>
                <a href="/emi-calculator" class="tool-card">
                    <i class="fas fa-money-check-alt"></i><br>
                    EMI Calculator
                </a>
                <a href="/bmi-calculator" class="tool-card">
                    <i class="fas fa-weight"></i><br>
                    BMI Calculator
                </a>
                <a href="/age-calculator" class="tool-card">
                    <i class="fas fa-birthday-cake"></i><br>
                    Age Calculator
                </a>
                <a href="/currency-converter" class="tool-card">
                    <i class="fas fa-exchange-alt"></i><br>
                    Currency Converter
                </a>
                <a href="/binary-translator" class="tool-card">
                    <i class="fas fa-code"></i><br>
                    Binary Translator
                </a>
            </div>
        </div>
    </div>

    <!-- Easter Egg -->
    <div class="easter-egg" onclick="showEasterEgg()">
        🎁
    </div>

    <!-- Hidden Message -->
    <div class="hidden-message" id="hiddenMessage">
        <h3>🎉 You Found the Secret! 🎉</h3>
        <p>Congratulations! You're officially a digital treasure hunter! 🏴‍☠️</p>
        <p>Here's your reward: You're awesome! ⭐</p>
        <button class="fun-button" onclick="hideEasterEgg()">Thanks! 😊</button>
    </div>

    <script>
        // Fun JavaScript interactions
        const jokes = [
            "Why don't programmers like nature? It has too many bugs! 🐛",
            "How many programmers does it take to change a light bulb? None, that's a hardware problem! 💡",
            "Why do Java developers wear glasses? Because they can't C# ! 👓",
            "What's a computer's favorite snack? Microchips! 🍟",
            "Why was the JavaScript developer sad? Because they didn't Node how to Express themselves! 😢"
        ];

        function tellJoke() {
            const randomJoke = jokes[Math.floor(Math.random() * jokes.length)];
            alert(randomJoke);
        }

        function showEasterEgg() {
            document.getElementById('hiddenMessage').style.display = 'block';
        }

        function hideEasterEgg() {
            document.getElementById('hiddenMessage').style.display = 'none';
        }

        function searchTools() {
            const searchTerm = document.getElementById('searchBox').value.toLowerCase();
            const toolCards = document.querySelectorAll('.tool-card');
            
            toolCards.forEach(card => {
                const text = card.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    card.style.display = 'block';
                    card.style.animation = 'bounce 0.5s ease';
                } else {
                    card.style.display = searchTerm === '' ? 'block' : 'none';
                }
            });
        }

        // Add some random floating elements
        function createFloatingEmoji() {
            const emojis = ['⭐', '✨', '🎈', '🎊', '🎉', '💫', '🌟'];
            const emoji = document.createElement('div');
            emoji.textContent = emojis[Math.floor(Math.random() * emojis.length)];
            emoji.style.position = 'fixed';
            emoji.style.left = Math.random() * 100 + 'vw';
            emoji.style.top = '100vh';
            emoji.style.fontSize = '24px';
            emoji.style.pointerEvents = 'none';
            emoji.style.zIndex = '9999';
            emoji.style.animation = 'float-up 4s linear';
            
            document.body.appendChild(emoji);
            
            setTimeout(() => {
                emoji.remove();
            }, 4000);
        }

        // Add CSS for floating animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes float-up {
                to {
                    transform: translateY(-100vh) rotate(360deg);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Create floating emojis periodically
        setInterval(createFloatingEmoji, 3000);

        // Fun click effects on the 404 number
        document.querySelector('.error-number').addEventListener('click', function() {
            this.style.color = '#' + Math.floor(Math.random()*16777215).toString(16);
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>