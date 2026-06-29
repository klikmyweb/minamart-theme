<?php
/**
 * Minamart Theme - Security Functions
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Remove WordPress version from header.
 *
 * @return void
 */
function minamart_remove_wp_version() {
	return '';
}
add_filter( 'the_generator', 'minamart_remove_wp_version' );

/**
 * Disable XML-RPC if not needed.
 *
 * @return void
 */
function minamart_disable_xmlrpc() {
	add_filter( 'xmlrpc_enabled', '__return_false' );
}
add_action( 'wp_loaded', 'minamart_disable_xmlrpc' );

/**
 * Sanitize user input.
 *
 * @param mixed $data Data to sanitize.
 * @return mixed Sanitized data.
 */
function minamart_sanitize_input( $data ) {
	if ( is_array( $data ) ) {
		return array_map( 'minamart_sanitize_input', $data );
	}
	return sanitize_text_field( $data );
}

/**
 * Escape output for HTML.
 *
 * @param string $text Text to escape.
 * @return string Escaped text.
 */
function minamart_escape_html( $text ) {
	return wp_kses_post( $text );
}

/**
 * Escape URL for output.
 *
 * @param string $url URL to escape.
 * @return string Escaped URL.
 */
function minamart_escape_url( $url ) {
	return esc_url( $url );
}

/**
 * Verify nonce for security.
 *
 * @param string $nonce Nonce value.
 * @param string $action Action name.
 * @return bool True if nonce is valid.
 */
function minamart_verify_nonce( $nonce, $action ) {
	return wp_verify_nonce( $nonce, $action );
}

/**
 * Create nonce for security.
 *
 * @param string $action Action name.
 * @return string Nonce value.
 */
function minamart_create_nonce( $action ) {
	return wp_create_nonce( $action );
}

/**
 * Sanitize post data.
 *
 * @param array $data Post data.
 * @return array Sanitized data.
 */
function minamart_sanitize_post_data( $data ) {
	$sanitized = array();
	
	foreach ( $data as $key => $value ) {
		$sanitized[ sanitize_key( $key ) ] = sanitize_text_field( $value );
	}
	
	return $sanitized;
}

/**
 * Check user capabilities.
 *
 * @param string $capability Capability to check.
 * @return bool True if user has capability.
 */
function minamart_user_can( $capability ) {
	return current_user_can( $capability );
}
