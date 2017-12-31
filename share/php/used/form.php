<?php
header("Content-Type:text/html;charset=UTF-8");
if(isset($_POST['authcode'])){
    session_start();
    if( strtolower($_POST['authcode']) == strtolower($_SESSION['authcode'])){
        echo "正确";
    }else{
        echo "错误";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    
        img{
            width:100px;
            height:30px;
        }
        
    </style>
</head>
<body>
   <form action="form.php" method="post">
    <p>验证码：<img id="img" border="1" src="img.php?r=<?php echo rand();?>"> <span onclick=" document.getElementById('img').src = 'img.php?r=<?php echo rand();?>'">换一个</span></p>
       <p>输入内容：<input type="text" name="authcode" value=""/></p>
       <p><input type="submit" value="提交" /></p>
    </form>
</body>
    <script>
    
       
    </script>
</html>

