<?php
/**
 * Minamart Theme - WooCommerce Customization
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

/**
 * Remove default WooCommerce sidebar.
 *
 * @return void
 */
function minamart_remove_wc_sidebar() {
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
}
add_action( 'wp', 'minamart_remove_wc_sidebar' );

/**
 * Change number of related products.
 *
 * @return int Number of products.
 */
function minamart_related_products_args() {
	return array(
		'posts_per_page' => 4,
		'columns'        => 4,
	);
}
add_filter( 'woocommerce_output_related_products_args', 'minamart_related_products_args' );

/**
 * Customize products per page.
 *
 * @param int $products Number of products.
 * @return int Modified number.
 */
function minamart_products_per_page( $products ) {
	$products = 12;
	return $products;
}
add_filter( 'loop_shop_per_page', 'minamart_products_per_page' );

/**
 * Customize shop columns.
 *
 * @return int Number of columns.
 */
function minamart_shop_columns() {
	return 4;
}
add_filter( 'loop_shop_columns', 'minamart_shop_columns' );

/**
 * Customize single product image size.
 *
 * @return array Image dimensions.
 */
function minamart_single_product_image_size() {
	return array(
		'width'  => 800,
		'height' => 800,
	);
}

/**
 * Add custom product fields on frontend.
 *
 * @return void
 */
function minamart_add_product_custom_fields() {
	if ( is_product() ) {
		global $product;
		// Custom product fields can be added here
	}
}
add_action( 'woocommerce_after_single_product_summary', 'minamart_add_product_custom_fields', 5 );

/**
 * Customize add to cart button text.
 *
 * @param string $text Button text.
 * @param WC_Product $product Product object.
 * @return string Modified text.
 */
function minamart_add_to_cart_text( $text, $product ) {
	if ( $product->get_type() === 'simple' ) {
		return esc_html__( 'Add to Cart', 'minamart' );
	}
	return $text;
}
add_filter( 'woocommerce_product_add_to_cart_text', 'minamart_add_to_cart_text', 10, 2 );

/**
 * Customize checkout fields.
 *
 * @param array $fields Checkout fields.
 * @return array Modified fields.
 */
function minamart_customize_checkout_fields( $fields ) {
	// Customize checkout fields if needed
	return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'minamart_customize_checkout_fields' );

/**
 * Add custom tab to product page.
 *
 * @param array $tabs Product tabs.
 * @return array Modified tabs.
 */
function minamart_add_product_tabs( $tabs ) {
	// Add custom tabs if needed
	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'minamart_add_product_tabs' );

/**
 * Customize product placeholder image.
 *
 * @return string Image URL.
 */
function minamart_product_placeholder_image() {
	return wc_placeholder_img_src();
}

/**
 * Enable product search by SKU.
 *
 * @param WP_Query $query WP Query object.
 * @return void
 */
function minamart_search_by_sku( $query ) {
	if ( is_admin() || ! $query->is_search() ) {
		return;
	}

	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	global $wpdb;

	$search_term = $query->get( 's' );
	
	if ( $search_term ) {
		$query->set(
			'meta_query',
			array(
				'relation' => 'OR',
				array(
					'key'     => '_sku',
					'value'   => $search_term,
					'compare' => 'LIKE',
				),
			)
		);
	}
}
add_action( 'pre_get_posts', 'minamart_search_by_sku' );
