<?php get_header(); ?>

<article id="page-<?php the_ID(); ?>" <?php post_class('primary_content'); ?>>
	
	<h1><?php _e('Error 404 - Page Not Found','yabtfw'); ?></h1>

</article><!-- primary_content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>