<?php 
  $heading   = get_sub_field('heading');
  $cta_boxes = get_sub_field('cta_boxes');
?>

<?php if ( $cta_boxes ) { ?>
  <section class="inner-page client-support">
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

      <div class="row">
        

        <?php
          $i=0;
          while( have_rows('cta_boxes') ): the_row();

          $i++;
          $first_ones = [1,4,7];
          $image     = get_sub_field('image');
          $image_url = wp_get_attachment_image_url( $image['ID'], 'cta' );
          $title     = get_sub_field('title');
          $button    = get_sub_field('button');
        ?>

          <?php if ( in_array($i, [4,7,10]) ) { ?>
            <div class="row mt-lg-5 mt-md-2">
          <?php } ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch item-<?php echo $i; if ( !in_array($i, $first_ones) ) { ?> mt-4 mt-md-0<?php } ?>" data-aos="zoom-in" data-aos-delay="100">
            <div class="card w-100">

              <?php if ( $image ) { ?>
                <img src="<?php echo $image_url; ?>" class="card-img-top" alt="<?php echo $image['name']; ?>">
              <?php } ?>

              <div class="card-body">
                
                <?php if ( $title ) { ?>
                  <h4 class="card-title"><?php echo $title; ?></h4>
                <?php } ?>

                <?php if ( $button ) { ?>
                  <div class="btn-wrap">
                    <a href="<?php echo $button['url']; ?>"<?php if ( $button['target'] ) { ?> target="<?php echo $button['target']; ?>"<?php } ?> rel="noreferrer noopener"
                      class="btn btn-primary" aria-label="<?php echo $button['title']; ?>"><?php echo $button['title']; ?></a>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>

          <?php if ( in_array($i, [3,6,9,12]) ) { ?>
            </div>
          <?php } ?>

        <?php endwhile; ?>

    </div>
  </section>
<?php } ?>