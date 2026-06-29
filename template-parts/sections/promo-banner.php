<?php
/**
 * Minamart Theme - Promo Banner Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="promo-banner" id="promo-section">
	<div class="promo-container">
		<div class="promo-content">
			<?php
			/**
			 * Promo banner content hook.
			 * Output promotional message and CTA.
			 */
			do_action( 'minamart_promo_banner_content' );
			?>
		</div><!-- .promo-content -->
	</div><!-- .promo-container -->
</section><!-- .promo-banner -->
