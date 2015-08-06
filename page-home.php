<?php  /* Template name: Homepage  */ ?>

<?php get_header(); ?>
<?php the_post(); ?>
<?php do_action('contentheader'); ?>

<div id="intro_text">
	<div class="container-custom">
		<?php the_title(); ?>
		<?php the_content(); ?>
	</div>
</div>

<div id="top_blocks">
	<div class="container-custom">
		<div class="row nomargin">	
			<div class="col-xs-12 col-sm-6 col-md-4 nopadding">
				<?php echo do_shortcode('[pageblock pageid="2"]'); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 nopadding">
				<?php echo do_shortcode('[pageblock pageid="2"]'); ?>
			</div>
			<div class="col-xs-12 col-md-4 nopadding">
				<?php echo do_shortcode('[pageblock pageid="2"]'); ?>
			</div>
		</div>
	</div>
</div>
	
<?php get_footer(); ?>
