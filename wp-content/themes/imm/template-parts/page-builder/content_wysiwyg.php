<?php 
  $heading    = get_sub_field('heading');
  $content    = get_sub_field('content');
  $background = get_sub_field('light_background');
?>

<section id="text-section" class="text-section<?php if ( $background ) { ?> background-grey<?php } ?>">
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

    <?php if ( $content ) { ?>
      <div class="row">
        <?php echo $content; ?>
      </div>
    <?php } ?>

  </div>
</section>