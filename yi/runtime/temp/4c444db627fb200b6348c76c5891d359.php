<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/data/home/qxu1146510236/htdocs/public/../application/index/view/index/homepage.html";i:1511786118;}*/ ?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>yi-23,设置为主页</title>

      <link rel="icon" href="__IMG__/show/icon/yi-23.ico"/>

    <style type="text/css">

body{font-family:Arial, Helvetica, sans-serif;font-size:14px;width:980px;margin:0 auto;padding:6px 0 0;}

img,h3,h4,h2,h6{border:0;margin:0;padding:0;}

.r1,.r2{height:1px;display:block;border-left:1px solid #e5ecfc;border-right:1px solid #e5ecfc;background:#e5ecfc;overflow:hidden;margin:0 2px}   

.r2{height:1px;display:block;border-left:1px solid #e5ecfc;border-right:1px solid #e5ecfc;background:#f4f9ff;overflow:hidden;margin:0 1px;}   

.con{font-size:12px;font-weight:bold;border-left:1px solid #e5ecfc;border-right:1px solid #e5ecfc;background:#f4f9ff;width:978px;}  

.logo{float:left;}

.nav{float:right;width:832px;padding:0 10px;margin:12px 0 0 0;background:#e4ebfb;height:25px;line-height:25px;}

.cl{clear:both;font-size:0px;height:0px;line-height:0px;overflow:hidden;}

.nav a{float:right;color:#0a348a;}

.nav strong{float:left;}

.crumb{color:#000ccc;height:18px;line-height:18px;margin-top:10px;font-size:12px;}

.crumb a{text-decoration:none;}

.crumb span{color:#000000;}

h3{font-size:18px;color:#000000;margin:28px 0 18px;}

h4{font-weight:normal;font-size:14px;margin-bottom:15px;}



.brs,.brs a,.brs a.ff_icon,.brs a.s360_icon,.brs a.aoyou_icon,.brs a.sougou_icon,.brs a.qq_icon,.brs a.tt_icon,.brs a.chrome_icon,.brs a.s360jishu_icon,.brs a.world_jishu_icon,.brs a.opera_icon,.brs a.world_icon,.brs a.safari_icon,.brs a.green_icon,.brs a.kr_icon,,.brs a.bdbrowser_icon{height:36px;line-height:36px;}

.brs a{font-size:16px;padding-left:40px;background:url(img/ie.gif) no-repeat 10px center;display:inline-block;color:#000000;text-decoration:none;width:938px;}

.brs a.ff_icon{background:url(img/firefox.gif) no-repeat 10px center;}

.brs a.s360_icon{background:url(img/360.gif) no-repeat 10px center;}

.brs a.aoyou_icon{background:url(img/aoyou3.gif) no-repeat 10px center;}

.brs a.sougou_icon{background:url(img/sougou.gif) no-repeat 10px center;}

.brs a.qq_icon{background:url(img/qq.gif) no-repeat 10px center;}

.brs a.tt_icon{background:url(img/tt.gif) no-repeat 10px center;}

.brs a.chrome_icon{background:url(img/chrome.gif) no-repeat 10px center;}

.brs a.s360jishu_icon{background:url(img/360jishu.gif) no-repeat 10px center;}

.brs a.world_jishu_icon{background:url(img/world_jishu.gif) no-repeat 10px center;}

.brs a.opera_icon{background:url(img/opera.gif) no-repeat 10px center;}

.brs a.world_icon{background:url(img/world.gif) no-repeat 10px center;}

.brs a.safari_icon{background:url(img/safari.gif) no-repeat 10px center;}

.brs a.green_icon{background:url(img/green.gif) no-repeat 10px center;}

.brs a.kr_icon{background:url(img/kr.gif) no-repeat 10px center;}

.brs a.bdbrowser_icon{background:url(img/bdbrowser_new.png) no-repeat 10px center;}

.tishi_con{border:1px solid #e5ecfb;border-width:0 1px 0;}

.tool_con{background:url(img/tuijian_bg.gif) repeat-x;height:50px;line-height:50px;}

.tool_con2{background:url(img/tuijian_bg.gif) repeat-x left bottom;height:10px;line-height:30px;}

#set_auto1,#set_auto2{display:none;}

.tool_kj,.tool_sz{float:left;padding-left:30px;}

.tool_kj img,.tool_sz img{vertical-align:middle;margin-right:10px;cursor:pointer;}

.tool_kj{width:455px;}

.tool_sz{border-left:1px solid #e7e7e7;display:block;}

.tool_sz_nodis{display:none;}

h6{font-size:14px;color:#000000;margin:0 0 20px 0;}

.detail{width:918px;padding:30px 30px 15px;}

.tip{margin-top:15px;color:#666666;}

#ie,#360,#aoyou,#sougou,#qq,#tt,#firefox,#chrome,#360ji,#world_ji,#opera,#world,

#safari,#green,#kr,#bdbrowser{cursor:pointer;}

#ie_con,#aoyou_con,#s360_con,#sougou_con,#qq_con,#tt_con,#s360ji_con,#firefox_con,#chrome_con,#world_ji_con,#opera_con,#world_con,#safari_con,#green_con,#kr_con,#bdbrowser_con{display:none;}

.sz_qus,.kj_qus{position:relative;background:url(img/question.gif) no-repeat;vertical-align:middle;width:16px;height:16px;display:inline-block;}

a.kj_qus:hover,a.sz_qus:hover{background:url(img/question_active.gif) no-repeat;}

.kj_tishi{position:absolute;top:-190px;left:-130px;display:none;}

.df_ts_ie{position:absolute;top:-165px;left:-158px;display:none;}

.df_ts_ff{position:absolute;top:-140px;left:-158px;display:none;}

.mg10{margin-bottom:10px;}

.arrow,.arrow_open{height:24px;line-height:24px;display:inline-block;margin:-20px 0 0 940px;width:9px;background:url(img/arrow_close.gif) no-repeat;}

.arrow_open{background:url(img/arrow_open.gif) no-repeat;}

.kj_bt,a.kj_bt:link,a.kj_bt:visited,a.kj_bt:hover,a.kj_bt:active{background:url(img/kj_bt.gif) no-repeat left center;width:58px;height:27px;line-height:27px;vertical-align:middle;margin-right:10px;display:inline-block;color:#1b1b1b;text-decoration:none;font-size:12px;padding-left:26px;}

a.kj_bt:visited{color:#014bc6;}

a.kj_bt:hover{background:url(img/kj_bt_active.gif) no-repeat left center;}

a.kj_bt:active{color:#014bc6;}

.uptitle .con,.uptitle .r1,.uptitle .r2{background:#e1ecff}

.upbg{background:#e1ecff}

#foot{text-align:center;color:#666666;font-size:12px;margin:20px 0;border-top:1px solid #dddddd;padding-top:20px;}

#foot a{color:#666666;}

div img{margin-bottom:15px;}

.chrome_xz{width:144px;height:29px;background:url(img/chrome_bg.jpg);display:inline-block;color:#fff;font-weight:bold;margin-right:10px;text-indent:30px;text-decoration:none}

.chrome_txt{padding-left:0px}

.chrome_txt span{width:5px;height:18px;display:inline-block;background:#47BEE6;margin-left:5px;vertical-align:-2px}

        .logo img{

            width: 125px;
    margin-bottom: 0;
    padding-bottom: 0;
    margin-top: 10px;

        }

</style>

</head>

<body>

   <div id="head">

    <div class="logo"><a href="http://www.yi-23.com/" target="_blank"><img src="__IMG__/show/yi-23.png"></a></div>

    <div class="nav"><strong id="seth">把yi-23设为主页</strong><a href="http://www.yi-23.com/">yi-23首页</a></div>

    <div class="cl"></div>

</div>

<div class="content">

	<h3>如何把yi-23设为您的上网主页？</h3>

    <h4>您的浏览器可能不支持自动设置主页。请参考以下步骤，设置yi-23为您的上网主页。</h4>

    <div id="holder">

	<div id="broswer8" class="">

	<a name="chromec"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="chrome" onclick="conSwitch('chrome')"><a href="#chrome" class="chrome_icon" >Chrome浏览器</a><span class="arrow_open"></span></div>

    <div class="tishi_con" id="chrome_con">

    

        <div class="detail">

        <h6>1.点击浏览器右上角“自定义”按钮，选择“设置”</h6>

        <div><img src="__IMG__/show/homepage/chrome3.jpg"></div>

        <h6>2.点选“打开特定网页或一组网页”，点击“设置网页”</h6>

        <div><img src="__IMG__/show/homepage/chrome4.jpg"></div>

        <h6>3.在添加新网页后输入：www.yi-23.com，点击其他地址后"X"，最后点击“确定”</h6>

        <div><img src="__IMG__/show/homepage/chrome5.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div><div id="label"></div>

    

    <div id="broswer1">

	<a name="iec"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="ie" onclick="conSwitch('ie')"><a href="#iec" class="ie_con" >IE浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="ie_con">

        

            <div class="detail">

            <h6>1.点击"工具"菜单，选择"internet选项"。</h6>

            <div><img src="__IMG__/show/homepage/ie1.jpg"></div>

            <h6>2.在输入框输入：www.yi-23.com，点击确定，设置成功。</h6>

            <div><img src="__IMG__/show/homepage/ie2.jpg"></div>

            <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

            </div>

    </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

     

    <div id="broswer2">

	<a name="circle"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="s360" onclick="conSwitch('s360')"><a href="#circle" class="s360_icon" >360浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="s360_con">

    

        <div class="detail">

        <h6>方法1：设置浏览器主页为yi-23</h6>

        <h6>1.点击"工具"菜单， 选择"主页设置"。</h6>

        <div><img src="__IMG__/show/homepage/360_1.png"></div>

        <h6>2.选择"浏览器启动时打开"的输入框，输入"www.yi-23.com" ，设置成功。 </h6>

        <div><img src="__IMG__/show/homepage/360_2.png"></div>

        <h6>方法2：设置工具栏搜索为yi-23</h6>

        <h6>1.点击浏览器工具栏的下拉菜单，选择 "yi-23"，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/360_3.png"></div>

        <h6>方法3：设置导航默认搜索为yi-23</h6>

        <h6>1.在"hao.360.cn"导航页，点击"综合搜索"，选择"yi-23"，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/360_4.png"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer3">

	<a name="aoyouc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="aoyou" onclick="conSwitch('aoyou')"><a href="#aoyouc" class="aoyou_icon" >傲游浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="aoyou_con">

    

        <div class="detail">

        <h6>1.点击"工具"菜单，选择"遨游设置中心"。</h6>

        <div><img src="__IMG__/show/homepage/aoyou2_01.jpg"></div>

        <h6>2.在"主页"栏目输入"www.yi-23.com" ， 点击"应用"，设置成功</h6>

        <div><img src="__IMG__/show/homepage/aoyou2_02.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer4">

	<a name="sougouc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="sougou" onclick="conSwitch('sougou')"><a href="#sougouc" class="sougou_icon" >搜狗浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="sougou_con">

   

        <div class="detail">

        <h6>1.点击"工具"菜单，选择"搜狗高速浏览器选项"</h6>

        <div><img src="__IMG__/show/homepage/sougou1.jpg"></div>

        <h6>2.点选"自定义网址"，并在输入框内输入"www.yi-23.com"，点选"确定"，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/sougou2.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer5">

	<a name="qqtc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="qq" onclick="conSwitch('qq')"><a href="#qqtc" class="qq_icon" >QQ浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="qq_con">

  

        <div class="detail">

        <h6>1.点击浏览器右上角"常用菜单"按钮，选择"选项"。</h6>

        <div><img src="__IMG__/show/homepage/qq1.jpg"></div>

        <h6>2.点选"自定义网址"选项，输入"www.yi-23.com" ，点击"保存"，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/qq2.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer6">

	<a name="ttc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="tt" onclick="conSwitch('tt')"><a href="#ttc" class="tt_icon" >TT浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="tt_con">

    

        <div class="detail">

        <h6>1.点击浏览器右上角"菜单"，选择"工具"，"TT选项"。</h6>

        <div><img src="__IMG__/show/homepage/tt1.jpg"></div>

        <h6>2.在"TT主页"栏目下输入"www.yi-23.com" 。 在"启动时"栏目下勾选"打开主页"。点击最上面一行"保存"，设置成功。 </h6>

        <div><img src="__IMG__/show/homepage/tt2.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer7">

	<a name="ffc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="firefox" onclick="conSwitch('firefox')"><a href="#ffc" class="ff_icon" >Firefox浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="firefox_con">

    

        <div class="detail">

        <h6>1.点击浏览器菜单栏中的工具按钮，点击"选项"。</h6>

        <div><img src="__IMG__/show/homepage/firefox01.jpg"></div>

        <h6>2.选择"常规"选项，在"主页"后的框中填入"www.yi-23.com" ，点击确定。</h6>

        <div><img src="__IMG__/show/homepage/firefox02.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    

    

     

    <div id="broswer9">

	<a name="jishu360c"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="s360ji" onclick="conSwitch('s360ji')"><a href="#jishu360c" class="s360jishu_icon" >360极速浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="s360ji_con">

    	



        <div class="detail">

        <h6>1.点击浏览器右上角工具按钮，选择"选项"。</h6>

        <div><img src="__IMG__/show/homepage/360_jishu1.png"></div>

        <h6>2.在"启动时"项，确认点选"打开主页"。在"主页"，"打开此页"项目后的框中输入"www.yi-23.com" ，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/360_jishu2.png"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer10">

	<a name="world_jishuc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="world_ji" onclick="conSwitch('world')"><a href="#world_jishuc" class="world_jishu_icon">世界之窗极速版浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="world_ji_con">

    	

        <div class="detail">

        <h6>1.点击浏览器右上角工具按钮，选择"选项"。</h6>

        <div><img src="__IMG__/show/homepage/world_jishu1.jpg"></div>

        <h6>2.在"启用时"项，确认点选"打开主页"。在"主页"，点选"打开此页"，在框中输入"www.yi-23.com" ，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/world_jishu2.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer11">

	<a name="operac"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="opera" onclick="conSwitch('opera')"><a href="#operac" class="opera_icon" >Opera浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="opera_con">

    	

        <div class="detail">

        <h6>1.点击浏览器左上角工具按钮，选择"设置"，首选项。</h6>

        <div><img src="__IMG__/show/homepage/opera1.jpg"></div>

        <h6>2.点击"启动"项的文字框，选择"打开主页"。</h6>

        <div><img src="__IMG__/show/homepage/opera2.jpg"></div>

        <h6>3.在"主页"项中输入"www.yi-23.com"，点击确定，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/opera3.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer12">

	<a name="worldc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="world" onclick="conSwitch('world')"><a href="#worldc" class="world_icon" >世界之窗浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="world_con">

    	

        <div class="detail">

        <h6>1.选择"工具"菜单，"internet选项"。</h6>

        <div><img src="__IMG__/show/homepage/world_window1.jpg"></div>

        <h6>2.在输入框内输入"www.yi-23.com" ，点击确定，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/world_window2.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer13">

	<a name="safaric"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="safari" onclick="conSwitch('safari')"><a href="#safaric" class="safari_icon" >Safari浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="safari_con"> 

    	

        <div class="detail">

            <h6>1.点击"编辑"菜单，选择"偏好设置..."</h6>

            <div><img src="__IMG__/show/homepage/safari1.jpg"></div>

            <h6>2.点击"高级"选项卡，在主页项输入"www.yi-23.com" ，设置成功，关闭对话框即可。。</h6>

            <div><img src="__IMG__/show/homepage/safari2.jpg"></div>

            <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

<!--     __IMG__/show/homepage/-->

    <div id="broswer14">

	<a name="greenc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="green" onclick="conSwitch('green')"><a href="#greenc" class="green_icon" >绿色浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="green_con">

    

        <div class="detail">

        <h6>1.选择"工具"菜单，点击GreenBrowser选项。</h6>

        <div><img src="__IMG__/show/homepage/green_browser1.jpg"></div>

        <h6>2.在左边栏选择"启动/退出"项，点选"自定义主页"并输入"www.yi-23.com"，点击确定，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/green_browser2.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

     

    <div id="broswer15">

	<a name="krc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="kr" onclick="conSwitch('kr')"><a href="#krc" class="kr_icon" >KR浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="kr_con">

    

        <div class="detail">

        <h6>1.点击"工具"菜单，选择"修改主页"。</h6>

        <div><img src="__IMG__/show/homepage/kr1.jpg"></div>

        <h6>2.在框中输入"www.yi-23.com"，点击确定，设置成功。</h6>

        <div><img src="__IMG__/show/homepage/kr2.jpg"></div>

        <div class="tip"><strong>提示：</strong>如果无法设置yi-23为您的上网主页，可能您的浏览器已中毒，请先查杀病毒。</div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>



	<div id="broswer16">

	<a name="bdbrowserc"></a>

    <b class="r1"></b><b class="r2"></b>  

    <div class="brs con" id="bdbrowser" onclick="conSwitch('bdbrowser')"><a>百度浏览器</a><span class="arrow"></span></div>

    <div class="tishi_con" id="bdbrowser_con">

    

        <div class="detail">

        <h6>方法1：</h6>

	<h6>1.点击浏览器右上角的菜单按钮<img style="margin:0px;" src="__IMG__/show/homepage/bdb_menu.png">， 选择"选项"，打开“常规”选项卡。</h6>

        <h6>2.选择"启动时打开"-“主页”，点击“修改主页”按钮，在弹窗中点击“使用yi-23”，再点击“确定”按钮即可 。</h6>

		<div><img src="__IMG__/show/homepage/bdb_01.png"></div>

        <h6>方法2：</h6>

	<h6>1.打开yi-23浏览器，在yi-23浏览器界面顶部右键，勾选“主页按钮”。</h6>

	<div><img src="__IMG__/show/homepage/bdb_02.png"></div>

        <h6>2.在地址栏输入yi-23的网址：www.yi-23.com，输入完毕后，按“回车”键打开。</h6>

        <h6>3.右击导航条上的"主页"<img style="margin:0px;" src="__IMG__/show/homepage/bdb_home.png">， 图标， 选择"设置当前页为主页"。</h6>

        <div><img src="__IMG__/show/homepage/bdb_03.png"></div>

        <h6>方法3：</h6>

	<h6>1.打开yi-23浏览器，在yi-23浏览器界面顶部右键，勾选“主页按钮”。</h6>

        <div><img src="__IMG__/show/homepage/bdb_02.png"></div>

	<h6>2.右击导航条上的"主页" <img style="margin:0px;" src="__IMG__/show/homepage/bdb_home.png">图标， 选择"主页设置"。</h6>

	<h6>3.选择"启动时打开"-“主页”，点击“修改主页”按钮，在弹窗中点击“使用yi-23”，再点击“确定”按钮即可 。</h6>

	<div><img src="__IMG__/show/homepage/bdb_04.png"><br><img src="__IMG__/show/homepage/bdb_05.png"></div>

        </div>

    </div>

    <div class="mg10"><b class="r2"></b><b class="r1"></b></div>

    </div>

    

    </div>

<div id="foot">©2016&nbsp;yi-23&nbsp;</div>

</div>

 

</body>

<script src="__JS__/jquery.js"></script>

<script>

function G(id){

    return document.getElementById(id);

}

function addEV(o, e, f){

    if(window.attachEvent){

        o.attachEvent("on" + e, f);

    }else if(window.addEventListener){ 

        o.addEventListener(e, f, false);

    }

}

   



function conSwitch(key){

   

  

//var connum = (".tishi_con").length;

//	var preconnums = (".con").length;

//	var _display = G(key + "_con").style.display;

	//var _arrow = G(key).getElementsByTagName("span")[0].className;

	

	$(".tishi_con").hide();

    

	$('#'+key + "_con").show();

//	G(key).getElementsByTagName("span")[0].className = _arrow == "arrow"?"arrow_open":"arrow";

}



function showTip(obj){

	G(obj+"_tishi").style.display = "block";

}



function hidTip(obj){

	G(obj+"_tishi").style.display = "none";

}



(function(){

	var se = /se /gi.test(navigator.userAgent);

	var wldji = /AppleWebKit/gi.test(navigator.userAgent) && /theworld/gi.test(navigator.userAgent);

	var wld = /theworld/gi.test(navigator.userAgent);

	var s360 = /360se/gi.test(navigator.userAgent);

	var s360ji = /360chrome/gi.test(navigator.userAgent);

	var greenb = /greenbrowser/gi.test(navigator.userAgent);

	var qqb = /qqbrowser/gi.test(navigator.userAgent);

	var ttb = /tencenttraveler/gi.test(navigator.userAgent);

	var maxth = /maxthon/gi.test(navigator.userAgent);

	var krb = /krbrowser/gi.test(navigator.userAgent);

	var sb = false;

	try{ 

		sb = +external.twGetVersion(external.twGetSecurityID(window)).replace(/\./g,"")>1013;

	}catch(e){}

	if(/MSIE/gi.test(navigator.userAgent) && !maxth && !wldji && !wld && !s360 && !s360ji && !greenb && !qqb && !ttb && !maxth && !krb && !sb){

		G("set_auto1").style.display = "block";

	}

	if(/firefox/gi.test(navigator.userAgent)){

		G("set_auto2").style.display = "block";

	}

})();



function showAns(obj){

	if(/MSIE/gi.test(navigator.userAgent)){

		G(obj+"_ie_tishi").style.display = "block";

	}else{

		G(obj+"_ff_tishi").style.display = "block";

	}

}



function hidAns(obj){

	if(/MSIE/gi.test(navigator.userAgent)){

		G(obj+"_ie_tishi").style.display = "none";

	}else{

		G(obj+"_ff_tishi").style.display = "none";

	}

}





function setDefault(){

//	if(/MSIE 7.0/gi.test(navigator.userAgent)){

//		window.external.AddSearchProvider('http://www.yi-23.com/cache/sethelp/xml/yi-23ie7.xml');

//	}else if(/MSIE 8.0/gi.test(navigator.userAgent)){

//		window.external.AddSearchProvider('http://www.yi-23.com/cache/sethelp/xml/yi-23.xml');

//	}else if(/MSIE 9.0/gi.test(navigator.userAgent)){

//		window.external.AddSearchProvider('http://www.yi-23.com/cache/sethelp/xml/yi-23.xml');

//	}else{

//		window.external.AddSearchProvider('http://www.yi-23.com/cache/sethelp/xml/yi-23.xml');

//	}

}





(function(){

	var holder = G("holder");

	 if(/BIDUBrowser/gi.test(navigator.userAgent) && (typeof window.external.GetVersion != "undefined")){

		G("bdbrowser_con").style.display = "block";

		holder.insertBefore(G("bdbrowser_con").parentNode,G("label"));

		G("bdbrowser").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/firefox/gi.test(navigator.userAgent)){

		G("firefox_con").style.display = "block";

		holder.insertBefore(G("firefox_con").parentNode,G("label"));

		G("firefox").getElementsByTagName("span")[0].className = "arrow_open";

		G("set_auto1").className = "tool_sz_nodis";

		G("set_auto2").className = "tool_sz";

	 }else if(/AppleWebKit/gi.test(navigator.userAgent) && /theworld/gi.test(navigator.userAgent)){

	 	G("world_ji_con").style.display = "block";

		holder.insertBefore(G("world_ji_con").parentNode,G("label"));

		G("world_ji").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/theworld/gi.test(navigator.userAgent)){

	 	G("world_con").style.display = "block";

		holder.insertBefore(G("world_con").parentNode,G("label"));

		G("world").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if((/qqbrowser/gi.test(navigator.userAgent)) || (/chrome/gi.test(navigator.userAgent) && /qqbrowser/gi.test(navigator.userAgent))){

	 	G("qq_con").style.display = "block";

		holder.insertBefore(G("qq_con").parentNode,G("label"));

		G("qq").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/360chrome/gi.test(navigator.userAgent) || (/360/gi.test(navigator.userAgent) && /qihu/gi.test(navigator.userAgent))){

	 	G("s360ji_con").style.display = "block";

		holder.insertBefore(G("s360ji_con").parentNode,G("label"));

		G("s360ji").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/se /gi.test(navigator.userAgent)){

	 	G("sougou_con").style.display = "block";

		holder.insertBefore(G("sougou_con").parentNode,G("label"));

		G("sougou").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/chrome/gi.test(navigator.userAgent)){

	 	G("chrome_con").style.display = "block";

		holder.insertBefore(G("chrome_con").parentNode,G("label"));

		G("chrome").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/opera/gi.test(navigator.userAgent)){

	 	G("opera_con").style.display = "block";

		holder.insertBefore(G("opera_con").parentNode,G("label"));

		G("opera").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/360se/gi.test(navigator.userAgent)){

	 	G("s360_con").style.display = "block";

		holder.insertBefore(G("s360_con").parentNode,G("label"));

		G("s360").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/greenbrowser/gi.test(navigator.userAgent)){

	 	G("green_con").style.display = "block";

		holder.insertBefore(G("green_con").parentNode,G("label"));

		G("green").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/tencenttraveler/gi.test(navigator.userAgent)){

	 	G("tt_con").style.display = "block";

		holder.insertBefore(G("tt_con").parentNode,G("label"));

		G("tt").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/maxthon/gi.test(navigator.userAgent)){

	 	G("aoyou_con").style.display = "block";

		holder.insertBefore(G("aoyou_con").parentNode,G("label"));

		G("aoyou").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/safari/gi.test(navigator.userAgent)){

	 	G("safari_con").style.display = "block";

		holder.insertBefore(G("safari_con").parentNode,G("label"));

		G("safari").getElementsByTagName("span")[0].className = "arrow_open";

	 }else if(/krbrowser/gi.test(navigator.userAgent)){

		G("kr_con").style.display = "block";

		holder.insertBefore(G("kr_con").parentNode,G("label"));

		G("kr").getElementsByTagName("span")[0].className = "arrow_open";

	 }else{

	 	

	 }

})();



(function(){

	for(var i = 1;i < 17; i++){

//		var headeles = G("broswer" + i);

//		headeles.onmouseover = function(){

//			yi-23.dom.addClass(this,"uptitle");

//		}

//		headeles.onmouseout = function(){

//			yi-23.dom.removeClass(this,"uptitle");

//		}

	}

})();

</script>

</html>

