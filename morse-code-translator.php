<?php include 'header.php';?>


<?php
// Morse code dictionary
$morseCode = [
    'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 
    'F' => '..-.', 'G' => '--.', 'H' => '....', 'I' => '..', 'J' => '.---',
    'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---',
    'P' => '.--.', 'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-',
    'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-', 'Y' => '-.--',
    'Z' => '--..', '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--',
    '4' => '....-', '5' => '.....', '6' => '-....', '7' => '--...', '8' => '---..',
    '9' => '----.', '.' => '.-.-.-', ',' => '--..--', '?' => '..--..', "'" => '.----.',
    '!' => '-.-.--', '/' => '-..-.', '(' => '-.--.', ')' => '-.--.-', '&' => '.-...',
    ':' => '---...', ';' => '-.-.-.', '=' => '-...-', '+' => '.-.-.', '-' => '-....-',
    '_' => '..--.-', '"' => '.-..-.', '$' => '...-..-', '@' => '.--.-.', ' ' => '/'
];

// Function to translate text to Morse code
function textToMorse($text, $morseCode) {
    $text = strtoupper($text);
    $result = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (isset($morseCode[$char])) {
            $result .= $morseCode[$char] . ' ';
        }
    }
    return trim($result);
}

// Function to translate Morse code to text
function morseToText($morse, $morseCode) {
    $morseArray = explode(' ', $morse);
    $result = '';
    $reverseMorse = array_flip($morseCode);
    
    foreach ($morseArray as $code) {
        if ($code === '/') {
            $result .= ' ';
        } elseif (isset($reverseMorse[$code])) {
            $result .= $reverseMorse[$code];
        }
    }
    return $result;
}

// Handle form submission
$output = '';
$input = '';
$direction = 'text_to_morse';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['input'] ?? '';
    $direction = $_POST['direction'] ?? 'text_to_morse';
    
    if (!empty($input)) {
        try {
            if ($direction === 'text_to_morse') {
                $output = textToMorse($input, $morseCode);
            } else {
                $output = morseToText($input, $morseCode);
            }
        } catch (Exception $e) {
            $error = "Error in translation: " . $e->getMessage();
        }
    } else {
        $error = "Please enter some text or Morse code to translate";
    }
}
?>

    <title>Morse Code Translator 2026 - Free Online Decoder & Encoder</title>
