<?php
	get_header();
		if (have_posts()) : while (have_posts()) : the_post();
			if (is_front_page() || is_home()) {
				include 'inc/elements/facebook.php';
				include 'inc/elements/services.php';
				include 'inc/elements/offer.php';
				// include 'inc/elements/portfolio.php';
				include 'inc/elements/home.php';
				include 'inc/elements/about.php';
				include 'inc/elements/team.php';
				include 'inc/elements/partners.php';
		
			// agb
			} elseif (is_page('112')) {
				include 'inc/elements/agb.php';

			// contact
			} elseif (is_page('74')) {
				include 'inc/elements/contact.php';

			} elseif (is_page('120') || is_page('122') || is_page('124') || is_page('126')) {
				include 'inc/elements/section.php';

			// ambassador
			} elseif(is_page('154')) {
				include 'inc/elements/ambassador.php';

			// solarrechner
			} elseif(is_page('221')) {
				include 'inc/elements/solarrechner.php';

			// default
			} else {
				include 'inc/elements/default.php';
		
		
			}

		endwhile; else : endif;
	get_footer();
?>