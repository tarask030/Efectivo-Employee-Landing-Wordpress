<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();

$title = esc_html( get_field( '404_title','options' ) );
$cnt = get_field( '404_cnt','options' );
$allowed_types = array(
	'br'     => array(),
	'strong' => array(),
	'p'      => array(),
);
?>

<main class="main page404">
	
	<div class="container">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo.svg" alt="<?php bloginfo('name'); ?>" class="img-fluid">
		</a>
		<h1 class="typo1 typo1-center"><span>404</span><?php echo $title?></h1>
		<p><?php echo wp_kses( __( $cnt, 'frontline' ), $allowed_types ); ?></p>
		
		<div class="text-center">	
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-white">
				<?php echo _e('Wróć na stronę główną','frontline');?>
			</a>
		</div>
		
	</div><!-- end .container -->

</main>



<?php
get_footer();
