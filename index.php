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
	
	<!-- **************************************************************************************************** -->	
	<!-- Desktop main Content of homepage -->

	<div class="container homepage-top hidden-xs"> 
		<!--|____________| -->
		<div class="row">

			<!-- Desktop display image -->
			<div class="col-xs-12 text-center hidden-xs">
				<?php if($language == "en"): ?> 
					<img class="img-responsive full-width" src="images/HomePage_Img_Folder/mainPagePicENG.jpg" alt="" />
				<?php elseif($language == "zh-hans") : ?>
				    <img class="img-responsive full-width" src="images/HomePage_Img_Folder/mainPagePicCHI.jpg" alt="" />
				<?php endif; ?>
			</div>
			<div class="col-xs-12 text-center homepage-links">
			<!-- Block links -->
				<div class="row homepage-links hidden-xs">
					<div class="col-xs-10 col-xs-offset-1">
						<!-- Use PHP to loop through an array to create link block images -->
						<?php for($count = 0; $count < count($box_images); $count++): ?>
		          			<div class="col-xs-3 block-link">
		          				<a href="#" class="">
		          					<img class="img-responsive" src="<?=$box_images[$count] ?>" alt="">
		          					<h3 class="box-text box-text"><?=$boxes_links[$language][$count]?></h3>
		          				</a>
		          			</div>
		        		<?php endfor; ?>
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
							<?php for($count = 0; $count < 3; $count++): ?>
			          			<div class="teaser-block">
			          				<a href="#">
			          					<!-- Character space ~62 CHI -->
			          					<!-- Character space ~104 ENG -->
			          					<h4 class="<?=$test_teaser['colors'][$count]?>"><?=$test_teaser[$language][$count]?></h4>
			          				</a>
			          			</div>
			        		<?php endfor; ?>
						</div>
					</div>
				</div>

				<div class="col-xs-8">
					<div class="row homepage-image-row">
						<div class="col-xs-12">
							<a href="#"> <img src="images/HomePage_Img_Folder/mainPagePicSmall1.png" alt=""> </a><a href="#"> <img src="images/HomePage_Img_Folder/mainPagePicSmall2.png" alt=""> </a>
						</div>
					</div>
					<div class="row homepage-image-row">
						<div class="col-xs-12">
							<a href="#"> <img src="images/HomePage_Img_Folder/mainPagePicSmall3.png" alt=""> </a><a href="#"> <img src="images/HomePage_Img_Folder/mainPagePicSmall4.png" alt=""> </a>
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

	<!-- **************************************************************************************************** -->	
	<!-- Mobile main Content of homepage -->

	<!-- Mobile main title text -->
	<div class="container visible-xs hidden-sm hidden-md hidden-lg">
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-12 text-center mobile-homepage-title">
				<?php if($language == "en"): ?> 
					<?=TITLE_MOBILE_EN?>
				<?php elseif($language == "zh-hans") : ?>
				    <?=TITLE_MOBILE?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	</div>

	<!-- Mobile homepage image -->
	<div class="container visible-xs hidden-sm hidden-md hidden-lg">
		<!--|____________| -->
		<div class="row">
			<!-- Mobile display image -->
			<div class="col-xs-12 mobile-homepage-image">
				<img class="img-responsive full-width" src="images/mHomepage_Img_Folder/mFrontPageImg.jpg" alt="" />
			</div>
		</div>
	</div>

	<!-- Mobile info pages -->
	<?php for($count = 0; $count < 4; $count++): ?>
		<div class="mobile-home-info-page-wrapper visible-xs hidden-sm hidden-md hidden-lg">
			<div class="container">
				<!--|____________| -->
				<div class="row">
					<div class="col-xs-12 text-center mobile-home-info-registration-text"><h1 class="<?=$moblie_homepage_info['page-style']['colors'][$count]?> mobile-info-title"><?=$moblie_homepage_info['title'][$language][$count]?></h1></div>
					<div class="col-xs-12 text-center mobile-home-info-registration-text"><h3 class="<?=$moblie_homepage_info['page-style']['colors'][$count]?>"><?=$moblie_homepage_info['top'][$language][$count]?></h3></div>
					<div class="col-xs-12 text-center mobile-home-info-registration-mid-text"><h3 class="<?=$moblie_homepage_info['page-style']['colors'][$count]?>"><?=$moblie_homepage_info['mid'][$language][$count]?></h3></div>
					<div class="col-xs-12 text-center mobile-home-info-registration-text">
						<h4 class="<?=$moblie_homepage_info['page-style']['colors'][$count]?>"><?=$moblie_homepage_info['bot'][$language][$count]?><br/></h4>
						<h4 class="<?=$moblie_homepage_info['page-style']['colors'][$count]?>"><?=$moblie_homepage_info['end'][$language][$count]?></h4>
						<a href="#" class=""><img class="img-responsive mobile-home-info-image" src="<?=$moblie_homepage_info['page-style']['images'][$count]?>"></a>
					 </div>
				</div>
			</div>
		</div>
	<?php endfor; ?>

	<!-- Mobile New page -->
	<!-- Character space ~62 CHI -->
<!-- 
	<div class="mobile-home-info-page-wrapper visible-xs hidden-sm hidden-md hidden-lg">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center mobile-news-page">
					<h1 class="mobile-info-title "><?=$moblie_homepage_info['title'][$language][4]?></h1>
					<?php for($count = 0; $count < 3; $count++): ?>
	          			<div class="teaser-block-mobile">
	          				<a href="#">
	          					
	          					<h4 class="<?=$test_teaser['colors'][$count]?>"><?=$test_teaser[$language][$count]?></h4>
	          				</a>
	          			</div>
	        		<?php endfor; ?>
	        	</div>
			</div>
		</div>
	</div>
-->

	<!-- Mobile bottom images page -->
	<div class="container mobile-home-image-page-wrapper visible-xs hidden-sm hidden-md hidden-lg">
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-12 mobile-image"><img class="img-responsive full-width" src="images/mHomepage_Img_Folder/mImage_one.jpg" alt="" /></div>
			<div class="col-xs-12 mobile-image"><img class="img-responsive full-width" src="images/mHomepage_Img_Folder/mImage_two.jpg" alt="" /></div>
		</div>
	</div>
	<div class="container mobile-home-image-page-wrapper visible-xs hidden-sm hidden-md hidden-lg">
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-12 mobile-image"><img class="img-responsive full-width" src="images/mHomepage_Img_Folder/mImage_three.jpg" alt="" /></div>
			<div class="col-xs-12 mobile-image"><img class="img-responsive full-width" src="images/mHomepage_Img_Folder/mImage_four.jpg" alt="" /></div>
		</div>
	</div>



	<!-- **************************************************************************************************** -->	
	<!-- Footer -->
	<?php require_once('includes/footer.php');?>

</body>
</html>