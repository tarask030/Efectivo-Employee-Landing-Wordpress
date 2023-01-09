<?php
/**
 * ===============================
 * TEMPLATE-PAGE-MARKET
 * ===============================
 *
 * Template name: Team
 *
 * @package FRONTLINE
 * @since 1.0.0
 * @version 1.0.0
 */
get_header();
?>
    <main>
        <?php 
            get_template_part( 'template-parts/partial', 'hero-txt');
            get_template_part( 'template-parts/partial', 'list-team');
        ?>
    </main>

<?php
get_footer();