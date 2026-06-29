<?php
/**
 * Minamart Theme Header Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="site-header-inner">
				<div class="site-branding">
					<?php
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} else {
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-text">
							<?php bloginfo( 'name' ); ?>
						</a>
						<?php
					}
					?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'menu',
						'fallback_cb'    => 'wp_page_menu',
					) );
					?>
				</nav><!-- #site-navigation -->

				<div class="site-header-right">
					<button class="search-toggle" aria-label="<?php esc_attr_e( 'Search', 'minamart' ); ?>">
						<span class="search-icon">🔍</span>
					</button>

					<?php
					if ( class_exists( 'WooCommerce' ) ) {
						?>
						<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart-link">
							<span class="cart-icon">🛒</span>
							<span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						</a>
						<?php
					}
					?>

					<a href="<?php echo esc_url( wp_login_url() ); ?>" class="account-link">
						<span class="account-icon">👤</span>
					</a>

					<button class="mobile-menu-toggle" aria-label="<?php esc_attr_e( 'Toggle Mobile Menu', 'minamart' ); ?>">
						<span class="hamburger-icon"></span>
					</button>
				</div><!-- .site-header-right -->
			</div><!-- .site-header-inner -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
