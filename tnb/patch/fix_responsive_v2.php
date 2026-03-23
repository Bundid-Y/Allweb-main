<?php
$cssFile = 'c:/xampp/htdocs/Allweb-main/tnb/css/style.css';
$content = file_get_contents($cssFile);

// 1. Replace the old responsive block (lines ~7630-7680) with a comprehensive one
$oldBlock = '/* ----- Back-to-Services & Service Pages Responsive Fixes ----- */
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
}';

$newBlock = '/* ----- Service Pages: Comprehensive Responsive Fixes ----- */
/* Prevent horizontal overflow on all service pages */
.svc-hero,
.feat-cards,
.back-to-services {
  overflow-x: hidden;
  max-width: 100%;
  box-sizing: border-box;
}

/* Tablet (max 992px) */
@media (max-width: 992px) {
  .back-to-services {
    margin-top: -100px !important;
    padding: 30px 20px !important;
  }

  .feat-cards {
    margin-top: -40px;
  }

  .svc-hero .svc-row,
  .svc-hero .svc-row--reverse {
    gap: 24px;
  }

  .svc-img-col {
    min-width: 0;
    flex: 1 1 100%;
  }

  .svc-text-col {
    min-width: 0;
    flex: 1 1 100%;
  }

  .svc-image-wrapper .svc-shape {
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
  }

  .svc-shape--left {
    left: 0 !important;
  }

  .svc-shape--right {
    right: 0 !important;
  }
}

/* Mobile (max 767px) */
@media (max-width: 767px) {
  /* Hero section */
  .svc-hero {
    margin-top: 70px;
    padding: 20px 15px 0;
  }

  .svc-hero .svc-row,
  .svc-hero .svc-row--reverse {
    flex-direction: column;
    gap: 20px;
  }

  .svc-img-col {
    min-width: 0;
    width: 100%;
    flex: none;
  }

  .svc-text-col {
    min-width: 0;
    width: 100%;
    flex: none;
  }

  .svc-text-col h1 {
    font-size: 24px;
    line-height: 1.3;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  .svc-text-col h2 {
    font-size: 18px;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  .svc-text-col .details-desc {
    font-size: 14px;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  /* Image shape fix - prevent horizontal overflow */
  .svc-image-wrapper {
    padding: 10px;
    overflow: hidden;
  }

  .svc-image-wrapper .svc-shape {
    display: none;
  }

  .svc-image-wrapper img {
    height: 250px;
    border-radius: 12px;
  }

  /* Feature cards */
  .feat-cards {
    margin-top: 0 !important;
    margin-bottom: 0;
    padding: 20px 15px;
  }

  .feat-cards__grid {
    grid-template-columns: 1fr;
    gap: 1rem;
    padding: 0;
  }

  .feat-cards__item {
    margin: 0;
  }

  .feat-cards__item:hover {
    transform: none;
  }

  /* Back to Services button - NO negative margin */
  .back-to-services {
    margin-top: 20px !important;
    padding: 20px 15px !important;
  }

  .back-to-services-btn {
    padding: 12px 24px !important;
    font-size: 14px !important;
    width: 100%;
    justify-content: center !important;
    box-sizing: border-box;
    word-wrap: break-word;
    overflow-wrap: break-word;
    white-space: normal;
    text-align: center;
  }
}

/* Small mobile (max 480px) */
@media (max-width: 480px) {
  .svc-hero {
    margin-top: 60px;
    padding: 15px 10px 0;
  }

  .svc-text-col h1 {
    font-size: 20px;
  }

  .svc-text-col h2 {
    font-size: 16px;
  }

  .svc-text-col .details-desc {
    font-size: 13px;
  }

  .svc-image-wrapper img {
    height: 200px;
  }

  .feat-cards {
    padding: 15px 10px;
  }

  .back-to-services {
    margin-top: 15px !important;
    padding: 15px 10px !important;
  }

  .back-to-services-btn {
    padding: 10px 16px !important;
    font-size: 13px !important;
  }
}';

$pos = strpos($content, $oldBlock);
if ($pos !== false) {
  $content = str_replace($oldBlock, $newBlock, $content);
  file_put_contents($cssFile, $content);
  echo "SUCCESS: Replaced old responsive block with comprehensive fixes!\n";
}
else {
  echo "WARNING: Could not find old responsive block. Trying to append...\n";
  // Try to find just the marker
  $marker = '.trucktypes-interactive {';
  $mpos = strpos($content, $marker);
  if ($mpos !== false) {
    $commentStart = strrpos(substr($content, 0, $mpos), '/*');
    if ($commentStart !== false) {
      $content = substr($content, 0, $commentStart) . "\n" . $newBlock . "\n\n" . substr($content, $commentStart);
      file_put_contents($cssFile, $content);
      echo "SUCCESS: Injected comprehensive responsive fixes before trucktypes section.\n";
    }
  }
}

echo "\nDone!\n";
