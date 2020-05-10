<?php

$results[]=$_SESSION["name"]; 
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if($_POST["color"]=="Red")
    {
        $results[]= "you are bold";
    }
    elseif($_POST["color"]=="Blue")
    {
        $results[]= "you are pure";

    }
    elseif($_POST["color"]=="Yellow")
    {
        $results[]= "you are funny";

    }
    elseif($_POST["color"]=="White")
    {
        $results[]= "you are innocent";

    }
    elseif($_POST["color"]=="Black")
    {
        $results[]="you are mysterious ";

    } 
    
    if($_POST["place"]=="The Garden")
    {
        $results[]="You love freedom and kind-hearted";

    }
    elseif($_POST["place"]=="Your Room")
    {
        $results[]= "calm and gentle person";
        

    }
    elseif($_POST["place"]=="Room other than you")
    {
        $results[]= "spontaneous and casual";

    }
    if($_POST["loveMore"]=="father")
    {
      $results[]="You are a passionate and affectionate person .";
    }
    elseif($_POST["loveMore"]=="mother")
    {

       $results[]="you are careful and good listener .";
    }

}


?>