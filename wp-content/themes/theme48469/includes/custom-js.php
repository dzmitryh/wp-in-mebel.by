<?php
/**
 * search.php
 *
 */
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

function custom_scripts() {
    wp_enqueue_script( 'wpc-fix', get_stylesheet_directory_uri() . '/js/wpc-fix.js', array('jquery'), '1.0' );
} ?>