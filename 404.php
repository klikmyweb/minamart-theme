<?php
/**
 * Minamart Theme 404 Page Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="main-content error-404">
	<div class="container">
		<div class="error-content">
			<div class="error-code">404</div>
			<h1 class="error-title"><?php esc_html_e( 'Oops! Page Not Found', 'minamart' ); ?></h1>
			<p class="error-description">
				<?php esc_html_e( 'Sorry, the page you are looking for does not exist. It might have been moved or deleted.', 'minamart' ); ?>
			</p>

			<div class="error-actions">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button-primary">
					<?php esc_html_e( 'Go Back to Home', 'minamart' ); ?>
				</a>
				<?php
				if ( class_exists( 'WooCommerce' ) ) {
					?>
					<a href="<?php echo esc_url( wc_get_shop_page_url() ); ?>" class="button-secondary">
						<?php esc_html_e( 'Visit Store', 'minamart' ); ?>
					</a>
					<?php
				}
				?>
			</div><!-- .error-actions -->
		</div><!-- .error-content -->
	</div><!-- .container -->
</main><!-- #main-content -->

<?php
get_footer();
