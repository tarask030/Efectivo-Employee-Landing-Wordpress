<?php
/**
 * ===============================
 * LOADING FILES - CSS/JS
 * ===============================
 *
 * @package RG
 * @since 1.0.0
 * @version 1.0.0
 */
function pk_scripts_loader() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), time());

	// SLIDER
	wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/assets/js/swiper.js', array( 'jquery' ), time(), 'all');
	wp_enqueue_script( 'swipermainjs', get_template_directory_uri() . '/assets/js/swiper-main.js', array( 'jquery' ), time(), 'all');
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.css', array(), time());

	// FANCYBOX
	// if( is_page( array(17 ) ) or is_singular( 'product' ) ) {
	// wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array( 'jquery' ), time(), 'all');
	// wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), time());
	// }

	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), time(), 'all');
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.bundle.js', array( 'jquery' ), time(), 'all');
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' );

}
add_action( 'wp_enqueue_scripts', 'pk_scripts_loader' );


if( !is_admin()){
      wp_deregister_script('jquery');
      wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"),
      false, '1.11.3', true);
      wp_enqueue_script('jquery');
 }


add_action('wp_default_scripts', 'remove_jquery_migrate');

// function remove_plugin_assets() {
//     if( !is_page( array(10) ) ) {     
//         wp_dequeue_style( 'contact-form-7' );
        
//         wp_dequeue_script( array( 
//             'contact-form-7',
//         ) );
//     }
// }
// add_action( 'wp_enqueue_scripts', 'remove_plugin_assets', 999 );


pll_register_string("pobierz", "Pobierz aplikację", "effectivo");
pll_register_string("kontakt", "Kontakt", "effectivo");
