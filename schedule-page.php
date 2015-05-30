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
						<a href="<?= $page_jump_link[$count] ?>"> <img src="/images/Schedule_Img_Folder/<?=$page_icon[$count] ?>" alt=""> </a>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>

	<!-- .................................................................................................... -->
	<!-- Flushing Container with Header and Schedule -->
	<div class="container main-container bg-block hidden-xs" id="flushing-schedule-table"> 
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="block-text-border small-block-width">
					<a href="#"><h1><?= $school_names['zh-hans'][0] ?></h1></a>
				</div>	
				<div class="block-text-border big-block-width">
					<a href="#"><h1><?= $one_line_addresses[0] ?></h1></a>
				</div>
			</div>
		</div>

	<!-- Schedule Table -->
	<!--|____________| -->
		<table class="schedule table">
		<!-- Head level table -->
			<tr>
			<?php for($count = 0; $count < 4; $count++): ?>
				<th><?=$table_header[$language][$count]?></th>
			<?php endfor; ?>
			</tr>
			<!-- Loop to add additional level of table -->
			<?php for($row = 0; $row < 6; $row++): ?>
				<tr>
				<?php for($count = 0; $count < 4; $count++): ?>
					<!-- Use php if statment check to put in correct time slot and check T or blank -->
					<?php if($row == 0 or $row == 1): ?> 
						<!-- Morning rows time slots-->
						<td class="morning">
							<?php if($flushing_time_slot[$count][$row] == 'T'): ?> 
								<?=$time_slots[$row]?>
							<?php endif; ?>
						</th>
					<?php endif; ?>
					<!-- Afternoon rows time slots-->
					<?php if($row >= 2): ?> 
						 <td class="afternoon">
							<?php if($flushing_time_slot[$count][$row] == 'T'): ?>
								<?=$time_slots[$row]?>
							<?php endif; ?>
						</th>
					<?php endif; ?>

				<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
	</div>
	</div>

	<!-- .................................................................................................... -->
	<!-- Chinatown Container with Header and Schedule -->
	<div class="container bg-block hidden-xs" id="chinatown-schedule-table"> 
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="block-text-border small-block-width">
					<a href="#"><h1><?= $school_names['zh-hans'][1] ?></h1></a>
				</div>	
				<div class="block-text-border big-block-width">
					<a href="#"><h1><?= $one_line_addresses[1] ?></h1></a>
				</div>
			</div>
		</div>

	<!-- Schedule Table -->
	<!--|____________| -->
		<table class="schedule table">
		<!-- Head level table -->
			<tr>
			<?php for($count = 0; $count < 4; $count++): ?>
				<th><?=$table_header[$language][$count]?></th>
			<?php endfor; ?>
			</tr>
			<!-- Loop to add additional level of table -->
			<?php for($row = 0; $row < 6; $row++): ?>
				<tr>
				<?php for($count = 0; $count < 4; $count++): ?>
					<!-- Use php if statment check to put in correct time slot and check T or blank -->
					<?php if($row == 0 or $row == 1): ?> 
						<!-- Morning rows time slots-->
						<td class="morning">
							<?php if($chinatown_time_slot[$count][$row] == 'T'): ?> 
								<?=$time_slots[$row]?>
							<?php endif; ?>
						</th>
					<?php endif; ?>
					<!-- Afternoon rows time slots-->
					<?php if($row >= 2): ?> 
						 <td class="afternoon">
							<?php if($chinatown_time_slot[$count][$row] == 'T'): ?>
								<?=$time_slots[$row]?>
							<?php endif; ?>
						</th>
					<?php endif; ?>

				<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
	</div>
	</div>

	<!-- .................................................................................................... -->
	<!-- Brooklyn Container with Header and Schedule -->
	<div class="container bg-block hidden-xs" id="brooklyn-schedule-table"> 
		<!--|____________| -->
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="block-text-border small-block-width">
					<a href="#"><h1><?= $school_names['zh-hans'][2] ?></h1></a>
				</div>	
				<div class="block-text-border big-block-width">
					<a href="#"><h1><?= $one_line_addresses[2] ?></h1></a>
				</div>
			</div>
		</div>

	<!-- Schedule Table -->
	<!--|____________| -->
		<table class="schedule table">
		<!-- Head level table -->
			<tr>
			<?php for($count = 0; $count < 4; $count++): ?>
				<th><?=$table_header[$language][$count]?></th>
			<?php endfor; ?>
			</tr>
			<!-- Loop to add additional level of table -->
			<?php for($row = 0; $row < 6; $row++): ?>
				<tr>
				<?php for($count = 0; $count < 4; $count++): ?>
					<!-- Use php if statment check to put in correct time slot and check T or blank -->
					<?php if($row == 0 or $row == 1): ?> 
						<!-- Morning rows time slots-->
						<td class="morning">
							<?php if($brooklyn_time_slot[$count][$row] == 'T'): ?> 
								<?=$time_slots[$row]?>
							<?php endif; ?>
						</th>
					<?php endif; ?>
					<!-- Afternoon rows time slots-->
					<?php if($row >= 2): ?> 
						 <td class="afternoon">
							<?php if($brooklyn_time_slot[$count][$row] == 'T'): ?>
								<?=$time_slots[$row]?>
							<?php endif; ?>
						</th>
					<?php endif; ?>

				<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
	</div>
	</div>
	
	<?php require_once('includes/footer.php');?>
</body>
</html>