<?php
	require_once('includes/common.inc');
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/head.php');?>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">


<body>
	<?php require_once('includes/header.php');?>

	<div class="container main-container"> 
	<!-- Main content goes here -->
		<!-- link to another section using # anchor link-->
		<a href="#schedule-table" style="margin-bottom: 400px;display:block;">ClickThis</a>
		<!--using link to the id tag -->
		<table class="schedule table" id="schedule-table">
			<tr>
				<th>Monday</th>
				<th>Tueday</th>
				<th>Wedesday</th>
				<th>Thursday</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>9:30AM-11:00AM</td>
				<td class="afternoon">11:00AM-12:30PM</td>
			</tr>
			<tr>
				<td class="blank"></td>
				<td class="blank"></td>
				<td>9:30AM-11:00AM</td>
				<td class="afternoon">11:00AM-12:30PM</td>
			</tr>
		</table>
	</div>
	
	<?php require_once('includes/footer.php');?>
</body>
</html>