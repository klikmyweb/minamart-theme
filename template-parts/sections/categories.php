<?php
/**
 * Minamart Theme - Categories Section Template Part
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

$limit = isset( $args['limit'] ) ? intval( $args['limit'] ) : 5;

$categories = get_terms( array(
	'taxonomy'   => 'product_cat',
	'hide_empty' => true,
	'number'     => $limit,
	'orderby'    => 'name',
	'order'      => 'ASC',
) );
?>
<section class="categories-section" id="product-categories">
	<div class="section-header">
		<h2 class="section-title"><?php esc_html_e( 'Shop by Category', 'minamart' ); ?></h2>
	</div><!-- .section-header -->

	<div class="categories-grid" data-limit="<?php echo esc_attr( $limit ); ?>">
		<?php
		if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
			foreach ( $categories as $category ) {
				?>
				<div class="category-card">
					<a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="category-link">
						<?php
						if ( $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true ) ) {
							echo wp_kses_post( wp_get_attachment_image( $thumbnail_id, 'minamart-category' ) );
						}
						?>
						<h3 class="category-title"><?php echo esc_html( $category->name ); ?></h3>
						<span class="category-count">
							<?php
							/* translators: %d: Number of products */
							printf( esc_html__( '%d Products', 'minamart' ), $category->count );
							?>
						</span>
					</a>
				</div><!-- .category-card -->
				<?php
			}
		} else {
			echo '<p>' . esc_html__( 'No categories found.', 'minamart' ) . '</p>';
		}
		?>
	</div><!-- .categories-grid -->
</section><!-- .categories-section -->
