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

	<div class="container main-container"> 
	<!-- Main Schedule Desktop Content -->
	<!--|____________| -->
		<table class="schedule table" id="flushing-schedule-table">
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
					<?php if($row < 2): ?> 
						<td class="morning"><?=$time_slots[$row]?></th>
					<?php endif; ?>
					<?php if($row >= 2): ?> 
						<td class="afternoon"><?=$time_slots[$row]?></th>
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