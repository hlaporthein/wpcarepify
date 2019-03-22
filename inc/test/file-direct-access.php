<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}


if ( !function_exists('_cp_direct_file_access_checker')) :
    /**
     * @direct access file check
     */
    function _cp_direct_file_access_checker() {
        $path = get_template_directory();
        $html = '';
        $dir_iterator = new RecursiveDirectoryIterator($path);
        $iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST);

        foreach ($iterator as $file) {
            if ( pathinfo($file, PATHINFO_EXTENSION) == 'php' ) {
                if( strpos(file_get_contents($file),'ABSPATH') == false) {
                    $html .=  '<p>'. $file .'</p>';
                }
            }
        }
        
        if ( !empty($html) ) {
            echo '<div class="cp-fixed-bar cp-bg-danger">';
            echo '<h3>php file prevent from direct access</h3>';
            echo '<small><a class="cp-btn cp-bg-warning" href="#">read more</a></small>';
            echo $html;
            echo '<code>';
            echo "if ( ! defined( 'ABSPATH' ) ) { exit; }";
            echo '</code>';
            echo '<br/>';
            echo '</div>';
        }

    }
    add_action('wp_footer', '_cp_direct_file_access_checker');


endif;