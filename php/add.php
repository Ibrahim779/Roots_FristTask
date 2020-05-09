<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $fname=$_POST["name"];
    $fmessage=$_POST["message"];
    $new=fopen("../text/$fname.txt","a+");
    $cookie_name=$fname;
    setcookie($cookie_name);
    $addtext=fwrite($new,$fmessage);
    header( "refresh:1;url=../index.php" );
   
 }







?>