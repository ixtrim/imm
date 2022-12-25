<?php 
  $header         = get_sub_field('header');
  $image          = get_sub_field('image');
  $image_url      = wp_get_attachment_image_url( $image['ID'], 'image-mobile' );
  $image_position = get_sub_field('image_position');
  $content        = get_sub_field('content');
  $background = get_sub_field('light_background');
?>

<section class="content-image<?php if ( $background ) { ?> background-grey<?php } ?>">
  <div class="container" data-aos="fade-up">
    <div class="row mt-lg-3 mt-md-3">

      <?php if ( $image && $image_position == 'left' ) { ?>
        <div class="col-lg-6">
          <picture>
            <img src="<?php echo $image_url; ?>" class="img-fluid" alt="" />
          </picture>
        </div>
      <?php } ?>

      <div class="col-lg-6 mt-md-4 mt-sm-4">

        <?php if ( $header ) { ?>
          <h3><?php echo $header; ?></h3>
        <?php } ?>
        
        <?php echo $content; ?>

      </div>

      <?php if ( $image && $image_position == 'right' ) { ?>
        <div class="col-lg-6">
          <picture>
            <img src="<?php echo $image_url; ?>" class="img-fluid" alt="" />
          </picture>
        </div>
      <?php } ?>

    </div>
  </div>
</section>