<?php

namespace app\index\controller;

use think\Controller;

use think\Db;

use \think\Cookie;

class usermsg extends Controller{

   // public $token = Cookie::get('token');

    public function usermsg(){

         $user =  Db::name('user');

         $token = Cookie::get('token');

         $d = $user->where('token',$token)->find();

        echo json_encode($d);

    }

     public function _initialize(){

         $user = Db::name('user');

         $token = Cookie::get('token');

         $t=time();

        $d = $user->where('token',$token)->find();  //查询一条记录

         if($t >= $d['expire_time']){

          Cookie::delete('token');
             echo '<script>alert("请重新登录")</script>';

             exit;

         }

    }

    public function setnickname(){

        $user = Db::name('user');

        $token = Cookie::get('token');

        $user->where('token',$token)->update(['nickname'=> $_POST['nickname']]);

    }

    public function sethead(){

        $user = Db::name('user');

        $token = Cookie::get('token');

       $base64 = $_POST['data'];

        $img = base64_decode($base64);

        file_put_contents("../public/static/image/show/headimg/".$token.".jpg", $img);

         $user->where('token',$token)->update(["header"=> 'http://www.yi-23.com/public/static/image/show/headimg/'.$token.".jpg"]);

    }

    public function addurl(){

        //{'name':name, 'tt': tt, 'url':txt, 'class':cla,'id':null}

         $user = Db::name('user');

        $token = Cookie::get('token');

         $website = Db::name('website');

        $d = $user->where('token',$token)->find();  //查询一条记录

     

        $website->insert(['id'=>null,'name'=>$_POST['name'],'tt'=>$_POST['tt'],'url'=>$_POST['url'],'userid'=>$d['id'],'calss'=>$_POST['class']]);

    }

     public function addclass(){

        // INSERT INTO `website`(`id`, `name`, `tt`, `url`, `userid`, `calss`) VALUES (null,'','','',1,'购物')

         $user = Db::name('user');

         $website = Db::name('website');

        $token = Cookie::get('token');

         $d = $user->where('token',$token)->find();  //查询一条记录

$website->insert(['id'=>null,'name'=>'','tt'=>'','url'=>'','userid'=>$d['id'],'calss'=>$_POST['class']]);

    }

    public function classname(){

        $user = Db::name('user');

        $website = Db::name('website');

        $token = Cookie::get('token');

        $d = $user->where('token',$token)->find();

//        ($website->where('userid',)->select());

        $data = $website->where('userid',$d['id'])->select();//值查询

        $key = array();

          

        for($i=0; $i<count($data); $i++){

           $isin = in_array($data[$i]['calss'],$key);

            if(!$isin){

                array_push($key,$data[$i]['calss']);

            }

        }

       $all = array();

        for($x=0; $x<count($key); $x++){

            $arr = array();

            for($i=0; $i<count($data); $i++){

                if($data[$i]['calss'] == $key[$x]){

                    array_push($arr,$data[$i]);

                }

            }

          array_push($all,$arr);

        }

        //dump($all);

       echo json_encode($all,JSON_UNESCAPED_UNICODE);

    }

    public function SaveSet(){

        $user = Db::name('user');

        $token = Cookie::get('token');

        $user->where('token',$token)->update(['Recommend'=> $_POST['Recommend'],'history'=>$_POST['history'],'remind'=>$_POST['remind'],'color'=>$_POST['color']]);

    }

    public function setbg(){

        $user = Db::name('user');

        $token = Cookie::get('token');

        $user = Db::name('user');
        $token = Cookie::get('token');
      $user->where('token',$token)->update(['skin'=>"http://www.yi-23.com/public/static/image/show/bg/".$_POST['name']]);
        echo "http://www.yi-23.com/public/static/image/show/bg/".$_POST['name'];

    }

    public function del(){

        $website = Db::name('website');

        $token = Cookie::get('token');

        $data = $website->where('id',$_POST['id'])->delete();//值查询

    }

    public function fb(){

          $feedback = Db::name('feedback');

        //INSERT INTO `feedback`(`centent`, `memo`, `tag`, `name`, `phone`, `email`, `id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])

        $feedback->insert(['centent'=>$_POST['text'],'memo'=>$_POST['mome'],'tag'=>$_POST['label'],'name'=>$_POST['name'],'phone'=>$_POST['phone'],'email'=>$_POST['email'],'id'=>null]);

    }

    public function dontskin(){

         $user = Db::name('user');

        $token = Cookie::get('token');

        $user->where('token',$token)->update(['skin'=>'']);

    }





}

