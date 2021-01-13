<?php
session_start();
 include_once 'database_and_table_formation.php';
 include_once 'admin_login.php';
 if(isset($_POST['submit_form'])){ if(isset($_SESSION['right_registartion_fill_counter'])){
 if($_SESSION['right_registartion_fill_counter']=="right")
 {
 if(isset($_POST['name']))
 {
 //include_once 'insert_into_table.php'; 
} }}}
 ?>
 <html>
<head>
<link rel="stylesheet" type="text/css" href="page_style.css" />
<link rel="SHORTCUT ICON" href="paint_picture.png" />
<title>Blood Donation</title>
<script type="text/javascript">
<!--
function FP_preloadImgs() {//v1.0

 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>
</head>
<body onLoad="FP_preloadImgs(/*url*/'buttons/button29.jpg', /*url*/'buttons/button2A.jpg', /*url*/'buttons/button2D.jpg', /*url*/'buttons/button2E.jpg', /*url*/'buttons/button30.jpg', /*url*/'buttons/button31.jpg', /*url*/'buttons/button36.jpg', /*url*/'buttons/button37.jpg', /*url*/'buttons/buttonF8.jpg', /*url*/'buttons/buttonF9.jpg')" bgcolor="#A2BAFA">
<div align="center">
	<table border="0" width="900" cellspacing="0" cellpadding="0">
		
<tr>
			<td bgcolor="#619EF1"><font color="#4683B3">&nbsp;</font><b><font size="6" color="#B5D4FF">blood 
			donation society</font></b></td>
			<td align="right" bgcolor="#619EF1" width="65">
			<p align="center">
			<font color="#4683B3">&nbsp;
			</font>
			</td>
		</tr>
	</table>
</div>
<div align="center">
	<table border="0" width="900" cellspacing="0" cellpadding="0" background="images_site/site_banner.jpg" height="354">
		<tr>
			<td align="left" valign="top">
			<p align="justify" style="line-height: 25px; margin: 20px 15px">
			<i>
			<font size="5"><b>
			<marquee behavior="alternate" width="220" style="font-family: Verdana; color: #B5D4FF; font-weight: bold" scrollamount="5" scrolldelay="80">WELCOME</marquee></b></font></i></p>
			<p align="justify" style="line-height: 25px; margin: 20px 15px">
			<i>
			<font size="5"><b>
			<marquee behavior="alternate" width="220" scrollamount="5" scrolldelay="80" style="color: #B5D4FF">TO OUR</marquee></b></font></i></p>
			<p align="justify" style="line-height: 25px; margin: 20px 15px">
			<i>
			<font size="5"><b>
			<marquee behavior="alternate" width="220" scrollamount="5" scrolldelay="80" style="color: #B5D4FF">SITE</marquee></b></font></i></p>
			<p align="justify" style="line-height: 25px; margin: 20px 15px">&nbsp;</p>
			<p align="justify" style="line-height: 25px; margin: 20px 15px">&nbsp;</p>
			<p align="justify" style="line-height: 25px; margin: 20px 15px">&nbsp;</p>
			<p align="justify" style="line-height: 25px; margin: 20px 15px">
			<i>
			<font size="4"><b>
			<marquee width="390" scrollamount="5" scrolldelay="80" style="color: #F5FAFF">JOIN HANDS WITH US TO SAVE LIVES</marquee></b></font></i></p></td>
		</tr>
	</table><div align="center">
		<table border="0" width="900" cellspacing="0" cellpadding="0" height="24">
			<tr height="24">
				<td bgcolor="#619EF1" align="center" width="180">
				<a href="index.php">
				<img border="0" id="img8" src="buttons/buttonF7.jpg" width="120" alt="Home" onMouseOver="FP_swapImg(1,0,/*id*/'img8',/*url*/'buttons/buttonF8.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img8',/*url*/'buttons/buttonF7.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img8',/*url*/'buttons/buttonF9.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img8',/*url*/'buttons/buttonF8.jpg')" fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="Home"></a></td>
				<td bgcolor="#619EF1" align="center" width="180">
				<a href="working.php">
				<img border="0" id="img7" src="buttons/button35.jpg" width="120" alt="Working" onMouseOver="FP_swapImg(1,0,/*id*/'img7',/*url*/'buttons/button36.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img7',/*url*/'buttons/button35.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img7',/*url*/'buttons/button37.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img7',/*url*/'buttons/button36.jpg')" fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="Working" height="24"></a></td>
				<td bgcolor="#619EF1" align="center" width="180">
				<a href="about_site.php">
				<img border="0" id="img6" src="buttons/button2F.jpg"  width="120" alt="About Site" onMouseOver="FP_swapImg(1,0,/*id*/'img6',/*url*/'buttons/button30.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img6',/*url*/'buttons/button2F.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img6',/*url*/'buttons/button31.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img6',/*url*/'buttons/button30.jpg')"fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="About Site" height="24"></a></td>
				<td bgcolor="#619EF1" align="center" width="180">
				<a href="my_experience.php">
				<img border="0" id="img1" src="buttons/button28.jpg"  width="120" alt="Experience" onMouseOver="FP_swapImg(1,0,/*id*/'img1',/*url*/'buttons/button29.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img1',/*url*/'buttons/button28.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img1',/*url*/'buttons/button2A.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img1',/*url*/'buttons/button29.jpg')" fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="Experience" height="24"></a></td>
				<td bgcolor="#619EF1" align="center" width="180">
				<a href="developers.php">
				<img border="0" id="img5" src="buttons/button2C.jpg"  width="120" alt="Developer" onMouseOver="FP_swapImg(1,0,/*id*/'img5',/*url*/'buttons/button2D.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img5',/*url*/'buttons/button2C.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img5',/*url*/'buttons/button2E.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img5',/*url*/'buttons/button2D.jpg')" fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="Developer" height="24"></a></td>
			</tr>
		</table></div>
		
	<div align="center">
		<table border="0" width="900" cellspacing="0" cellpadding="0" bgcolor="#619EF1">
			<tr>
				<td><script type="text/javascript" src="method.js"></script></td>
			</tr>
		</table>
	</div>
	<div align="center">
	<table border="0"  cellspacing="0" cellpadding="0" height="510" width="900">
		<form method="post" action="" id="firstform">
			
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" ><p style="line-height: 25px; margin: 10px 15px">
				<font color="#F5FAFF"><b>This site can accommodate thousands of 
				users just like any matrimonial site ,or social networking site 
				and manage their details without any fault, but however this is 
				a demo site which means you can know how it works but you cannot 
				input any information into it exept image uploads and that too 
				when you login.</b></font></p>
				<p style="line-height: 25px; margin: 10px 15px">
				<font color="#F5FAFF"><b>I cannot allow input because i don't 
				want my database getting damaged or since this site has images 
				if they are too many users it will make the site slower.</b></font></p>
				<p style="line-height: 25px; margin: 10px 15px">
				<font color="#F5FAFF"><b>This website is short in graphics and 
				flash files and all the fancy things that you generally see 
				sites all over the world carrying ,this is completely 
				intentional ,not that i cannot incorporate this components but i 
				don't have the financial means to do so it, they will eventually 
				make the site slower ,and i don't have the money to fight it.<br>
				But i will give a login address to do so use the following 
				combination to go to the search page i.e. to login.<br>
				login as: user<br>
				email id: archita@gmail.com<br>
				password: archita</b></font><?php

if(isset($_POST['submit_form'])){ 
include_once 'email_id_existance_check.php';
if(isset($_SESSION['right_registartion_fill_counter'])){
if($_SESSION['right_registartion_fill_counter']=="wrong"){
echo "<p align='center'><font face='verdana' color='white' size='3'>demo registration unsuccessful!</font></p>";}
else{
echo "<p align='center'><font face='verdana' color='white' size='3'>demo registration successful!</font></p>";
}}}
?>
				</td>

			</tr>
		</form>	</table>
	</div>

</body>
</html>