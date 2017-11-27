<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Cookie;
use sina\SaeTOAuthV2;
use sina\SaeTClientV2;
require ROOT_PATH."/extend/ORG/Connect/qqConnectAPI.php";
class userlogin extends Controller{
        public function login(){
        $user = Db::name('user');
        $val = $user->where('account',$_POST['account'])->find();
       if(count($val) != 0){
           if($val['pasw'] == md5($_POST['pasw'])){
               Cookie::set('token',$val['token'],3600*24*50);
               $t=time()+(86400*30);
               $user->where('account',$_POST['account'])->update(['expire_time'=> $t]);
               echo 200;
           }else{
               echo 2;
           }
       }else{
             echo 1;
       }
    }
    public function logout(){

    Cookie::delete('token');

    }
 public function wblogin(){
        $wb = new SaeTOAuthV2(WB_AKEY,WB_SKEY);
        $code_url = $wb->getAuthorizeURL(WB_CALLBACK_URL);
        $this->assign('code_url',$code_url);
     //   return $this->fetch();
    echo $code_url;
    }
    public function wbcallback(){
        $wb = new SaeTOAuthV2(WB_AKEY,WB_SKEY);
        $key = array();
        $param = Request::instance()->param();
        $keys['code'] = $param['code'];
        $keys['redirect_uri'] = WB_CALLBACK_URL;
        $token = $wb->getAccessToken('code',$keys);
        if($token){
            $user = Db::name('user');
            $website = Db::name('website');
             $val = $user->where('account',$token['uid'])->find();
             $t=time()+(86400*30);
            if(count($val)){
               $user->where('token',$token['access_token'])->update(['expire_time'=> $t]);
            }else{
                
$user->insert(['id'=>null,'account'=>$token['uid'],'nickname'=>'微博用户','header'=>'','pasw'=>'123456','token'=>$token['access_token'],'expire_time'=>$t,'skin'=>0,'Recommend'=>0,'history'=>0,'remind'=>0,'color'=>0]);
        	    $d = $user->where('token',$token['access_token'])->find();  //查询一条记录
$website->insert(['id'=>null,'name'=>'','tt'=>'','url'=>'','userid'=>$d['id'],'calss'=>'综合']);
            }
            Cookie::set('token',$token['access_token'],3600*24*50);
         $this->redirect('http://localhost/web/public/show/html/',302);
              
        }
         
    }
    

 
}