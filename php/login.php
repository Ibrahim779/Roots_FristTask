<?php
    session_start();
    $data=array(
       "raneem alashry" => 111,
       "merna desoky mo7ram"=>222,
       "doaa mohamed reyad"=>333
    );

             if ($_SERVER["REQUEST_METHOD"] == "POST")
             {
                $allname=$_POST["name"];
                $number=$_POST["phone-number"];
                 foreach($data as $aname =>$password )
                 {
                     
                 
                     if($allname==$aname && $number==$password)
                     {
                        $sepname=explode(" ",$allname);
                        

                        $_SESSION["name"]=$sepname[0];
                        header( "refresh:1;url=../index.php" );
                     }
                  
            
                 }
                
                 
            }
?>
