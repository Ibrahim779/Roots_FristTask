<?php
session_start();
             if ($_SERVER["REQUEST_METHOD"] == "POST")
             {
             $allname=$_POST["name"];
             $sepname=explode(" ",$allname);
             

             $_SESSION["name"]=$sepname[0];
             header( "refresh:1;url=image.php" );
            
             }
?>
