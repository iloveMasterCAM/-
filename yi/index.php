<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
//echo __DIR__; E:\wamp\www\web\public

// 定义应用目录
//define('APP_PATH', __DIR__ . '/../application/');
//定义应用配置
define('CONF_PATH',__DIR__.'/../conf/');
define( "WB_AKEY" , '493800849' );
define( "WB_SKEY" , 'fb444ef577bbeb4fc92677eb0bb99b9e' );
define( "WB_CALLBACK_URL" , 'http://www.yi-23.com/public/index/Userlogin/wbcallback.html' );

// E:\wamp\www\web\thinkphp\library\think\View.php
// 加载框架引导文件
//require __DIR__ . '/../thinkphp/start.php';
define('APP_PATH','./application/'); require './thinkphp/start.php';
