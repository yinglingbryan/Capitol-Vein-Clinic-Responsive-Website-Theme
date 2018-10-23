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
		
	<?php $this->inc('elements/toolbar.php'); ?>

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
	
	<div class="section grid">
		<div class="content">
			
			<?php
			    $a = new Area('Grid Content 1');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 1');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
		
			<?php
			    $a = new Area('Grid Content 2');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 2');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
		
			<?php
			    $a = new Area('Grid Content 3');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 3');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
		
			<?php
			    $a = new Area('Grid Content 4');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 4');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
		
			<?php
			    $a = new Area('Grid Content 5');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 5');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
		
			<?php
			    $a = new Area('Grid Content 6');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 6');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
			
			<?php
			    $a = new Area('Grid Content 7');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 7');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
			
			<?php
			    $a = new Area('Grid Content 8');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 8');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
			
			<?php
			    $a = new Area('Grid Content 9');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 9');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
			
			<?php
			    $a = new Area('Grid Content 10');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				?>
					<div class="entry">
						<?php
						    $a = new Area('Grid Content 10');
							$a->display($c);
						?>
					</div>
				<?php
				}
			?>
		
			<div class="clear"></div>
		</div>
	</div>
							
<?php $this->inc('elements/footer.php'); ?>