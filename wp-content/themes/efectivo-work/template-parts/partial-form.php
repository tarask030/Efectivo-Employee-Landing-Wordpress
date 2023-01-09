<?php
/**
 * ===============================
 * FORM.PHP -
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<div class="popup">
	<div class="popup-bg"></div>
	<div class="popup-form">
		<div class="popup-cf7">	
			<div class="close">
				<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M29.9999 29.9999L10 10" stroke="#474FFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M30.0001 10L10 30.0001" stroke="#474FFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>

			</div>
		<?php echo do_shortcode( '[contact-form-7 id="5" title="Formularz"]' );?>
		</div>	
	</div>
</div>