<html>
	<head>
		<style type="text/css">
		</style>
			<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
				<title>:: ONIBUSCA ::</title>
					<link rel="shortcut icon" href="arquivos/favicon.ico" type="image/x-icon">
					<link href="arquivos/style.css" type="text/css" rel="stylesheet">
	</head>
		<body style="margin: 5px;" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" bgcolor="#ffffff" marginheight="0" marginwidth="0">
			<yoono-icon style="visibility: hidden; left: -500px; top: -500px;" title="Search with Yoono" class="yoono-link-icon" id="yoono-link-icon">
			</yoono-icon>
			<strong>
			</strong>
	<script> 
function validacao(){
    if (document.form.email.value == ""){
    alert("O campo E-mail n�o Foi Preenchido");
    document.form.email.focus();
    return false;
    }
    if (document.form.login.value == ""){
    alert("O campo Login n�o Foi Preenchido");
    document.form.login.focus();
    return false;
    }
    if (document.form.senha.value == ""){
    alert("O campo Senha n�o Foi Preenchido");
    document.form.senha.focus();
    return false;
    }
    if (document.form.nome.value == ""){
    alert("O campo Nome n�o Foi Preenchido");
    document.form.nome.focus();
    return false;
    }
    if (document.form.sexo.value == ""){
    alert("O campo Sexo n�o Foi Preenchido");
    document.form.sexo.focus();
    return false;
    }
    if (document.form.dia.value == ""){
    alert("O campo Dia n�o foi preenchido");
    document.form.dia.focus();
    return false;
    }
    if (document.form.mes.value == ""){
    alert("O campo Mes n�o foi preenchido");
    document.form.mes.focus();
    return false;
    }
    if (document.form.ano.value == ""){
    alert("O campo Ano n�o foi preenchido");
    document.form.ano.focus();
    return false;
    }
    if (document.form.estado.value == ""){
    alert("O campo Estado n�o Foi Preenchido");
    document.form.estado.focus();
    return false;
    }
    if (document.form.cidade.value == ""){
    alert("O campo Cidade n�o Foi Preenchido");
    document.form.cidade.focus();
    return false;
    }
 return true;
}
 
function exibe(){
		if(document.form.pais.value==1){
			trestado.style.visibility='';
	}
		if(document.form.pais.value!=1){
			trestado.style.visibility='hidden';
	}
}
</script> 
<center>
<table border="0" cellpadding="0" cellspacing="0" height="1" width="836">
    <tbody>
          <tr> 
            <td width="836" height="20"> 
			<div class="title">
				<h1><a href="index.php">Onibusca</a>
				<img border="0" src="arquivos/bus.jpg" width="83" height="58"></h1>
			</div>
            </td>
          </tr>
        </tbody>
</table>
<table border="0" cellpadding="0" height="23" width="835" style="border-collapse: collapse">
        <tbody>
          <tr> 
            <td width="835"> <img src="arquivos/img1.jpg" align="absmiddle" height="11" width="11">&nbsp;<a href="index.php" class="home">Home</a>&nbsp; 
                <img src="arquivos/img3.jpg" align="absmiddle">&nbsp;<a href="sobre.php" class="home">Sobre 
			N�s</a>&nbsp;
			<img src="arquivos/images.jpg" align="absmiddle" width="18" height="17">&nbsp;<a href="cadastrar.php" class="home">Cadastre-se 
			</a>&nbsp;
			<img src="arquivos/login.jpg" align="absmiddle" width="18" height="17">&nbsp;<a href="login.php" class="home">Login 
			</a>&nbsp;
			</td>
          </tr>
        </tbody>
