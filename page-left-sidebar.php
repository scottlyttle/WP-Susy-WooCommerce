<?php 
/* Template Name: Left Sidebar */
get_header(); ?>

<?php get_sidebar(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('content', 'page'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
