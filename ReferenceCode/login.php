<?php 
       $pageTitle='Login';
       include 'includes/header.php';
    ?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                        <div style="background-color: rgb(201, 235, 235);" class="col-md-8  m-t-100  m-l-250 p-b-50  ">
                            <form action="Controller/login.php" method="POST" class="leave-comment">
                              
                                <h4 class="m-text20 p-b-36 p-t-15 t-center">
                                   
                                        <img  style="width:50px; height: auto;" src="images/icons/logo3.jpg" alt="IMG-LOGO">
                                    
                                    ROOTS
                                </h4>
                        
                                <div class="bo4 of-hidden size15 m-b-20">
                                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Name">
                                </div>
                        
                                <div class="bo4 of-hidden size15 m-b-20">
                                    <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
                                </div>
                    
                        
                                <div class="w-size25">
                                    <!-- Button -->
                                    <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                       Login
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