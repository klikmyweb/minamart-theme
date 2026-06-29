<?php
/**
 * Minamart Theme Helper Functions
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get custom logo HTML.
 *
 * @param array $args Arguments for logo.
 * @return string Logo HTML.
 */
function minamart_get_logo( $args = array() ) {
	$defaults = array(
		'class' => 'site-logo',
		'size'  => 'full',
	);

	$args = wp_parse_args( $args, $defaults );

	if ( function_exists( 'the_custom_logo' ) ) {
		return get_custom_logo();
	}

	return '';
}

/**
 * Display site logo.
 *
 * @return void
 */
function minamart_the_logo() {
	echo minamart_get_logo();
}

/**
 * Get theme color.
 *
 * @param string $color Color key.
 * @return string Color hex value.
 */
function minamart_get_color( $color = 'primary' ) {
	$colors = array(
		'primary'     => '#0B3C5D',
		'secondary'   => '#00A651',
		'background'  => '#F6F8FC',
		'text-dark'   => '#1A1A1A',
		'text-light'  => '#666666',
		'border'      => '#E5E5E5',
		'success'     => '#00A651',
		'warning'     => '#FF9800',
	);

	return isset( $colors[ $color ] ) ? $colors[ $color ] : $colors['primary'];
}

/**
 * Check if WooCommerce is active.
 *
 * @return bool True if WooCommerce is active.
 */
function minamart_is_woocommerce_active() {
	return class_exists( 'WooCommerce' );
}

/**
 * Get product categories.
 *
 * @param array $args Query arguments.
 * @return array Product categories.
 */
function minamart_get_product_categories( $args = array() ) {
	if ( ! minamart_is_woocommerce_active() ) {
		return array();
	}

	$defaults = array(
		'taxonomy'   => 'product_cat',
		'orderby'    => 'name',
		'order'      => 'ASC',
		'hide_empty' => true,
	);

	$args = wp_parse_args( $args, $defaults );

	return get_terms( $args );
}

/**
 * Get featured products.
 *
 * @param int $limit Number of products to get.
 * @return array Featured products.
 */
function minamart_get_featured_products( $limit = 8 ) {
	if ( ! minamart_is_woocommerce_active() ) {
		return array();
	}

	$args = array(
		'post_type'      => 'product',
		'posts_per_page' => $limit,
		'meta_key'       => '_featured',
		'meta_value'     => 'yes',
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	return get_posts( $args );
}

/**
 * Get best seller products.
 *
 * @param int $limit Number of products to get.
 * @return array Best seller products.
 */
function minamart_get_best_sellers( $limit = 8 ) {
	if ( ! minamart_is_woocommerce_active() ) {
		return array();
	}

	$args = array(
		'post_type'      => 'product',
		'posts_per_page' => $limit,
		'meta_key'       => 'total_sales',
		'orderby'        => 'meta_value_num',
		'order'          => 'DESC',
	);

	return get_posts( $args );
}

/**
 * Check if page is homepage.
 *
 * @return bool True if current page is homepage.
 */
function minamart_is_homepage() {
	return is_front_page();
}

/**
 * Check if page is single product.
 *
 * @return bool True if current page is single product.
 */
function minamart_is_product_page() {
	return function_exists( 'is_product' ) && is_product();
}

/**
 * Check if page is shop page.
 *
 * @return bool True if current page is shop.
 */
function minamart_is_shop_page() {
	return function_exists( 'is_shop' ) && is_shop();
}

/**
 * Escape and sanitize text output.
 *
 * @param string $text Text to escape.
 * @return string Escaped text.
 */
function minamart_escape_text( $text ) {
	return wp_kses_post( $text );
}
