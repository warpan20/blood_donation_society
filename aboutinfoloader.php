<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<body>
<?php
//session_start();
//if(isset($_POST['show_more']))
//{
//$_SESSION['counter']=$_SESSION['counter']+5;
//}
//else
//{
//$_SESSION['counter']=5;
//}
//for($i=0;$i<$_SESSION['counter'];$i++)
//{ 
?>
<div align="center">
<table border="0" cellspacing="0" cellpadding="0" height="15" width="900" bgcolor="brown">
<tr>
<td bgcolor="#619EF1">
</td>
</tr>
</table>
</div>
<div align="center">
<table border="0" cellspacing="0" cellpadding="0" height="129" width="900" bgcolor="#619EF1">
<tr>
<td width="15" bgcolor="#619EF1" rowspan="2">
</td>
<td bgcolor="#619EF1" rowspan="2">
<img src="photo.png"></td>
<td bgcolor="#619EF1" width="228" height="43" bordercolor="#0000FF">
<font color="#FFFFFF"><b><font face="Verdana">State: <?php echo $_GET['state'];  ?></font></b></font></td>
<td bgcolor="#619EF1" width="215" height="43"><font color="#FFFFFF"><font face="Verdana"><b>Mobile No: <?php echo $_GET['mobileno'];   ?></b></font></font></td><td bgcolor="#619EF1" rowspan="2" width="300">
<p align="center">
<font face="verdana" color="#FFFFFF"><b>Adress: <?php echo $_GET['adress'];  ?></b></font></p><br/>
<p align="center">
</p>
</td>
</tr>
<tr>
<td bgcolor="#619EF1" width="228" height="43"><font color="#FFFFFF"><b><font face="Verdana">Email ID: <?php echo $_GET['emailid'];  ?></font></b></font><p><font color="#FFFFFF"></font></td>
<td bgcolor="#619EF1" width="215" height="43"><font color="#FFFFFF"><b><font face="Verdana">Gender: <?php echo $_GET['gender'];  ?></font></b></font></td>
</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" height="" width="900" bgcolor="#619EF1">
<tr>
<td bgcolor="#619EF1">
<p align="center">
<input type="submit" name="<?php echo $_GET['counter'];  ?>" value="ok!" onclick="javascript:messageboxloadcancel(this.name)" style="width: 81; height: 23; color: #FFFFFF; font-family: verdana; font-weight: bold; background-color: #8BB7F5" /></p>
</td>
</tr>
</table>
</div>
<?php
 //}  
 ?>
	</body>
</html>