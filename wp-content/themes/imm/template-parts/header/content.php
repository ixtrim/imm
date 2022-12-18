<?php 
  $brand = get_field('brand', 'options');
  if ( $brand['logotype'] ) {
    $logo = $brand['logotype']['url'];
  } else {
    $logo = get_stylesheet_directory_uri() . 'assets/img/logo.png';
  }
?>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="<?php echo $logo; ?>" alt=""></a>

      <nav id="navbar" class="navbar">
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'top-menu',
              'menu_class'      => 'menu-wrapper',
              'container_class' => 'primary-menu-container',
              'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
              'fallback_cb'     => false,
            )
          );
        ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>