<?php
/*
* Plugin Name: Freelancer Functions
* Description: Shortcodes for Freelancer
* Author: Matt Pocock
* Author URI: https://mattpocock.github.io
*/

// Example 1 : WP Shortcode to display form on any page or post.
function page_top_image( $atts ) {

    $a = shortcode_atts( array(
        'src' => '',
        'title' => ''
    ), $atts);

    if ($a['src'] === '') {
        return '<h2 class="page-heading">'.$a['title'].'</h2>';
    }

    return '<h2 class="page-heading">'.$a['title'].'</h2>'
            .'<img class="page-heading__image" src="'.$a["src"].'"/>';

}

add_shortcode('featured-image', 'page_top_image');

?>
