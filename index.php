

<div class="site-container">
<?php get_header(); ?>

	<div class="site-inner">
	<div id="primary" class="max-width-9 mx-auto">
		<div class="clearfix">
		<main id="content" class="content sm-col sm-col-8 p4" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

			
				get_template_part( 'template-parts/content' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
		<?php get_sidebar();?>
	</div><!-- Clearfix -->
	</div><!-- #primary -->
	</div> <!-- #Site inner -->
	

<?php get_footer();?>

</div> <!-- #Site Container -->