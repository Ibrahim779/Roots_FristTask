<?php
 $images=array
 (
     array("id"=>1,"name"=>"images/banner-01.jpg"),
     array("id"=>2,"name"=>"images/banner-031.jpg"),
     array("id"=>3,"name"=>"images/banner-02.jpg")
);
foreach ($images as $value) 
{
    
    if($value["id"]==$_GET["id"])
    {
        echo $value["name"];
    }
    
}

   
    
