<?php
/**
 * Minamart Theme - Product Grid Template Part
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

$args = wp_parse_args( $args, array(
	'posts_per_page' => 8,
	'orderby'        => 'date',
	'order'          => 'DESC',
	'columns'        => 4,
) );

$products = wc_get_products( $args );
?>
<div class="products-grid" data-columns="<?php echo esc_attr( $args['columns'] ); ?>">
	<?php
	if ( ! empty( $products ) ) {
		foreach ( $products as $product ) {
			echo '<div class="product-grid-item">';
				set_query_var( 'product', $product );
				get_template_part( 'template-parts/products/card' );
			echo '</div><!-- .product-grid-item -->';
		}
	} else {
		echo '<p>' . esc_html__( 'No products found.', 'minamart' ) . '</p>';
	}
	?>
</div><!-- .products-grid -->
