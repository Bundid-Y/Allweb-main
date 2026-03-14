<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Expertise</title>
    <!-- Custom CSS & JS -->
    <!-- CSS ของหน้านี้อยู่ใน: css/style.css หัวข้อ "Expertise Page (about/expertise.php)" -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<!-- page-expertise: ใช้ scope CSS ให้เฉพาะหน้านี้ ป้องกันไม่ให้กระทบหน้าอื่น -->

<body class="page-expertise">
    <?php include '../component/menubar.php'; ?>

    <!-- Main Content -->

    <div class="content-section layout_padding" style="flex: 1;">
        <div class="expertise-row"
            style="display: flex; flex-wrap: wrap; align-items: stretch; gap: 40px; flex-direction: row-reverse;">
            <!-- Right: Image with custom red shape -->
            <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column;">
                <div class="expertise-image-wrap">
                    <img src="../img/other/index/about/index_about.png" alt="Our Expertise">
                </div>
            </div>
            <!-- Left: Details -->
            <div style="flex: 1; min-width: 300px; padding-bottom: 20px;">
                <h1 class="details-title" data-i18n="expertise.title">ความเชี่ยวชาญของเรา</h1>
                <h2 style="font-size: 24px; color: #325662; margin-top: 10px; font-weight: 700;"
                    data-i18n="expertise.subtitle">ความเชี่ยวชาญเฉพาะด้าน
                    (Our Expertise)</h2>

                <p class="details-desc" style="margin-bottom: 20px;">
                    <strong data-i18n="expertise.desc_strong">"TNB
                        มุ่งมั่นในการให้บริการด้านการขนส่งและโลจิสติกส์ด้วยความเป็นมืออาชีพ"</strong><br><br>
                    <span data-i18n="expertise.desc_p">ครอบคลุมทุกขั้นตอนของการดำเนินงาน โดยผสานประสบการณ์ เทคโนโลยี
                        และความเข้าใจในความต้องการของลูกค้าองค์กร</span>
                </p>

                <div class="expertise-text-list">
                    <div class="expertise-item">
                        <div class="expertise-number" data-i18n="expertise.item1_title">01</div>
                        <div>
                            <div class="expertise-desc" data-i18n="expertise.item1_desc"
                                style="font-size: 18px; font-weight: 600; padding-top: 5px;">
                                ความเชี่ยวชาญด้านการขนส่งสินค้าและโลจิสติกส์แบบครบวงจร</div>
                        </div>
                    </div>
                    <div class="expertise-item">
                        <div class="expertise-number" data-i18n="expertise.item2_title">02</div>
                        <div>
                            <div class="expertise-desc" data-i18n="expertise.item2_desc"
                                style="font-size: 18px; font-weight: 600; padding-top: 5px;">
                                การบริหารจัดการฟลีทรถและตู้คอนเทนเนอร์อย่างมีประสิทธิภาพ</div>
                        </div>
                    </div>
                    <div class="expertise-item">
                        <div class="expertise-number" data-i18n="expertise.item3_title">03</div>
                        <div>
                            <div class="expertise-desc" data-i18n="expertise.item3_desc"
                                style="font-size: 18px; font-weight: 600; padding-top: 5px;">
                                ระบบเทคโนโลยีด้านการขนส่งที่ทันสมัย</div>
                        </div>
                    </div>
                    <div class="expertise-item">
                        <div class="expertise-number" data-i18n="expertise.item4_title">04</div>
                        <div>
                            <div class="expertise-desc" data-i18n="expertise.item4_desc"
                                style="font-size: 18px; font-weight: 600; padding-top: 5px;">
                                ประสบการณ์ด้านลูกค้าอุตสาหกรรมและองค์กรขนาดใหญ่</div>
                        </div>
                    </div>
                    <div class="expertise-item">
                        <div class="expertise-number" data-i18n="expertise.item5_title">05</div>
                        <div>
                            <div class="expertise-desc" data-i18n="expertise.item5_desc"
                                style="font-size: 18px; font-weight: 600; padding-top: 5px;">
                                ความปลอดภัยและมาตรฐานการดำเนินงาน</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>