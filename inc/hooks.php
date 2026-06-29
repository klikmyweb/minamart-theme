<?php
/**
 * Minamart Theme Hooks and Filters
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Custom hooks for Minamart theme.
 * Action hooks and filter hooks are defined here.
 */

// Remove unnecessary WooCommerce defaults.
if ( class_exists( 'WooCommerce' ) ) {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
}

/**
 * Skip link for screen readers.
 *
 * @return void
 */
function minamart_skip_link() {
	?>
	<a href="#main-content" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to content', 'minamart' ); ?></a>
	<?php
}
add_action( 'wp_body_open', 'minamart_skip_link' );
