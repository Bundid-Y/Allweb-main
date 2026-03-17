<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เทคโนโลยีและนวัตกรรมการขนส่ง | TNB Logistics</title>
    <meta name="description" content="เทคโนโลยีและนวัตกรรมของ TNB Logistics ระบบ TMS, Geofencing, Camera Control เพื่อยกระดับการขนส่ง" />

     <!-- Google SEO -->
     <meta name="robots" content="index, follow" />
     <link rel="canonical" href="https://tnb-logistics.com/technology.html" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tnb-logistics.com/technology.html" />
    <meta property="og:title" content="เทคโนโลยีและนวัตกรรมการขนส่ง | TNB Logistics" />
    <meta property="og:description" content="เทคโนโลยีและนวัตกรรมของ TNB Logistics ระบบ TMS, Geofencing, Camera Control เพื่อยกระดับการขนส่ง" />
    <meta property="og:image" content="https://tnb-logistics.com/scr/assets/homepage.webp" />
    <meta property="og:site_name" content="TNB Logistics" />
    <meta property="og:locale" content="th_TH" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/company_logo/tnb_logo.webp" />
    <!-- Custom CSS & JS -->
    <!-- CSS ของหน้านี้อยู่ใน: css/style.css หัวข้อ "Technology Page (technology.php)" -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<!-- page-technology: ใช้ scope CSS ให้เฉพาะหน้านี้ ป้องกันไม่ให้กระทบหน้าอื่น -->

