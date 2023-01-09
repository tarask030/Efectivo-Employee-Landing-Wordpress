<?php
/**
 * ===============================
 * INDEX.PHP - The template for displaying content in the home page
 * ===============================
 *
 * Template name: Home
 * 
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();
?>


    <main>
    <?php
        get_template_part( 'template-parts/partial', 'home-hero');
        get_template_part( 'template-parts/partial', 'home-benefits');
        get_template_part( 'template-parts/partial', 'home-catalog');
        get_template_part( 'template-parts/partial', 'home-banner');
        get_template_part( 'template-parts/partial', 'home-users');
        get_template_part( 'template-parts/partial', 'home-faq');
        get_template_part( 'template-parts/partial', 'home-download');
        get_template_part( 'template-parts/partial', 'home-blog');
    ?> 
    </main> 

<?php
get_footer();
