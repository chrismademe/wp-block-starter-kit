<?php

/**
 * Include functions from lib/
 */
$functions_to_load = glob(__DIR__ . '/lib/*.php');

if ( ! empty( $functions_to_load ) ) {
    foreach ( $functions_to_load as $file ) {
        require_once $file;
    }
}