</table>
        
        <table border="0" cellpadding="0" cellspacing="0" height="340" width="836">
          <tbody>
            <tr> 
              <td height="100"> &nbsp;</td>
            <td height="100" width="822"> 
				<table border="0" cellpadding="0" cellspacing="0" height="320" width="487">
                	<tbody>
                		<tr> 
                  			<td style="background-position: left bottom; background-repeat: no-repeat;" alt="" background="arquivos/pic8_2.htm" bgcolor="#ffffff" height="320" width="487"> 
                    		<table id="table1" border="0" cellpadding="0" cellspacing="0" height="100" width="525">
                				<tbody>
                					<tr> 
                  						<td alt="" bgcolor="#ffffff" height="73" width="525">
                  							<div style="padding-top: 15px; padding-left: 15px; padding-right: 10px;"> 
                      							<table id="table2" border="0" cellpadding="0" cellspacing="0" height="303" width="458">
                        							<tbody>
                        								<tr> 
                         							   		<td width="16">
                          										<div style="padding-top: 3px; padding-left: 7px;">
                          											<img src="arquivos/arr.jpg">
                          										</div>
                          									</td>
                          									<td width="438">
                          										<span class="t14">
                          											<strong>&nbsp; 
																Cadastre-se</strong></span><div style="margin: 1ex;">
																	<div>
																		<table id="table1" border="0" cellpadding="0" cellspacing="0" width="475">
          <tbody><tr>
            <td height="56">
			<font style="font-size: 8pt;" face="Tahoma"><span class="style2">
	    	Por 
			favor preencha os campos abaixo:
	    	<form action="lib/cadastrando.php" method="post" name="form" id="form" onsubmit="return validacao();">

                                <table class="txt10_cinza" align="center" border="0" cellpadding="2" cellspacing="0" width="437"> 
                                  <tbody><tr> 
                                    <td align="right" width="92">&nbsp;</td> 
                                    <td>&nbsp;</td> 
                                  </tr>
                                  <tr> 
                                    <td class="txt_black_bold" align="right" width="92">
                                    <img src="arquivos/05.gif" border="0" height="13" width="8">
                                    Email:</td> 
                                    <td>
                                    &nbsp;&nbsp;
									<!--webbot bot="Validation" s-data-type="String" b-value-required="TRUE" i-minimum-length="3" i-maximum-length="50" s-validation-constraint="Greater than or equal to" s-validation-value="3" s-validation-constraint="Less than or equal to" s-validation-value="50" -->
                                    <input name="email" class="forms" size="39" maxlength="50" type="text">
                                    </td> 
                                  </tr> 
                                  <tr> 
                                    <td class="txt_black_bold" align="right" width="92">
                                    <img src="arquivos/05.gif" border="0" height="13" width="8">
                                    Login:</td> 
                                    <td>
                                    &nbsp;&nbsp;
									<!--webbot bot="Validation" s-data-type="String" b-value-required="TRUE" i-minimum-length="3" i-maximum-length="50" s-validation-constraint="Greater than or equal to" s-validation-value="3" s-validation-constraint="Less than or equal to" s-validation-value="50" -->
                                    <input name="login" class="forms" size="39" maxlength="50" type="text">
                                    </td> 
                                  </tr> 
                                  <tr> 
                                    <td class="txt_black_bold" align="right" width="92">
                                    <img src="arquivos/05.gif" border="0" height="13" width="8">Senha:</td> 
                                    <td>
                                    &nbsp;&nbsp;
									<!--webbot bot="Validation" s-data-type="String" s-allow-other-chars="@" b-value-required="TRUE" i-minimum-length="5" i-maximum-length="50" -->
                                    <input name="senha" size="39" type="password">
                                    </td> 
                                  </tr>
                                  <tr> 
                                    <td class="txt_black_bold" align="right" width="92">
                                  </tr>
                                  <tr> 
                                    <td class="txt_black_bold" align="right" width="92">
                                    <img src="arquivos/05.gif" border="0" height="13" width="8">Nome</td> 
                                    <td>
                                    <font style="font-size: 8pt;" face="Tahoma"><span class="forms"> 
				    <input name="nome" size="39" type="text"></span></font></td>
                                    </tr>
                                    <tr> 
                                    <td class="txt_black_bold" align="right" width="92">
                                    <img src="arquivos/05.gif" border="0" height="13" width="8">Sexo</td> 
                                    <td>
                                    
                                    <font style="font-size: 8pt;" face="Tahoma">
                                    <span class="forms">
                                    <input name="sexo" value="Homem" type="radio"> 
				    Homem<input name="sexo" value="Mulher" type="radio">Mulher</span></font></td>
                                    </tr>
                                    <tr> 
                                    <td class="txt_black_bold" align="right" width="92">
                                    <img src="arquivos/05.gif" border="0" height="13" width="8">Data Nascimento</td> 
                                    <td>
                                     
                                    <font style="font-size: 8pt;" face="Tahoma">
                                    <span class="forms">
                                    <input name="dia" maxlength="2" size="2" type="text"> / 
                                    <input name="mes" maxlength="2" size="2" type="text"> / 
                                    <input name="ano" maxlength="4" size="4" type="text">
                                    </span>
                                    </font>
                                    </td>
                                    </tr>
                                  <tr> 
                                    <td class="txt_black_bold" align="right" width="92">
                                    <img src="arquivos/05.gif" border="0" height="13" width="8">Estado:</td>
                                    &nbsp;<td valign="top"> 
                                    
                                    <!--webbot bot="Validation" S-Display-Name="UF" S-Data-Type="String" B-Value-Required="TRUE" I-Minimum-Length="1" I-Maximum-Length="2" -->
                                    <input name="uf" class="forms" size="1" maxlength="2" type="text">
                                      </td> 
                                  </tr> 
                                  <tr> 
                                    <td class="txt_black_bold" align="right" width="92" height="33">
                                    <img src="arquivos/05.gif" border="0" height="13" width="8">Cidade:</td> 
                                    <td valign="top" height="33"> 
                                    
                                    <input name="cidade" class="forms" size="39" maxlength="20" type="text">
                                      </td> 
                                  </tr> 
                                  <tr> 
                                    <td height="45" width="92">&nbsp;</td> 
                                   <!-- <td><input name="Submit2" type="image" src="_imagens/bt_enviar.jpg" class="btform" value="Enviar"></td> -->
                                    <td>
										 <input src="arquivos/bt_enviar.gif" onclick="return validacao();" height="22" type="image" width="52">
										
										<input src="arquivos/bt_limpar.gif" onclick="this.form.reset(); return false;" height="22" type="image" width="52">
										<input name="ativar" value="1" type="hidden">
									</td>

                                  </tr> 
                              </tbody></table> 
                  </form> 
	    	
	    	</span>
			</font></td>
          </tr>
		 
																
															
                        								
                      								</tbody>
                      							</table>
                    												</div>
                    					</div></td>
               					 	</tr>
                				</tbody>
                			</table>  	
                    	</div></td>
                	</tr>
              	</tbody>
              </table>
             </td>
             	
         	 </tr>
        </tbody>
     </table>
