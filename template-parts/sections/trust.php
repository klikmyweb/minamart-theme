<?php
/**
 * Minamart Theme - Trust Section Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="trust-section" id="trust-badges">
	<div class="trust-container">
		<?php
		/**
		 * Trust badges hook.
		 * Output trust/quality badges.
		 */
		do_action( 'minamart_trust_badges' );
		?>
	</div><!-- .trust-container -->
</section><!-- .trust-section -->
