<?php


if ( ! is_active_sidebar( 'sidebar-primary' ) ) {
	return;
}
?>

<aside class=" sidebar sidebar-primary widget-area sm-col sm-col-4 p4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-primary' ); ?>
</aside><!-- #secondary -->