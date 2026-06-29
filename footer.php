<?php
/**
 * Minamart Theme Footer Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	</div><!-- #content .site-content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-content">
			<div class="footer-inner">
				<div class="footer-widgets">
					<?php
					if ( is_active_sidebar( 'footer-widgets' ) ) {
						dynamic_sidebar( 'footer-widgets' );
					}
					?>
				</div><!-- .footer-widgets -->

				<div class="footer-bottom">
					<div class="footer-menu">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
							'menu_class'     => 'footer-menu-list',
							'fallback_cb'    => false,
						) );
						?>
					</div><!-- .footer-menu -->

					<div class="site-info">
						<p class="copyright">
							<?php
							/* translators: %s: Year */
							printf(
								esc_html__( '&copy; %s %s. All rights reserved.', 'minamart' ),
							date( 'Y' ),
							get_bloginfo( 'name' )
							);
							?>
						</p>
					</div><!-- .site-info -->
				</div><!-- .footer-bottom -->
			</div><!-- .footer-inner -->
		</div><!-- .footer-content -->

		<!-- WhatsApp Button -->
		<div id="whatsapp-button" class="floating-whatsapp">
			<a href="https://wa.me/" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Chat with us on WhatsApp', 'minamart' ); ?>">
				<span class="whatsapp-icon">💬</span>
			</a>
		</div><!-- #whatsapp-button -->
	</footer><!-- #colophon -->
	</div><!-- #page .site -->

	<?php wp_footer(); ?>
</body>
</html>
