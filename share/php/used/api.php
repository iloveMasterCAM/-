<?php
header("Content-Type:text/html;charset=UTF-8");
$str = 'top';
echo file_get_contents("http://v.juhe.cn/toutiao/index?type="."$str"."&key=e38300526162f60c1c319da1cb2dac83");
    

?>