<?php
/**
 * Template part for displaying page content in page.php
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 * @version 0.1
 */

?>
<?php
  $arrayCategoriesName = array('Áo thun', 'Quần áo bảo hộ lao động', 'Dụng cụ thi công');
  foreach ($arrayCategoriesName as $categoryName) {
?>
<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="section section-list-posts">
          <div class="container">
            <!--section-->
            <div class="section-header">
              <div class="title-wrap">
                <h3 class="title"><?php echo esc_html($categoryName); ?></h3>
              </div>
              <div class="actions">
                <a class="link" href="<?php echo get_permalink( wc_get_page_id( 'danh-muc' ) ); ?>">Xem tất cả
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <!--section-->
            <div class="section-content bg-none list-posts-inner">
              <div class="layout-grid grid-style-1 columns-6 product-section">
                <?php
                    $args = array(
                      'category' => array( $categoryName ),
                      'orderby'  => 'name',
                      'limit' => 12,
                    );
                    $products = wc_get_products( $args );
                    $countProducts = count($products);
                    if ($products) {
                      foreach ($products as $product) {
                        ?>
                <div class="post-item">
                  <div class="item-wrapper product type-product status-publish first instock product_cat-may-anh-may-quay-phim has-post-thumbnail sale shipping-taxable purchasable product-type-variable has-default-attributes">

                    <div class="card full shadow">
                        <a style="color: black" class="menu-link-hover" href="<?php echo esc_url(get_permalink( $product->get_id() )); ?>">
                          <div class="cover-img">
                            <div class="background">
                                  <?php echo $product->get_image()?>
                            </div>
                          </div>
                          <div class="lower-padding item-padding-8">
                            <div class="text-name">
                              <h4 class="product-name">
                                <?php echo esc_html($product->get_name()); ?>
                            </h4>
                            </div>
                            <div class="price">
                              <div class="original-price"><?php echo esc_html($product->get_regular_price()); ?>&nbsp;
                                <span class="currency-symbol">₫</span>
                              </div>
                              <div class="price-gap"></div>
                              <div class="current-price"><?php echo esc_html($product->get_price()); ?>&nbsp;
                                <span class="currency-symbol">₫</span>
                              </div>
                              <div class="spacer"></div>
                            </div>
                            <div class="extra-badge-wrapper"></div>
                            <div>
                              <div class="section-actions">
                                <div class="btn-likes">
                                  <i class="fa fa-heart-o" aria-hidden="true"></i>
                                  <div class="text">1</div>
                                </div>
                                <div class="btn-gap"></div>
                                <div class="btn-comments">
                                  <div class="rating">
                                    <span class="rating-count">Chưa có đánh giá</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </a>
                    </div>
                  </div>
                </div>
                <?php }
                    } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
<?php }?>
