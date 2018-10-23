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
			
			<div class="section treatments">
				
				<?php
				    $a = new Area('Treatment 1');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 1');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 2');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 2');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 3');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 3');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 4');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 4');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 5');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 5');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 6');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 6');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 7');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 7');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 8');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 8');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 9');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 9');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 10');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 10');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 11');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry">
							<?php
							    $a = new Area('Treatment 10');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<?php
				    $a = new Area('Treatment 12');
					if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					?>
						<div class="entry last">
							<?php
							    $a = new Area('Treatment 10');
								$a->display($c);
							?>
						</div>
					<?php
					}
				?>
				
				<div class="clear"></div>
			</div>
		</div>
	</div>
			
<?php $this->inc('elements/footer.php'); ?>