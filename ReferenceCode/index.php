
<?php
       $pageTitle='Home';
		include 'includes/header.php';
		include 'includes/nav.php';
		include 'Controller/text.php';
	?>
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<?php

			  $images = array(array('id' => 1,'name'=> 'banner-01.jpg') 
			  ,array('id' => 2,'name'=> 'banner-031.jpg'),
			  array('id' => 3,'name'=> 'banner-02.jpg'));

			  foreach ($images as  $img) {
				  # code...
	
			?>
				<div class="item-slick1 item1-slick1" style="background-image: url(images/<?php echo $img['name']?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
			
						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							New arrivals
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="show-image.php?id=<?php echo $img['id'] ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Show
							</a>
						</div>
					</div>
				</div>
				<?php }?>

		
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
						<?php echo $text;?>
					</div>
					<div style="color: white;" class="w-size25">
						<!-- Button -->
						<a href="add-text.php" class="btn btn-dark btn-sm">
							Create New
						</a>
						<a href="edit-text.php" class="btn btn-dark btn-sm ">
							Edit
						</a>
						<a href="Controller/delete-text.php
						"  class="btn btn-danger btn-sm m-t-3">
							Delete
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php 
	include 'includes/footer.php';
	include 'includes/scripts.php';
?>

</body>
</html>
