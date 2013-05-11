<?php
/**
 * Fundify functions and definitions
 *
 * @package Fundify
 * @since Fundify 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Fundify 1.0
 */


add_action( 'generate_rewrite_rules', 'my_rewrite_rules' );
function my_rewrite_rules( $wp_rewrite )
{
    $wp_rewrite->rules = array(
        '([^/]+)/widget/?$' => $wp_rewrite->index . '?pagename=widget&pageid=' . $wp_rewrite->preg_index( 1 )

    ) + $wp_rewrite->rules;
}

 
add_filter('query_vars', 'download_query_vars');
function download_query_vars($public_query_vars) {
$public_query_vars[] = "pageid";
return $public_query_vars;
}
