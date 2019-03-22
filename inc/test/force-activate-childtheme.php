<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}


if ( !function_exists('_cp_force_activate_child_theme')) :
    /**
     * @direct access file check
     */
    function _cp_force_activate_child_theme() {

        if ( is_child_theme() === false ) {

            echo '<div class="cp-fixed-bar cp-bg-danger">';
            echo '<h3 class="cp-small-title">Theme Installation Warning</h3>';
            echo '<p class="cp-text">You can not develop on parent theme. Download ';
            echo '<small><a class="cp-btn cp-bg-warning" href="'. CP_CHILD_THEME_GITHUB_URL .'">child theme</a></small> and activate it through admin panel';
            echo '</p>';
            echo '<br/>';
            echo '</div>';

        } else {
            // do nothing
        }        

    }
    add_action('wp_footer', '_cp_force_activate_child_theme');


endif;