<?php

 echo $_SESSION["name"] . ","; 
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if($_POST["color"]=="Red")
    {
        echo "you are bold";
    }
    elseif($_POST["color"]=="Blue")
    {
        echo "you are pure";

    }
    elseif($_POST["color"]=="Yellow")
    {
        echo "you are funny";

    }
    elseif($_POST["color"]=="White")
    {
        echo "you are innocent";

    }
    elseif($_POST["color"]=="Black")
    {
        echo "you are mysterious ";

    } 
    
    if($_POST["place"]=="The Garden")
    {
        echo ", You love freedom and kind-hearted ";

    }
    elseif($_POST["place"]=="Your Room")
    {
        echo ", calm and gentle person";
        

    }
    elseif($_POST["place"]=="Room other than you")
    {
        echo " ,spontaneous and casual";

    }
    if($_POST["exampleRadios"]=="option1")
    {
        echo" , You are a passionate and affectionate person .";
    }
    elseif($_POST["exampleRadios"]=="option2")
    {

        echo " , you are careful and good listener .";
    }

}


?>