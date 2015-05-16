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

	<?php require_once('includes/footer.php');?>

</body>
</html>