<?php
/**
 * ===============================
 * THEME SUPPORT OPTIONS
 * ===============================
 *
 * @package pk
 * @since 1.0.0
 * @version 1.0.0
 */

if ( ! function_exists( 'pk_setup_theme' ) ) :
	function pk_setup_theme() {

		// Make theme available for translation: Translations can be filed in the /languages/ directory
		load_theme_textdomain( 'pk', get_template_directory() . '/languages' );

		// Theme Support
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		) );

		add_filter(
		    'wp_lazy_loading_enabled',
		    function( $result, $tag_name ) {
		        if ( 'img' === $tag_name ) {
		            return false;
		        }
		        return $result;
		    },
		    10,
		    2
		);

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Default Attachment Display Settings
		update_option( 'image_default_align', 'none' );
		update_option( 'image_default_link_type', 'none' );
		update_option( 'image_default_size', 'large' );

		// Custom CSS-Styles of Wordpress Gallery
		add_filter( 'use_default_gallery_style', '__return_false' );

	}
	add_action( 'after_setup_theme', 'pk_setup_theme' );
endif;

/**
 * Set the max image width.
 */
function pk_max_srcset_image_width() {
	return 2560;
}
add_filter( 'max_srcset_image_width', 'pk_max_srcset_image_width', 10, 2 );

function pk_add_image_sizes() {
	add_image_size( 'image675', 675, 338, true );
	add_image_size( 'image1390', 1390, 400, true );
	add_image_size( 'image1390a', 1390, 600, true );
}
add_action( 'init', 'pk_add_image_sizes' );

// // add custom size to editor image size options
// function my_editor_image_sizes( $sizes ) {
//     $sizes = array_merge( $sizes, array(
//       'imageCnt' => __( 'Foto wpis' ),
//       'image1030' => __( 'Foto wpis - small (1030x550)' )
//     ));
//     return $sizes;
// }
// add_filter( 'image_size_names_choose', 'my_editor_image_sizes' );

/**
 * Remove default WP image sizes
 *
 * @param array $sizes Array of media image sizes.
 *
 * @return array
 */
function pk_remove_default_images( $sizes ) {
	unset( $sizes['medium'] ); // 300px
	unset( $sizes['large'] ); // 1024px
	unset( $sizes['medium_large'] ); // 768px
	return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'pk_remove_default_images' );

/**
 * Nav menus
 *
 * @since v1.0
 */
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'main-menu'   => 'Main Navigation Menu',
			'blog-menu' => 'Blog menu',
		)
	);
}

// Custom Nav Walker: wp_bootstrap4_navwalker()
$custom_walker = get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
if ( is_readable( $custom_walker ) ) {
	require_once $custom_walker;
}

$custom_walker_footer = get_template_directory() . '/inc/wp_bootstrap_navwalker_footer.php';
if ( is_readable( $custom_walker_footer ) ) {
	require_once $custom_walker_footer;
}

function add_notification_count_to_menu($item_output, $item, $depth, $args)
    {
        if ($args->theme_location == 'main-menu' && $item->title == 'O nas') {
		global $w3all_phpbb_unotifications; 
            $item_output .= '';

        }

        return $item_output;
    }
add_filter('walker_nav_menu_start_el', 'add_notification_count_to_menu', 10, 4);

 


 // DELETE NOSCRIPT STYLE GALLERY WOOCOMERCE
add_action( 'init', 'remove_wc_noscript' );
function remove_wc_noscript(){
  remove_action( 'wp_head', 'wc_gallery_noscript' );
};

add_filter( 'autoptimize_filter_imgopt_lazyload_cssoutput', 'nonoscript_lazyload');
function nonoscript_lazyload($in) {
   return str_replace( '<noscript><style>.lazyload{display:none;}</style></noscript>', '', $in ) ;
}


add_theme_support( 'soil-clean-up' );
//add_theme_support( 'soil-js-to-footer' );
//add_theme_support( 'soil-disable-trackbacks' );
//add_theme_support( 'soil-relative-urls' );
//add_theme_support( 'soil-disable-asset-versioning' );
//add_theme_support('soil-disable-rest-api');


// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


add_filter( 'script_loader_src', 'wpse47206_src' );
add_filter( 'style_loader_src', 'wpse47206_src' );
function wpse47206_src( $url )
{
    if( is_admin() ) return $url;
    return str_replace( site_url(), '', $url );
}

// SVG
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


// MENU 
add_filter( 'nav_menu_css_class', function ( $classes, $item, $args, $depth ) {
    if ( $item->ID == 22 ) {
        if ( is_singular( 'post' ) ) {
            $classes[] = 'current-menu-item';
        }
    } 
    elseif ( $item->ID == 27) {
        if ( is_singular( 'market-insights' ) or is_tax('cat-market-insights') or is_post_type_archive( 'product' ) ) {
            $classes[] = 'current-menu-item';
        }
    }
    elseif ( $item->ID == 24 ) {
        if ( is_singular( 'training' ) or is_category('cat-training') or is_post_type_archive( 'training' ) ) {
            $classes[] = 'current-menu-item';
        }
    }
    return $classes;
}, 10, 4 );

add_action( 'template_redirect', function(){
	ob_start( function( $buffer ){
		$buffer = str_replace( array( ' type="text/css"', " type='text/css'" ), '', $buffer );
		$buffer = str_replace( array( ' type="text/javascript"', " type='text/javascript'" ), '', $buffer );        
		return $buffer;
	});
});


function custom_jpeg_quality( $quality, $context ) {
	return 100;
}
add_filter( 'jpeg_quality', 'custom_jpeg_quality', 10, 2 );


function phone_url( $phone_number = false ) {
	$phone_number = str_replace( array( '(', ')', '-', '.', '|', ' ' ), '', $phone_number );
	return esc_url( 'tel:' . $phone_number );
}

add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
add_action('get_header', function() {
	remove_action('wp2_head', '_admin_bar_bump_cb');
});
