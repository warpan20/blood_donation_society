<?php
$counter=0;
$letter=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
if(isset($_GET['sstring'])){
if($_GET['sstring']=="1"){
$_GET['sstring']="";}
if($_GET['sstring']!=""){
for($i=0;$i<26;$i++){
if (substr_count($_GET['sstring'], 
$letter[$i])>0){
$counter++;
}}
if (substr_count($_GET['sstring'], 
" ")>0){
$counter++;
}
if($counter>0)
{
echo "<font color='white'>invalid mobile-no,don't use space or letters..</font>";
}
else
{
echo "<font color='white'>valid mobile-no...</font>";
}
}
}
?>