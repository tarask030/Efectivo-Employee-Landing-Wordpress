<?php
/**
 * ===============================
 * HOME USERS.PHP - main header file
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
$banner_link = get_field( 'banner_link' );
?>

	<section class="home-banner">

		<div class="container">
			
			<div class="row">
				
				<div class="col">
					<div class="home-banner-txt">
						<h2 data-aos="fade-up">
						<?php the_field( 'banner_txt' ); ?>
						</h2>

						<?php if ($banner_link ): ?>
							<div data-aos="fade-up">
							<a href="<?php echo $banner_link ?>" target="_blank" class="btn-white">
								<?php echo _e('Pobierz aplikację','effectivo');?>
							</a>
							</div>
						<?php endif ?>
					</div>
				</div>

				<div class="col">
					<?php $banner_img = get_field( 'banner_img' ); ?>
					<?php $size = 'full'; ?>
					<?php if ( $banner_img ) : ?>
						<?php echo wp_get_attachment_image( $banner_img, $size, false, [
					        'class' => 'lazyload img-fluid',
					        'loading' => 'lazy',
					        'data-src' => wp_get_attachment_image_url( $banner_img , $size ),
					        'alt' => get_post_meta( $banner_img , '_wp_attachment_image_alt', true),
					        ]); 
					    ?>
					<?php endif; ?>
				</div>

			</div>
		</div>
	
	</section>
