<?php
if(isset($_POST['submit_form']))
{
$link=mysql_connect('localhost','root','');
mysql_select_db('blood_donation');

$sql="INSERT INTO users_and_admin_info (user_id,user_name,user_title,user_password,user_emailid,user_adress,user_gender,user_bloodgroup,user_city,user_state,user_mobileno,user_dobday,user_dobmonth,user_dobyear,user_image) VALUES
(''    ,'$_POST[name]'  ,'$_POST[title]','$_POST[password]'          ,'$_POST[email_id]'         ,'$_POST[adress]'        ,'$_POST[gender]'        ,'$_POST[blood_group]'            ,'$_POST[city]'      ,'$_POST[state]'       ,'$_POST[mobile_no]'          ,'$_POST[day]'         ,'$_POST[month]'           ,'$_POST[year]'  ,'_'       )";
mysql_query($sql);
}
?>
