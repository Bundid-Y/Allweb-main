<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TNB Logistics - Import & Export Container Transportation</title>
  <!-- Custom CSS & JS -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/script.js" defer></script>

</head>

<body>
  <?php include '../component/menubar.php'; ?>

  <!-- Main Content Hero (Fixed Missing HTML Tags) -->
  <!-- ส่วนหัวของหน้า (Hero Section) แสดงภาพรวมและคำอธิบายเบื้องต้นของการพัฒนาบรรจุภัณฑ์ -->
  <!-- ใช้ Flexbox ในการจัดวางให้ภาพอยู่ซ้ายและข้อความอยู่ขวา -->
  <div class="content-section layout_padding" style="margin-top: 150px; margin-bottom: 0;">
    <div class="flex-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
      <!-- Left: Image with custom red shape -->
      <div style="flex: 1.2; min-width: 300px; display: flex; justify-content: center;">
        <div class="image-wrapper" style="position: relative; width: 100%; padding: 20px; box-sizing: border-box;">
          <div
            style="position: absolute; top: -5%; left: -5%; width: 95%; height: 110%; background-color: #0D2D6B; clip-path: polygon(0 5%, 85% 0, 85% 100%, 0 95%); z-index: 1;">
          </div>
          <img src="../img/other/service/import-export/import-export.png" alt="Import Export Container Transportation"
            style="display: block; width: 100%; height: 480px; object-fit: cover; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
        </div>
      </div>
      <!-- Right: Details -->
      <div style="flex: 1; min-width: 300px;">
        <h1 class="details-title" style="font-size: 36px; font-weight: bold; color: #0D2D6B; margin-bottom: 10px;"
          data-i18n="service.import_export_title">
          บริการขนส่งตู้คอนเทนเนอร์นำเข้า–ส่งออก</h1>
        <h2 style="font-size: 24px; color: #325662; margin-top: 0px;" data-i18n="service.import_export_subtitle">
          บริการขนส่งตู้สินค้าที่มั่นใจได้ในทุกขั้นตอน</h2>
        <div style="width: 50px; height: 4px; background-color: #0D2D6B; margin: 20px 0;"></div>
        <p class="details-desc" style="font-size: 16px; line-height: 1.6; color: #555;"
          data-i18n="service.import_export_desc">
          ให้บริการขนส่งตู้คอนเทนเนอร์ทั้งขาเข้าและขาออกแบบครบวงจร ครอบคลุมการขนส่งระหว่างท่าเรือ ลานตู้สินค้า
          โรงงาน และคลังสินค้า ดำเนินงานตามกระบวนการที่เป็นระบบ สอดคล้องกับมาตรฐานด้านความปลอดภัย
          มีการบริหารจัดการเอกสารและขั้นตอนการขนส่งอย่างถูกต้องและเป็นระเบียบ
          ช่วยลดความเสี่ยงด้านความล่าช้าและความเสียหายของตู้สินค้า
          เหมาะสำหรับธุรกิจที่ต้องการความมั่นใจในงานขนส่งระหว่างประเทศ
        </p>
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <div class="content-section layout_padding" style="padding-top: 20px;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

      <!-- Section 1 -->
      <section id="dev-section1" style="margin-bottom: 40px;">
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;"
              data-i18n="service.import_export_sec1_title">
              Port &amp; Terminal</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;" data-i18n="service.import_export_sec1_desc">
              บริการรับและส่งตู้คอนเทนเนอร์ที่ท่าเรือและลานจอดตู้สินค้า (Terminal) ดำเนินการได้อย่างรวดเร็ว
              ถูกต้อง และสอดคล้องกับกระบวนการนำเข้า-ส่งออก ครอบคลุมท่าเรือหลักในประเทศ
              เช่น ท่าเรือแหลมฉบัง และท่าเรืออื่นๆ ในพื้นที่ยุทธศาสตร์</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #0D2D6B; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/import-export/portterminal.png" alt="Port and Terminal"
                style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
          </div>
        </div>
      </section>

      <!-- Section 2 -->
      <section id="dev-section2" style="margin-bottom: 40px;">
        <!-- สลับด้านรูปภาพให้อยู่ซ้าย ข้อความอยู่ขวา จะได้ดูมีมิติลูกเล่น -->
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center; flex-direction: row-reverse;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;"
              data-i18n="service.import_export_sec2_title">
              Container Transportation</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;" data-i18n="service.import_export_sec2_desc">
              ขนส่งตู้คอนเทนเนอร์ทั้งขาเข้าและขาออกระหว่างท่าเรือ ลานตู้สินค้า โรงงาน และคลังสินค้า
              ด้วยรถหัวลากที่ได้รับมาตรฐานและมีการบริหารจัดการเอกสารอย่างเป็นระบบ
              ช่วยลดความเสี่ยงด้านความล่าช้าและสร้างความมั่นใจในทุกขั้นตอนการขนส่ง
            </p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; left: -5%; width: 85%; height: 110%; background-color: #0D2D6B; clip-path: polygon(0 0, 100% 5%, 100% 95%, 0 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/import-export/containertransportation.png" alt="Container Transportation"
                style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
          </div>
        </div>
      </section>

      <!-- Section 3 -->
      <section id="dev-section3" style="margin-bottom: 0px;">
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;"
              data-i18n="service.import_export_sec3_title">
              Factory &amp; Warehouse</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;" data-i18n="service.import_export_sec3_desc">
              ขนส่งตู้คอนเทนเนอร์ถึงโรงงานและคลังสินค้าของลูกค้าโดยตรง ด้วยการวางแผนเส้นทางที่มีประสิทธิภาพ
              และระบบติดตามสถานะแบบเรียลไทม์ เพื่อให้กระบวนการนำเข้า-ส่งออก
              ดำเนินไปได้อย่างราบรื่นและตรงตามกำหนดเวลา</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #0D2D6B; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/import-export/factorywarehouse.png" alt="Factory and Warehouse"
                style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>

  <?php include '../component/footer.php'; ?>

</body>

</html>