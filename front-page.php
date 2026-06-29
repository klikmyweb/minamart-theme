<?php
/**
 * Minamart Theme Front Page Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="main-content homepage">
	<?php
	/**
	 * Homepage sections hook.
	 * Sections will be added via action hooks.
	 */
	do_action( 'minamart_homepage_sections' );
	?>
</main><!-- #main-content -->

<?php
get_footer();
