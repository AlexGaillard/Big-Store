<?php
/**
* The template for the sidebar containing the main widget area
* @package Big Store
*/
?>

<?php if( is_active_sidebar( 'big-store-sidebar-1') ): ?>
  <aside class="col-md-2 col-sm-12 text-center sidebar-right">
    <?php dynamic_sidebar( 'big-store-sidebar-1' ); ?>
  </aside>
<?php endif;
