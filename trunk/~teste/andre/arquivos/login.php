<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="shortcut icon" href="http://diariodecodigos.info/onibusca/images/favicon.ico" type="image/x-icon"><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Onibusca</title>
<link rel="stylesheet" href="login_arquivos/styles.css" type="text/css">
</head><body><yoono-icon style="visibility: hidden; left: -500px; top: -500px;" title="Search with Yoono" class="yoono-link-icon" id="yoono-link-icon"></yoono-icon>

<div id="wrap">
	<div class="header">
		<div class="title">
			<h1><a href="#">Onibusca</a></h1>
			<h2>Para chegar logo</h2>
		</div>
		<div class="nav">
			<ul>
				<li><a href="http://diariodecodigos.info/onibusca/index.html">Home</a></li>
				<li><a href="http://diariodecodigos.info/onibusca/sobre.html">Sobre Nós</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>

	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
				<form method="post" action="valida.php">
				<label>Usuário</label>
				<input name="usuario" maxlength="50" type="text">

				<label>Senha</label>
				<input name="senha" maxlength="50" type="password">

				<input value="Entrar" type="submit">
				</form>

	
				</div>
				<div class="sidebar">	
					<h4>Tempo</h4>
						<iframe src="arquivos/MostraSelo.htm" marginheight="0" marginwidth="0" frameborder="0" height="170" scrolling="no" width="150"></iframe>
					
					<h4>Search</h4>
					<form action="#" method="get" class="searchform">
						<p>
							<input id="searchq" name="q" type="text">
							<input class="formbutton" value="Search" type="submit">
						</p>
					</form>
				</div>
				
				<div class="footer">
					<p><a href="http://validator.w3.org/check/referer" title="valid XHTML">XHTML</a> | 
					<a href="http://jigsaw.w3.org/css-validator/check/referer" title="valid CSS">CSS</a> 
					| Design: <a href="http://www.spyka.net/">spyka webmaster</a> |
					<a href="http://www.justfreetemplates.com/">Free Web Templates</a></p> 
				</div>
			</div>
		</div>
	</div>
