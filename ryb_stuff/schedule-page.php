<?php
	require_once('includes/common.inc');
	require_once('content/schedule.inc');
	require_once('content/links.inc');
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/schedule.php');?>

<body>
	<?php require_once('includes/header.php');?>
	<!-- **************************************************************************************************** -->	
	<!-- Schedule Desktop Page -->

	<div class="container detail-page-header hidden-xs">
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-12 text-center hidden-xs">
				<?php if($language == "en"): ?> 
					<?=TITLE_SCHEDULE_EN?>
				<?php elseif($language == "zh-hans") : ?>
				    <?=TITLE_SCHEDULE?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	</div>

	<div class="container bg-block hidden-xs"> 
		<!--|____________| -->
		<div class="row">
			<?php for($count = 0; $count < 3; $count++): ?>
				<div class="col-xs-4 text-center">
					<div class="block-text-border head-block-width">
						<a href="<?= $page_jump_link[$count] ?>"><h1><?= $school_names['zh-hans'][$count] ?></h1></a>
					</div>	
					<div class="block-text-border subway-block">
						<a href="<?= $page_jump_link[$count] ?>"> <img src="/images/schedule_img_folder/<?=$page_icon[$count] ?>" alt=""> </a>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>

	<!-- .................................................................................................... -->
	<?php foreach ($schedules as $delta => $schedule) {
		$timeslots = $schedule;
		include "schedule-table.php";
		# code...
	};
	?>
	
	<?php require_once('includes/footer.php');?>
</body>
</html>