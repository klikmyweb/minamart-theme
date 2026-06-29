<?php
/**
 * Minamart Theme Page Template
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="main-content">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages( array(
					'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'minamart' ),
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
				?>
			</div><!-- .entry-content -->

			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		</article><!-- #post -->
	</div><!-- .container -->
</main><!-- #main-content -->

<?php
get_footer();
