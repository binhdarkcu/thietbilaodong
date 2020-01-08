<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;


global $product;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li class="post-item">
  <div class="item-wrapper product type-product status-publish first instock product_cat-may-anh-may-quay-phim has-post-thumbnail sale shipping-taxable purchasable product-type-variable has-default-attributes">

	<div class="card full shadow">

		  <div class="cover-img">
			<div class="background">
				  <a style="color: black" class="menu-link-hover" href="<?php echo esc_url(get_permalink( $product->get_id() )); ?>"><?php echo $product->get_image()?> </a>
			</div>
		  </div>
		  <div class="lower-padding item-padding-8">
			<div class="text-name">
			  <h4 class="product-name">
				  <a style="color: black" class="menu-link-hover" href="<?php echo esc_url(get_permalink( $product->get_id() )); ?>">
					<?php echo esc_html($product->get_name()); ?>
				</a>
			</h4>
			</div>
			<div class="price">
			 <?php do_action( 'woocommerce_after_shop_loop_item_title' );?>
			  <div class="spacer"></div>
			</div>
			<div class="add-to-cart">
		  	   <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo $product->add_to_cart_url() ?>">Thêm vào giỏ hàng</a>
		  	  </div>
			<div class="extra-badge-wrapper"></div>
			<!-- <?php do_action( 'woocommerce_after_shop_loop_item' );?> -->
		  </div>


	</div>
  </div>
</li>
