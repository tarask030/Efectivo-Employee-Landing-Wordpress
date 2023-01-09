    <?php
/**
 * ===============================
 * PAGE.PHP - The template for displaying default theme page
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
get_header();
?>

<main class="main">
    <div class="container">
        
        <div class="main-cnt main-cnt-page">
            <?php echo the_content(); ?>
        </div>

    </div><!-- edn /.container -->
</main>

<?php
get_footer();

