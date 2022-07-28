<?php
/**
 * This function will prevent guest user to have access of product single page.
 *
 *
 * @author Akramul Hasan
 * @link https://profiles.wordpress.org/wpfy
 */

function wpfy_access_product_to_member_only(){

	if(!is_user_logged_in() && is_singular('product')){
		//Redirect to the homepage
		//wp_safe_redirect(home_url());


		//Redirect to woocommerce my account page
		wp_safe_redirect(wc_get_page_permalink('myaccount'));
	}

}
add_action('template_redirect','wpfy_access_product_to_member_only');
