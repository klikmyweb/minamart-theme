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
 * Core Theme Initialization
 */
require_once MINAMART_INC . '/setup.php';
require_once MINAMART_INC . '/enqueue.php';
require_once MINAMART_INC . '/hooks.php';
require_once MINAMART_INC . '/helpers.php';
require_once MINAMART_INC . '/security.php';
require_once MINAMART_INC . '/performance.php';
require_once MINAMART_INC . '/utilities.php';
require_once MINAMART_INC . '/admin.php';

/**
 * WooCommerce Integration
 */
if ( class_exists( 'WooCommerce' ) ) {
	require_once MINAMART_INC . '/woocommerce-config.php';
}

/**
 * Hooks Documentation
 */
require_once MINAMART_INC . '/hooks-documentation.php';