<body class="page-technology">
    <?php include '../component/menubar.php'; ?>

    <div class="content-section layout_padding" style="margin-top: 60px; padding-top: 40px; max-width: 1200px; margin-left: auto; margin-right: auto;">
        <div class="trucktypes-page__heading" style="margin-bottom: 32px;">
            <h1 style="color: #0D2D6B;" data-i18n="technology.title">เทคโนโลยีของเรา</h1>
            <p data-i18n="technology.subtitle">นวัตกรรมและระบบอัจฉริยะที่ช่วยยกระดับประสิทธิภาพการจัดการซัพพลายเชนของคุณ</p>
        </div>

        <!-- Tab Buttons -->
        <div class="tech-tabs">
            <button class="tech-tab-btn active" data-tab="tab-tms" data-i18n="technology.tab_tms">TMS</button>
            <button class="tech-tab-btn" data-tab="tab-wms" data-i18n="technology.tab_wms">Truck Monitoring</button>
            <button class="tech-tab-btn" data-tab="tab-geo" data-i18n="technology.tab_geo">Geofencing</button>
            <button class="tech-tab-btn" data-tab="tab-cam" data-i18n="technology.tab_cam">Camera Control</button>
        </div>

        <!-- Tab 1: TMS -->
        <div class="tech-tab-content active" id="tab-tms">
            <div class="tech-tab-content__img">
                <img src="../img/other/technology/tms1.png" alt="TMS">
            </div>
            <div class="tech-tab-content__text">
                <h3 data-i18n="technology.tms_title">Transportation Management System (TMS)</h3>
                <p data-i18n="technology.tms_desc">ระบบบริหารจัดการงานขนส่งแบบครบวงจรของ TNB ถูกออกแบบมาเพื่อรองรับการทำงานตั้งแต่ต้นทางจนจบกระบวนการขนส่ง</p>
                <ul class="tech_list">
                    <li><strong>Order Management:</strong> ใช้สำหรับรับคำสั่งงานจากลูกค้า ตรวจสอบรายละเอียดงาน เช่น ประเภทตู้สินค้า เส้นทาง และระยะเวลาในการจัดส่ง</li>
                    <li><strong>Resource Integration:</strong> ระบบสามารถเชื่อมโยงข้อมูลรถขนส่ง พนักงานขับรถ และตารางงานเข้าด้วยกันอย่างเป็นระบบ</li>
                    <li><strong>Real-time Tracking:</strong> ใช้ในการติดตามสถานะงานแต่ละ Job แบบเรียลไทม์ ลดความผิดพลาดจากการทำงานด้วยเอกสาร</li>
                    <li><strong>Cost &amp; Time Control:</strong> เพิ่มความแม่นยำในการควบคุมต้นทุนและระยะเวลาการขนส่ง</li>
                </ul>
            </div>
        </div>

        <!-- Tab 2: WMS -->
        <div class="tech-tab-content" id="tab-wms">
            <div class="tech-tab-content__img">
                <img src="../img/other/technology/wms.jpeg" alt="WMS">
            </div>
            <div class="tech-tab-content__text">
                <h3 data-i18n="technology.wms_title">Truck Monitoring &amp; Dashboard System</h3>
                <p data-i18n="technology.wms_desc">ระบบติดตามและแสดงผลการทำงานของรถขนส่งของ TNB ทำงานผ่าน Dashboard กลางที่สามารถมองเห็นภาพรวมการปฏิบัติงานได้อย่างชัดเจน</p>
                <ul class="tech_list">
                    <li><strong>Comprehensive Monitoring:</strong> ทั้งสถานะของรถแต่ละคัน สถานะงานแต่ละ Job และปริมาณการใช้งานในแต่ละช่วงเวลา</li>
                    <li><strong>Detailed Reporting:</strong> ตรวจสอบข้อมูลแบบรายวัน รายเดือน และวิเคราะห์แนวโน้มการใช้งานรถได้จากกราฟและรายงาน</li>
                    <li><strong>Efficiency Improvement:</strong> ช่วยให้การบริหารจัดการฟลีทรถมีประสิทธิภาพมากขึ้น ลดเวลาการตรวจสอบหน้างาน</li>
                    <li><strong>Decision Support:</strong> สนับสนุนการตัดสินใจเชิงบริหารได้อย่างรวดเร็วและแม่นยำ</li>
                </ul>
            </div>
        </div>

        <!-- Tab 3: Geofencing -->
        <div class="tech-tab-content" id="tab-geo">
            <div class="tech-tab-content__img">
                <img src="../img/other/technology/geofencing.jpeg" alt="Geofencing">
            </div>
            <div class="tech-tab-content__text">
                <h3 data-i18n="technology.geo_title">Geofencing &amp; Line Auto Alert System</h3>
                <p data-i18n="technology.geo_desc">TNB ใช้เทคโนโลยี Geofencing เพื่อกำหนดขอบเขตพื้นที่สำคัญ เช่น ท่าเรือ คลังสินค้า หรือโรงงานลูกค้า</p>
                <ul class="tech_list">
                    <li><strong>Automatic Boundary Detection:</strong> เมื่อรถขนส่งผ่านเข้า–ออกพื้นที่ที่กำหนด ระบบจะบันทึกข้อมูลเวลาและสถานะโดยอัตโนมัติ</li>
                    <li><strong>Real-time Notifications:</strong> เชื่อมต่อกับระบบแจ้งเตือนผ่าน Line Auto Alert เพื่อแจ้งข้อมูลแบบเรียลไทม์</li>
                    <li><strong>Time Control:</strong> ช่วยควบคุมเวลาในการขนส่ง ลดความเสี่ยงจากความล่าช้า</li>
                    <li><strong>Transparency &amp; Tracking:</strong> เพิ่มความโปร่งใสในการติดตามตู้สินค้าตลอดเวลา</li>
                </ul>
            </div>
        </div>

        <!-- Tab 4: Camera Control -->
        <div class="tech-tab-content" id="tab-cam">
            <div class="tech-tab-content__img">
                <img src="../img/other/technology/cameracontrol.jpeg" alt="Camera Control">
            </div>
            <div class="tech-tab-content__text">
                <h3 data-i18n="technology.cam_title">Camera Control &amp; Driver Behavior Monitoring</h3>
                <p data-i18n="technology.cam_desc">ระบบกล้องตรวจสอบของ TNB ถูกติดตั้งทั้งบริเวณด้านหน้ารถ ภายในตู้สินค้า และจุดตรวจสอบพฤติกรรมพนักงานขับรถ</p>
                <ul class="tech_list">
                    <li><strong>Live Monitoring:</strong> สามารถดูภาพสดแบบออนไลน์ บันทึกข้อมูล และเรียกดูภาพย้อนหลังได้</li>
                    <li><strong>Safety Enhancement:</strong> ช่วยเพิ่มความปลอดภัยในการขนส่งสินค้า ป้องกันความเสียหายและลดความเสี่ยงจากอุบัติเหตุ</li>
                    <li><strong>Driver Behavior Analysis:</strong> ใช้เป็นเครื่องมือในการควบคุมมาตรฐานการขับขี่ วิเคราะห์พฤติกรรมการทำงานของพนักงาน</li>
                    <li><strong>Service Quality Control:</strong> ยกระดับคุณภาพการให้บริการให้เป็นไปตามมาตรฐานของบริษัท</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const btns = document.querySelectorAll('.tech-tab-btn');
        const contents = document.querySelectorAll('.tech-tab-content');
        btns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                btns.forEach(function(b) { b.classList.remove('active'); });
                contents.forEach(function(c) { c.classList.remove('active'); });
                btn.classList.add('active');
                document.getElementById(btn.getAttribute('data-tab')).classList.add('active');
            });
        });
    });
    </script>

    <?php include '../component/footer.php'; ?>
</body>

</html>