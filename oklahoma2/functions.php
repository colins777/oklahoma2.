<?php
add_action( 'wp_enqueue_scripts', 'my_custom_scripts', 100 );
function my_custom_scripts()
{

    wp_enqueue_script('minJs', get_template_directory_uri() . '/js/scripts.min.js');


    wp_enqueue_style('slick-slider-css', get_template_directory_uri() . '/style.css');

}

add_theme_support('custom-logo');


add_theme_support('post-thumbnails');

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter( 'excerpt_length', function(){
    return 10;
} );

add_filter('excerpt_more', function($more) {
    return '...';
});


add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});