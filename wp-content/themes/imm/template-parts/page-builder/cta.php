<?php 
  $background = get_sub_field('background');

  if ( $background === 'image' ) {
    $image = get_sub_field('image');
    $image_url = wp_get_attachment_image_url( $image['ID'], 'image-16-9' );
  }

  elseif ( $background === 'video' ) {
    $video = get_sub_field('video');
  }
  
?>

<section id="cta-bar" class="d-flex align-items-center" <?php if ( $image ) { ?>style="background-image: url('<?php echo $image_url; ?>');"<?php } ?>>

  <?php if ( $video ) { ?>
    <video autoplay muted loop id="cta-video">
      <source src="<?php echo $video['url']; ?>" type="video/mp4">
    </video>
  <?php } ?>

  <div class="container justify-content-center align-items-center" data-aos="zoom-out" data-aos-delay="100">

    <a href="https://chad101.typeform.com/to/AYhkVh" class="btn btn-primary btn-lg typeform-share" rel="noreferrer noopener">
      <?php _e('Get Started'); ?>
    </a>

    <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>

  </div>
</section>