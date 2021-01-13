<html>
<head><?php
 if(isset($_POST['logout']))
 {
 $x=$_GET['emailid'].'allow';
 unset($_SESSION[$x]);
 header('Location:index.php');
 exit;}
session_start();
 $x=$_GET['emailid'].'allow';
 if(!isset($_SESSION[$x]))
 {
 header('Location:index.php');
 exit;}
 else
 {
 if(isset($_GET['showme']))
 {
 $_POST['show_me']='show me';
 }
 //$innerstring2start=$_GET['emailid'].'stringstart';
//$innerstring2end=$_GET['emailid'].'stringend';
//if((isset($_SESSION[$innerstring2start])) && (isset($_SESSION[$innerstring2end]))){
//for($r=$_SESSION[$innerstring2start];$r<($_SESSION[$innerstring2end]+1);$r++)
//{
//$upload_user="upload".$r;echo $upload_user;
//if(isset($_POST[$upload_user])){
//$_POST['show_me']='show me';echo $_POST['show_me'];echo "yes";
//}}}
$loop_counter=0;
 if(isset($_GET['emailid'])){
$_SESSION['emailid']=$_GET['emailid'];
 }
?>
<script type="text/javascript" src="method.js"></script>
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
	&nbsp;<table border="0" width="900" cellspacing="0" cellpadding="0" >
		
<tr>
			<td bgcolor="#619EF1"><font color="#4683B3">&nbsp;</font><b><font size="6" color="#B5D4FF">blood 
			donation society</font></b></td>
			<form method="post" action=""><td align="right" bgcolor="#619EF1" width="65">
			<p  align="center" style="margin-left: 1px; margin-right: 1px;">
			  &nbsp;<font color="#4683B3">&nbsp;<input type="submit" name="logout" value="logout" style="color: #FFFFFF; font-family: verdana; font-weight: bold; background-color: #A2BAFA"/></font><font color="#4683B3"></font></td></form>
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
				<img border="0" id="img8" src="buttons/buttonF7.jpg" width="120" alt="Home" onMouseOver="FP_swapImg(1,0,/*id*/'img8',/*url*/'buttons/buttonF8.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img8',/*url*/'buttons/buttonF7.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img8',/*url*/'buttons/buttonF9.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img8',/*url*/'buttons/buttonF8.jpg')" fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="Home"></td>
				<td bgcolor="#619EF1" align="center" width="180">
				<img border="0" id="img7" src="buttons/button35.jpg" width="120" alt="Contact Us" onMouseOver="FP_swapImg(1,0,/*id*/'img7',/*url*/'buttons/button36.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img7',/*url*/'buttons/button35.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img7',/*url*/'buttons/button37.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img7',/*url*/'buttons/button36.jpg')" fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="Contact Us"></td>
				<td bgcolor="#619EF1" align="center" width="180">
				<img border="0" id="img6" src="buttons/button2F.jpg"  width="120" alt="About Us" onMouseOver="FP_swapImg(1,0,/*id*/'img6',/*url*/'buttons/button30.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img6',/*url*/'buttons/button2F.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img6',/*url*/'buttons/button31.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img6',/*url*/'buttons/button30.jpg')"fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="About US"></td>
				<td bgcolor="#619EF1" align="center" width="180">
				<img border="0" id="img1" src="buttons/button28.jpg"  width="120" alt="Instructions" onMouseOver="FP_swapImg(1,0,/*id*/'img1',/*url*/'buttons/button29.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img1',/*url*/'buttons/button28.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img1',/*url*/'buttons/button2A.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img1',/*url*/'buttons/button29.jpg')" fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="Instructions"></td>
				<td bgcolor="#619EF1" align="center" width="180">
				<img border="0" id="img5" src="buttons/button2C.jpg"  width="120" alt="Developers" onMouseOver="FP_swapImg(1,0,/*id*/'img5',/*url*/'buttons/button2D.jpg')" onMouseOut="FP_swapImg(0,0,/*id*/'img5',/*url*/'buttons/button2C.jpg')" onMouseDown="FP_swapImg(1,0,/*id*/'img5',/*url*/'buttons/button2E.jpg')" onMouseUp="FP_swapImg(0,0,/*id*/'img5',/*url*/'buttons/button2D.jpg')" fp-style="fp-btn: Embossed Rectangle 1; fp-font: Verdana; fp-font-style: Bold; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #4C8ABE; fp-font-color-press: #A2BAFA; fp-bgcolor: #4683B3" fp-title="Developers"></td>
			</tr>
		</table></div>
		
	<div align="center">
		<table border="0" width="900" cellspacing="0" cellpadding="0" bgcolor="#619EF1">
			<tr>
				<td><script type="text/javascript" src="method.js"></script></td>
			</tr>
		</table>
	</div>
	<body>
<div align="center">
<table border="0" width="900" cellspacing="0" cellpadding="0" bgcolor="#619EF1" height="35">
	<tr>
		<td><form method="post" action="">
		<p align="center"><b><font face="verdana" size="3" color="white">search</font></b><select size=1 name="type_of_search">
<option>by name</option>
<option>by city</option>
<option>by blood-group</option>
</select>
<input type="text" name="search">
<input type="submit" value="search" style="width: 108; height: 22; font-family: Verdana; color: #FFFFFF; font-weight: bold; background-color: #8BB7F5" name="search_result" >
</p></form>
</td>
	</tr>
</table>
</div>
<?php
include_once 'fetch_all.php';
include 'state_save.php';
include 'state_assign.php';
if(isset($_POST['search_result'])){
if($search_bg==1)
{
$j=$k_bg;}
if($search_c==1)
{
$j=$k_c;}
if($search_n==1)
{
$j=$k_n;}}
$innerstringloopend=$_GET['emailid'].'loopend';
if(isset($j)){
$_SESSION[$innerstringloopend]=$j;}
include 'loop_control.php';
$innerstring2start=$_GET['emailid'].'stringstart';
$_SESSION[$innerstring2start]=$start;
$innerstring2end=$_GET['emailid'].'stringend';
$_SESSION[$innerstring2end]=$end; 
for($i=$start;$i<($end+1);$i++)
{
?>
<?php
if(isset($_POST['search_result'])){
if($search_bg==1)
{
$admin_indicator= $users_search_bg[$i]['city'];
$_SESSION['user_display']=$users_search_bg[$i]['city'];
$user_emailid=$users_search_bg[$i]['user_emailid'];
}
if($search_n==1)
{
$admin_indicator= $users_search_n[$i]['city'];
$_SESSION['user_display']=$users_search_n[$i]['city'];
$user_emailid=$users_search_n[$i]['user_emailid'];
}
if($search_c==1)
{
$admin_indicator=  $users_search_c[$i]['city'];
$_SESSION['user_display']=$users_search_c[$i]['city'];
$user_emailid=$users_search_c[$i]['user_emailid'];
}
}
else{
$admin_indicator=  $users[$i]['user_city'];
$_SESSION['user_display']=$users[$i]['user_city'];
$user_emailid=$users[$i]['user_emailid'];
} 

if($admin_indicator!="-")
{
if(((isset($_POST['show_me'])) && ($_GET['emailid']==$user_emailid)) || ((isset($_POST['show_all'])) && ($_GET['emailid']!=$user_emailid)) || (isset($_POST['search_result'])) || ((!isset($_POST['show_all'])) && (!isset($_POST['show_me']))))
{
?>

<div align="center"  id="<?php echo $i;  ?>" <?php //onmouseover="javascript:enabledisableloader(this.id)" onmouseout="javascript:hidebutton(this.id)" ?> >
<table border="0" cellspacing="0" cellpadding="0" height="129" width="900" bgcolor="#619EF1">
<tr>
<td width="15" bgcolor="#619EF1" rowspan="3">&nbsp;
</td>
<td bgcolor="#619EF1" rowspan="3">

<img src="  <?php
if(isset($_POST['search_result'])){
if($search_bg==1)
{
echo $users_search_bg[$i]['user_image'];}
if($search_n==1)
{
echo $users_search_n[$i]['user_image'];}
if($search_c==1)
{
echo $users_search_c[$i]['user_image'];}
}
else{
echo $users[$i]['user_image'];} ?>"></td>
<td bgcolor="#619EF1" width="215" height="43" bordercolor="#0000FF">
<font color="#FFFFFF">&nbsp;<b><font face="Verdana">Name: <?php
if(isset($_POST['search_result'])){
if($search_bg==1)
{
echo $users_search_bg[$i]['name'];}
if($search_n==1)
{
echo $users_search_n[$i]['name'];}
if($search_c==1)
{
echo $users_search_c[$i]['name'];}
}
else{
echo $users[$i]['user_name'];
} ?></font></b></font></td>
<td bgcolor="#619EF1" width="215" height="43"><font color="#FFFFFF">&nbsp;<font face="Verdana"><b>Blood 
Group: <?php
if(isset($_POST['search_result'])){
if($search_bg==1)
{
echo $users_search_bg[$i]['bloodgroup'];}
if($search_n==1)
{
echo $users_search_n[$i]['bloodgroup'];}
if($search_c==1)
{
echo $users_search_c[$i]['bloodgroup'];}
}
else{
echo $users[$i]['user_bloodgroup'];} ?></b></font></font></td><td bgcolor="#619EF1" rowspan="3" width="300">
<p align="center">
<?php 
if(isset($_POST['search_result'])){
if($search_bg==1)
{
$user_city=$users_search_bg[$i]['city'];
$user_emailid=$users_search_bg[$i]['user_emailid'];
$user_password=$users_search_bg[$i]['user_password'];
$user_adress=$users_search_bg[$i]['user_adress'];
$user_mobileno=$users_search_bg[$i]['user_mobileno'];
$user_gender=$users_search_bg[$i]['user_gender'];
$user_state=$users_search_bg[$i]['user_state'];
}
if($search_n==1)
{
$user_city=$users_search_n[$i]['city'];
$user_emailid=$users_search_n[$i]['user_emailid'];
$user_password=$users_search_n[$i]['user_password'];
$user_adress=$users_search_n[$i]['user_adress'];
$user_mobileno=$users_search_n[$i]['user_mobileno'];
$user_gender=$users_search_n[$i]['user_gender'];
$user_state=$users_search_n[$i]['user_state'];}
if($search_c==1)
{
$user_city=$users_search_c[$i]['city'];
if(isset($users_search_c[$i]['user_emailid'])){
$user_emailid=$users_search_c[$i]['user_emailid'];}
$user_password=$users_search_c[$i]['user_password'];
$user_adress=$users_search_c[$i]['user_adress'];
$user_mobileno=$users_search_c[$i]['user_mobileno'];
$user_gender=$users_search_c[$i]['user_gender'];
$user_state=$users_search_c[$i]['user_state'];}}
else{
$user_city=$users[$i]['user_city'];
$user_emailid=$users[$i]['user_emailid'];
$user_password=$users[$i]['user_password'];
$user_adress=$users[$i]['user_adress'];
$user_mobileno=$users[$i]['user_mobileno'];
$user_gender=$users[$i]['user_gender'];
$user_state=$users[$i]['user_state'];} 
$x=$user_emailid."x".$i;
$_SESSION[$x]=$user_adress;//javascript:aboutinfoloader(<?php echo $i;  ? >,<?php echo $user_emailid;  ? >, <?php echo $user_mobileno; ? >,<?php echo $user_state;  ? >,<?php echo $user_gender;  ? > )
?> 
<input type="submit" name="<?php echo $user_password;  ?>" value="message" id="<?php echo $user_emailid; ?>" style="margin:1; width: 103; height: 24; font-family: Verdana; color: #FFFFFF; font-weight: bold; background-color: #8BB7F5; text-align:center" onClick="javascript:messageboxload(<?php echo $i; ?>,this.id,this.name)" /></p><br/><?php $_SESSION['loop_counter']=$i; ?>
<p align="center">
<input type="submit" id="<?php echo $user_adress;  ?>" name="<?php echo $user_gender;  ?>" accept="<?php echo $user_emailid;  ?>" value="about" align="<?php echo $user_state;  ?>"  style="margin:1; font-family: Verdana; color: #FFFFFF; font-weight: bold; width: 99; height: 21; background-color: #8BB7F5; text-align:center;" onClick="javascript:aboutinfoloader(<?php echo $i;  ?>,<?php echo $user_mobileno;  ?>,this.accept,this.align,this.name,this.id)"  /></p>
</td>
</tr>
<tr>
<td bgcolor="#619EF1" width="215" height="43"><font color="#FFFFFF">&nbsp;<b><font face="Verdana">Last 
Help: 6 months ago</font></b></font></td>
<td bgcolor="#619EF1" width="215" height="43"><font color="#FFFFFF">&nbsp;<b><font face="Verdana">City: 
<?php
if(isset($_POST['search_result'])){
if($search_bg==1)
{
echo $users_search_bg[$i]['city'];}
if($search_n==1)
{
echo $users_search_n[$i]['city'];}
if($search_c==1)
{
echo $users_search_c[$i]['city'];}
}
else{
echo $users[$i]['user_city'];} ?></font></b></font></td></tr>
<tr>
<td bgcolor="#619EF1" width="215" height="43"><font color="#FFFFFF">&nbsp;<b><font face="Verdana">Born: 
<?php
if(isset($_POST['search_result'])){
if($search_bg==1)
{
echo $users_search_bg[$i]['dobyear'];}
if($search_n==1)
{
echo $users_search_n[$i]['dobyear'];}
if($search_c==1)
{
echo $users_search_c[$i]['dobyear'];}
}
else{
echo $users[$i]['user_dobyear'];} ?></font></b></font></td>
<td bgcolor="#619EF1" width="215" height="43"><font color="#FFFFFF">&nbsp;<font face="Verdana"><b>No 
Of Help: 5</b></font></font></td>
</tr>
</table>
</div>
<div align="center">
<table border="0" width="900" cellspacing="0" cellpadding="0" bgcolor="#619EF1" height="35">
	<tr height="25">
		<td width="10">
		
		</td>
		<td width="884">
		
		<?php $image_name="image"."$i";$upload_name="upload"."$i"; include_once 'upload_image_class.php';	if($_GET['emailid']==$user_emailid){include 'upload_image_code.php';}
		//previous

	if($user_emailid==$_SESSION['emailid']){ ?>
		
		<form action="" method="post" enctype="multipart/form-data">
		<p align="left">
		<font face="verdana" size="3" color="white">Upload Image</font><input type="file" name="<?php echo $image_name; ?>" ><input type="submit" name="<?php echo $upload_name;  ?>" value="edit image" id="<?php echo $user_city  ?>"  style="font-family: Verdana; font-weight: bold; color: #FFFFFF; background-color: #A2BAFA" onMouseOver="javascript:sessionassign(this.id)"  ></p>
		</form>
	<?php }  ?>
	</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;
		</td>
	</tr>
</table>
</div>


<?php
$div_name="messageboxload"."$i";

   echo "<div align='center' id='".$div_name."'></div>"; 
  ?>
  <div>
 <?php if($_SESSION['emailid']=="-")
  {
  ?>
  
  
  <?php 
echo "<script type='text/javascript' src='method.js'></script>";
if(1==2){ 
echo "<div id='image".$i."'>";include 'enablebutton.php'; echo "</div>";
 ?>

<?php
}else  { 
echo "<div id='image".$i."'>";include 'enablebutton.php'; echo "</div>";

 ?>
<?php  }  
//echo "<div id='image".$i."'></div></div>";
?>
</div>

  
  <?php
  }//if($_SESSION['emailid']=="-")
  }//if$_POST['show_me']
  
  
  }} ?>
<?php
if($user_emailid=$_GET['emailid']){ 
if($user_emailid!='-')  { ?>
<?php
if($user_emailid=$_GET['emailid']){  ?>
<div align="center">
<table border="0" cellspacing="0" cellpadding="0" height="15" width="900" bgcolor="brown"> 
 <tr>
<td width="904" bgcolor="#619EF1">
<p align="center"><input type="submit" id="<?php echo $_GET['emailid'];  ?>" name="show_messages" value="show messages" style="font-family: verdana; color: #FFFFFF; font-weight: bold; background-color: #8BB7F5" onClick="javascript:loadusermessages(this.id)" ></p></td>
</tr>
</table>
</div>
  <?php }  ?>

</div>
<?php }}  ?>

<div align="center" id="loadmessages" ></div>
 
</div>
<div align="center">
<table border="0" cellspacing="0" cellpadding="0" height="15" width="900" bgcolor="brown">
<tr>
<td width="904" bgcolor="#619EF1"><form method="post" action="">
<p align=center>
<input type="submit" name="show_all" value="show all" style="font-family: verdana; color: #FFFFFF; font-weight: bold; background-color: #8BB7F5">
</form></p>
<form method="post" action="">
<p align=center>
<input type="submit" name="show_me" value="show me" style="font-family: verdana; color: #FFFFFF; font-weight: bold; background-color: #8BB7F5">
</form></p></td>
</tr>
</table>
</div>
<div id="imageset"></div>
</body>
</html>
<?php }  
?>