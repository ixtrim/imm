<?php

  get_header();

  get_template_part( 'template-parts/header/top' );
  get_template_part( 'template-parts/header/content' );

  $component = 0;
  while ( the_flexible_field('page_builder') ) {
    if ( get_row_layout() === 'hero' || get_row_layout() === 'mini_hero' ) {

      $component++;
      get_template_part( 'template-parts/page-builder/'. get_row_layout(), null,
        array( 
          'component' => $component
        ) 
      );

    }
  }
?>

  <main id="main">

    <?php if ( !is_home() && !is_front_page() ) { ?>
      <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2><?php the_title(); ?></h2>
            <ol>
              <li><a href="<?php echo get_home_url(); ?>"><?php _e('Home'); ?></a></li>
              <li><?php the_title(); ?></li>
            </ol>
          </div>

        </div>
      </section>
    <?php } ?>

    <?php
      while ( the_flexible_field('page_builder') ) {
        if ( get_row_layout() != 'hero' ) {
          if ( get_row_layout() != 'mini_hero' ) {
            $component++;
            get_template_part( 'template-parts/page-builder/'. get_row_layout(), null,
              array( 
                'component' => $component
              ) 
            );
          }
        }
      }
    ?>

  </main>

  
<?php
get_footer();