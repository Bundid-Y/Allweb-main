<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TNB Logistics | บริการขนส่งและโลจิสติกส์ครบวงจร
    </title>
    <meta name="description" content="บริการขนส่งและโลจิสติกส์ครบวงจร" />

     <!-- Google SEO -->
     <meta name="robots" content="index, follow" />
     <link rel="canonical" href="https://tnb-logistics.com/branches.html" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tnb-logistics.com/branches.html" />
    <meta property="og:title" content="สาขาและเครือข่ายจุดบริการ | TNB Logistics" />
    <meta property="og:description" content="สาขาและเครือข่ายจุดบริการยุทธศาสตร์ของ TNB Logistics ครอบคลุมบางแสน แหลมฉบัง บางกะดี และลาดกระบัง" />
    <meta property="og:image" content="https://tnb-logistics.com/scr/assets/homepage.webp" />
    <meta property="og:site_name" content="TNB Logistics" />
    <meta property="og:locale" content="th_TH" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/company_logo/tnb_logo.webp" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lato:wght@400;700&family=Playfair+Display:wght@400;700&family=Sarabun:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Libraries: GSAP & Lenis -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js" defer></script>
    <!-- Note: SplitText is a club plugin, typically requires local file or private CDN. 
         Assuming the provided scripts will handle its absence gracefully or it will be added if available. -->

    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <script src="../js/script.js?v=<?php echo time(); ?>" defer></script>
</head>

