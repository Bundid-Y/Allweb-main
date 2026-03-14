const fs = require('fs');
const path = require('path');

const langDir = path.join(__dirname, 'tnb/lang');
const files = ['th.json', 'en.json', 'zh.json', 'jp.json'];

const updates = {
  th: {
    'index.products_title': 'ประเภทรถ',
    'index.products_sub': 'บริการรถบรรทุกหลากหลายประเภท เพื่อรองรับทุกความต้องการด้านการขนส่งและโลจิสติกส์ของคุณ'
  },
  en: {
    'index.products_title': 'Truck Types',
    'index.products_sub': 'Various types of trucks to meet all your transportation and logistics needs.'
  },
  zh: {
    'index.products_title': '卡车类型',
    'index.products_sub': '各种类型的卡车以满足您所有的运输和物流需求。'
  },
  jp: {
    'index.products_title': 'トラックの種類',
    'index.products_sub': 'お客様のあらゆる輸送および物流ニーズに応えるさまざまな種類のトラック。'
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
            delete jsonData.index[subKey];
        } else {
            jsonData.index[subKey] = value;
        }
      }
    }
    
    fs.writeFileSync(filePath, JSON.stringify(jsonData, null, 2));
    console.log(`Updated ${file}`);
  }
}
