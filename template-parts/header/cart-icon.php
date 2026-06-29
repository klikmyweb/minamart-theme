<?php
/**
 * Minamart Theme - Header Cart Icon Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'is_woocommerce' ) ) {
	return;
}
?>
<div class="header-cart">
	<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart-link" title="<?php esc_attr_e( 'View Cart', 'minamart' ); ?>">
		<span class="cart-icon">🛒</span>
		<span class="cart-count" data-count="<?php echo WC()->cart->get_cart_contents_count(); ?>">
			<?php echo WC()->cart->get_cart_contents_count(); ?>
		</span>
	</a>
</div><!-- .header-cart -->