<meta name="description" content="Free online Morse code translator for 2026. Instantly convert text to Morse code and vice versa. Learn Morse alphabet with audio playback and flashing light simulation.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .active-tab {
            background-color: #3b82f6;
            color: white;
        }
        .tab:hover:not(.active-tab) {
            background-color: #e5e7eb;
        }
        textarea {
            min-height: 150px;
        }
        .copy-btn {
            transition: all 0.2s;
        }
        .copy-btn:hover {
            background-color: #2563eb;
        }
        .copy-btn:active {
            transform: scale(0.95);
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Morse Code Translator</h1>
            <p class="text-gray-600">Convert between text and Morse code instantly</p>
        </header>

        <main class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="flex border-b mb-6">
                    <button type="button" id="textToMorseTab" class="tab px-4 py-2 font-medium rounded-t-lg <?= $direction === 'text_to_morse' ? 'active-tab' : 'text-gray-600' ?>">
                        Text to Morse Code
                    </button>
                    <button type="button" id="morseToTextTab" class="tab px-4 py-2 font-medium rounded-t-lg <?= $direction === 'morse_to_text' ? 'active-tab' : 'text-gray-600' ?>">
                        Morse Code to Text
                    </button>
                    <input type="hidden" name="direction" id="direction" value="<?= htmlspecialchars($direction) ?>">
                </div>

                <div class="mb-4">
                    <label for="input" class="block text-gray-700 font-medium mb-2">
                        <?= $direction === 'text_to_morse' ? 'Enter Text:' : 'Enter Morse Code:' ?>
                    </label>
                    <textarea name="input" id="input" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required><?= htmlspecialchars($input) ?></textarea>
                </div>

                <div class="flex justify-center mb-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-lg transition duration-200">
                        Translate
                    </button>
                </div>

                <?php if (!empty($error)): ?>
                    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($output)): ?>
                    <div class="mb-4">
                        <label for="output" class="block text-gray-700 font-medium mb-2">
                            <?= $direction === 'text_to_morse' ? 'Morse Code:' : 'Text:' ?>
                        </label>
                        <div class="relative">
                            <textarea id="output" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50" readonly><?= htmlspecialchars($output) ?></textarea>
                            <button type="button" onclick="copyToClipboard()" class="copy-btn absolute top-2 right-2 bg-blue-500 text-white p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
            </form>
        </main>

        <section class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">About Morse Code</h2>
            <p class="text-gray-600 mb-4">
                Morse code is a method used in telecommunication to encode text characters as standardized sequences of two different signal durations, called dots and dashes or dits and dahs.
            </p>
            <h3 class="font-bold text-gray-700 mb-2">How to Use This Translator</h3>
            <ul class="list-disc pl-5 text-gray-600 space-y-1">
                <li>For text to Morse code: Type your text in the input box and click "Translate"</li>
                <li>For Morse code to text: Enter Morse code using dots (.) and dashes (-), separating letters with spaces and words with "/"</li>
                <li>Click the copy button to copy your translation to clipboard</li>
            </ul>
        </section>

        <!-- Comprehensive Morse Code Guide -->
        <section class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Complete Guide to Morse Code Translation, History, and Modern Applications</h2>
            
            <div class="prose max-w-none text-gray-700 space-y-6">
                <p class="text-lg">Morse code represents one of humanity's most enduring <strong>communication systems</strong>, invented in the 1830s-1840s by Samuel Morse and Alfred Vail, encoding text characters into standardized sequences of dots (short signals) and dashes (long signals) enabling long-distance telecommunication before voice transmission technologies emerged. Understanding Morse code's structure—including the International Morse Code standard, timing conventions, letter/number/punctuation encoding, prosigns (procedural signals), and transmission methods—provides fascinating insights into communication history while offering practical applications in amateur radio, aviation, maritime communication, emergency signaling, accessibility technology, and hobbyist activities where this resilient encoding system continues serving vital functions despite modern digital alternatives. From learning basic code patterns and timing rules to exploring historical significance, military applications, cultural references, and contemporary uses in technology and art, Morse code knowledge connects us to communication heritage while demonstrating enduring principles of efficient information encoding relevant across technological eras.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Historical Development and Evolution</strong></h2>
                <p><strong>Morse code's invention</strong> paralleled early electrical telegraph development in the 1830s-1840s. Samuel F.B. Morse, a painter and inventor, collaborated with Alfred Vail and others creating electromagnetic telegraph systems requiring encoding scheme translating language into electrical signals transmittable over wires. Early "American Morse Code" (also called "Railroad Morse") varied from modern International Morse Code with different dash lengths and character encodings. The system revolutionized communication enabling near-instantaneous message transmission across vast distances, previously requiring days or weeks via physical mail transport. Telegraph networks expanded rapidly connecting cities, then continents through transoceanic cables, fundamentally transforming commerce, journalism, diplomacy, and military operations.</p>
                
                <p>International Morse Code standardized in 1865 by international telegraph conference created universal system compatible across nations and equipment types. This standardization proved crucial for maritime communication where ships of different nationalities needed common distress and operational communication methods. The famous SOS distress signal (· · · — — — · · ·) adopted in 1906 became internationally recognized emergency call using easily distinguishable pattern. Throughout 20th century, Morse code served critical military roles in both World Wars, Cold War communications, and continues in amateur radio communities worldwide. While modern voice and digital communications largely replaced Morse in commercial applications, its efficiency in low-bandwidth conditions, simplicity enabling human interpretation without electronic decoding, and cultural legacy ensure continued relevance in specific domains. Understanding this historical evolution contextualizes Morse code as pivotal technology bridging pre-electrical and modern digital communication eras, demonstrating how fundamental information encoding principles persist across technological transformations serving human communication needs across time and changing technological landscapes.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>International Morse Code Structure</strong></h2>
                <p><strong>International Morse Code</strong> encodes 26 Latin letters, 10 digits, and various punctuation marks/special characters using combinations of dots (dit) and dashes (dah). Each character has unique pattern: 'A' = · —, 'B' = — · · ·, 'C' = — · — ·, etc. The system follows efficiency principle—frequently used letters (E, T) have shortest codes ('E' = ·, 'T' = —) while less common letters have longer sequences. Numbers 1-9, 0 use five-element patterns: '1' = · — — — —, '2' = · · — — —, continuing through '0' = — — — — —. Punctuation includes period (· — · — · —), comma (— — · · — —), question mark (· · — — · ·), and others.</p>
                
                <p>Timing conventions standardize transmission and interpretation: a dah duration equals three dit durations; space between elements (dots/dashes) within character equals one dit duration; space between characters equals three dit durations; space between words equals seven dit durations. These precise timing ratios enable listeners to distinguish characters reliably even without visual display, supporting auditory Morse code reception by trained operators. Prosigns (procedural signals) combine multiple characters into single units for operational efficiency: 'AR' (· — · — ·) means "end of message," 'SK' (· · · — · —) means "end of transmission," 'BT' (— · · · —) separates message parts. Understanding timing and prosigns transforms Morse from simple letter encoding into complete communication protocol supporting structured information exchange, error correction, and operational procedures enabling effective long-distance telecommunication in constrained environments where bandwidth limitations, noise interference, or equipment simplicity preclude more complex communication modalities requiring higher data rates or sophisticated encoding schemes.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Learning Morse Code Effectively</strong></h2>
                <p><strong>Learning strategies</strong> for Morse code proficiency vary from traditional memorization to modern audio-based methods. Traditional approach memorizes visual patterns (·/— sequences) for each letter, suitable for written Morse translation or visual light signaling. However, auditory learning proves more effective for radio communication where operators hear dit-dah patterns rather than seeing symbols. The "Koch method" teaches Morse at full speed from beginning, starting with two characters (often 'K' and 'M') practiced until recognition becomes instant, then progressively adding more characters. This avoids habit formation of counting dots/dashes, instead building automatic sound-pattern recognition similar to language learning.</p>
                
                <p>The "Farnsworth method" uses standard character speeds but extended spacing between characters, letting learners recognize individual characters at proper speed while having more processing time between them, gradually reducing spacing as proficiency improves. Mnemonic devices help memorization: 'A' (· —) sounds like "a-BOUT," 'B' (— · · ·) like "BOOT-to-me," 'C' (— · — ·) like "CALM-a-TY." Practice resources include online trainers, mobile apps, Morse code audio recordings, amateur radio practice nets, and software simulators. Consistent daily practice (15-30 minutes) proves more effective than infrequent long sessions. Setting progressive goals—learning 5 characters weekly, achieving 5 words-per-minute reception, advancing to 10-15 WPM for practical radio use—maintains motivation. Modern learners benefit from online communities, YouTube tutorials, interactive websites, and digital tools unavailable to historical telegraph operators who learned through intensive formal training programs. Patience remains essential as typical proficiency development requires weeks or months of consistent practice, though basic competence for emergency use or simple messaging achieves more quickly with focused effort and appropriate learning methods matching individual cognitive styles and learning objectives.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Amateur Radio Applications</strong></h2>
                <p><strong>Amateur radio</strong> (ham radio) enthusiasts maintain vibrant Morse code traditions despite technological advances enabling voice and digital modes. CW (Continuous Wave) operation—Morse code transmission using radio frequency carriers—offers several advantages: requires minimal bandwidth (typically 100-150 Hz versus 2-3 kHz for voice), provides reliable long-distance communication under marginal conditions where voice proves unintelligible, uses simple equipment requiring less power (effective with low-power QRP operations under 5-10 watts), and enables communication across language barriers since Morse code uses international standard recognizable regardless of native language. Many amateur radio operators prefer CW for its technical elegance, operating challenge, and historical connection to radio's roots.</p>
                
                <p>Competitive activities include "CW contests" where operators attempt maximum contacts in limited time, "DXing" (pursuing long-distance contacts often easier via CW on HF bands), and awards programs recognizing achievements like DXCC (100 countries contacted), WAS (all US states), or challenge awards. Amateur radio licensing historically required Morse code proficiency, though many countries (including US as of 2007) eliminated mandatory CW testing recognizing changing technology landscapes while preserving option for enthusiasts maintaining traditions. Modern amateur radio Morse usage blends traditional straight key transmission with electronic keyers, computer-assisted decoding, and software-defined radio technologies. CW operations particularly excel during emergencies when voice communications degrade from atmospheric conditions, interference, or equipment limitations—Morse's simplicity and efficiency shine during challenging propagation or in low-resource situations. Amateur radio communities provide mentorship for new CW operators through practice sessions, on-air tutorials, and club activities preserving knowledge transmission across generations ensuring Morse code skills and appreciation continue within enthusiast communities worldwide passionate about radio communication arts and preserving historic communication methods relevant in contemporary contexts.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Aviation and Maritime Usage</strong></h2>
                <p><strong>Aviation navigation</strong> historically relied on Morse code identification for radio beacons, VOR (VHF Omnidirectional Range) stations, and NDB (Non-Directional Beacon) navigation aids transmitting station identifiers in Morse enabling pilots to verify correct tuning ensuring navigation accuracy. While GPS navigation largely superseded these systems, many beacons continue operating as backup navigation aids with Morse identification preserved. Aviation regulations required pilots to recognize Morse code identifiers verifying navigation equipment function—though modern training reduced emphasis on Morse proficiency, the principle of identifier verification remains important for navigation integrity.</p>
                
                <p>Maritime communication extensively used Morse code for ship-to-ship and ship-to-shore communications until satellite and digital technologies displaced it. SOS distress signals (· · · — — — · · ·) and other maritime procedural signals formed international maritime communication language. GMDSS (Global Maritime Distress and Safety System) implementing digital selective calling and satellite communications in 1999 officially ended mandatory Morse requirements for commercial maritime operations, though some vessels maintain CW capability and many maritime services preserve Morse traditions. Light signaling using Morse code (flashing lights between ships or ship-to-shore) remains emergency communication method when radio equipment fails. Fog signals in lighthouses historically used Morse patterns identifying stations audibly. Maritime culture strongly associates with Morse code heritage recognizing its life-saving role in countless rescue operations where distress calls enabled assistance reaching ships in peril. The Titanic disaster's role in establishing international distress procedures and radio regulations demonstrates Morse code's significance in maritime safety history. Understanding this aviation and maritime legacy contextualizes Morse code beyond simple encoding system as essential safety technology protecting lives through reliable communication in challenging environments where communication failures could prove catastrophic demonstrating enduring relevance of robust simple communication systems.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Military and Intelligence Applications</strong></h2>
                <p><strong>Military communications</strong> employed Morse code extensively from American Civil War through modern conflicts. Telegraph communications in Civil War enabled strategic coordination across distances previously impossible. World War I and II saw massive Morse code usage for tactical communications, intelligence gathering, naval operations, and command structures. Military telegraph operators and radio operators trained intensively in high-speed Morse code achieving 25-40 words per minute or higher—far exceeding typical amateur proficiency. Secure military networks transmitted encrypted messages in Morse code where interception provided no intelligence value without decryption keys.</p>
                
                <p>Numbers stations—mysterious shortwave radio broadcasts transmitting encoded messages (often in Morse alongside voice)—served intelligence agencies conducting espionage operations, communicating with agents in foreign territories using one-time pads making transmissions cryptographically secure. These stations continue operating decades after Cold War suggesting ongoing intelligence applications. Military special operations occasionally use Morse code in covert communications due to equipment simplicity, low probability of intercept characteristics, and operators' ability to send/receive without electronic decoding equipment vulnerable to detection or malfunction. Modern military communications emphasize digital encryption and satellite systems, though Morse principles influence communications doctrine regarding backup systems, low-bandwidth fallbacks, and operator training in basic communication methods when sophisticated equipment fails or electromagnetic pulse events disable electronic systems. Veterans organizations and military history preserve Morse code traditions recognizing its role in military heritage and honoring generations of communications personnel whose skills enabled command structures, intelligence operations, and tactical coordination supporting military objectives across conflicts spanning over century of modern warfare where reliable communication often determined success or failure in operations dependent on timely accurate information exchange across extended chains of command.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Emergency and Survival Signaling</strong></h2>
                <p><strong>Emergency signaling</strong> using Morse code proves valuable in survival situations where standard communication methods fail. SOS signal (· · · — — — · · ·) universally recognized distress call can be transmitted through various methods: flashlight or strobe light in darkness, mirror reflecting sunlight, whistle producing audible patterns, horn or bell on vessels, even ground markings visible from aircraft. The pattern's distinctiveness—three short, three long, three short signals—makes SOS recognizable even by persons unfamiliar with broader Morse code knowledge, specifically designed for emergency recognition across language and training barriers.</p>
                
                <p>Survival training includes Morse distress signaling as communication backup when radios fail, phones lose signal, or injuries prevent physical travel to assistance. Hikers, climbers, sailors, pilots, and remote workers should understand basic Morse distress signals and improvised transmission methods. Ground signals using rocks, logs, or high-contrast materials spelling SOS or creating Morse patterns help aerial search and rescue locate survivors. Aircraft can respond to ground signals using Morse flashing acknowledgments coordinating rescue operations. Emergency beacons (PLBs, EPIRBs) transmit coded distress signals including position data via satellite, evolved from Morse-based emergency transmitters. Understanding emergency Morse applications potentially saves lives in extreme situations where conventional communication proves impossible. Teaching children basic SOS recognition provides safety tool if lost or separated from adults. International rescue organizations recognize Morse distress signals making knowledge globally portable across geographic and cultural boundaries. Emergency preparedness plans should include multiple communication methods with Morse signaling as low-technology backup requiring no equipment beyond ability to produce timed signals using available resources demonstrating how simple robust communication methods provide resilience when sophisticated technologies fail in challenging environments or disaster scenarios disrupting infrastructure and communication networks critical for summoning assistance.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Accessibility and Assistive Technology</strong></h2>
                <p><strong>Accessibility applications</strong> leverage Morse code's binary simplicity enabling people with physical disabilities to communicate using minimal movement or control. Assistive technology devices allow typing via Morse code using single-switch input—users produce dots with brief switch activation, dashes with longer activation, translating Morse into text through software. This enables communication for individuals with severe motor impairments unable to operate standard keyboards but retaining ability to activate single switch through finger movement, head movement, sip-and-puff controls, eye gaze, or other minimal input methods.</p>
                
                <p>Stephen Hawking initially used scanning-based communication but alternative Morse-based approaches offer potential for users with different ability profiles. Mobile accessibility features in some smartphones include Morse code keyboard options enabling text entry for users with motor control challenges. Morse code requires learning but provides faster communication than scanning through full alphabets, and users gain proficiency through practice making it viable long-term communication method. Blind users employ Morse code through tactile devices or audio feedback learning efficient text entry without visual interfaces. Historical precedent includes Helen Keller's Morse code proficiency demonstrating adaptability for deaf-blind communication through tactile transmission. Research explores Morse code in brain-computer interfaces where binary signal structure suits neural signal interpretation enabling direct thought-to-text translation for locked-in syndrome patients or others with complete paralysis. These applications demonstrate how communication technologies originally designed for telegraph systems find unexpected relevance addressing modern accessibility challenges. Universal design principles suggest robust simple interaction methods often prove most inclusive across diverse user needs. Morse code's century-plus history provides tested reliability and simplicity supporting adoption in assistive contexts where communication barriers significantly impact quality of life, autonomy, education, and social participation for individuals whose disabilities require alternative communication modalities beyond standard interfaces assuming full physical and sensory capabilities.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Cultural References and Popular Media</strong></h2>
                <p><strong>Cultural presence</strong> of Morse code appears extensively across films, television, literature, and music reflecting its iconic status in communication history. Movies frequently feature Morse scenes: prisoners tapping messages through walls, spies sending covert signals, submarine crews communicating torpedoes approach, wartime telegraph operators transmitting battlefield intelligence. Television shows use Morse for plot devices—hidden messages in seemingly innocent communications, distress signals from kidnapped victims, paranormal communications, or nostalgic references to communication history. The visual and auditory distinctiveness of Morse code—clicking sounds, flashing lights, rhythmic patterns—provides dramatic tension and period authenticity in historical or military narratives.</p>
                
                <p>Music incorporates Morse code elements: Kraftwerk's "Radioactivity" includes Morse beeps, Rush's "YYZ" uses Morse for Toronto airport identifier, and classical composers occasionally reference Morse rhythms. Literature references Morse in spy novels, historical fiction, science fiction (space communication scenarios), and mystery stories where coded messages provide plot elements. Video games include Morse puzzles, military communication scenarios, and Easter eggs requiring Morse decoding. Internet culture creates Morse-based memes, ASCII art using dots/dashes, and social media references demonstrating continued cultural awareness. Education uses Morse code teaching binary thinking, pattern recognition, and communication history engaging students through hands-on encoding/decoding activities. Scouting and youth programs include Morse code merit badges and skill demonstrations. These cultural manifestations indicate Morse code transcended practical telecommunication tool becoming cultural symbol representing communication, intelligence work, maritime adventure, wartime resilience, and technological history. Even people who cannot translate Morse typically recognize distinctive dit-dah patterns and understand cultural associations demonstrating how iconic technologies persist in collective consciousness long after practical obsolescence, serving educational, artistic, and symbolic functions within broader cultural narratives about communication, technology, and human ingenuity overcoming distance and barriers through clever encoding enabling meaningful connection.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Modern Technology Integration</strong></h2>
                <p><strong>Contemporary technology</strong> preserves and adapts Morse code through digital tools, apps, and online resources democratizing access beyond specialized radio or maritime communities. Smartphone apps teach Morse code through gamified lessons, interactive practice, and character recognition drills making learning accessible without radio equipment. Online translators (like this tool) enable instant text-to-Morse and Morse-to-text conversion supporting hobbyists, students, and curious learners. Software-defined radio (SDR) enables computer-based Morse code reception and transmission integrating with amateur radio, educational applications, and experimentation.</p>
                
                <p>Smart devices incorporate Morse code: Android accessibility features include Morse keyboard; wearable devices could implement Morse input through taps or gestures; IoT devices might use Morse for status indication through LED patterns. Digital communication protocols sometimes reference Morse-inspired encoding where binary simplicity proves advantageous. Cryptocurrency enthusiasts occasionally encode wallet addresses or messages in Morse for aesthetic or security-through-obscurity purposes. Blockchain timestamps or transaction metadata might include Morse-encoded information. Art installations use Morse code for interactive exhibits, light displays, or sound art exploring communication themes. Musical instruments and MIDI controllers could implement Morse-based input methods. Voice assistants could recognize Morse code through humming, whistling, or tapping enabling novel interaction methods. QR codes or visual patterns might incorporate Morse elements blending historical and modern encoding. Educational platforms use Morse teaching computational thinking, binary logic, information theory, and communication protocols. Citizen science projects might employ Morse for low-bandwidth data transmission from remote sensors. These integrations demonstrate how historical technologies inspire contemporary applications, with Morse code's elegant simplicity remaining relevant in contexts valuing minimalism, binary encoding, accessibility, redundancy, or cultural connections to communication heritage. Rather than obsolete relic, Morse code represents living system continuing evolution through technological integration and creative adaptation serving new purposes unforeseen by original telegraph inventors yet aligned with fundamental principles of efficient binary information encoding.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>International Variations and Standards</strong></h2>
                <p><strong>Morse code variants</strong> include American Morse (Railroad Morse), International Morse Code, and specialized extensions. American Morse used primarily in North American landline telegraphy differs from International Morse with different encodings for some letters, use of spaces within character sequences, and variable dash lengths. International Morse Code (adopted globally) uses consistent timing ratios and no intra-character spaces simplifying international compatibility particularly for maritime and aviation applications requiring universal understanding across nationalities and languages. Most modern contexts use International Morse excluding historical or specialized railroad applications preserving American Morse traditions.</p>
                
                <p>Non-Latin alphabets have Morse encodings: Cyrillic characters, Greek letters, Arabic script, Hebrew, Japanese kana, and Chinese characters (though Chinese typically uses transliteration or alternative encoding due to thousands of characters). These extensions enable Morse code usage across linguistic contexts beyond English and European languages. Prosigns (procedural signals) standardize operational communications: 'CQ' (general call to any station), 'DE' (from/this is), 'K' (invitation to transmit), 'AR' (end of message), 'SK' (end of contact), 'BK' (break/pause), and many others create complete communication protocol. Q-codes supplement Morse enabling efficient abbreviated messages: 'QTH' means location, 'QSL' means acknowledgment, 'QRM' means interference—three-letter codes providing compact commonly-needed phrases. Standard abbreviations include '73' (best regards), '88' (love and kisses), 'CUL' (see you later) creating informal shorthand conventions within operator communities. Understanding these variants, extensions, and procedural standards reveals Morse code as comprehensive communication system beyond simple character encoding, supporting structured exchanges, operational procedures, multilingual usage, and cultural communication practices developed over century-plus of practical telecommunications experience across diverse contexts from military operations to amateur hobby clubs creating rich traditions and standardized practices ensuring effective communication within communities using this encoding system for practical and recreational purposes worldwide.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Cognitive Science and Pattern Recognition</strong></h2>
                <p><strong>Cognitive research</strong> examines Morse code learning revealing insights about human pattern recognition, automaticity development, and skill acquisition. Learning Morse code demonstrates chunking phenomenon where initially individual dots/dashes require conscious attention, but practice enables recognition of entire character patterns as single units, eventually perceiving common words holistically without conscious character decoding—similar to reading where fluent readers recognize word shapes rather than processing individual letters. This progression from conscious step-by-step processing to automatic pattern recognition parallels language acquisition, musical performance, and other complex skill development.</p>
                
                <p>Neuroscience studies show experienced Morse operators activate language processing brain regions rather than general auditory processing areas, suggesting Morse becomes language-like cognitive representation. Working memory research uses Morse learning studying how humans encode and retrieve symbolic information through practice. Timing perception studies examine how operators distinguish dit/dah durations and spacing developing precise temporal discrimination abilities. Morse code training potentially provides cognitive benefits: attention control improvement, auditory processing enhancement, pattern recognition skill development, and memory strengthening—though research continues examining specific cognitive transfer effects. Educational theorists suggest Morse code teaching illustrates constructive learning where students actively build meaning through encoding/decoding practice, immediate feedback loops, and progressive complexity. The binary simplicity yet combinatorial richness of Morse code makes it accessible entry point for understanding information theory, digital logic, and communications principles relevant across computer science, linguistics, and cognitive science. Understanding cognitive dimensions of Morse code learning provides insights applicable beyond telegraph communication informing educational technology design, skill training methodologies, human-computer interaction, and cognitive rehabilitation approaches leveraging pattern learning and automaticity development supporting diverse applications from stroke recovery programs to professional skill training benefiting from cognitive science insights emerging from studying how humans master this elegant binary encoding system.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Physics and Signal Transmission</strong></h2>
                <p><strong>Physical principles</strong> underlying Morse code transmission illuminate electromagnetic wave propagation, signal processing, and information theory. Radio transmission using continuous wave (CW) modulation turns carrier signal on/off creating Morse patterns. The simplicity—essentially binary amplitude modulation—requires minimal bandwidth (100-150 Hz with proper filtering) enabling highly efficient spectrum usage. Signal-to-noise ratio advantages of CW over voice arise from narrow bandwidth concentrating signal energy and allowing aggressive filtering removing noise while preserving Morse timing information. Propagation characteristics favor CW: ionospheric reflection, atmospheric noise, equipment limitations degrading voice intelligibility may still permit CW reception where trained operators extract signals barely above noise floor.</p>
                
                <p>Information theory perspective shows Morse code efficiency: common letters receiving short codes (E, T) reduces average message length following Shannon's source coding principles. Huffman coding and modern compression algorithms descend conceptually from Morse's frequency-based optimization. Error detection through redundancy (operators often repeat messages, request fills, or use prosigns confirming reception) parallels modern error correction techniques. Synchronization challenges in Morse transmission—maintaining timing alignment between sender and receiver—mirror problems in digital communications requiring clock recovery and symbol timing. Educational physics demonstrations use Morse code teaching waves, modulation, propagation, antenna theory, and electromagnetic spectrum concepts. Student experiments building telegraph systems, radio transmitters, or optical telegraph illustrate practical physics and engineering. Information theory courses reference Morse code as historical example of optimal encoding predating formal information theory development by century. Understanding physical foundations contextualizes Morse code within broader telecommunications history showing how practical solutions to communication challenges anticipated theoretical frameworks developed later, and how fundamental physics constraints shape communication system design across technological eras from mechanical telegraphs through radio to modern fiber optics and satellite communications all addressing similar challenges of reliable information transmission across distance despite noise, interference, bandwidth limitations, and physical constraints imposed by electromagnetic propagation and receiver sensitivity limits.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Morse Code in Education</strong></h2>
                <p><strong>Educational applications</strong> use Morse code teaching diverse subjects beyond telecommunications history. Mathematics lessons employ Morse demonstrating binary systems, coding theory, probability (frequency analysis of letters), and optimization problems (designing efficient encodings). Computer science courses reference Morse teaching binary representation, character encoding (ASCII, Unicode), compression algorithms, and communication protocols. Physics classes use Morse experiments demonstrating waves, sound, light, electromagnetism, and signal processing. History curricula incorporate Morse studying Industrial Revolution, communication evolution, World Wars, and technological change impacts on society.</p>
                
                <p>Language arts classes analyze Morse code structure relating to linguistics, language efficiency, and communication theory. Art projects create Morse-based visual or audio artworks exploring pattern and rhythm. Music education uses Morse rhythms teaching tempo, rhythm, and pattern recognition. STEM programs build telegraph systems, Arduino Morse devices, or radio transmitters integrating multiple disciplines. Scouting and youth programs include Morse merit badges providing hands-on communication skills. Special education employs Morse in individualized learning plans for students benefiting from alternative communication methods or structured pattern-learning activities. Homeschool curricula often include Morse code as engaging hands-on activity teaching multiple subjects simultaneously. After-school clubs and maker spaces offer Morse code activities combining history, technology, and practical skills. International competitions and awards programs motivate student learning through achievement recognition. The pedagogical value extends beyond specific Morse knowledge: critical thinking development, problem-solving practice, historical awareness, technology appreciation, and interdisciplinary connection recognition. Students unable to see direct practical relevance still gain cognitive benefits from encoding/decoding practice, pattern recognition development, and exposure to elegant historical solution demonstrating human ingenuity. Teachers value Morse as accessible technology requiring minimal equipment yet providing rich learning opportunities connecting past innovations to contemporary digital world helping students understand technological evolution and appreciate foundational principles underlying modern communication systems students use daily without understanding underlying concepts Morse code illustrates accessibly.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Morse Code Art and Creative Expression</strong></h2>
                <p><strong>Artistic applications</strong> transform Morse code from functional communication into creative medium exploring themes of meaning, translation, secrecy, and communication itself. Visual artists create paintings, sculptures, or installations incorporating Morse patterns using dots/dashes, light/dark, or sound/silence as compositional elements. Typography designers create fonts rendering text in Morse visual representations. Light art installations use Morse-controlled LEDs, projection mapping, or synchronized displays creating dynamic light shows encoding messages, poetry, or abstract patterns. Sound art employs Morse beeps, radio static, or telegraph sounds creating auditory compositions exploring rhythm, pattern, and electronic sound aesthetics.</p>
                
                <p>Performance art includes Morse-based works: dancers choreographing movement to Morse rhythms, musicians performing Morse-encoded compositions, or interactive installations where audience participation generates Morse messages affecting audio/visual outputs. Street art and graffiti incorporate Morse encodings providing hidden messages or aesthetic patterns. Jewelry designers create Morse code necklaces, bracelets, or rings encoding names, dates, or meaningful words translatable by knowledgeable wearers. Fashion designers incorporate Morse patterns into textile designs, embroidery, or garment construction. Photographers explore Morse through light painting, long-exposure captures of Morse transmissions, or conceptual series documenting telegraph equipment and operators. Poets experiment with Morse constraints creating constrained writing where syllable patterns match Morse rhythms or meanings shift through Morse translation. Digital art uses algorithmic Morse generation, data visualization representing information as Morse patterns, or interactive web experiences teaching and exploring Morse artistically. These creative appropriations demonstrate how functional systems inspire artistic innovation, with Morse code's visual and auditory distinctiveness providing rich material for exploration. Artists attracted to Morse appreciate binary simplicity contrasting complex meanings encoded, historical resonance connecting contemporary work to communication heritage, and accessibility enabling audience participation through learning and decoding activities. Creative Morse applications expand perception beyond utilitarian tool revealing aesthetic dimensions and expressive possibilities within structured communication systems suggesting art and technology share fundamental concerns with meaning, transmission, interpretation, and human connection through symbolic exchange.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Future of Morse Code</strong></h2>
                <p><strong>Future prospects</strong> for Morse code involve niche continuation rather than widespread resurgence but persistent relevance in specific contexts valuing simplicity, reliability, and cultural continuity. Amateur radio communities will maintain Morse traditions through CW enthusiasts, contests, and awards programs preserving skills and passing knowledge to new generations. Technological integration will continue: accessibility applications, IoT device status indication, educational technology, and creative digital art incorporating Morse elements. Emergency preparedness may emphasize Morse as backup communication method in disaster scenarios or infrastructure failures where robust simple systems prove valuable. Space exploration could employ Morse-inspired protocols for deep space communication where bandwidth constraints and communication delays favor efficient binary encoding.</p>
                
                <p>Military special operations might retain Morse for covert communications or as backup when sophisticated equipment fails. Maritime and aviation sectors will maintain legacy Morse code heritage even as active use declines, preserving historical knowledge and emergency backup capabilities. Cultural preservation efforts through museums, historical societies, and living history programs will ensure Morse code remains understood by future generations as important communication heritage. Education will continue using Morse teaching binary concepts, communication principles, and historical awareness. Artistic and creative applications will evolve as new mediums emerge and artists discover Morse's expressive possibilities. Rather than obsolete technology destined for extinction, Morse code represents resilient system finding renewed purposes beyond original telegraph application. The fundamental principle—efficient binary encoding of information using timing patterns—remains conceptually relevant to digital communications, information theory, and human-computer interaction. As technology increases complexity, interest in simple robust alternatives grows appealing to minimalists, preppers, hobbyists, educators, and artists valuing accessibility, reliability, and historical continuity. Morse code's sesquicentennial-plus longevity suggests technologies solving fundamental problems elegantly can persist indefinitely finding new applications and communities sustaining practice even when mainstream adoption wanes. Future generations will likely continue discovering Morse code through various pathways—learning history, pursuing ham radio, exploring accessibility tools, creating art, or appreciating elegant solutions to timeless communication challenges—ensuring this remarkable encoding system remains living tradition rather than museum curiosity, demonstrating how human ingenuity creates tools transcending original contexts to serve evolving needs across generations and technological landscapes.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Comprehensive FAQ: Morse Code Translation Questions</strong></h2>
                
                <div class="space-y-4 mt-6">
                    <div class="border-l-4 border-red-500 pl-6">
                        <p class="font-bold text-gray-800">1. What is Morse code?</p>
                        <p class="text-gray-600">Morse code is a communication system encoding text characters as standardized sequences of dots (·) and dashes (—), invented in 1830s-1840s for telegraph communication, still used in amateur radio, aviation, maritime, and emergency signaling.</p>
                    </div>

                    <div class="border-l-4 border-blue-500 pl-6">
                        <p class="font-bold text-gray-800">2. How do I translate text to Morse code?</p>
                        <p class="text-gray-600">Use online translator tools (like this one), manually reference Morse code charts mapping each letter/number to dot-dash patterns, or use mobile apps providing instant translation. Enter text and receive Morse code output.</p>
                    </div>

                    <div class="border-l-4 border-green-500 pl-6">
                        <p class="font-bold text-gray-800">3. What is SOS in Morse code?</p>
                        <p class="text-gray-600">SOS is · · · — — — · · · (three dots, three dashes, three dots), internationally recognized distress signal adopted in 1906. The pattern's distinctiveness makes it recognizable even by people unfamiliar with full Morse code.</p>
                    </div>

                    <div class="border-l-4 border-purple-500 pl-6">
                        <p class="font-bold text-gray-800">4. How long does it take to learn Morse code?</p>
                        <p class="text-gray-600">Basic recognition takes days to weeks with daily practice. Practical proficiency (5-15 words per minute) requires weeks to months. High-speed operation (25+ WPM) needs months to years. Consistent practice (15-30 minutes daily) proves most effective.</p>
                    </div>

                    <div class="border-l-4 border-orange-500 pl-6">
                        <p class="font-bold text-gray-800">5. Is Morse code still used today?</p>
                        <p class="text-gray-600">Yes, in amateur radio (CW operations), aviation navigation beacon identification, maritime emergency signaling, military special operations, accessibility technology, and hobbyist activities. Commercial telegraph use ended decades ago but specialized applications continue.</p>
                    </div>

                    <div class="border-l-4 border-pink-500 pl-6">
                        <p class="font-bold text-gray-800">6. What's the difference between dots and dashes?</p>
                        <p class="text-gray-600">Dots (dits) are short signals; dashes (dahs) are long signals equaling three dot durations. Spacing: elements within character = 1 dot duration, between characters = 3 dots, between words = 7 dots. Precise timing enables reliable interpretation.</p>
                    </div>

                    <div class="border-l-4 border-yellow-500 pl-6">
                        <p class="font-bold text-gray-800">7. Can I use Morse code for languages other than English?</p>
                        <p class="text-gray-600">Yes, International Morse Code covers Latin alphabet serving multiple languages. Extensions exist for Cyrillic, Greek, Arabic, Hebrew, Japanese kana, and other scripts. Some characters specific to certain languages have designated Morse patterns.</p>
                    </div>

                    <div class="border-l-4 border-indigo-500 pl-6">
                        <p class="font-bold text-gray-800">8. What equipment do I need to send Morse code?</p>
                        <p class="text-gray-600">Ranges from no equipment (tapping, flashing lights) to telegraph keys, radio transmitters, signal lights, sound devices, or software applications. Emergency signaling needs only ability to produce timed signals with available resources.</p>
                    </div>

                    <div class="border-l-4 border-teal-500 pl-6">
                        <p class="font-bold text-gray-800">9. How do I learn Morse code effectively?</p>
                        <p class="text-gray-600">Use Koch method (learn at full speed progressively adding characters), Farnsworth method (standard character speed with extended spacing), practice audio recognition, use mobile apps, join online communities, and practice consistently 15-30 minutes daily.</p>
                    </div>

                    <div class="border-l-4 border-cyan-500 pl-6">
                        <p class="font-bold text-gray-800">10. What is International Morse Code?</p>
                        <p class="text-gray-600">Standardized Morse system adopted globally in 1865 with consistent timing ratios and character encodings. Differs from American Morse (Railroad Morse) used historically in North American landline telegraphy with different letter codes and timing.</p>
                    </div>

                    <div class="border-l-4 border-lime-500 pl-6">
                        <p class="font-bold text-gray-800">11. Why do amateur radio operators use Morse code?</p>
                        <p class="text-gray-600">CW (continuous wave) offers minimal bandwidth, reliable long-distance communication in poor conditions, simple equipment requirements, low power effectiveness, international communication across language barriers, technical challenge enjoyment, and historical connection to radio traditions.</p>
                    </div>

                    <div class="border-l-4 border-amber-500 pl-6">
                        <p class="font-bold text-gray-800">12. Can Morse code work for accessibility?</p>
                        <p class="text-gray-600">Yes, single-switch assistive technology enables typing via Morse using minimal movement or control. Users with severe motor impairments can communicate through finger, head, eye gaze, or sip-and-puff switch activations translating Morse to text.</p>
                    </div>

                    <div class="border-l-4 border-rose-500 pl-6">
                        <p class="font-bold text-gray-800">13. How fast can people send and receive Morse code?</p>
                        <p class="text-gray-600">Beginners: 5-10 words per minute (WPM). Proficient operators: 15-25 WPM. Experts: 30-50+ WPM. Historical military and commercial operators achieved 40-60 WPM. World records exceed 75 WPM for brief periods.</p>
                    </div>

                    <div class="border-l-4 border-violet-500 pl-6">
                        <p class="font-bold text-gray-800">14. What are prosigns in Morse code?</p>
                        <p class="text-gray-600">Procedural signals combining characters into single units for operational efficiency: AR (end of message), SK (end of transmission), BT (break/separator), CQ (general call), DE (from/this is), K (invitation to transmit), etc.</p>
                    </div>

                    <div class="border-l-4 border-fuchsia-500 pl-6">
                        <p class="font-bold text-gray-800">15. How do I signal SOS in an emergency?</p>
                        <p class="text-gray-600">Produce pattern: three short signals, three long signals, three short signals (· · · — — — · · ·) using flashlight, mirror reflecting sunlight, whistle, horn, tapping, or any available signal method. Repeat pattern continuously.</p>
                    </div>

                    <div class="border-l-4 border-emerald-500 pl-6">
                        <p class="font-bold text-gray-800">16. Is Morse code difficult to learn?</p>
                        <p class="text-gray-600">Basic learning proves manageable with consistent practice. Challenge varies by learning method: memorizing visual patterns easier than developing automatic audio recognition. Modern teaching methods and apps simplify learning compared to historical intensive training programs.</p>
                    </div>

                    <div class="border-l-4 border-sky-500 pl-6">
                        <p class="font-bold text-gray-800">17. Can I use Morse code on my smartphone?</p>
                        <p class="text-gray-600">Yes, numerous translator apps available for iOS and Android. Some accessibility features include Morse keyboard option. Apps provide learning tools, practice modes, audio generation, visual displays, and translation capabilities convenient for mobile use.</p>
                    </div>

                    <div class="border-l-4 border-slate-500 pl-6">
                        <p class="font-bold text-gray-800">18. What is the history of Morse code?</p>
                        <p class="text-gray-600">Invented 1830s-1840s by Samuel Morse and Alfred Vail for telegraph communication. Revolutionized long-distance communication, standardized internationally in 1865, served critical roles in military operations, maritime safety, aviation, gradually replaced by voice and digital systems but continues in specialized applications.</p>
                    </div>

                    <div class="border-l-4 border-stone-500 pl-6">
                        <p class="font-bold text-gray-800">19. Why are common letters shorter in Morse code?</p>
                        <p class="text-gray-600">Efficiency optimization: frequently used letters (E, T) have shortest codes reducing average message length. This frequency-based design predates information theory by century but follows same optimization principles underlying modern compression algorithms.</p>
                    </div>

                    <div class="border-l-4 border-zinc-500 pl-6">
                        <p class="font-bold text-gray-800">20. How do you separate words in Morse code?</p>
                        <p class="text-gray-600">Space between elements within character = 1 dot duration; between characters = 3 dots; between words = 7 dots. In written Morse, slashes (/) often separate words. Proper spacing critical for comprehension distinguishing characters and word boundaries.</p>
                    </div>

                    <div class="border-l-4 border-neutral-500 pl-6">
                        <p class="font-bold text-gray-800">21. Can Morse code work underwater or in noisy environments?</p>
                        <p class="text-gray-600">Yes, Morse's simple on-off pattern works through various transmission media: sound underwater (divers tapping), vibration through solid materials, visual signals through murky water using lights, making it versatile for challenging communication environments where complex signals fail.</p>
                    </div>

                    <div class="border-l-4 border-gray-500 pl-6">
                        <p class="font-bold text-gray-800">22. What are Q-codes and abbreviations in Morse?</p>
                        <p class="text-gray-600">Standardized three-letter codes enabling efficient communication: QTH (location), QSL (acknowledgment), QRM (interference), QRZ (who is calling?). Abbreviations include 73 (best regards), 88 (love and kisses), CUL (see you later) creating operator shorthand conventions.</p>
                    </div>

                    <div class="border-l-4 border-red-600 pl-6">
                        <p class="font-bold text-gray-800">23. Is Morse code encryption secure?</p>
                        <p class="text-gray-600">Morse itself isn't encryption—it's encoding readable by anyone knowing the system. However, encrypted text can be transmitted via Morse. Historical military used one-time pads creating cryptographically secure Morse transmissions. Modern encryption applied before Morse translation provides security.</p>
                    </div>

                    <div class="border-l-4 border-blue-600 pl-6">
                        <p class="font-bold text-gray-800">24. Where can I practice Morse code?</p>
                        <p class="text-gray-600">Online trainers, mobile apps (Koch/Farnsworth methods), amateur radio practice nets, YouTube tutorials, interactive websites, software simulators, local radio clubs, and online communities provide diverse practice resources for beginners through advanced operators.</p>
                    </div>

                    <div class="border-l-4 border-green-600 pl-6">
                        <p class="font-bold text-gray-800">25. Will learning Morse code help me in emergencies?</p>
                        <p class="text-gray-600">Yes, knowing basic distress signals (especially SOS) and improvised signaling methods provides valuable survival skill when standard communications fail. Even basic knowledge potentially saves lives in extreme situations requiring emergency signal transmission using available resources.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Tab switching functionality
        const textToMorseTab = document.getElementById('textToMorseTab');
        const morseToTextTab = document.getElementById('morseToTextTab');
        const directionInput = document.getElementById('direction');

        textToMorseTab.addEventListener('click', () => {
            directionInput.value = 'text_to_morse';
            textToMorseTab.classList.add('active-tab');
            textToMorseTab.classList.remove('text-gray-600');
            morseToTextTab.classList.remove('active-tab');
            morseToTextTab.classList.add('text-gray-600');
            document.querySelector('label[for="input"]').textContent = 'Enter Text:';
        });

        morseToTextTab.addEventListener('click', () => {
            directionInput.value = 'morse_to_text';
            morseToTextTab.classList.add('active-tab');
            morseToTextTab.classList.remove('text-gray-600');
            textToMorseTab.classList.remove('active-tab');
            textToMorseTab.classList.add('text-gray-600');
            document.querySelector('label[for="input"]').textContent = 'Enter Morse Code:';
        });

        // Copy to clipboard function
        function copyToClipboard() {
            const output = document.getElementById('output');
            output.select();
            document.execCommand('copy');
            
            // Show feedback
            const copyBtn = document.querySelector('.copy-btn');
            copyBtn.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            `;
            copyBtn.classList.remove('bg-blue-500');
            copyBtn.classList.add('bg-green-500');
            
            setTimeout(() => {
                copyBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                    </svg>
                `;
                copyBtn.classList.add('bg-blue-500');
                copyBtn.classList.remove('bg-green-500');
            }, 2000);
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
