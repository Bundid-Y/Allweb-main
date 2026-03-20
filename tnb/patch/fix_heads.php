<?php
$base_dir = "c:/xampp/htdocs/Allweb-main/tnb";
$sub_dirs = ["about", "main", "service"];

$injection_code = <<<HTML
    <!-- Google Fonts: Inter (EN) + Sarabun (TH) + Noto Sans SC (ZH) + Noto Sans JP (JP) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sarabun:wght@300;400;500;600;700&family=Noto+Sans+SC:wght@400;500;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <script src="../js/i18n.js" defer></script>
    <script src="../js/script.js?v=<?php echo time(); ?>" defer></script>
HTML;

foreach ($sub_dirs as $subdir) {
    $dir_path = $base_dir . '/' . $subdir;
    if (is_dir($dir_path)) {
        $files = glob($dir_path . '/*.php');
        foreach ($files as $file) {
            $content = file_get_contents($file);
            if ($content !== false) {
                // Remove existing scripts
                $content = preg_replace('/<script[^>]*src="[^"]*script\.js[^"]*"[^>]*><\/script>\s*/', '', $content);
                $content = preg_replace('/<script[^>]*src="[^"]*i18n\.js[^"]*"[^>]*><\/script>\s*/', '', $content);
                
                // Replace CSS link
                $css_pattern = '/<link[^>]*rel="stylesheet"[^>]*href="[^"]*style\.css[^"]*"[^>]*>\s*/';
                
                if (preg_match($css_pattern, $content)) {
                    $content = preg_replace($css_pattern, "\n" . $injection_code . "\n", $content);
                } else {
                    $content = str_replace('</head>', "\n" . $injection_code . "\n</head>", $content);
                }
                
                file_put_contents($file, $content);
                echo "Fixed " . $file . "\n";
            }
        }
    }
}
?>
