<head>
<meta http-equiv="Content-Language" content="en-us">
</head>
<?php session_start();  
$link=mysql_connect('localhost','root','');
mysql_select_db('blood_donation');
if($_GET['message']!=""){
$sql="INSERT INTO messages (user_emailid,user_password,user_messages) VALUES ('$_SESSION[useremailid]','$_SESSION[userpassword]','$_GET[message]')  ";
mysql_query($sql);}
mysql_close($link);
 ?>

<table border="0" cellpadding="0" cellspacing="0" bgcolor="#619EF1" width="900" height="50">
<tr>
<td width="545">
<p align="right"><font face="Verdana" color="white" style="font-size: 14pt; font-weight: 700">your message has been delivered!</font></p></td>
<td>
<p align="center" valign="middle">
<input type="submit" name="message_seen" value="ok!" style="font-family: verdana; color: white; font-weight: bold; width: 101; height: 26;background-color: #8BB7F5" onclick="messageboxloadcancel(<?php echo $_GET['display_no'];  ?>)"/>&nbsp;&nbsp;&nbsp;
</p>
</td>
</tr>
</table>