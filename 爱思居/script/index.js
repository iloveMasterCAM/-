var mySwiper = new Swiper(".swiper-container", {
	autoplay: 5000,
    pagination : '.swiper-pagination',
});

function Isubmit(o) {
	if (!isname(o.name.value)) {
		alert("姓名错误！");
		return false
	}
	if (!isphone(o.tel.value)) {
		alert("手机号错误！");
		return false
	}
	if (!isEmail(o.Email.value)) {
		alert("邮箱错误！");
		return false
	}
	return true
}
function isEmail(str) {
	var re = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
	if (re.test(str)) {
		return true
	} else {
		return false
	}
}
function isname(str) {
	var re = /[\u4e00-\u9fa5]{2,4}/;
	if (re.test(str)) {
		return true
	} else {
		return false
	}
}
function isphone(str) {
	var phone = /^1[1|3|4|5|7|8][0-9]{9}$/;
	if (phone.test(str)) {
		return true
	} else {
		return false
	}
}
$(function() {
	$(window).scroll(function() {
		var scrollval = $(window).scrollTop();
        
//        console.log(scrollval)
        
		if (scrollval >= 90) {
			$(".txt1").css({
				left: "0",
				position: "relative",
				opacity: "1"
			})
		}
		if (scrollval >= 850) {
			$("#AC").css({
				left: "0",
				position: "relative",
				opacity: "1"
			})
		}
		if (scrollval >= 1500) {
			$(".txt2").css({
				left: "0",
				position: "relative",
				opacity: "1"
			})
		}
		if (scrollval >= 2100) {
			$("#cooperate").css({
				left: "0",
				position: "relative",
				opacity: "1"
			});
              if($(window).innerWidth()>770){
            $("#footer,.author").show()
            }		
		}
		if (scrollval >= 2615) {
			$("#footer .box").css({
				bottom: "0",
				position: "relative",
				opacity: "1"
			})
		}
	})
});
var w = Math.floor(  Math.floor($("#memo").innerWidth()) - 45 )


$('#memo input').css({width:w-10})

$("#banenr .swiper-wrapper").height($("#banenr").height())

//mouseout
/*var mart = $(window).innerWidth()*0.06
$("#share").css({marginTop:mart,marginBottom:mart})*/