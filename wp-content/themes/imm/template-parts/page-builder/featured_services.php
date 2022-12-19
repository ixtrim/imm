<?php 
  $services = get_sub_field('services');
  $amount = count( $services );
  $cols = 12 / $amount;
?>
<?php if ( $services ) { ?>
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <?php while( have_rows('services') ): the_row(); 
          $icon  = get_sub_field('icon');
          $title = get_sub_field('title');
          $copy  = get_sub_field('copy');
        ?>
        
          <div class="col-md-6 col-lg-<?php echo $cols; ?> d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">

              <?php if ( $icon ) { ?>
                <div class="icon"><?php echo $icon; ?></div>
              <?php } ?>
              
              <?php if ( $title ) { ?>
                <h4 class="title"><?php echo $title; ?></h4>
              <?php } ?>

              <?php if ( $copy ) { ?>
                <p class="description"><?php echo $copy; ?></p>
              <?php } ?>

            </div>
          </div>

        <?php endwhile; ?>

      </div>

    </div>
  </section>
<?php } ?>