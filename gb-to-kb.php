<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'GB to KB Converter 2026 | Data Storage Conversion Tool | Free Calculator';
$description = 'Convert gigabytes to kilobytes instantly with our 2026 accurate data storage converter. Perfect for file size calculations and storage planning.';
$keywords = 'gb to kb converter 2026, data storage conversion calculator, gigabyte kilobyte converter, file size calculator, storage calculator';
$canonical = 'https://www.thiyagi.com/gb-to-kb';

$meta_tags = '<title>' . htmlspecialchars($title) . '</title>' . "\n";
$meta_tags .= '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
$meta_tags .= '<meta name="keywords" content="' . htmlspecialchars($keywords) . '">' . "\n";

// Replace the canonical URL and add our meta tags
$header_content = str_replace(
    $meta_tags,
    $header_content
);

echo $header_content;
?>

<div class="min-h-screen bg-gradient-to-br from-violet-50 to-violet-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-violet-600 text-white rounded-full mb-6">
                <i class="fas fa-hdd text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Gigabyte to Kilobyte Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert gigabytes to kilobytes instantly with our precise digital storage converter. Perfect for file size calculations and data management.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Gigabytes (GB)</label>
                    <input type="number" 
                           id="gbInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                           placeholder="Enter gigabytes"
                           step="any">
                </div>

                <!-- Arrow -->
                <div class="flex justify-center">
                    <div class="bg-violet-100 p-3 rounded-full">
                        <i class="fas fa-arrow-right text-violet-600 text-xl"></i>
                    </div>
                </div>

                <!-- Output -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Kilobytes (KB)</label>
                    <div class="relative">
                        <input type="text" 
                               id="kbResult" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-medium"
                               readonly>
                        <button onclick="copyResult()" 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-violet-600">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Live Conversion Display -->
            <div class="mt-8 p-4 bg-violet-50 rounded-lg">
                <div class="text-center">
                    <span class="text-2xl font-bold text-violet-800" id="liveConversion">1 GB = 1,000,000 KB</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Gigabytes</h3>
                <p class="text-gray-600 mb-4">
                    A gigabyte (GB) is a unit of digital storage equal to 1,000 megabytes in decimal notation 
                    or 1,024 megabytes in binary notation. Commonly used for file sizes and storage capacity.
                </p>
                <div class="bg-violet-50 p-3 rounded-lg">
                    <p class="text-sm text-violet-800"><strong>1 GB = 1,000 MB (decimal)</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Kilobytes</h3>
                <p class="text-gray-600 mb-4">
                    A kilobyte (KB) is a unit of digital storage equal to 1,000 bytes in decimal notation. 
                    Often used for small file sizes and data transfer measurements.
                </p>
                <div class="bg-violet-50 p-3 rounded-lg">
                    <p class="text-sm text-violet-800"><strong>1 KB = 1,000 bytes (decimal)</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common GB to KB Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-violet-50 rounded-lg">
                    <div class="font-bold text-violet-800">1 GB</div>
                    <div class="text-sm text-gray-600">1,000,000 KB</div>
                </div>
                <div class="text-center p-3 bg-violet-50 rounded-lg">
                    <div class="font-bold text-violet-800">5 GB</div>
                    <div class="text-sm text-gray-600">5,000,000 KB</div>
                </div>
                <div class="text-center p-3 bg-violet-50 rounded-lg">
                    <div class="font-bold text-violet-800">10 GB</div>
                    <div class="text-sm text-gray-600">10,000,000 KB</div>
                </div>
                <div class="text-center p-3 bg-violet-50 rounded-lg">
                    <div class="font-bold text-violet-800">100 GB</div>
                    <div class="text-sm text-gray-600">100,000,000 KB</div>
                </div>
            </div>
        </div>

        <!-- Binary vs Decimal -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Binary vs Decimal Notation</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Decimal (Base 10)</h4>
                    <p class="text-sm text-blue-700 mb-2">Used by manufacturers and this converter</p>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>• 1 KB = 1,000 bytes</li>
                        <li>• 1 MB = 1,000 KB</li>
                        <li>• 1 GB = 1,000 MB</li>
                    </ul>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">Binary (Base 2)</h4>
                    <p class="text-sm text-purple-700 mb-2">Used by operating systems</p>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>• 1 KiB = 1,024 bytes</li>
                        <li>• 1 MiB = 1,024 KiB</li>
                        <li>• 1 GiB = 1,024 MiB</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">File Management</h4>
                    <p class="text-sm text-green-700">Understanding file sizes and storage requirements</p>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Data Transfer</h4>
                    <p class="text-sm text-blue-700">Calculating download times and bandwidth usage</p>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">Storage Planning</h4>
                    <p class="text-sm text-purple-700">Determining storage capacity needs</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Storage Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="kb-to-gb.php" class="p-3 bg-violet-50 rounded-lg hover:bg-violet-100 transition-colors">
                    <div class="text-sm font-medium text-violet-800">KB to GB</div>
                </a>
                <a href="gb-to-mb.php" class="p-3 bg-violet-50 rounded-lg hover:bg-violet-100 transition-colors">
                    <div class="text-sm font-medium text-violet-800">GB to MB</div>
                </a>
                
                <a href="byte-to-gigabyte.php" class="p-3 bg-violet-50 rounded-lg hover:bg-violet-100 transition-colors">
                    <div class="text-sm font-medium text-violet-800">Byte to GB</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertGBToKB() {
    const gb = parseFloat(document.getElementById('gbInput').value);
    
    if (isNaN(gb) || gb < 0) {
        document.getElementById('kbResult').value = '';
        document.getElementById('liveConversion').textContent = '1 GB = 1,000,000 KB';
        return;
    }
    
    // 1 GB = 1,000,000 KB (decimal notation)
    const kb = gb * 1000000;
    
    document.getElementById('kbResult').value = kb.toLocaleString();
    document.getElementById('liveConversion').textContent = `${gb} GB = ${kb.toLocaleString()} KB`;
}

function copyResult() {
    const result = document.getElementById('kbResult');
    result.select();
    document.execCommand('copy');
    
    // Show success message
    const button = event.target;
    const original = button.innerHTML;
    button.innerHTML = '<i class="fas fa-check text-green-600"></i>';
    setTimeout(() => {
        button.innerHTML = original;
    }, 1000);
}

// Add event listener for real-time conversion
document.getElementById('gbInput').addEventListener('input', convertGBToKB);

// Initialize with default conversion
convertGBToKB();
</script>

<?php include 'footer.php'; ?>
