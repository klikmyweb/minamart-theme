<?php
/**
 * Minamart Theme - Testimonials Section Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="testimonials-section" id="customer-testimonials">
	<div class="testimonials-container">
		<div class="section-header">
			<h2 class="section-title"><?php esc_html_e( 'What Our Customers Say', 'minamart' ); ?></h2>
		</div><!-- .section-header -->

		<div class="testimonials-carousel">
			<?php
			/**
			 * Customer testimonials hook.
			 * Output customer testimonial cards.
			 */
			do_action( 'minamart_customer_testimonials' );
			?>
		</div><!-- .testimonials-carousel -->
	</div><!-- .testimonials-container -->
</section><!-- .testimonials-section -->
