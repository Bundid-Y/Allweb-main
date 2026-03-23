<?php
$file = 'c:\\xampp\\htdocs\\Allweb-main\\tnb\\css\\style.css';
$content = file_get_contents($file);

$search1 = ".tnb-panel__content-col";

echo "File size: " . strlen($content) . " bytes\n";
echo "tnb-panel__content-col found at: " . strpos($content, $search1) . "\n";

// Extract block
$pos = strpos($content, $search1);
if ($pos !== false) {
    echo "=== tnb-panel__content-col ===\n";
    echo substr($content, $pos, 800);
}
