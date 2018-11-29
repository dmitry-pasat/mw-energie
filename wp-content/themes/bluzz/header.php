<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >

	<head>
		<!-- Mobile Specific Metas + CDN Fallback -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<meta name="MobileOptimized" content="320">
		<meta name="HandheldFriendly" content="True">
		<!-- /end Mobile Specific Metas -->

		<meta charset="<?php bloginfo('charset'); ?>">
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

		<title><?php wp_title('|', true, 'right');bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width" />

		<!-- Owl Carousel -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
		<meta name="theme-color" content="#ffffff">

		<!-- Feed -->
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

		<?php wp_head(); ?>
		<!-- W3TC-include-css -->
	</head>

	<body <?php body_class(); ?>>
	
	<?php if (is_front_page() || is_home()) { ?>
		<div class="container">
	<?php } else { ?>
		<div class="h100"></div>
		<div class="none mobile"></div>
	<?php } ?>
			<header>
				<nav class="navigation clearfix">
					<div class="row">
						<div class="large-4 small-2 columns">
							<a class="large-6 columns end logo mobilenone" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"></a>
							<a class="logo none" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mobilelogo.png" alt="<?php bloginfo('name'); ?>"></a>
						</div>
						<div class="large-8 small-10 columns">
							<div id="menu-header-menu" class="mobilenone">
								<ul>
									<li><a href="<?php echo esc_url(home_url('/')); ?>#news">News</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>#services_angebote">Services & Angebote</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>#kundensegmente">Kundensegmente</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>#themen">Themen</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>#uber_uns">Uber uns</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>#team">Team</a></li>
									<li><a class="<?php if (is_page(74)) echo 'active'; ?>" href="<?php echo get_page_link(74); ?>"><?php echo get_the_title(74); ?></a></li>
								</ul>
							</div>
						</div>
					</div>	
				</nav>
			</header>
		<?php if (is_front_page() || is_home()) { ?>
			<div class="landing">
				<?php $image = get_field('home_banner'); if( !empty($image) ): ?>
				<div class="parallax" style="background-image: url(<?php echo $image['url']; ?>);">
				<?php endif; ?>
					<div class="heading">
						<div class="center-text">
							<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"></a>
						</div>
						<div class="after-center text-center">
							<?php if( have_rows('header_links') ): while ( have_rows('header_links') ) : the_row(); ?>
								<div class="large-4 columns">
									<a href="<?php the_sub_field('link'); ?>" class="new-links"><?php the_sub_field('name'); ?></a>
								</div>
							<?php endwhile; else : endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

	<!-- pop-up -->
	<?php if (is_front_page() || is_home()) { ?>
		<!-- 
		<div id="bkgOverlay" class="backgroundOverlay"></div>
		<div id="delayedPopup" class="delayedPopupWindow gray text-center">
			<div class="h50"></div>
			<h1>SOLARRECHNER</h1>
			<div class="line"></div>
				<h3>Planen Sie JETZT Ihre Anlage <br>mit dem Solarrechner von MW Energie AG</h3>
				<br>
				<a href="<?php the_permalink(221); ?>" class="button">Solarrechner</a>
			<div class="h50"></div>
		</div>
		 -->
		<!-- 
		<div id="delayedPopup" class="delayedPopupWindow gray text-center">
			<div class="h50"></div>
			<h1>WEITEREMPFEHLEN</h1>
			<div class="line"></div>
				<h3>Möchten Sie zur Energiewende beitragen? <br>Empfehlen Sie uns jetzt weiter</h3>
				<br>
				<a href="<?php the_permalink(154); ?>" class="button">Weiterempfehlen</a>
			<div class="h50"></div>
		</div>
		-->
 	<?php } ?>
	<!-- pop-up -->