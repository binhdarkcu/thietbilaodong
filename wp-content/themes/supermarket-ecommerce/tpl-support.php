<?php $contact_float_color = get_field('contact_float_color', 'option'); ?>

<div id="contact-floated" style="background-color: <?php if (!empty($contact_float_color)) echo $contact_float_color ?>">
    <a href="javascript:void" class="toggleSupport"><i class="fas fa-arrow-left"></i><i class="fas fa-arrow-right"></i></a>
  <h3><?php echo esc_html_e(get_field('name_form_support', 'option')); ?></h3>
  <div class="contact-info">
    <div class="name">
      <a href="tel:<?php echo get_field('phone_support_1', 'option'); ?>"><?php echo esc_html_e(get_field('supporter_1', 'option')); ?></a>
    </div>
    <div class="phone">
      <i class="fa fa-phone"></i>
      <span class="phone-number">
        <a href="tel:<?php echo get_field('phone_support_1', 'option'); ?>"><?php echo esc_html_e(get_field('phone_support_1', 'option')); ?></a>
      </span>
    </div>
  </div>
  <div class="contact-info">
    <div class="name">
      <a href="tel:<?php echo get_field('phone_support_2', 'option'); ?>"><?php echo esc_html_e(get_field('supporter_2', 'option')); ?></a>
    </div>
    <div class="phone">
      <i class="fa fa-phone"></i>
      <span class="phone-number">
        <a href="tel:<?php echo get_field('phone_support_2', 'option'); ?>"><?php echo esc_html_e(get_field('phone_support_2', 'option')); ?></a>
      </span>
    </div>
  </div>

  <style>
    .toggleSupport {
        position: absolute;
        top: 3px;
        right: 6px;
    }
    div#contact-floated {
        padding-right: 30px;
        transition: all 0.5s;
    }
    div#contact-floated.minimize {
        left: -180px;
    }
    .fa-arrow-right {
        display: none;
    }
    div#contact-floated.minimize .fa-arrow-right {
        display: block;
    }
    div#contact-floated.minimize .fa-arrow-left {
        display: none;
    }
  </style>
  <script>
    jQuery(document).ready(function(){
        jQuery('.toggleSupport').click(function(){
            jQuery('#contact-floated').toggleClass('minimize')
        })
    })
  </script>
</div>
