<?php
/**
 * Minamart Theme Setup
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup theme defaults and register supported WordPress features.
 *
 * @return void
 */
function minamart_setup() {
	// Load text domain for translations.
	load_theme_textdomain( 'minamart', MINAMART_DIR . '/languages' );

	// Add default theme supports.
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'script',
		'style',
	) );

	// Support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Support for custom header.
	add_theme_support( 'custom-header', array(
		'default-image'      => '',
		'random-default'     => false,
		'width'              => 1920,
		'height'             => 1080,
		'flex-height'        => true,
		'flex-width'         => true,
		'default-text-color' => '0B3C5D',
		'header-text'        => false,
	) );

	// Support for custom background.
	add_theme_support( 'custom-background', array(
		'default-color' => 'F6F8FC',
	) );

	// WooCommerce support.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	// Register navigation menus.
	minamart_register_menus();

	// Register widget areas.
	minamart_register_widgets();

	// Register image sizes.
	minamart_register_image_sizes();
}
add_action( 'after_setup_theme', 'minamart_setup' );

/**
 * Register navigation menus.
 *
 * @return void
 */
function minamart_register_menus() {
	register_nav_menus( array(
		'primary'   => esc_html__( 'Primary Menu', 'minamart' ),
		'secondary' => esc_html_x( 'Secondary Menu', 'minamart' ),
		'mobile'    => esc_html__( 'Mobile Menu', 'minamart' ),
		'footer'    => esc_html__( 'Footer Menu', 'minamart' ),
	) );
}

/**
 * Register widget areas.
 *
 * @return void
 */
function minamart_register_widgets() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'minamart' ),
		'id'            => 'primary-sidebar',
		'description'   => esc_html__( 'Main sidebar widget area', 'minamart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area', 'minamart' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Footer widget area', 'minamart' ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title">',
		'after_title'   => '</h4>',
	) );
}

/**
 * Register custom image sizes.
 *
 * @return void
 */
function minamart_register_image_sizes() {
	// Hero banner image.
	add_image_size( 'minamart-hero', 1920, 600, true );

	// Product thumbnail.
	add_image_size( 'minamart-product-thumb', 400, 400, true );

	// Product medium.
	add_image_size( 'minamart-product-medium', 600, 600, true );

	// Product large.
	add_image_size( 'minamart-product-large', 800, 800, true );

	// Category thumbnail.
	add_image_size( 'minamart-category', 300, 300, true );

	// Blog thumbnail.
	add_image_size( 'minamart-blog', 800, 500, true );

	// Featured image.
	set_post_thumbnail_size( 400, 400, true );
}

/**
 * Set content width.
 *
 * @return void
 */
function minamart_content_width() {
	if ( ! isset( $GLOBALS['content_width'] ) ) {
		$GLOBALS['content_width'] = 1200;
	}
}
add_action( 'wp_head', 'minamart_content_width', 0 );
