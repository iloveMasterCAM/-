<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller{
    
    public function index(){   
     
       // $this->assign('key','1212');
        return $this->fetch('index',[
            'aa' => '12121'
        ]);
    }
    public function show(){
        
        return "hello show";
    }
}
/*http://localhost/web/public/show/html/index
http://localhost/web/public/admin/index/index*/