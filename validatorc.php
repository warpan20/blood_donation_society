<?php
session_start();
$counter=0;$counter1=0;$counter2=0;
if(isset($_GET['sstring'])){
if($_GET['sstring']=="1"){
$_GET['sstring']="";}
if($_GET['sstring']!=""){
if (substr_count($_GET['sstring'], 
" ")>0){
$counter++;
}
if (substr_count($_GET['sstring'], 
"@")>0){$counter1++;}
if (substr_count($_GET['sstring'], 
".")>0){$counter2++;}
if(($counter>0) || ($counter1==0) || ($counter2==0))
{
echo "<font color='white'>invalid email adress..</font>";$_SESSION['right_registartion_fill_counter']="wrong";
}
else
{
echo "<font color='white'>valid email adress...</font>";$_SESSION['right_registartion_fill_counter']="right";
}
}
}
?>