<?php
/**
 * ===============================
 * HOME WHY.PHP - main header file
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
$worker_title = get_field( 'worker_title' );
?>

<section class="home-worker">
	<div class="row">

		<div class="col" data-aos="fade-up">
			<?php $worker_img = get_field( 'worker_img' ); ?>
			<?php $size = 'full'; ?>
			<?php if ( $worker_img ) : ?>
				<?php echo wp_get_attachment_image( $worker_img, $size, false, [
		        'class' => 'lazyload img-fluid',
		        'loading' => 'lazy',
		        'data-src' => wp_get_attachment_image_url( $worker_img , $size ),
		        'alt' => get_post_meta( $worker_img , '_wp_attachment_image_alt', true),
		        ]); 
		    ?>
			<?php endif; ?>
		</div>

		<!-- TEXT -->
		<div class="col" data-aos="fade-up">
			<?php if ($worker_title ): ?>
				<h2>
					<?php echo $worker_title ?>
				</h2>
			<?php endif ?>
			<?php the_field( 'worker_cnt' ); ?>
		</div>

	</div>
</section>