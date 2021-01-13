<?php
$innerstringstart=$_GET['emailid'].'loopcontrol'.'start';
$inerstringend=$_GET['emailid'].'loopcontrol'.'end';
if(isset($_SESSION[$innerstringstart])){
if(($_SESSION[$innerstringstart]>$_SESSION[$innerstringloopend]) && ($_SESSION[$innerstringend]>$_SESSION[$innerstringloopend]))
{
$_SESSION[$innerstringstart]-=5;$_SESSION[$innerstringend]-=5;
$start=$_SESSION[$innerstringstart];$end=$_SESSION[$innerstringend];
}
if(($_SESSION[$innerstringstart]<$_SESSION[$innerstringloopend]) && ($_SESSION[$innerstringend]>$_SESSION[$innerstringloopend]))
{$start=$_SESSION[$innerstringstart];$end=$_SESSION[$innerstringloopend];}
}
else
{
$start=1;$end=5;
}
if($end>$_SESSION[$innerstringloopend])
$end=$_SESSION[$innerstringloopend];
?>




