<?php
/**
 * Template part for displaying page content in homepage.php
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 * @version 0.1
 */

?>
<?php
  $category = '/product-category/danh-muc/';
  $url = get_home_url();
?>
<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="section section-list-categories taxonomy-product_cat">
          <div class="container">
            <div class="section-header">
              <div class="title-wrap">
                <h3 class="title">Danh mục</h3>
              </div>
              <div class="actions">
                <a class="link" href="<?php echo $url.$category?>">Xem tất cả
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="section-content bg-white list-categories-inner">
              <div class="layout-grid grid-style-2 columns-8">
                <?php
                $args = array(
                    //'number'     => $number,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'hide_empty' => 0,
                    'parent' => 18,
                    'number' => 8,
                    //'include'    => $ids
                );
                $product_categories = get_terms('product_cat', $args);
                $count = count($product_categories);
                if ($count > 0) {
                    foreach ($product_categories as $product_category) {
                        $product_cat_id = $product_category->term_id;
                        $cat_link = get_category_link($product_cat_id);
                        ?>
                        <div class="item">
                          <a href="<?php echo esc_url(get_term_link($product_category)); ?>" class="item-link" title="<?php $product_category->name?>">
                            <div class="item-thumbnail">
                              <?php
                                    $thumbnail_id = get_term_meta( $product_category->term_id, 'thumbnail_id', true );
                                    if ($thumbnail_id == 0) {
                                      $image = 'wp-content/uploads/woocommerce-placeholder-300x300.png';
                                    } else {
                                      $image = wp_get_attachment_url( $thumbnail_id );
                                    }
                              ?>
                              <noscript>
                                <img class="image" src="<?php echo $image ?>"
                                  alt="<?php $product_category->name?>" />
                              </noscript>
                              <img class="image lazyloaded" src="<?php echo $image ?>"
                                data-src="$image" alt="<?php $product_category->name?>" style="width: 129px; height: 129px;">
                            </div>
                            <div class="item-info">
                              <h2 class="item-title"><?php echo esc_html($product_category->name)?></h2>
                            </div>
                          </a>
                        </div>
                    <?php }
                  }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
