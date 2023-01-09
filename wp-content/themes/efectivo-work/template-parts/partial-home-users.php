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
$users_title = get_field( 'users_title' );
?>

<?php if ( have_rows( 'users' ) ) : ?>
	<section class="home-users" id="users">
	<?php if ($users_title): ?>
		<div class="home-users-header">
			<div class="container">
				<h3>
					<?php echo $users_title ?>
				</h3>
			</div>
		</div>
	<?php endif ?>

	<div class="home-users-slider">
		<div class="container">
			<div class="mySwiper">
			<div class="swiper-wrapper">

				<?php while ( have_rows( 'users' ) ) : the_row(); ?>
					<div class="swiper-slide">
					<?php $users_img = get_sub_field( 'users_img' ); ?>
					<?php $size = 'full'; ?>
					<?php if ( $users_img ) : ?>
						<div class="home-users-slider-foto">
							<?php echo wp_get_attachment_image( $users_img, $size ); ?>
							<div class="quote">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/svg/quote.svg" alt="">
							</div>
						</div>
					<?php endif; ?>
					<h4>
						<?php the_sub_field( 'users_name' ); ?>
					</h4>
					<?php the_sub_field( 'users_txt' ); ?>
					</div>
				<?php endwhile; ?>

			</div>
			<div class="swiper-pagination"></div>
	</div>
		</div>
	</div>

	</section>
<?php endif ?>