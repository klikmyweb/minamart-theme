<?php
/**
 * Minamart Theme - No Content Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="no-content">
	<h2><?php esc_html_e( 'Nothing Found', 'minamart' ); ?></h2>
	<p>
		<?php
		if ( is_search() ) {
			esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'minamart' );
		} else {
			esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'minamart' );
		}
		?>
	</p>
	<?php get_search_form(); ?>
</div><!-- .no-content -->
