<head>
<meta http-equiv="Content-Language" content="en-us">
</head>
<?php session_start();
$_SESSION['useremailid']=$_GET['useremailid'];
$_SESSION['userpassword']=$_GET['userpassword'];
 ?>

<table border="0" cellpadding="0" cellspacing="0" bgcolor="#619EF1" width="900" height="50">
<tr>
<td width="465">
<p align="right">
<textarea name="messagebox" id="messagebox" height="40" width="200" style: width="200px"; rows="2" cols="30"></textarea></p></td>
<td>
<p align="center" valign="middle">
<input type="submit" name="submit_message" value="send" style="font-family: verdana; color: white; font-weight: bold; width: 101; height: 26;background-color: #8BB7F5" onclick="javascript:messageboxsend(<?php echo $_GET['display_no'];  ?>,(document.getElementById('messagebox').value))" />&nbsp;&nbsp;&nbsp;
<input type="submit" name="cancel_message" value="cancel" style="font-family: verdana; color: white; font-weight: bold; width: 101; height: 26;background-color: #8BB7F5" onclick="javascript:messageboxloadcancel(<?php echo $_GET['display_no'];  ?>)" /></p>
</td>
</tr>
</table>