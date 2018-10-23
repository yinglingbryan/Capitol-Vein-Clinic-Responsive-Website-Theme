<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php
	if( $c->getCollectionID() == 1 ){	
		$classes = "home";
	} else {
		$classes = "interior";
	}
	
	// 301 Redirects
	$page_redirect = $c->getAttribute('301_Redirect');
	if( $page_redirect != '' ){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".$page_redirect);
		exit();
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
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T58SNBR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
	<?php } ?>
	
	<div class="<?= $c->getPageWrapperClass(); ?> <?php echo $classes; ?>">
		<div class="header">
			<div class="content clearfix">
				<h1>
					<a href="/">
						<img src="<?= $view->getThemePath() ?>/css/images/logo.svg" />
					</a>
				</h1>
				
				<div class="nav-container">
					<div class="nav-toggle">
						<span class="line line-one"></span>
						<span class="line line-two"></span>
						<span class="line line-three"></span>
					</div>
					
					<div class="mobile-icons">
						<a href="tel:866-695-8346"><img src="<?= $view->getThemePath() ?>/css/images/icon-call.png" /></a>
						<a href="/locations"><img src="<?= $view->getThemePath() ?>/css/images/icon-location-mark.png" /></a>
					</div>
					
					<div class="subnav clearfix">
						<?php
							$a = new GlobalArea('Header Subnav');
							$a->display();
						?>
					</div>
					
					<div class="clear"></div>
					
					<?php 
						$bt_nav = BlockType::getByHandle('autonav');
						$bt_nav->controller->displayPages = 'top';
						$bt_nav->controller->orderBy = 'display_asc';                    
						$bt_nav->controller->displaySubPages = 'all';
						$bt_nav->controller->displaySubPageLevels = 'custom';
						$bt_nav->controller->displaySubPageLevelsNum = 1; 
						$bt_nav->render('templates/site_nav/view');
						// bt_nav->render('view');
					?>
					
					<div class="clear"></div>
				</div>
			</div>
		</div>