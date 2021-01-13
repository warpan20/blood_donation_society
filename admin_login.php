<?php
if(isset($_POST['login']))
{
if($_POST['login_as']=="user"){
mysql_connect('localhost','root','');
mysql_select_db('blood_donation');
$sql="SELECT * FROM users_and_admin_info WHERE user_emailid='$_POST[login_email_id]'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
if($row['user_password']==$_POST['login_password'])
{
$authentication="granted"; }
else
{
$authentication="not granted";
}
}
if(isset($authentication)){
if($authentication=="granted"){
//if(($_POST['login_password']=="admin123") && ($_POST['login_as']=="admin"))
//{
$x=$_POST['login_email_id'].'allow';
$_SESSION[$x]='allow';
header('Location:search.php?emailid='.$_POST[login_email_id].'&showme=yes');
exit;
//}
}}}
if($_POST['login_as']=="admin")
{
$x=$_POST['login_email_id'].'allow';//
$_SESSION[$x]='allow';//
if($_POST['login_email_id']=="-" && $_POST['login_password']=="admin123")
{
header('Location:search.php?emailid=-'.'&showme=yes');
exit;
}}

}
?>