<?php get_header(); ?>

<div class="container">
	<div class="row">

		<div class="col-xd-12 col-sm-8 col-md-8 col-lg-8" role="main">

			<h1 class="mainTitle"><?php bloginfo( 'title' ); ?></h1>

			<?php the_content( ); ?>

			<?php if ( have_posts() ) : ?>
				<section>
					<h2>Alle berichten</h2>

					<?php while ( have_posts() ) : the_post(); ?>
						<article>
							<a href="<?php echo the_permalink(); ?>"><h3><?php  the_title() ?></h3></a>
							<div>
								<?php the_excerpt(); ?>
							</div>
						</article>
					<?php endwhile; ?>

					<div>
						<?php the_posts_pagination( ); ?>	
					</div>

				</section>
			<?php else: ?>
				geen resultaten...
			<?php endif; ?>

		</div>

		<div class="hidden-xs col-sm-4 col-md-4 col-lg-4" role="complementary">
			<?php get_template_part('sidebar'); ?>
		</div>

	</div>

</div>

<?php echo do_action('pageBlock', 25); ?>

<?php echo do_action('pageBlock', 23); ?>


<div class="pageBlock">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo do_action('pageBlockContent', 24); ?>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo do_action('pageBlockContent', 22); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
