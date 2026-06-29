<?php
/**
 * Minamart Theme - WooCommerce Loop Product Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! $product ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 */
	do_action( 'woocommerce_before_shop_loop_item' );
	?>

	<a href="<?php echo esc_url( $product->get_permalink() ); ?>" class="woocommerce-loop-product__link">
		<?php
		/**
		 * woocommerce_before_shop_loop_item_title hook.
		 *
		 * @hooked woocommerce_show_product_loop_sale_flash - 10
		 * @hooked woocommerce_template_loop_product_thumbnail - 10
		 */
		do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
		
		<h3 class="woocommerce-loop-product__title"><?php echo wp_kses_post( $product->get_name() ); ?></h3>

		<?php
		/**
		 * woocommerce_after_shop_loop_item_title hook.
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_product_price - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
	</a>

	<?php
	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
