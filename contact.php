<?php
	require_once('includes/common.inc');
	require_once('content/contact.inc');
?>

<!DOCTYPE html>
<html lang="en">
<!-- load head -->

<?php require_once('includes/head.php');?>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">

<body class="contact-page">
	<!-- Header Nav Bar -->
	<?php require_once('includes/header.php');?>

	<!-- **************************************************************************************************** -->	
	<!-- Contact Desktop Page -->

	<div class="container detail-page-header hidden-xs">
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-12 text-center hidden-xs">
				<?php if($language == "en"): ?> 
					<?=TITLE_CONTACT_EN?>
				<?php elseif($language == "zh-hans") : ?>
				    <?=TITLE_CONTACT?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	</div>

	<div class="container postit-block hidden-xs">
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-3 text-center hidden-xs"></div>
			<div class="col-xs-6 postit-image post-it-big hidden-xs">
				<img class="img-responsive img-center" src="/images/Contact_Img_folder/<?=$post_it_color[0]?>" alt="">
				<a href="#"><h1 class="postit-text hidden-xs"><?=$school_names[0]?></h1></a>
				<a href="#"><h2 class="postit-text hidden-xs"><?=$school_address[0]?></h2></a>
			</div>
			<div class="col-xs-3 text-center hidden-xs"></div>
		</div>
	</div>
	</div>

	<div class="container postit-block hidden-xs bigPost">
		<!--|____________| -->
		<div class="row">
			<?php for($count = 1; $count < 5; $count++): ?>
				<div class="col-xs-3 postit-image hidden-xs">
					<img class="img-responsive img-center" src="/images/Contact_Img_folder/<?=$post_it_color[$count]?>" alt="">
					<a href="#"><h3 class="postit-text poitit-text-block"><?=$school_names[$count]?></h3></a>
					<a href="#"><h4 class="postit-text poitit-text-block"><?=$school_address[$count]?></h4></a>
				</div>
			<?php endfor; ?>
			</div>
		</div>
	</div>
	</div>

	<?php require_once('includes/footer.php');?>

</body>
</html>