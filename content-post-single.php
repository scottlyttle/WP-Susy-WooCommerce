<article id="post-<?php the_ID(); ?>" <?php post_class('primary_content'); ?>>

	<h1><?php the_title(); ?></h1>

	<?php the_content(); ?>

	<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
	
		<section id="comments">

			<?php comments_template(); ?>

		</section><!-- comments -->

	<?php endif; ?>

</article><!-- primary_content -->