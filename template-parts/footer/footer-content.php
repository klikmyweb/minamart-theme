<?php
/**
 * Minamart Theme - Footer Content Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="footer-content-wrapper">
	<div class="footer-widgets-area">
		<?php
		if ( is_active_sidebar( 'footer-widgets' ) ) {
			dynamic_sidebar( 'footer-widgets' );
		}
		?>
	</div><!-- .footer-widgets-area -->

	<div class="footer-bottom-section">
		<div class="footer-menu-wrapper">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_id'        => 'footer-menu',
				'menu_class'     => 'footer-menu-list',
				'fallback_cb'    => false,
				'container'      => false,
			) );
			?>
		</div><!-- .footer-menu-wrapper -->

		<div class="footer-copyright">
			<p>
				<?php
				/* translators: %s: Year */
				printf(
					esc_html__( '&copy; %s %s. All rights reserved.', 'minamart' ),
					date( 'Y' ),
					get_bloginfo( 'name' )
				);
				?>
			</p>
		</div><!-- .footer-copyright -->
	</div><!-- .footer-bottom-section -->
</div><!-- .footer-content-wrapper -->
