<?php
/**
 * Minamart Theme - Header Navigation Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'minamart' ); ?>">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu',
		'menu_class'     => 'menu nav-menu',
		'fallback_cb'    => 'wp_page_menu',
		'container'      => false,
	) );
	?>
</nav><!-- #site-navigation -->
