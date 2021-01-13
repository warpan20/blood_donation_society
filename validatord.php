<?php
session_start();
$counter=0;
if(isset($_GET['sstring'])){
if($_GET['sstring']=="1"){
$_GET['sstring']="";}
if($_GET['sstring']!=""){
if (substr_count($_GET['sstring'], 
" ")>0){
$counter++;
}
if($counter>0)
{
echo "<font color='white'>invalid password don't use space..</font>";$_SESSION['right_registartion_fill_counter']="wrong";
}
else
{
if(strlen($_GET['sstring'])<6){
echo "<font color='white'>too short password..</font>";$_SESSION['right_registartion_fill_counter']="wrong";}
if(strlen($_GET['sstring'])>5){
if(strlen($_GET['sstring'])<9){
echo "<font color='white'>password protection medium..</font>";$_SESSION['right_registartion_fill_counter']="right";}}
if(strlen($_GET['sstring'])>8){
echo "<font color='white'>password protection high..</font>";$_SESSION['right_registartion_fill_counter']="right";}
}
}
}
?>