<?php
$css_file = 'c:\\xampp\\htdocs\\Allweb-main\\tnb\\css\\style.css';
if (!file_exists($css_file)) die("Error: $css_file not found.");

$patch = "
/* =========================================
   Blue Background Sharp Corners Patch - Additional Fixes 2
   ========================================= */
.tnb-news-card {
    border-radius: 12px !important;
    overflow: hidden !important;
}

.tnb-home-slider::before,
.tnb-home-slider::after,
.tnb-panel__content,
.tnb-panel__content-col {
    border-radius: 12px !important;
}

/* For clip-path elements, we add a generic border-radius in case they are ever changed to normal boxes */
.tnb-home-slider::before {
    border-radius: 12px !important;
}
";

file_put_contents($css_file, "\n" . $patch . "\n", FILE_APPEND);
echo "Patch 2 applied.\n";
