<?php
/**
 * ===============================
 * HOME BENEFIST.PHP - main header file
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
$benefist_title = get_field( 'benefist_title' );
?>

<section class="home-benefist" id="benefist">
	
	<div class="home-benefist-cnt">
		
		<div class="container">	

		<?php if ($benefist_title): ?>
			<h2 data-aos="fade-up">
				<?php echo $benefist_title ?>
			</h2>
		<?php endif ?>

		<?php if ( have_rows( 'benefist_loop' ) ) : ?>
		<ul>
			<?php while ( have_rows( 'benefist_loop' ) ) : the_row();
			$benefist_loop_title = get_sub_field( 'benefist_loop_title' ); ?>
				<li data-aos="fade-up">
					<?php $benefist_loop_icon = get_sub_field( 'benefist_loop_icon' ); ?>
					<?php $size = 'full'; ?>
					<?php if ( $benefist_loop_icon ) : ?>
					<div class="icon">
						<?php echo wp_get_attachment_image( $benefist_loop_icon, $size ); ?>
					</div>
					<?php endif; ?>

					<?php if ($benefist_loop_title): ?>
						<h3>
							<?php echo $benefist_loop_title ?>
						</h3>
					<?php endif ?>

					<p><?php the_sub_field( 'benefist_loop_cnt' ); ?></p>
				</li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?>	

		</div>

	</div>
	
</section>