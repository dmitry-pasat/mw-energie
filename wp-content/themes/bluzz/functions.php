<?php

	include 'inc/functions/default.php';
	include 'inc/functions/login.php';
	include 'inc/functions/pagination.php';
	include 'inc/functions/remover.php';
	// include 'inc/functions/theme.php';
	include 'inc/functions/map.php';
	include 'inc/functions/font-awesome.php';
	// include 'inc/functions/post_types.php';


	function googlepins() {
		include 'inc/elements/solarrechner.php';
	}
	add_shortcode('googlepins', 'googlepins');


?>