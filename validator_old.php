<?php
//validator.phponkeyup="javascript:validateform(document.getElementById('yourname').value)"
//A list of valid names.
//Again, this would usually come from a database.
$names = array ("india","pakistan","bangladesh","sri lanka","nepal","bhutan");for($i=0;$i<count($names);$i++){$name[$i]=strtolower($names[$i]);}
if (!in_array ( strtolower ($_GET['sstring']), $name  )){
//Then return with an error.
?><p><span style="color: #FF0000;">Country not found...</span></p><?php
} else {
//At this point we would go to the processing script.
?><p><span style="color: #FF0000;">Valid Country name...</span></p><?php
}
?>