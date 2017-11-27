<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
require ROOT_PATH."/extend/ORG/Connect/qqConnectAPI.php";
require ROOT_PATH."/extend/class.phpmailer.php";
require ROOT_PATH."/extend/class.smtp.php";
use think\Cookie;
class Html extends Controller{
    public $url = 'E:\wamp\www\web\public\static\image\show\bg';
    public function index(){    
       // setcookie("user", "Alex Porter", time()+3600);
        if(!empty($_COOKIE['token'])){
        $token =  $_COOKIE['token'];
        $this->assign('key',$token);
            return $this->fetch('index',[
            'aaa' => '12121'
        ]);
        }else{
          return view();
        }
    }
    public function show(){
        $a = $_POST['a'];
   
    }
    public function homepage(){
         return $this->fetch('homepage',[
            'aaa' => '12121'
        ]);
    }
      public function feedback(){
         return $this->fetch('feedback',[
            'aaa' => '12121'
        ]);
    }
     public function Forgotpassword(){
         return $this->fetch('Forgotpassword',[
            'aaa' => '12121'
        ]);
    }
    //upPasw
    //feedback
    public function history(){
        
        $appkey = "94aea3a9903978ee25c2533853492e6c";
        $url = "http://api.juheapi.com/japi/toh";
         $time1 = date('m');
         $time2 = date('d');
        $params = array(
              "key" => $appkey,//应用APPKEY(应用详细页查询)
              "v" => "1",//版本，当前：1.0
              "month" => "$time1",//月份，如：10
              "day" => "$time2",//日，如：1
        );
        $paramstring = http_build_query($params);
        $content = $this->juhecurl($url,$paramstring);
        $result = json_decode($content,true);
        if($result){
            if($result['error_code']=='0'){
                 echo json_encode($result['result'],JSON_UNESCAPED_UNICODE);
            }else{
                echo $result['error_code'].":".$result['reason'];
            }
        }else{
            echo "请求失败";
        }
        
    }
    public function juhecurl($url,$params=false,$ispost=0){
            $httpInfo = array();
            $ch = curl_init();

            curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
            curl_setopt( $ch, CURLOPT_USERAGENT , 'JuheData' );
            curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 60 );
            curl_setopt( $ch, CURLOPT_TIMEOUT , 60);
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            if( $ispost )
            {
                curl_setopt( $ch , CURLOPT_POST , true );
                curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
                curl_setopt( $ch , CURLOPT_URL , $url );
            }
            else
            {
                if($params){
                    curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
                }else{
                    curl_setopt( $ch , CURLOPT_URL , $url);
                }
            }
            $response = curl_exec( $ch );
            if ($response === FALSE) {
                //echo "cURL Error: " . curl_error($ch);
                return false;
            }
            $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
            $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
            curl_close( $ch );
            return $response;
        }
    public function news(){
        $str = 'top';
        echo file_get_contents("http://v.juhe.cn/toutiao/index?type="."$str"."&key=e38300526162f60c1c319da1cb2dac83");
    }

    public function login(){
     
         return $this->fetch('login',[
            'aaa' => '12121'
        ]);
    }

