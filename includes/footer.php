<?php
require_once('content/footer.inc'); 
?>

<footer class="footer-wrap">
		
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<!-- |________________| -->
				<?=TITLE_MARKUP;?>
			</div>
		</div>

		<div class="row row-big">
			<div class="col-xs-4">
			<!-- |___| |___| |___| -->
				<div class="row">	
					<div class="col-xs-6">
					<!-- |_||_| |__| |__| -->
						<?php foreach($addresses as $count => $address): ?>
							<?php if($count == 3):?>
								<div class="col-xs-6">
								<!-- |_||_| |__| |__| -->
							<?php endif;?>

							<a href="/<?=$location_links[$count]?>" class="location">
								<h6 class="ryb-black"><?=$location_titles[$language][$count]?></h6>
								<p><?=$address?></p>
							</a>

							<?php if($count == 2):?>
								</div>
							<?php endif;?>
						<?php endforeach ?>
					</div>	
				</div>
			</div>

			<div class="col-xs-4">	
				<div class="row">
					<div class="col-xs-6">
						<ul>
							<li><a href="#" class="h5">學校簡介</a></li>
							<li><a href="#" class="h5">教師招聘</a></li>
							<li><a href="#" class="h5">教育目標</a></li>
							<li><a href="#" class="h5">學校新聞</a></li>
							<li><a href="#" class="h5">我們的老師</a></li>
							<li><a href="#" class="h5">學生登錄</a></li>
						</ul>
					</div>
					<div class="col-xs-6">
						<ul>
							<li><a href="#" class="h5">課程註冊</a></li>
							<li><a href="#" class="h5">聯絡網頁</a></li>
							<li><a href="#" class="h5">參觀學校</a></li>
							<li><a href="#" class="h5">藝術畫廊</a></li>
						</ul>
					</div>					
				</div>
			</div>
			<div class="col-xs-4">
				<!-- |__| |__| |__| -->
			     <a class="logo" href="#">
			     	<img src="images/Home Page Img Folder/logoBig.png" alt="logo" />
			     </a>
			</div>
		</div>
	</div>

</footer>