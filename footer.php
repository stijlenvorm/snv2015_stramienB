	<?php 
	$footer_background_url = get_option('footer_background'); 
	$style = '';
	if ($footer_background_url && $footer_background_url !== '') {
		$style = ' background: url('.$footer_background_url.'); background-size:cover; background-attachment: fixed; ';
	}
	?>
	<footer id="parallax_bottom" data-stellar-background-ratio="0.3" style="<?php echo $style; ?>">
		<div class="cover"></div>
		<div class="container-custom">
			<div class="row">
				<div class="col-xs-12 col-sm-8">
					<div class="footerSlogan">
						<?php if (get_option('footer_slogan') !== ''): ?>
							<h6><?php echo get_option('footer_slogan') ?></h6>
						<?php else: ?>
							<h6>Vul de slogan in op de <a href="<?php echo admin_url('admin.php?page=contact-info'); ?>">informatie pagina</a>
							<?php endif; ?>	
						</div>
					</div> 
					<div class="xol-xs-12 col-sm-4">
						<div class="footerForm">
							<?php if (shortcode_exists('gravityform')): ?>
								<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="100"]'); ?>					
							<?php else : ?>
								<p>Gravity forms is niet geinstalleerd....</p>
							<?php endif ?>	
						</div>
						
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
	</html>