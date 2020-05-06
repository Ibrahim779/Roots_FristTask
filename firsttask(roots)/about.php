<html>
<head>
    <title>About</title>
    <meta charset="utf-8">
   
    
    <link rel="stylesheet" type="text/css" href="css/ABOUT.css">
   


</head>
<body>
        <?php
        include("head.php");
        ?>
    
     <div class="footer">
        <p> get in touch &nbsp;&nbsp;&nbsp;&nbsp;links &nbsp;&nbsp;&nbsp;&nbsp; news letter </p>
    </div>


    <div class="para">
        <h2>ABOUT US</h2>
        <?php
        $text="“Roots” is non-profit technical community ,
		 which aims to connect students who are interested in computer science.
		The great success is a group of small successes, our goal here is that we achieve the great success that we have
		developed in the field and the inheritance that we have chosen. This is why we will always encourage some on this group
		besides the telegram chat that you will follow up with the Instructors, we will start publishing every achievement that
		reaches it Even if it is small or if the road is long, the achievement is just one of a group of steps Lina, we will
		walk with each other, encouragement, technical assistance and even moral help, and most importantly here is the
		follow-up, of course we are all here to come by our choice, and that is sufficient reason that we strive hard, but with
		one person’s pixel It will be difficult if there is no follow-up discussion This we will try to follow you and see if
        there is a sloth we will encourage it and if someone has fulfilled a need we will put it down on the group and celebrate
        its achievement and success, then we will try to do what we can facilitate";

        echo $text;
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
         $newtext=$_POST["new_script"];
         echo $newtext;
        
      
        
        }
        ?>
    </div>
    <div class="forum" >
        <form  class="edit" action="new.php" method="POST">
            <input type="submit" class="edit"  value=" create new">
        </form>
        <form  class="edit" method="POST" action="edit.php">
            <input class="edit"  type="submit"  value="edit">
        </form>
        <form class="edit" action="edit.php" method="POST">  
            <input class="edit"  type="submit"  value="delete">
        </form>
    </div>
    
  
    
    


  
    
</body>

</html>