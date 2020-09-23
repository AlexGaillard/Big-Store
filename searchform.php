<?php
/**
 * Template for displaying search forms in Big Store
 *
 * @package Big Store
 */
?>

<form role="search" method="get" class="search-form d-md-flex" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field flex-fill" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
  <?php if( class_exists( 'WooCommerce' )): ?>
    <input type="hidden" value="product" name="post_type" id="post_type" />
  <?php endif; ?>
</form>