<body>

    <?php include '../component/menubar.php'; ?>

    <!-- SLIDER SECTION (Tap House Tilt Panel) — 6 Slides with Prev/Next -->
    <section class="tnb-home-slider" id="tnbHomeSlider">

        <!-- Prev / Next Navigation Buttons -->
        <button class="tnb-slider-nav tnb-slider-nav--prev" id="tnbSliderPrev"
            aria-label="Previous slide">&#8249;</button>
        <button class="tnb-slider-nav tnb-slider-nav--next" id="tnbSliderNext" aria-label="Next slide">&#8250;</button>

        <!-- Slides Track -->
        <div class="tnb-panel-container">
            <!-- Slide 1: Domestic Logistics -->
            <div class="tnb-panel tnb-slide tnb-slide--active" data-index="0">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">TNB Logistics</h1>
                            <p class="tnb-panel__addr"><span></span><span
                                    data-i18n="slide.s0">บริการขนส่งและโลจิสติกส์ครบวงจร</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/tnb.webp" alt="tnb Logistics" class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="tnb-panel tnb-slide" data-index="1">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Domestic Transportation</h1>
                            <p class="tnb-panel__addr"><span></span><span
                                    data-i18n="slide.s1">บริการขนส่งสินค้าในประเทศ</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show2.png" alt="Packaging Development"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="tnb-panel tnb-slide" data-index="2">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Shuttle Truck Service</h1>
                            <p class="tnb-panel__addr"><span></span><span
                                    data-i18n="slide.s2">บริการรถรับ–ส่งระหว่างคลังสินค้า</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show3.jpeg" alt="Supply Management"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="tnb-panel tnb-slide" data-index="3">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Import & Export Container</h1>
                            <p class="tnb-panel__addr"><span></span><span
                                    data-i18n="slide.s3">บริการขนส่งตู้คอนเทนเนอร์นำเข้า–ส่งออก</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show4.png" alt="Warehouse Operation"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="tnb-panel tnb-slide" data-index="4">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Container Arrangement</h1>
                            <p class="tnb-panel__addr"><span></span><span
                                    data-i18n="slide.s4">บริการจัดการตู้คอนเทนเนอร์และลานตู้สินค้า</span></p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show5.png" alt="Transportation Fleet"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 6 -->
            <div class="tnb-panel tnb-slide" data-index="5">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Nationwide Distribution</h1>
                            <p class="tnb-panel__addr"><span></span><span
                                    data-i18n="slide.s5">บริการกระจายสินค้าทั่วประเทศ</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/service/container/Container.png" alt="Container Service"
                        class="tnb-panel__img" />
                </div>
            </div>

            <!-- Slide 7 -->
            <div class="tnb-panel tnb-slide" data-index="6">
                <div class="tnb-panel__content-col">
                    <div class="tnb-panel__content">
                        <div class="tnb-panel__text">
                            <h1 class="tnb-panel__title">Truck Parking</h1>
                            <p class="tnb-panel__addr"><span></span><span
                                    data-i18n="slide.s6">บริการที่จอดรถบรรทุกและบริหารพื้นที่จอด</span></p>
                        </div>
                    </div>
                </div>
                <div class="tnb-panel__img-col">
                    <img src="../img/other/index/cardslides/show7.jpeg" alt="Shuttle Truck Service"
                        class="tnb-panel__img" />
                </div>
            </div>
        </div>

        <!-- Dots Indicator -->
        <div class="tnb-slider-dots" id="tnbSliderDots" aria-label="Slide indicators">
            <button class="tnb-dot tnb-dot--active" data-index="0" aria-label="Slide 1"></button>
            <button class="tnb-dot" data-index="1" aria-label="Slide 2"></button>
            <button class="tnb-dot" data-index="2" aria-label="Slide 3"></button>
            <button class="tnb-dot" data-index="3" aria-label="Slide 4"></button>
            <button class="tnb-dot" data-index="4" aria-label="Slide 5"></button>
            <button class="tnb-dot" data-index="5" aria-label="Slide 6"></button>
            <button class="tnb-dot" data-index="6" aria-label="Slide 7"></button>
        </div>
    </section>


    <!-- CONTENT / DETAILS SECTION — เกี่ยวกับเรา -->
    <div class="content-section layout_padding">
        <!-- ใช้ Flexbox แทน Bootstrap row/col -->
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px;">

            <!-- คอลัมน์ซ้าย: รูปภาพ -->
            <div style="flex: 1; min-width: 300px;">
                <div class="details-box">
                    <div class="details-image">
                        <img src="../img/other/index/about/index_about.png" alt="Detail Image">
                    </div>
                </div>
            </div>

            <!-- คอลัมน์ขวา: เนื้อหา -->
            <div style="flex: 1; min-width: 300px;">
                <h1 class="details-title" style="padding-top: 0; margin-bottom: 5px;" data-i18n="index.about_title">
                    เกี่ยวกับเรา</h1>

                <p class="details-desc" style="padding-top: 10px; font-size: 18px; line-height: 1.8;">
                    <span data-i18n="index.about_p1"><strong>TNB Logistics</strong> เป็นผู้ให้บริการด้าน<strong>โลจิสติกส์และการขนส่งครบวงจร</strong>
                        ให้บริการ<strong>ขนส่งสินค้าภายในประเทศ</strong> <strong>การขนส่งตู้คอนเทนเนอร์</strong> และ<strong>งานชัตเทิลระหว่างคลังสินค้า</strong> (WH to WH)
                        บริษัทมีสำนักงานและสาขาใน<strong>พื้นที่ยุทธศาสตร์สำคัญ</strong> เช่น <strong>บางแสน</strong> <strong>แหลมฉบัง</strong> <strong>บางกะดี</strong> และ<strong>ลาดกระบัง</strong>
                        เพื่อรองรับความต้องการของลูกค้าใน<strong>ภาคอุตสาหกรรม</strong>อย่างมีประสิทธิภาพ</span>
                </p>

                <!-- ย่อหน้าที่สอง -->
                <p class="details-desc" style="padding-top: 20px; font-size: 18px; line-height: 1.8;">
                    <span data-i18n="index.about_p2">TNB มุ่งเน้น<strong>มาตรฐานการบริการ</strong> <strong>ความปลอดภัย</strong>
                        และ<strong>ความตรงต่อเวลา</strong>ในทุกกระบวนการขนส่ง
                        พร้อมนำ<strong>เทคโนโลยีระบบบริหารจัดการการขนส่ง</strong>มาใช้เพื่อเพิ่ม<strong>ความโปร่งใส</strong>และ<strong>ประสิทธิภาพในการทำงาน</strong>
                        บริษัทพร้อมเป็น<strong>พันธมิตรด้านโลจิสติกส์</strong>ที่ลูกค้าไว้วางใจและเติบโตไปพร้อมกันอย่างยั่งยืน</span>
                </p>

                <div class="details-action-group">
                </div>
            </div>

        </div>
    </div>


    <!-- START: CodePen TruckLoader Component -->
    <div class="codepen-truck-wrapper">
        <div class="TruckLoader">
            <div class="TruckLoader-cab"></div>
            <div class="TruckLoader-smoke"></div>
        </div>
    </div>
    <!-- END: CodePen TruckLoader Component -->


    <!-- CONTENT / DETAILS SECTION — บริการของเรา (News Card Style) -->
    <div class="tnb-services-section content-section layout_padding">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div class="tnb-services-section__heading">
            <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none;"
                data-i18n="index.services_title">
                บริการของเรา
            </h1>
            <p class="details-desc" style="margin-top: 2px; margin-bottom: 40px; line-height: 0.2;"
                data-i18n="index.services_sub">
                บริการบรรจุภัณฑ์และการจัดการลอจิสติกส์แบบครบวงจร ที่ตอบสนองทุกความต้องการของธุรกิจด้วยระบบที่ทันสมัย
            </p>
        </div>

        <!-- ส่วน News Card Grid — 6 บริการหลัก (3×2 Grid) -->
        <div class="tnb-news-content-wrapper">

            <!-- การ์ด 1: Packaging Development -->
            <div class="tnb-news-card">
                <a href="../service/domestic.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/domestic/Inboundlogistics.png" alt="Domestic Transportation"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Domestic Transportation</h2>
                    <div class="tnb-news-card__post-date" data-i18n="index.svc1_sub">บริการขนส่งสินค้าในประเทศ</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt" data-i18n="index.svc1_excerpt">
                            บริการขนส่งสินค้าในประเทศที่รวดเร็วและปลอดภัย ตอบโจทย์ทุกการจัดส่งทั่วไทย</p>
                        <a href="../service/domestic.php" class="tnb-news-card__read-more"
                            data-i18n="index.svc1_more">อ่านเพิ่มเติม ›</a>
                    </div>
                </div>
            </div>

            <!-- การ์ด 2: Supply Management -->
            <div class="tnb-news-card">
                <a href="../service/shuttle.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/shuttle/shuttletruck.png" alt="Supply Management"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Shuttle Truck Service</h2>
                    <div class="tnb-news-card__post-date" data-i18n="index.svc2_sub">บริการรถรับ–ส่งระหว่างคลังสินค้า
                    </div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt" data-i18n="index.svc2_excerpt">
                            บริการรถรับ-ส่งสินค้าระหว่างคลัง (WH to WH) เพื่อการบริหารจัดการที่ไร้รอยต่อ</p>
                        <a href="../service/supply_management.php" class="tnb-news-card__read-more"
                            data-i18n="index.svc2_more">อ่านเพิ่มเติม ›</a>
                    </div>
                </div>
            </div>

            <!-- การ์ด 3: Warehouse & Operation -->
            <div class="tnb-news-card">
                <a href="../service/import-export.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/import-export/import-export.png" alt="Warehouse Management"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Import & Export Container Transportation</h2>
                    <div class="tnb-news-card__post-date" data-i18n="index.svc3_sub">
                        บริการขนส่งตู้คอนเทนเนอร์นำเข้า–ส่งออก</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt" data-i18n="index.svc3_excerpt">
                            บริการรถหัวลากและขนส่งตู้คอนเทนเนอร์นำเข้า-ส่งออกอย่างมืออาชีพ</p>
                        <a href="../service/warehouse.php" class="tnb-news-card__read-more"
                            data-i18n="index.svc3_more">อ่านเพิ่มเติม ›</a>
                    </div>
                </div>
            </div>

            <!-- การ์ด 4: Transportation -->
            <div class="tnb-news-card">
                <a href="../service/container.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/container/containerreceiving.png" alt="Transportation"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Container Arrangement & Container Yard</h2>
                    <div class="tnb-news-card__post-date" data-i18n="index.svc4_sub">
                        บริการจัดการตู้คอนเทนเนอร์และลานตู้สินค้า</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt" data-i18n="index.svc4_excerpt">
                            บริหารจัดการตู้คอนเทนเนอร์และพื้นที่ลานตู้สินค้าอย่างเป็นระบบ</p>
                        <a href="../service/transportation.php" class="tnb-news-card__read-more"
                            data-i18n="index.svc4_more">อ่านเพิ่มเติม ›</a>
                    </div>
                </div>
            </div>
            <!-- การ์ด 5: Domestic Logistics -->
            <div class="tnb-news-card">
                <a href="../service/nationwide.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/nationwide/lastmiledelivery.png" alt="Domestic Logistics"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Nationwide Distribution</h2>
                    <div class="tnb-news-card__post-date" data-i18n="index.svc5_sub">บริการกระจายสินค้าทั่วประเทศ</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt" data-i18n="index.svc5_excerpt">
                            บริการกระจายสินค้าครอบคลุมทุกพื้นที่ทั่วประเทศ ส่งตรงถึงปลายทางอย่างแม่นยำ</p>
                        <a href="../service/domestic.php" class="tnb-news-card__read-more"
                            data-i18n="index.svc5_more">อ่านเพิ่มเติม ›</a>
                    </div>
                </div>
            </div>

            <!-- การ์ด 6: Container Service -->
            <div class="tnb-news-card">
                <a href="../service/container.php" class="tnb-news-card__card-link"></a>
                <img src="../img/other/service/parking/fleetmanagement.png" alt="Container Service"
                    class="tnb-news-card__image">
                <div class="tnb-news-card__text-wrapper">
                    <h2 class="tnb-news-card__title">Truck Parking & Fleet Support</h2>
                    <div class="tnb-news-card__post-date" data-i18n="index.svc6_sub">
                        บริการที่จอดรถบรรทุกและบริหารพื้นที่จอด</div>
                    <div class="tnb-news-card__details-wrapper">
                        <p class="tnb-news-card__excerpt" data-i18n="index.svc6_excerpt">
                            ให้บริการพื้นที่จุดจอดรถบรรทุกที่ปลอดภัย พร้อมสิ่งอำนวยความสะดวกครบครัน</p>
                        <a href="../service/container.php" class="tnb-news-card__read-more"
                            data-i18n="index.svc6_more">อ่านเพิ่มเติม ›</a>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- CONTENT / DETAILS SECTION — พันธมิตรที่ไว้วางใจเรา -->
    <style>
        .partners-overlay-text {
            position: absolute;
            width: 100%;
            right: 0;
            top: 40px;
            left: 0;
            height: 420px;
            z-index: 2;
            pointer-events: none;
            clip-path: polygon(100% 0, 35% 10%, 35% 90%, 100% 100%);
            transform: translateY(var(--deco-y, 0));
            will-change: transform;
            padding-left: 30px;
            padding-right: 30px;
            box-sizing: border-box;
        }

        @media (max-width: 991px) {
            .partners-overlay-text {
                display: none !important;
            }
        }
    </style>
    <div class="content-section section-partners" style="padding-top: 80px; padding-bottom: 80px;">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div style="margin-bottom: 24px;">
            <div style="text-align: right;">
                <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none; color: #ffffff; text-align: right;"
                    data-i18n="index.partners_title">
                    พันธมิตรที่ไว้วางใจเรา
                </h1>
                <p class="details-desc" style="margin-top: 5px; margin-bottom: 20px; line-height: 1.8; color: #ffffff; text-align: right;"
                    data-i18n="index.partners_sub">
                    ความไว้วางใจจากบริษัทชั้นนำ เป็นเครื่องยืนยันถึง คุณภาพและมาตรฐานการบริการระดับมืออาชีพของเรา
                </p>
            </div>
        </div>

        <!-- logo ลูกค้าเลื่อน loop slides -->
        <section class="loop-images-quotation" style="--bg: white; height: auto; min-height: 220px; padding: 20px 0;">
            <div class="login-track" style="--time: 60s; --total: 10;">
                <div class="login-item" style="--i: 1;"><img src="../img/customer_logo/Mazda.png" alt="image"></div>
                <div class="login-item" style="--i: 2;"><img src="../img/customer_logo/Alliance.png" alt="image"></div>
                <div class="login-item" style="--i: 3;"><img src="../img/customer_logo/TTV.png" alt="image"></div>
                <div class="login-item" style="--i: 4;"><img src="../img/customer_logo/toshiba.png" alt="image"></div>
                <div class="login-item" style="--i: 5;"><img src="../img/customer_logo/tic.png" alt="image"></div>
                <div class="login-item" style="--i: 6;"><img src="../img/customer_logo/GR.png" alt="image"></div>
                <div class="login-item" style="--i: 7;"><img src="../img/customer_logo/CPPC.png" alt="image"></div>
                <div class="login-item" style="--i: 8;"><img src="../img/customer_logo/Thr.png" alt="image"></div>
                <div class="login-item" style="--i: 9;"><img src="../img/customer_logo/dn.png" alt="image"></div>
                <div class="login-item" style="--i: 10;"><img src="../img/customer_logo/lat.png" alt="image"></div>
            </div>
        </section>
    </div>

    <!-- START: CodePen LTR TruckLoader Component -->
    <div class="codepen-truck-wrapper-partner">
        <div class="TruckLoader">
            <div class="TruckLoader-cab"></div>
            <div class="TruckLoader-smoke"></div>
        </div>
    </div>
    <!-- END: CodePen LTR TruckLoader Component -->

    <!-- CONTENT / DETAILS SECTION — ประเภทรถ -->
    <div class="content-section layout_padding section-products">
        <!-- ส่วนหัวข้อ (Heading) -->
        <div style="margin-bottom: 24px;">
            <div style="text-align: left;">
                <h1 class="details-title" style="margin-top: 0; border: none; text-decoration: none; color: #ffffff;"
                    data-i18n="index.products_title">
                    ประเภทรถ
                </h1>
                <p class="details-desc" style="margin-top: 2px; margin-bottom: 12px; color: #ffffff; line-height: 1.8;"
                    data-i18n="index.products_sub">
                    บริการรถบรรทุกหลากหลายประเภท เพื่อรองรับทุกความต้องการด้านการขนส่งและโลจิสติกส์ของคุณ
                </p>
            </div>
        </div>

        <div class="Block_Expanding_Cards">
            <div class="card_holder_sB">
                <span class="US_City_sB _active" data-card-index="0">
                    <h1 class="card_h1 _active">Picup<br>Jumbo</h1>
                    <div class="card_shade _off"></div>
                    <div class="card_content _on">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/Nyvq2juw4_o?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG _active">
                        <img class="Img_H100" src="../img/alltruck/picipjumbo/picup1.png" alt="picupJumbo" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="1">
                    <h1 class="card_h1">6 Wheel</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/Nyvq2juw4_o?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/alltruck/6 wheel/6wheel1.png" alt="6 wheel" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="2">
                    <h1 class="card_h1">6 Wheel<br>Trailer</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/cHRDevKFDBw?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/alltruck/6 wheel_trailer/6wheeltrailer_1.png"
                            alt="6 wheel_trailer" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="3">
                    <h1 class="card_h1">10 Wheel<br>Trailer</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/tUoA7sCrRto?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/alltruck/10 wheel_trailer/10wheeltrailer_1.png"
                            alt="10wheeltrailer" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="4">
                    <h1 class="card_h1">Trailer</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/KDS5lCrj_ew?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/alltruck/trailer/trailer3.png" alt="trailer" />
                    </div>
                </span>
                <span class="US_City_sB" data-card-index="5">
                    <h1 class="card_h1">All Truck</h1>
                    <div class="card_shade"></div>
                    <div class="card_content">
                        <p class="card_dscrptn">
                            <a class="card_photo_cred"
                                href="https://unsplash.com/photos/gZXx8lKAb7Y?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
                                target="_blank"></a>
                        </p>
                    </div>
                    <div class="card_BG">
                        <img class="Img_H100" src="../img/truckshow/alltruck.png" alt="alltruck" />
                    </div>
                </span>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>