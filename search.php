<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h1>Search Results for: "<?php echo get_search_query(); ?>"</h1>

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'content', 'post-loop' ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<h1>No posts found.</h1>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
