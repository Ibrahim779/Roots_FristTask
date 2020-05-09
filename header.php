<!DOCTYPE html>
 <?php session_start(); ?>
 
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
				<img src="images/icons/logo3.jpg" alt="IMG-LOGO">
				</a>
				<a href="index.php" class="logo p-l-50 ">
					<h2>ROOTS</h2>
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="contact.php">Personal Analysis</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="header-icons">
					Welcome,  <?php
                     
					
					 echo $_SESSION["name"] ; ?>
				</div>
			</div>
		</div>
    </header>
  
</body>
</html>
