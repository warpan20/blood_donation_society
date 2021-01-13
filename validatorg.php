<?php
session_start();
$y=date( "y" );$year="20".$y;
if($year-($_GET['sstringg'])<18)
{
echo "<font face='verdana' size='1' color='white'>you are too young to donate...</font>";$_SESSION['right_registartion_fill_counter']="wrong";
}
else
{
$count=0;
if($_GET['sstringg']%4==0){
if($_GET['sstring']>29){
if($_GET['sstrings']==2){
echo "<font face='verdana' size='1' color='white'>invalid date...</font>";$count++;$_SESSION['right_registartion_fill_counter']="wrong";
}}
}else
{
if($_GET['sstring']>28){
if($_GET['sstrings']==2){
if($count==0){
echo "<font face='verdana' size='1' color='white'>invalid date...</font>";$count++;$_SESSION['right_registartion_fill_counter']="wrong";
}}}
}
if(($_GET['sstrings']==4) ||($_GET['sstrings']==6) || ($_GET['sstrings']==11) ||($_GET['sstrings']==9) )
{
if($_GET['sstring']>30){
if($count==0){
echo "<font face='verdana' size='1' color='white'>invalid date...</font>";$count++;$_SESSION['right_registartion_fill_counter']="wrong";
}}
}
else
{
if($_GET['sstring']>31){
if($count==0){
echo "<font face='verdana' size='1' color='white'>invalid date...</font>";$count++;$_SESSION['right_registartion_fill_counter']="wrong";
}}
}
if($count==0)
{
echo "<font face='verdana' size='1' color='white'>valid date...</font>";$_SESSION['right_registartion_fill_counter']="right";
}
}
?>