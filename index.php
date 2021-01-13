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
				<td bgcolor="#619EF1" align="justify" valign="top" height="30">
				<p align="center" >
				<font color="#FFFFFF" size="4" face="verdana">sign up for free!</font></p>
				</td>
				<td width="292" bgcolor="#619EF1" align="left" valign="middle" height="30">
				</td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="middle" height="30" colspan="2">
				<p align="center"><font color="#F5FAFF" size="4">login here!</font></td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right" ><font color="#FFFFFF">Name</font><a href="javascript://"><input type="text" id="yourname" name="name" value="" onKeyUp="javascript:validateform(document.getElementById('yourname').value)"/></a></p>
				</td>
				<td width="292" bgcolor="#619EF1" align="left" valign="middle" height="35">
				<font face=verdana size="1">
				<div id="messagebox"></div></font></td>
				<td width="225" bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right" ><font color="#FFFFFF">Login As</font><select size="1" name="login_as">
				<option>admin</option>
				<option>user</option>
				</select></p>
				</td>
				<td width="69" bgcolor="#619EF1" align="justify" valign="middle" height="35">&nbsp;
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right" ><font color="#FFFFFF">Title</font><a href="javascript://"><input type="text" id="yournamea" name="title" value="" onKeyUp="javascript:validateforma(document.getElementById('yournamea').value)" /></a></p>
				</td>
				<td width="292" bgcolor="#619EF1" align="left" valign="middle" height="35">
				<font face=verdana size=1>
				<div id="messageboxa"></div></font></td>
				<?php //<form method="post" action="" id="second_form">	?>			
				<td width="225" bgcolor="#619EF1" align="justify" valign="top" height="35">
				<p align="right" ><font color="#FFFFFF">Email Id</font><input type="text" name="login_email_id">
				</p>
				
				</td>
				<td width="69" bgcolor="#619EF1" align="justify" valign="top" height="35">&nbsp;
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right" ><font color="#FFFFFF">Mobile-No</font><a href="javascript://"><input type="text" id="yournameb" name="mobile_no" value="" onKeyUp="javascript:validateformb(document.getElementById('yournameb').value)"/></a></p>
				<td width="292" bgcolor="#619EF1" align="left" valign="middle" height="35">
				<font face=verdana size=1>
				<div id="messageboxb"></div></font></td>
				<td width="225" bgcolor="#619EF1" align="justify" valign="top" height="35">
				<p align="right" ><font color="#FFFFFF">Password</font><input type="password" name="login_password">
				</p>
				</td>
				<td width="69" bgcolor="#619EF1" align="justify" valign="top" height="35">&nbsp;
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right" ><font color="#FFFFFF">Email-Id</font><a href="javascript://"><input type="text" id="yournamec" name="email_id" value="" onKeyUp="javascript:validateformc(document.getElementById('yournamec').value)"/></a></p>
				<td width="292" bgcolor="#619EF1" align="left" valign="middle" height="35">
				<font face=verdana size=1>
				<div id="messageboxc"></div></font></td>
				<td width="225" bgcolor="#619EF1" align="justify" valign="top" height="35">				
				<input type="submit" name="login" value="login" style="font-family: Verdana; color: #F5FAFF; font-weight: bold; float: right; background-color: #A2BAFA">
				</td>
				<?php //</form>  ?>
				<td width="69" bgcolor="#619EF1" align="justify" valign="top" height="35">&nbsp;
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right" ><font color="#FFFFFF">Password</font><a href="javascript://"><input type="password" id="yournamed" name="password" value="" onKeyUp="javascript:validateformd(document.getElementById('yournamed').value)"/></a></p>
				<td width="292" bgcolor="#619EF1" align="left" valign="middle" height="35">
				<font face=verdana size=1>
				<div id="messageboxd"></div></font></td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="35" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right" ><font color="#FFFFFF">Retype-Password</font><a href="javascript://"><input type="password" id="yournamee" name="retype_password" value="" onKeyUp="javascript:validateforme((document.getElementById('yournamed').value),(document.getElementById('yournamee').value))"/></a></p>
				<td width="292" bgcolor="#619EF1" align="left" valign="middle" height="35">
				<font face=verdana size=1>
				<div id="messageboxe"></div></font></td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="35" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right" ><font color="#FFFFFF">State</font><select size="1" name="state">
				<option>Andaman & Nicobar</option>
				<option>Andra Pradesh</option>
				<option>Arunachal Pradesh</option>
				<option>Assam</option>
				<option>Bihar</option>
				<option>Chandigarh</option>
				<option selected>Chatishgarh</option>
				<option>Dadar & Nagar</option>
				<option>Danman & Diu</option>
				<option>Delhi</option>
				<option>Goa</option>
				<option>Haryana</option>
				<option>Himachal Pradesh</option>
				<option>Jammu & Kashmir</option>
				<option>Jharkhand</option>
				<option>Karnataka</option>
				<option>Kerala</option>
				<option>Lakshadeep</option>
				<option>Madhya Pradesh</option>
				<option>Maharashtra</option>
				<option>Manipur</option>
				<option>Meghalaya</option>
				<option>Puduchery</option>
				<option>Punjab</option>
				<option>Rajasthan</option>
				<option>Sikkim</option>
				<option>Tamil Nadu</option>
				<option>Tripura</option>
				<option>Uttar Pradesh</option>
				<option>Uttarakhand</option>
				<option>West Bengal</option></select> </p>
				<td width="292" bgcolor="#619EF1" align="justify" valign="top" height="35">
				</td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="35" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right"><font color="#FFFFFF">City</font><a href="javascript://"><input type="text" name="city" id="yournamef" value="" onKeyUp="javascript:validateformf(document.getElementById('yournamef').value)" ></a></p>
				<td width="292" bgcolor="#619EF1" align="left" valign="middle" height="35">
				<font face=verdana size=1>
				<div id="messageboxf"></div></font></td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="35" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="top" height="25">
				<p align="center" ><font color="#FFFFFF">Date-Of-Birth</font></p>
				<td width="292" bgcolor="#619EF1" align="justify" valign="top" height="25">
				</td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="25" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" height="35">
				<p align="right"><font color="#FFFFFF">Day</font><select size="1" name="day" id="datea" onclick="javascript:validateformg((document.getElementById('datea').value),(document.getElementById('dateb').value),(document.getElementById('datec').value))">
