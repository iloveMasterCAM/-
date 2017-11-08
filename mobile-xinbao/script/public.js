var Hstep2 = $("#step2").height()
    var Hnav_all = $("#nav_all").height()
    var Hsearch = $("#search").height()

    $("#step2").css({top:(-Hstep2-15)+'px'})
    $("#nav_box .caidan").on('click',function () {
      $("#nav_all").css({top:'0px'})
      $("#bg").show()
    })
    $("#nav_all .person").on('click',function(){
    $("#step2").css({top:'0px'})
    })
    $("#step2 .retu").on('click',function(){
    $("#step2").css({top:(-Hstep2)+'px'})
    }) 
    $("#bg").on('click',function(){
    $("#nav_all").css({top:(-Hnav_all)+'px'})
    $("#step2").css({top:(-Hstep2)+'px'})
    $("#search").css({top:'-74px'})
    $("#bg").hide()
    })
    $("#nav_box .fangdajing").on('click',function(){
        $("#search").css({top:'74px'})
        $("#bg").show()
    })