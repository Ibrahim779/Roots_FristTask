<!DOCTYPE HTML>
<html>
<head>
    <title>personal Analysis</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="css/PERSONALANALYSIS.css">
    


</head>
<body>
    
        <?php
        include("head.php");
        ?>

    <div class="form">
    <h2 class="title">YOUR PERSONAL TEST</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label >YOUR FAVOURITE COLOR</label></br>
        <select name="color" >
          
            <option value="Red" >Red</option>
            <option value="Blue" >Blue</option>
            <option value="Black" >Black</option>

        </select> </br>
        <label>YOUR FAVOURITE PLACE</label></br>
        <select name="place" >
            <option value="Garden" >Garden</option>
            <option value="Kitchen" >Kitchen</option>
            <option value="Bedroom" >Bedroom</option>
            
        </select>  </br>
        <label>WHO DO YOU LOVE MORE?</label></br>
        <input  type="radio" value="your_father" name="love"> <p>Your father</p> </br>
        <input  type="radio" value="your_mother" name="love"><p>Your mother</p> </br>
        <input class="submit" type="submit" value="send">

    </form>

    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            /*
            echo $_POST["place"];
            echo $_POST["color"];
            echo $_POST ["love"];
            */
          
           if(  $_POST["color"]=="Blue" && $_POST["place"]=="Garden" && $_POST["love"]=="your_father")
           { 
              echo
                " <h5> RESULT</h5>
                <p>
                Ali, You are an innocent, calm and gentle person, You love freedom and kind-hearted,
                You are a passionate and affectionate person .
                </p>
                <h3>THANK YOU</h3>";

     

           }
           else{
               echo "another result";
           }
        }


    ?>
    
    
   

    
</body>

</html>