<?php
       if (!$_GET) {
           header('location:index.php');
       }
       $pageTitle='Show-Image';
	    include 'includes/header.php';
        include 'includes/nav.php';    
    ?>

        <!-- content page -->
        <section class="bgwhite p-t-66 p-b-60">
            <div class="sec-title p-b-52">
                <h3 class="m-text5 t-center">
                    Show Image
                </h3>
            </div>
                    <div class="container">
                    
                       <?php include"Controller/images.php";?>
    <div class="item-slick1 item1-slick1" style="background-image: url(images/<?php echo $img_name;?>);"></div>
    </div>
    
        </section>


     <!-- Footer -->
      <?php 
	include 'includes/footer.php';
	include 'includes/scripts.php';
?>

    </body>

</html>