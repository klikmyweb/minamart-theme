<?php
/**
 * Minamart Theme - Newsletter Section Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="newsletter-section" id="newsletter-signup">
	<div class="newsletter-container">
		<div class="newsletter-content">
			<h2 class="newsletter-title"><?php esc_html_e( 'Subscribe to Our Newsletter', 'minamart' ); ?></h2>
			<p class="newsletter-description">
				<?php esc_html_e( 'Get updates on new products and upcoming sales', 'minamart' ); ?>
			</p>

			<?php
			/**
			 * Newsletter form hook.
			 * Output newsletter subscription form.
			 */
			do_action( 'minamart_newsletter_form' );
			?>
		</div><!-- .newsletter-content -->
	</div><!-- .newsletter-container -->
</section><!-- .newsletter-section -->
