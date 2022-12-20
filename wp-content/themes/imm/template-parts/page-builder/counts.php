<?php 
  $counters = get_sub_field('counters');
?>

<?php if ( $counters ) { ?>
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <?php
          $i=0;
          while( have_rows('counters') ): the_row();

          $i++;
          $middle = [2,5,7,9];
          $extra_class = "";
          if ( in_array($i, $middle) ) {
            $extra_class = " mt-lg-0 mb-lg-0 mt-md-2 mb-md-2";
          }
          
          $icon     = get_sub_field('icon');
          $start    = get_sub_field('start_value');
          $end      = get_sub_field('end_value');
          $duration = get_sub_field('duration');
          $copy     = get_sub_field('description');
        ?>

        <div class="col-lg-4 col-md-12<?php echo $extra_class; ?>">
          <div class="count-box h-100">

            <?php if ( $icon ) { ?>
              <?php echo $icon; ?>
            <?php } ?>

            <span data-purecounter-start="<?php echo $start; ?>" data-purecounter-end="<?php echo $end; ?>" data-purecounter-duration="<?php echo $duration; ?>" class="purecounter"></span>

            <?php if ( $copy ) { ?>
              <p><?php echo $copy; ?></p>
            <?php } ?>
            
          </div>
        </div>

        <?php if($i % 3 === 0)  { ?>
          </div>
          <div class="row mt-lg-5 mt-md-2">
        <?php } ?>

        <?php endwhile; ?>

      </div>

    </div>
  </section>
<?php } ?>