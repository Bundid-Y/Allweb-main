import os
import re

base_dir = r"c:\xampp\htdocs\Allweb-main\tnb"
sub_dirs = ["about", "main", "service"]

injection_code = """
    <!-- Google Fonts: Inter (EN) + Sarabun (TH) + Noto Sans SC (ZH) + Noto Sans JP (JP) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sarabun:wght@300;400;500;600;700&family=Noto+Sans+SC:wght@400;500;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <script src="../js/i18n.js" defer></script>
    <script src="../js/script.js?v=<?php echo time(); ?>" defer></script>
"""

def fix_file(filepath):
    try:
        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()

        # Remove existing script tags for script.js and i18n.js
        content = re.sub(r'<script[^>]*src="[^"]*script\.js[^"]*"[^>]*></script>\s*', '', content)
        content = re.sub(r'<script[^>]*src="[^"]*i18n\.js[^"]*"[^>]*></script>\s*', '', content)
        
        # Remove existing Google fonts for Inter and Sarabun to avoid duplicates, although index.php has more fonts, it's safer to just let the injection run
        # Find the CSS linking tag
        css_pattern = r'<link[^>]*rel="stylesheet"[^>]*href="[^"]*style\.css[^"]*"[^>]*>\s*'
        
        if re.search(css_pattern, content):
            content = re.sub(css_pattern, injection_code, content)
        else:
            # If no style.css link is found, insert it before </head>
            content = re.sub(r'</head>', injection_code + '\n</head>', content)

        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)
        print(f"Fixed {filepath}")
    except Exception as e:
        print(f"Error fixing {filepath}: {e}")

for subdir in sub_dirs:
    dir_path = os.path.join(base_dir, subdir)
    if os.path.exists(dir_path):
        for file in os.listdir(dir_path):
            if file.endswith(".php"):
                fix_file(os.path.join(dir_path, file))
