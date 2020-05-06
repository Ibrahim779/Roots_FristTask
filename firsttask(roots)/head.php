<html>
<head>
    <title>login</title>
    <meta charset="utf-8">
   <style>
       body 
       {
           margin:0px;
           background-color:  rgba(5, 151, 151, 0.295);
           
       }
       .header
            {
                
                border:  1px;
                border-style: solid;
                border-color: rgba(0, 0, 0, 0.151);
                padding: 10px;
               
                
                
            }

       .logo 
       {
            width:40px;
           height: 40px;
           vertical-align:middle;
       }
     ul,li ,a
     {
         display: inline;
         text-decoration: none;
         color: black;
         margin-left:50px;
         font-size: 30px;
         font-style: bold;

     }


       
    </style>


</head>
<body>
<header class="header">
        
        <img class="logo" src="images/logo2.jpg" alt="logo">

         <a href="image.php" style="margin-left: 0px"><b style="font-size: 20px"> ROOTS </b> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        
        
                <ul>
                    <li >
                        <a href="about.php" >Home</a>
                    </li>
                    <li>
                        <a href="personal_analysis.php">Personal Analysis</a>
                    </li>
                <ul >
         
        
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
                Welcome, <?php
                     
            session_start();
             echo $_SESSION["name"] ; ?>
           
         
</header>
</body>
</html>