<?php
/**
 * Minamart Theme - Sale Products Template Part
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
	'on_sale' => true,
	'orderby' => 'date',
	'order'   => 'DESC',
) );
?>
<section class="sale-products-section">
	<div class="section-header">
		<h2 class="section-title"><?php esc_html_e( 'Special Sale', 'minamart' ); ?></h2>
	</div><!-- .section-header -->

	<div class="sale-products-grid">
		<?php
		if ( ! empty( $products ) ) {
			foreach ( $products as $product ) {
				echo '<div class="sale-product-item">';
					set_query_var( 'product', $product );
					get_template_part( 'template-parts/products/card' );
				echo '</div><!-- .sale-product-item -->';
			}
		} else {
			echo '<p>' . esc_html__( 'No sale products found.', 'minamart' ) . '</p>';
		}
		?>
	</div><!-- .sale-products-grid -->
</section><!-- .sale-products-section -->
