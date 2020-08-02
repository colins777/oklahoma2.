<?php

define('OKLAHOMA_URL', get_template_directory_uri());

define('OKLAHOMA_PATH', get_template_directory());

add_action( 'wp_enqueue_scripts', 'my_custom_scripts', 100 );
function my_custom_scripts()
{

    wp_enqueue_script('minJs', OKLAHOMA_URL . '/js/scripts.min.js');

    if(is_front_page()) {
        wp_enqueue_script('leafletMap', OKLAHOMA_URL . '/libs/leaflet/leaflet.js');

        wp_enqueue_script('leafletMapCustom', OKLAHOMA_URL . '/js/leaflet-custom.js', array('leafletMap'));
    }

    wp_enqueue_style('styles', OKLAHOMA_URL . '/style.css');

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


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}



// Add cottages
require OKLAHOMA_PATH . '/inc/Cottages.php';
new Oklahoma2\Cottages();