<?php
/**
 * Minamart Theme - Admin Functions
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add theme support notice in WordPress dashboard.
 *
 * @return void
 */
function minamart_admin_notice() {
	if ( get_option( 'minamart_admin_notice_dismissed' ) ) {
		return;
	}

	?>
	<div class="notice notice-info is-dismissible" id="minamart-admin-notice">
		<p>
			<strong><?php esc_html_e( 'Minamart Theme Activated', 'minamart' ); ?></strong>
			<?php esc_html_e( 'Thank you for using Minamart! Configure the theme settings to get started.', 'minamart' ); ?>
		</p>
	</div>
	<script>
		jQuery(document).on('click', '#minamart-admin-notice .notice-dismiss', function() {
			jQuery.post(ajaxurl, {
				action: 'minamart_dismiss_notice'
			});
		});
	</script>
	<?php
}
add_action( 'admin_notices', 'minamart_admin_notice' );

/**
 * Handle admin notice dismissal.
 *
 * @return void
 */
function minamart_dismiss_admin_notice() {
	if ( check_ajax_referer( 'minamart_nonce', false, false ) ) {
		update_option( 'minamart_admin_notice_dismissed', true );
		wp_die();
	}
}
add_action( 'wp_ajax_minamart_dismiss_notice', 'minamart_dismiss_admin_notice' );

/**
 * Add theme info page in WordPress admin.
 *
 * @return void
 */
function minamart_add_theme_page() {
	add_theme_page(
		esc_html__( 'Minamart Info', 'minamart' ),
		esc_html__( 'Minamart Info', 'minamart' ),
		'manage_options',
		'minamart-info',
		'minamart_render_theme_page'
	);
}
add_action( 'admin_menu', 'minamart_add_theme_page' );

/**
 * Render theme info page.
 *
 * @return void
 */
function minamart_render_theme_page() {
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Minamart Theme', 'minamart' ); ?></h1>
		<p><?php esc_html_e( 'A premium WordPress WooCommerce theme for fresh fish and seafood e-commerce.', 'minamart' ); ?></p>
		<h2><?php esc_html_e( 'Theme Features', 'minamart' ); ?></h2>
		<ul>
			<li><?php esc_html_e( 'Native WooCommerce Support', 'minamart' ); ?></li>
			<li><?php esc_html_e( 'Mobile-First Responsive Design', 'minamart' ); ?></li>
			<li><?php esc_html_e( 'SEO Optimized', 'minamart' ); ?></li>
			<li><?php esc_html_e( 'Performance Optimized', 'minamart' ); ?></li>
			<li><?php esc_html_e( 'Accessibility Ready', 'minamart' ); ?></li>
			<li><?php esc_html_e( 'No Page Builder Bloat', 'minamart' ); ?></li>
		</ul>
		<h2><?php esc_html_e( 'Getting Started', 'minamart' ); ?></h2>
		<ol>
			<li><?php esc_html_e( 'Install and activate WooCommerce plugin', 'minamart' ); ?></li>
			<li><?php esc_html_e( 'Configure WooCommerce settings', 'minamart' ); ?></li>
			<li><?php esc_html_e( 'Add your products', 'minamart' ); ?></li>
			<li><?php esc_html_e( 'Customize theme colors and fonts', 'minamart' ); ?></li>
			<li><?php esc_html_e( 'Set up your homepage', 'minamart' ); ?></li>
		</ol>
	</div>
	<?php
}

/**
 * Add theme customizer sections.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 * @return void
 */
function minamart_customize_register( $wp_customize ) {
	// Add color section
	$wp_customize->add_section(
		'minamart_colors',
		array(
			'title'    => esc_html__( 'Minamart Colors', 'minamart' ),
			'priority' => 30,
		)
	);

	// Add primary color control
	$wp_customize->add_setting(
		'minamart_primary_color',
		array(
			'default'   => '#0B3C5D',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'minamart_primary_color',
			array(
				'label'   => esc_html__( 'Primary Color', 'minamart' ),
				'section' => 'minamart_colors',
			)
		)
	);
}
add_action( 'customize_register', 'minamart_customize_register' );
