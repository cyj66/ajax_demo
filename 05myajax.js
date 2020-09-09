function obj2str(obj){     //将传进来的对象转化为格式key=value&key=value
    var res=[];
    for(var k in obj){
        res.push(encodeURIComponent(k)+"="+encodeURIComponent(obj[k]));     //URL中不能出现中文，有中文得转码
    }
    return res.join("&");
}
//封装自己的ajax方法
//后台地址，传递的参数，成功时执行的回调函数，失败时执行的回调函数
function ajax(url,obj,timeout,success,error) {
    //将传进来的对象转化为格式key=value&key=value
    var str=obj2str(obj);
    var timer;
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET",url+"?"+str,true);
    xmlhttp.send();
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState===4){
            clearInterval(timer);    //若请求成功则可清除定时器
            if(xmlhttp.status>=200&&xmlhttp.status<=300||xmlhttp.status==304){
                success(xmlhttp);
            }else{
                error(xmlhttp);
            }
        }
    }
    //判断外界是否传入了超时时间
    if(timeout){
       timer=setTimeout(function(){
            console.log("中断请求");
            xmlhttp.abort();     //超过时间限制则中断请求
            clearTimeout(timer);
        },timeout);
    }
}