<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('CP_ENV', 'development'); //development, production, staging

switch ( CP_ENV ) {
	case 'development':
	require_once dirname(__FILE__) .'/environment/development.php';

	case 'staging':
	require_once dirname(__FILE__) .'/environment/staging.php';

	default :
	require_once dirname(__FILE__) .'/environment/production.php';
	break;
}