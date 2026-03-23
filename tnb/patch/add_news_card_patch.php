<?php
$css_file = 'c:\\xampp\\htdocs\\Allweb-main\\tnb\\css\\style.css';
if (!file_exists($css_file)) die("Error: $css_file not found.");

$patch = "\n/* =========================================\n   Blue Background Sharp Corners Patch - Additional Fixes (Iteration 4)\n   ========================================= */\n";
$patch .= ".tnb-news-card {\n    border-radius: 12px !important;\n}\n";
$patch .= ".tnb-home-slider {\n    border-radius: 12px;\n}\n";
// Sometimes the ::before is a sharp clip-path but we can't border-radius a clip-path easily.
// Instead we ensure the container hides overflow or has rounded corners if it's boxed.
// NOTE: We only add rounded corners to the container itself if it's not edge-to-edge. If it is edge-to-edge, the user might be referring to the panel col.
$patch .= ".tnb-panel__content-col {\n    border-radius: 12px 0 0 12px;\n}\n";
$patch .= ".tnb-home-slider::before {\n    border-bottom-right-radius: 12px;\n    border-top-right-radius: 12px;\n}\n";

// Other slider elements that might be blue squares
$patch .= ".card-ui-header {\n    border-radius: 12px;\n}\n";

file_put_contents($css_file, $patch, FILE_APPEND);
echo "Appended additional border-radius fixes.\n";
