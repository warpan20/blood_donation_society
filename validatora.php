<?php
session_start();
$counter=0;
if(isset($_GET['sstring'])){
if($_GET['sstring']=="x"){
$_GET['sstring']="";}
if($_GET['sstring']!=""){
for($i=0;$i<10;$i++){
if (substr_count($_GET['sstring'], 
"$i")>0){
$counter++;
}}
if (substr_count($_GET['sstring'], 
" ")>0){
$counter++;
}
if($counter>0)
{
echo "<font color='white'>invalid title,you cannot use space or intigers..</font>";$_SESSION['right_registartion_fill_counter']="wrong";
}
else
{
echo "<font color='white'>valid title...</font>";$_SESSION['right_registartion_fill_counter']="right";
}
}
}
?>