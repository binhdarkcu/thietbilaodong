<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'supermarket-ecommerce' ) ); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" id="alg-font-awesome-css" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" type="text/css" media="all">
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content" alt="<?php esc_html_e( 'Skip to content', 'supermarket-ecommerce' ); ?>"><?php esc_html_e( 'Skip to content', 'supermarket-ecommerce' ); ?></a>
	<header class="header-wrapper">
	   <div class="header-top">
		  <div class="container">
			 <nav class="navbar navbar-expand-lg navbar-dark">
				<a href="javascript:void(0)" class="frnavbar-btn mobile-visible" data-menu-id="topmenu">
				   <div class="lines-button"> <span class="lines"></span> <span class="text menu-open">Menu</span> <span class="text menu-close">Đóng</span></div>
				</a>
				<a class="navbar-brand d-block d-md-none mr-auto" href="https://store.vietfriend.info"> <img src="https://store.vietfriend.info/wp-content/themes/friendstore/assets/images/logo-light-mobile.png" class="logo-header-mobile" alt="Friendstore" data-no-lazy="1"> </a>
				<div class="profile-top order-lg-last">
				   <div class="dropdown">
					   <?php if(class_exists('woocommerce')){ ?>
						   <!--Check loggedin or not-->
						   <a class="profile-url" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>">
								 <div class="avatar-border">
									<noscript><img class="avatar user-avatar" src="https://store.vietfriend.info/wp-content/themes/friendstore/assets/images/noavatar.png" alt="Guest"></noscript>
									<img class="avatar user-avatar ls-is-cached lazyloaded" src="https://store.vietfriend.info/wp-content/themes/friendstore/assets/images/noavatar.png" data-src="https://store.vietfriend.info/wp-content/themes/friendstore/assets/images/noavatar.png" alt="Guest">
								 </div>
							   <?php if ( is_user_logged_in() ) { ?>
									 <span><?php esc_html_e('Tài khoản của tôi','supermarket-ecommerce'); ?></span>
							   <?php }
							   else { ?>
								 <span><?php esc_html_e('Đăng nhập - Đăng ký','supermarket-ecommerce'); ?></span>
							   <?php } ?>
						   </a>
					   <?php }?>

				   </div>
				</div>
				<div class="frnavbar frnavbar-collapse" id="topmenu">
				   <ul class="navbar-nav has-separator mr-auto">
					  <li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-151">
						 <span class="toggle" data-menu="menu-item-151"></span><a href="#danh-muc">Danh mục</a>
						 <ul class="sub-menu">
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
							 	<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children">
								 	<span class="toggle" data-menu="menu-item-145"></span><a href="https://store.vietfriend.info/thoi-trang-nam/"> <?php echo esc_html($product_category->name); ?></a>
									<ul class="sub-menu">
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
										  	<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
							                    <a href="<?php echo esc_url(get_term_link($product->get_slug())); ?>">
							                      <?php echo esc_html($product->get_name()); ?>
							                    </a>
											</li>
						                <?php }
						              }
						              ?>
								  </ul>
								</li>

					 				<?php
					             }
					           }
					         ?>
						 </ul>

					  </li>
					  <li class="menu-item social-top">
						  <span class="label">Kết nối</span>
						  <a href="<?php echo esc_url( get_theme_mod( 'supermarket_ecommerce_facebook_url','' ) ); ?>" target="_blank"> <i class="fa fa-facebook-official" aria-hidden="true"></i> </a>
						  <a href="<?php echo esc_url( get_theme_mod( 'supermarket_ecommerce_you_tube_url','' ) ); ?>" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a>
						  <a href="#" target="_blank"> <i class="fa fa-google-plus-official" aria-hidden="true"></i> </a>
					  </li>
				   </ul>
				   <ul class="navbar-nav">

					  <li class="menu-item"> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Trợ giúp</a></li>
				   </ul>
				</div>
			 </nav>
		  </div>
	   </div>
	   <div class="header-main">
		  <div class="container">
			 <div class="row">
				<div class="col-sm-12 col-md-3 col-lg-2 d-none d-md-block">
				   <div class="header-logo"> <a href="https://store.vietfriend.info" title="Trang chủ"> <img src="https://store.vietfriend.info/wp-content/themes/friendstore/assets/images/logo-light.png" class="logo-header-desktop" alt="Friendstore" data-no-lazy="1"> </a></div>
				</div>
				<div class="col-10 col-sm-10 col-md-7 col-lg-8">
				   <div class="header-search">
					  <div class="dgwt-wcas-search-wrapp dgwt-wcas-is-detail-box woocommerce dgwt-wcas-has-submit" data-wcas-context="7c8b">
						 <form class="dgwt-wcas-search-form" role="search" action="https://store.vietfriend.info/" method="get">
							<div class="dgwt-wcas-sf-wrapp">
							   <label class="screen-reader-text">Products search</label> <input type="search" class="dgwt-wcas-search-input" name="s" value="" placeholder="Tìm sản phẩm, thương hiệu, và tên shop..." autocomplete="off">
							   <div class="dgwt-wcas-preloader" style="right: 80px;"></div>
							   <button type="submit" class="dgwt-wcas-search-submit">
								  <svg version="1.1" class="dgwt-wcas-ico-magnifier" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 51.539 51.361" enable-background="new 0 0 51.539 51.361" xml:space="preserve">
									 <path d="M51.539,49.356L37.247,35.065c3.273-3.74,5.272-8.623,5.272-13.983c0-11.742-9.518-21.26-21.26-21.26
										S0,9.339,0,21.082s9.518,21.26,21.26,21.26c5.361,0,10.244-1.999,13.983-5.272l14.292,14.292L51.539,49.356z M2.835,21.082
										c0-10.176,8.249-18.425,18.425-18.425s18.425,8.249,18.425,18.425S31.436,39.507,21.26,39.507S2.835,31.258,2.835,21.082z"></path>
								  </svg>
							   </button>
							   <input type="hidden" name="post_type" value="product"> <input type="hidden" name="dgwt_wcas" value="1">
							</div>
						 </form>
					  </div>
					  <div class="hot-tags d-none d-md-block">
						 <ul>
							<li class="hot-tag"> <a href="#">áo quần</a></li>
							<li class="hot-tag"> <a href="#">áo khoác gió</a></li>
							<li class="hot-tag"> <a href="#">áo phông</a></li>
							<li class="hot-tag"> <a href="#">áo sơ mi nam</a></li>
							<li class="hot-tag"> <a href="#">áo khoác da</a></li>
							<li class="hot-tag"> <a href="#">quần âu</a></li>
							<li class="hot-tag"> <a href="#">camera</a></li>
							<li class="hot-tag"> <a href="#">loa</a></li>
							<li class="hot-tag"> <a href="#"> logo</a></li>
						 </ul>
					  </div>
				   </div>
				</div>
				<div class="col-2 col-sm-2 col-md-2 col-lg-2">
				   <div class="header-cart">
					  <a href="https://store.vietfriend.info/gio-hang/" class="cart-btn" id="cart-mini-btn"> <i class="fa fa-shopping-basket icon-font" aria-hidden="true"> Giỏ hàng </i> <span class="number-badge">0</span> </a>
					  <div class="cart-popup">
						 <div id="mini-cart-box">
							<div class="cart-mini-container">
							   <div class="empty-content cart-empty">
								  <div class="icon"></div>
								  <div class="text">Chưa có sản phẩm trong giỏ hàng.</div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</header>

	<header id="header">
		<div class="search-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="logo">
					        <?php if( has_custom_logo() ){ supermarket_ecommerce_the_custom_logo();
					           }else{ ?>
					          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					          <?php $description = get_bloginfo( 'description', 'display' );
					          if ( $description || is_customize_preview() ) : ?>
					            <p class="site-description"><?php echo esc_html($description); ?></p>
					        <?php endif; }?>
					    </div>
					</div>
					<?php if(class_exists('woocommerce')){ ?>
						<div class="col-lg-6 col-md-7">
				        	<?php get_product_search_form()?>
				      	</div>
				      	<div class="col-lg-2 col-md-3">
				      		<div class="acc-btn">
					            <?php if(class_exists('woocommerce')){ ?>
						            <?php if ( is_user_logged_in() ) { ?>
						              <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" ><?php esc_html_e('Tài khoản của tôi','supermarket-ecommerce'); ?></a>
						            <?php }
						            else { ?>
						              <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" ><?php esc_html_e('Đăng nhập/Đăng ký','supermarket-ecommerce'); ?></a>
						            <?php } ?>
						        <?php }?>
				        	</div>
				      	</div>
						<div class="col-lg-1 col-md-2">
						    <div class="cart_icon">
						        <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-basket"></i></a>
					            <li class="cart_box">
					              <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
					            </li>
						    </div>
					    </div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="menu-section">
			<div class="container">
				<div class="main-top">
				   <div class="row">
				      	<div class="col-lg-12 col-md-12">
							<div class="toggle-menu responsive-menu">
					            <button onclick="resMenu_open()" role="tab"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','supermarket-ecommerce'); ?></span></button>
					        </div>
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'supermarket-ecommerce' ); ?>">
				                  <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="resMenu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','supermarket-ecommerce'); ?></span></a>
				                  <?php
				                    wp_nav_menu( array(
				                      'theme_location' => 'primary',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) );
				                  ?>
				                </nav>
				            </div>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</header>

	<div class="site-content-contain">
		<div id="content" class="site-content">
