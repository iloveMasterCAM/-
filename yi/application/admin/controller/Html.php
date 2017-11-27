<?php
namespace app\admin\controller;

use think\Controller;

class Html extends Controller{

    public $url = '/usr/home/qxu1146510236/htdocs/public/static/image/show/bg/';

    public function __construct(){

        // $isLogin = $_COOKIE["islogin"];



        

         // $this->redirect('html/login');

      /* if (!$isLogin) {

            $this->redirect('html/login');

            return;

        } else {

           // session('islogin', $isLogin); // 如果登录刷新一下?不知道是不是这样去刷新，因为可能出现登录了后过期的情况。

        }*/

        parent::__construct();

    }

    

    

    //首页

    public function index(){   

        return $this->fetch('index',[

            'aaa' => '1212'

        ]);

       // return view();

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

        $filename = "/usr/home/qxu1146510236/htdocs/public/static/image/show/bg/".$key; 

        unlink($filename); //删除文件 

    }

    public function login(){

        return $this->fetch('login',[

            'aaa' => '1212'

        ]);

    }

   

}

