<?php


/**
 * 【php获取目录中的所有文件名】
 */

//1、先打开要操作的目录，并用一个变量指向它
//打开当前目录下的目录pic下的子目录common。



//2、循环的读取目录下的所有文件
//其中$filename = readdir($handler)是每次循环的时候将读取的文件名赋值给$filename，为了不陷于死循环，所以还要让$filename !== false。一定要用!==，因为如果某个文件名如果叫’0′，或者某些被系统认为是代表false，用!=就会停止循环*/
//Animal Beauty Comic film geme Scenery
//Result
function result(){
     $arr = array('/Animal','/Beauty','/Comic','/film','/geme','/Scenery');
     
    for($j=0; $j<sizeof($arr); $j++){
   $result = array();
   
    //echo 'E:\wamp\www\4-13\aa\img\bg'."$arr[$i]";
  ///data/home/bxu2340620115/htdosc
   $handler = opendir('/data/home/bxu2340620115/htdocs/img/bg'."$arr[$j]");
    
while( ($filename = readdir($handler)) !== false  ) {
      //3、目录下都会有两个文件，名字为’.'和‘..’，不要对他们进行操作
      if($filename != "." && $filename != ".."){
          //4、进行处理
          //这里简单的用echo来输出文件名
           $result[] = $filename;
          //push()
      }
    
}
//5、关闭目录
closedir($handler);
    echo json_encode($result);
}
}
 result();
