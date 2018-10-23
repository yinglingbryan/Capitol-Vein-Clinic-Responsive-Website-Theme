<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php
	// 301 Redirects
	$page_redirect = $c->getAttribute('301_Redirect');
	if( $page_redirect != '' ){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".$page_redirect);
		exit();
	}
	
	// Featured Image 3
	$featuredImage3 = $c->getAttribute('featured_image_3');
	if( $featuredImage3 ){
		$featuredImage3 = $featuredImage3->getURL();
	}
	
	// Featured Image 3 Mobile
	$featuredImage3Mobile = $c->getAttribute('featured_image_3_mobile');
	if( $featuredImage3Mobile ){
		$featuredImage3Mobile = $featuredImage3Mobile->getURL();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<?php if ($_SERVER['SERVER_ADDR'] != '192.168.16.253' && $_SERVER['SERVER_ADDR'] != '192.168.16.250'){ ?>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-T58SNBR');</script>
		<!-- End Google Tag Manager -->
	<?php } ?>
	
	<?php Loader::element('header_required'); ?>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,400|Roboto:300,400" rel="stylesheet">
	<link href="<?=$view->getStylesheet('main.less')?>" rel="stylesheet">
</head>

<body id="page-<?php echo $c->getCollectionID(); ?>" class="<?php if($c->isEditMode()) { echo 'editmode'; } ?>">
	<?php if ($_SERVER['SERVER_ADDR'] != '192.168.16.253' && $_SERVER['SERVER_ADDR'] != '192.168.16.250'){ ?>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T58SNBR"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
	<?php } ?>
	
	<div class="<?= $c->getPageWrapperClass(); ?> interior">
		<div class="header header-lp">
			<div class="content clearfix">
				<h1>
					<a href="/">
						<img src="<?= $view->getThemePath() ?>/css/images/logo.svg" />
					</a>
				</h1>
				
				<a class="call" href="tel:866-695-8346">
					<span>Give Us a Call (866) 695-8346</span>
					<img src="/application/themes/mycvl/css/images/icon-call.png">
				</a>
			</div>
		</div>
		
		<div class="hero-lp">
			<img src="<?= $view->getThemePath() ?>/css/images/hero-5.png" />
			
			<div class="contact-form">
				<?php
				    $a = new Area('Contact Form Content');
					$a->display($c);
				?>
			</div>
			
			<div class="cta-content">
				<?php
				    $a = new Area('CTA Content');
					$a->display($c);
				?>
				
				<?php /*
				<h2>It's time to takeyour first step to healthier legs:</h2>
				<ul>
					<li>Offered at one of our seven convenient locations</li>
					<li>Board certified vascular surgeons</li>
					<li>Insurance accepted</li>
				</ul>
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
		
		<hr class="blue" />
		
		<div class="section quickfacts">
			<?php
				$a = new Area('Quickfacts Content');
				$a->display($c);
			?>
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
				.section.doctors .photo-content { background-image:url('<?php echo $featuredImage3; ?>'); }

				/* Mobile */
				@media screen and (max-width: 980px){
					.section.doctors .photo-content { background-image:url('<?php echo $featuredImage3Mobile; ?>'); }
				}
			</style>

			<div class="photo-content">
				<div class="content scroll-show s-fade-in">
					<?php
					    $a = new Area('Doctors Content');
						$a->display($c);
					?>

					<?php
					    $a = new Area('Doctors Content 2'); // PULLS SEPARATE FOR MOBILE BELOW
						$a->display($c);
					?>
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
		
		<div class="section testimonials">
			<?php
			    $a = new Area('Testimonial Content');
				$a->display($c);
			?>
			
			<?php /*
			<ul class="testimonial-list">
				<li>
					<div class="content">
						<blockquote>
							<p>
								What a positive experience at Dr. McNeill's office! The VNUS Closure procedure was so relaxing and all of my questions were answered. My legs 
								had gotten very bad with bulging veins and tired, aching feeling. I feel like a NEW WOMAN with young legs now!!! I was awake during the procedure 
								and able to drive myself home, which was very convenient. Summer time here I come!!
							</p>
							<span>
								—  B.S, 
								Middletown, MD
							</span>
						</blockquote>
					</div>
				</li>
				<li>
					<div class="content">
						<blockquote>
							<p>
								When I first came to CVL, my legs were discolored and had many ugly veins that worsened with each pregnancy. With little hope, I finally decided to 
								come in for a consultation. CVL has worked wonders through phlebectomy and sclerotherapy treatments. I am so grateful to have normal legs now. I am 
								fast approaching 60, but my legs look younger and better than they did when I was 40! Thank you, Dr. Rosenberg and Nurse Marcia!
							</p>
							<span>
								—  J.S., 
								Frederick, MD
							</span>
						</blockquote>
					</div>
				</li>
				<li>
					<div class="content">
						<blockquote>
							<p>
								Dr. McNeill, I am so grateful for your services! I knew my legs were painful and unattractive, but I didn't realize how bad they were until I had my 
								treatments with you. My workouts have vastly improved and being on my feet for eight to ten hours a day, the aching and heaviness no longer consumes me. 
								Thank you for improving my legs, activity level and overall confidence!
							</p>
							<span>
								—  J.B., 
								Bethesda, MD
							</span>
						</blockquote>
					</div>
				</li>
			</ul>
			*/ ?>
		</div>
							
<?php $this->inc('elements/footer.php'); ?>