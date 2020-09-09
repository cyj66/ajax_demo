function obj2str(data){     //将传进来的对象转化为格式key=value&key=value
    var res=[];
    for(var k in data){
        res.push(encodeURIComponent(k)+"="+encodeURIComponent(data[k]));     //URL中不能出现中文，有中文得转码
    }
    return res.join("&");
}
//封装自己的ajax方法
//后台地址，传递的参数，成功时执行的回调函数，失败时执行的回调函数
function ajax(option) {       //用对象的形式传入，就可以不用按顺序传入参数了
    //将传进来的对象转化为格式key=value&key=value
    var str=obj2str(option.data);
    var timer;
    var xmlhttp=new XMLHttpRequest();
    if(option.type.toLowerCase()==="get"){     //统统转为小写，这样输入的不管是大写小写都可处理
        xmlhttp.open(option.type,option.url+"?"+str,true);
        xmlhttp.send();
    }else{
        xmlhttp.open(option.type,option.url,true)
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send(str);
    }
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState===4){
            clearInterval(timer);    //若请求成功则可清除定时器
            if(xmlhttp.status>=200&&xmlhttp.status<=300||xmlhttp.status==304){
                option.success(xmlhttp);
            }else{
                option.error(xmlhttp);
            }
        }
    }
    //判断外界是否传入了超时时间
    if(option.timeout){
       timer=setTimeout(function(){
            console.log("中断请求");
            xmlhttp.abort();     //超过时间限制则中断请求
            clearTimeout(timer);
        },option.timeout);
    }
}