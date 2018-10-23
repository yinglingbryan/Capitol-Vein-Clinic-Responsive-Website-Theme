	  	
		<?php
			$includeFooterHeaderbar = $c->getAttribute('include_footer_headerbar');
			if( $includeFooterHeaderbar ){ ?>
				<div class="section headerbar">
					<div class="content">
						<?php
							$a = new Area('Footer Header Bar Content');
							$a->display();
						?>
					</div>
				</div>
			<?php }	?>
		
		<?php
			$includeFooterMedia = $c->getAttribute('include_footer_media');
			if( $includeFooterMedia ){
				?>
				<div class="section media">
					<div class="content">
						<div class="col1 scroll-show s-fade-in-from-bottom" data-delay="100">
							<?php
								$a = new Area('Footer Media Content 1');
								$a->display();
							?>
							
							<?php /*
							<h2>Varicose Vein Treatment Options</h2>
					
							<img src="/application/themes/mycvl/css/images/photo-video-preview.jpg">
					
							<p>
								See <a href="#">our YouTube video</a> that will help you learn more about your varicose veintreatment options. <a href="#">WATCH THE VIDEO »</a>
							</p>
							*/ ?>
						</div>
				
						<div class="col2 scroll-show s-fade-in-from-bottom" data-delay="200">
							<?php
								$a = new Area('Footer Media Content 2');
								$a->display();
							?>
							
							<?php /*
							<h2>Varicose Veins</h2>
					
							<img src="/application/themes/mycvl/css/images/photo-before-after-temp.png">
					
							<p>
								Caption here lorem ipsum <br />
								<a href="#">SEE BEFORE & AFTER GALLERY »</a>
							</p>
							*/ ?>
						</div>
				
						<div class="clear"></div>
					</div>
				</div>
				<?php 
			}
		?>
		
		<?php 
			$includeFooterPress = $c->getAttribute('include_footer_press');
			if( $includeFooterPress ){
				?>
				<div class="section press">
					<div class="content">
						<div class="col1 scroll-show s-fade-in-from-bottom" data-delay="100">
							
							<?php
								$a = new Area('Footer Press Content 1');
								$a->display();
							?>
																					
							<?php /*
							<h2>Testimonials</h2>
							<a class="view-all" href="#">View All »</a>
							*/ ?>
						</div>

						<div class="col2 scroll-show s-fade-in-from-bottom" data-delay="200">
							<?php
								$a = new GlobalArea('Footer Press Content 2');
								$a->display();
							?>
							
							<?php /*
							<h2>News & Blog</h2>
							<a class="view-all" href="#">View All »</a>

							<a class="post-photo">
								<img src="<?= $view->getThemePath() ?>/css/images/photo-blog.jpg" />
							</a>

							<h3><a href="#">Don't Forget Varicose Veins as a Cause of Leg Pain</a></h3>

							<p>
								Varicose veins are common cause of obscure leg pain, and it’s quite interesting 
								to learn how often we see symptoms improve once ....  <a href="#">MORE »</a>
							</p>
							*/ ?>
							
						</div>

						<div class="clear"></div>
					</div>
				</div>
				<?php 
			}
		?>
		
		<?php 
			$includeFooterCallouts = $c->getAttribute('include_footer_callouts');
			if( $includeFooterCallouts ){
				?>
				<div class="section callouts">
					<div class="content">
						
						<?php if( $c->isEditMode() ){ ?>
						<div class="col1">
							<div>
						<?php } else { ?>
						<div class="col1 scroll-show s-fade-in-from-bottom" data-delay="0">
							<div class="flexslider basic-carousel">
						<?php } ?>
							
								<?php
									$a = new Area('Footer Callout 1');
									$a->display();
								?>
								
								<?php /*
								<ul class="slides">
									<li>
										<h3>Years of Expertise</h3>
										<img src="/application/themes/mycvl/css/images/icon-stetho.svg">

										<p>Between Drs. McNeill and Rosenberg, have several years of experience. CVL has been in business for 17 years.</p>
									</li>
									<li>
										<h3>Years of Expertise</h3>
										<img src="/application/themes/mycvl/css/images/icon-insurance.svg">

										<p>Between Drs. McNeill and Rosenberg, have several years of experience. CVL has been in business for 17 years.</p>
									</li>
								</ul>
								*/ ?>
							</div>
						</div>
						
						<?php if( $c->isEditMode() ){ ?>
						<div class="col2">
						<?php } else { ?>
						<div class="col2 scroll-show s-fade-in-from-bottom" data-delay="100">
						<?php } ?>
						
							<?php
								$a = new Area('Footer Callout 2');
								$a->display();
							?>
							
							<?php /*
							<h3>Our Results areOur Reputation!</h3>
							<a href=="#">view our photo gallery  »</a>
							<img src="/application/themes/mycvl/css/images/photo-gallery-icon.jpg">
							*/ ?>
						</div>
                
						<?php if( $c->isEditMode() ){ ?>
						<div class="col3">
						<?php } else { ?>
						<div class="col3 scroll-show s-fade-in-from-bottom" data-delay="200">
						<?php } ?>
						
							<?php
								$a = new Area('Footer Callout 3');
								$a->display();
							?>
							
							<?php /*
							<h3>Quick Links</h3>
							<ul>
								<li><a href="#">VenaSeal »</a></li>
								<li><a href="#">VNUS Closure »</a></li>
								<li><a href="#">ClariVein »</a></li>
								<li><a href="#">VenaSeal »</a></li>
								<li><a href="#">VenaSeal »</a></li>
								<li><a href="#">VenaSeal »</a></li>
								<li><a href="#">VenaSeal »</a></li>
								<li><a href="#">VenaSeal »</a></li>
							</ul>
							*/ ?>
						</div>
                	
						<?php if( $c->isEditMode() ){ ?>
						<div class="col4">
						<?php } else { ?>
						<div class="col4 scroll-show s-fade-in-from-bottom" data-delay="300">
						<?php } ?>
						
							<?php
								$a = new Area('Footer Callout 4');
								$a->display();
							?>
							
							<?php /*
							<h3>Insurance Plans</h3>
							<img src="/application/themes/mycvl/css/images/icon-insurance.svg">
                
							<p>
								Capitol Vein & Laser Centers participates with all major insurances including Medicare and Medicaid plans. 
								Varicoseveins are a progressive medical condition that is covered by most insurance plans.For more information, 
								call <a href="tel:866-695-8346">(866) 695-8346</a>.
							</p>
							*/ ?>
						</div>
                
						<div class="clear"></div>
					</div>
				</div>
				<?php
			}
		?>
				
		<?php 
			$includeFooterLocations = $c->getAttribute('include_footer_locations');
			if( $includeFooterLocations ){
				?>
				<div class="section locations">
					<div class="content">
						<?php
							$a = new GlobalArea('Footer Locations');
							$a->display();
						?>
					</div>
				</div>
				<?php 
			}
		?>
				
		<div class="footer">
			<div class="content">
				<div class="col1">
					<?php
						$a = new GlobalArea('Footer Column 1');
						$a->display();
					?>
					
					<?php /*
					<a href="#" class="top">Conditions We Treat</a>
					<a href="#">Varicose Veins</a>
					<a href="#">Spider Veins</a>
					<a href="#">Hands, Face & Breast Veins</a>
					<a href="#">Blood Clots</a>
					<a href="#">Cosmetic Med-Spa</a>
					*/ ?>
				</div>
				
				<div class="col2">
					<?php
						$a = new GlobalArea('Footer Column 2');
						$a->display();
					?>
					
					<?php /*
					<a href="#" class="top">Our Practice</a>
					<a href="#">Dr. McNeill</a>
					<a href="#">Dr. Rosenberg</a>
					<a href="#">Our Staff</a>
					<a href="#">Testimonials</a>
					*/ ?>
				</div>
				
				<div class="col3">
					<?php
						$a = new GlobalArea('Footer Column 3');
						$a->display();
					?>
					
					<?php /*
					<a href="#" class="top">Locations</a>
					<a href="#">Bethesda, MD</a>
					<a href="#">Frederick, MD</a>
					<a href="#">Hagerstown, MD</a>
					<a href="#">Ashburn, VA</a>
					<a href="#">Charles Town, WV</a>
					<a href="#">Winchester, VA</a>
					*/ ?>
				</div>
				
				<div class="col4">
					<?php
						$a = new GlobalArea('Footer Column 4');
						$a->display();
					?>
					
					<?php /*
					<a href="#">Bethesda, MD</a>
					<a href="#">Frederick, MD</a>
					<a href="#">Hagerstown, MD</a>
					<a href="#">Ashburn, VA</a>
					<a href="#">Charles Town, WV</a>
					<a href="#">Winchester, VA</a>
					*/ ?>
				</div>
				
				<div class="col5">
					<div class="social">
						<?php
							$a = new GlobalArea('Footer Content 3');
							$a->display();
							// <a class="facebook" href="#" target="_blank"></a>
							// <a class="instagram" href="#" target="_blank"></a>
							// <a class="youtube" href="#" target="_blank"></a>
						?>
					</div>
					
					<div class="copyright">
						<?php
							$a = new GlobalArea('Footer Content 1');
							$a->display();
							// <p>© 2017.  Capital Vein & Laser Centers.  All Rights Reserved.</p>
						?>
					</div>
					
					<div class="sponsors">
						<?php
							$a = new GlobalArea('Footer Content 2');
							$a->display();
							// <a href="#" target="_blank"><img src="/application/themes/mycvl/css/images/logo-acronym.png" /></a>
							// <a href="#" target="_blank"><img src="/application/themes/mycvl/css/images/logo-iac.png" /></a>
							// <a href="#" target="_blank" class="last"><img src="/application/themes/mycvl/css/images/logo-american.png" /></a>
						?>
					</div>
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
		
		<?php 
			$excludeBackToTopButton = $c->getAttribute('exclude_back_to_top_button');
			if( !$excludeBackToTopButton ){
				?>
				<a class="back-to-top"></a>
				<?php 
			} 
		?>
		
		<?php 
		$excludePopupForm = $c->getAttribute('exclude_popup_form');
		if( !$excludePopupForm ){ 
			?>
			<div class="popup-form">
				<?php
					$a = new GlobalArea('Popup Form');
					$a->display();
				?>
			</div>
		<?php } ?>
	</div>
	<!-- C5 Wrapper END -->
	
	<link rel="stylesheet" href="<?= $view->getThemePath() ?>/js/flexslider/flexslider.css" type="text/css">
	<script src="<?= $view->getThemePath() ?>/js/flexslider/jquery.flexslider.js"></script>
	<script src="<?= $view->getThemePath() ?>/js/jquery.waypoints.min.js"></script>
	<script src="<?= $view->getThemePath() ?>/js/scripts.js"></script>
	
	<?php Loader::element('footer_required') ?>
</body>
</html>