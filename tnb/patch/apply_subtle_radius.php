<?php
$css_file = 'c:\\xampp\\htdocs\\Allweb-main\\tnb\\css\\style.css';

if (!file_exists($css_file)) {
    die("Error: $css_file not found.");
}

$content = file_get_contents($css_file);

// 1. Remove previous global updates cleanly if they exist
$marker = '/* =========================================
   Global Rounded Corners Update';

$pos = strpos($content, $marker);
if ($pos !== false) {
    // Cut the string before the marker
    $content = substr($content, 0, $pos);
}

// Write the cleaned content back so we can process lines
file_put_contents($css_file, $content);

$lines = file($css_file);
$new_lines = [];
$modified_count = 0;

foreach ($lines as $line) {
    if (stripos($line, 'border-radius:') !== false) {
        // Skip existing heavy rounds or circles to maintain layout
        if (strpos($line, '50%') !== false || strpos($line, '100%') !== false || strpos($line, '100px') !== false || strpos($line, '999px') !== false || strpos($line, '55px') !== false || strpos($line, '49px') !== false) {
            $new_lines[] = $line;
            continue;
        }

        $original_line = $line;

        // Base case: sharp corner -> soft corner (8px)
        if (preg_match('/border-radius:\s*0\s*(?:px)?\s*(!important)?\s*;/i', $line)) {
            $line = preg_replace('/(border-radius:\s*)0\s*(?:px)?/i', '${1}8px', $line);
        } else {
            // Find existing values and conservatively increase them
            $parts = explode('border-radius:', $line, 2);
            $prefix = $parts[0];
            $suffix = $parts[1];

            if (strpos($suffix, ';') !== false) {
                $semi_parts = explode(';', $suffix, 2);
                $val_part = $semi_parts[0];
                $rest = $semi_parts[1];

                $new_val_part = preg_replace_callback('/(\d+(?:\.\d+)?)(px|em|rem|%)?/', function($matches) {
                    $num_str = $matches[1];
                    $unit = isset($matches[2]) ? $matches[2] : '';

                    if (strpos($num_str, '.') !== false) {
                        $n = floatval($num_str);
                    } else {
                        $n = intval($num_str);
                    }

                    if ($n == 0) {
                        return $n . $unit; // Preserve 0 in multi-values (e.g. 10px 10px 0 0)
                    }

                    if ($unit === 'px' || $unit === '') {
                        if ($n <= 6) $n = 8;
                        elseif ($n > 6 && $n < 12) $n = 12;
                        // anything > 12 we just leave it to not break UI or go too aggressive
                        return intval($n) . "px";
                    } elseif ($unit === 'rem' || $unit === 'em') {
                        if ($n < 0.5) $n = 0.5;
                        elseif ($n >= 0.5 && $n < 1) $n = 0.8;
                        return $n . $unit;
                    }
                    return $matches[0];
                }, $val_part);

                $line = $prefix . "border-radius:" . $new_val_part . ";" . $rest;
            }
        }

        if ($line !== $original_line) {
            $modified_count++;
        }
        $new_lines[] = $line;
    } else {
        $new_lines[] = $line;
    }
}

// Append subtle global rounded rules targeting various elements
$global_rules = "

/* =========================================
   Global Rounded Corners Update (Subtle)
   ========================================= */

/* Small Elements (Inputs, Selects, Buttons) */
input:not([type=\"checkbox\"]):not([type=\"radio\"]), 
textarea, 
select,
button:not(.close):not(.navbar-toggler):not(.splide__arrow):not(.btn-close), 
.btn, 
.button,
.back-to-services-btn,
a.btn {
    border-radius: 8px !important;
}

/* Medium & Large Elements (Cards, Images, Modals, Wrappers) */
img:not(.no-radius), 
.thumbnail, 
.avatar,
.card, 
.box, 
.service-card, 
.partner-card, 
.truck-card, 
.modal-content, 
.popup, 
.dropdown-menu, 
.tnb-panel__content, 
.container-box,
.feat-cards__item,
.trucktypes-interactive,
.truck-card__img-container,
.about-mission,
.vision-box,
.custom-panel,
.service-box,
.contact-form-wrapper {
    border-radius: 12px;
}

/* Ensure inner images naturally adhere without escaping custom cards */
.feat-cards__item img, .truck-card__img-container img, .service-card img {
    border-radius: 12px 12px 0 0;
}
";

$new_lines[] = $global_rules;

file_put_contents($css_file, implode("", $new_lines));

echo "Successfully applied subtle border-radius to style.css. Modified $modified_count existing border-radius definitions and appended comprehensive global fallback.\n";
