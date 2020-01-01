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
  $arrayCategoriesName = array('Áo thun', 'Quần áo bảo hộ', 'Dụng cụ thi công');
  foreach ($arrayCategoriesName as $categoryName) {
?>
<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: -345px; box-sizing: border-box; width: 1920px;">
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
                <a class="link" href="<?php echo get_permalink( wc_get_page_id( 'san-pham' ) ); ?>">Xem tất cả
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <!--section-->
            <div class="section-content bg-none list-posts-inner">
              <div class="layout-grid grid-style-1 columns-6">
                <?php
                    $args = array(
                      'category' => array( $categoryName ),
                      'orderby'  => 'name',
                      'number' => 12,
                    );
                    $products = wc_get_products( $args );
                    $countProducts = count($products);
                    if ($products) {
                      foreach ($products as $product) {
                        ?>
                <div class="post-item">
                  <div class="item-wrapper product type-product status-publish first instock product_cat-may-anh-may-quay-phim has-post-thumbnail sale shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div data-action="alg-wc-wl-toggle" class="alg-wc-wl-btn add alg-wc-wl-thumb-btn alg-wc-wl-thumb-btn-abs alg-wc-wl-thumb-btn-loop"
                      style="left: 17px; top: 17px; right: auto; bottom: auto; display: block;">
                      <div class="alg-wc-wl-view-state alg-wc-wl-view-state-add">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                      </div>
                      <div class="alg-wc-wl-view-state alg-wc-wl-view-state-remove">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                      </div>
                      <i class="loading fa fa-refresh fa-spin fa-fw"></i>
                    </div>
                    <div class="card full shadow">
                      <div class="cover-img">
                        <div class="background">
                          <!-- <noscript>
                            <img class="image" src="<?php echo $product->get_image()?>" alt="<?php echo esc_html($product->get_name()); ?>"
                              onerror="this.onerror=null;this.src='https://store.vietfriend.info/wp-content/uploads/woocommerce-placeholder.png';"
                            />
                          </noscript>
                          <img class="image lazyloaded" src="<?php echo $product->get_image()?>" data-src="<?php echo $product->get_image()?>"
                            alt="Camera thể thao SJCam SJ7 Star 4K Wifi 123" onerror="this.onerror=null;this.src='https://store.vietfriend.info/wp-content/uploads/woocommerce-placeholder.png';"> -->
                              <?php echo $product->get_image()?>
                        </div>
                      </div>
                      <div class="lower-padding">
                        <div class="text-name">
                          <a style="color: black" class="menu-link-hover" href="<?php echo esc_url(get_term_link($product->get_slug())); ?>">
                            <?php echo esc_html($product->get_name()); ?>
                          </a>
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
                          <div class="badge-wrapper">
                            <div class="badge fixed-width promotion">
                              <div class="label-wrapper">
                                <span class="off-label">Giảm</span>
                                <span class="percent"><?php echo esc_html($product->get_sale_price()); ?></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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