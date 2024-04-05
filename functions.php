<?php
function ultradeckScripts()
{
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assests/js/main.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assests/js/slick.min.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'ultradeckScripts');
