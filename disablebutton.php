<?php if(isset($i)){ $_GET['counter']=$i;  } ?>
<html>
<script type="text/javascript" src="method.js"></script>
<body>
<div align="center">
<table cellpadding="0" cellspacing="0" border="0" width="900" bgcolor="#619EF1">
<tr>
<td height="10">
<p align="center">
<input type="submit" value="disable" style="color: #FFFFFF; font-family: verdana; font-weight: bold; background-color: #8BB7F5" name="disable" onclick="javascript:enablebuttonloader(<?php echo $_GET['counter'];  ?>)" /></p>
</td>
</tr></table>
</div>
</body>
</html>