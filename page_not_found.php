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
	
	// Featured Image 2 - No fallback since used as a switch.
	$featuredImage2 = $c->getAttribute('featured_image_2');
	if( $featuredImage2 ){
		$featuredImage2 = $featuredImage2->getURL();
	}
?>
	
	<div class="section masthead" style="background-image:url('<?php echo $featuredImage; ?>');">
		<div class="content">
			<h1><?php echo $c->getCollectionName(); ?></h1>
		</div>
	</div>
	
	<?php if( $featuredImage2 ){ ?>
	<div class="section masthead-hero" style="background-image:url('<?php echo $featuredImage2; ?>');"></div>
	<?php } ?>
		
	<?php // $this->inc('elements/toolbar.php'); ?>

	<?php
	    $a = new Area('Main Content');
		if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
		?>
		<div class="main">
			<div class="content">
				<?php
					$a->display($c);
				?>
			</div>
		</div>
		<?php
		}
	?>
							
<?php $this->inc('elements/footer.php'); ?>