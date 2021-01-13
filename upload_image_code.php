<?php //<tr> 

$upload_name_variable="upload"."$i";
if(isset($_POST[$upload_name_variable]))
{
$image_name_variable="image"."$i";
if($_FILES[$image_name_variable]['name']!=""){
if(isset($_FILES[$image_name_variable]['tmp_name']))
{
$img=new ImageHandler("blood_donation_society/image_upload",array(230,129));
$img_path=$img->processUploadImage($_FILES[$image_name_variable]);

//echo "<p align='center'><img src='".$img_path."'/></p><br/>";
}}
else
{
$img_path=NULL;
}}//<tr></tr>?>

<?php
//echo "<p align='center'>Image Path:".$img_path."</p><br/>";
if(isset($_POST[$upload_name_variable]))
{ if(isset($img_path)){
$link=mysql_connect('localhost','root','');
mysql_select_db('blood_donation');

$sql="UPDATE users_and_admin_info SET user_image='$img_path' WHERE user_emailid='$_GET[emailid]'";
mysql_query($sql);
mysql_close($link);
header('Location:search.php?emailid='.$_GET['emailid'].'&showme=yes');
}
else{
header('Location:search.php?emailid='.$_GET['emailid'].'&showme=yes');
}
 }
//exit;
//}//else {/*echo "<p align='center'><font size='4' face='Verdana' color='red'>PLEASE UPLOAD AN IMAGE</font></p>";*/}

/*<html>
<body>
<form action="" method="post" enctype="multipart/form-data" >
<p align='center'><input type="file" name="image" /></p>
<p align='center'><input type="submit" name="upload" /></p>
</form>
</body>
</html>*/

?>