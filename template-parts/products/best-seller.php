<?php
/**
 * Minamart Theme - Best Seller Products Template Part
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

$limit = isset( $args['limit'] ) ? intval( $args['limit'] ) : 8;

$products = wc_get_products( array(
	'limit'    => $limit,
	'meta_key' => 'total_sales',
	'orderby'  => 'meta_value_num',
	'order'    => 'DESC',
) );
?>
<section class="best-seller-products-section">
	<div class="section-header">
		<h2 class="section-title"><?php esc_html_e( 'Best Sellers', 'minamart' ); ?></h2>
	</div><!-- .section-header -->

	<div class="best-seller-products-grid">
		<?php
		if ( ! empty( $products ) ) {
			foreach ( $products as $product ) {
				echo '<div class="best-seller-product-item">';
					set_query_var( 'product', $product );
					get_template_part( 'template-parts/products/card' );
				echo '</div><!-- .best-seller-product-item -->';
			}
		} else {
			echo '<p>' . esc_html__( 'No best seller products found.', 'minamart' ) . '</p>';
		}
		?>
	</div><!-- .best-seller-products-grid -->
</section><!-- .best-seller-products-section -->
