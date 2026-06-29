<?php
/**
 * Minamart Theme - Header Account Menu Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="header-account">
	<?php
	if ( is_user_logged_in() ) {
		$current_user = wp_get_current_user();
		?>
		<a href="<?php echo esc_url( wc_get_account_endpoint_url( 'dashboard' ) ); ?>" class="account-link" title="<?php esc_attr_e( 'My Account', 'minamart' ); ?>">
			<span class="account-icon">👤</span>
			<span class="account-name"><?php echo esc_html( $current_user->display_name ); ?></span>
		</a>
		<?php
	} else {
		?>
		<a href="<?php echo esc_url( wp_login_url() ); ?>" class="account-link" title="<?php esc_attr_e( 'Login', 'minamart' ); ?>">
			<span class="account-icon">👤</span>
			<span class="account-text"><?php esc_html_e( 'Login', 'minamart' ); ?></span>
		</a>
		<?php
	}
	?>
</div><!-- .header-account -->
