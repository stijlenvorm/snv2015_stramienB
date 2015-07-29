<?php get_header(); ?>
<?php the_post(); ?>
<?php do_action('contentheader'); ?>
<?php remove_filter( 'the_content', 'easy_image_gallery_append_to_content' );  ?>
	<div class="snv_wrapper">
		<div class="row">
			<div class="col-xd-12 col-sm-12 col-md-9" role="main">
				<div id="breadcrumb">
					<?php
					if ( function_exists( 'yoast_breadcrumb' ) ) {
						yoast_breadcrumb();
					}
					?>
				</div>
				<div class="row">
					<div class="col-sm-9">
						<div class="product-img-full">
							<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail();
							} 			
							?>
						</div>
					</div>
					<div class="col-sm-3">
						<?php
						if( function_exists( 'easy_image_gallery' ) ) {
						    echo easy_image_gallery();
						}

						?>
					</div>
				</div>
				<h1><?php the_title( ); ?></h1>
				<div>
					<?php the_content( ); ?>
				</div>
			</div>

			<div class="hidden-xs col-sm-12 col-md-3" role="complementary">
				<?php get_template_part( 'sidebar' ); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
