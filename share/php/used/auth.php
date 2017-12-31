<?php
    
 session_start();
 $image = imagecreatetruecolor(100,30); // 创建一个图片 宽高为 100 30
 $bgcolor = imagecolorallocate($image,255,255,255); // 创建颜色
 imagefill($image,0,0,$bgcolor); // 把创建好的颜色 放进去
$n = '';
for($i = 0; $i<4; $i++){

    $size = 6;
    $color = imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
    $num = rand(0,9);
    $n.= $num;
    $x = ($i*100/4)+rand(5,10);
    $y = rand(0,9);
    imagestring($image,$size,$x,$y,$num,$color);
}
$_SESSION['authcode'] = $n;
for($i =0; $i<500; $i++){

    $pointcolor = imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
    imagesetpixel($image,rand(1,100),rand(1,100),$pointcolor);
    
    
}

for($i =0; $i<4; $i++){

    $pointcolor = imagecolorallocate($image,rand(80,200),rand(90,200),rand(70,200));
    imageline($image,rand(1,80),rand(1,80),rand(1,80),rand(1,50),$pointcolor);
    
    
}

 header('content-type: image/png'); // 规定输出的是图片

imagepng($image);


imagedestroy($image);


