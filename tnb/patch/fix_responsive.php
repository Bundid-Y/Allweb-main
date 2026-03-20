<?php
// 1. Inject responsive CSS into style.css after line 7626
$cssFile = 'c:/xampp/htdocs/Allweb-main/tnb/css/style.css';
$content = file_get_contents($cssFile);

$responsiveCSS = '

/* ----- Back-to-Services & Service Pages Responsive Fixes ----- */
/* Tablet: reduce negative pull-up */
@media (max-width: 992px) {
  .back-to-services {
    margin-top: -150px !important;
    padding: 30px 20px !important;
  }
}

/* Mobile: completely remove negative margin to prevent overlap */
@media (max-width: 767px) {
  .back-to-services {
    margin-top: 0 !important;
    padding: 30px 20px !important;
  }

  .back-to-services-btn {
    padding: 12px 24px !important;
    font-size: 14px !important;
    width: 100%;
    justify-content: center !important;
  }

  .svc-hero {
    margin-top: 70px;
    padding-top: 20px;
  }

  .feat-cards {
    margin-top: 0;
    margin-bottom: 0;
  }
}

/* Small mobile */
@media (max-width: 480px) {
  .svc-hero {
    margin-top: 60px;
    padding-top: 15px;
  }

  .back-to-services {
    margin-top: 0 !important;
    padding: 20px 15px !important;
  }

  .back-to-services-btn {
    padding: 10px 20px !important;
    font-size: 13px !important;
  }
}

';

// Insert the responsive CSS BEFORE the Truck Types section
$marker = '.trucktypes-interactive {';
$pos = strpos($content, $marker);
if ($pos !== false) {
    // Find the comment line above it
    $commentStart = strrpos(substr($content, 0, $pos), '/*');
    if ($commentStart !== false) {
        $content = substr($content, 0, $commentStart) . $responsiveCSS . substr($content, $commentStart);
        file_put_contents($cssFile, $content);
        echo "CSS responsive fixes injected successfully!\n";
    } else {
        echo "Could not find comment marker above .trucktypes-interactive\n";
    }
} else {
    echo "Could not find .trucktypes-interactive marker\n";
}

// 2. Fix all 6 service PHP files - remove inline margin-top from back-to-services div
$serviceFiles = [
    'c:/xampp/htdocs/Allweb-main/tnb/service/import-export.php',
    'c:/xampp/htdocs/Allweb-main/tnb/service/domestic.php',
    'c:/xampp/htdocs/Allweb-main/tnb/service/shuttle.php',
    'c:/xampp/htdocs/Allweb-main/tnb/service/container.php',
    'c:/xampp/htdocs/Allweb-main/tnb/service/nationwide.php',
    'c:/xampp/htdocs/Allweb-main/tnb/service/parking.php',
];

foreach ($serviceFiles as $file) {
    if (!file_exists($file)) {
        echo "File not found: $file\n";
        continue;
    }
    $html = file_get_contents($file);
    // Replace the inline style completely - just keep the class
    $html = preg_replace(
        '/(<div\s+class="back-to-services"\s+)style="[^"]*"/',
        '$1',
        $html
    );
    file_put_contents($file, $html);
    echo "Fixed inline style in: " . basename($file) . "\n";
}

echo "\nAll fixes applied!\n";
