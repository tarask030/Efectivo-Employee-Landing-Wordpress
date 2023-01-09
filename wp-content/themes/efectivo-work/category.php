<?php
/**
 * ===============================
 * TEMPLATE-CATEGORY - template for category list
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
get_header();
$cat_id = get_query_var('cat');
?>

<div class="news">
    <div class="container">

        <!-- NAGLOWEK -->
        <div class="news-header" data-aos="fade-up">
            <h1 class="typo1">
                Aktualności - <?php echo get_cat_name( $category_id = $cat_id );?>
            </h1>
        </div>

        <!-- CATEGORY LIST -->

        <ul class="news-category" data-aos="fade-up">
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>aktualnosci/">wszystkie</a>
            </li>
            <?php wp_list_categories( array(
                'use_desc_for_title' => false,
                 'title_li'           => __( '' ),
            ) ); ?> 
        </ul>

        <!-- NEWS LOOP -->
        <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $query = new WP_Query( array(
                'nopaging'               => false,
                'paged'                  => $paged,
                'posts_per_page'         => '8',
                'post_type'              => 'post',
                'cat' => $cat_id,
            ) ); 
        ?>
        <?php if ( $query->have_posts() ) : ?>
        <ul class="news-list">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php get_template_part( 'template-parts/partial', 'news-loop'); ?>
        <?php endwhile;?>
        </ul>

        <div class="pagination" data-aos="fade-up">
            <?php 
                echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $query->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => false,
                    'prev_text'    => false,
                    'next_text'    => false,
                    'add_args'     => false,
                    'add_fragment' => '',
                ) );
            ?>
        </div>

        <?php 
        wp_reset_postdata();  
        endif;
        ?>

    </div>
</div>

<?php
get_footer();