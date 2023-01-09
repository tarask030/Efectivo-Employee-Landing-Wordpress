<?php
/**
 * ===============================
 * HOME HERO.PHP - main header file
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
$hero_title = get_field( 'hero_title' );
$hero_cnt = get_field( 'hero_cnt' );
$hero_link = get_field( 'hero_link' );
?>

<section class="home-hero full">
	
		<div class="row">
			
			<div class="col" data-aos="fade-up">
				<div class="txt">
					<?php if ($hero_title): ?>
					<h1><?php echo $hero_title ?></h1>
					<?php endif ?>

					<?php if ($hero_cnt): ?>
						<?php echo $hero_cnt ?>
					<?php endif ?>

					<?php if ($hero_link): ?>
						<a href="<?php echo $hero_link ?>" class="btn-white" target="_blank">
							<?php _e('Pobierz aplikację','effectivo'); ?>
						</a>
					<?php endif ?>
				</div>
			</div>

			<div class="col">
				<?php $hero_img = get_field( 'hero_img' ); ?>
				<?php $size = 'full'; ?>
				<?php if ( $hero_img ) : ?>
					<?php echo wp_get_attachment_image( $hero_img, $size, false, [
					    'class' => 'lazyload img-fluid',
					    'loading' => 'lazy',
					    'data-src' => wp_get_attachment_image_url( $hero_img , $size ),
					    'alt' => get_post_meta( $hero_img , '_wp_attachment_image_alt', true),
					    ]); 
					?>
				<?php endif; ?>
			</div>

		</div>

		<!-- BG ANIMACJA -->
		<div class="home-hero-animation">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/svg/hero-bg.svg" alt="" class="img-fluid">
		</div>

</section>