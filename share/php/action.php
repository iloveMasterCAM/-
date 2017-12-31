<?php

$tempFile = $_FILES['file1']['tmp_name'];//获取FILES的缓存文件
    $targetPath = "/site/";//要保存到的新目录
    $targetFile = "1.jpg";//要生成的文件名
    move_uploaded_file($tempFile,$targetPath.$targetFile);//PHP自带函数

?>