<?php
// 基础图片域名
$baseURL = '这里改成链接';

// 图片路径数组，相对于基础域名的路径
$images = [
    '图片链接',
    '图片链接',
    '图片链接',
    // 更多图片...
];

// 随机选择一个图片索引
$randomIndex = array_rand($images);
// 获取随机图片的相对路径
$randomImagePath = $images[$randomIndex];

// 构建完整的图片URL
$randomImageURL = $baseURL . $randomImagePath;

// 设置HTTP响应头，告诉浏览器返回的内容类型是图片
header('Content-Type: image'); // 或者根据图片实际类型设置，如image/png等

// 输出图片内容
readfile($randomImageURL);
?>
