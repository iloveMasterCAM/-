(function (window) {
    $("[role='template']").each(function () {
        $(this).html("<div class='loading'><p>玩命加载中...</p><div class='typing_loader'></div></div>")
    })
    var r = {};
    var c = {
        'dburl': 'http://cusumer.buydee.org/',
        'isDown': false,
        'isUp': false,
        'pageSize': 10,
        'pageIndex' : 1,
        'fx':0,
        'fy':55,
        'fh':'auto',
        'fw':'auto',
        'headers': localStorage['token'] ? JSON.parse(localStorage['token']):{},
    }

    r.init = function () {
        var len = $("[role='template']").length;
        $("[role='template']").each(function (i) {
            var self = this,d = {};
            if($(this).attr("api-data")){
                d = JSON.parse($(this).attr('api-data'))
            }
            var url = $(this).attr('api-url')
            r.post(url,d,function(d){
                var id = $(self).attr('api-id'),type = $(self).attr('api-type')
                if(d.s){
                   $(self).html('');
                   var html = template(id,d);
                  $(self)[type](html);
                }
             if(i+1 == len){
              r.click();
              }
            }) 
        })
        c.isDown && plugs.setRefreshHeaderInfo();
        c.isUp && plugs.scrolltobottom();
        r.frame();
    }
    r.click = function(){
        $("body").undelegate("[event='click']", "click")
        mui("[event='click']").each(function (o, i) {
            i.addEventListener('tap', function () {
                var name = $(this).attr('api-name')
                var url = $(this).attr('api-url');
                var data;
                if($(this).attr('api-data')){
                    data = JSON.parse($(this).attr('api-data'));
                }else{
                    data = {};
                }
                api.openWin({
                    name: name,
                    url: url,
                    pageParam:data
                })
            });
        });
    }
    r.frame = function(){
        $("[role='frame']").each(function(){
            // 参数 配置 name url 是否弹动
            var d = $(this).attr('api-data')?JSON.parse($(this).attr('api-data')):{},name = $(this).attr('api-name'),url = $(this).attr('api-url');
            api.openFrame({
                name: name,
                url: url,
                rect: { x: c.fx,y: c.fy, w: c.fw, h: c.fh},
                bounces:true,
                pageParam: d
            });
        })
    }
    r.c = function (options) {
        var p = options || {};
        for (var key in p) {
            c[key] = p[key]
        }
    }
    r.post = function (url, data, callback) {
        var db = data ? data : {};
        var this_ = this;
        api.ajax({
            url: c.dburl + url,
            method: 'post',
            timeout: 30,
            dataType: 'json',
            returnAll: false,
            data: { values: db },
            cache: false,
            headers: c.headers
        }, function (ret, err) {
            if (ret) {
                if (ret.c == -1) {
                    api.toast({ msg: "请先登录" });
                }
                else {
                    callback(ret);
                }
            } else {
                if (JSON.stringify(err).indexOf('401') != 1 || JSON.stringify(err).indexOf('500') != 1) {
                    api.toast({
                        msg: '系统繁忙，请稍后再试!'
                    })
                }
                //  api.alert({
                //       msg: ('错误信息：' + JSON.stringify(err))
                //   });
            }
        });
    }
    var plugs = {};
    plugs.setRefreshHeaderInfo = function () {
            api.setRefreshHeaderInfo({
                loadingImg: 'widget://image/refresh.png',
                bgColor: '#fff',
                textColor: '#ccc',
                textDown: '下拉刷新...',
                textUp: '松开刷新...'
            }, function (ret, err) {
                // api.refreshHeaderLoadDone();
                $("[api-down]").each(function(){
                    downupfn(this,'api-down')
                })   
                c.pageIndex= 1;
                setTimeout(function(){
                    api.refreshHeaderLoadDone();
                },1000)
                if (typeof c.isDown == 'function')  c.isDown();
            });
    }
    plugs.scrolltobottom = function(){
        api.addEventListener({
            name:'scrolltobottom',
            extra:{
                threshold:10            //设置距离底部多少距离时触发，默认值为0，数字类型
            }
        }, function(ret, err){     
            $("[api-up]").each(function(){
                downupfn(this,'api-up')
            })
            if (typeof c.isUp == 'function')  c.isUp();
        });
    }
    function downupfn(self,key){
        var url = $(self).attr('api-url'),id = $(self).attr('api-id'),type = $(self).attr(key) || 'html', d = $(self).attr('api-data')?JSON.parse($(self).attr('api-data')):{};
        if(key == 'api-up'){
            d['pageIndex'] = ++c.pageIndex;
            d['pageSize'] = c.pageSize;
        }
        r.post(url,d,function(d){
            if(d.s){
                if(d.d.length == 0) return;
                var html = template(id,d);
                $(self)[type](html);
                r.click();
            }
            if(key == 'api-down'){
                api.refreshHeaderLoadDone();
            }
           
        })
    } 
   
    r.plugs = plugs;
    window.rc = r; 

})(window)