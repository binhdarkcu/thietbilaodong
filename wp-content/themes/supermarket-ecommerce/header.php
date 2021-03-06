<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 * @version 0.1
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<?php 
  $bg_color = get_field('color_of_page', 'option');
  $header_top_color = get_field('header_top_color', 'option');
  $sub_header_top_color = get_field('sub_header_top_color', 'option');
?>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo TEMPLATE_PATH ?>/assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo TEMPLATE_PATH ?>/assets/images/favicon.ico" type="image/x-icon">

  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'supermarket-ecommerce' ) ); ?>">
  <?php wp_head(); ?>
  <link rel="stylesheet" id="alg-font-awesome-css" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
    type="text/css" media="all">
  <style>
    ::selection {
      background: <?php echo $sub_header_top_color ?> !important;
      color: #fff;
    }
    ul li a:active,
    ul li a:hover,
    #danh-muc-link:hover,
    #danh-muc-link:active,
    #menu-item-151:hover,
    #menu-item-151:active,
    .menu-item.social-top:hover,
    .menu-item.social-top:active,
    .social-icons i:hover {
      background: <?php echo $sub_header_top_color ?> !important;
      color: #fff;
    }
  </style>
</head>
<body <?php body_class(); ?> style="background-color: <?php if (!empty($bg_color)) echo $bg_color ?>">

  <div id="page" class="site">
    <header class="header-wrapper">
      <div class="header-top color-<?php echo $header_top_color ?>" style="background-color: <?php if (!empty($header_top_color)) echo $header_top_color ?>">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark">
            <a href="javascript:void(0)" class="frnavbar-btn mobile-visible" data-menu-id="topmenu">
              <div class="lines-button">
                <span class="lines"></span>
                <span class="text menu-open">Menu</span>
                <span class="text menu-close">Đóng</span>
              </div>
            </a>
            <a class="navbar-brand d-block d-md-none mr-auto" href="<?php echo HOME_URL;?>">
              <img src="<?php echo TEMPLATE_PATH ?>/assets/images/logo.png" class="logo-header-mobile"
                alt="Friendstore" data-no-lazy="1"> </a>
            <div class="profile-top order-lg-last">
              <div class="dropdown">
                <?php if(class_exists('woocommerce')){ ?>
                <!--Check loggedin or not-->
                <a class="profile-url" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>">
                  <div class="avatar-border">
                    <img class="avatar user-avatar ls-is-cached lazyloaded" src="<?php echo get_field('no_avatar', 'option'); ?>"
                      data-src="<?php echo get_field('no_avatar', 'option'); ?>" alt="Guest">
                  </div>
                  <?php if ( is_user_logged_in() ) { ?>
                  <span>
                    <?php esc_html_e('Tài khoản của tôi','supermarket-ecommerce'); ?>
                  </span>
                  <?php }
							   else { ?>
                  <span>
                    <?php esc_html_e('Đăng nhập - Đăng ký','supermarket-ecommerce'); ?>
                  </span>
                  <?php } ?>
                </a>
                <?php }?>

              </div>
            </div>
            <div class="frnavbar frnavbar-collapse" id="topmenu">
              <ul class="navbar-nav has-separator mr-auto">
                <li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-151">
                  <span class="toggle" data-menu="menu-item-151"></span>
                  <a id="danh-muc-link" href="javascript:void(0)">Danh mục</a>
                  <ul class="sub-menu" style="background-color: <?php if (!empty($header_top_color)) echo $header_top_color ?>">
                    <?php
					           $args = array(
					               //'number'     => $number,
					              //  'orderby' => 'title',
					              //  'order' => 'ASC',
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
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children" style="background-color: <?php if (!empty($header_top_color)) echo $header_top_color ?>">
                      <span class="toggle" data-menu="menu-item-145"></span>
                      <a href="<?php echo $cat_link;?>">
                        <?php echo esc_html($product_category->name); ?>
                      </a>
                      <?php
                        if($product_category->count > 0) {
                      ?>
                      <ul class="sub-menu" style="background-color: <?php if (!empty($header_top_color)) echo $header_top_color ?>">
                        <?php
						              $args1 = array(
                            'parent' => $product_cat_id,
						              );
                          $sub_cats = get_terms('product_cat', $args1);
						              $countProducts = count($sub_cats);
						              if ($sub_cats) {
                            foreach ($sub_cats as $sub_cat) {
                              $sub_cat_id = $sub_cat->term_id;
                              $sub_cat_link = get_category_link($sub_cat_id);
                              # code...
						                  ?>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat" style="background-color: <?php if (!empty($header_top_color)) echo $header_top_color ?>">
                          <a href="<?php echo esc_url($sub_cat_link); ?>">
                            <?php echo esc_html($sub_cat->name); ?>
                          </a>
                        </li>
                        <?php }
						              }
						              ?>
                      </ul>

                    <?php } ?>
                    </li>

                    <?php
					             }
					           }
					         ?>
                  </ul>

                </li>
                <li class="menu-item social-top">
                  <span class="label">Kết nối</span>
                  <a href="<?php echo get_field('url_facebook', 'option'); ?>" target="_blank">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo get_field('url_youtube', 'option'); ?>" target="_blank">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo get_field('url_google', 'option'); ?>" target="_blank">
                    <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav">

                <li class="menu-item">
                  <a href="<?php echo HOME_URL?>/ho-tro">
                    <i class="fa fa-question-circle-o" aria-hidden="true"></i> Trợ giúp</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="header-main color-<?php echo $sub_header_top_color ?>" style="background-color: <?php if (!empty($sub_header_top_color)) echo $sub_header_top_color ?>">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-2 d-none d-md-block">
              <div class="header-logo">
                <a href="<?php echo HOME_URL;?>" title="Trang chủ">
                  <img src="<?php echo get_field('logo_header', 'option'); ?>" class="logo-header-desktop"
                    alt="Đồng phục sóc vàng" data-no-lazy="1"> </a>
              </div>
            </div>
            <div class="col-10 col-sm-10 col-md-7 col-lg-8">
              <div class="header-search">
                <div class="dgwt-wcas-search-wrapp dgwt-wcas-is-detail-box woocommerce dgwt-wcas-has-submit" data-wcas-context="7c8b">
                  <form class="dgwt-wcas-search-form" role="search" action="<?php echo HOME_URL; ?>" method="get">
                    <div class="dgwt-wcas-sf-wrapp">
                      <label class="screen-reader-text">Products search</label>

                      <?php get_product_search_form()?>
                      <div class="search-svg">
                        <svg version="1.1" class="dgwt-wcas-ico-magnifier" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px" y="0px" viewBox="0 0 51.539 51.361" enable-background="new 0 0 51.539 51.361" xml:space="preserve">
                          <path d="M51.539,49.356L37.247,35.065c3.273-3.74,5.272-8.623,5.272-13.983c0-11.742-9.518-21.26-21.26-21.26
							         S0,9.339,0,21.082s9.518,21.26,21.26,21.26c5.361,0,10.244-1.999,13.983-5.272l14.292,14.292L51.539,49.356z M2.835,21.082
							         c0-10.176,8.249-18.425,18.425-18.425s18.425,8.249,18.425,18.425S31.436,39.507,21.26,39.507S2.835,31.258,2.835,21.082z"></path>
                        </svg>
                      </div>
                      <div class="dgwt-wcas-preloader" style="right: 80px;">
                      </div>
                      <input type="hidden" name="post_type" value="product">
                      <input type="hidden" name="dgwt_wcas" value="1">
                    </div>
                  </form>
                </div>
                <div class="hot-tags d-none d-md-block">
                  <ul>
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
                    <li class="hot-tag">
                      <a href="<?php echo esc_url(get_term_link($product_category)); ?>"><?php echo esc_html($product_category->name)?></a>
                    </li>
                  <?php }
                  }?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2">
              <div class="header-cart">
                <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" class="cart-btn" id="cart-mini-btn">
                  <i class="fa fa-shopping-basket icon-font" aria-hidden="true"> Giỏ hàng </i>
                  <span class="number-badge" style="color: <?php if (!empty($sub_header_top_color)) echo $sub_header_top_color ?>; border-color: <?php if (!empty($sub_header_top_color)) echo $sub_header_top_color ?>;">
                    <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?>
                  </span>
                </a>
                <div class="cart-popup">
                  <div id="mini-cart-box">
                    <div class="cart-mini-container">
                      <?php woocommerce_mini_cart(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="site-content-contain">
      <div id="content" class="site-content">
