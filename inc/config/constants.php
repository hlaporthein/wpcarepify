<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }



// child theme
define('CP_CHILD_THEME_DIR', get_stylesheet_directory());
define('CP_CHILD_THEME_URL', get_stylesheet_directory_uri());
define('CP_CHILD_THEME_ASSETS_URL', CP_CHILD_THEME_URL .'/assets');
define('CP_CHILD_THEME_IMG_URL', CP_CHILD_THEME_ASSETS_URL . '/img');
define('CP_CHILD_THEME_JS_URL', CP_CHILD_THEME_ASSETS_URL . '/js');
define('CP_CHILD_THEME_CSS_URL', CP_CHILD_THEME_ASSETS_URL . '/css');


// parent theme
define('CP_PARENT_THEME_DIR', get_template_directory());
define('CP_PARENT_THEME_URL', get_template_directory_uri());
define('CP_PARENT_THEME_ASSETS_URL', CP_PARENT_THEME_URL .'/assets');
define('CP_PARENT_THEME_IMG_URL', CP_CHILD_THEME_ASSETS_URL . '/img');
define('CP_PARENT_THEME_JS_URL', CP_CHILD_THEME_ASSETS_URL . '/js');
define('CP_PARENT_THEME_CSS_URL', CP_CHILD_THEME_ASSETS_URL . '/css');


//Helpers links
define('CP_CHILD_THEME_GITHUB_URL', 'https://github.com/hlaporthein/child-wpcarepify');
define('CP_PARENT_THEME_GITHUB_URL', 'https://github.com/hlaporthein/wpcarepify');
