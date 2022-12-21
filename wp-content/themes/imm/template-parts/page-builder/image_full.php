<?php 
  $image_field = get_sub_field('image');
  $image = wp_get_attachment_image_url( $image_field['ID'], 'image-full' );;
  $image_2x = wp_get_attachment_image_url( $image_field['ID'], 'image-full-2x' );;
?>
<?php if ( $image_field ) { ?>
  <section class="image-full">
    <div class="container" data-aos="fade-up">
      <div class="row">

        <picture class="post-thumbnail">
          <source media="(min-width: 768px)" srcset="<?php echo $image_2x; ?>" />
          <source media="(min-width: 0px)" srcset="<?php echo $image; ?>" />
          <img src="<?php echo $image_2x; ?>" alt="<?php the_title(); ?>" />
        </picture>

      </div>
    </div>
  </section>
<?php } ?>