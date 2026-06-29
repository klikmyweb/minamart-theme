<?php
/**
 * Minamart Theme Single Post Template
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
		<div class="content-area">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>
				<header class="entry-header">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'minamart-blog', array( 'class' => 'entry-image' ) );
					}
					?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-meta">
						<span class="entry-date">📅 <?php echo get_the_date(); ?></span>
						<span class="entry-author">✍️ <?php the_author_posts_link(); ?></span>
					</div><!-- .entry-meta -->
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

				<footer class="entry-footer">
					<div class="entry-tags">
						<?php the_tags( '<span class="tag-label">' . esc_html__( 'Tags:', 'minamart' ) . '</span> ', ', ' ); ?>
					</div><!-- .entry-tags -->

					<div class="entry-categories">
						<span class="category-label"><?php esc_html_e( 'Categories:', 'minamart' ); ?></span>
						<?php the_category( ', ' ); ?>
					</div><!-- .entry-categories -->
				</footer><!-- .entry-footer -->
			</article><!-- #post -->

			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

			<nav class="post-navigation">
				<?php
				the_post_navigation( array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous Post', 'minamart' ) . '</span><span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Post', 'minamart' ) . '</span><span class="nav-title">%title</span>',
				) );
				?>
			</nav><!-- .post-navigation -->
		</div><!-- .content-area -->
	</div><!-- .container -->
</main><!-- #main-content -->

<?php
get_footer();
