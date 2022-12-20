<?php 
  $heading  = get_sub_field('heading');
  $services = get_sub_field('services');
?>

<section id="services" class="services">
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

    <?php if ( $services ) { ?>
      <div class="row">

        <?php
          $i=0;
          while( have_rows('services') ): the_row();

          $i++;
          
          $icon        = get_sub_field('icon');
          $header      = get_sub_field('header');
          $description = get_sub_field('description');
          $button      = get_sub_field('button');
        ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch<?php if ( $i === 2 ) { ?> mt-4 mt-md-0<?php } ?><?php if ( $i === 3 ) { ?> mt-4 mt-lg-0<?php } ?>" data-aos="zoom-in" data-aos-delay="<?php echo $i; ?>00">
            <div class="icon-box">

              <?php if ( $icon ) { ?>
                <div class="icon">
                  <?php echo $icon; ?>
                </div>
              <?php } ?>

              <?php if ( $header ) { ?>
                <h4>
                  <a href="./website-development.html" aria-label="<?php echo $header; ?>"><?php echo $header; ?></a>
                </h4>
              <?php } ?>

              <?php if ( $description ) { ?>
                <p><?php echo $description; ?></p>
              <?php } ?>
              
              <?php if ( $button ) { ?>
                <div class="btn-wrap">
                  <a href="<?php echo $button['url']; ?>" class="<?php echo $button['class']; ?>" aria-label="<?php echo $button['title']; ?>"><span><?php echo $button['copy']; ?></span></a>  
                </div>
              <?php } ?>

            </div>
          </div>

        <?php endwhile; ?>

      </div>
    <?php } ?>

  </div>
</section>