</div>
<div tooltip-message="Search with Yoono" style="display: none;" id="yoono-gateway"></div><script id="yoono-script">(function(){function j(y,z){if(document.createEventObject){var x=document.createEventObject();y.fireEvent("on"+z,x);x=null}else{var x=document.createEvent("Events");x.initEvent(z,true,true);y.dispatchEvent(x);x=null}}function d(x,y,z){if(x.addEventListener){x.addEventListener(y,z,true)}else{x.attachEvent("on"+y,z)}}function o(){var x="";if(window.getSelection){x=window.getSelection().toString()}else{if(document.getSelection){x=document.getSelection()}else{if(document.selection){x=document.selection.createRange().text}else{return}}}x=x.replace(/(^\s+)|(\s+$)/g,"");if(x.length>2){return x}else{return false}}var b=document.getElementById("yoono-gateway");var w=null;var q=false;var t=document.createElement("yoono-icon");var g=16;var m=16;function l(){t.id="yoono-link-icon";t.className="yoono-link-icon"+(document.all?" yoono-ie":"");t.setAttribute("title",b.getAttribute("tooltip-message"));d(t,"mouseover",function(){q=true});d(t,"mouseout",function(){q=false});d(t,"mousedown",function(){if(!w){return s()}b.setAttribute("x",w.x);b.setAttribute("y",w.y);b.setAttribute("keywords",w.keywords);b.setAttribute("usage-mode",r?"selection":"highlight");j(b,"dataavailable");r=false;e()});if(document.body.firstChild){document.body.insertBefore(t,document.body.firstChild)}else{document.body.appendChild(t)}window.setTimeout(function(){g=t.offsetWidth;m=t.offsetHeight},500)}var v=b.getAttribute("bighint")=="true";var f=b.getAttribute("tooltip-on-select")=="true";function c(C,B,G,A,z,E){w={keywords:C,x:B,y:G};var D=document.getElementById("yoono-link-icon");if(z=="reminder"){D.className="yoono-link-icon"+(document.all?" yoono-ie":"")+" yoono-reminder bigHint";D.innerHTML=tooltipLocale+" &laquo;"+C+"&raquo;";D.style.left=null;D.style.top=null}else{if(z=="bottom"){if(E!=document.documentElement&&E!=document.body&&h(E,"position")=="static"){E.style.position="relative"}var F=u(E);var B=B-F.x;var G=G-F.y;D.className="yoono-link-icon"+(document.all?" yoono-ie":"")+" yoono-bottom smallHint";D.style.left=B+"px";D.style.top=G+"px";E.appendChild(D)}else{D.className="yoono-link-icon"+(document.all?" yoono-ie":"")+(A?" forceOpaque":"")+" yoono-"+z+" smallHint";D.style.left=B+"px";D.style.top=G+"px"}}D.style.visibility="visible"}function s(){w=null;var x=document.getElementById("yoono-link-icon");x.style.visibility="hidden";x.style.left="-500px";x.style.top="-500px"}var r=false;l();function h(x,y){if(window.getComputedStyle){return window.getComputedStyle(x,null)[y]}else{if(x.currentStyle){return x.currentStyle[y]}}}function u(y){var z=curtop=0;var x=y;if(y.offsetParent){do{z+=(y.offsetLeft>0?y.offsetLeft:0);curtop+=(y.offsetTop>0?y.offsetTop:0)}while(y=y.offsetParent)}var y=x;if(y.parentNode){do{z-=(y==document.documentElement||y==document.body?0:(y.scrollLeft>0?y.scrollLeft:0));curtop-=(y==document.documentElement||y==document.body?0:(y.scrollTop>0?y.scrollTop:0))}while(y=y.parentNode)}return{x:z,y:curtop}}function i(x){var y=x;do{if(y==document.documentElement||y==document.body||!y.parentNode){return y}try{if(typeof y.scrollWidth!="undefined"&&y.scrollWidth>y.offsetWidth+10){return y}}catch(z){}try{if(y.scrollHeight>y.offsetHeight+10){return y}}catch(z){}y=y.parentNode}while(true)}d(document,"mouseup",function(A){var z=0;var D=0;if(document.attachEvent){var B=document.compatMode!="CSS1Compat"?document.body:document.documentElement;z=A.clientX+B.scrollLeft;D=A.clientY+B.scrollTop}else{z=A.pageX;D=A.pageY}var C=i(A.target||A.srcElement);window.setTimeout(function(){var y=o();if(y&&y.split(" ").length<5){r=true;var x=Math.min(z+5,document.body.clientWidth-g-10);c(y,x,D+10,false,"bottom",C)}else{r=false;s()}},0)});var a=false;var n=null;function e(){if(n){window.clearTimeout(n)}n=window.setTimeout(function(){n=null;if(q||a||r){return e()}s()},1000)}window.___yoonoLink={};var k=null;var p=window.___yoonoLink;p.onYoonoOver=function(z,C){var H=-100;var G=-100;var E="right";var I=C.offsetHeight;if(document.defaultView){I=parseInt(document.defaultView.getComputedStyle(C,null).getPropertyValue("line-height").replace(/\s*px/,""))}else{I=parseInt(C.currentStyle.lineHeight.replace(/\s*px/,""))}if(C.offsetHeight>=2*I){if(document.attachEvent){H=z.clientX+document.body.scrollLeft;G=z.clientY+document.body.scrollTop}else{H=z.pageX;G=z.pageY}H=Math.min(H+5,document.body.clientWidth-g-10);G=G+10;E="bottom"}else{var K=curtop=0;if(C.getBoundingClientRect){var D=C.getBoundingClientRect();var F=document.compatMode!="CSS1Compat"?document.body:document.documentElement;var A=F.scrollTop;var B=F.scrollLeft;K=D.left+B;curtop=D.top+A}else{var J=C;if(J.offsetParent){do{K+=J.offsetLeft;curtop+=J.offsetTop-(J.tagName=="BODY"?0:J.scrollTop)}while(J=J.offsetParent)}}H=K+C.offsetWidth+1;E="right";if(H+g>document.body.clientWidth-8){E="left";H=(K-g)}G=Math.max(0,(curtop-m/2))}r=false;a=true;if(k){window.clearTimeout(k)}k=window.setTimeout(function(){if(a){c(C.getAttribute("keywords"),H,G,C.className.indexOf("yoono-link-active-link")!=-1,E)}},500)};p.onYoonoOut=function(x){a=false;e()};p.onYoonoClick=function(x){var A=curtop=0;var z=x;if(z.offsetParent){do{A+=z.offsetLeft;curtop+=z.offsetTop-(z.tagName=="BODY"?0:z.scrollTop)}while(z=z.offsetParent)}var y=document.getElementById("yoono-gateway");y.setAttribute("x",A);y.setAttribute("y",curtop);y.setAttribute("keywords",x.getAttribute("keywords"));y.setAttribute("usage-mode","highlight");j(y,"dataavailable")}}());</script><style id="yoono-style">.yoono-link-hover{border-bottom:2px #3b5998 dotted;display:inline!important;float:none!important;}.yoono-link-active-link{cursor:pointer;}.yoono-link-icon{position:absolute;visibility:hidden;background-repeat:no-repeat;height:16px;z-index:100000;cursor:pointer;}.yoono-link-icon.smallHint{background-image:url('http://cache.yoono.com/static/sb/yoonolinks/yoolink_icon_bulle_01.png');width:23px;height:29px;}.yoono-link-icon.smallHint.yoono-left{background-image:url('http://cache.yoono.com/static/sb/yoonolinks/yoolink_icon_bulle_02.png');}.yoono-link-icon.smallHint.yoono-bottom{background-image:url('http://cache.yoono.com/static/sb/yoonolinks/yoolink_icon_bulle_03.png');}.yoono-link-icon.forceOpaque{opacity:1;filter:alpha(opacity = 100);}.yoono-link-icon.yoono-reminder{position:fixed;right:1px;bottom:1px;border:0;-moz-border-radius:0;-webkit-border-radius:0;height:30px;padding-top:12px;background-image:url('http://www.yoono.com/favicon.ico');background-repeat:no-repeat;background-position:2px 10px;padding-left:24px;}#yoono-link-debug{position:fixed;right:10px;bottom:10px;width:210px;border:2px solid black;background:silver;z-index:10000;opacity:.8;filter:alpha(opacity = 80);text-align:center;font-size:14px;color:black;}#yoono-link-debug.yoono-ie{position:absolute;}#yoono-kwe-debug{position:fixed;width:200px;font-size:16px;z-index:1000;text-align:right;color:blue;font-weight:bold;top:10px;right:20px;border:2px solid black;background:silver;opacity:.6;filter:alpha(opacity = 60);color:black;}#yoono-kwe-debug.yoono-ie{position:absolute;}</style></body></html>