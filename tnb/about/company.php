<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา | TNB Logistics</title>
    <meta name="description" content="เกี่ยวกับ TNB Logistics ประวัติความเป็นมา วิสัยทัศน์ และพันธกิจในการให้บริการโลจิสติกส์ครบวงจร" />

     <!-- Google SEO -->
     <meta name="robots" content="index, follow" />
     <link rel="canonical" href="https://tnb-logistics.com/about/company.html" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tnb-logistics.com/about/company.html" />
    <meta property="og:title" content="เกี่ยวกับเรา | TNB Logistics" />
    <meta property="og:description" content="เกี่ยวกับ TNB Logistics ประวัติความเป็นมา วิสัยทัศน์ และพันธกิจในการให้บริการโลจิสติกส์ครบวงจร" />
    <meta property="og:image" content="https://tnb-logistics.com/scr/assets/homepage.webp" />
    <meta property="og:site_name" content="TNB Logistics" />
    <meta property="og:locale" content="th_TH" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/company_logo/tnb_logo.webp" />
    <!-- Custom CSS & JS -->
    <!-- CSS ของหน้านี้อยู่ใน: css/style.css หัวข้อ "Company Page (about/company.php)" -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<!-- page-company: ใช้ scope CSS ให้เฉพาะหน้านี้ ป้องกันไม่ให้กระทบหน้าอื่น -->

<body class="page-company">
    <?php include '../component/menubar.php'; ?>

    <!-- Main Content -->

    <div class="content-section layout_padding" style="flex: 1;">
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
            <!-- Left: Image with custom red shape -->
            <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column;">
                <div class="company-image-wrap">
                    <div class="company-image-inner">
                        <img src="../img/company_logo/tnb_logo.webp" alt="Company Profile">
                    </div>
                </div>
            </div>
            <!-- Right: Details -->
            <div style="flex: 1; min-width: 300px; padding-bottom: 20px;">
                <h1 class="details-title" data-i18n="company.title">ข้อมูลบริษัท</h1>
                <h2 style="font-size: 24px; color: #325662; margin-top: 10px; font-weight: 700;"
                    data-i18n="company.subtitle">บริษัท ทีเอ็นบี โลจิสติกส์ จำกัด</h2>

                <div class="company-text-container" style="margin-top: 20px;">
                    <p class="details-desc" data-i18n="company.p1">ก่อตั้งขึ้นเมื่อวันที่ 14 ตุลาคม 2563
                        เพื่อให้บริการด้านโลจิสติกส์และการขนส่งแบบครบวงจร ครอบคลุมการขนส่งภายในประเทศและระหว่างประเทศ
                        เพื่อตอบโจทย์ความต้องการของลูกค้าในภาคอุตสาหกรรมและองค์กรธุรกิจ</p>
                    <p class="details-desc" data-i18n="company.p2">บริษัทเริ่มต้นด้วยทุนจดทะเบียน 1,000,000 บาท
                        และได้เปลี่ยนชื่อเป็น บริษัท ทีเอ็นบี โลจิสติกส์ จำกัด เมื่อวันที่ 22 สิงหาคม 2566
                        พร้อมเพิ่มทุนจดทะเบียนเป็น 5,000,000 บาท เพื่อรองรับการขยายธุรกิจและการเติบโตอย่างต่อเนื่อง</p>
                    <p class="details-desc" data-i18n="company.p3">TNB มุ่งเน้นการพัฒนาระบบการขนส่งที่ทันสมัย มีมาตรฐาน
                        และปลอดภัย ให้บริการด้วยรถขนส่งหลากหลายประเภท พร้อมระบบติดตามงานแบบเรียลไทม์
                        เพื่อสร้างความเชื่อมั่นและส่งมอบบริการที่มีคุณภาพ ตรงต่อเวลา และยั่งยืนแก่ลูกค้า</p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>