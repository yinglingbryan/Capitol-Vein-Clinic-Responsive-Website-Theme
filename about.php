<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php');
	
	// Featured Image
	$featuredImage = $c->getAttribute('featured_image');
	if( $featuredImage ){
		$featuredImage = $featuredImage->getURL();
	} else {
		$featuredImage = $view->getThemePath().'/css/images/photo-masthead-1.jpg';
	}
	
	// Featured Image 2
	$featuredImage2 = $c->getAttribute('featured_image_2');
	if( $featuredImage2 ){
		$featuredImage2 = $featuredImage2->getURL();
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
	
	<div class="section masthead" style="background-image:url('<?php echo $featuredImage; ?>');">
		<div class="content">
			<h1><?php echo $c->getCollectionName(); ?></h1>
		</div>
	</div>
				
	<?php $this->inc('elements/toolbar.php'); ?>
	
	<div class="section staff static" style="background-image:url('<?php echo $featuredImage2; ?>');">
		<a href="/who-we-are/our-staff" class="btn">Our Staff</a>
	</div>

	<div class="main">
		<div class="content">
			<?php
				$a = new Area('Main Content');
				$a->display($c);
			?>
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

				<?php /*
				<h3>Meet Our Physicians</h3>
				<p>Experienced, board-certified, caring</p>

				<p><a class="btn primary scroll-show s-fade-in" href="/who-we-are/dr-mcneill">Dr. Paul McNeill</a></p>
				<p><a class="btn scroll-show s-fade-in" href="/who-we-are/dr-rosenberg">Dr. Garth Rosenberg</a></p>
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