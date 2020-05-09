<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
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
						Welcome, <?php
						
						
						echo $_SESSION["name"] ; ?>
							<a class="btn btn-danger btn-sm m-l-10" href="php/logout.php">Logout</a>
					</div>
				</div>
			</div>
		</header>

		<!-- Slide1 -->
		<section class="slide1">
			<div class="wrap-slick1">
				<div class="slick1">
					<div class="item-slick1 item1-slick1" style="background-image: url(images/banner-01.jpg);">
						<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
				
							<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
								New arrivals
							</h2>

							<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
								<!-- Button -->
								<a href="showImage.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
									Show
								</a>
							</div>
						</div>
					</div>

					<div class="item-slick1 item2-slick1" style="background-image: url(images/banner-031.jpg);">
						<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
								New
							</h2>

							<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
								<!-- Button -->
								<a href="showImage.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
									Show
								</a>
							</div>
						</div>
					</div>
					<div class="item-slick1 item2-slick1" style="background-image: url(images/banner-02.jpg);">
						<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
								New
							</h2>
					
							<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
								<!-- Button -->
								<a href="showImage.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
									Show
								</a>
							</div>
						</div>
					</div>


				</div>
			</div>
		</section>

		<!-- Blog -->
		<section class="blog bgwhite p-t-94 p-b-65">
			<div class="container">
				<div class="sec-title p-b-52">
					<h3 class="m-text5 t-center">
						About Us
					</h3>
				</div>
				<div class="row">
					<div class="col-sm-10 col-md-20 p-b-30 m-l-r-auto">
						<!-- Block3 -->
						<div class="block3 p-b-30">
						<?php
						include("about.php");
						?>
						</div>
						<div style="color: white;" class="w-size25">
							<!-- Button -->
							<a href="AddText.html" class="btn btn-dark btn-sm">
								Create New
							</a>
							<a href="EditeText.html" class="btn btn-dark btn-sm ">
								Edit
							</a>
							<a href="#"  class="btn btn-danger btn-sm m-t-3">
								Delete
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<?php include("footer.html");?>

	</body>
</html>