<?php
for($i=1;$i<32;$i++)
{
echo "<option>".$i."</option>";
}
?></select> <font color="#FFFFFF">Month</font><select size="1" name="month" id="dateb" onclick="javascript:validateformg((document.getElementById('datea').value),(document.getElementById('dateb').value),(document.getElementById('datec').value))">
<?php
for($i=1;$i<13;$i++)
{
echo "<option>".$i."</option>";
}
?></select> <font color="#FFFFFF">Year</font><select size="1" name="year" id="datec" onclick="javascript:validateformg((document.getElementById('datea').value),(document.getElementById('dateb').value),(document.getElementById('datec').value))">
<?php
for($i=1920;$i<2013;$i++)
{
echo "<option>".$i."</option>";
}
?></select> </p>
				<td width="292" bgcolor="#619EF1" align="left" valign="middle" height="35">
				<font face=verdana size=1>
				<div id="messageboxg"></div></font></td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="35" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="top" height="25">
				<p align="right"><font color="#FFFFFF">Blood-Group</font>
				<select size="1" name="blood_group">
				<option>A+</option>
				<option>B+</option>
				<option>AB+</option>
				<option>O+</option>
				<option>A-</option>
				<option>B-</option>
				<option>AB-</option>
				<option>O-</option></select></p>
				<td width="292" bgcolor="#619EF1" align="justify" valign="top" height="25">
				</td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="25" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="top" height="25">
				<p align="right"><font color="#FFFFFF">Male</font><input type="radio" name="gender" value="male"><font color="#FFFFFF">Female</font><input type="radio" name="gender" value="female"></p>
				<td width="292" bgcolor="#619EF1" align="justify" valign="top" height="25">
				</td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="25" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="right" height="25">
				<p align="right"><font color="#FFFFFF">Adress</font><textarea name="adress" rows="2" columbs="3" width="250px"></textarea></p>
				<td width="292" bgcolor="#619EF1" align="justify" valign="top" height="25">
				</td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="25" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="right" height="35">
				<p align="right">
				<input type="submit" name="submit_form" value="submit" style="font-family: Verdana; font-weight: bold; color: #F5F2EA; background-color: #8BB7F5"/></p>
				</td>
				<td width="292" bgcolor="#619EF1" align="justify" valign="top" height="35">
				</td>
				<td width="293" bgcolor="#619EF1" align="justify" valign="top" height="35" colspan="2">
				</td>
			</tr>
			<tr>
				<td bgcolor="#619EF1" align="justify" valign="middle" ></td>

				<td width="292" bgcolor="#619EF1" align="justify" valign="middle">

<?php

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
				<td width="293" bgcolor="#619EF1" align="justify" valign="middle" colspan="2">
				</td>
			</tr>
		</form>	</table>
	</div>

</body>
</html>