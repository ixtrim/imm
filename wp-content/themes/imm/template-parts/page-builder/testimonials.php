<?php 
  $testimonials = get_sub_field('testimonials');
?>

<?php if ( $testimonials ) { ?>
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <?php
            $i=0;
            while( have_rows('testimonials') ): the_row();

            $i++;
            
            $avatar      = get_sub_field('avatar');
            $name        = get_sub_field('name');
            $position    = get_sub_field('position');
            $testimonial = get_sub_field('testimonial');
          ?>

            <div class="swiper-slide">
              <div class="testimonial-item">

                <?php if ( $avatar ) { ?>
                  <img src="<?php echo $avatar['url']; ?>" class="testimonial-img" alt="<?php echo $name; ?>" />
                <?php } ?>

                <?php if ( $name ) { ?>
                  <h3><?php echo $name; ?></h3>
                <?php } ?>

                <?php if ( $position ) { ?>
                  <h4><?php echo $position; ?></h4>
                <?php } ?>

                <?php if ( $testimonial ) { ?>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      <?php echo $testimonial; ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                <?php } ?>
              </div>
            </div>

          <?php endwhile; ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
<?php } ?>