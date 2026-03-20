<?php
$lines = file("c:/xampp/htdocs/Allweb-main/tnb/css/style.css");
$queries = ['.page-branches', '.page-contact', '.tnb-news-card'];

foreach ($lines as $ln => $line) {
    foreach ($queries as $q) {
        // Handle utf-8 to utf-16 weirdness if any, but file() should read bytes
        if (strpos($line, $q) !== false) {
            echo "Line " . ($ln + 1) . ": " . trim($line) . "\n";
        }
    }
}
?>
