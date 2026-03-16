<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TNB Logistics - บริการรถรับ–ส่งระหว่างคลังสินค้า</title>
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
    <div class="flex-row"
      style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px; flex-direction: row-reverse;">
      <!-- Left: Image with custom red shape -->
      <div style="flex: 1.2; min-width: 300px; display: flex; justify-content: center;">
        <div class="image-wrapper" style="position: relative; width: 100%; padding: 20px; box-sizing: border-box;">
          <div
            style="position: absolute; top: -5%; right: -5%; width: 95%; height: 110%; background-color: #0D2D6B; clip-path: polygon(100% 5%, 15% 0, 15% 100%, 100% 95%); z-index: 1;">
          </div>
          <img src="../img/other/service/shuttle/shuttletruck.png" alt="Shuttle Truck Service"
            style="display: block; width: 100%; height: 480px; object-fit: cover; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
        </div>
      </div>
      <!-- Right: Details -->
      <div style="flex: 1; min-width: 300px;">
        <h1 class="details-title" style="font-size: 36px; font-weight: bold; color: #0D2D6B; margin-bottom: 10px;"
          data-i18n="service.shuttle_title">
          บริการรถรับ–ส่งระหว่างคลังสินค้า</h1>
        <h2 style="font-size: 24px; color: #325662; margin-top: 0px;" data-i18n="service.shuttle_subtitle">
          โซลูชันการขนส่งต่อเนื่องสำหรับภาคอุตสาหกรรม</h2>
        <div style="width: 50px; height: 4px; background-color: #0D2D6B; margin: 20px 0;"></div>
        <p class="details-desc" style="font-size: 16px; line-height: 1.6; color: #555;"
          data-i18n="service.shuttle_desc">
          บริการรถขนส่งแบบ Shuttle สำหรับรับ–ส่งสินค้าระหว่างโรงงาน คลังสินค้า และศูนย์กระจายสินค้า
          เหมาะสำหรับลูกค้าอุตสาหกรรมที่ต้องการการขนส่งต่อเนื่องตามรอบเวลาอย่างสม่ำเสมอ
          ช่วยเพิ่มความคล่องตัวในการเคลื่อนย้ายสินค้าและลดความล่าช้าในกระบวนการผลิต
          สามารถรองรับปริมาณงานขนส่งจำนวนมากในแต่ละวันได้อย่างมีประสิทธิภาพ
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
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;" data-i18n="service.shuttle_sec1_title">
              Suppliers &amp; Factories</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;" data-i18n="service.shuttle_sec1_desc">
              รับสินค้าจากซัพพลายเออร์และโรงงานผู้ผลิต ดำเนินการตามรอบเวลาที่กำหนด
              เพื่อให้กระบวนการผลิตและการส่งมอบของลูกค้าเป็นไปอย่างต่อเนื่องและไม่หยุดชะงัก</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #0D2D6B; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/shuttle/suppliersfactories.jpeg" alt="Suppliers and Factories"
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
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;" data-i18n="service.shuttle_sec2_title">
              Shuttle Truck Service (WH to WH)</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;" data-i18n="service.shuttle_sec2_desc">
              บริการรถรับ–ส่งสินค้าระหว่างคลังสินค้าอย่างสม่ำเสมอ มีการควบคุมตารางการเดินรถ
              เพื่อให้การขนส่งเป็นไปอย่างตรงต่อเวลา ช่วยเสริมความมั่นคงของกระบวนการโลจิสติกส์
              ภายในองค์กรลูกค้า และรองรับปริมาณงานสูงในแต่ละวัน
            </p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; left: -5%; width: 85%; height: 110%; background-color: #0D2D6B; clip-path: polygon(0 0, 100% 5%, 100% 95%, 0 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/shuttle/shuttletruckservice.jpeg" alt="Shuttle Truck Service"
                style="display: block; width: 100%; position: relative; z-index: 2; box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.2);">
            </div>
          </div>
        </div>
      </section>

      <!-- Section 3 -->
      <section id="dev-section3" style="margin-bottom: 0px;">
        <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 28px; color: #325662; margin-bottom: 15px;" data-i18n="service.shuttle_sec3_title">
              Destinations / Customers</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;" data-i18n="service.shuttle_sec3_desc">
              ส่งมอบสินค้าถึงจุดหมายปลายทางและลูกค้าตามที่กำหนด ด้วยความรวดเร็วและตรงต่อเวลา
              มีการติดตามและรายงานสถานะการขนส่งให้ลูกค้าทราบในทุกขั้นตอน
              เพื่อสร้างความมั่นใจและความไว้วางใจในระยะยาว</p>
          </div>
          <div style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <!-- ช่องเปลี่ยนภาพ (นำลิงก์รูปมาใส่ใน src ด้านล่าง) -->
            <div class="image-wrapper"
              style="position: relative; width: 100%; max-width: 450px; padding: 20px; box-sizing: border-box;">
              <div
                style="position: absolute; top: -5%; right: -5%; width: 85%; height: 110%; background-color: #0D2D6B; clip-path: polygon(100% 0, 15% 5%, 15% 95%, 100% 100%); z-index: 1;">
              </div>
              <img src="../img/other/service/shuttle/destinationscustomers.jpeg" alt="Destinations and Customers"
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