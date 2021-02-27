<?php

add_action( 'wp_enqueue_scripts', function() {

    // CSS
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

    // Javascript

} );