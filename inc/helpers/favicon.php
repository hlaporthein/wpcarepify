<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( !function_exists('cp_favicon') ) :

	function cp_favicon() {

		if ( is_child_theme() === true ) {
			$favicon_url = CP_CHILD_THEME_URL .'/favicon.ico';
		} else {
			$favicon_url = CP_PARENT_THEME_URL .'/favicon.ico';
		}

		echo '<link rel="shortcut icon" href="'. $favicon_url .'" type="image/x-icon">';
		echo '<link rel="icon" href="'. $favicon_url .'" type="image/x-icon">';

	}

	add_action('wp_head', 'cp_favicon');

endif;