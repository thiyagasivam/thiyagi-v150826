<?php include 'header.php'; ?>

    <title>Terminus Calculator 2026 - Terminal Math Calculator | Thiyagi.com</title>
    <meta name="description" content="Advanced terminal-style calculator 2026 with mathematical functions, scientific operations, and programming calculations. Professional command-line calculator interface.">
    <meta name="keywords" content="terminus calculator 2026, terminal calculator, command line calculator, scientific calculator, math calculator, programming calculator">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Terminus Calculator 2026 - Terminal Math Calculator">
    <meta property="og:description" content="Advanced terminal-style calculator with mathematical functions, scientific operations, and programming calculations.">
    <meta property="og:url" content="https://www.thiyagi.com/terminus-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Terminus Calculator 2026 - Terminal Math Calculator">
    <meta name="twitter:description" content="Advanced terminal-style calculator with mathematical functions, scientific operations, and programming calculations.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #1a1a1a 0%, #2d3748 100%);
    }
    .terminal-bg {
        background: #0d1117;
        color: #c9d1d9;
        font-family: 'Courier New', 'Monaco', monospace;
    }
    .terminal-input {
        background: #21262d !important;
        color: #c9d1d9 !important;
        border: 1px solid #30363d !important;
        font-family: 'Courier New', monospace;
    }
    .terminal-input:focus {
        border-color: #58a6ff !important;
        box-shadow: 0 0 0 3px rgba(88, 166, 255, 0.1) !important;
    }
    .command-result {
        animation: slideIn 0.3s ease-out;
    }
    @keyframes slideIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .command-prompt::before {
        content: "$ ";
        color: #7c3aed;
        font-weight: bold;
    }
    .result-prompt::before {
        content: "> ";
        color: #10b981;
        font-weight: bold;
    }
    .error-prompt::before {
        content: "! ";
        color: #ef4444;
        font-weight: bold;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .button-grid button {
        transition: all 0.2s ease;
    }
    .button-grid button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    .history-item:hover {
        background-color: #30363d;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Terminus Calculator 2026",
  "description": "Advanced terminal-style calculator with mathematical functions, scientific operations, programming calculations, and command-line interface for developers and mathematicians.",
  "url": "https://www.thiyagi.com/terminus-calculator",
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
                    <div class="bg-gray-800 p-3 rounded-full shadow-lg">
                        <i class="fas fa-terminal text-2xl text-green-400" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Terminus Calculator</h1>
                        <p class="text-gray-300">Advanced terminal-style mathematical calculator</p>
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
                <li class="text-gray-900 font-medium">Terminus Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Terminal Calculator -->
        <section class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
            <!-- Terminal Header -->
            <div class="bg-gray-800 px-4 py-2 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    <span class="ml-4 text-gray-300 text-sm font-mono">terminus-calculator v2.5.0</span>
                </div>
                <div class="flex items-center space-x-3">
                    <button id="clearTerminal" class="text-gray-400 hover:text-white text-sm" title="Clear Terminal">
                        <i class="fas fa-trash" aria-hidden="true"></i>
                    </button>
                    <button id="saveSession" class="text-gray-400 hover:text-white text-sm" title="Save Session">
                        <i class="fas fa-save" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

            <!-- Terminal Body -->
            <div class="terminal-bg p-6">
                <!-- Welcome Message -->
                <div class="mb-4 text-green-400">
                    <div>Welcome to Terminus Calculator v2.5.0</div>
                    <div class="text-gray-500 text-sm">Type 'help' for available commands</div>
                </div>

                <!-- Command History Display -->
                <div id="commandHistory" class="space-y-2 mb-4 max-h-96 overflow-y-auto">
                    <!-- Command history will be populated here -->
                </div>

                <!-- Input Line -->
                <div class="flex items-center">
                    <span class="command-prompt text-purple-400 mr-2"></span>
                    <input type="text" id="terminalInput" class="terminal-input flex-1 bg-transparent border-none outline-none p-2" placeholder="Enter calculation or command..." autocomplete="off">
                </div>
            </div>
        </section>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Button Calculator -->
            <section class="lg:col-span-2 bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-calculator mr-3 text-blue-600" aria-hidden="true"></i>
                    Visual Calculator
                </h2>

                <!-- Display -->
                <div class="mb-6">
                    <input type="text" id="display" class="w-full p-4 text-2xl text-right bg-gray-100 border-2 border-gray-300 rounded-lg font-mono" readonly value="0">
                </div>

                <!-- Button Grid -->
                <div class="button-grid grid grid-cols-5 gap-3">
                    <!-- Row 1: Clear, Memory, Functions -->
                    <button class="btn-clear bg-red-500 hover:bg-red-600 text-white p-4 rounded-lg font-bold" data-action="clear">C</button>
                    <button class="btn-function bg-orange-500 hover:bg-orange-600 text-white p-4 rounded-lg" data-function="sqrt">√</button>
                    <button class="btn-function bg-orange-500 hover:bg-orange-600 text-white p-4 rounded-lg" data-function="pow">x²</button>
                    <button class="btn-operator bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg" data-operator="/">/</button>
                    <button class="btn-function bg-orange-500 hover:bg-orange-600 text-white p-4 rounded-lg" data-function="sin">sin</button>

                    <!-- Row 2: Numbers -->
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold" data-number="7">7</button>
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold" data-number="8">8</button>
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold" data-number="9">9</button>
                    <button class="btn-operator bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg" data-operator="*">×</button>
                    <button class="btn-function bg-orange-500 hover:bg-orange-600 text-white p-4 rounded-lg" data-function="cos">cos</button>

                    <!-- Row 3: Numbers -->
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold" data-number="4">4</button>
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold" data-number="5">5</button>
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold" data-number="6">6</button>
                    <button class="btn-operator bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg" data-operator="-">-</button>
                    <button class="btn-function bg-orange-500 hover:bg-orange-600 text-white p-4 rounded-lg" data-function="tan">tan</button>

                    <!-- Row 4: Numbers -->
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold" data-number="1">1</button>
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold" data-number="2">2</button>
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold" data-number="3">3</button>
                    <button class="btn-operator bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg" data-operator="+">+</button>
                    <button class="btn-function bg-orange-500 hover:bg-orange-600 text-white p-4 rounded-lg" data-function="log">log</button>

                    <!-- Row 5: Zero and Decimal -->
                    <button class="btn-number bg-gray-200 hover:bg-gray-300 text-gray-800 p-4 rounded-lg font-bold col-span-2" data-number="0">0</button>
                    <button class="btn-decimal bg-gray-300 hover:bg-gray-400 text-gray-800 p-4 rounded-lg" data-action="decimal">.</button>
                    <button class="btn-equals bg-green-500 hover:bg-green-600 text-white p-4 rounded-lg font-bold" data-action="equals">=</button>
                    <button class="btn-function bg-orange-500 hover:bg-orange-600 text-white p-4 rounded-lg" data-function="ln">ln</button>
                </div>
            </section>

            <!-- Functions & History -->
            <section class="space-y-8">
                <!-- Quick Functions -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-function mr-2 text-purple-600" aria-hidden="true"></i>
                        Quick Functions
                    </h3>
                    
                    <div class="space-y-3">
                        <button class="w-full bg-purple-100 hover:bg-purple-200 text-purple-800 p-3 rounded-lg text-left transition-colors" data-command="pi">
                            <i class="fas fa-pi-symbol mr-2" aria-hidden="true"></i>
                            π (Pi)
                        </button>
                        <button class="w-full bg-purple-100 hover:bg-purple-200 text-purple-800 p-3 rounded-lg text-left transition-colors" data-command="e">
                            <i class="fas fa-superscript mr-2" aria-hidden="true"></i>
                            e (Euler's number)
                        </button>
                        <button class="w-full bg-purple-100 hover:bg-purple-200 text-purple-800 p-3 rounded-lg text-left transition-colors" data-command="rand">
                            <i class="fas fa-dice mr-2" aria-hidden="true"></i>
                            Random (0-1)
                        </button>
                        <button class="w-full bg-purple-100 hover:bg-purple-200 text-purple-800 p-3 rounded-lg text-left transition-colors" data-command="factorial">
                            <i class="fas fa-exclamation mr-2" aria-hidden="true"></i>
                            Factorial (n!)
                        </button>
                    </div>
                </div>

                <!-- Command History -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-history mr-2 text-green-600" aria-hidden="true"></i>
                        History
                    </h3>
                    
                    <div id="historyList" class="space-y-2 max-h-64 overflow-y-auto">
                        <div class="text-gray-500 text-sm text-center py-4">No calculations yet</div>
                    </div>
                    
                    <button id="clearHistory" class="w-full mt-4 bg-red-100 hover:bg-red-200 text-red-800 p-2 rounded-lg text-sm transition-colors">
                        <i class="fas fa-trash mr-2" aria-hidden="true"></i>
                        Clear History
                    </button>
                </div>

                <!-- Commands Reference -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-book mr-2 text-blue-600" aria-hidden="true"></i>
                        Commands
                    </h3>
                    
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="font-mono text-gray-600">help</span>
                            <span class="text-gray-500">Show help</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-mono text-gray-600">clear</span>
                            <span class="text-gray-500">Clear terminal</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-mono text-gray-600">history</span>
                            <span class="text-gray-500">Show history</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-mono text-gray-600">vars</span>
                            <span class="text-gray-500">Show variables</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-mono text-gray-600">x = 5</span>
                            <span class="text-gray-500">Set variable</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Features & FAQ -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-question-circle mr-3 text-purple-600" aria-hidden="true"></i>
                Features & Usage Guide
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Supported Operations</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Basic arithmetic (+, -, *, /)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Trigonometric functions (sin, cos, tan)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Logarithmic functions (log, ln)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Power operations (x², x³, x^y)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Square root and nth root</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Constants (π, e)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Variable assignment and recall</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Example Calculations</h3>
                    <div class="space-y-3">
                        <div class="bg-gray-100 p-3 rounded font-mono text-sm">
                            <div class="text-purple-600">$ 2 + 3 * 4</div>
                            <div class="text-green-600">&gt; 14</div>
                        </div>
                        <div class="bg-gray-100 p-3 rounded font-mono text-sm">
                            <div class="text-purple-600">$ sin(pi/2)</div>
                            <div class="text-green-600">&gt; 1</div>
                        </div>
                        <div class="bg-gray-100 p-3 rounded font-mono text-sm">
                            <div class="text-purple-600">$ sqrt(16)</div>
                            <div class="text-green-600">&gt; 4</div>
                        </div>
                        <div class="bg-gray-100 p-3 rounded font-mono text-sm">
                            <div class="text-purple-600">$ x = 5; x^2</div>
                            <div class="text-green-600">&gt; 25</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class TerminusCalculator {
            constructor() {
                this.history = [];
                this.variables = {};
                this.currentExpression = '';
                this.display = '0';
                this.init();
            }

            init() {
                this.bindEvents();
                this.loadHistory();
                this.updateDisplay();
            }

            bindEvents() {
                // Terminal input
                const terminalInput = document.getElementById('terminalInput');
                terminalInput.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter') {
                        this.processCommand(e.target.value);
                        e.target.value = '';
                    } else if (e.key === 'ArrowUp') {
                        e.preventDefault();
                        this.recallLastCommand();
                    }
                });

                // Visual calculator buttons
                document.querySelectorAll('.btn-number').forEach(btn => {
                    btn.addEventListener('click', () => this.inputNumber(btn.dataset.number));
                });

                document.querySelectorAll('.btn-operator').forEach(btn => {
                    btn.addEventListener('click', () => this.inputOperator(btn.dataset.operator));
                });

                document.querySelectorAll('.btn-function').forEach(btn => {
                    btn.addEventListener('click', () => this.inputFunction(btn.dataset.function));
                });

                document.querySelector('.btn-equals').addEventListener('click', () => this.calculate());
                document.querySelector('.btn-clear').addEventListener('click', () => this.clearDisplay());
                document.querySelector('.btn-decimal').addEventListener('click', () => this.inputDecimal());

                // Control buttons
                document.getElementById('clearTerminal').addEventListener('click', () => this.clearTerminal());
                document.getElementById('saveSession').addEventListener('click', () => this.saveSession());
                document.getElementById('clearHistory').addEventListener('click', () => this.clearHistory());

                // Quick function buttons
                document.querySelectorAll('[data-command]').forEach(btn => {
                    btn.addEventListener('click', () => {
                        const command = btn.dataset.command;
                        this.processCommand(command);
                    });
                });
            }

            processCommand(input) {
                if (!input.trim()) return;

                this.addToHistory('command', input);
                
                try {
                    // Handle special commands
                    if (input === 'help') {
                        this.showHelp();
                    } else if (input === 'clear') {
                        this.clearTerminal();
                    } else if (input === 'history') {
                        this.showHistory();
                    } else if (input === 'vars') {
                        this.showVariables();
                    } else if (input.includes('=') && !input.includes('==')) {
                        this.setVariable(input);
                    } else {
                        // Mathematical expression
                        const result = this.evaluateExpression(input);
                        this.addToHistory('result', result);
                        this.updateHistoryPanel();
                    }
                } catch (error) {
                    this.addToHistory('error', `Error: ${error.message}`);
                }
            }

            evaluateExpression(expr) {
                // Replace mathematical constants and functions
                let processedExpr = expr
                    .replace(/\bpi\b/g, Math.PI)
                    .replace(/\be\b/g, Math.E)
                    .replace(/\brand\b/g, Math.random())
                    .replace(/sin\(/g, 'Math.sin(')
                    .replace(/cos\(/g, 'Math.cos(')
                    .replace(/tan\(/g, 'Math.tan(')
                    .replace(/log\(/g, 'Math.log10(')
                    .replace(/ln\(/g, 'Math.log(')
                    .replace(/sqrt\(/g, 'Math.sqrt(')
                    .replace(/\^/g, '**')
                    .replace(/(\w+)!/g, (match, n) => this.factorial(parseInt(n)));

                // Replace variables
                for (const [name, value] of Object.entries(this.variables)) {
                    processedExpr = processedExpr.replace(new RegExp(`\\b${name}\\b`, 'g'), value);
                }

                // Evaluate safely
                const result = Function(`"use strict"; return (${processedExpr})`)();
                
                if (typeof result !== 'number' || isNaN(result)) {
                    throw new Error('Invalid mathematical expression');
                }

                return result;
            }

            factorial(n) {
                if (n < 0) return NaN;
                if (n === 0 || n === 1) return 1;
                let result = 1;
                for (let i = 2; i <= n; i++) {
                    result *= i;
                }
                return result;
            }

            setVariable(input) {
                const [name, value] = input.split('=').map(s => s.trim());
                if (name && value) {
                    try {
                        const numValue = this.evaluateExpression(value);
                        this.variables[name] = numValue;
                        this.addToHistory('result', `${name} = ${numValue}`);
                    } catch (error) {
                        throw new Error(`Cannot set variable: ${error.message}`);
                    }
                }
            }

            showHelp() {
                const helpText = [
                    'Available commands:',
                    '  help - Show this help message',
                    '  clear - Clear terminal',
                    '  history - Show calculation history',
                    '  vars - Show defined variables',
                    '',
                    'Mathematical functions:',
                    '  sin(x), cos(x), tan(x) - Trigonometric functions',
                    '  log(x), ln(x) - Logarithmic functions',
                    '  sqrt(x) - Square root',
                    '  x^y - Power operations',
                    '  x! - Factorial (e.g., 5!)',
                    '',
                    'Constants: pi, e, rand',
                    'Variables: x = 5, then use x in calculations'
                ];
                
                helpText.forEach(line => this.addToHistory('info', line));
            }

            showHistory() {
                if (this.history.length === 0) {
                    this.addToHistory('info', 'No history available');
                    return;
                }

                this.addToHistory('info', 'Recent calculations:');
                this.history.slice(-10).forEach((item, index) => {
                    if (item.type === 'command' && item.content !== 'history') {
                        this.addToHistory('info', `  ${item.content}`);
                    }
                });
            }

            showVariables() {
                if (Object.keys(this.variables).length === 0) {
                    this.addToHistory('info', 'No variables defined');
                    return;
                }

                this.addToHistory('info', 'Defined variables:');
                for (const [name, value] of Object.entries(this.variables)) {
                    this.addToHistory('info', `  ${name} = ${value}`);
                }
            }

            addToHistory(type, content) {
                const historyItem = { type, content, timestamp: new Date() };
                this.history.push(historyItem);
                
                // Update terminal display
                const historyDiv = document.getElementById('commandHistory');
                const itemDiv = document.createElement('div');
                itemDiv.className = 'command-result';

                if (type === 'command') {
                    itemDiv.innerHTML = `<span class="command-prompt">${content}</span>`;
                } else if (type === 'result') {
                    itemDiv.innerHTML = `<span class="result-prompt">${content}</span>`;
                } else if (type === 'error') {
                    itemDiv.innerHTML = `<span class="error-prompt text-red-400">${content}</span>`;
                } else {
                    itemDiv.innerHTML = `<span class="text-gray-400">${content}</span>`;
                }

                historyDiv.appendChild(itemDiv);
                historyDiv.scrollTop = historyDiv.scrollHeight;

                this.saveHistory();
            }

            updateHistoryPanel() {
                const historyList = document.getElementById('historyList');
                const recentCalculations = this.history.filter(item => 
                    (item.type === 'command' || item.type === 'result') && 
                    !['help', 'clear', 'history', 'vars'].includes(item.content)
                ).slice(-10);

                if (recentCalculations.length === 0) {
                    historyList.innerHTML = '<div class="text-gray-500 text-sm text-center py-4">No calculations yet</div>';
                    return;
                }

                historyList.innerHTML = recentCalculations.map(item => `
                    <div class="history-item p-2 rounded cursor-pointer text-sm font-mono" onclick="calculator.recallCalculation('${item.content}')">
                        <div class="text-gray-600">${item.content}</div>
                    </div>
                `).join('');
            }

            recallCalculation(calculation) {
                document.getElementById('terminalInput').value = calculation;
                document.getElementById('terminalInput').focus();
            }

            recallLastCommand() {
                const lastCommand = this.history.filter(item => item.type === 'command').pop();
                if (lastCommand) {
                    document.getElementById('terminalInput').value = lastCommand.content;
                }
            }

            // Visual Calculator Methods
            inputNumber(num) {
                if (this.display === '0' || this.display === 'Error') {
                    this.display = num;
                } else {
                    this.display += num;
                }
                this.updateDisplay();
            }

            inputOperator(op) {
                if (this.display !== 'Error') {
                    this.display += ` ${op} `;
                    this.updateDisplay();
                }
            }

            inputFunction(func) {
                if (func === 'sqrt') {
                    this.display = `sqrt(${this.display})`;
                } else if (func === 'pow') {
                    this.display += '^2';
                } else {
                    this.display = `${func}(${this.display})`;
                }
                this.updateDisplay();
            }

            inputDecimal() {
                if (!this.display.includes('.')) {
                    this.display += '.';
                    this.updateDisplay();
                }
            }

            calculate() {
                try {
                    const result = this.evaluateExpression(this.display);
                    this.display = result.toString();
                    this.addToHistory('command', this.display);
                    this.addToHistory('result', result);
                    this.updateHistoryPanel();
                } catch (error) {
                    this.display = 'Error';
                }
                this.updateDisplay();
            }

            clearDisplay() {
                this.display = '0';
                this.updateDisplay();
            }

            updateDisplay() {
                document.getElementById('display').value = this.display;
            }

            clearTerminal() {
                document.getElementById('commandHistory').innerHTML = '';
            }

            clearHistory() {
                this.history = [];
                this.updateHistoryPanel();
                localStorage.removeItem('terminus_calculator_history');
            }

            saveHistory() {
                localStorage.setItem('terminus_calculator_history', JSON.stringify(this.history.slice(-50)));
            }

            loadHistory() {
                const saved = localStorage.getItem('terminus_calculator_history');
                if (saved) {
                    this.history = JSON.parse(saved);
                    this.updateHistoryPanel();
                }
            }

            saveSession() {
                const session = {
                    history: this.history,
                    variables: this.variables,
                    timestamp: new Date()
                };
                
                const blob = new Blob([JSON.stringify(session, null, 2)], { type: 'application/json' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'terminus_calculator_session.json';
                a.click();
                URL.revokeObjectURL(url);
            }
        }

        // Initialize calculator
        let calculator;
        document.addEventListener('DOMContentLoaded', () => {
            calculator = new TerminusCalculator();
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