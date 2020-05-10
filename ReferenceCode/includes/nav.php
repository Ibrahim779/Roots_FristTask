<?php
	 session_start();
	 if (!isset($_SESSION['name'])) {
		 header('location:login.php');
	 };
	?>
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
								<a href="personal-analysis.php">Personal Analysis</a>
							</li>
						</ul>
					</nav>
				</div>
				
				<div class="header-icons">
					
					Welcome, <?php
					 echo $_SESSION['name']?>
					<a class="btn btn-danger btn-sm m-l-10" href="Controller/logout.php">Logout</a>

			</div>
		</div>
	</header>