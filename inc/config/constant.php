<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('CP_ENV', 'development'); //development, production, staging


switch ( CP_ENV ) {
	case 'development':
	define('CP_TESTING', true);

	case 'staging':
	define('CP_TESTING', true);

	default :
	define('CP_TESTING', false);
	break;
}