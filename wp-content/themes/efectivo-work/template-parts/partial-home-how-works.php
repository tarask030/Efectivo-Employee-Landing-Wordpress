<?php
/**
 * ===============================
 * HOME HOW WORKS.PHP - main header file
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
$how_title = get_field( 'how_title' );
$how_ctn = get_field( 'how_ctn' );
?>

<section class="home-how-works" id="howitworks">
	<div class="container">
		<?php if ($how_title ): ?>
			<h2 data-aos="fade-up">
				<?php echo $how_title ?>
			</h2>
		<?php endif ?>

		<?php if ( $how_ctn ): ?>
		<div data-aos="fade-up">
			<?php echo $how_ctn ?>
		</div>
		<?php endif ?>
	</div>

	<!-- IMAGES -->
	<?php $how_background = get_field( 'how_background' ); ?>
	<?php $size = 'full'; ?>
	<?php if ( $how_background ) : ?>
	<div class="home-how-works-img" data-aos="fade-up">
		<?php echo wp_get_attachment_image( $how_background, $size ); ?>
		<?php $how_video = get_field( 'how_video' ); ?>
		<?php if ( $how_video ) : ?>
			<div class="home-how-works-video" id="aplaVideo">
				<video id="Video"><source src="<?php echo esc_url( $how_video['url'] ); ?>" type="video/mp4"></video>
			</div>

			<button onclick="playVid()" type="button" id="play"></button>
			<button onclick="pauseVid()" type="button" id="stop"></button> 
		<?php endif; ?>
	</div>
	<?php endif; ?>

</section>