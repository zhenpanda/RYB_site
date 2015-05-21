<?php
	require_once('includes/common.inc');
	require_once('content/registration.inc');
?>

<!DOCTYPE html>
<html lang="en">
<!-- load head -->

<?php require_once('includes/head.php');?>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">


<body>
	<!-- Header Nav Bar -->
	<?php require_once('includes/header.php');?>
	
	<!-- **************************************************************************************************** -->	
	<!-- Registration Desktop Page -->

	<div class="container detail-page-header hidden-xs">
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-12 text-center hidden-xs">
				<?php if($language == "en"): ?> 
					<?=TITLE_REGISTRATION_EN?>
				<?php elseif($language == "zh-hans") : ?>
				    <?=TITLE_REGISTRATION?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	</div>

	<div class="container hidden-xs">
		<!--|____________| -->
		<div class="row">
		<!-- Use PHP to loop through an array to create link block images -->
			<?php for($count = 0; $count < 5; $count++): ?>
				<div class="col-xs-12 registration-block">
					<div class="row">
					<?php for($block =0; $block < 4; $block++): ?>
						<div class="col-xs-3 text-center">
							<!-- Check and put the correct content for the block -->
							<?php if($block == 0): ?> 
								<img class="img-responsive registration-button" src="/images/RegistrationPage_Img_Folder/<?=$registration_button[$count]?>" alt="">
		          			<?php endif; ?>
							<?php if($block == 1): ?> 
								<img class="img-responsive registration-button img-block" src="/images/RegistrationPage_Img_Folder/<?=$registration_icon[$count]?>" alt="">
		          			<?php endif; ?>
							<?php if($block == 2): ?> 
								<img class="img-responsive registration-button registration-link" src="/images/RegistrationPage_Img_Folder/RegText.png" alt="">
								<a href="#" class=""><h5 class="<?=$registration_color[$count]?> registration-text text-block"><?=$registration_text[$language][$count]?></h5></a>
		          			<?php endif; ?>
							<?php if($block == 3): ?> 
								<a href="#" class=""><img class="img-responsive registration-button" src="images/RegistrationPage_Img_Folder/<?=$registration_flat[$count]?>" alt=""></a>
		          			<?php endif; ?>
						</div> 
					<?php endfor; ?>
					</div>
				</div>
			<?php endfor; ?>
		</div>

	</div>

	<?php require_once('includes/footer.php');?>

</body>
</html>