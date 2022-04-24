<?php

/*
Plugin Name:  Lrvcopy
Version    :  1.0
Description:  Demonstrating WordPress Hooks (Actions and Filters) with multiple examples.
Author     :  Sprite Coder
Author URI :  https://www.spritecoder.com/
License    :  GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  lrvcopy
*/

//=================================================
// Security: Abort if this file is called directly
//=================================================
if ( !defined('ABSPATH') ) { 
    die;
}

function custom_callback_function() {
    echo 'test compleato';
}

add_action('init', 'custom_callback_function');


function add_styles() {
    wp_register_style('my_stylesheet', get_template_directory_uri() . 'styles.css');
    wp_enqueue_style(('my_stylesheet'));
}
add_action('wp_enqueue_scripts', 'add_styles');

function webagency_custom_footer(){
    $data = Date('Y'); 
    $footer = "<div class='footer-agency'><p>Footer Copyright $data </p></div>";
    echo $footer;
}

add_action('wp_print_footer_scripts','webagency_custom_footer');