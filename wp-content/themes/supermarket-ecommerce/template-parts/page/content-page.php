<?php
/**
 * Template part for displaying page content in page.php
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 * @version 0.1
 */

?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>');?>
		<?php supermarket_ecommerce_edit_link(get_the_ID());?>
	</header>
	<div class="entry-content">
		<?php if (class_exists('woocommerce') && is_front_page()) {?>
    <div class="row">
			<div class="col-lg-3 col-md-4">
				<button class="product-btn"><i class="fa fa-bars" aria-hidden="true"></i><?php echo esc_html_e('Danh mục', 'supermarket-ecommerce'); ?></button>
				<div class="menu-categories">
				<?php
          $args = array(
              //'number'     => $number,
              'orderby' => 'title',
              'order' => 'ASC',
              'hide_empty' => 0,
              'parent' => 18,
              //'include'    => $ids
          );
          $product_categories = get_terms('product_cat', $args);
          $count = count($product_categories);
          if ($count > 0) {
            foreach ($product_categories as $product_category) {
              $product_cat_id = $product_category->term_id;
              $cat_link = get_category_link($product_cat_id);
        ?>
          <div class="menu-category">
            <a class="menu-link-hover" href="<?php echo esc_url(get_term_link($product_category)); ?>">
              <i class="fas fa-angle-double-right"></i>
              <?php echo esc_html($product_category->name); ?>
            </a>
            <div class="menu-div-show">
              <?php
                // $argProduct = array(
                //   'orderby' => 'title',
                //   'order' => 'ASC',
                //   'hide_empty' => 0,
                //   'parent' => $product_cat_id,
                // );
                // $products = get_terms('product', $argProduct);
                // // $countProducts = count($products);
                // echo esc_html($products->name);
                $args = array(
                  'category' => array( $product_category->name ),
                  'orderby'  => 'name',
              );
              $products = wc_get_products( $args );
              $countProducts = count($products);
              if ($products) {
                foreach ($products as $product) {
                  # code...
                  ?>
                    <a style="color: black" class="menu-link-hover" href="<?php echo esc_url(get_term_link($product->get_slug())); ?>">
                      <i class="fas fa-angle-double-right"></i>
                      <?php echo esc_html($product->get_name()); ?>
                    </a>
                <?php }
              }
              ?>
            </div>
          </div>
				<?php
            }
          }
        ?>
				</div>
			</div>
      <div class="col-lg-9 col-md-8">
        <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
      </div>
      </div>
      <?php }?>
		<?php the_post_thumbnail();?>
		<p><?php the_content();?></p>
		<?php
wp_link_pages(array(
    'before' => '<div class="page-links">' . __('Pages:', 'supermarket-ecommerce'),
    'after' => '</div>',
));
?>
	</div>
</article>