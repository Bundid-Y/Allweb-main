<?php
$css_file = 'c:\\xampp\\htdocs\\Allweb-main\\tnb\\css\\style.css';

if (!file_exists($css_file)) {
    die("Error: $css_file not found.");
}

$patch = "
/* =========================================
   Blue Background Sharp Corners Patch
   ========================================= */

/* Decorative background shapes (typically placed behind images or text) */
.details-box:after,
.content-section.section-partners::after,
.content-section.section-products::after,
.shape-angle-1:after,
.shape-angle-2:after,
.shape-angle-3:after,
.shape-angle-4:after,
.shape-angle-5:after,
.branch_img_container:after,
.branch_subtitle:after,
.branch_img_container_right:after,
.partners-page-wrapper .red-shape-bg,
.partners-page-wrapper .red-block,
.page-technology .tech_box_main:after,
.page-technology .tech_subtitle:after,
.page-technology .tech_box_main_3:after,
.svc-image-wrapper .svc-shape,
.svc-feature__img-wrap .svc-shape,
.page-company .company-image-wrap::before,
.page-expertise .expertise-image-wrap::before,
.page-vision .vision-image-wrap::before,
.vision-page-wrapper .vision-image-container::before {
    border-radius: 12px;
}

/* Lines and smaller geometric shapes */
.svc-divider,
.tnb-home-slider .tnb-slider-nav:hover {
    border-radius: 8px;
}

/* Specific UI blocks with blue background */
.tnb-home-slider .tnb-panel__img-col {
    /* Only round outside corners so it fits with the panel */
    border-radius: 0 12px 12px 0;
}

/* Ensure mobile stacking rounds all corners */
@media (max-width: 768px) {
    .tnb-home-slider .tnb-panel__img-col {
        border-radius: 12px;
    }
}
";

// Avoid duplicating
$content = file_get_contents($css_file);
if (strpos($content, 'Blue Background Sharp Corners Patch') === false) {
    file_put_contents($css_file, "\n" . $patch . "\n", FILE_APPEND);
    echo "Successfully appended Blue Background Patch.";
} else {
    echo "Patch already exists.";
}
