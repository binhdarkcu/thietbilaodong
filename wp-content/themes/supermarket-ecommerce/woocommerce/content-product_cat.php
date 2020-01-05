<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<li <?php wc_product_cat_class( '', $category ); ?> class="post-item">
  <div class="item-wrapper product type-product status-publish first instock product_cat-may-anh-may-quay-phim has-post-thumbnail sale shipping-taxable purchasable product-type-variable has-default-attributes">
    <?php do_action( 'woocommerce_before_subcategory', $category );?>
    <div class="card full shadow">
      <a style="color: black" class="menu-link-hover" href="<?php echo get_category_link( $category ); ?>" >
        <div class="cover-img">
        <div class="background">
            <?php do_action( 'woocommerce_before_subcategory_title', $category ); ?>
        </div>
        </div>
        <div class="lower-padding item-padding-8">
        <div class="text-name">
          <h4 class="product-name">
          <?php do_action( 'woocommerce_shop_loop_subcategory_title', $category ); ?>
        </h4>
        </div>
        <div class="price">
        <?php do_action( 'woocommerce_after_subcategory_title', $category ); ?>
          <div class="spacer"></div>
        </div>
        <div class="extra-badge-wrapper"></div>
        <?php do_action( 'woocommerce_after_subcategory', $category );?>
        </div>
      </a>
    </div>
  </div>
</li>