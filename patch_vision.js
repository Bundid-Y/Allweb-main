const fs = require('fs');
const path = require('path');

const langDir = path.join(__dirname, 'koch/lang');
const files = ['th.json', 'en.json', 'zh.json', 'jp.json'];

const updates = {
  th: {
    'vision.title': 'วิสัยทัศน์และพันธกิจ',
    'vision.subtitle': 'วิสัยทัศน์ (Vision)',
    'vision.p1': 'โค้ช แพคเกจจิ้ง แอนด์ แพคกิ้ง เซอร์วิสเซส จำกัด มุ่งมั่นก้าวสู่การเป็นผู้นำด้าน Supply Chain Services สำหรับอุตสาหกรรมยานยนต์ ด้วยการพัฒนาโซลูชันที่ ชาญฉลาด รวดเร็ว และยั่งยืน เพื่อสนับสนุนการเติบโตของลูกค้าในทุกมิติของซัพพลายเชน',
    'vision.p2': 'บริษัทมีเป้าหมายในการเชื่อมโยงงานด้าน การพัฒนาบรรจุภัณฑ์ ระบบบริหารจัดการบรรจุภัณฑ์ (VMI) การบริหารคลังสินค้า และการขนส่ง เข้าด้วยกันอย่างเป็นระบบ เพื่อเพิ่มประสิทธิภาพ ลดต้นทุน และลดความซ้ำซ้อนในกระบวนการดำเนินงานของลูกค้า',
    'vision.p3': 'KOCH ให้ความสำคัญกับการพัฒนาระบบวิศวกรรมภายในและระบบดิจิทัล เพื่อยกระดับความแม่นยำ ความโปร่งใส และความสามารถในการควบคุมกระบวนการทำงานแบบเรียลไทม์ พร้อมทั้งมุ่งเน้นการเติบโตอย่างยั่งยืน ควบคู่ไปกับความรับผิดชอบต่อสิ่งแวดล้อมและสังคม'
  },
  en: {
    'vision.title': 'Vision and Mission',
    'vision.subtitle': 'Vision',
    'vision.p1': 'Koch Packaging and Packing Services Co., Ltd. is committed to becoming a leader in Supply Chain Services for the automotive industry by developing solutions that are Smart, Fast, and Sustainable, supporting customer growth in every dimension of the supply chain.',
    'vision.p2': 'The company aims to systematically link Packaging Development, Packaging Supply Management System (VMI), Warehouse Management, and Transportation together to increase efficiency, reduce costs, and reduce redundancy in customers\' operational processes.',
    'vision.p3': 'KOCH gives importance to developing In-house Engineering and Digital Systems to elevate accuracy, transparency, and the ability to control workflows in real-time, while focusing on sustainable growth alongside environmental and social responsibility.'
  },
  zh: {
    'vision.title': '愿景和使命',
    'vision.subtitle': '愿景 (Vision)',
    'vision.p1': 'Koch Packaging and Packing Services Co., Ltd. 致力于通过开发智能、快速和可持续的解决方案成为汽车行业供应链服务的领导者，并在供应链的各个维度支持客户增长。',
    'vision.p2': '公司的目标是将包装开发、包装供应管理系统 (VMI)、仓库管理和运输系统地联系在一起，以提高效率、降低成本并减少客户运营流程中的冗余。',
    'vision.p3': 'KOCH 重视开发内部工程和数字系统以提高准确性、透明度和实时控制工作流程的能力，同时专注于伴随环境和社会责任的可持续增长。'
  },
  jp: {
    'vision.title': 'ビジョンとミッション',
    'vision.subtitle': 'ビジョン (Vision)',
    'vision.p1': 'Koch Packaging and Packing Services Co., Ltd. は、スマート、迅速、かつ持続可能なソリューションを開発することにより、自動車産業におけるサプライチェーンサービスのリーダーになることをお約束し、サプライチェーンのあらゆる側面でお客様の成長をサポートします。',
    'vision.p2': '同社は、パッケージング開発、包装供給管理システム(VMI)、倉庫管理、および輸送を体系的に結び付け、効率を高め、コストを削減し、お客様の運用プロセスにおける冗長性を削減することを目指しています。',
    'vision.p3': 'KOCHは、社内エンジニアリングとデジタルシステムの開発を重視し、正確性、透明性、およびリアルタイムでワークフローを制御する能力を高めるとともに、環境および社会的責任と並行して持続可能な成長に焦点を当てています。'
  }
};

const keysToRemove = [
    'p1_1', 'p1_2', 'p1_strong', 'p1_3',
    'p2_1', 'p2_strong', 'p2_2',
    'p3_1', 'p3_strong1', 'p3_2', 'p3_strong2', 'p3_3'
];

for (const file of files) {
  const filePath = path.join(langDir, file);
  if (fs.existsSync(filePath)) {
    const rawData = fs.readFileSync(filePath);
    const jsonData = JSON.parse(rawData);
    
    const langKey = file.replace('.json', '');
    const langUpdates = updates[langKey];
    
    if (jsonData.vision && langUpdates) {
      // Add new keys
      for (const [key, value] of Object.entries(langUpdates)) {
        const subKey = key.split('.')[1];
        jsonData.vision[subKey] = value;
      }
      // Delete old keys
      for (const oldKey of keysToRemove) {
          delete jsonData.vision[oldKey];
      }
    }
    
    fs.writeFileSync(filePath, JSON.stringify(jsonData, null, 2));
    console.log(`Updated ${file}`);
  }
}
