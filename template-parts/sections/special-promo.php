<?php
/**
 * Minamart Theme - Special Promo Section Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="special-promo-section" id="special-promo">
	<div class="special-promo-container">
		<?php
		/**
		 * Special promo content hook.
		 * Output special promotion content (flash sale, discounts, etc).
		 */
		do_action( 'minamart_special_promo_content' );
		?>
	</div><!-- .special-promo-container -->
</section><!-- .special-promo-section -->
