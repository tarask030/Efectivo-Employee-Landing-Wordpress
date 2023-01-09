<?php
/**
 * ===============================
 * BLOG RECOMENDED .PHP
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */

?>

<section class="home-blog" id="blog">
	<div class="container">
		<h2 data-aos="fade-up">
			<?php echo _e('Więcej <span>artykułów</span>','effectivo');?>
		</h2>	

		<?php
        $categories = get_the_category();
        $category_id = $categories[0]->cat_ID;
        $args = array(
            'posts_per_page' => 3,          
            'post_type'      => 'post',
            'orderby'        => 'title',
            'order'          => 'ASC',            
            'post__not_in' => array( $post->ID ),
            'category__in' => array( $category_id ),
        );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
        ?>
		<div class="blogSwiper">
			<div class="swiper-wrapper">
				<?php while ( have_posts() ) : the_post(); ?> 
					<?php $news_lead = get_field('news_lead'); ?>
					<div class="swiper-slide">
						<a href="<?php the_permalink();?>">
							<?php $news_img = get_field( 'news_img' ); ?>
							<?php $size = 'image675'; ?>
							<?php if ( $news_img ) : ?>
								<div class="foto">
									<?php echo wp_get_attachment_image( $news_img, $size, false, [
								        'class' => 'lazyload img-fluid',
								        'loading' => 'lazy',
								        'data-src' => wp_get_attachment_image_url( $news_img , $size ),
								        'alt' => get_post_meta( $news_img , '_wp_attachment_image_alt', true),
								        ]); 
								    ?>
								</div>
								<h3><?php the_title();?></h3>
								<?php if ($news_lead): ?>
								<div class="cnt">
									<?php $content = wp_strip_all_tags( $news_lead ); echo mb_strimwidth($content, 0, 170,'...');?>
								</div>
								<?php endif ?>
							<?php endif; ?>

							<div class="row">
								<div class="col date">
									<?php echo the_time(' d.m.Y ');?>
								</div>
								<div class="col col-right more">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.4302 18.0698L20.5002 11.9998L14.4302 5.92983" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M3.5 12L20.33 12" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile;
				wp_reset_postdata();
				?>
		</div>
		<div class="swiper-pagination"></div>
		<?php } ?>
	</div>
</div>
</section>