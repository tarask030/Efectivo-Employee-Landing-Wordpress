<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php 
get_template_part( 'template-parts/partial', 'header' );
get_template_part( 'template-parts/partial', 'form' );
// get_template_part( 'template-parts/partial', 'mobile-menu' ); 
?>