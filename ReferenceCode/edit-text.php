<?php
      session_start();
     $pageTitle='Home';
	include 'includes/header.php';
    include "Controller/text.php";?>
     
    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div style="background-color: rgb(201, 235, 235);" class="col-md-8  m-t-100  m-l-250 p-b-50  ">
                        <form action="Controller/add-text.php" method="POST"  class="leave-comment">

                            <h4 class="m-text20 p-b-36 p-t-15 t-center">

                                <img style="width:50px; height: auto;" src="images/icons/logo3.jpg" alt="IMG-LOGO">

                                ROOTS
                            </h4>

                            <div class="bo4 of-hidden size15 m-b-20">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="file_name"
                                   value="<?php echo $file_name;?>" placeholder="File Name">
                            </div>

                            <textarea style="height:300px;" class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="text"
                                placeholder="Text"><?php echo $text;?></textarea>


                            <div class="w-size25">
                                <!-- Button -->
                                <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                    Edit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


        <!-- Main JS-->
     <?php 
	include 'includes/scripts.php';
?>

    </body>

</html>
<!-- end document-->