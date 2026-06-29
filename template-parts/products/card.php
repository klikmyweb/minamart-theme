<?php
/**
 * Minamart Theme - Product Card Template Part
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

$product = wc_get_product();
if ( ! $product ) {
	return;
}
?>
<div class="product-card" data-product-id="<?php echo $product->get_id(); ?>">
	<div class="product-image-wrapper">
		<?php
		if ( $product->get_image_id() ) {
			echo wp_kses_post( $product->get_image( 'minamart-product-thumb' ) );
		} else {
			echo wp_kses_post( wc_placeholder_img( 'minamart-product-thumb' ) );
		}
		?>
		<?php
		if ( $product->is_on_sale() ) {
			echo '<span class="product-badge sale-badge">' . esc_html__( 'Sale', 'minamart' ) . '</span>';
		}
		?>
	</div><!-- .product-image-wrapper -->

	<div class="product-info">
		<h3 class="product-title">
			<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
				<?php echo wp_kses_post( $product->get_name() ); ?>
			</a>
		</h3><!-- .product-title -->

		<div class="product-rating">
			<?php
			if ( function_exists( 'wc_get_rating_html' ) ) {
				echo wp_kses_post( wc_get_rating_html( $product->get_average_rating() ) );
			}
			?>
		</div><!-- .product-rating -->

		<div class="product-price">
			<?php echo wp_kses_post( $product->get_price_html() ); ?>
		</div><!-- .product-price -->

		<div class="product-actions">
			<?php
			if ( $product->get_type() === 'simple' ) {
				?>
				<a href="?add-to-cart=<?php echo esc_attr( $product->get_id() ); ?>" class="btn btn-add-cart" data-product-id="<?php echo esc_attr( $product->get_id() ); ?>">
					<?php esc_html_e( 'Add to Cart', 'minamart' ); ?>
				</a>
				<?php
			} else {
				?>
				<a href="<?php echo esc_url( $product->get_permalink() ); ?>" class="btn btn-view">
					<?php esc_html_e( 'View Options', 'minamart' ); ?>
				</a>
				<?php
			}
			?>
		</div><!-- .product-actions -->
	</div><!-- .product-info -->
</div><!-- .product-card -->
