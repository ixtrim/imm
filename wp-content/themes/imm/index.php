<?php

  get_header();

  get_template_part( 'template-parts/header/top' );
  get_template_part( 'template-parts/header/content' );

  $component = 0;
  while ( the_flexible_field('page_builder') ) {
    if ( get_row_layout() === 'hero') {

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

    <?php
      while ( the_flexible_field('page_builder') ) {
        if ( get_row_layout() != 'hero') {
          $component++;
          get_template_part( 'template-parts/page-builder/'. get_row_layout(), null,
            array( 
              'component' => $component
            ) 
          );
        }
      }
    ?>

  </main>

  
<?php
get_footer();