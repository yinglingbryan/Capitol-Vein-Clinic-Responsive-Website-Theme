<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php');
	
	// Featured Image
	$featuredImage = $c->getAttribute('featured_image');
	if( $featuredImage ){
		$featuredImage = $featuredImage->getURL();
	}
	
	if( $featuredImage2 ){
		$featuredImage2 = $featuredImage2->getURL();
	} else {
		$featuredImage2 = $view->getThemePath() . '/css/images/photo-doctors.jpg';
	}
	
	$featuredImage2Mobile = $c->getAttribute('featured_image_2_mobile');
	if( $featuredImage2Mobile ){
		$featuredImage2Mobile = $featuredImage2Mobile->getURL();
	}
?>

	<div class="hero">
		<?php
		    $a = new Area('Hero Content');
			$a->display($c);
		?>
	</div>
	
	<div class="section contact fixed">
		<div class="content">			
			<?php
			    $a = new Area('Contact Content');
				$a->display($c);
			?>
			
			<a href="/contact-us" class="mobile-cta">Schedule an Appointment</a>
		</div>
	</div>
	
	<div class="section story">
		<div class="content scroll-show s-fade-in-from-bottom">
			<?php
			    $a = new Area('Story Content');
				$a->display($c);
			?>
			
			<?php /*
			<p>
				Capitol Vein & Laser Center is the premier vein care practice in the Washington, D.C., Maryland,Virginia and West Virginia regions. Dr. Paul 
				McNeill and Dr. Garth Rosenberg, our board-certifiedphysicians in Peripheral Vascular Surgery, bring an entire career of training and experience 
				treatingblood vessels to your vein care.
			</p>
			*/ ?>
		</div>
	</div>
		
	<div class="section services">
		<div class="content">
			
			<div class="scroll-show s-fade-in-from-bottom">
				<?php
				    $a = new Area('Service Heading');
					$a->display($c);
				?>
				
				<?php /* <h2>Treatments</h2> */ ?>
			</div>
			
			<ul class="tab-nav clearfix">
				<li data-tab="0" class="active scroll-show s-fade-in" data-delay="0">
					<?php
					    $a = new Area('Service Title 1');
						$a->display($c);
					?>
					<?php /* Varicose Veins */ ?>
				</li>
				<li data-tab="1" class="scroll-show s-fade-in" data-delay="200">
					<?php
					    $a = new Area('Service Title 2');
						$a->display($c);
					?>
					<?php /* Spider Veins */ ?>
				</li>
				<li data-tab="2" class="scroll-show s-fade-in" data-delay="300">
					<?php
					    $a = new Area('Service Title 3');
						$a->display($c);
					?>
					<?php /* Other Veins */ ?>
				</li>
				<li data-tab="3" class="scroll-show s-fade-in" data-delay="400">
					<?php
					    $a = new Area('Service Title 4');
						$a->display($c);
					?>
					<?php /* Cosmetic Med Spa */ ?>
				</li>
			</ul>
			
			<div class="tab-content scroll-show s-fade-in-from-bottom" data-delay="500">
				<div class="entry">
					<div class="col1">
						<?php
						    $a = new Area('Service 1 Content 1');
							$a->display($c);
						?>
						
						<?php /* <img src="/application/themes/mycvl/css/images/photo-legs.jpg"> */ ?>
					</div>
					
					<div class="col2">
						<?php
						    $a = new Area('Service 1 Content 2');
							$a->display($c);
						?>
						
						<?php /*
						<p>
							Lorem Ipsum dolor magna erat sed una. Dolor magna erat sed una. Lorem Ipsum dolor magna ipsum.
							Lorem Ipsum dolor magna erat sed una. Dolor magna erat sed una. Lorem Ipsum dolor magna ipsum.
						</p>
						*/ ?>
					</div>
					
					<div class="col3">
						<?php
						    $a = new Area('Service 1 Content 3');
							$a->display($c);
						?>
						
						<?php /*
						<ul>
							<li><a href="#">VenaSeal  »</a></li>
							<li><a href="#">VNUS Closure  »</a></li>
							<li><a href="#">ClariVein  »</a></li>
							<li><a href="#">Microplebectomy  »</a></li>
							<li><a href="#">Varithena  »</a></li>
							<li><a href="#">Photo gallery  »</a></li>
						</ul>
						*/ ?>
					</div>
					
					<div class="clear"></div>
				</div>
				
				<div class="entry">
					<div class="col1">
						<?php
						    $a = new Area('Service 2 Content 1');
							$a->display($c);
						?>
						
						<?php /* <img src="/application/themes/mycvl/css/images/photo-legs.jpg"> */ ?>
					</div>
					
					<div class="col2">
						<?php
						    $a = new Area('Service 2 Content 2');
							$a->display($c);
						?>
						
						<?php /*
						<p>
							Lorem Ipsum dolor magna erat sed una. Dolor magna erat sed una. Lorem Ipsum dolor magna ipsum.
							Lorem Ipsum dolor magna erat sed una. Dolor magna erat sed una. Lorem Ipsum dolor magna ipsum.
						</p>
						*/ ?>
					</div>
					
					<div class="col3">
						<?php
						    $a = new Area('Service 2 Content 3');
							$a->display($c);
						?>
						
						<?php /*
						<ul>
							<li><a href="#">VenaSeal  »</a></li>
							<li><a href="#">VNUS Closure  »</a></li>
							<li><a href="#">ClariVein  »</a></li>
							<li><a href="#">Microplebectomy  »</a></li>
							<li><a href="#">Varithena  »</a></li>
							<li><a href="#">Photo gallery  »</a></li>
						</ul>
						*/ ?>
					</div>
					
					<div class="clear"></div>
				</div>
				
				<div class="entry">
					<div class="col1">
						<?php
						    $a = new Area('Service 3 Content 1');
							$a->display($c);
						?>
						
						<?php /* <img src="/application/themes/mycvl/css/images/photo-legs.jpg"> */ ?>
					</div>
					
					<div class="col2">
						<?php
						    $a = new Area('Service 3 Content 2');
							$a->display($c);
						?>
						
						<?php /*
						<p>
							Lorem Ipsum dolor magna erat sed una. Dolor magna erat sed una. Lorem Ipsum dolor magna ipsum.
							Lorem Ipsum dolor magna erat sed una. Dolor magna erat sed una. Lorem Ipsum dolor magna ipsum.
						</p>
						*/ ?>
					</div>
					
					<div class="col3">
						<?php
						    $a = new Area('Service 3 Content 3');
							$a->display($c);
						?>
						
						<?php /*
						<ul>
							<li><a href="#">VenaSeal  »</a></li>
							<li><a href="#">VNUS Closure  »</a></li>
							<li><a href="#">ClariVein  »</a></li>
							<li><a href="#">Microplebectomy  »</a></li>
							<li><a href="#">Varithena  »</a></li>
							<li><a href="#">Photo gallery  »</a></li>
						</ul>
						*/ ?>
					</div>
					
					<div class="clear"></div>
				</div>
				
				<div class="entry">
					<div class="col1">
						<?php
						    $a = new Area('Service 4 Content 1');
							$a->display($c);
						?>
						
						<?php /* <img src="/application/themes/mycvl/css/images/photo-legs.jpg"> */ ?>
					</div>
					
					<div class="col2">
						<?php
						    $a = new Area('Service 4 Content 2');
							$a->display($c);
						?>
						
						<?php /*
						<p>
							Lorem Ipsum dolor magna erat sed una. Dolor magna erat sed una. Lorem Ipsum dolor magna ipsum.
							Lorem Ipsum dolor magna erat sed una. Dolor magna erat sed una. Lorem Ipsum dolor magna ipsum.
						</p>
						*/ ?>
					</div>
					
					<div class="col3">
						<?php
						    $a = new Area('Service 4 Content 3');
							$a->display($c);
						?>
						
						<?php /*
						<ul>
							<li><a href="#">VenaSeal  »</a></li>
							<li><a href="#">VNUS Closure  »</a></li>
							<li><a href="#">ClariVein  »</a></li>
							<li><a href="#">Microplebectomy  »</a></li>
							<li><a href="#">Varithena  »</a></li>
							<li><a href="#">Photo gallery  »</a></li>
						</ul>
						*/ ?>
					</div>
					
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section staff" style="background-image:url('<?php echo $featuredImage; ?>');">
		<a href="/who-we-are/our-staff" class="btn">Our Staff</a>
	</div>
	
	<div class="section about">
		<div class="content">
			<h2>A little about CVL</h2>
			
			<?php 
				// Mobile Only - Duplicated at client request 
			?>
			<div class="flexslider treatments-slider mobile-content">
				<ul class="slides">
					<li>
						<div class="entry scroll-show s-fade-in-from-bottom" data-delay="0">
							<div class="icon">
								<?php
								    $a = new Area('About 1 Icon');
									$a->display($c);
								?>
							</div>

							<div class="copy">
								<?php
								    $a = new Area('About 1 Content');
									$a->display($c);
								?>
							</div>

							<div class="clear"></div>
						</div>
					</li>
					<li>
						<div class="entry scroll-show s-fade-in-from-bottom" data-delay="0">
							<div class="icon">
								<?php
								    $a = new Area('About 2 Icon');
									$a->display($c);
								?>
							</div>

							<div class="copy">
								<?php
								    $a = new Area('About 2 Content');
									$a->display($c);
								?>
							</div>

							<div class="clear"></div>
						</div>
					</li>
					<li>
						<div class="entry scroll-show s-fade-in-from-bottom" data-delay="0">
							<div class="icon">
								<?php
								    $a = new Area('About 3 Icon');
									$a->display($c);
								?>
							</div>

							<div class="copy">
								<?php
								    $a = new Area('About 3 Content');
									$a->display($c);
								?>
							</div>

							<div class="clear"></div>
						</div>
					</li>
					<li>
						<div class="entry scroll-show s-fade-in-from-bottom" data-delay="0">
							<div class="icon">
								<?php
								    $a = new Area('About 4 Icon');
									$a->display($c);
								?>
							</div>

							<div class="copy">
								<?php
								    $a = new Area('About 4 Content');
									$a->display($c);
								?>
							</div>

							<div class="clear"></div>
						</div>
					</li>
				</ul>
			</div>
			
			<div class="col1">
				<div class="entry scroll-show s-fade-in-from-bottom" data-delay="0">
					<div class="icon">
						<?php
						    $a = new Area('About 1 Icon');
							$a->display($c);
						?>
						
						<?php /* <img src="/application/themes/mycvl/css/images/icon-leaders.svg"> */ ?>
					</div>
					
					<div class="copy">
						<?php
						    $a = new Area('About 1 Content');
							$a->display($c);
						?>
						
						<?php /*
						<h3>Physician Leaders</h3>
						<p>
							Drs. McNeill and Rosenberg have personally trained over 1,500 physicians in modern vein care.
						</p>
						*/ ?>
					</div>
					
					<div class="clear"></div>
				</div>
				
				<div class="entry scroll-show s-fade-in-from-bottom" data-delay="100">
					<div class="icon">
						<?php
						    $a = new Area('About 2 Icon');
							$a->display($c);
						?>
						
						<?php /* <img src="/application/themes/mycvl/css/images/icon-stetho.svg"> */ ?>
					</div>
					
					<div class="copy">
						<?php
						    $a = new Area('About 2 Content');
							$a->display($c);
						?>
						
						<?php /*
						<h3>Years of Expertise</h3>
						<p>
							Between Drs. McNeill and Rosenberg, have several years of experience. CVL has been in business for 17 years.
						</p>
						*/ ?>
					</div>
					
					<div class="clear"></div>
				</div>
			</div>
			
			<div class="col2">
				<div class="entry scroll-show s-fade-in-from-bottom" data-delay="200">
					<div class="icon">
						<?php
						    $a = new Area('About 3 Icon');
							$a->display($c);
						?>
						
						<?php /* <img src="/application/themes/mycvl/css/images/icon-clipboard.svg"> */ ?>
					</div>
					
					<div class="copy">
						<?php
						    $a = new Area('About 3 Content');
							$a->display($c);
						?>
						
						<?php /*
						<h3>Patient Success</h3>
						<p>
							Drs. McNeill and Rosenberg have performed over 10,000 VNUS Closure (Venefit) procedures. In fact, they were the first 
							physicians in the DC metro region to perform this technique.
						</p>
						*/ ?>
					</div>
					
					<div class="clear"></div>
				</div>
				
				<div class="entry scroll-show s-fade-in-from-bottom" data-delay="300">
					<div class="icon">
						<?php
						    $a = new Area('About 4 Icon');
							$a->display($c);
						?>
						
						<?php /* <img src="/application/themes/mycvl/css/images/icon-locations.svg"> */ ?>
					</div>
					
					<div class="copy">
						<?php
						    $a = new Area('About 4 Content');
							$a->display($c);
						?>
						
						<?php /*
						<h3>Six Convenient Locations</h3>
						<p>
							Lorem Ipsum dolor magna erat sed una. Dolor magna erat sed una. 
						</p>
						*/ ?>
					</div>
					
					<div class="clear"></div>
				</div>
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
	
	<div class="section doctors">
		<div class="mobile-content">
			<?php
				if( !$c->isEditMode() ){
			    	$a = new Area('Doctors Content');
					$a->display($c);
				}
			?>
		</div>
		
		<style type="text/css">
			/* Desktop */
			.section.doctors .photo-content { background-image:url('<?php echo $featuredImage2; ?>'); }
			
			/* Mobile */
			@media screen and (max-width: 980px){
				.section.doctors .photo-content { background-image:url('<?php echo $featuredImage2Mobile; ?>'); }
			}
		</style>
		
		<div class="photo-content">
			<div class="content scroll-show s-fade-in">
				<?php
				    $a = new Area('Doctors Content');
					$a->display($c);
				?>
				
				<?php
				    $a = new Area('Doctors Content 2');
					$a->display($c);
				?>
			
				<?php /*
				<h3>Meet Our Physicians</h3>
				<p>Lorem Ipsum dolor magna erat sed una.</p>
			
				<a class="btn primary scroll-show s-fade-in" href="#">Dr. Paul Mcneil</a>
				<a class="btn scroll-show s-fade-in">Dr. Garth Rosenberg</a>
				*/ ?>
			</div>
		</div>
		
		<div class="mobile-content">
			<?php
				if( !$c->isEditMode() ){
			    	$a = new Area('Doctors Content 2');
					$a->display($c);
				}
			?>
		</div>
	</div>
			
<?php $this->inc('elements/footer.php'); ?>