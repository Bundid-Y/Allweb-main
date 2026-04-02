<?php $base = isset($depth) ? $depth : "../"; ?>
<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Koch Packaging and Packing Services Co.,Ltd</title>
    <meta name="description"
        content="Smart, Fast, and Sustainable Solutions สำหรับอุตสาหกรรมยานยนต์ในประเทศไทย - บริการบรรจุภัณฑ์และคลังสินค้าครบวงจร" />

    <!-- Google SEO -->
    <meta name="robots" content="index, follow" />


    <!-- Facebook Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="th_TH" />
    <meta property="og:site_name" content="KOCH Packaging and Packing Services Co.,Ltd" />
    <meta property="og:title" content="ความเชี่ยวชาญของเรา - KOCH Packaging and Packing Services Co.,Ltd" />
    <meta property="og:description"
        content="ความเชี่ยวชาญของ KOCH - ยกระดับการจัดการซัพพลายเชนสู่อนาคต ด้วยความเชี่ยวชาญระดับมืออาชีพ" />

    <meta property="og:image"
        content="https://koch-packaging-services.com/scr/assets/carousel/company/Gemini_Generated_Image_o9ab0wo9.png" />


    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $base; ?>img/company_logo/logo 2.png" />

    <!-- Google Fonts: Inter (EN) + Sarabun (TH) + Noto Sans SC (ZH) + Noto Sans JP (JP) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sarabun:wght@300;400;500;600;700&family=Noto+Sans+SC:wght@400;500;700&family=Noto+Sans+JP:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="<?php echo $base; ?>css/style.css">
    <script>window.KOCH_DEPTH = '<?php echo $base; ?>';</script>
    <script src="<?php echo $base; ?>js/i18n.js" defer></script>
    <script src="<?php echo $base; ?>js/script.js" defer></script>
</head>

<body>

    <header class="header" id="header">
        <nav class="nav">
            <!-- Logo -->
            <a href="<?php echo $base; ?>index.php" class="logo"
                style="display:flex; align-items:center; gap:10px; text-decoration:none;">
                <img src="<?php echo $base; ?>img/company_logo/logo 2.png" alt="KOCH"
                    onerror="this.style.display='none'">
                <span class="logo-text"
                    style="font-weight:750; font-size:1.5rem; color:#0e2a47; letter-spacing:0px;">KOCH</span>
            </a>

            <!-- Navigation Menu -->
            <div class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <!-- Dropdown 1: Services -->
                    <li class="nav-item dropdown-item">
                        <div class="nav-link dropdown-toggle"><span data-i18n="nav.services">บริการของเรา</span> <span
                                class="arrow">▼</span></div>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $base; ?>service/development.php" class="dropdown-link"
                                    data-i18n="nav_services.development">บริการออกแบบและพัฒนาบรรจุภัณฑ์ครบวงจร</a></li>
                            <li><a href="<?php echo $base; ?>service/supply_management.php" class="dropdown-link"
                                    data-i18n="nav_services.supply">การจัดการการจัดหาบรรจุภัณฑ์</a></li>
                            <li><a href="<?php echo $base; ?>service/warehouse.php" class="dropdown-link"
                                    data-i18n="nav_services.warehouse">การจัดการคลังสินค้าและการดำเนินงาน</a></li>
                            <li><a href="<?php echo $base; ?>service/transportation.php" class="dropdown-link"
                                    data-i18n="nav_services.transportation">บริการขนส่งและระบบบริหารจัดการภายใน</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown 2: About -->
                    <li class="nav-item dropdown-item">
                        <div class="nav-link dropdown-toggle"><span data-i18n="nav.about">เกี่ยวกับเรา</span> <span
                                class="arrow">▼</span></div>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $base; ?>about/company.php" class="dropdown-link"
                                    data-i18n="nav_about.company">บริษัท Koch</a></li>
                            <li><a href="<?php echo $base; ?>about/expertise.php" class="dropdown-link"
                                    data-i18n="nav_about.expertise">ความเชี่ยวชาญ</a></li>
                            <li><a href="<?php echo $base; ?>about/vision.php" class="dropdown-link"
                                    data-i18n="nav_about.vision">วิสัยทัศน์</a></li>
                            <li><a href="<?php echo $base; ?>about/machinery.php" class="dropdown-link"
                                    data-i18n="nav_about.machinery">เครื่องจักรและการทำงาน</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="<?php echo $base; ?>main/partners.php" class="nav-link"
                            data-i18n="nav.partners">พันธมิตร</a></li>
                    <li class="nav-item"><a href="<?php echo $base; ?>main/product.php" class="nav-link"
                            data-i18n="nav.product">สินค้า</a></li>
                    <li class="nav-item"><a href="<?php echo $base; ?>main/technology.php" class="nav-link"
                            data-i18n="nav.technology">เทคโนโลยี</a></li>
                    <li class="nav-item"><a href="<?php echo $base; ?>main/branches.php" class="nav-link"
                            data-i18n="nav.branches">สาขา</a></li>
                    <li class="nav-item"><a href="<?php echo $base; ?>main/contact.php" class="nav-link"
                            data-i18n="nav.contact">ติดต่อเรา</a></li>

                    <!-- Language Switcher -->
                    <li class="nav-item dropdown-item koch-lang-switcher login-item">
                        <div class="nav-link dropdown-toggle" id="kochLangToggle" aria-label="Select language">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                style="margin-right:5px; vertical-align:middle;">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                </path>
                            </svg>
                            <span id="kochLangLabel">ไทย</span> <span class="arrow">▼</span>
                        </div>
                        <ul class="dropdown-menu koch-lang-menu" style="min-width: 130px;">
                            <li>
                                <button class="dropdown-link koch-lang-btn koch-lang-btn--active"
                                    data-koch-lang-btn="th" onclick="window.kochLang && window.kochLang.setLang('th')">
                                    <span class="koch-lang-flag">🇹🇭</span> ไทย
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-link koch-lang-btn" data-koch-lang-btn="en"
                                    onclick="window.kochLang && window.kochLang.setLang('en')">
                                    <span class="koch-lang-flag">🇬🇧</span> English
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-link koch-lang-btn" data-koch-lang-btn="zh"
                                    onclick="window.kochLang && window.kochLang.setLang('zh')">
                                    <span class="koch-lang-flag">🇨🇳</span> 中文
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-link koch-lang-btn" data-koch-lang-btn="jp"
                                    onclick="window.kochLang && window.kochLang.setLang('jp')">
                                    <span class="koch-lang-flag">🇯🇵</span> 日本語
                                </button>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Close button for Mobile -->
                <div class="nav-close" id="navClose">✕</div>
            </div>

            <!-- Toggle Button (Hamburger) -->
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

</body>

</html>

<!-- CSS ของ menubar อยู่ใน: css/style.css หัวข้อ "Menubar Component (component/menubar.php)" -->
<!-- JS ของ menubar อยู่ใน: js/script.js หัวข้อ "Menubar Component (component/menubar.php)" -->
<!-- i18n system: js/i18n.js | Language files: lang/th.json, en.json, zh.json, jp.json -->