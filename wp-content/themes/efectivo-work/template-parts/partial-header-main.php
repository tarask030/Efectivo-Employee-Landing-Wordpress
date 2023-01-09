<?php
/**
 * ===============================
 * HEADER-MAIN.PHP - menu and submenu
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
?>
<div class="navbar__fixed-main">

    <!-- MENU  -->
    <nav aria-label="Main">

        <?php if ( is_singular( 'post' ) or is_page(3) ): ?>

            <?php
            wp_nav_menu(
                array(
                'theme_location' => 'blog-menu',
                'container'      => '',
                'menu_class'     => 'navbar__fixed-nav',
                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                'walker'         => new WP_Bootstrap_Navwalker(),
                )
            );
            ?>

        <?php else: ?>

            <?php
            wp_nav_menu(
                array(
                'theme_location' => 'main-menu',
                'container'      => '',
                'menu_class'     => 'navbar__fixed-nav',
                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                'walker'         => new WP_Bootstrap_Navwalker(),
                )
            );
            ?>

        <?php endif;?>
    </nav> 

    <!-- ZALOGUJ SIE -->
    <div class="navbar__fixed-login">
        <a href="#contact"><?php pll_e('Kontakt'); ?></a>
    </div>

    <!-- LANG SWITCHER -->    
    <div class="navbar__fixed-lang">
        <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">
            <?php if(pll_current_language() == 'en') : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/en.svg" /> EN
            <?php elseif(pll_current_language() == 'uk') : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/uk.svg" /> UK
            <?php elseif(pll_current_language() == 'ru') : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/ru.svg" /> UK
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/pl.svg" /> PL
            <?php endif;?>
        </button>
        
        <ul id="myDropdown" class="dropdown-content">
            <?php pll_the_languages(); ?>
        </ul>
        </div>
        
    </div>

</div>