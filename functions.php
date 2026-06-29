<?php
/**
 * Minamart Theme Functions
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define theme constants.
define( 'MINAMART_VERSION', '1.0.0' );
define( 'MINAMART_DIR', get_template_directory() );
define( 'MINAMART_URI', get_template_directory_uri() );
define( 'MINAMART_INC', MINAMART_DIR . '/inc' );
define( 'MINAMART_ASSETS', MINAMART_URI . '/assets' );

/**
 * Theme Setup and Initialization
 */
require_once MINAMART_INC . '/setup.php';
require_once MINAMART_INC . '/enqueue.php';
require_once MINAMART_INC . '/hooks.php';
require_once MINAMART_INC . '/helpers.php';
