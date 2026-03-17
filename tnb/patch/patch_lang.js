const fs = require('fs');
const path = require('path');

const langDir = path.join(__dirname, 'tnb/lang');
const files = ['th.json', 'en.json', 'zh.json', 'jp.json'];

const updates = {
  th: {
    'index.about_title': 'เกี่ยวกับเรา',
    'index.about_p1': 'TNB Logistics เป็นผู้ให้บริการด้านโลจิสติกส์และการขนส่งครบวงจร ให้บริการขนส่งสินค้าภายในประเทศ การขนส่งตู้คอนเทนเนอร์ และงานชัตเทิลระหว่างคลังสินค้า (WH to WH) บริษัทมีสำนักงานและสาขาในพื้นที่ยุทธศาสตร์สำคัญ เช่น บางแสน แหลมฉบัง บางกะดี และลาดกระบัง เพื่อรองรับความต้องการของลูกค้าในภาคอุตสาหกรรมอย่างมีประสิทธิภาพ',
    'index.about_p2': 'TNB มุ่งเน้นมาตรฐานการบริการ ความปลอดภัย และความตรงต่อเวลาในทุกกระบวนการขนส่ง พร้อมนำเทคโนโลยีระบบบริหารจัดการการขนส่งมาใช้เพื่อเพิ่มความโปร่งใสและประสิทธิภาพในการทำงาน บริษัทพร้อมเป็นพันธมิตรด้านโลจิสติกส์ที่ลูกค้าไว้วางใจและเติบโตไปพร้อมกันอย่างยั่งยืน',
    'index.about_p1_strong': '',
    'index.about_p2_strong': '',
    'index.about_p2_cont': '',
    'index.about_li1': '',
    'index.about_li2': '',
    'index.about_li3': '',
    
    'index.svc1_sub': 'บริการขนส่งสินค้าในประเทศ',
    'index.svc1_excerpt': 'บริการขนส่งสินค้าในประเทศที่รวดเร็วและปลอดภัย ตอบโจทย์ทุกการจัดส่งทั่วไทย',
    'index.svc2_sub': 'บริการรถรับ–ส่งระหว่างคลังสินค้า',
    'index.svc2_excerpt': 'บริการรถรับ-ส่งสินค้าระหว่างคลัง (WH to WH) เพื่อการบริหารจัดการที่ไร้รอยต่อ',
    'index.svc3_sub': 'บริการขนส่งตู้คอนเทนเนอร์นำเข้า–ส่งออก',
    'index.svc3_excerpt': 'บริการรถหัวลากและขนส่งตู้คอนเทนเนอร์นำเข้า-ส่งออกอย่างมืออาชีพ',
    'index.svc4_sub': 'บริการจัดการตู้คอนเทนเนอร์และลานตู้สินค้า',
    'index.svc4_excerpt': 'บริหารจัดการตู้คอนเทนเนอร์และพื้นที่ลานตู้สินค้าอย่างเป็นระบบ',
    'index.svc5_sub': 'บริการกระจายสินค้าทั่วประเทศ',
    'index.svc5_excerpt': 'บริการกระจายสินค้าครอบคลุมทุกพื้นที่ทั่วประเทศ ส่งตรงถึงปลายทางอย่างแม่นยำ',
    'index.svc6_sub': 'บริการที่จอดรถบรรทุกและบริหารพื้นที่จอด',
    'index.svc6_excerpt': 'ให้บริการพื้นที่จุดจอดรถบรรทุกที่ปลอดภัย พร้อมสิ่งอำนวยความสะดวกครบครัน',
    'index.services_title': 'บริการของเรา',
    'index.services_sub': 'บริการขนส่งและโลจิสติกส์ครบวงจร ที่ตอบสนองทุกความต้องการของธุรกิจด้วยระบบที่ทันสมัย'
  },
  en: {
    'index.about_title': 'About Us',
    'index.about_p1': 'TNB Logistics is a comprehensive logistics and transportation service provider, offering domestic transportation, container transport, and warehouse-to-warehouse shuttle services. The company has offices and branches in strategic locations such as Bang Saen, Laem Chabang, Bang Kadi, and Lat Krabang to efficiently support the needs of industrial clients.',
    'index.about_p2': 'TNB focuses on service standards, safety, and punctuality in every transportation process, while adopting transportation management technologies to increase transparency and operational efficiency. The company is ready to be a trusted logistics partner, growing together with clients sustainably.',
    'index.about_p1_strong': '',
    'index.about_p2_strong': '',
    'index.about_p2_cont': '',
    'index.about_li1': '',
    'index.about_li2': '',
    'index.about_li3': '',

    'index.svc1_sub': 'Domestic Transportation',
    'index.svc1_excerpt': 'Fast and secure domestic transportation services, meeting all delivery needs across Thailand.',
    'index.svc2_sub': 'Shuttle Truck Service',
    'index.svc2_excerpt': 'Warehouse-to-warehouse (WH to WH) shuttle truck services for seamless supply chain management.',
    'index.svc3_sub': 'Import & Export Container Transportation',
    'index.svc3_excerpt': 'Professional trailer and container transportation services for import and export needs.',
    'index.svc4_sub': 'Container Arrangement & Container Yard',
    'index.svc4_excerpt': 'Systematic management of containers and container yard facilities.',
    'index.svc5_sub': 'Nationwide Distribution',
    'index.svc5_excerpt': 'Comprehensive nationwide distribution services, delivering directly to destinations accurately.',
    'index.svc6_sub': 'Truck Parking & Fleet Support',
    'index.svc6_excerpt': 'Providing safe truck parking spaces equipped with full facilities and support.',
    'index.services_title': 'Our Services',
    'index.services_sub': 'Comprehensive transportation and logistics services that meet every business need with modern systems.'
  },
  zh: {
    'index.about_title': '关于我们',
    'index.about_p1': 'TNB Logistics 是一家综合物流和运输服务提供商，提供国内运输、集装箱运输和仓库到仓库（WH to WH）的班车服务。公司在邦盛、林查班、曼谷地和拉甲邦等重要战略地段设有办事处和分支机构，可以有效支持工业客户的需求。',
    'index.about_p2': 'TNB 在每个运输环节中都注重服务标准、安全和准时，同时采用运输管理技术以提高透明度和运营效率。公司准备成为客户可信赖的物流合作伙伴，与客户一起可持续发展。',
    'index.about_p1_strong': '',
    'index.about_p2_strong': '',
    'index.about_p2_cont': '',
    'index.about_li1': '',
    'index.about_li2': '',
    'index.about_li3': '',

    'index.svc1_sub': '国内运输服务',
    'index.svc1_excerpt': '快速安全的国内运输服务，满足泰国各地所有的配送需求。',
    'index.svc2_sub': '班车服务 (WH to WH)',
    'index.svc2_excerpt': '仓库到仓库的班车服务，实现无缝供应链管理。',
    'index.svc3_sub': '进出口集装箱运输',
    'index.svc3_excerpt': '为进出口提供专业的拖车和集装箱运输服务。',
    'index.svc4_sub': '集装箱管理与堆场',
    'index.svc4_excerpt': '系统化管理集装箱和集装箱堆场设施。',
    'index.svc5_sub': '全国配送网络',
    'index.svc5_excerpt': '全面的全国分销服务，准确地直接送达目的地。',
    'index.svc6_sub': '卡车停车场与车队支持',
    'index.svc6_excerpt': '提供配备齐全的设施和支持的安全卡车停车空间。',
    'index.services_title': '我们的服务',
    'index.services_sub': '满足所有业务需求的综合运输与物流管理服务。'
  },
  jp: {
    'index.about_title': '会社概要',
    'index.about_p1': 'TNB Logisticsは、国内輸送、コンテナ輸送、倉庫間（WH to WH）のシャトルサービスを提供する総合物流・輸送サービスプロバイダーです。同社は、バンセン、レムチャバン、バンカディ、ラッカバンなどの重要な戦略的拠点にオフィスと支店を構え、産業顧客のニーズを効率的にサポートしています。',
    'index.about_p2': 'TNBは、すべての輸送プロセスにおいてサービス基準、安全性、および定時性に重点を置くとともに、輸送管理技術を導入して透明性と業務効率を向上させています。同社は、持続可能に顧客と共に成長する、信頼される物流パートナーとなる用意があります。',
    'index.about_p1_strong': '',
    'index.about_p2_strong': '',
    'index.about_p2_cont': '',
    'index.about_li1': '',
    'index.about_li2': '',
    'index.about_li3': '',

    'index.svc1_sub': '国内輸送サービス',
    'index.svc1_excerpt': 'タイ全土のすべての配送ニーズに応える、迅速で安全な国内輸送サービス。',
    'index.svc2_sub': 'シャトルトラックサービス',
    'index.svc2_excerpt': 'シームレスなサプライチェーン管理のための倉庫間（WH to WH）シャトルサービス。',
    'index.svc3_sub': '輸出入コンテナ輸送',
    'index.svc3_excerpt': '輸出入のための専門的なトレーラーおよびコンテナ輸送サービス。',
    'index.svc4_sub': 'コンテナ管理およびヤード',
    'index.svc4_excerpt': 'コンテナおよびコンテナヤード施設の体系的な管理。',
    'index.svc5_sub': '全国配送ネットワーク',
    'index.svc5_excerpt': '目的地へ正確に直接配送する、包括的な全国配送サービス。',
    'index.svc6_sub': 'トラック駐車場およびフリートサポート',
    'index.svc6_excerpt': '充実した施設とサポートを備えた安全なトラック駐車スペースを提供します。',
    'index.services_title': '当社のサービス',
    'index.services_sub': '最新のシステムであらゆるビジネスニーズに応える総合的な輸送・物流管理サービス。'
  }
};

for (const file of files) {
  const filePath = path.join(langDir, file);
  if (fs.existsSync(filePath)) {
    const rawData = fs.readFileSync(filePath);
    const jsonData = JSON.parse(rawData);
    
    const langKey = file.replace('.json', '');
    const langUpdates = updates[langKey];
    
    if (jsonData.index && langUpdates) {
      for (const [key, value] of Object.entries(langUpdates)) {
        const subKey = key.split('.')[1];
        if (value === "") {
            delete jsonData.index[subKey]; // remove unused old keys
        } else {
            jsonData.index[subKey] = value;
        }
      }
    }
    
    fs.writeFileSync(filePath, JSON.stringify(jsonData, null, 2));
    console.log(`Updated ${file}`);
  }
}
