<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	This post is password protected. Enter the password to view comments.
	<?php return;
} ?>

<?php if ( have_comments() ) : ?>
	
	<h2 class="comments_title"><?php comments_number('No Responses', 'One Response', '% Responses' );?></h2>

	<ol class="comment_list">
		<?php wp_list_comments('type=comment&callback=yabtfw_comment'); ?>
	</ol>

	<nav class="navigation">
		<div class="next_comments"><?php previous_comments_link() ?></div>
		<div class="prev_comments"><?php next_comments_link() ?></div>
	</nav>
	
<?php else : ?>

	<?php if ( comments_open() ) : ?>

		<h4>Be the first to comment</h4>

	 <?php else : ?>
		
		<p>Comments are closed.</p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

	<?php include (TEMPLATEPATH . '/inc/respond.php' ); ?>
	
</div>

<?php endif; ?>