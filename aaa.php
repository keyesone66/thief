<?php

require 'error.php';
require 'function.php';

register_shutdown_function('cache_shutdown_error');

extract($_GET); extract($_POST);

$curl = $_SERVER['QUERY_STRING'];

 //目标站
if (!$curl) {
    $url = 'http://www.ceec.net.cn/';
    $filename = 'index.html';
} else {
    $url = 'http://www.ceec.net.cn/'.$curl;
    $filename = md5($curl).'.html';
}
$cachedir = 'cache/aaa/';
$file = $cachedir.$filename;
//判断文件是否存在
if (file_exists($file)) {
    $cache_filetime = filemtime($file);
    if (time() - $cache_filetime <= 72000) {
        $fcontents = file_get_contents($file);
        echo $fcontents;
    } else {
        $fcontents = aaa_replace($url);
        $handle = fopen($file, 'w'); //写入方式打开路径
        fwrite($handle, $fcontents); //把刚才替换的内容写进生成的HTML文件
        fclose($handle);
        echo $fcontents;
    }
} else {
    $fcontents = aaa_replace($url);
    $handle = fopen($file, 'w'); //写入方式打开路径
    fwrite($handle, $fcontents); //把刚才替换的内容写进生成的HTML文件
    fclose($handle);
    echo $fcontents;
}
