<?php
/**
 * Minamart Theme - WooCommerce Archive Product Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );
?>

<main id="main-content" class="main-content shop-page">
	<div class="container">
		<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action( 'woocommerce_before_main_content' );
		?>

		<header class="woocommerce-products-header">
			<?php
			if ( apply_filters( 'woocommerce_show_page_title', true ) ) {
				?>
				<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
				<?php
			}

			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
			?>
		</header><!-- .woocommerce-products-header -->

		<?php
		if ( woocommerce_product_loop() ) {
			?>
			<div class="woocommerce-notices-wrapper">
				<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
				?>
			</div><!-- .woocommerce-notices-wrapper -->

			<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook.
			 */
			echo '<ul class="products">';
			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();
					/**
					 * woocommerce_shop_loop hook.
					 *
					 * @hooked woocommerce_template_loop_product_link_open - 10
					 * @hooked woocommerce_template_loop_product_thumbnail - 10
					 * @hooked woocommerce_template_loop_product_link_close - 5
					 * @hooked woocommerce_template_loop_product_title - 10
					 * @hooked woocommerce_template_loop_product_rating - 10
					 * @hooked woocommerce_template_loop_product_price - 10
					 * @hooked woocommerce_template_loop_add_to_cart - 10
					 * @hooked woocommerce_template_loop_product_link_close - 5
					 */
					do_action( 'woocommerce_shop_loop' );
				}
			}

			woocommerce_product_loop_end();
			echo '</ul>';

			/**
			 * woocommerce_after_shop_loop hook.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
			?>
			<?php
		} else {
			/**
			 * woocommerce_no_products_found hook.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}

		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs)
		 */
		do_action( 'woocommerce_after_main_content' );
		?>
	</div><!-- .container -->
</main><!-- #main-content -->

<?php
get_footer( 'shop' );
