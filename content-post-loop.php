<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</h1>

	<?php the_excerpt(); ?>

</article><!-- primary_content -->