<?php
/**
 * Template part for displaying page content in page.php
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 * @version 0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
		<!-- <?php supermarket_ecommerce_edit_link( get_the_ID() ); ?> -->
	</header>
	<div class="entry-content">
		<?php if(class_exists('woocommerce')){ ?>
			<div class="col-lg-3 col-md-4">
				<button class="product-btn"><i class="fa fa-bars" aria-hidden="true"></i><?php echo esc_html_e('Sản phẩm','supermarket-ecommerce'); ?></button>
				<div class="product-cat">
				<?php
					$args = array(
						//'number'     => $number,
						'orderby'    => 'title',
						'order'      => 'ASC',
						'hide_empty' => 0,
						'parent'  => 0
						//'include'    => $ids
					);
					$product_categories = get_terms( 'product_cat', $args );
					$count = count($product_categories);
					if ( $count > 0 ){
						foreach ( $product_categories as $product_category ) {
							$product_cat_id   = $product_category->term_id;
							$cat_link = get_category_link( $product_cat_id );
							// print_r($product_category);
							// $taxonomies = array( 
							// 	'product_category',
							// );
							
							// $args = array(
							// 	'parent'         => $product_cat_id,
							// 	// 'child_of'      => $parent_term_id, 
							// ); 
							
							// $terms = get_terms($taxonomies, $args);
							// print_r($terms);
							if ($product_category->category_parent == 0) { ?>
						<li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
						<?php
						}
						echo esc_html( $product_category->name ); ?></a><i class="fas fa-chevron-right"></i>
						</li>
						<?php
						}
						}
					?>
				</div>
			</div>
		<?php } ?>
		<?php the_post_thumbnail(); ?>
		<p><?php the_content();?></p>
		<?php echo do_shortcode('[smartslider3 slider=2]');?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'supermarket-ecommerce' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>