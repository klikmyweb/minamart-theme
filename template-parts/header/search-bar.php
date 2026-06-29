<?php
/**
 * Minamart Theme - Header Search Bar Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="search-bar-wrapper">
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="screen-reader-text"><?php esc_html_e( 'Search', 'minamart' ); ?></label>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search products...', 'minamart' ); ?>" value="<?php the_search_query(); ?>" name="s" />
		<button type="submit" class="search-submit" aria-label="<?php esc_attr_e( 'Search', 'minamart' ); ?>">
			<?php esc_html_e( 'Search', 'minamart' ); ?>
		</button>
	</form><!-- .search-form -->
</div><!-- .search-bar-wrapper -->
