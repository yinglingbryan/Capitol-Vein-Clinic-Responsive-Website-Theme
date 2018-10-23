
<?php
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
				
				if( $post ){  
					echo '<li><a href="'.$c->getCollectionLink().'">'.$c->getCollectionName().' </a><span>»</span></li>';
					echo '<li>'.$post['title'].'</li>';
					
				} else if( $currentCategory ){
					echo '<li><a href="'.$c->getCollectionLink().'">'.$c->getCollectionName().' </a><span>»</span></li>';
					echo '<li>'.ucfirst($categories[$currentCategory]).'</li>';
					
				} else {
					echo '<li>'.$c->getCollectionName().'</li>';
				} 
			?>
			
		</ul>

		<?php if( $includePrintButton ){ ?>
			<a class="print-btn" onclick="window.print();return false;">PRINT THIS PAGE</a>
		<?php } ?>

		<div class="clear"></div>
	</div>
</div>