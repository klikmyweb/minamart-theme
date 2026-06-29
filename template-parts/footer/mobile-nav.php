<?php
/**
 * Minamart Theme - Mobile Navigation Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="mobile-navigation" class="mobile-nav" aria-label="<?php esc_attr_e( 'Mobile Menu', 'minamart' ); ?>">
	<nav class="mobile-nav-menu">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'mobile',
			'menu_id'        => 'mobile-menu',
			'menu_class'     => 'mobile-menu-list',
			'fallback_cb'    => 'wp_page_menu',
			'container'      => false,
		) );
		?>
	</nav><!-- .mobile-nav-menu -->
</div><!-- #mobile-navigation -->
