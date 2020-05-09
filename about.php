<?php
 
 
 

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $fname=$_POST["name"];
   $fmessage=$_POST["message"];
   $new=fopen("text/$fname.txt","a+");
   $cookie_name=$fname;
   
   $addtext=fwrite($new,$fmessage);
   fclose($new);
   
  
}
setcookie($cookie_name,'');


if(!isset($_COOKIE[$cookie_name]))
{
    
    $default=fopen("text/default.txt","r");
    $contents= fread($default,filesize("text/default.txt"));
    echo $contents;

}
else
{
  
    $new=fopen("text/$fname.txt","r");
    $new_text= fread($new,filesize("text/$fname.txt"));
    echo $new_text;


}
?>



