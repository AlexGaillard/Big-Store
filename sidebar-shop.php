<?php
/**
* The template for the sidebar containing the main widget area
* @package Big Store
*/
?>

<?php if( is_active_sidebar( 'big-store-sidebar-shop') ): ?>
    <?php dynamic_sidebar( 'big-store-sidebar-shop' ); ?>
<?php endif;
