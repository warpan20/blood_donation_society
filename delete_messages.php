<?php
$link=mysql_connect('localhost','root','');
mysql_select_db('blood_donation');
$sql="DELETE FROM messages WHERE user_emailid='$_GET[emailid]'";
mysql_query($sql);
mysql_close($link);  ?>
<table border="0" cellpadding="0" cellspacing="0" bgcolor="#619EF1" width="900" height="50">
<tr>
<td width="545">
<p align="right"><font face="Verdana" color="white" style="font-size: 14pt; font-weight: 700">all messages have been deleted!</font></p></td>
<td>
<p align="center" valign="middle">
<input type="submit" name="message_seen_secondtime" value="ok!" style="font-family: verdana; color: white; font-weight: bold; width: 101; height: 26;background-color: #8BB7F5" onclick="javascript:messageshide()"/>&nbsp;&nbsp;&nbsp;
</p>
</td>
</tr>
</table>
