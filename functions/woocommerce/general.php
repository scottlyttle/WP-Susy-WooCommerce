<?php
/* ==============================================================
		Turn off WooCommerce CSS
============================================================== */

define('WOOCOMMERCE_USE_CSS', false);

/* ==============================================================
		Ajaxify woocommerce cart
============================================================== */

add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment'); 
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start(); 
	?>
	<div class="cart-contents">
		<a class="cart-items" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="View your cart">Cart (<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'formist'), $woocommerce->cart->cart_contents_count);?>)</a>
		<a class="cart-value" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="View your cart">Total <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	</div>
	<?php
	$fragments['.cart-contents'] = ob_get_clean();
	return $fragments;	
}