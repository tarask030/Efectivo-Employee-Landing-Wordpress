<?php
/**
 * ===============================
 * FOOTER COPY .PHP - footer copy
 * ===============================
 *
 * @package FRONTLINE
 * @since 1.0.0
 * @version 1.0.0
 */
?>
<div class="footer-copy">
    <div class="container">
        <div class="row">
            <div class="footer-copy-item">
            <?php if ( have_rows( 'links_footer', 'option' ) ) : ?>
                <ul>
                <?php while ( have_rows( 'links_footer', 'option' ) ) : the_row(); ?>
                    <?php $links_footer_link = get_sub_field( 'links_footer_link' ); ?>
                    <?php if ( $links_footer_link ) : ?>
                        <li>
                            <a href="<?php echo esc_url( $links_footer_link['url'] ); ?>"><?php echo esc_html( $links_footer_link['title'] ); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            </div>
            <div class="footer-copy-item">
                © <?php echo date('Y');?> Frontline Biosciences
            </div>
            <div class="footer-copy-item">
                Realizacja: <a href="https://sodova.pl/" target="_blank" title="sodova – agencja interaktywna">Sodova</a>
            </div>
        </div>
    </div>

    <!-- BUTTON -->
    <button class="btn-top">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-top.svg" alt="">
    </button>
</div>