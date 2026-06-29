<?php
/**
 * Minamart Theme Asset Enqueue
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and stylesheets.
 *
 * @return void
 */
function minamart_enqueue_assets() {
	// Main stylesheet.
	wp_enqueue_style(
		'minamart-main',
		MINAMART_ASSETS . '/css/global.css',
		array(),
		MINAMART_VERSION,
		'all'
	);

	// Header styles.
	wp_enqueue_style(
		'minamart-header',
		MINAMART_ASSETS . '/css/header.css',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		'all'
	);

	// Hero styles.
	wp_enqueue_style(
		'minamart-hero',
		MINAMART_ASSETS . '/css/hero.css',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		'all'
	);

	// Product styles.
	wp_enqueue_style(
		'minamart-products',
		MINAMART_ASSETS . '/css/products.css',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		'all'
	);

	// Sections styles.
	wp_enqueue_style(
		'minamart-sections',
		MINAMART_ASSETS . '/css/sections.css',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		'all'
	);

	// Footer styles.
	wp_enqueue_style(
		'minamart-footer',
		MINAMART_ASSETS . '/css/footer.css',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		'all'
	);

	// Animations styles.
	wp_enqueue_style(
		'minamart-animations',
		MINAMART_ASSETS . '/css/animations.css',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		'all'
	);

	// Responsive styles.
	wp_enqueue_style(
		'minamart-responsive',
		MINAMART_ASSETS . '/css/responsive.css',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		'all'
	);

	// Poppins font from Google Fonts.
	wp_enqueue_style(
		'google-fonts-poppins',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap',
		array(),
		null,
		'all'
	);

	// Main JavaScript.
	wp_enqueue_script(
		'minamart-main',
		MINAMART_ASSETS . '/js/main.js',
		array(),
		MINAMART_VERSION,
		true
	);

	// Header JavaScript.
	wp_enqueue_script(
		'minamart-header',
		MINAMART_ASSETS . '/js/header.js',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		true
	);

	// Products JavaScript.
	wp_enqueue_script(
		'minamart-products',
		MINAMART_ASSETS . '/js/products.js',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		true
	);

	// Cart JavaScript.
	wp_enqueue_script(
		'minamart-cart',
		MINAMART_ASSETS . '/js/cart.js',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		true
	);

	// Animations JavaScript.
	wp_enqueue_script(
		'minamart-animations',
		MINAMART_ASSETS . '/js/animations.js',
		array( 'minamart-main' ),
		MINAMART_VERSION,
		true
	);

	// Localize main script.
	wp_localize_script(
		'minamart-main',
		'minamart',
		array(
			'ajax_url'   => admin_url( 'admin-ajax.php' ),
			'nonce'      => wp_create_nonce( 'minamart_nonce' ),
			'home_url'   => home_url(),
			'theme_uri'  => MINAMART_URI,
		)
	);

	// Dequeue WooCommerce default styles if needed.
	if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
		wp_dequeue_style( 'woocommerce-layout' );
		wp_dequeue_style( 'woocommerce-general' );
	}
}
add_action( 'wp_enqueue_scripts', 'minamart_enqueue_assets' );

/**
 * Enqueue admin scripts and styles.
 *
 * @return void
 */
function minamart_admin_enqueue_assets() {
	wp_enqueue_style(
		'minamart-admin',
		MINAMART_ASSETS . '/css/admin.css',
		array(),
		MINAMART_VERSION,
		'all'
	);

	wp_enqueue_script(
		'minamart-admin',
		MINAMART_ASSETS . '/js/admin.js',
		array(),
		MINAMART_VERSION,
		true
	);
}
add_action( 'admin_enqueue_scripts', 'minamart_admin_enqueue_assets' );
