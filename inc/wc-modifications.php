<?php
/**
* Template Overrides for WooCommerce pages
*
* @link https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/#section-3
*
* @package Big Store
*/

function big_store_wc_modify() {
  // Shop and page changes ----------------------------------------------------*

  // Modify WooCommerce opening and closing HTML tags
  add_action( 'woocommerce_before_main_content', 'big_store_open_container_row', 5);
  function big_store_open_container_row() {
    echo '<div class="container shop-content"><div class="row">';
  }

  add_action( 'woocommerce_after_main_content', 'big_store_close_container_row', 5);
    function big_store_close_container_row() {
      echo '</div></div>';
    }


  // Remove the main WC sidebar from its original position
  remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

  if( is_shop() || is_product_category() ){

    add_action( 'woocommerce_before_main_content', 'big_store_add_sidebar_tags', 6);
    function big_store_add_sidebar_tags() {
      echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
    }


  //Put the main WC sidebar back, but using other action hook and on a different position
  add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

  add_action( 'woocommerce_before_main_content', 'big_store_close_sidebar_tags', 8);
  function big_store_close_sidebar_tags() {
      echo '</div>';
    }
  }




  //Modify HTML tags on a shop page.
  add_action( 'woocommerce_before_main_content', 'big_store_add_shop_tags', 9);
  function big_store_add_shop_tags() {
    if( is_shop() || is_product_category() ) {
      echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
    } else{
      echo '<div class="col">';
    }

  add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);
  }

  add_action( 'woocommerce_after_main_content', 'big_store_close_shop_tags', 4);
  function big_store_close_shop_tags() {
    echo '</div>';
  }
}
add_action( 'wp', 'big_store_wc_modify' );



  // Checkout changes ---------------------------------------------------------*

  // Removes Order Notes Title - Additional Information & Notes Field
  add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );


  // Remove Order Notes Field
  add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );

  function remove_order_notes( $fields ) {
       unset($fields['order']['order_comments']);
       return $fields;
  }


  // Move Order Review section
  add_action( 'woocommerce_checkout_order_review', 'add_order_review_title', 9);

  function add_order_review_title() {
    echo '<h3 id="order_review_heading">';
    esc_html_e( 'Your order', 'woocommerce' );
    echo '</h3>';
  }

  //Add order delivery note
  add_action( 'woocommerce_checkout_order_review', 'add_order_delivery_note', 21);

  function add_order_delivery_note() {
    echo '<h5 class="text-center">Orders are shipped within 12 hours of checkout (Mon- Fri)</h5>';
  }


  //Remove billing fields and change placeholder text
  // Hook in
  add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

  // Our hooked in function - $fields is passed via the filter!
  function custom_override_checkout_fields( $fields ) {
      $fields['order']['order_comments']['placeholder'] = '';
      unset($fields['billing']['billing_address_2']);

      return $fields;
  }
  add_filter('woocommerce_default_address_fields', 'wc_override_address_fields');
  function wc_override_address_fields( $fields ) {
  $fields['address_1']['placeholder'] = '';
  return $fields;
  }


  // Move email to first position on checkout
  add_filter( 'woocommerce_checkout_fields', 'checkout_email_first' );

  function checkout_email_first( $checkout_fields ) {
    $checkout_fields['billing']['billing_email']['priority'] = 4;
    return $checkout_fields;
  }


  // Misc Changes -------------------------------------------------------------*

  // Ajax card update on add to cart
  add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

  function woocommerce_header_add_to_cart_fragment( $fragments ) {
  global $woocommerce;

  ob_start();

  ?>
  <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
    <?php echo WC()->cart->get_cart_contents_count(); ?>
    <i class="fas fa-shopping-cart"> | </i>
    <?php echo WC()->cart->get_cart_total(); ?>
  </a>
  <?php
  $fragments['a.cart-customlocation'] = ob_get_clean();
  return $fragments;
  }


  // Remove image zoom from product page
  function remove_image_zoom_support() {
  remove_theme_support( 'wc-product-gallery-zoom' );
  }
  add_action( 'wp', 'remove_image_zoom_support', 100 );
