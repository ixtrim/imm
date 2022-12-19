<?php 
  $brand        = get_field('brand', 'options');
  $social_media = get_field('social_media', 'options');
?>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <?php if ( $brand['full_company_name'] ) { ?>
          <h3><?php echo $brand['full_company_name']; ?></h3>
        <?php } ?>
        <p>
          <?php echo $brand['company_address']; ?>
          <br><br>
          <?php if ( $brand['phone'] ) { ?>
            <strong><?php echo __('Phone:'); ?></strong> <a href="tel:<?php echo $brand['phone']; ?>"><?php echo $brand['phone']; ?></a><br>
          <?php } ?>
          <?php if ( $brand['email'] ) { ?>
            <strong><?php echo __('Email:'); ?></strong> <a href="mailto:<?php echo $brand['email']; ?>"><?php echo $brand['email']; ?></a><br>
          <?php } ?>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4><?php echo __('Useful Links'); ?></h4>
        <nav>
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'footer-menu-1',
                'menu_class'      => 'menu-wrapper',
                'container_class' => 'primary-menu-container',
                'items_wrap'      => '<ul id="footer-menu-1" class="%2$s">%3$s</ul>',
                'link_before'    => '<i class="bx bx-chevron-right"></i> ',
                'add_a_class'     => 'nav-link scrollto',
                'fallback_cb'     => false,
              )
            );
          ?>
        </nav>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4><?php echo __('Our Services'); ?></h4>
        <nav>
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'footer-menu-2',
                'menu_class'      => 'menu-wrapper',
                'container_class' => 'primary-menu-container',
                'items_wrap'      => '<ul id="footer-menu-1" class="%2$s">%3$s</ul>',
                'link_before'    => '<i class="bx bx-chevron-right"></i> ',
                'add_a_class'     => 'nav-link',
                'fallback_cb'     => false,
              )
            );
          ?>
        </nav>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4><?php echo __('Our Social Networks'); ?></h4>
        <div class="social-links mt-3">
          <?php if ( $social_media['facebook'] ) { ?>
            <a href="<?php echo $social_media['facebook']; ?>" class="facebook" target="_blank" rel="noreferrer noopener" aria-label="<?php echo __('Facebook'); ?>">
              <i class="bx bxl-facebook"></i>
            </a>
          <?php } ?>
          <?php if ( $social_media['instagram'] ) { ?>
            <a href="<?php echo $social_media['instagram']; ?>" class="instagram" target="_blank" rel="noreferrer noopener" aria-label="<?php echo __('Instagram'); ?>">
              <i class="bx bxl-instagram"></i>
            </a>
          <?php } ?>
          <?php if ( $social_media['linked_in'] ) { ?>
            <a href="<?php echo $social_media['linked_in']; ?>" class="linkedin" target="_blank" rel="noreferrer noopener" aria-label="<?php echo __('LinkedIn'); ?>">
              <i class="bx bxl-linkedin"></i>
            </a>
          <?php } ?>
          <?php if ( $social_media['twitter'] ) { ?>
            <a href="<?php echo $social_media['twitter']; ?>" class="twitter" target="_blank" rel="noreferrer noopener" aria-label="<?php echo __('Twitter'); ?>">
              <i class="bi bi-twitter"></i>
            </a>
          <?php } ?>
        </div>
      </div>

    </div>
  </div>
</div>