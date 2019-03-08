<?php

// if ( ! defined( 'ABSPATH' ) ) {
// 	exit; // Exit if accessed directly.
// }
get_header();
?>

<div class="error-404 not-found">
    <header class="page-header">
        <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'wpcarepify' ); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'wpcarepify' ); ?></p>
        <?php get_search_form(); ?>
    </div><!-- .page-content -->
</div><!-- .error-404 -->

<?php get_footer(); ?>