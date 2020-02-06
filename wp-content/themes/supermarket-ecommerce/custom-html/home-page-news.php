<?php
/**
 * Template part for displaying page content in page.php
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 * @version 0.1
 */

?>

<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="section section-list-categories taxonomy-product_cat">
          <div class="container">
            <div class="section-header">
              <div class="title-wrap">
                <h3 class="title">Tin tức</h3>
              </div>
              <div class="actions">
                <!-- <a class="link" href="<?php echo get_permalink( $result->ID ); ?>">Xem tất cả
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a> -->
              </div>
            </div>
            <div class="section-content bg-white list-categories-inner">
              <div class="layout-grid grid-style-2 columns-4">
                <?php
                $args = array(
                  'post_type' => 'post',
                  'orderby' => 'ID',
                  'post_status' => 'publish',
                  'order' => 'DESC',
                  'posts_per_page' => 4, // this will retrive all the post that is published
                );
                $result = new WP_Query($args);
                if ($result->have_posts()): ?>
                <?php while ($result->have_posts()): $result->the_post();?>
                  <div class="item">
                          <a href="<?php echo get_permalink( $post->ID ); ?>" class="item-link" title="<?php the_title(); ?>">
                            
                            <div class="item-info">
                              <h2 class="item-title"><?php echo esc_html(the_title())?></h2>
                            </div>
                          </a>
                        </div>
                  <?php endwhile;?>
                <?php endif;
                wp_reset_postdata();?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
