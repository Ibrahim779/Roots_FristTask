
<html>
<head>
    <title>About</title>
    <meta charset="utf-8">
    
  
   <style>
       body
           {
               background-color: grey;
           }
       
       .new2 
       {
           text-align: center;
           margin-top:40px;
           margin-bottom: 40px;

       }
       .button 
       {
           margin-top: 40px;
           border-color: black;
           border-radius: 30px;
           border-width:1px;
           font-size: 30px;


        }
    </style>
   


</head>
<body>
    <?php
        include("head.php");
     ?>
    

    
     <div class="new2">
     <form  method="post" action="about.php" >
     <textarea name="new_script" value="new" cols="50" rows="20"></textarea> </br>
     <input  class="button "type="submit" value="add new">
    </form>
    </div>


    
     
    


  
    
</body>

</html>