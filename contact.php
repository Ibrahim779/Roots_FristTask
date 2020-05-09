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
      <?php include("header.php");?>

	<!-- content page -->
		<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-color: rgb(142, 197, 179)">
			<h2 class="l-text2 t-center">
				Personal Analysis
			</h2>
		</section>
	<section class="bgwhite p-t-66 p-b-60">
			
		<div class="container">
			<div class="row">

				<div class="col-md-6 p-b-30">
					<form class="leave-comment"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
						<div class="sec-title p-b-52">
							<h5 class="m-text4 t-center">
								Your Personal Test
							</h5>
						</div>
							<label class="m-text20 p-b-10 p-t-5"  for="inputState">Your Favorite Color</label>
					      	<div class="of-hidden size15 m-b-20">
						
							<select name="color" id="inputState" class="form-control">
								<option selected >Choose...</option>
								<option>Red</option>
								<option>Blue</option>
								<option>Yellow</option>
								<option>White</option>
								<option>Black</option>
							</select>
					     	</div>
					 <label class="m-text20 p-b-10 p-t-5" for="inputState">Your Favorite Pleace</label>
				      	<div class="of-hidden size15 m-b-20">
						
						<select name="place" id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option>The Garden</option>
							<option>Your Room</option>
							<option>Room other than you</option>
						</select>
					</div>
					<label class="m-text20 p-b-10 p-t-5" for="inputState">who do you Love more?</label>
				<div class="form-check size15 m-b-5">
					<input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios1"   value="option1" checked>
					<label class="form-check-label" for="exampleRadios1" >
						Your Father
					</label>
				</div>
				<div class="form-check size15 m-b-5">
					<input class="form-check-input" type="radio" name="exampleRadios"  id="exampleRadios2" value="option2">
					<label class="form-check-label" for="exampleRadios2" >
						Your Mother
					</label>
				</div>
						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Send
							</button>
						</div>
					</form>
				</div>
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="col-sm-10 col-md-20 p-b-30 m-l-r-auto">
								<div class="sec-title p-b-52">
									<h5 class="m-text4 t-center">
										RESULT
									</h5>
								</div>
							<!-- Block3 -->
							<div class="block3 m-t-50">
						
							<h5> RESULT</h5>
							<?php include("php/test_result.php") ;?>
					 	<h3 class="m-t-20">Thank you</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include("footer.html");?>




</body>
</html>
