<article id="post-<?php the_ID(); ?>" <?php post_class('primary_content'); ?>>

	<?php if ( is_single() ) { ?>
	
		<h1><?php the_title(); ?></h1>

	<?php } else { ?>

		<h1>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h1>
	
	<?php } ?>
		
	<?php the_content(); ?>

	<nav id="post_navigation">

		<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

	</nav><!-- #post_navigation -->

	<?php if ( is_single() ) : ?>

		<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
		
		<section id="comments">

			<?php comments_template(); ?>

		</section><!-- comments -->

		<?php endif; ?>

	<?php endif; ?>

</article><!-- primary_content -->