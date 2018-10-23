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
?>
	
	<div class="section masthead" style="background-image:url('<?php echo $featuredImage; ?>');">
		<div class="content">
			<h1><?php echo $c->getCollectionName(); ?></h1>
		</div>
	</div>
		
	<?php $this->inc('elements/toolbar.php'); ?>
			
	<div class="main">
		<div class="content">
			<?php
			    $a = new Area('Main Content');
				$a->display($c);
			?>
		</div>
	</div>
	
	<?php
	    $a = new Area('Location Details Content');
		$a->display($c);
	?>
	
	<div class="main">
		<div class="content">
			<?php
			    $a = new Area('Directions Content');
				$a->display($c);
			?>
		</div>
	</div>
	
	<div class="location-map">
		<?php
		    $a = new Area('Location Map');
			$a->display($c);
		?>
	</div>
			
<?php $this->inc('elements/footer.php'); ?>