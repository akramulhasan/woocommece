<?php

// Control Related Products AMount and Column //

add_filter( 'woocommerce_output_related_products_args', 'wdb_related_products_args' );
  function wdb_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}




//Control Number Of Coulmns in Archive page //

add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3;
    }
}