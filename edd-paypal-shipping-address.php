<?php
/**
 * Plugin Name: Easy Digital Downloads - PayPal Shipping Address
 * Description: Tells PayPal to collect a shipping address for EDD purchases
 * Author: Pippin Williamson
 * Author URI: http://pippinsplugins.com
 * Contributors: mordauk
 * Version: 1.0
 */

function pw_edd_paypal_shipping_args( $args, $purchase_data ) {
	$args['no_shipping'] = '2';
	return $args;
}
add_filter( 'edd_paypal_redirect_args', 'pw_edd_paypal_shipping_args', 10, 2 );