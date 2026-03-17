<?php
$files = [
    'th' => 'c:/xampp/htdocs/all-web/tnb/lang/th.json',
    'en' => 'c:/xampp/htdocs/all-web/tnb/lang/en.json',
    'jp' => 'c:/xampp/htdocs/all-web/tnb/lang/jp.json',
    'zh' => 'c:/xampp/htdocs/all-web/tnb/lang/zh.json'
];

$data = json_decode(file_get_contents('c:/xampp/htdocs/all-web/data.json'), true);

foreach ($files as $lang => $file) {
    if (!file_exists($file))
        continue;
    $content = file_get_contents($file);
    $current_data = json_decode($content, true);

    $current_data['company'] = $data[$lang]['company'];
    $current_data['vision'] = $data[$lang]['vision'];
    $current_data['expertise'] = $data[$lang]['expertise'];

    file_put_contents($file, json_encode($current_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

echo "Success\n";
?>
