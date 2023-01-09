<?php
/**
 * ===============================
 * INCLUDE GOOGLE FONT
 * ===============================
 *
 * @package BEGO
 * @since 1.0.0
 * @version 1.0.0
 */
function cbk_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-asap', 'https://fonts.googleapis.com/css2?family=Asap:wght@400;500;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'cbk_add_google_fonts');
