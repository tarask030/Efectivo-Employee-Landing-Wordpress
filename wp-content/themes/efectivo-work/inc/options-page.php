<?php
/**
 * ===============================
 * ADD OPTION PAGE
 * ===============================
 *
 * @package BEGO
 * @since 1.0.0
 * @version 1.0.0
 */
function nid_acf_options_page() {
    if ( ! function_exists( 'acf_add_options_page' ) )
        return;

    acf_add_options_page( array( 
        'title'      => 'Opcje strony',
        'capability' => 'manage_options',
    ) );
}
add_action( 'init', 'nid_acf_options_page' );