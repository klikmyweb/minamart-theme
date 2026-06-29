<?php
/**
 * Minamart Theme - Featured Products Template Part
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
	'limit'   => $limit,
	'meta_key' => '_featured',
	'meta_value' => 'yes',
	'orderby' => 'date',
	'order'   => 'DESC',
) );
?>
<section class="featured-products-section">
	<div class="section-header">
		<h2 class="section-title"><?php esc_html_e( 'Featured Products', 'minamart' ); ?></h2>
	</div><!-- .section-header -->

	<div class="featured-products-grid">
		<?php
		if ( ! empty( $products ) ) {
			foreach ( $products as $product ) {
				echo '<div class="featured-product-item">';
					set_query_var( 'product', $product );
					get_template_part( 'template-parts/products/card' );
				echo '</div><!-- .featured-product-item -->';
			}
		} else {
			echo '<p>' . esc_html__( 'No featured products found.', 'minamart' ) . '</p>';
		}
		?>
	</div><!-- .featured-products-grid -->
</section><!-- .featured-products-section -->
