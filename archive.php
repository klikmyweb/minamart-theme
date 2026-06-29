<?php
/**
 * Minamart Theme Archive Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="main-content archive-content">
	<div class="container">
		<div class="page-header">
			<h1 class="page-title"><?php the_archive_title(); ?></h1>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</div><!-- .page-header -->

		<div class="content-area">
			<?php
			if ( have_posts() ) {
				echo '<div class="posts-grid">';
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				}
				echo '</div><!-- .posts-grid -->';

				// Post navigation.
				the_posts_pagination( array(
					'mid_size'           => 2,
					'prev_text'          => esc_html__( 'Previous', 'minamart' ),
					'next_text'          => esc_html__( 'Next', 'minamart' ),
					'screen_reader_text' => esc_html__( 'Archive navigation', 'minamart' ),
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
