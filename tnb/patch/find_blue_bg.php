<?php
$css_file = 'c:\\xampp\\htdocs\\Allweb-main\\tnb\\css\\style.css';
$content = file_get_contents($css_file);

// A simple regex to find blocks
preg_match_all('/([^{]+)\{([^}]+)\}/is', $content, $matches, PREG_SET_ORDER);

$blue_keywords = [
    '#0a2260', '#0d2d6b', '#1a4896', '#07183d', '#0b5ed7', '#0d6efd',
    '#0056b3', '#004085', 'blue', 'var(--primary', 'var(--blue'
];

echo "Classes with potential blue backgrounds:\n";
$found = [];

foreach ($matches as $match) {
    $selector = trim($match[1]);
    $rules = $match[2];

    // check if this block defines a background
    if (preg_match('/background(-color)?\s*:[^;]+;/i', $rules, $bg_match)) {
        $bg_val = strtolower($bg_match[0]);
        // check if it contains a blue keyword
        $is_blue = false;
        foreach ($blue_keywords as $bk) {
            if (strpos($bg_val, $bk) !== false) {
                $is_blue = true;
                break;
            }
        }

        if ($is_blue && strpos($selector, '@') === false) {
            // Check if it already has border-radius
            $has_br = preg_match('/border-radius\s*:/i', $rules);
            $found[] = [
                'selector' => $selector,
                'bg' => trim($bg_match[0]),
                'has_border_radius' => $has_br
            ];
        }
    }
}

// Print uniquely
$unique = [];
foreach ($found as $f) {
    $sel = preg_replace('/\s+/', ' ', $f['selector']);
    if (!isset($unique[$sel])) {
        $unique[$sel] = $f;
    }
}

foreach ($unique as $sel => $f) {
    echo $sel . " -> " . $f['bg'] . " | Has BR? " . ($f['has_border_radius'] ? 'Yes' : 'No') . "\n";
}
