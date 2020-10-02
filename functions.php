<?php

/**
 * Big Store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Big Store
 */

  // Register Custom Navigation Walker
  require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

  // Register customizer additions
  require_once get_template_directory() . '/inc/customizer.php';



  // Enqueue Scripts + Styles -------------------------------------------------*

  function big_store_scripts() {
    // Bootstrap scripts + styles
    wp_enqueue_script( 'boostrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '4.1.3', 'all');
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.1.3', 'all');

    // Theme's main stylesheet
    wp_enqueue_style( 'big-store-style', get_stylesheet_uri(), array(), '1.0.4', 'all' );

    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:wght@400;700&display=swap' );

    // Flexslider stylesheet and js
    wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery'), '', true );
    wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery'), '', true );
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );

    // Font Awesome stylesheet
    wp_enqueue_style( 'font-awesome-5','https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0' );
  }
  add_action( 'wp_enqueue_scripts', 'big_store_scripts' );



  //Sets up theme defaults and registers support ------------------------------*

  function big_store_config() {
    // Register menus
    register_nav_menus (
      array(
        'big_store_main_menu'       =>  'Big Store Main Menu',
        'big_store_category_menu'   =>  'Big Store Category Menu',
        'big_store_footer_menu'     =>  'Big Store Footer Menu',
      )
    );

      // Declare WooCommerce support
      add_theme_support( 'woocommerce', array(
        'thumbnail_image_width'       => 500,
        'single_image_width'          => 500,
        'product_grid'                => array(
          'default_rows'          => 10,
          'min_rows'              => 5,
          'max_rows'              => 10,
          'default_columns'       => 1,
          'min_columns'           => 1,
          'max_columns'           => 4
        )
      ));
      add_theme_support( 'wc-product-gallery-zoom' );
      add_theme_support( 'wc-product-gallery-lightbox' );
      add_theme_support( 'wc-product-gallery-slider' );

      if ( !isset ( $content_width )) {
        $content_width = 600;
      }

      // Add custom logo support
      add_theme_support( 'custom-logo', array(
        'height'        => 26,
        'width'         => 240,
        'flex_height'   => true,
        'flex_width'    => true,
      ));

      add_image_size( 'big-store-slider', 1366, 768, array( 'center', 'center' ) );
      add_image_size( 'big-store-blog', 960, 640, array( 'center', 'center' ) );

  }
  add_action( 'after_setup_theme', 'big_store_config', 0);


  // Pull in wc-modifications hooks and filters
  if( class_exists( 'WooCommerce' )){
    require get_template_directory() . '/inc/wc-modifications.php';
  }


  // Add Sidebars
  add_action( 'widgets_init', 'big_store_sidebars' );
  function big_store_sidebars() {
    register_sidebar( array(
        'name'          => 'Big Store Main Sidebar',
        'id'            => 'big-store-sidebar-1',
        'description'   => 'Drag and drop your widgets here',
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper widget-horizontal">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ) );
    register_sidebar( array(
        'name'          => 'Big Store Main Sidebar 2',
        'id'            => 'big-store-sidebar-2',
        'description'   => 'Drag and drop your widgets here',
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper widget-horizontal">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ) );
    register_sidebar( array(
        'name'          => 'Big Store Shop Sidebar',
        'id'            => 'big-store-sidebar-shop',
        'description'   => 'Drag and drop your widgets here',
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ) );
    register_sidebar( array(
        'name'          => 'Footer Sidebar 1',
        'id'            => 'big-store-sidebar-footer1',
        'description'   => 'Drag and drop your widgets here',
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>'
    ) );
    register_sidebar( array(
        'name'          => 'Footer Sidebar 2',
        'id'            => 'big-store-sidebar-footer2',
        'description'   => 'Drag and drop your widgets here',
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>'
    ) );
    register_sidebar( array(
        'name'          => 'Footer Sidebar 3',
        'id'            => 'big-store-sidebar-footer3',
        'description'   => 'Drag and drop your widgets here',
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>'
    ) );
    register_sidebar( array(
        'name'          => 'Footer Sidebar 4',
        'id'            => 'big-store-sidebar-footer4',
        'description'   => 'Drag and drop your widgets here',
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>'
    ) );
  }

 ?>
