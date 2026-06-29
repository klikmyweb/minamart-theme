<?php
/**
 * Minamart Theme - Why Choose Minamart Section Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="why-choose-section" id="why-minamart">
	<div class="why-choose-container">
		<div class="section-header">
			<h2 class="section-title"><?php esc_html_e( 'Why Choose Minamart?', 'minamart' ); ?></h2>
		</div><!-- .section-header -->

		<div class="features-grid">
			<?php
			/**
			 * Why choose features hook.
			 * Output feature cards.
			 */
			do_action( 'minamart_why_choose_features' );
			?>
		</div><!-- .features-grid -->
	</div><!-- .why-choose-container -->
</section><!-- .why-choose-section -->
