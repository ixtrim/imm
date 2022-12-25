<?php 
  $image     = get_sub_field('image');
  $image_url = wp_get_attachment_image_url( $image['ID'], 'image-16-9' );
?>

<section id="mini-hero" class="d-flex align-items-center" <?php if ( $image ) { ?>style="background-image: url('<?php echo $image_url; ?>');"<?php } ?>>
  <div class="container" data-aos="zoom-out" data-aos-delay="100">

  </div>
</section>