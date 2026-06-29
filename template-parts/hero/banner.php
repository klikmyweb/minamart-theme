<?php
/**
 * Minamart Theme - Hero Banner Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="hero-banner" id="hero-section">
	<div class="hero-container">
		<div class="hero-content">
			<h1 class="hero-title">
				<?php
				/**
				 * Hero banner title hook.
				 * Output the main hero title.
				 */
				do_action( 'minamart_hero_title' );
				?>
			</h1>

			<p class="hero-subtitle">
				<?php
				/**
				 * Hero banner subtitle hook.
				 * Output the hero subtitle/tagline.
				 */
				do_action( 'minamart_hero_subtitle' );
				?>
			</p>

			<a href="<?php echo esc_url( apply_filters( 'minamart_hero_cta_url', '#' ) ); ?>" class="btn btn-primary">
				<?php esc_html_e( 'Shop Now', 'minamart' ); ?>
			</a>
		</div><!-- .hero-content -->

		<div class="hero-image">
			<?php
			/**
			 * Hero banner image hook.
			 * Output the hero image.
			 */
			do_action( 'minamart_hero_image' );
			?>
		</div><!-- .hero-image -->
	</div><!-- .hero-container -->
</section><!-- .hero-banner -->
