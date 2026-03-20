<?php
$css = file_get_contents("c:/xampp/htdocs/Allweb-main/tnb/css/style.css");

// Remove comments
$css = preg_replace('!/\*.*?\*/!s', '', $css);
// Remove newlines and tabs
$css = str_replace(array("\r\n", "\r", "\n", "\t"), '', $css);

// Extract all blocks: selector { rules }
preg_match_all('/([^{]+)\{([^}]*)\}/', $css, $matches);

$selectors = $matches[1];
$selector_counts = array();
$duplicates = array();

foreach ($selectors as $selector) {
    // Clean up selector
    $selector = trim($selector);
    // Ignore media queries for this simple count
    if (strpos($selector, '@media') === 0 || strpos($selector, '@keyframes') === 0 || strpos($selector, '0%') !== false) {
        continue; // rough skip
    }
    
    if (!isset($selector_counts[$selector])) {
        $selector_counts[$selector] = 0;
    }
    $selector_counts[$selector]++;
}

arsort($selector_counts);

$count = 0;
echo "Top 30 duplicated CSS selectors:\n";
foreach ($selector_counts as $selector => $times) {
    if ($times > 1) {
        echo "- " . $selector . " : " . $times . " times\n";
        $count++;
    }
    if ($count >= 30) break;
}
?>
