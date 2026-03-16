<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/company_logo/logo 2.png" />
    
    <!-- Custom CSS & JS -->
    <!-- CSS ของหน้านี้อยู่ใน: css/style.css หัวข้อ "Company Page (about/company.php)" -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<!-- page-company: ใช้ scope CSS ให้เฉพาะหน้านี้ ป้องกันไม่ให้กระทบหน้าอื่น -->

<body class="page-company">
    <?php include '../component/menubar.php'; ?>

    <!-- Main Content -->

    <div class="content-section layout_padding" style="margin-top: 0; padding-top: 100px; flex: 1;">
        <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
            <!-- Left: Image with custom red shape -->
            <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column;">
                <div class="company-image-wrap">
                    <div class="company-image-inner">
                        <img src="../img/company_logo/logo.png" alt="Company Profile">
                    </div>
                </div>
            </div>
            <!-- Right: Details — text-align left กำหนดผ่าน CSS .details-desc -->
            <div style="flex: 1; min-width: 300px; padding-bottom: 20px;">
                <h1 class="details-title" data-i18n="company.title">ข้อมูลบริษัท</h1>

                <div class="company-text-container" style="margin-top: 20px;">
                    <!-- Paragraph 1: ชื่อบริษัท + คำอธิบาย -->
                    <p class="details-desc" style="text-align: left !important; text-indent: 0 !important; line-height: 1.8; margin-bottom: 20px;">
                        <span data-i18n-html="company.p1">ดำเนินธุรกิจด้านการผลิตและให้บริการโซลูชันบรรจุภัณฑ์และซัพพลายเชนครบวงจร ตั้งแต่การออกแบบ การจัดหาวัตถุดิบ การผลิต ไปจนถึงการบริหารคลังสินค้าและโลจิสติกส์</span>
                    </p>
                    <!-- Paragraph 2: ขอบเขตบริการ -->
                    <p class="details-desc" style="text-align: left !important; text-indent: 0 !important; line-height: 1.8; margin-bottom: 20px;">
                        <span data-i18n-html="company.p2">เริ่มต้นจากการผลิตและจำหน่ายบรรจุภัณฑ์กระดาษลูกฟูกและกระดาษแข็ง ซึ่งเป็นหัวใจของการปกป้องสินค้าในการขนส่งและจัดเก็บ บริษัทได้พัฒนาขอบเขตบริการครอบคลุมทั้ง <b>ระบบบริหารบรรจุภัณฑ์ (VMI), การจัดการคลังสินค้า และการขนส่ง</b> รวมถึงบริการโลจิสติกส์อื่นๆ ที่เหมาะกับอุตสาหกรรมยานยนต์และอิเล็กทรอนิกส์</span>
                    </p>
                    <!-- Paragraph 3: เทคโนโลยีและอนาคต -->
                    <p class="details-desc" style="text-align: left !important; text-indent: 0 !important; line-height: 1.8; margin-bottom: 20px;">
                        <span data-i18n-html="company.p3">ด้วยแนวคิดการพัฒนาอย่างต่อเนื่อง บริษัทมุ่งนำเทคโนโลยีอัตโนมัติและการบริหารจัดการข้อมูลมาใช้ เพื่อให้บริการลูกค้าได้อย่างแม่นยำ รวดเร็ว และมีมาตรฐานสูง พร้อมรองรับการเติบโตของธุรกิจทั้งในและต่างประเทศ</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>