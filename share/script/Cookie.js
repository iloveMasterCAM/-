 function Cookie(){  }
    
    Cookie.prototype.getCookie = function(Name){
         if (document.cookie.length>0)
        {
                c_start=document.cookie.indexOf(Name + "=")
            if (c_start!=-1){ 
                
                c_start=c_start + Name.length+1 
                c_end=document.cookie.indexOf(";",c_start)
                if (c_end==-1) c_end=document.cookie.length
                return unescape(document.cookie.substring(c_start,c_end))
            } 
        }
        return false;
    }
    
    Cookie.prototype.setCookie = function(Name,key){
         document.cookie=""+Name+"="+key;
    }
    
    Cookie.prototype.delCookie = function(Name){
        var exp = new Date();
        exp.setTime(exp.getTime() - 1);
        var cval=getCookie(Name);
        if(cval!=null)
        document.cookie= Name + "="+cval+";expires="+exp.toGMTString();
    }
    window.cookie = new Cookie();