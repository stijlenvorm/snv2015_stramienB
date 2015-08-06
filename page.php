	<?php get_header(); ?>
	<?php do_action('contentheader'); ?>
	<?php the_post(); ?>
		<div class="container-custom">
			<div class="row">	

				<div class="col-xs-12" role="main">
					<div id="breadcrumb">
						<?php
						if ( function_exists( 'yoast_breadcrumb' ) ) {
							yoast_breadcrumb();
						}
						?>
					</div>
					<div class="main-content">
						<h1><?php the_title( ); ?></h1>

						<div>
							<?php the_content( ); ?>
						</div>
					</div>
				</div>
			</div>

		</div>

	<?php get_footer(); ?>

