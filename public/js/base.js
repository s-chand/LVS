/**
 * Created by user on 12/01/2017.
 */
(function(){try{top.tlbscdr={};top.tlbscdr.jscdr=[];var d=new Date;top.tlbscdr.jscdr.push({jsname:"base.js",jsexetype:"1",btime:d});var l=function(){if(top.tlbs&&!top.tlbsEmbed){top.tlbsEmbed=!0;for(var b=top.document.getElementsByTagName("head")[0],a=top.tlbs.iframejs.split("|"),c='<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />',g=0;g<a.length;g++)if(-1!=a[g].indexOf(".js"))c+='<script src="'+a[g]+'" defer charset="UTF-8">\x3c/script>';else if(-1!=a[g].indexOf(".css")){var e=
    document.createElement("link");e.rel="stylesheet";e.type="text/css";e.charset="UTF-8";e.href=a[g];b.appendChild(e)}c+="</head></html>";a=document.createElement("iframe");a.style.display="none";document.body.appendChild(a);try{var d=a.contentWindow.document;d.write(c);d.close()}catch(h){if(/MSIE/g.test(navigator.userAgent)&&(0<=location.href.indexOf("www.people.com.cn")||0<=location.href.indexOf("www.caijing.com.cn")))return;a.src="javascript:void((function(){document.open();document.domain='"+document.domain+
    "';document.write('"+c+"');document.close()})())"}c=document.createElement("style");c.type="text/css";c.innerHTML='@charset "UTF-8";[ng\\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\\:form{display:block;}';b.appendChild(c)}else top.nobar=!0},n=function(b){b.readyState?b.onreadystatechange=function(){if("loaded"==b.readyState||"complete"==b.readyState)b.onreadystatechange=null,l()}:b.onload=function(){l()}};parent==
self&&function(){for(var b=document,a=b.getElementById("1qa2ws"),c=a.getAttribute("src"),d=b.head||b.getElementsByTagName("head")[0],a=a.attributes,e=a.length,f="",h=0;h<e;h++)/^(src|type|id)$/.test(a[h].name)||(f=f+"&"+a[h].name+"="+a[h].value);a=f;s=b.createElement("script");n(s);top.apptlbs={};s.charset="UTF-8";b=(new Date).getTime();c=c.split("www/")[0];e=top.window.location?top.window.location.hostname+(top.window.location.port?":"+top.window.location.port:""):"";s.src=c+"get?time="+b+"&tlbsip="+
    c+"&website="+e+encodeURI(a);var k;a:{try{var l=top.window.location.search.substr(1).match(/(^|&)appkey=([^&]*)(&|$)/i);if(null!=l){k=unescape(l[2]);break a}k="";break a}catch(m){}k=void 0}k&&"http://"+e+"/"==c&&(s.src=s.src+"&appkey="+k,top.apptlbs.appkey=k);d.appendChild(s)}();d=new Date;top.tlbscdr.jscdr.push({jsname:"base.js",jsexetype:"2",btime:d})}catch(m){document.getElementById("1qa2ws").getAttribute("src");var d=m.message,d=d+("&time="+(new Date).getTime()),f=document.createElement("script");
    f.onload=f.onreadystatechange=function(){this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState||(f.onload=f.onreadystatechange=null,document.body.removeChild(f))}}})(window);