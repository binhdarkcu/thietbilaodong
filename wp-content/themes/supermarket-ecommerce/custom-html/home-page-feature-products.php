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
  $sanPham = '/product-category/san-pham/';
  $url = get_home_url();
?>
<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"
  style="position: relative; left: -345px; box-sizing: border-box; width: 1920px;">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="section section-list-categories taxonomy-product_cat">
          <div class="container">
            <div class="section-header">
              <div class="title-wrap">
                <h3 class="title">Sản phẩm mới</h3>
              </div>
              <div class="actions">
                <a class="link" href="<?php echo $url.$sanPham?>">Xem tất cả
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="section-content bg-white list-categories-inner">
              <div class="layout-grid grid-style-2 columns-8">
                <?php
                $args = array(
                  'category' => array( 'Sản phẩm' ),
                  'orderby'  => 'modified',
                  'order' => 'DESC',
                  'limit' => 8,
                );
                $products = wc_get_products( $args );
                $countProducts = count($products);
                if ($products) {
                  foreach ($products as $product) {
                        ?>
                        <div class="item">
                          <a href="<?php echo esc_url(get_permalink( $product->get_id() )); ?>" class="item-link" title="<?php $product->get_name(); ?>">
                            <div class="item-thumbnail">
                              <!-- <noscript>
                                <img class="image" src="https://store.vietfriend.info/wp-content/uploads/2019/05/dien-thoai-thiet-bi.png"
                                  alt="<?php $product->get_name(); ?>" />
                              </noscript>
                              <img class="image lazyloaded" src="https://store.vietfriend.info/wp-content/uploads/2019/05/dien-thoai-thiet-bi.png"
                                data-src="https://store.vietfriend.info/wp-content/uploads/2019/05/dien-thoai-thiet-bi.png" alt="<?php $product_category->name?>"> -->
                                <?php echo $product->get_image()?>
                            </div>
                            <div class="item-info">
                              <h2 class="item-title"><?php echo esc_html( $product->get_name() ); ?></h2>
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