<?php 
  $heading        = get_sub_field('heading');
  $image          = get_sub_field('image');
  $image_url      = wp_get_attachment_image_url( $image['ID'], 'image-mobile' );
  $image_position = get_sub_field('image_position');
  $content        = get_sub_field('content');
?>

<section id="about" class="about section-bg">
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

    <div class="row">

      <?php if ( $image && $image_position === 'left' ) { ?>

        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <img src="<?php echo $image_url; ?>" class="img-fluid" alt="<?php echo $image['title']; ?>">
        </div>

        <div class="col-lg-6 pt-4 pt-lg-0 about-content content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <?php echo $content; ?>
        </div>

      <?php } elseif ( $image && $image_position === 'right' ) { ?>
        
        <div class="col-lg-6  about-content content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <?php echo $content; ?>
        </div>

        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-right" data-aos-delay="100">
          <img src="<?php echo $image_url; ?>" class="img-fluid" alt="<?php echo $image['title']; ?>">
        </div>

      <?php } else { ?>

        <div class="col-lg-12 pt-4 pt-lg-0 about-content content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <?php echo $content; ?>
        </div>

      <?php } ?>

    </div>

  </div>
</section>