//    public function _initialize(){
//        //实例化
//      //  $this->QC = new \QC();
//    }
    //开始登陆
    public function qq_login(){
         $this->QC = new \QC();
         $login_url= $this->QC->qq_login();
        $this->redirect($login_url,302);
     
    }
    //回调
    public function qq_callback(){
       
         $this->QC = new \QC();
        $token  = $this->QC->qq_callback();
        $openid = $this->QC->get_openid();
        $QC = new \QC($token,$openid);
        $arr = $QC->get_user_info();

         if($token){
            $user = Db::name('user');
            $website = Db::name('website');
             $val = $user->where('account',$openid)->find();
             $t=time()+(86400*30);
            if(count($val)){
               $user->where('token',$token)->update(['expire_time'=> $t]);
            }else{
                
$user->insert(['id'=>null,'account'=>$openid,'nickname'=>$arr['nickname'],'header'=>$arr['figureurl_qq_2'],'pasw'=>'123456','token'=>$token,'expire_time'=>$t,'skin'=>0,'Recommend'=>0,'history'=>0,'remind'=>0,'color'=>0]);
        	    $d = $user->where('token',$token)->find();  //查询一条记录
$website->insert(['id'=>null,'name'=>'','tt'=>'','url'=>'','userid'=>$d['id'],'calss'=>'综合']);
            }
            Cookie::set('token',$token,3600*24*50);
         $this->redirect('http://localhost/web/public/show/html/',302);
              
        }
        
        
//        $where['qq_openid']=$openid;
//        //判断此QQ是否注册 唯一标识符openid 在表里加了个qq_openid为唯一哈
//        $isqq=$db->where($where)->find();
//        if($isqq){
//            //写入登陆状态
//            session('id', $isqq['id']);
//            session('account', $isqq['account']); 
//            session('nickname', $isqq['account']);
//            session('email', $isqq['email']); 
//            session('lastLoginTime', $isqq['lastLoginTime']); 
//            session('login_count', $isqq['login_count']); 
//            $this->success('登陆成功！',U('Member/index'));
//        }else{
//            $data['qq_openid']=$openid; //QQ登陆唯openid
//            $data['account']=$arr['nickname']; //用户名
//            $data['nickname']=$arr['nickname']; //网名
//            $data['thumb']=$arr['figureurl_2']; //头像
//            $data['status']='1'; //用户状态为启用
//            //如果用户名存在
//            $name['account']=$arr['nickname'];
//            $isname=$db->where($name)->find();
//            if($isname){
//                //用户名存在添加随机数
//                $data['account']=$arr['nickname']."_".rand(1000,9999);
//            }
//            //判断是否写入成功
//            if($id=$db->add($data)){
//                //写入登陆状态
//                session('id', $id);
//                session('account', $data['account']);
//                session('nickname', $data['account']);
//                session('email', '未填写');
//                session('lastLoginTime', time());
//                session('login_count', '1');
//                $this->success('注册成功！',U('Member/index'));
//            }else{
//                $this->error('注册失败！',U('Member/login'));
//            }    
//        }
    }
    
    public function register(){
        return $this->fetch('register',[
            'aaa' => '12121'
        ]);
    }
    public function email(){
       $email = $_POST['name'];
        $pasw = $_POST['pasw'];
//         $email = '1091060034@qq.com';
//        $pasw = '21212';
        $user =  Db::name('user');
        $arr = $user->where('account',$email)->select();
        if(count($arr)>0){
            echo 400;
        }else{
            $this->sendemail($email,"尊敬的用户：
    <br/>
    您好！恭喜您注册成。
    <br/>
    <br/>
    这是一封注册认证邮件，请点击以下链接确认：<br/>
   http://localhost/web/public/show/register/register/?pasw=$pasw&email=$email
    <br/>
    如果链接不能点击，请复制地址到浏览器，然后直接打开。
    <br/>
    <br/>
    上述链接48小时内有效。如果激活链接失效，请您登录网站http://yi-23.com。
    <br/>
    <br/>
    <h2> 感谢您的注册</h2>");
        }

       // echo '账号：'.$email.',密码：'.$pas;
    }
    public function dbdata(){
 //  dump(config(''));    
     /*   $user =  Db::name('user');
        $arr = $user->where('account','asdf22')->select();
        echo count($arr);*/
     /**/
     
      /*  if (isset($_SERVER['PHP_AUTH_DIGEST'])) { 
            $header['AUTHORIZATION'] = $_SERVER['PHP_AUTH_DIGEST']); 
        } elseif (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) { 
            $header['AUTHORIZATION'] = base64_encode($_SERVER['PHP_AUTH_USER'] . ':' . $_SERVER['PHP_AUTH_PW'])); 
        } 
        if (isset($_SERVER['CONTENT_LENGTH'])) { 
            $header['CONTENT-LENGTH'] = $_SERVER['CONTENT_LENGTH']; 
        } 
        if (isset($_SERVER['CONTENT_TYPE'])) { 
            $header['CONTENT-TYPE'] = $_SERVER['CONTENT_TYPE']; 
        }*/

 // 'host' => string 'localhost' (length=9)
 //  'connection' => string 'keep-alive' (length=10)
 //  'cache-control' => string 'max-age=0' (length=9)
 //  'upgrade-insecure-requests' => string '1' (length=1)
 //  'user-agent' => string 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36' (length=110)
 //  'accept' => string 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*;q=0.8' (length=85)
 //  'accept-encoding' => string 'gzip, deflate, br' (length=17)
 //  'accept-language' => string 'zh-CN,zh;q=0.8' (length=14)
 //  'cookie' => string 'pgv_pvid=2606648944; 
 //        
       // dump( $request->header());
        //dump($user->where('id',1)->select());//条件查询
      //  dump($user->query('select * from user WHERE id = 1')); //返回的是二维数组
//       echo Db::query('select * from user where id=1',[1]);
    }
    public function Forgotpasw(){
         $user = Db::name('user');
        $name = $_POST['name'];
//        $name = '1091060034@qq.com';
         $val = $user->where('account',$name)->find();
        $rand = rand();
         if(!count($val)){
             //
             echo 400;
        }else{
              $this->sendemail($name,"亲爱的： ".$name."
            <br/>
            <br/>
            欢迎您使用邮箱验证功能，本次获取验证码为：<span style='color:#35b558'>".$rand."</span>，验证码有效期为10分钟，逾期请重新获取； <br/>
            如非本人操作，请忽略此邮件； <br/>
            <br/>
            <br/>
            （这是一封自动发送的邮件，请不要直接回复）<br/>
            <br/>
            yi-23团队");
             Cookie::delete('email');
             Cookie::set('email',$rand,600);
        }
        
    }
    
    
    public function coder(){
         $code = $_POST['code'];
         $pasw = $_POST['pasw'];
         $account = $_POST['account'];
//        $code = '210121';
      // Cookie::set('email','2121',600);
       $a =  Cookie::has('email');
        if($a){
          $val =  Cookie::get('email');
            if($val == $code){
                $user = Db::name('user');
                $pas = md5($pasw);
                  $user->where('account',$account)->update(['pasw'=> $pas]);
                echo '修改成功';
            }else{
                echo '验证码错误';
            }
        }else{
            echo '验证码已过期，请重新发送'; 
        }
    }
    public function sendemail($e,$html){
     $mail = new \PHPMailer(true); //建立邮件发送类
      $mail->CharSet = "UTF-8";//设置信息的编码类型
      $address = $e;//收件人地址
      $mail->IsSMTP(); // 使用SMTP方式发送
      $mail->Host = "smtp.163.com"; //使用163邮箱服务器
      $mail->SMTPAuth = true; // 启用SMTP验证功能
      $mail->Username = "oll1001@163.com"; //你的163服务器邮箱账号
      $mail->Password = "zwj177"; // 163邮箱密码
      $mail->Port = 25;//邮箱服务器端口号
      $mail->From = "oll1001@163.com"; //邮件发送者email地址
      $mail->FromName = "yi-23团队";//发件人名称
      $mail->AddAddress("$address", ""); //收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
     // $mail->AddAttachment(""); // 添加附件(注意：路径不能有中文)
      $mail->IsHTML(true);//是否使用HTML格式
      $mail->Subject = "用户注册"; //邮件标题
      $mail->Body = $html; //邮件内容，上面设置HTML，则可以是HTML
      if (!$mail->Send()) {
       echo "邮件发送失败. <p>";
       echo "错误原因: " . $mail->ErrorInfo;
       exit;
      } 

    }
   

}
   