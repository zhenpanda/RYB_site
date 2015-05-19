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

<body>
	<!-- Header Nav Bar -->
	<?php require_once('includes/header.php');?>

	<!-- **************************************************************************************************** -->	
	<!-- Registration main Content of homepage -->

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
			<div class="col-xs-6 postit-yellow hidden-xs">
				<img class="img-responsive img-center" src="/images/Contact_Img_folder/postItBig.png" alt="">
				<h1 class="postit-text">法拉盛地址:</h1>
				<h2 class="postit-text">36-26 Main St. 2X<br>Flushing, NY, 11354<br><br>联系电话:<br>718-886-4008<br>917-822-4139<br>917-417-8014</h2>
			</div>
			<div class="col-xs-3 text-center hidden-xs"></div>
		</div>
	</div>
	</div>

	<div class="container postit-block hidden-xs">
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-4 text-center hidden-xs"></div>
		</div>
	</div>
	</div>

	<?php require_once('includes/footer.php');?>

</body>
</html>