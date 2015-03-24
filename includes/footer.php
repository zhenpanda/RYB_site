<?php
require_once('content/footer.inc'); 
?>

<div class="hidden-xs">
<!-- Hidden on mobile display -->
	<footer class="footer-wrap">
		
		<!-- Extra Small Footer-->
		<div class="visible-xs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					<!-- |________________| -->
						<?php if($language == 'zh-hans'):?>
							<?=TITLE_MARKUP;?>
						<?php elseif($language == 'en'):?>
							<?=TITLE_MARKUP_EN;?>
						<?php endif;?>	
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Disktop Footer -->
		<div class="hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					<!-- |________________| -->
						<?php if($language == 'zh-hans'):?>
							<?=TITLE_MARKUP;?>
						<?php elseif($language == 'en'):?>
							<?=TITLE_MARKUP_EN;?>
						<?php endif;?>
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
									<?php for($count = 0; $count < count($page_links[$language]); $count++): ?>
										<?php if($count ==5):?>
											<div class="col-xs-6">
												<ul>
										<?php endif;?>
										<!-- Loop though all the links from php array, use if statement to divide into two different col -->
										<li>
											<a href="#" class="h3"><?=$page_links[$language][$count]?></a>
										</li>
										<?php if($count == 4):?>
											</ul>
											</div>
										<?php endif;?>
									<?php endfor; ?>
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
		</div>
	</footer>
</div>