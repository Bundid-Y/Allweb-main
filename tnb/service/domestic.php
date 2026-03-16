<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TNB Logistics - บริการขนส่งสินค้าในประเทศ</title>
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
          <img src="../img/other/service/domestic/truck1.png" alt="Domestic Transportation"
            style="display: block; width: 100%; height: 480px; object-fit: cover; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
        </div>
      </div>
      <!-- Right: Details -->
      <div style="flex: 1; min-width: 300px;">
        <h1 class="details-title" style="font-size: 36px; font-weight: bold; color: #0D2D6B; margin-bottom: 10px;"
          data-i18n="service.domestic_title">
          บริการขนส่งสินค้าในประเทศ</h1>
        <h2 style="font-size: 24px; color: #325662; margin-top: 0px;" data-i18n="service.domestic_subtitle">
          บริการขนส่งภายในประเทศที่ออกแบบมาเพื่อรองรับทุกความต้องการของธุรกิจ</h2>
        <div style="width: 50px; height: 4px; background-color: #0D2D6B; margin: 20px 0;"></div>
        <p class="details-desc" style="font-size: 16px; line-height: 1.6; color: #555;"
          data-i18n="service.domestic_desc">
          ให้บริการขนส่งสินค้าภายในประเทศอย่างครบวงจร ครอบคลุมการขนส่งระหว่างคลังสินค้า (Warehouse to Warehouse)
          และการจัดส่งไปยังจุดหมายปลายทางทั่วประเทศ รองรับการขนส่งสินค้าทั้งภาคอุตสาหกรรมและสินค้าทั่วไป
          ด้วยรถบรรทุกหลากหลายประเภท
          มีการวางแผนเส้นทางขนส่งอย่างเป็นระบบ เพื่อเพิ่มความรวดเร็วและลดระยะเวลาในการขนส่ง
          ควบคุมการทำงานโดยทีมงานที่มีประสบการณ์และความเชี่ยวชาญด้านโลจิสติกส์
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
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;" data-i18n="service.domestic_sec1_title">
              Inbound Logistics</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;" data-i18n="service.domestic_sec1_desc">
              บริการรับสินค้าจากซัพพลายเออร์หรือโรงงาน และขนส่งเข้าสู่ศูนย์กระจายสินค้าหรือคลังสินค้า
              ด้วยการวางแผนรอบการรับสินค้าอย่างเป็นระบบ ช่วยให้กระบวนการโลจิสติกส์ขาเข้าเป็นไปอย่างราบรื่น
              ตรงเวลา และมีประสิทธิภาพสูงสุด</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #0D2D6B; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/domestic/Inboundlogistics.png" alt="Inbound Logistics"
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
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;" data-i18n="service.domestic_sec2_title">
              Distribution Center / Warehouse</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;" data-i18n="service.domestic_sec2_desc">
              บริหารจัดการศูนย์กระจายสินค้าและคลังสินค้าอย่างเป็นระบบ ตั้งแต่การรับเข้า จัดเก็บ
              สุ่มตรวจ และเตรียมสินค้าพร้อมส่ง ช่วยให้กระบวนการผลิตและการจัดส่งของลูกค้าดำเนินไปได้
              อย่างต่อเนื่องและไม่สะดุด
            </p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; left: -5%; width: 85%; height: 110%; background-color: #0D2D6B; clip-path: polygon(0 0, 100% 5%, 100% 95%, 0 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/domestic/distributioncenter.png" alt="Distribution Center"
                style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
          </div>
        </div>
      </section>

      <!-- Section 3 -->
      <section id="dev-section3" style="margin-bottom: 0px;">
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;" data-i18n="service.domestic_sec3_title">
              Outbound Logistics</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;" data-i18n="service.domestic_sec3_desc">
              บริการจัดส่งสินค้าจากคลังสินค้าหรือศูนย์กระจายสินค้าไปยังจุดหมายปลายทางทั่วประเทศ
              ด้วยการวางแผนเส้นทางที่มีประสิทธิภาพ ควบคุมตารางเวลาการส่งมอบสินค้าอย่างแม่นยำ
              และรองรับการขนส่งทั้งสินค้าอุตสาหกรรมและสินค้าทั่วไปในทุกขนาด</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #0D2D6B; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/domestic/outboundlogistics.png" alt="Outbound Logistics"
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