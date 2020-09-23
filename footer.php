<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big Store
 */

?>
		<footer>

      <section class="footer-widgets">
				<div class="container">
					<div class="row">
						<?php if( is_active_sidebar( 'big-store-sidebar-footer1' ) ): ?>
		          <div class="col-md-3 col-6 text-md-left text-center">
		            <?php dynamic_sidebar( 'big-store-sidebar-footer1' ); ?>
		          </div>
		        <?php endif; ?>
		        <?php if( is_active_sidebar( 'big-store-sidebar-footer2' ) ): ?>
		          <div class="col-md-3 col-6 text-md-left text-center">
		            <?php dynamic_sidebar( 'big-store-sidebar-footer2' ); ?>
		          </div>
		        <?php endif; ?>
		        <?php if( is_active_sidebar( 'big-store-sidebar-footer3' ) ): ?>
		          <div class="col-md-6 col-12 text-center sign-up">
		            <?php dynamic_sidebar( 'big-store-sidebar-footer3' ); ?>
		          </div>
		        <?php endif; ?>
        	</div>

			</section>
				
				<?php 
				
				$colour			 = get_theme_mod( 'set_colour');

				?>

				<section class="payment-methods" style="background-color:<?php echo $colour; ?>">
					<div class="container-flex">

						<div class="d-flex align-items-center justify-content-around flex-wrap">

							<?php $loop = new WP_Query( array( 'post_type' => 'payment_method', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<img class="payment" src="<?php echo $url ?>" />
								<?php endwhile; ?>

						</div>

					</div>
				</section>

				<section class="copyright">
					<div class="container">
						<div class="row">
  						<div class="copyright-text col-12 col-md-6 text-md-left text-center">
    						<p>&copy; The Big Co. <?php echo date("Y"); ?></p>
  						</div>
  						<nav class="footer-menu col-12 col-md-6 text-md-right text-center">
    						<?php
        				wp_nav_menu (
            			array (
                	'theme_location'    => 'big_store_footer_menu'
            			)
          			)
     						?>
  						</nav>
						</div>
					</div>
				</section>

	</footer>

  <?php wp_footer(); ?>

</body>

</html>
