<?php get_header(); ?>

<?php if ( z_taxonomy_image_url()  ){ ?>
<div class="paginaHeaderHolder">
	<div class="paginaHeader">
		<div class="paginaImg" style="background:url(<?php echo z_taxonomy_image_url(); ?> )">
			
		</div>
	</div>
</div>
<?php } ?>
<div class="snv_wrapper">
	<div class="row">
		<div class="col-xd-12 col-sm-12" role="main">
			<div id="breadcrumb">
				<?php
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb();
				}
				?>
			</div>
			<h1><?php printf(single_cat_title( '', false ) . '' ); ?></h1>
			<div class="category_desc">
				<?php echo category_description(); ?> 
			</div>
			<div class="product_overview">
			<?php if ( have_posts() ) : ?>
				<section class="row">
					<?php while ( have_posts() ) : the_post(); ?>	
							<article class="col-sm-4">
								<a href="<?php echo the_permalink(); ?>">							
									<div class="product_tile">
										<div class="img_holder">
											<?php 
											if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
											the_post_thumbnail('product-thumbs');
											} 			
											?>
										</div>
										<h3 class="product-title"><?php the_title() ?></h3>
									</div>
								</a>
							</article>
					<?php endwhile; ?>

					<div>
						<?php the_posts_pagination( ); ?>	
					</div>
				</section>
			</div>
			<?php else: ?>

				geen resultaten...

			<?php endif; ?>
		</div>

	</div>
</div>


<?php get_footer(); ?>

