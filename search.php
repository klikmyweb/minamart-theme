<?php
/**
 * Minamart Theme Search Results Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="main-content search-content">
	<div class="container">
		<div class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: Search query */
				printf(
					esc_html__( 'Search Results for: %s', 'minamart' ),
					'<span class="search-query">' . get_search_query() . '</span>'
				);
				?>
			</h1>
		</div><!-- .page-header -->

		<div class="content-area">
			<?php
			if ( have_posts() ) {
				echo '<div class="search-results">';
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'search' );
				}
				echo '</div><!-- .search-results -->';

				// Post navigation.
				the_posts_pagination( array(
					'mid_size'           => 2,
					'prev_text'          => esc_html__( 'Previous', 'minamart' ),
					'next_text'          => esc_html__( 'Next', 'minamart' ),
					'screen_reader_text' => esc_html__( 'Search navigation', 'minamart' ),
				) );
			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
			?>
		</div><!-- .content-area -->
	</div><!-- .container -->
</main><!-- #main-content -->

<?php
get_footer();
