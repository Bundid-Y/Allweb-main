<?php
$file = 'c:\\xampp\\htdocs\\Allweb-main\\tnb\\css\\style.css';
$content = file_get_contents($file);

$search1 = "tnb-home-slider";
$search2 = "tnb-news-card";

echo "File size: " . strlen($content) . " bytes\n";
echo "tnb-home-slider found at: " . strpos($content, $search1) . "\n";
echo "tnb-news-card found at: " . strpos($content, $search2) . "\n";

// Extract block for tnb-news-card
$pos = strpos($content, ".tnb-news-card");
if ($pos !== false) {
    echo "=== tnb-news-card block ===\n";
    echo substr($content, $pos, 500);
}

// Extract block for tnb-home-slider::before
$pos2 = strpos($content, ".tnb-home-slider::before");
if ($pos2 !== false) {
    echo "\n=== tnb-home-slider::before block ===\n";
    echo substr($content, $pos2, 300);
}
