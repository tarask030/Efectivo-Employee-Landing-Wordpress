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
$benefist_cat_title = get_field( 'benefist_cat_title' );
?>

<section class="home-catalog" id="catalogue-benefits">

	<div class="home-catalog-cnt">

		<div class="container">	

		<?php if ($benefist_cat_title): ?>
			<h2 data-aos="fade-up">
				<?php echo $benefist_cat_title; ?>
			</h2>
		<?php endif ?>

		<div class="row">
			
			<div class="col" data-aos="fade-up">
				<?php $benefist_cat_img = get_field( 'benefist_cat_img' ); ?>
				<?php $size = 'full'; ?>
				<?php if ( $benefist_cat_img ) : ?>
					<?php echo wp_get_attachment_image( $benefist_cat_img, $size, false, [
					    'class' => 'lazyload img-fluid',
					    'loading' => 'lazy',
					    'data-src' => wp_get_attachment_image_url( $benefist_cat_img , $size ),
					    'alt' => get_post_meta( $benefist_cat_img, '_wp_attachment_image_alt', true),
					    ]); 
					?>
				<?php endif; ?>
			</div>

			<div class="col">
				
				<?php if ( have_rows( 'benefist_cat_faq' ) ) : ?>
					<ul class="faq">
						<?php while ( have_rows( 'benefist_cat_faq' ) ) : the_row(); ?>
						<div class="faq-border" data-aos="fade-up">
							<div class="q">
								<?php the_sub_field( 'benefist_cat_faq_que' ); ?>
								<div class="close">
									<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M13 3.6001C13 3.04781 12.5523 2.6001 12 2.6001C11.4477 2.6001 11 3.04781 11 3.6001H13ZM11 20.4001C11 20.9524 11.4477 21.4001 12 21.4001C12.5523 21.4001 13 20.9524 13 20.4001H11ZM11 3.6001V20.4001H13V3.6001H11Z"></path><path d="M3.6001 11C3.04781 11 2.6001 11.4477 2.6001 12C2.6001 12.5523 3.04781 13 3.6001 13L3.6001 11ZM20.4001 13C20.9524 13 21.4001 12.5523 21.4001 12C21.4001 11.4477 20.9524 11 20.4001 11L20.4001 13ZM3.6001 13L20.4001 13L20.4001 11L3.6001 11L3.6001 13Z"></path></svg>
								</div>
							</div>
							<div class="a">
								<?php the_sub_field( 'benefist_cat_faq_ans' ); ?>
							</div>
						</div>
						<?php endwhile; ?>
					</ul>					
				<?php endif; ?>

			</div>

		</div>	

		</div>

	</div>
	
</section>