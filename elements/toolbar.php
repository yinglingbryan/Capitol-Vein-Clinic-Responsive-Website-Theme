
<?php
	$excludeToolbar = $c->getAttribute('exclude_toolbar');
	if( !$excludeToolbar ){
		
		// Breadcrumbs
		$nav = Loader::helper('navigation');
		$breadcrumbs = $nav->getTrailToCollection($c);

		if($breadcrumbs){
			krsort($breadcrumbs);
		}

		// Print Button (Optional)
		$includePrintButton = $c->getAttribute('include_print_button');
		
	?>
	<div class="section toolbar">
		<div class="content">
			<ul class="breadcrumb">
				<?php
					foreach( $breadcrumbs as $breadcrumb ){
						echo '<li><a href="'.$breadcrumb->getCollectionLink().'">'.$breadcrumb->getCollectionName().'</a><span>»</span></li>';
					}
				?>
	
				<li><?php echo $c->getCollectionName(); ?></li>
			</ul>
	
			<?php if( $includePrintButton ){ ?>
				<a class="print-btn" onclick="window.print();return false;">PRINT THIS PAGE</a>
			<?php } ?>
		
			<div class="clear"></div>
		</div>
	</div>
	<?php 
	} 
?>

<?php
	$includeFullContent = $c->getAttribute('include_full_content');
	if( $includeFullContent ){
		?>
		<div class="section full">
			<?php
			    $a = new Area('Full Section Content');
				$a->display($c);
			?>
		</div>
		<?php 
	}
?>

<?php
	$includeDoctorTabs = $c->getAttribute('include_doctor_tabs');
	if( $includeDoctorTabs ){
		?>
		<div class="section doctors-tabs">
			<div class="content">
				<ul class="tab-nav clearfix">
					<li data-tab="0" class="active scroll-show s-fade-in" data-delay="0">
						<?php
						    $a = new Area('Tab Title 1');
							$a->display($c);
						?>
					</li>
					<li data-tab="1" class="scroll-show s-fade-in" data-delay="200">
						<?php
						    $a = new Area('Tab Title 2');
							$a->display($c);
						?>
					</li>
					<li data-tab="2" class="scroll-show s-fade-in" data-delay="300">
						<?php
						    $a = new Area('Tab Title 3');
							$a->display($c);
						?>
					</li>
					<li data-tab="3" class="scroll-show s-fade-in" data-delay="400">
						<?php
						    $a = new Area('Tab Title 4');
							$a->display($c);
						?>
					</li>
				</ul>
		
				<div class="tab-content scroll-show s-fade-in-from-bottom" data-delay="500">
					<div class="entry">
						<?php
						    $a = new Area('Tab Content 1');
							$a->display($c);
						?>
					</div>
			
					<div class="entry">
						<?php
						    $a = new Area('Tab Content 2');
							$a->display($c);
						?>
					</div>
			
					<div class="entry centered">
						<?php
						    $a = new Area('Tab Content 3');
							$a->display($c);
						?>
						
						<?php /*
						<div class="cert">
							<img src="/application/themes/mycvl/css/images/icon-cert-1.png" />
							<p>
								<strong>AMERICAN BOARD OF SURGERY</strong><br />
								1989
							</p>
						</div>
						*/ ?>
						
						<div class="clear"></div>
					</div>
			
					<div class="entry centered">
						<?php
						    $a = new Area('Tab Content 4');
							$a->display($c);
						?>
						
						<?php /*
						<div class="cert">
							<img src="/application/themes/mycvl/css/images/icon-society-1.jpg" />
							<p>
								<strong>Fellow</strong><br />
								American College of Surgeons
							</p>
						</div>
						*/ ?>
						
						<div class="clear"></div>
					</div>
					
				</div>
			</div>
		</div>
		<?php 
	}
?>		

