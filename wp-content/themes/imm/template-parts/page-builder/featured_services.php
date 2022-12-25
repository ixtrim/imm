<?php 
  $services = get_sub_field('services');
  $amount = count( $services );

  $rows = round($amount / 3);
  $rows_reset = [3,6,9,12,15];
  $actual_row = 1;
  $actual_item = 0;
  $last_row = $amount - (( $rows - 1 ) * 3);
  $last_row_cols = round(12 / $last_row);
?>
<?php if ( $services ) { ?>
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <?php while( have_rows('services') ): the_row();
          $actual_item++;
          $icon  = get_sub_field('icon');
          $title = get_sub_field('title');
          $copy  = get_sub_field('copy');
        ?>
          <div class="<?php if ( $actual_row == $last_row ) { ?>col-md-12 col-lg-<?php echo $last_row_cols; ?> d-flex align-items-stretch mb-5 mb-lg-0<?php } else { ?>col-md-12 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0<?php } ?>">
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

          <?php if ( in_array( $actual_item, $rows_reset ) ) { ?>
            </div>
            <div class="row mt-lg-4 mt-md-2">
          <?php $actual_row++; } ?>

        <?php endwhile; ?>

      </div>

    </div>
  </section>
<?php } ?>