<!-- InstanceEndEditable -->
<img src="arquivos/1.jpg" alt="" height="13" width="600">
	<table border="0" cellpadding="0" cellspacing="0" width="588">
  		<tbody>
  			<tr>
    			<td width="588">
    					<div class="lgr" style="padding-top:0px;"> 
							<p style="text-align: center;">
								<span class="style2">� Copyright 2010 - ONIBUSCA 
								- Todos Direitos Reservados </span></p>
						</div>
					</td>
    					</tr>
		</tbody>
	</table>
<!-- InstanceEnd -->
</td></tr></tbody></table></center><div tooltip-message="Search with Yoono" style="display: none;" id="yoono-gateway"></div><script id="yoono-script">(function(){function j(y,z){if(document.createEventObject){var x=document.createEventObject();y.fireEvent("on"+z,x);x=null}else{var x=document.createEvent("Events");x.initEvent(z,true,true);y.dispatchEvent(x);x=null}}function d(x,y,z){if(x.addEventListener){x.addEventListener(y,z,true)}else{x.attachEvent("on"+y,z)}}function o(){var x="";if(window.getSelection){x=window.getSelection().toString()}else{if(document.getSelection){x=document.getSelection()}else{if(document.selection){x=document.selection.createRange().text}else{return}}}x=x.replace(/(^\s+)|(\s+$)/g,"");if(x.length>2){return x}else{return false}}var b=document.getElementById("yoono-gateway");var w=null;var q=false;var t=document.createElement("yoono-icon");var g=16;var m=16;function l(){t.id="yoono-link-icon";t.className="yoono-link-icon"+(document.all?" yoono-ie":"");t.setAttribute("title",b.getAttribute("tooltip-message"));d(t,"mouseover",function(){q=true});d(t,"mouseout",function(){q=false});d(t,"mousedown",function(){if(!w){return s()}b.setAttribute("x",w.x);b.setAttribute("y",w.y);b.setAttribute("keywords",w.keywords);b.setAttribute("usage-mode",r?"selection":"highlight");j(b,"dataavailable");r=false;e()});if(document.body.firstChild){document.body.insertBefore(t,document.body.firstChild)}else{document.body.appendChild(t)}window.setTimeout(function(){g=t.offsetWidth;m=t.offsetHeight},500)}var v=b.getAttribute("bighint")=="true";var f=b.getAttribute("tooltip-on-select")=="true";function c(C,B,G,A,z,E){w={keywords:C,x:B,y:G};var D=document.getElementById("yoono-link-icon");if(z=="reminder"){D.className="yoono-link-icon"+(document.all?" yoono-ie":"")+" yoono-reminder bigHint";D.innerHTML=tooltipLocale+" &laquo;"+C+"&raquo;";D.style.left=null;D.style.top=null}else{if(z=="bottom"){if(E!=document.documentElement&&E!=document.body&&h(E,"position")=="static"){E.style.position="relative"}var F=u(E);var B=B-F.x;var G=G-F.y;D.className="yoono-link-icon"+(document.all?" yoono-ie":"")+" yoono-bottom smallHint";D.style.left=B+"px";D.style.top=G+"px";E.appendChild(D)}else{D.className="yoono-link-icon"+(document.all?" yoono-ie":"")+(A?" forceOpaque":"")+" yoono-"+z+" smallHint";D.style.left=B+"px";D.style.top=G+"px"}}D.style.visibility="visible"}function s(){w=null;var x=document.getElementById("yoono-link-icon");x.style.visibility="hidden";x.style.left="-500px";x.style.top="-500px"}var r=false;l();function h(x,y){if(window.getComputedStyle){return window.getComputedStyle(x,null)[y]}else{if(x.currentStyle){return x.currentStyle[y]}}}function u(y){var z=curtop=0;var x=y;if(y.offsetParent){do{z+=(y.offsetLeft>0?y.offsetLeft:0);curtop+=(y.offsetTop>0?y.offsetTop:0)}while(y=y.offsetParent)}var y=x;if(y.parentNode){do{z-=(y==document.documentElement||y==document.body?0:(y.scrollLeft>0?y.scrollLeft:0));curtop-=(y==document.documentElement||y==document.body?0:(y.scrollTop>0?y.scrollTop:0))}while(y=y.parentNode)}return{x:z,y:curtop}}function i(x){var y=x;do{if(y==document.documentElement||y==document.body||!y.parentNode){return y}try{if(typeof y.scrollWidth!="undefined"&&y.scrollWidth>y.offsetWidth+10){return y}}catch(z){}try{if(y.scrollHeight>y.offsetHeight+10){return y}}catch(z){}y=y.parentNode}while(true)}d(document,"mouseup",function(A){var z=0;var D=0;if(document.attachEvent){var B=document.compatMode!="CSS1Compat"?document.body:document.documentElement;z=A.clientX+B.scrollLeft;D=A.clientY+B.scrollTop}else{z=A.pageX;D=A.pageY}var C=i(A.target||A.srcElement);window.setTimeout(function(){var y=o();if(y&&y.split(" ").length<5){r=true;var x=Math.min(z+5,document.body.clientWidth-g-10);c(y,x,D+10,false,"bottom",C)}else{r=false;s()}},0)});var a=false;var n=null;function e(){if(n){window.clearTimeout(n)}n=window.setTimeout(function(){n=null;if(q||a||r){return e()}s()},1000)}window.___yoonoLink={};var k=null;var p=window.___yoonoLink;p.onYoonoOver=function(z,C){var H=-100;var G=-100;var E="right";var I=C.offsetHeight;if(document.defaultView){I=parseInt(document.defaultView.getComputedStyle(C,null).getPropertyValue("line-height").replace(/\s*px/,""))}else{I=parseInt(C.currentStyle.lineHeight.replace(/\s*px/,""))}if(C.offsetHeight>=2*I){if(document.attachEvent){H=z.clientX+document.body.scrollLeft;G=z.clientY+document.body.scrollTop}else{H=z.pageX;G=z.pageY}H=Math.min(H+5,document.body.clientWidth-g-10);G=G+10;E="bottom"}else{var K=curtop=0;if(C.getBoundingClientRect){var D=C.getBoundingClientRect();var F=document.compatMode!="CSS1Compat"?document.body:document.documentElement;var A=F.scrollTop;var B=F.scrollLeft;K=D.left+B;curtop=D.top+A}else{var J=C;if(J.offsetParent){do{K+=J.offsetLeft;curtop+=J.offsetTop-(J.tagName=="BODY"?0:J.scrollTop)}while(J=J.offsetParent)}}H=K+C.offsetWidth+1;E="right";if(H+g>document.body.clientWidth-8){E="left";H=(K-g)}G=Math.max(0,(curtop-m/2))}r=false;a=true;if(k){window.clearTimeout(k)}k=window.setTimeout(function(){if(a){c(C.getAttribute("keywords"),H,G,C.className.indexOf("yoono-link-active-link")!=-1,E)}},500)};p.onYoonoOut=function(x){a=false;e()};p.onYoonoClick=function(x){var A=curtop=0;var z=x;if(z.offsetParent){do{A+=z.offsetLeft;curtop+=z.offsetTop-(z.tagName=="BODY"?0:z.scrollTop)}while(z=z.offsetParent)}var y=document.getElementById("yoono-gateway");y.setAttribute("x",A);y.setAttribute("y",curtop);y.setAttribute("keywords",x.getAttribute("keywords"));y.setAttribute("usage-mode","highlight");j(y,"dataavailable")}}());</script><style id="yoono-style">.yoono-link-hover{border-bottom:2px #3b5998 dotted;display:inline!important;float:none!important;}.yoono-link-active-link{cursor:pointer;}.yoono-link-icon{position:absolute;visibility:hidden;background-repeat:no-repeat;height:16px;z-index:100000;cursor:pointer;}.yoono-link-icon.smallHint{background-image:url('http://cache.yoono.com/static/sb/yoonolinks/yoolink_icon_bulle_01.png');width:23px;height:29px;}.yoono-link-icon.smallHint.yoono-left{background-image:url('http://cache.yoono.com/static/sb/yoonolinks/yoolink_icon_bulle_02.png');}.yoono-link-icon.smallHint.yoono-bottom{background-image:url('http://cache.yoono.com/static/sb/yoonolinks/yoolink_icon_bulle_03.png');}.yoono-link-icon.forceOpaque{opacity:1;filter:alpha(opacity = 100);}.yoono-link-icon.yoono-reminder{position:fixed;right:1px;bottom:1px;border:0;-moz-border-radius:0;-webkit-border-radius:0;height:30px;padding-top:12px;background-image:url('http://www.yoono.com/favicon.ico');background-repeat:no-repeat;background-position:2px 10px;padding-left:24px;}#yoono-link-debug{position:fixed;right:10px;bottom:10px;width:210px;border:2px solid black;background:silver;z-index:10000;opacity:.8;filter:alpha(opacity = 80);text-align:center;font-size:14px;color:black;}#yoono-link-debug.yoono-ie{position:absolute;}#yoono-kwe-debug{position:fixed;width:200px;font-size:16px;z-index:1000;text-align:right;color:blue;font-weight:bold;top:10px;right:20px;border:2px solid black;background:silver;opacity:.6;filter:alpha(opacity = 60);color:black;}#yoono-kwe-debug.yoono-ie{position:absolute;}</style></body></html>