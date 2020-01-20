<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 * @version 1.4
 */

?>

<aside class="widget-area" role="complementary">
    <div class="row">
        <div class="widget-column footer-widget-1 col-lg-3 col-md-3">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
        <div class="widget-column footer-widget-2 col-lg-3 col-md-3">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
        <div class="widget-column footer-widget-3 col-lg-3 col-md-3">
            <!-- <?php dynamic_sidebar( 'footer-3' ); ?> -->
            <section id="custom_html-3" class="widget_text widget widget_custom_html"><h2 class="widget-title">Liên hệ chúng tôi</h2><div class="textwidget custom-html-widget"><h1>
              <a href="<?php echo get_field('url_facebook', 'option'); ?>">
              <i class="fab fa-facebook-square" style="color: #3b5998"></i>
              </a>
              <a href="<?php echo get_field('instagram', 'option'); ?>">
              <i class="fab fa-instagram" style="color: #517fa4"></i>
              </a>
              <a href="<?php echo get_field('twitter', 'option'); ?>">
                <i class="fab fa-twitter" style="color: #00aced"></i>
              </a>
              <a href="<?php echo get_field('url_linkedin', 'option'); ?>">
                <i class="fab fa-linkedin" style="color: #007bb6"></i>
              </a>
              <a href="<?php echo get_field('url_google', 'option'); ?>">
              <i class="fab fa-google-plus-g" style="color: #dd4b39"></i>
              </a>
            </h1>

            <div class="mapouter"><div class="gmap_canvas"><iframe width="277" height="225" id="gmap_canvas" src="https://maps.google.com/maps?q=16%2F6%20Tr%E1%BA%A7n%20Th%C3%A1i%20T%C3%B4ng%2C%20Ph%C6%B0%E1%BB%9Dng%2015%2C%20T%C3%A2n%20B%C3%ACnh%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh%2C%20Vi%E1%BB%87t%20Nam&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:225px;width:277px;}.gmap_canvas {overflow:hidden;background:none!important;height:225px;width:277px;}</style></div></section>
        </div>
        <div class="widget-column footer-widget-4 col-lg-3 col-md-3">
            <?php dynamic_sidebar( 'footer-4' ); ?>
        </div>
    </div>
</aside>
