<div id="contact-floated">
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
</div>