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
$how_why_title = get_field( 'how_why_title' );
?>

<section class="home-why" id="whyus">
	<div class="container">
		<?php if ($how_why_title ): ?>
			<h2 data-aos="fade-up">
				<?php echo $how_why_title ?>
			</h2>
		<?php endif ?>

		<!-- BOXES -->
		<?php if ( have_rows( 'how_why_boxes' ) ) : ?>
			<ul>
			<?php while ( have_rows( 'how_why_boxes' ) ) : the_row();
			$how_why_boxex_cnt = get_sub_field( 'how_why_boxex_cnt' );
			?>
				<li data-aos="fade-up">
					<!-- ICON -->
					<?php $how_why_boxex_icon = get_sub_field( 'how_why_boxex_icon' ); ?>
					<?php $size = 'full'; ?>
					<?php if ( $how_why_boxex_icon ) : ?>
						<div class="icon">
							<?php echo wp_get_attachment_image( $how_why_boxex_icon, $size ); ?>
						</div>
					<?php endif; ?>
					<h3>
						<?php the_sub_field( 'how_why_boxex_title' ); ?>
					</h3>

					<?php if ($how_why_boxex_cnt): ?>
						<div class="text">
							<?php echo $how_why_boxex_cnt ?>
						</div>
					<?php endif ?>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>