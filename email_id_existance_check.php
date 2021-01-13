<?php
$link=mysql_connect('localhost','root','');
mysql_select_db("blood_donation");
$sql="SELECT * FROM users_and_admin_info";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
if($_POST['email_id']==$row['user_emailid'])
{
$_SESSION['right_registartion_fill_counter']="wrong";
}
}
mysql_close($link);
?>
