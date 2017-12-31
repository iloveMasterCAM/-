

var json = {}

	json.getattr = {  //获取元素属性    
		getid : function(pant,id,li,num){
			if(pant){
				var p = document.getElementById(pant)
				var ali = p.getElementsByTagName(id)[num]
				return ali.getElementsByTagName(li)
			}else{
				return document.getElementById(id)
			}
		},
		getTagName : function(pant,tag){
			if(pant){
				return pant.getElementsByTagName(tag)
			}else{			
				return document.getElementsByTagName(tag)
			}
			
		},
		getstyle : function(obj,attr){
//			if(obj.currentStyle){
//				return obj.currentStyle[attr]；
//			}else{
//				return getComputedStyle(obj)[attr]
//			}
			return obj.currentStyle ? obj.currentStyle[attr] : getComputedStyle(obj)[attr]
		},
	}
	json.remove = {
		fine : function(obj){
				var arr = [15,-15,13,-13,10,-10,8,-8,6,-6,4,-4,2,-2,0]
				var i = 0;
				clearInterval(obj.timer)
				obj.timer = setInterval(function(){
					obj.style.left = arr[i]+'px'
					i++
					if(i == arr.length){
						clearInterval(obj.timer)
						i = 0;
					}
				},30)
			}
	}





































