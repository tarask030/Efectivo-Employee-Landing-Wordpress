    <?php
/**
 * ===============================
 * SINGLE.PHP - The template for displaying single page
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
get_header();
?>

<main class="main-cnt">
    
        <?php
        get_template_part( 'template-parts/partial', 'breadcrumb');
        ?>

            <div class="container">

        <!-- FOTO -->
        <?php $news_img = get_field( 'news_img' ); ?>
        <?php $size = 'image1390'; ?>
        <?php if ( $news_img ) : ?>
            <div class="foto" data-aos="fade-up">
                <?php echo wp_get_attachment_image( $news_img, $size, false, [
                    'class' => 'lazyload img-fluid',
                    'loading' => 'lazy',
                    'data-src' => wp_get_attachment_image_url( $news_img , $size ),
                    'alt' => get_post_meta( $news_img , '_wp_attachment_image_alt', true),
                    ]); 
                ?>
            </div>
        <?php endif; ?>
        <div class="date" data-aos="fade-up">
            <?php echo the_time(' d.m.Y ');?>
        </div>
        <h1 data-aos="fade-up">
            <?php the_title();?>
        </h1>

        <?php if ( have_rows( 'news' ) ): ?>
        <div class="cnt">

            <?php while ( have_rows( 'news' ) ) : the_row(); ?>

                <?php if ( get_row_layout() == 'news_cnt' ) : ?>
                    <div class="cnt-txt" data-aos="fade-up">
                        <?php the_sub_field( 'news_cnt_item' ); ?>
                    </div>
                <?php elseif ( get_row_layout() == 'news_foto' ) : ?>
                    <div class="cnt-foto" data-aos="fade-up">
                        <?php $news_foto_item = get_sub_field( 'news_foto_item' ); ?>
                        <?php $size = 'image1390a'; ?>
                        <?php if ( $news_foto_item ) : ?>
                            <?php echo wp_get_attachment_image( $news_foto_item, $size, false, [
                                'class' => 'lazyload img-fluid',
                                'loading' => 'lazy',
                                'data-src' => wp_get_attachment_image_url( $news_foto_item , $size ),
                                'alt' => get_post_meta( $news_foto_item , '_wp_attachment_image_alt', true),
                                ]); 
                            ?>
                        <?php endif; ?>
                    </div>
                <?php endif;?>

            <?php endwhile; ?>
            
        </div>
        <?php endif;?>

    </div><!-- edn /.container -->

    <!-- POST RECOMENDED -->
    <?php 
        get_template_part( 'template-parts/partial', 'blog-recomended');
    ?>
</main>

<?php
get_footer();

