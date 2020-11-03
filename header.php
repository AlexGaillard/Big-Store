<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big Store
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<title><?php echo get_bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>
  <div id="page" class="site">
		<header class="global-header">

		<?php $hotline_c    = get_theme_mod( 'set_hotline_colour' ); ?>

      <section class="hotline" style="background-color: <?php echo $hotline_c ?>">
        <div class="container-fluid">
					<div class="row">
						<div class="col-12 col-md-6 text-center text-md-left">

							<?php
					     $showhotline  = get_theme_mod( 'set_hotline_show', 0 );
							 $hotline      = get_theme_mod( 'set_hotline' );
							 $colour			 = get_theme_mod( 'set_colour');
							 $text			 	 = get_theme_mod( 'set_text');

					     if( $showhotline == 1 && ( !empty( $hotline ) ) ):

								 	echo '<i class="fa fa-phone-square" aria-hidden="true">  </i>';
								  echo '<p>Customer Hotline: </p>';
					   	 		echo '<a href="tel:';
									echo $hotline;
									echo '">';
									echo $hotline;
									echo '</a>';

					      endif;
					     ?>

						</div>

						<div class="col-12 col-md-6 navbar-expand d-flex justify-content-center justify-content-md-end">
							<ul class="navbar-nav">
								<?php if( is_user_logged_in() ) : ?>
								<li>
									<a href="<?php echo esc_url( get_permalink( get_option ( 'woocommerce_myaccount_page_id' ) ) ) ?>" class="nav-link">My Account</a>
								</li>
								<li>
									<span> | </span>
								</li>
								<li>
									<a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option ( 'woocommerce_myaccount_page_id' ) ) ) ) ?>" class="nav-link">Logout</a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo esc_url( get_permalink( get_option ( 'woocommerce_myaccount_page_id' ) ) ) ?>" class="nav-link">Login / Register</a>
								</li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</section>


			<section class="main-header" style="background-color:<?php echo $colour; ?>">
				<div class="container-fluid">

					<div class="row">
						<div class="header-first-column col-md-3 col-12" style="color:<?php echo $text; ?>">
							<div class="text-md-left text-center">
							<a href="<?php echo home_url( '/' ) ?>">
	              <?php if( has_custom_logo() ) : ?>
	              <?php the_custom_logo() ?>
								<span class="tagline d-block"><?php bloginfo( 'description'); ?></span>
	              <?php else: ?>
	              <p class="site-title"><?php bloginfo( 'title' ); ?></p>
	              <?php endif; ?>
	            </a>
							</div>
	           
	          </div>

						<div class="header-second-column col-md-6 col-12 m-auto" style="color:<?php echo $text; ?>">
							<p class="m-auto text-center">NATIONWIDE DELIVERY AVAILABLE <i class="fas fa-shipping-fast"></i></p>
							<p class="m-auto text-center">Orders shipped within 12 hours of checkout (Mon- Fri)</p>
						</div>

	          <div class="header-third-column col-md-3 col-12 text-md-right text-center m-auto" style="background-color:<?php echo $colour; ?>">
								<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
									<?php echo WC()->cart->get_cart_contents_count(); ?></span>
									<i class="fas fa-shopping-cart"> | </i>
									<?php echo WC()->cart->get_cart_total(); ?>
								</a>
								<a class="btn" href="<?php echo wc_get_checkout_url(); ?>" role="button">Go To Checkout <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
	          </div>
				</div>

      </section>

      <section class="header-nav">
        <div class="container-fluid">
					<div class="row">
						<div class="col-md-auto col-12">
		          <nav class="category-menu navbar navbar-expand-md" role="navigation">
		            <button class="navbar-toggler m-auto" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		               <span class="navbar-toggler-icon d-inline"><i class="fas fa-bars"></i> Shop by category</span>
		            </button>
		            <?php wp_nav_menu(
		              array(
		                'theme_location'    => 'big_store_category_menu',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse text-center',
		                'container_id'      => 'navbar-collapse-1',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                'walker'            => new WP_Bootstrap_Navwalker(),
		              )
		            );
		            ?>
		          </nav>
						</div>

						<div class="search-column col-md col-12 text-center m-auto">
							<?php get_search_form(); ?>
						</div>

						<div class="col-md-auto col-12 d-flex justify-content-md-end justify-content-center">
							<nav class="category-menu navbar navbar-expand" role="navigation">
								<?php wp_nav_menu(
									array(
										'theme_location'    => 'big_store_main_menu',
										'depth'             => 2,
										'container'         => 'div',
										'container_class'   => 'collapse navbar-collapse',
										'container_id'      => 'navbar-collapse-2',
										'menu_class'        => 'nav navbar-nav',
										'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										'walker'            => new WP_Bootstrap_Navwalker(),
									)
								);
								?>
							</nav>
						</div>


					</div>

        </div>
      </section>


		</header>
