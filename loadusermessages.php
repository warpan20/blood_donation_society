<?php 
$link=mysql_connect('localhost','root','');
mysql_select_db('blood_donation');
$sql="SELECT * FROM messages WHERE user_emailid='$_GET[emailid]'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>
<div align="center">
<table border="0" cellspacing="0" cellpadding="0" height="50" width="900" bgcolor="#619EF1">
<tr>
<td width="161" bgcolor="#619EF1">
</td>
<td>
<p align="justify" style="line-height: 10px; margin: 5px 10px"><font face="verdana" size="2" color="white"><?php echo $row['user_messages'];  ?></font></td>
</tr>
</table>
</div>
<div align="center">
<?php } 
mysql_close($link); ?>
<table border="0" cellspacing="0" cellpadding="0"  width="900" bgcolor="#619EF1">
<tr><td>
<p align="center">
<input type="submit" name="okk" value="ok!" onclick="javascript:messageshide()" style="width: 81; height: 23; color: #FFFFFF; font-family: verdana; font-weight: bold; background-color: #8BB7F5" /></p>
</td></tr></table>
<table border="0" cellspacing="0" cellpadding="0"  width="900" bgcolor="#619EF1">
<tr><td>
<p align="center">
<input type="submit" name="<?php echo $_GET['emailid']; ?>" value="delete all" onclick="javascript:loaddeletemessages(this.name)" style="width: 81; height: 23; color: #FFFFFF; font-family: verdana; font-weight: bold; background-color: #8BB7F5" /></p>
</td></tr></table>
