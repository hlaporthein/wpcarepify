<?php
if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly.
}


if ( ! function_exists( 'twentynineteen_the_posts_navigation' ) ) :
	/**
	 * Documentation for function.
	 */
	function twentynineteen_the_posts_navigation() {
		the_posts_pagination( array(
			'mid_size' => 2,
			'prev_text' => __( 'Back', 'textdomain' ),
			'next_text' => __( 'Onward', 'textdomain' ),
		) );
	}
endif;