<html>
<head>
    <title>style</title>
    <meta charset="utf-8">
    

   <style>
       .image 
       {
           text-align: center; 
           margin-top:50px;
           

       }
       input{
           background-color: red;
           color: white;
           border-radius: 20px;
          font-size:40px;     
          }
        .arrival 
        {
            margin-top: 250px;
            text-align: center;
            color: red;
            font-size: 80px
            

        }
       
   </style>


</head>
<body>
   <?php
   include("head.php");
   ?>

    <h1 class="arrival"> NEW ARRIVALS </h1>

    <div class="image" >
        
        <form method="POST" action="showimage.php"> 
            <input  type="submit" value="show">
        </form>   
      
    
    


  
    
</body>

</html>