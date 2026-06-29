<?php
/**
 * Minamart Theme - Utility Functions
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get all site colors.
 *
 * @return array Color palette.
 */
function minamart_get_colors() {
	return array(
		'primary'     => '#0B3C5D',
		'secondary'   => '#00A651',
		'background'  => '#F6F8FC',
		'text-dark'   => '#1A1A1A',
		'text-light'  => '#666666',
		'border'      => '#E5E5E5',
		'success'     => '#00A651',
		'warning'     => '#FF9800',
		'error'       => '#E74C3C',
		'info'        => '#3498DB',
	);
}

/**
 * Get spacing scale.
 *
 * @return array Spacing values.
 */
function minamart_get_spacing() {
	return array(
		'xs'      => '4px',
		'sm'      => '8px',
		'md'      => '12px',
		'lg'      => '16px',
		'xl'      => '20px',
		'xxl'     => '24px',
		'huge'    => '32px',
		'massive' => '40px',
		'giant'   => '48px',
	);
}

/**
 * Get theme version.
 *
 * @return string Theme version.
 */
function minamart_get_version() {
	return defined( 'MINAMART_VERSION' ) ? MINAMART_VERSION : '1.0.0';
}

/**
 * Get theme URL.
 *
 * @return string Theme URL.
 */
function minamart_get_theme_uri() {
	return defined( 'MINAMART_URI' ) ? MINAMART_URI : get_template_directory_uri();
}

/**
 * Get theme directory.
 *
 * @return string Theme directory.
 */
function minamart_get_theme_dir() {
	return defined( 'MINAMART_DIR' ) ? MINAMART_DIR : get_template_directory();
}

/**
 * Get template part with custom variables.
 *
 * @param string $slug Template slug.
 * @param string $name Template name.
 * @param array $args Template arguments.
 * @return void
 */
function minamart_get_template_part( $slug, $name = '', $args = array() ) {
	if ( ! empty( $args ) ) {
		extract( $args );
	}

	$template = locate_template( "template-parts/{$slug}/{$name}.php" );

	if ( $template ) {
		include $template;
	}
}

/**
 * Get page title with fallback.
 *
 * @return string Page title.
 */
function minamart_get_page_title() {
	if ( is_home() ) {
		return get_bloginfo( 'name' );
	} elseif ( is_archive() ) {
		return get_the_archive_title();
	} elseif ( is_search() ) {
		return sprintf( esc_html__( 'Search Results for: %s', 'minamart' ), get_search_query() );
	} elseif ( is_404() ) {
		return esc_html__( 'Page Not Found', 'minamart' );
	}
	return get_the_title();
}

/**
 * Format currency for display.
 *
 * @param float $amount Amount to format.
 * @return string Formatted amount.
 */
function minamart_format_currency( $amount ) {
	if ( function_exists( 'wc_price' ) ) {
		return wc_price( $amount );
	}
	return sprintf( '%.2f', $amount );
}

/**
 * Get average product rating.
 *
 * @param int $product_id Product ID.
 * @return float Average rating.
 */
function minamart_get_product_rating( $product_id ) {
	if ( ! function_exists( 'wc_get_product' ) ) {
		return 0;
	}

	$product = wc_get_product( $product_id );

	if ( $product ) {
		return $product->get_average_rating();
	}

	return 0;
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
 * Get blog excerpt length.
 *
 * @return int Excerpt length.
 */
function minamart_excerpt_length() {
	return 30;
}
add_filter( 'excerpt_length', 'minamart_excerpt_length' );

/**
 * Customize excerpt more text.
 *
 * @return string More text.
 */
function minamart_excerpt_more() {
	return ' ...';
}
add_filter( 'excerpt_more', 'minamart_excerpt_more' );
