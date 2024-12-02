<!DOCTYPE html>
<html <?php the_html_attrs() ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title><?php echo apply_filters('site_title', get_page_title()) ?></title>
		<?php the_canonical_link() ?>
		<meta name="description" content="<?php echo apply_filters('meta_description',substr($meta_description, 0, 160)) ?>">
		<?php the_head('top') ?>
		<?php the_canonical_link() ?>
		<?php
			if(is_game()){ //Game page
				?>
				<meta property="og:type" content="game">
				<meta property="og:url" content="<?php echo get_canonical_url() ?>">
				<meta property="og:title" content="<?php echo htmlspecialchars( $page_title )?>">
				<meta property="og:description" content="<?php echo substr(esc_string($meta_description), 0, 200) ?>">
				<meta property="og:image" content="<?php echo (substr($game->thumb_1, 0, 1) == '/') ? home_url() . $game->thumb_1 : $game->thumb_1 ?>">
				<?php
			}
		?>
		<?php load_plugin_headers() ?>
		<!-- Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN . TEMPLATE_PATH; ?>/style/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN . TEMPLATE_PATH; ?>/style/jquery-comments.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN . TEMPLATE_PATH; ?>/style/user.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN . TEMPLATE_PATH; ?>/style/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN . TEMPLATE_PATH; ?>/style/custom.css" />
		<!-- Font Awesome icons (free version)-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<?php the_head('bottom') ?>
		<?php widget_aside('head') ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MX3PDBM8');</script>
<!-- End Google Tag Manager -->


	</head>
	<body id="page-top">




<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MX3PDBM8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


		<!-- Navigation-->
		<div class="container site-container">
		<div class="site-content">
		<nav class="navbar navbar-expand-lg navbar-dark top-nav" id="mainNav">
			<div class="container">
				<button class="navbar-toggler navbar-toggler-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navb" aria-expanded="false">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand js-scroll-trigger" href="<?php echo DOMAIN ?>"><img src="<?php echo DOMAIN . SITE_LOGO ?>" class="site-logo" alt="site-logo"></a>
				<?php include  TEMPLATE_PATH . "/parts/navigation-top.php" ?>
				<?php show_user_profile_header() ?>
			</div>
		</nav>
		<div class="nav-categories">
			<div class="container">
				<?php include  TEMPLATE_PATH . "/parts/navigation-categories.php" ?>
			</div>
		</div>
