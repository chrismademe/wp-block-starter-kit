<?php

add_action( 'wp_enqueue_scripts', function() {

    // CSS
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );

    // Javascript

} );