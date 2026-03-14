<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koch Packaging - Technology</title>
    <!-- Custom CSS & JS -->
    <!-- CSS ของหน้านี้อยู่ใน: css/style.css หัวข้อ "Technology Page (technology.php)" -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<!-- page-technology: ใช้ scope CSS ให้เฉพาะหน้านี้ ป้องกันไม่ให้กระทบหน้าอื่น -->

<body class="page-technology">
    <?php include '../component/menubar.php'; ?>

    <div class="tech_section layout_padding">
        <div class="container">
            <h1 class="tech_title" data-i18n="technology.title">เทคโนโลยีของเรา</h1>
            <p class="tech_desc" data-i18n="technology.desc">
                นวัตกรรมและระบบอัจฉริยะที่ช่วยยกระดับประสิทธิภาพการจัดการซัพพลายเชนของคุณ</p>

            <!-- Section 1: Cycles (Image Left) -->
            <div class="tech_section_2 layout_padding">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tech_box_main">
                            <div class="tech_image"><img src="../img/other/technology/tech_vmi_system.png"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="tech_subtitle" data-i18n="technology.vmiTitle">VMI System</h1>
                        <p class="tech_text" data-i18n="technology.vmiDesc">KOCH ใช้ระบบ Packaging Supply Management
                            System (VMI)
                            ในการบริหารจัดการคำสั่งซื้ออย่างมีประสิทธิภาพ</p>
                        <ul class="tech_list">
                            <li><strong data-i18n="technology.vmi1Topic">Order Management:</strong>
                                <span
                                    data-i18n="technology.vmi1Text">ลูกค้าสามารถอัปโหลดข้อมูลแผนการผลิตชิ้นส่วนเข้าระบบได้โดยตรง</span>
                            </li>
                            <li><strong data-i18n="technology.vmi2Topic">BOM Management:</strong> <span
                                    data-i18n="technology.vmi2Text">ระบบจะทำการจับคู่รายการชิ้นส่วนกับบรรจุภัณฑ์ที่ต้องใช้
                                    (Matching BOM) โดยอัตโนมัติ</span></li>
                            <li><strong data-i18n="technology.vmi3Topic">Automated Workflow:</strong> <span
                                    data-i18n="technology.vmi3Text">มีระบบออกใบสั่งซื้อ (PO Issued auto)
                                    และการอนุมัติผ่านระบบ เพื่อความรวดเร็วและแม่นยำ</span></li>
                            <li><strong data-i18n="technology.vmi4Topic">Reporting:</strong> <span
                                    data-i18n="technology.vmi4Text">ติดตามสถานะได้ผ่านรายงานสรุปรายวัน รายสัปดาห์
                                    และรายงานการส่งมอบแบบ Just-in-Time</span></li>
                        </ul>
                        <div class="btn_main">
                            <!-- Button content if needed -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Stylis Cycle (Text Left) -->
            <div class="tech_section_3 layout_padding">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="tech_subtitle" data-i18n="technology.wmsTitle">WMS System</h1>
                        <p class="tech_text" data-i18n="technology.wmsDesc">ในส่วนของคลังสินค้า KOCH
                            มีระบบที่ดูแลครอบคลุมทั้งกระบวนการ</p>
                        <ul class="tech_list">
                            <li><strong data-i18n="technology.wms1Topic">Inbound & Storage:</strong> <span
                                    data-i18n="technology.wms1Text">จัดการตั้งแต่การรับสินค้า การคัดแยกพื้นที่ (Sorting)
                                    และการจัดเก็บ</span></li>
                            <li><strong data-i18n="technology.wms2Topic">Fulfillment:</strong> <span
                                    data-i18n="technology.wms2Text">บริหารจัดการการหยิบสินค้าตามออร์เดอร์ (Picking)
                                    และการจัดเตรียมสินค้าก่อนส่งมอบ (Marshalling) เพื่อประสิทธิภาพสูงสุด</span></li>
                        </ul>
                        <div class="btn_main">
                            <!-- Button content if needed -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tech_box_main_3">
                            <div class="tech_image"><img src="../img/other/technology/tech_wms_system.png"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Modern Cycle (Image Left) -->
            <div class="tech_section_2 layout_padding">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tech_box_main">
                            <div class="tech_image"><img src="../img/other/technology/tech_tms_system.png"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="tech_subtitle" data-i18n="technology.tmsTitle">TMS System</h1>
                        <p class="tech_text" data-i18n="technology.tmsDesc">KOCH พัฒนาซอฟต์แวร์ TMS (Transportation
                            Management System) ขึ้นเอง
                            (In-house) เพื่อให้สอดคล้องกับความต้องการของลูกค้า</p>
                        <ul class="tech_list">
                            <li><strong data-i18n="technology.tms1Topic">Real-time Tracking:</strong> <span
                                    data-i18n="technology.tms1Text">ติดตามสถานะรถขนส่งและตำแหน่งผ่าน GPS
                                    บนแผนที่ได้แบบเรียลไทม์</span></li>
                            <li><strong data-i18n="technology.tms2Topic">Geofencing & QR Code:</strong> <span
                                    data-i18n="technology.tms2Text">ใช้ระบบ Geofencing
                                    เพื่อแจ้งเตือนเมื่อรถเข้า-ออกพื้นที่ และใช้ QR Code
                                    สำหรับการอัปเดตสถานะที่รวดเร็วและแม่นยำ</span></li>
                        </ul>
                        <div class="btn_main">
                            <!-- Button content if needed -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Stylis Cycle (Text Left) -->
            <div class="tech_section_3 layout_padding">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="tech_subtitle" data-i18n="technology.moqTitle">Low MOQ Support</h1>
                        <p class="tech_text" data-i18n="technology.moqDesc">ซอฟต์แวร์และระบบ VMI ของ KOCH
                            ช่วยแก้ปัญหาให้ลูกค้าที่ไม่ต้องการสต็อกสินค้าจำนวนมาก ดังนี้</p>
                        <ul class="tech_list">
                            <li><strong data-i18n="technology.moq1Topic">MOQ 1 Pc:</strong> <span
                                    data-i18n="technology.moq1Text">ระบบรองรับการสั่งซื้อขั้นต่ำเพียง 1 ชิ้น
                                    ช่วยให้ลูกค้าไม่ต้องสั่งซื้อในปริมาณมากเกินความจำเป็น</span></li>
                            <li><strong data-i18n="technology.moq2Topic">Daily Delivery Basis:</strong> <span
                                    data-i18n="technology.moq2Text">สนับสนุนการส่งมอบสินค้าเป็นรายวัน
                                    โดยสามารถรวมสินค้าหลายรายการ (Combine many items) ในการจัดส่งครั้งเดียวได้</span>
                            </li>
                            <li><strong data-i18n="technology.moq3Topic">Cost & Stock Reduction:</strong> <span
                                    data-i18n="technology.moq3Text">ช่วยลดต้นทุนการถือครองสต็อก (Stock Holding
                                    Cost) ได้ถึง 55-75% และลดภาระงาน (Workload) ในการสั่งซื้อได้ถึง 31%</span></li>
                            <li><strong data-i18n="technology.moq4Topic">Inventory Optimization:</strong> <span
                                    data-i18n="technology.moq4Text">ป้องกันปัญหาของขาด (Shortage)
                                    และเพิ่มความแม่นยำในการส่งมอบได้สูงถึง 99%</span></li>
                        </ul>
                        <div class="btn_main">
                            <!-- Button content if needed -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tech_box_main_3">
                            <div class="tech_image"><img src="../img/other/technology/tech_low_moq.png"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>