<?php
/* Template Name: Shop */
get_header(); ?>

<section id="woo-products">
	<ul class="products">

		<?php 
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
		);
		$shop_loop = new WP_Query($args);
		if ( $shop_loop->have_posts() ) { ?>
			
		<?php while ( $shop_loop->have_posts() ) : $shop_loop->the_post(); ?>

			<?php get_template_part( 'content', 'product' ); ?>

		<?php endwhile;
		} else {
			
			_e( 'Sorry no products found.', 'woocommerce' );

		} ?>

	</ul>
<section>

<?php get_sidebar('shop'); ?>
<?php get_footer(); ?>