<?php
/**
 * ===============================
 * HOME DOWNLOAD.PHP - main header file
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
$download_txt = get_field( 'download_txt' );
$download_link = get_field( 'download_link' );
?>

<?php if ($download_txt): ?>
	<section class="home-download" id="download">
	
		<div class="home-download-box">
			<div class="container">

				<div data-aos="fade-up">
					<?php echo $download_txt ?>
				</div>				

				<?php if ($download_link): ?>
					<div data-aos="fade-up">
						<a href="<?php echo $download_link ?>" target="_blank" class="btn-white">
							<?php _e('Pobierz aplikację','effectivo');?>
						</a>
					</div>
				<?php endif ?>
			</div>
		</div>

	</section>
<?php endif ?>