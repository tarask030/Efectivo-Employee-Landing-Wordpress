<?php
/**
 * ===============================
 * PARTIAL-MENU
 * ===============================
 *
 * @package FRONTLINE
 * @since 1.0.0
 * @version 1.0.0
 */
?>
<div class="menu-widget">
	<div class="menu-widget-container">
		
		<!-- HEDAER -->
		<div class="menu-widget-header">
			<div class="row">
				<div class="col col-right">
					<button>
						<span class="txt">
							Menu
						</span>
					</button>
				</div>
			</div>
		</div>

		<!-- MENU -->
		<div class="menu-widget-nav">
			<?php
                wp_nav_menu(
                    array(
                    'theme_location' => 'main-menu',
                    'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
	            	'walker'         => new WP_Bootstrap_Navwalker(),
                    )
                );
            ?>
		</div>

		<!-- CONTACT -->
		<div class="menu-widget-contact">
			<?php the_field( 'footer_adress', 'option' ); ?>
		</div>
	</div>
</div>