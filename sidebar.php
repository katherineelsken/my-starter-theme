<?php


if ( ! is_active_sidebar( 'sidebar-primary' ) ) {
	return;
}
?>

<aside class=" sidebar sidebar-primary widget-area one-third" role="complementary">
	<?php dynamic_sidebar( 'sidebar-primary' ); ?>
</aside><!-- #secondary -->