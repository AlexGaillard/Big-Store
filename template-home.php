<?php
/*
Template Name: Home Page
*/

get_header();
 ?>

<div class="homepage-content">
  <main>

    <section class="slider">
       <!-- Place somewhere in the <body> of your page -->
         <div class="flexslider">
           <ul class="slides">
            <?php

            for ($i=1; $i < 5; $i++) :
              $slider_page[$i]             = get_theme_mod( 'set_slider_page' . $i );
              $slider_button_text[$i]      = get_theme_mod( 'set_slider_button_text' . $i);
              $slider_button_url[$i]       = get_theme_mod( 'set_slider_button_url' . $i);
            endfor;

            $args = array(
               'post_type'         => 'page',
               'posts_per_page'    => 4,
               'post__in'          => $slider_page,
               'orderby'           => 'post__in',
            );

            $slider_loop = new WP_Query( $args );
           $j = 1;
           if( have_posts() ):
               while( $slider_loop->have_posts() ):
                   $slider_loop->the_post();

            ?>
             <li>
               <?php the_post_thumbnail( 'big-store-slider', array( 'class' => 'img-fluid' ) ); ?>
               <div class="container">
                 <div class="slider-details-container">
                   <div class="slider-title">
                     <h1><?php the_title(); ?></h1>
                   </div>
                   <div class="slider-description">
                     <div class="subtitle"><?php the_content(); ?></div>
                     <a class="link" href="<?php echo $slider_button_url[$j]; ?>"><?php echo $slider_button_text[$j]; ?></a>
                   </div>
                 </div>
               </div>
             </li>
             <?php
             $j++;
             endwhile;
             wp_reset_postdata();
             endif;
             ?>
           </ul>
         </div>
    </section>


    <section class="category-selector">

      <div class="container-fluid">
        <div class="row">
          <?php get_sidebar('left'); ?>
          <div class="col-md-8 col-sm-12 mb-auto">

            <div class="row">
              <div class="section-title m-auto">
                <h2>Browse by Category</h2>
              </div>

              <div class="col-12 text-center">
                <?php
                  // Get all product categories
                  $product_category_terms = get_terms( array(
                    'taxonomy'   => "product_cat",
                    'hide_empty' => 1,
                  ));

                  foreach($product_category_terms as $term){
                    // Get the term link (if needed)
                    $term_link = get_term_link( $term, 'product_cat' );

                    ## -- Output Example -- ##

                    // The link (start)
                    echo '<a class="category-link" href="' . $term_link . '">';

                    // Display the product category thumbnail
                    woocommerce_subcategory_thumbnail( $term );

                    // Display the term name
                    echo '<p class="category-name">';
                    echo $term->name;
                    echo '</p>';

                    // Link close
                    echo '</a>';
                  }
                ?>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="section-title m-auto">
                <h2>Most popular products</h2>
              </div>

                <div class="col-12">
                  <?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity"]'); ?>
                </div>

            </div>

          </div>
          <?php get_sidebar('right'); ?>
        </div>
      </div>
    </section>

    <?php
     $showdeal     = get_theme_mod( 'set_deal_show', 0 );
     $deal         = get_theme_mod( 'set_deal' );
     $currency     = get_woocommerce_currency_symbol();
     $regular      = get_post_meta( $deal, '_regular_price', true );
     $sale         = get_post_meta( $deal, '_sale_price', true);

     if( $showdeal == 1 && ( !empty( $deal ) ) ):
       if ( !empty( $sale )  ) :

         $discount_percentage = absint( 100 -( ( $sale/$regular ) * 100 ) );

         else :

         $discount_percentage = 0;

         endif;
     ?>

      <section class="deal-of-the-week">
        <div class="container">
          <div class="section-title text-center">
            <h2><?php echo get_theme_mod( 'set_deal_title', 'Deal of the Week' ); ?></h2>
          </div>

          <div class="row text-center">
            <div class="deal-img col-md-6 col-sm-12 ml-auto text-center">
              <a href="<?php echo get_permalink( $deal ); ?>">
                <?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?>
              </a>
            </div>
            <div class="deal-desc col-md-4 col-sm-12 mr-auto text-center">
             <?php if( !empty ( $sale ) ) : ?>
              <span class="discount">
                <?php echo $discount_percentage . '% OFF'; ?>
              </span>
            <?php endif; ?>
            <?php  if( !empty( $sale ) ) : ?>
            <h3>
              <a href="<?php echo get_permalink( $deal ); ?>"><?php echo get_the_title ( $deal ); ?></a>
            </h3>
            <p><?php  echo get_the_excerpt ( $deal ); ?></p>
            <div class="prices">
              <span class="regular strikethrough">
                <?php
                echo $currency;
                echo $regular;
                 ?>
              </span>
              <span class="sale">
                <?php
                echo $currency;
                echo $sale;
                 ?>
              </span>
            <?php else : ?>
              <h3>
                <a href="<?php echo get_permalink( $deal ); ?>"><?php echo get_the_title ( $deal ); ?></a>
              </h3>
              <p><?php  echo get_the_excerpt ( $deal ); ?></p>
              <div class="prices">
                <span class="sale">
                  <?php
                  echo $currency;
                  echo $regular;
                   ?>
                </span>
            <?php endif; ?>
            </div>
            <a href="<?php echo esc_url( '?add-to-cart=' . $deal ); ?>" data-quantity="1" class="button add-to-cart product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $deal; ?>" rel="nofollow">Add to cart</a>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

  </main>
</div>


<?php get_footer(); ?>
