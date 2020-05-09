<?php
 
 
 
// php/add.php ممكن تبقي تشيلي الجزء ده وتحطيه في 
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $fname=$_POST["name"];
                $fmessage=$_POST["message"];

                $new=fopen("text/$fname.txt","a+");
                $addtext=fwrite($new,$fmessage);
                fclose($new);
                //file_put_contents("text/$fname.txt",$fmessage); // ده بيعمل نفس الي فوق
                
                setcookie('text',$fname,time()+3600,'/');
                header('location:index.php');
            }
///////////


if(!isset($_COOKIE['text']))
{
    
    $default=fopen("text/default.txt","r");
    $contents= fread($default,filesize("text/default.txt"));
    //file_get_contents("text/default.txt"); // ده بيعمل نفس الي فوق
    echo $contents;

}
else
{
    $fname=$_COOKIE['text']; 
    $new=fopen("text/$fname.txt","r");
    $new_text= fread($new,filesize("text/$fname.txt"));
    //file_get_contents("text/$fname.txt")
    
    echo $new_text;


}
?>



