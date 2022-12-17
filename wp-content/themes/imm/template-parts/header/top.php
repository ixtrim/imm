<?php 
  $brand        = get_field('brand', 'options');
  $social_media = get_field('social_media', 'options');
?>

<section id="header-top" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <?php if ( $brand['email'] ) { ?>
        <i class="bi bi-envelope d-flex align-items-center"><a href="<?php echo "mailto:" . $brand['email']; ?>"><?php echo $brand['email']; ?></a></i>
      <?php } ?>
      <?php if ( $brand['phone'] ) { ?>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo $brand['phone']; ?></span></i>
      <?php } ?>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <?php if ( $social_media['facebook'] ) { ?>
        <a href="<?php echo $social_media['facebook']; ?>" class="facebook" target="_blank" rel="noreferrer noopener" aria-label="<?php echo __('Facebook', 'imm') ; ?>
          <i class="bi bi-facebook"></i>
        </a>
      <?php } ?>
      <?php if ( $social_media['linked_in'] ) { ?>
        <a href="<?php echo $social_media['linked_in']; ?>" class="linkedin" target="_blank" rel="noreferrer noopener" aria-label="<?php echo __('LinkedIn', 'imm') ; ?>
          <i class="bi bi-linkedin"></i></i>
      </a>
      <?php } ?>
      <?php if ( $social_media['instagram'] ) { ?>
        <a href="<?php echo $social_media['instagram']; ?>" class="instagram" target="_blank" rel="noreferrer noopener" aria-label="<?php echo __('Instagram', 'imm') ; ?>
          <i class="bi bi-instagram"></i>
        </a>
      <?php } ?>
      <?php if ( $social_media['twitter'] ) { ?>
        <a href="<?php echo $social_media['twitter']; ?>" class="twitter" target="_blank" rel="noreferrer noopener" aria-label="<?php echo __('Twitter', 'imm') ; ?>
          <i class="bi bi-twitter"></i>
        </a>
      <?php } ?>
    </div>
  </div>
</section>