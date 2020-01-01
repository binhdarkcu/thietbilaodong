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
      <div class="col-lg-9 col-md-8">
        <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
      </div>
      </div>
      <?php }?>
		<?php the_post_thumbnail();?>
		<div class="wpb_wrapper">
   <div class="section section-list-posts">
      <div class="container">
         <div class="section-header">
            <div class="title-wrap">
               <h3 class="title">Hàng mới về</h3>
            </div>
            <div class="actions"><a class="link" href="https://store.vietfriend.info/cua-hang/">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
         </div>
         <div class="section-content bg-none list-posts-inner">
            <div class="layout-grid grid-style-1 columns-6">
               <div class="post-item">
                  <div class="item-wrapper product type-product post-125 status-publish first instock product_cat-may-anh-may-quay-phim has-post-thumbnail sale shipping-taxable purchasable product-type-variable has-default-attributes">
                     <div data-item_id="125" data-action="alg-wc-wl-toggle" class="alg-wc-wl-btn add alg-wc-wl-thumb-btn alg-wc-wl-thumb-btn-abs alg-wc-wl-thumb-btn-loop" style="left: 17px; top: 17px; right: auto; bottom: auto; display: block;">
                        <div class="alg-wc-wl-view-state alg-wc-wl-view-state-add"> <i class="fa fa-heart" aria-hidden="true"></i></div>
                        <div class="alg-wc-wl-view-state alg-wc-wl-view-state-remove"> <i class="fa fa-heart" aria-hidden="true"></i></div>
                        <i class="loading fa fa-refresh fa-spin fa-fw"></i>
                     </div>
                     <a class="link" href="https://store.vietfriend.info/camera-the-thao-sjcam-sj7-star-4k-wifi/" title="Camera thể thao SJCam SJ7 Star 4K Wifi 123">
                        <div class="card full shadow">
                           <div class="cover-img">
                              <div class="background">
                                 <noscript><img class="image" src="https://store.vietfriend.info/wp-content/uploads/2018/06/SJ7-black-n-300x300.jpg" alt="Camera thể thao SJCam SJ7 Star 4K Wifi 123" onerror="this.onerror=null;this.src='https://store.vietfriend.info/wp-content/uploads/woocommerce-placeholder.png';"/></noscript>
                                 <img class="image lazyloaded" src="https://store.vietfriend.info/wp-content/uploads/2018/06/SJ7-black-n-300x300.jpg" data-src="https://store.vietfriend.info/wp-content/uploads/2018/06/SJ7-black-n-300x300.jpg" alt="Camera thể thao SJCam SJ7 Star 4K Wifi 123" onerror="this.onerror=null;this.src='https://store.vietfriend.info/wp-content/uploads/woocommerce-placeholder.png';">
                              </div>
                           </div>
                           <div class="lower-padding">
                              <div class="text-name"> Camera thể thao SJCam SJ7 Star 4K Wifi 123</div>
                              <div class="price">
                                 <div class="original-price">4.500.000&nbsp;<span class="currency-symbol">₫</span></div>
                                 <div class="price-gap"></div>
                                 <div class="current-price">3.699.000&nbsp;<span class="currency-symbol">₫</span></div>
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
                                       <div class="rating"> <span class="rating-count">Chưa có đánh giá</span></div>
                                    </div>
                                 </div>
                                 <div class="badge-wrapper">
                                    <div class="badge fixed-width promotion">
                                       <div class="label-wrapper"> <span class="off-label">Giảm</span> <span class="percent">18%</span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
		   </div>

	   </div>
		<p><?php the_content();?></p>
		<?php
wp_link_pages(array(
    'before' => '<div class="page-links">' . __('Pages:', 'supermarket-ecommerce'),
    'after' => '</div>',
));
?>
	</div>
</article>
