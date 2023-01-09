<?php
/**
 * ===============================
 * FOOTER BUTTONS .PHP - footer copy
 * ===============================
 *
 * @package FRONTLINE
 * @since 1.0.0
 * @version 1.0.0
 */
?>
<?php if ( have_rows( 'buttons_footer', 'option' ) ) : ?>
<aside class="footer-buttons">
    <ul class="container" data-aos="fade-up">        
    <?php while ( have_rows( 'buttons_footer', 'option' ) ) : the_row(); ?>
        <li>
            <div class="txt">
                <?php the_sub_field( 'buttons_footer_slogan' ); ?>
            </div>
            <?php $buttons_footer_link = get_sub_field( 'buttons_footer_link' ); ?>
            <?php if ( $buttons_footer_link ) : ?>
                <a href="<?php echo esc_url( $buttons_footer_link['url'] ); ?>" class="btn-white"><?php echo esc_html( $buttons_footer_link['title'] ); ?></a>
            <?php endif; ?>
        </li>
    <?php endwhile; ?>
    </ul>
</aside>
<?php endif; ?>