<?php
/**
 * ===============================
 * HEADER.PHP - main header file
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
$site_title = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description' );
?>
<?php 
get_template_part( 'template-parts/partial', 'mobile-menu' ); 
?>	

<?php if ( !is_404() ): ?>
<header class="navbar__fixed">	
	<div class="navbar__fixed-cnt">
		<!-- LOGO -->
		<figure class="navbar__fixed-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo.svg" alt="<?php bloginfo('name'); ?>">
			</a>		
		</figure>

		<!-- MENU -->
		<?php 
			get_template_part( 'template-parts/partial', 'header-main' ); 
		?>		
	
	</div><!-- end .navbar__fixed-cnt -->
</header>
<?php endif;?>


<div class="load">