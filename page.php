<?php get_header(); ?>

<?php the_post(); ?>
<?php if( 'contentheader' ) { ?>
    
<div class="paginaHeaderHolder">
	<div class="cover"></div>
	<?php do_action('contentheader'); ?>
</div>
<?php } ?>

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
			<div class="main-content">
				<h1><?php the_title( ); ?></h1>

				<div>
					<?php the_content( ); ?>
				</div>
			</div>
		</div>

		<div class="col-xd-12 col-sm-12 col-md-3" role="complementary">
			<?php get_template_part( 'sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

