<?php
/**
 * ===============================
 * HOME PACKAGES .PHP - main header file
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<section class="home-packages" id="plans">
	<div class="container">
		<h2 data-aos="fade-up">
			<?php the_field( 'packages_section' ); ?>
		</h2>

		<?php if ( have_rows( 'packages' ) ) : ?>
			<div class="home-packages-box">
				<?php $i=0; while ( have_rows( 'packages' ) ) : the_row(); $i++; ?>
					<?php $packages_info = get_sub_field( 'packages_info' ); ?>
					<div class="home-packages-box-item" data-aos="fade-up">
						<div class="name">
							<div><?php echo _e('Pakiet','effectivo');?></div>
							<h4><?php the_sub_field( 'packages_title' ); ?></h4>
						</div>
						<?php the_sub_field( 'packages_cnt' ); ?>
						<?php if ($packages_info): ?>
							<div class="info">
							</div>
							<div class="info-txt">
								<?php echo $packages_info;?>
							</div>
						<?php endif ?>
						<div class="txt-center">
							<button class="btn-white" data-value="<?php echo the_sub_field( 'packages_button' )?>"><?php echo _e('Wybierz plan','effectivo');?></button>	
						</div>					
					</div>
				<?php endwhile; ?>			
			</div>
		<?php endif; ?>

		
	</div>
</section>