<?php
namespace app\admin\controller;
use think\Controller;
use think\Cookie;
use think\Db;
class Html extends Controller{
    public $url = '/usr/home/qxu1146510236/htdocs/public/static/image/show/bg/';
    public function __construct(){
         
              parent::__construct(); 
    }
    
    
    //首页
    public function index(){   
       
         $isLogin = Cookie::get('admin');
     
       if (!$isLogin) {
            $this->success('请先登录', 'html/login');
           return;
        }
        
       return view();
    }
    //文件上传
      public function updata(){ 
        //获取表单上传文件
        $flie = print_r($_FILES);
         $len = count($_FILES);
          
          for($i =0; $i<$len-1; $i++){
              $fileName = 'file'.$i;
              if(is_uploaded_file($_FILES[$fileName]['tmp_name'])){
                  move_uploaded_file($_FILES[$fileName]['tmp_name'],'E:\wamp\www\web\public\static\image\show\bg\\'.$_POST['catalog'].'\\'.$_FILES[$fileName]['name']);
              }else{
                  echo '没找到文件';
              }
          }
       return $this->fetch('updata',[
            'f' => $flie,
           'len' => $len
        ]);
    }
    // 显示路径
    public function show(){
        $arr = array();
        $dir = opendir($this->url);
        while(!!$file = readdir($dir)){
            array_push($arr,$file);
        }
        closedir($dir);

         echo json_encode($arr);
        //echo $_SERVER['SCRIPT_FILENAME'];//当前执行脚本的绝对路径名。
    }
    // 显示图片
    public function showimg(){
         $dir=$this->url.'/'.$_POST['key'];
        if (is_dir($dir)) {   
        if ($dh = opendir($dir)) {   
        while (($file = readdir($dh)) !== false) {   
            if ($file!="." && $file!="..") {   
                    echo '/show/bg/'.$_POST['key'].'/'.$file.',';
            }   
        }   
        closedir($dh);   
        }   
        }
    }
    public function dele(){
       $key = $_POST['key'];
       $filename ="/usr/home/qxu1146510236/htdocs/public/static/image".$key;  // /show/bg/film/308116.jpg
	echo $filename ;

if (file_exists ( $filename )) {
 unlink($filename); //删除文件 
 }
       
    }
    public function login(){
        return $this->fetch('login',[]);
    }
    public function login_(){
       $account = $_POST['account'];
       $pasw = $_POST['pasw'];
//            $account = 'admin';
//            $pasw = '123456';
         $user = Db::name('adminuser');
        $val = $user->where('account',$account)->find();
       if(count($val) != 0){
           if($val['pasw'] == $pasw){
               $lifeTime = 24 * 3600; 
               session_set_cookie_params($lifeTime*60); 
           
               Cookie::set('admin',$val['token'],36000);
                ///$this->success('登录成功', 'html/index');
               //$user->where('account',$_POST['account'])->update(['expire_time'=> $t]);
               echo 200;
           }else{
               echo 2;//密码错误
           }
       }else{
             echo 1;//账号错误
       }
        
    }
   
}
