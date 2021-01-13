<?php
$link=mysql_connect('localhost','root','');
$sql="CREATE DATABASE IF NOT EXISTS blood_donation";
mysql_query($sql);
mysql_select_db('blood_donation');
$sql="CREATE TABLE IF NOT EXISTS users_and_admin_info
      (
	  user_id INT PRIMARY KEY AUTO_INCREMENT,
	  user_name VARCHAR(150),
	  user_title VARCHAR(150),
	  user_password VARCHAR(150),
	  user_emailid VARCHAR(150),
	  user_adress VARCHAR(150),
	  user_gender VARCHAR(150),
	  user_bloodgroup VARCHAR(150),
	  user_city VARCHAR(150),
	  user_state VARCHAR(150),
	  user_mobileno INT(15),
	  user_dobday INT,
	  user_dobmonth INT,
	  user_dobyear INT,
	  user_image VARCHAR(150)
	  )";
mysql_query($sql);
$sql="CREATE TABLE IF NOT EXISTS messages 
      (
	  user_emailid VARCHAR(150),
	  user_password VARCHAR(150),
	   user_messages VARCHAR(300)
	  )";
mysql_query($sql);	  
if(!isset($_SESSION['admin_insert_complete'])){
$sql="INSERT INTO users_and_admin_info (user_id,user_name,user_title,user_password,user_emailid,user_adress,user_gender,user_bloodgroup,user_city,user_state,user_mobileno,user_dobday,user_dobmonth,user_dobyear,user_image) VALUES
('1'    ,'admin'  ,'admin123','-'          ,'-'         ,'-'        ,'-'        ,'-'            ,'-'      ,'-'       ,'0000'          ,'00'         ,'00'           ,'00'   ,'-'      )";
mysql_query($sql);
$_SESSION['admin_insert_complete']="done";
$sql="INSERT INTO messages (user_emailid,user_password,user_messages) VALUES ('admin@123','admin123','hello_admin')  ";
mysql_query($sql);
}
mysql_close($link);
?>	  
	  
	  