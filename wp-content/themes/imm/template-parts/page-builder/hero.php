<?php 
  $image     = get_sub_field('hero_image');
  $header    = get_sub_field('header');
  $subheader = get_sub_field('subheader');
  $cta_1     = get_sub_field('button_cta1');
  $cta_2     = get_sub_field('button_cta2');
?>

<section id="hero" class="d-flex align-items-center" <?php if ( $image ) { ?>style="background-image: url('<?php echo $image['url']; ?>');"<?php } ?>>
  <div class="container" data-aos="zoom-out" data-aos-delay="100">

    <?php if ( $header ) { ?>
      <h1><?php echo $header; ?></h1>
    <?php } ?>
    <?php if ( $subheader ) { ?>
      <h2><?php echo $subheader; ?></h2>
    <?php } ?>

    <div class="d-flex">
      <?php if ( $cta_1 ) {
        
        $relations = $cta_1['relation'];
        $rel_1 = "";

        foreach( $relations as $rel ) {
          $rel_1 = $rel_1 . " " . $rel;
        }

      ?>
        
        <a href="<?php echo $cta_1['url']; ?>" class="btn-get-started <?php echo $cta_1['class']; ?>" <?php if ( $cta_1['target'] === '_blank' ) { ?> target="_blank"<?php } ?><?php if ( $cta_1['relation'] ) { ?> rel="<?php echo $rel_1; ?>"<?php } ?><?php if ( $cta_1['title'] ) { ?> aria-label="<?php echo $cta_1['title']; ?>"<?php } ?>><?php echo $cta_1['copy']; ?></a>
        <?php if ( strpos($cta_1['class'], 'typeform-share' ) !== false ) { ?>
          <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
        <?php } ?>
      <?php } ?>

      <?php if ( $cta_2 ) {
      
      $relations = $cta_2['relation'];
      $rel_2 = "";

      foreach( $relations as $rel ) {
        $rel_2 = $rel_2 . " " . $rel;
      }
      
      ?>
        <a href="<?php echo $cta_2['url']; ?>" class="btn-watch-video <?php echo $cta_2['class']; ?>"<?php if ( $cta_2['target'] === '_blank' ) { ?> target="_blank"<?php } ?><?php if ( $cta_2['relation'] ) { ?> rel="<?php echo $rel_2; ?>"<?php } ?><?php if ( $cta_2['title'] ) { ?> aria-label="<?php echo $cta_2['title']; ?>"<?php } ?>>
          <i class="bi bi-arrow-bar-down"></i>
          <span><?php echo $cta_2['copy']; ?></span>
      </a>
      <?php } ?>
    </div>
  </div>
</section>