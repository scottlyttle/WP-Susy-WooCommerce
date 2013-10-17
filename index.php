<?php get_header(); ?>

<article id="page-<?php the_ID(); ?>" <?php post_class('primary_content'); ?>>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'post-loop' ); ?>

	<?php endwhile; else : ?>

		<h1>Nothing Found</h1>

	<?php endif; ?>

</article><!-- primary_content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>


