<?php
/**
 * Minamart Theme - WooCommerce Single Product Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );
?>

<main id="main-content" class="main-content single-product-page">
	<div class="container">
		<?php
		/**
		 * woocommerce_before_single_product hook.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked WC_Structured_Data::generate_product_data() - 10
		 */
		do_action( 'woocommerce_before_single_product' );
		?>

		<?php
		if ( post_password_required() ) {
			echo get_the_password_form(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		} else {
			?>
			<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', get_the_ID() ); ?>>
				<?php
				/**
				 * woocommerce_single_product_summary hook.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				?>
			</div><!-- #product -->

			<?php
			/**
			 * woocommerce_after_single_product_summary hook.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
			?>
			<?php
		}

		/**
		 * woocommerce_after_single_product hook.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 */
		do_action( 'woocommerce_after_single_product' );
		?>
	</div><!-- .container -->
</main><!-- #main-content -->

<?php
get_footer( 'shop' );
