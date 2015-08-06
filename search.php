<?php get_header(); ?>
<?php do_action('contentheader'); ?>
<div class="noHeader"></div>
<div class="container-custom">
    <div class="row">
        
        <div class="col-xs-12 " role="main">
        	<h1>Zoekresultaten voor <?php echo $_GET['s'] ?></h1>
            <?php while ( have_posts() ) : the_post(); ?>
				<article class="">
					<a href="<?php echo get_permalink(); ?>"><h2><?php echo get_the_title(); ?></h2></a>
					<?php echo the_excerpt(); ?>
				</article>				
			<?php endwhile; ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>