$("#mover .share").css({top:'0'})
//alert($("#mover form").offset().top);
 var iform = $("#mover form").offset().top;
 var m_txt1 = $("#mover .m_txt1").offset().top;
 var m_txt2 = $("#mover .m_txt2").offset().top;
 var AC = $("#mover .AC").offset().top;
 var school  = $("#mover .school ").offset().top;
 var mover_footer  = $(".mover_footer").offset().top;
var scrollHeight = $(document).height();
var windowHeight = $(this).height();
  $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
      if(scrollTop + windowHeight >= (iform/1.2)){
         $("#mover form").css({top:'0'})
      }
       if(scrollTop + windowHeight >= (m_txt1*0.9)){
         $("#mover .m_txt1").css({top:'0'})
      }
      if(scrollTop + windowHeight >= (AC*0.9)){
         $("#mover .AC").css({top:'0'})
      }
      if(scrollTop + windowHeight >= (m_txt2*0.9)){
         $("#mover .m_txt2").css({top:'0'})
      }
      if(scrollTop + windowHeight >= (school*0.9)){
         $("#mover .school").css({top:'0'})

      }
      if(scrollTop + windowHeight >= (mover_footer*1.05)){
         $(".mover_footer .box").css({top:'0'})

      }
      //.mover_footer .box
        if (scrollTop + windowHeight == scrollHeight) {

   
        }
    });