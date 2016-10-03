<!-- Flushing Container with Header and Schedule -->
<div class="container main-container bg-block hidden-xs" id="<?=substr($page_jump_link[$delta], 1)?>"> 
	<!--|____________| -->
	<div class="row">
		<div class="col-xs-12 text-center">
			<div class="block-text-border small-block-width">
				<a href="#"><h1><?= $school_names['zh-hans'][$delta] ?></h1></a>
			</div>	
			<div class="block-text-border big-block-width">
				<a href="#"><h1><?= $one_line_addresses[$delta] ?></h1></a>
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
				<!-- Morning rows time slots-->
				<?php 
				//Create var use controller(if state)to set content in template
				//pug in the content into table
				$class = array();
				$content = "&nbsp;";
				if($row >= 2){
					$class[] = "afternoon";
				}else{
					$class[] = "morning";
				}
				switch ($timeslots[$count][$row]) {
					case 'T':
						$content = $times[$row];
						break;
					case 'B':
						$class[] = "none";
						break;
				}
				?>
				<td class="<?=implode(" ", $class) ?>">
					<?=$content?>
				</td>

			<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</div>
</div>