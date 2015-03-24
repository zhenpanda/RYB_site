<?php
	require_once('includes/common.inc');
	require_once('content/index.inc');
?>

<!DOCTYPE html>
<html lang="en">
<!-- load head -->
<?php require_once('includes/head.php');?>

<body>
	<!-- Header Nav Bar -->
	<?php require_once('includes/header.php');?>
	
	<!-- Main Content of homepage -->
	<div class="container homepage-top"> 
		<!--|____________| -->
		<div class="row">

			<div class="col-xs-12 text-center hidden-xs"><img class="img-responsive full-width" src="images/Home Page Img Folder/mainPagePic.jpg" alt="" /> </div>
			<!-- Main Page Image -->
			<div class="col-xs-12 text-center homepage-links">

			<!-- Block links -->
				<div class="row homepage-links">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="col-xs-3 block-link ryb-bg-red">
							<a href="">
								<img src="images/Home Page Img Folder/missionBlockImg.png">
								<div class="h2">教育目標</div>
							</a>
						</div>
		        	</div>
				</div>			 

        	</div>
		</div>
	</div>

	<div class="homepage-middle-wrapper hidden-xs">
		<!-- middle page wrapper for container -->
		<div class="container homepage-middle">
			
			<div class="row">
			<!-- middle row -->			
				<div class="col-xs-12">
					<div class="h1 underline-title"><?=$news[$language][0]?></div>
				</div>

				<div class="col-xs-4">
				<!-- Teaser Blocks -->	
					<div class="row">
						<div class="col-xs-12">
							<?php for($count = 0; $count < 5; $count++): ?>
			          			<div class="teaser-block"><a href="#"></a></div>
			        		<?php endfor; ?>
						</div>
					</div>
				</div>

				<div class="col-xs-8">
					<div class="row homepage-image-row">
						<div class="col-xs-12">
							<a href="#"> <img src="images/Home Page Img Folder/mainPagePicSmall1.png" alt=""> </a><a href="#"> <img src="images/Home Page Img Folder/mainPagePicSmall2.png" alt=""> </a>
						</div>
					</div>
					<div class="row homepage-image-row">
						<div class="col-xs-12">
							<a href="#"> <img src="images/Home Page Img Folder/mainPagePicSmall3.png" alt=""> </a><a href="#"> <img src="images/Home Page Img Folder/mainPagePicSmall4.png" alt=""> </a>
						</div>
					</div>
				</div>

			</div>		
		</div>
	</div>

	<div class="container homepage-bottom hidden-xs">
		<div class="row">
		<!-- Bottom Page Area-->
			<div class="col-xs-12">		
				<!-- Bottom Page Title -->
				<div class="h1 underline-title underline-title-bottom"><?=$bottom_title[$language][0]?></div>
			</div>
		</div>

		<div class="row">
			<?php for($count = 0; $count < 3; $count++): ?>
				<div class="col-xs-4 text-center">
					<a href="#" class="circle-image-link">
						<img src= "<?=$bottom_images[$count] ?>" alt="">
						<div class="h1"> <?=$bottom_text[$language][$count]?> </div>
					</a>
				</div>
			<?php endfor; ?>
		</div>
	</div>

	<!-- Footer -->
	<?php require_once('includes/footer.php');?>

</body>
</html>