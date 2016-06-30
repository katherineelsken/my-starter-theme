<div class="site-container">
<?php get_header(); ?>

	<div class="site-inner">
	<div id="primary" class="content-sidebar-wrap">
		<main id="content" class="content two-thirds first" role="main">


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		<?php get_sidebar();?>

	</div><!-- #primary -->
	</div> <!-- #Site inner -->
	

<?php get_footer();?>

</div> <!-- #Site Container -->