<?php
session_start();
$file_name=$_POST['file_name'];
$text=$_POST['text'];
file_put_contents('../text/'.$file_name,$text);
setcookie($_SESSION['name'],$file_name,time()+3600,'/');
header("location:../index.php");
