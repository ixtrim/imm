<?php 
  $heading = get_sub_field('heading');
  $address = get_sub_field('address');
  $email   = get_sub_field('email');
  $phone   = get_sub_field('phone');
  $map     = get_sub_field('google_maps_src');
?>

<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <?php if ( $heading['section_tag'] ) { ?>
        <h2><?php echo $heading['section_tag']; ?></h2>
      <?php } ?>

      <?php if ( $heading['header'] ) { ?>
        <h3><?php echo $heading['header']; ?></h3>
      <?php } ?>

      <?php if ( $heading['description'] ) { ?>
        <p><?php echo $heading['description']; ?></p>
      <?php } ?>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <?php if ( $address ) { ?>
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3><?php echo __('Our Address'); ?></h3>
            <p><?php echo $address; ?></p>
          </div>
        </div>
      <?php } ?>
      
      <?php if ( $email ) { ?>
        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3><?php echo __('Email Us'); ?></h3>
            <p><a href="mailto:<?php echo $email; ?>" aria-label="<?php echo __('Email Us'); ?>"><?php echo $email; ?></a></p>
          </div>
        </div>
      <?php } ?>

      <?php if ( $phone ) { ?>
        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3><?php echo __('Call Us'); ?></h3>
            <p><a href="tel:<?php echo $phone; ?>" aria-label="<?php echo __('Call Us'); ?>"><?php echo $phone; ?></a></p>
          </div>
        </div>
      <?php } ?>
ri
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      
      <?php if ( $map ) { ?>
        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="<?php echo $map; ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>
      <?php } ?>

      <div class="col-lg-6">
        <div class="php-email-form">
          <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form"]'); ?>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->