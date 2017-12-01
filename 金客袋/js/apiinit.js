(function () {
    function apimui() {
        this.mui = mui.init();
        this.url = 'http://cusumer.buydee.org/';
        this.headers = {};
        if (localStorage['token']) this.headers = JSON.parse(localStorage['token']);
    }
    apimui.prototype.event_click = function () {
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
    // 下拉刷新
    apimui.prototype.pullToRefresh = function (p) {
        mui.ready(function () {
            //循环初始化所有下拉刷新，上拉加载。
            mui.each(document.querySelectorAll(p.obj), function (index, pullRefreshEl) {
                mui(pullRefreshEl).pullToRefresh({
                    down: {
                        callback: function () {
                            p.down(this)
                        }
                    },
                    up: {
                        callback: function () {
                            p.up(this)
                        }
                    }
                });
            });

        });
    }
    //http://cusumer.buydee.org/
    apimui.prototype.post = function (url, data, callback) {
        var db = data ? data : {};
        var this_ = this;
        api.ajax({
            url: this_.url + url,
            method: 'post',
            timeout: 30,
            dataType: 'json',
            returnAll: false,
            data: { values: db },
            cache: false,
            headers: this_.headers
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
                 api.alert({
                      msg: ('错误信息：' + JSON.stringify(err))
                  });
            }
        });
    }
    apimui.prototype.config = function (pageParam) {
        var pageParam = pageParam || {};
        this.url = pageParam.url || this.url;
        this.template();
        this.event_click();
    
    }
    apimui.prototype.headImg = function (max) {
        var img = api.require("UIMediaScanner")
        var mediaScanner = api.require("mediaScanner")
        var imageClip = api.require("imageClip")
        var trans = api.require("trans")
        var systemType = api.systemType;
        var this_ = this;
        function updata() {
            img.open({
                type: 'picture',
                column: 4,
                classify: false,
                max: max,
                sort: {
                    key: 'time'
                },
                texts: {
                    stateText: '已选择*项',
                    cancelText: '取消',
                    finishText: '完成'
                },
                styles: {
                    bg: '#fff',
                    mark: {
                        icon: '',
                        position: 'top_right',
                        size: 20
                    },
                    nav: {
                        bg: '#21B56F',
                        stateColor: '#fff',
                        stateSize: 12,
                        cancelBg: '#fff',
                        cancelColor: '#fff',
                        cancelSize: 12,
                        finishBg: '#fff',
                        finishColor: '#21B56F',
                        finishSize: 12
                    }
                },
                exchange: true
            }, function (ret, err) {
                if (ret.list) {
                    if (ret.list != '') {
                        soursepath = ret.list[0].path;
                        clip({ path: ret.list[0].path });
                        $("#header span").show();
                        return;
                    }
                }

            });
        }
        function clip(src) {
            var rectRcg = api.frameWidth * 0.8;
            if (systemType == 'ios') {
                img.transPath({
                    path: src.path,
                }, function (ret, err) {
                    if (ret) {
                        imageClip.open({
                            path: ret.path,
                            x: 0,
                            y: h,
                            clipRect: {
                                x: (api.frameWidth / 2) - (rectRcg / 2),
                                y: rectRcg / 2,
                                w: rectRcg,
                                h: rectRcg,
                                fixation: true
                            }
                        })
                    }
                });
            } else {
                imageClip.open({
                    path: src.path,
                    x: 0,
                    y: h,
                    clipRect: {
                        x: (api.frameWidth / 2) - (rectRcg / 2),
                        y: rectRcg / 2,
                        w: rectRcg,
                        h: rectRcg,
                        fixation: true
                    }
                })
            }

        }
        $("#header span").on('click', function () {
            var url = ''
            if (systemType == 'ios') {
                url = 'fs://'
            }
            imageClip.save({
                savePath: url
            }, function (r, err) {
                if (r) {
                    trans.decodeImgToBase64({
                        imgPath: r.savePath
                    }, function (r, err) {
                        if (r.status) {
                            var path = r.base64Str;
                            var exprsess = "png";
                            if (soursepath.indexOf("jpg") != -1) exprsess = "jpg";
                            var Base64 = 'data:image/' + exprsess + ';base64,' + path;
                            $('#img img').attr('src', Base64)
                            api.showProgress({
                                title: '努力加载中...',
                                text: '先喝杯茶...',
                                modal: false
                            });
                            if (Base64.indexOf("base64,") != -1) {
                                var token = '';
                                if (localStorage["token"]) {
                                    token = JSON.parse(localStorage["token"])
                                }
                                api.ajax({
                                    url: 'http://image.buydee.org:900/Push/Up',
                                    method: 'post',
                                    timeout: 30,
                                    dataType: 'json',
                                    returnAll: false,
                                    data: {
                                        values: { base64String: Base64, exName: "." + exprsess }
                                    },
                                    cache: false,
                                    headers: token
                                }, function (ret, err) {
                                    if (ret.s) {
                                        this_.post('Account/ModifyHeadImg', { headImg: ret.d.u }, function (r) {
                                            if (r.s) {
                                                api.sendEvent({
                                                    name: 'setmsg',
                                                    extra: {
                                                        type: 'headImg',
                                                        d: ret.d.u
                                                    }
                                                });
                                                api.hideProgress();
                                                api.closeWin();
                                            }
                                        })
                                    } else {
                                        api.toast({
                                            msg: r.m
                                        })
                                    }
                                });
                            }
                        }
                    });
                    $("#header span").hide();
                    imageClip.close();
                }
            });
        })

    }
    apimui.prototype.template = function () {
        var this_ = this;
        mui("[role='template']").each(function (i, o) {
            var o = $(this)
            var data;
            if(o.attr('api-data')){
                data = JSON.parse(o.attr('api-data'));
            }else{
                data = {};
            }
            var id = o.attr('id'), event = o.attr('event'), tempid = o.attr('tempid'), url = o.attr('api-url'), html;
            
            this_.post(url, data, function (r) {
                //  alert(JSON.stringify(r))
                html = template(tempid, r);
                $("#" + id)[event](html);
                
                this_.event_click();
            })
            // 7fd374b4-16a6-4269-86b4-cb02879da8a4
        })

    }
    apimui.prototype.upimg = function () {
      
        var img = api.require("UIMediaScanner")
        var mediaScanner = api.require("mediaScanner")
        var imageClip = api.require("imageClip")
        var trans = api.require("trans")
        var systemType = api.systemType;
        var len = arguments[0];
        var callback = arguments[1];
        var max =  arguments[2] || 9;
        
        img.open({
            type: 'picture',
            column: 4,
            classify: false,
            max: max,
            sort: {
                key: 'time'
            },
            texts: {
                stateText: '已选择*项',
                cancelText: '取消',
                finishText: '完成'
            },
            styles: {
                bg: '#fff',
                mark: {
                    icon: '',
                    position: 'top_right',
                    size: 20
                },
                nav: {
                    bg: '#21B56F',
                    stateColor: '#fff',
                    stateSize: 12,
                    cancelBg: '#fff',
                    cancelColor: '#fff',
                    cancelSize: 12,
                    finishBg: '#fff',
                    finishColor: '#21B56F',
                    finishSize: 12
                }
            },
            exchange: true
        }, function (r, err) {
            if (r.list) {
                if (r.list != '') {
                    var list_len = r.list.length;
                    var k = 0;
                   
                    if (list_len + len > max) {
                        k = list_len - ((len + list_len) - max)
                    } else {
                        k = list_len
                    }
                    for (var i = 0; i < k; i++) {
                        soursepath = r.list[i].path;
                        trans.decodeImgToBase64({
                            imgPath: soursepath
                        }, function (r, err) {
                            if (r.status) {
                                var path = r.base64Str;
                                var exprsess = "png";
                                if (soursepath.indexOf("jpg") != -1) exprsess = "jpg";
                                var Base64 = 'data:image/' + exprsess + ';base64,' + path;
                                //  $("").before("<li class='aui-col-xs-4' style='background: url(" + Base64 + ") no-repeat;background-size: cover;background-position: center center;margin-bottom: 2px'></li>")
                                callback({ base64String: Base64, exName: "." + exprsess });
                            }

                        })
                    }

                }
            }
        });

    }
    apimui.prototype.upimgurl = function (arr,callback) {
        var this_ = this;
        arr.forEach(function(v,i,r){
            api.ajax({
                url: 'http://cusumer.buydee.org/Image/Upload',
                method: 'post',
                timeout: 30,
                dataType: 'json',
                returnAll: false,
                data: {
                    values: {images:v}
                },
                cache: false,
                headers:  this_.headers
            }, function (r, err) {
             //   alert(JSON.stringify(err))
                if (r.s) {
                    callback(r)
                } else {
                    api.toast({
                        msg: err.m
                    })
                   // alert(JSON.stringify(err))
                }
            });
        });
        
    }
    apimui.prototype.b = function () {

    }
    apimui.prototype.c = function () {

    }

    window.apimui = new apimui();
})()




