<?php
$indicate=0;$k_bg=0;$k_n=0;$k_c=0;
$link=mysql_connect('localhost','root','');
mysql_select_db('blood_donation');
$sql="SELECT * FROM users_and_admin_info";
$result=mysql_query($sql);
$j=0;
while($row=mysql_fetch_array($result))
{
$j++;
$users[$j]['user_name']=$row['user_name'];
$users[$j]['user_title']=$row['user_title'];
$users[$j]['user_bloodgroup']=$row['user_bloodgroup'];
$users[$j]['user_city']=$row['user_city'];
$users[$j]['user_name']=$row['user_name'];
$users[$j]['user_dobyear']=$row['user_dobyear'];
$users[$j]['user_image']=$row['user_image'];
$users[$j]['user_emailid']=$row['user_emailid'];
$users[$j]['user_password']=$row['user_password'];
$users[$j]['user_adress']=$row['user_adress'];
$users[$j]['user_gender']=$row['user_gender'];
$users[$j]['user_mobileno']=$row['user_mobileno'];
$users[$j]['user_state']=$row['user_state'];
}
mysql_close($link);
if(isset($_POST['search_result']))
{
for($i=1;$i<($j+1);$i++){
if($_POST['type_of_search']=='by blood-group')
{$search_bg=1;$search_n=0;$search_c=0;
$bloodgroup=strtolower($_POST['search']);
$bloodgroupusers=strtolower($users[$i]['user_bloodgroup']);
if(substr_count($bloodgroup,$bloodgroupusers)>0){
$indicate=1;}else{$indicate=0;}
if(substr_count($bloodgroupusers,$bloodgroup)>0){
$indicate=1;}else{$indicate=0;}
if($indicate==1)
{$k_bg++;
$users_search_bg[$k_bg]['name']=$users[$i]['user_name'];
$users_search_bg[$k_bg]['title']=$users[$i]['user_title'];
$users_search_bg[$k_bg]['city']=$users[$i]['user_city'];
$users_search_bg[$k_bg]['bloodgroup']=$users[$i]['user_bloodgroup'];
$users_search_bg[$k_bg]['dobyear']=$users[$i]['user_dobyear'];
$users_search_bg[$k_bg]['user_image']=$users[$i]['user_image'];
$users_search_bg[$k_bg]['user_emailid']=$users[$i]['user_emailid'];
$users_search_bg[$k_bg]['user_password']=$users[$i]['user_password'];
$users_search_bg[$k_bg]['user_adress']=$users[$i]['user_adress'];
$users_search_bg[$k_bg]['user_gender']=$users[$i]['user_gender'];
$users_search_bg[$k_bg]['user_mobileno']=$users[$i]['user_mobileno'];
$users_search_bg[$k_bg]['user_state']=$users[$i]['user_state'];
}
}
if($_POST['type_of_search']=='by name')
{
$search_n=1;$search_c=0;$search_bg=0;
$name=strtolower($_POST['search']);
$nameusers=strtolower($users[$i]['user_name']);
//if(substr_count($bloodgroup,$bloodgroupusers)>0){
//$indicate=1;}else{$indicate=0;}
if(substr_count($nameusers,$name)>0){
$indicate=1;}else{$indicate=0;}
if($indicate==1)
{$k_n++;
$users_search_n[$k_n]['name']=$users[$i]['user_name'];
$users_search_n[$k_n]['title']=$users[$i]['user_title'];
$users_search_n[$k_n]['city']=$users[$i]['user_city'];
$users_search_n[$k_n]['bloodgroup']=$users[$i]['user_bloodgroup'];
$users_search_n[$k_n]['dobyear']=$users[$i]['user_dobyear'];
$users_search_n[$k_n]['user_image']=$users[$i]['user_image'];
$users_search_n[$k_n]['user_emailid']=$users[$i]['user_emailid'];
$users_search_n[$k_n]['user_password']=$users[$i]['user_password'];
$users_search_n[$k_n]['user_adress']=$users[$i]['user_adress'];
$users_search_n[$k_n]['user_gender']=$users[$i]['user_gender'];
$users_search_n[$k_n]['user_mobileno']=$users[$i]['user_mobileno'];
$users_search_n[$k_n]['user_state']=$users[$i]['user_state'];
}
}
if($_POST['type_of_search']=='by city')
{
$search_c=1;$search_n=0;$search_bg=0;
$city=strtolower($_POST['search']);
$cityusers=strtolower($users[$i]['user_city']);
//if(substr_count($bloodgroup,$bloodgroupusers)>0){
//$indicate=1;}else{$indicate=0;}
if(substr_count($cityusers,$city)>0){
$indicate=1;}else{$indicate=0;}
if($indicate==1)
{$k_c++;
$users_search_c[$k_c]['name']=$users[$i]['user_name'];
$users_search_c[$k_c]['title']=$users[$i]['user_title'];
$users_search_c[$k_c]['city']=$users[$i]['user_city'];
$users_search_c[$k_c]['bloodgroup']=$users[$i]['user_bloodgroup'];
$users_search_c[$k_c]['dobyear']=$users[$i]['user_dobyear'];
$users_search_c[$k_c]['user_image']=$users[$i]['user_image'];
$users_search_c[$k_c]['user_emailid']=$users[$i]['user_emailid'];
$users_search_c[$k_c]['user_password']=$users[$i]['user_password'];
$users_search_c[$k_c]['user_adress']=$users[$i]['user_adress'];
$users_search_c[$k_c]['user_gender']=$users[$i]['user_gender'];
$users_search_c[$k_c]['user_mobileno']=$users[$i]['user_mobileno'];
$users_search_c[$k_c]['user_state']=$users[$i]['user_state'];
}
}
}}
?>