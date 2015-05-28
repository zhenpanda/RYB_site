<?php
	require_once('includes/common.inc');
	require_once('content/registration.inc');
	require_once('content/links.inc');
?>

<!DOCTYPE html>
<html lang="en">
<!-- load head -->

<?php require_once('includes/registration.php');?>

<body class= "registration-page">
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
			<div class="col-xs-12">
				<?php for($count = 0; $count < 5; $count++): ?>
				<table class="registration-block">
					<tr>
						<?php for($block =0; $block < 4; $block++): ?>
							<td class="text-center">
							<?php if($block == 0): ?> 
								<img class="img-responsive registration-button" src="/images/RegistrationPage_Img_Folder/<?=$registration_button[$count]?>" alt="">
		          			<?php endif; ?>
							<?php if($block == 1): ?> 
								<img class="img-responsive registration-button img-block" src="/images/RegistrationPage_Img_Folder/<?=$registration_icon[$count]?>" alt="">
		          			<?php endif; ?>
							<?php if($block == 2): ?> 
								<a href="#" class=""><p class="<?=$registration_color[$count]?> registration-text text-block"><?=$registration_text[$language][$count]?></p></a>
		          			<?php endif; ?>
							<?php if($block == 3): ?> 
								<a href="#" class=""><img class="img-responsive registration-button" src="images/RegistrationPage_Img_Folder/<?=$registration_flat[$count]?>" alt=""></a>
		          			<?php endif; ?>
							</td>
						<?php endfor; ?>
					</tr>
				</table>
				<?php endfor; ?>
			</div>
		</div>

	</div>

	<?php require_once('includes/footer.php');?>

</body>
</html>