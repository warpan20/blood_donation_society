<?php 
echo "<script type='text/javascript' src='method.js'></script>";
if(1==2){  ?>
<body onLoad="javascript:enablebuttonloader(1)">
<?php
}else  {  ?><body onload="javascript:enablebuttonloader(<?php echo $i;  ?>)"><?php  }  
echo "<div id='image1'></div></body>";


?>