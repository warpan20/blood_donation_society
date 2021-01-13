<?php
session_start();
$counter=0;
if(isset($_GET['sstring'])){
if(isset($_GET['sstrings'])){
if($_GET['sstring']!=""){
if($_GET['sstrings']!=""){
if (substr_count($_GET['sstring'], 
$_GET['sstrings'])>0){
$counter++;
}
if (substr_count($_GET['sstringg'], 
" ")>0){
$counter=0;
}
if($counter>0)
{
if(strlen($_GET['sstring'])==strlen($_GET['sstrings'])){
echo "<font color='white'>password and retype password matched..</font>";$_SESSION['right_registartion_fill_counter']="right";}else{
echo "<font color='white'>password and retype password match so far..</font>";$_SESSION['right_registartion_fill_counter']="wrong";
}}else{
echo "<font color='white'>password and retype password don't match..</font>";$_SESSION['right_registartion_fill_counter']="wrong";}
}
}}}
if($_GET['sstrings']!=""){
if($_GET['sstring']=="")
{
echo "<font color='white'>fill the password field first..</font>";
}}
?>