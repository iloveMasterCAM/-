<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use \think\Cookie;
class register extends Controller{
    public function register(){
    	//http://localhost/web/public/show/register/register/?pasw=2212121&email=1212
    	//echo $_GET['pasw'].$_GET['email'];
    	$email = $_GET['email'];
    	$pasw = md5($_GET['pasw']);
    	$token = md5($_GET['pasw'].$_GET['email']);
    	 $user =  Db::name('user');
         $website =  Db::name('website');
        $arr = $user->where('account',$email)->select();
        if(count($arr) == 0){
           //$user->insert($data)//插入一条数据，对应字段数组数据：$data=['id'=>1,'name'=>'lisi']
        	/*
INSERT INTO `user`(`id`, `account`, `nickname`, `pasw`, `skin`, `Recommend`, `history`, `remind`, `color`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
        	*/
            $t=time()+(86400*30);
$user->insert(['id'=>null,'account'=>$email,'nickname'=>$email,'header'=>'','pasw'=>$pasw,'token'=>$token,'expire_time'=>$t,'skin'=>0,'Recommend'=>0,'history'=>0,'remind'=>0,'color'=>0,'opacity'=>20]);
    $d = $user->where('token',$token)->find();  //查询一条记录
$website->insert(['id'=>null,'name'=>'','tt'=>'','url'=>'','userid'=>$d['id'],'calss'=>'综合']);
        	Cookie::set('token',$token,3600*24*50);
        }else{
            echo "<script>alert('该账号已注册！')</script>>";
        }
        return $this->redirect('http://www.yi-23.com/public/');
    }
}
