<?php
/**
 * Minamart Theme - Performance Optimization
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Defer non-critical CSS loading.
 *
 * @param string $tag Script tag.
 * @param string $handle Script handle.
 * @return string Modified script tag.
 */
function minamart_defer_css( $tag, $handle ) {
	if ( in_array( $handle, array( 'minamart-animations', 'minamart-responsive' ), true ) ) {
		$tag = str_replace( "rel='stylesheet'", "rel='stylesheet' media='print' onload='this.media=\"all\"'", $tag );
	}
	return $tag;
}
add_filter( 'style_loader_tag', 'minamart_defer_css', 10, 2 );

/**
 * Defer JavaScript loading.
 *
 * @param string $tag Script tag.
 * @param string $handle Script handle.
 * @return string Modified script tag.
 */
function minamart_defer_js( $tag, $handle ) {
	if ( in_array( $handle, array( 'minamart-animations', 'minamart-products' ), true ) ) {
		$tag = str_replace( ' src', ' defer src', $tag );
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'minamart_defer_js', 10, 2 );

/**
 * Lazy load images.
 *
 * @return void
 */
function minamart_lazy_load_images() {
	if ( function_exists( 'wp_lazy_loading_enabled' ) ) {
		add_filter( 'wp_img_tag_add_loading_attr', '__return_true' );
	}
}
add_action( 'wp_head', 'minamart_lazy_load_images' );

/**
 * Optimize image output.
 *
 * @param string $html Image HTML.
 * @return string Modified image HTML.
 */
function minamart_optimize_images( $html ) {
	return str_replace( 'class="', 'class="lazy-image ', $html );
}
add_filter( 'image_send_to_editor', 'minamart_optimize_images' );

/**
 * Remove unnecessary WordPress head elements.
 *
 * @return void
 */
function minamart_clean_wp_head() {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
}
add_action( 'init', 'minamart_clean_wp_head' );

/**
 * Disable emoji scripts.
 *
 * @return void
 */
function minamart_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'minamart_disable_emojis' );

/**
 * Preconnect to external domains.
 *
 * @return void
 */
function minamart_add_preconnect() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'minamart_add_preconnect' );

/**
 * Cache management for WooCommerce.
 *
 * @return void
 */
function minamart_wc_cache_optimization() {
	if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
		// Cache shop pages for 1 hour
		header( 'Cache-Control: public, max-age=3600' );
	}
}
add_action( 'wp', 'minamart_wc_cache_optimization' );
