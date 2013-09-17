<?php
/* ==============================================================
		Wrap the product list in a section tag
============================================================== */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', create_function('', 'echo "<section id=\"woo-products\">";'), 10);
add_action('woocommerce_after_main_content', create_function('', 'echo "</section>";'), 10);