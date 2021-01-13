<?php //<tr> 
class ImageHandler
{
public $save_dir;
public $max_dims;
public function __construct($save_dir,$max_dims)
{
$this->save_dir=$save_dir;
$this->max_dims=$max_dims;
}
private function renameFile($ext)
{
$session_help=$_GET['emailid'].'image';
if(!isset($_SESSION[$session_help])){
$_SESSION[$session_help]=time().'_'.mt_rand(1000,9999).$ext;//change causer
return $_SESSION[$session_help];
}
else
{
return $_SESSION[$session_help];
}
}
private function getImageExtension($type)
{
switch($type)
{
case 'image/gif':
return '.gif';
case 'image/jpeg':
return '.jpeg';
case 'image/png':
return '.png';
default:
//echo "<p align='center'>File type not recognised</p>";
}
}
public function processUploadImage($file,$rename=TRUE)
{
list($name,$type,$tmp,$err,$size)=array_values($file);
if($err != UPLOAD_ERR_OK)
{
//echo "<p align='center'><font size='4' face='Verdana' color='red'>YOU HAD LEFT THE IMAGE FIELD EMPTY</font></p>";
//exit;
}
$this->doImageResize($tmp);
if($rename==TRUE)
{
$img_ext=$this->getImageExtension($type);
$name=$this->renameFile($img_ext);
}
$filepath=$this->save_dir.'/'.$name;
$absolute=$_SERVER['DOCUMENT_ROOT'].$filepath;
move_uploaded_file($tmp,$absolute);
return "image_upload/".$name;
}
private function getNewDims($img)
{
list($src_w, $src_h) = getimagesize($img);
list($max_w, $max_h) = $this->max_dims;
if($src_w > $max_w || $src_h > $src_h)
{
$s = min($max_w/$src_w,$max_h/$src_h);
}
else
{
$s = 1;
}
$new_w = round($src_w * $s);
$new_h = round($src_h * $s);
return array($new_w, $new_h, $src_w, $src_h);
}
private function getImageFunctions($img)
{
$info = getimagesize($img);
switch($info['mime'])
{
case 'image/jpeg':
case 'image/pjpeg':
return array('imagecreatefromjpeg', 'imagejpeg');
break;
case 'image/gif':
return array('imagecreatefromgif', 'imagegif');
break;
case 'image/png':
return array('imagecreatefrompng', 'imagepng');
break;
default:
return FALSE;
break;
}
}
private function doImageResize($img)
{
$d = $this->getNewDims($img);
$funcs = $this->getImageFunctions($img);
$src_img = $funcs[0]($img);
$new_img = imagecreatetruecolor($d[0], $d[1]);
if(imagecopyresampled(
$new_img, $src_img, 0, 0, 0, 0, $d[0], $d[1], $d[2], $d[3]
))
{
imagedestroy($src_img);
if($new_img && $funcs[1]($new_img, $img))
{
imagedestroy($new_img);
}
}
}
}
?>