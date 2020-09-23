<?php
/**
* The template for the sidebar containing the main widget area
* @package Big Store
*/
?>

<?php if( is_active_sidebar( 'big-store-sidebar-2') ): ?>
  <aside class="col-md-2 col-sm-12 text-center sidebar-left">
    <?php dynamic_sidebar( 'big-store-sidebar-2' ); ?>
  </aside>
<?php endif;
