<?php
/**
 * Template part for displaying page content in homepage.php
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 * @version 0.1
 */

?>

<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"
  style="position: relative; left: -345px; box-sizing: border-box; width: 1920px;">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="section section-topbanners">
          <div class="home-banners-wrapper">
            <div class="container">
              <div class="home-banners">
                <div class="main-banner light-background" style="width: 69%">
                  <?php echo do_shortcode('[metaslider id="662"]'); ?>
                </div>
                <div class="right-wrapper"  style="width: 30%">

                  <?php
                    $custom_post_type = new WP_Query( array(
                      'post_type'      => 'ads',
                      'post_status'    => 'publish',
                      'posts_per_page' => 2,
                    ) );

                    while ( $custom_post_type->have_posts() ) : $custom_post_type->the_post();

                    ?> <a href="<?php echo get_post_type_archive_link( $custom_post_type ); ?>" class="right-banner" target="_blank" rel="noopener noreferrer">
                    <div class="full-height light-background">
                      <div class="right-banner-image" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);"></div>
                    </div>
                  </a><?php
                    endwhile;
                  ?>

                  <!-- <a href="#" class="right-banner" target="_blank" rel="noopener noreferrer">
                    <div class="full-height light-background">
                      <div class="right-banner-image" style="background-image: url(https://store.vietfriend.info/wp-content/uploads/2019/05/slider-banner-8.png);"></div>
                    </div>
                  </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
