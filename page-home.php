<?php
/* 
*
*Template name: Homepage 
*
*/

get_header(); ?>
<?php the_post(); ?>

<div class="paginaHeaderHolder">
	<?php do_action('contentheader'); ?>
	<h4 class="header_slogan">
		Hier komt een vette slogan
		<span>met nog een subtitel</span>
	</h4>
</div>

<div id="intro_text">
	<div class="snv_wrapper">
		<div class="row">
			<div class="col-sm-12">
				<div class="text">
					<h1><?php bloginfo('name'); ?></h1>
					<?php the_content( ); ?>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div id="c2a_banner">
	<div class="snv_wrapper">
		<span>Heeft u een vraag? Laat het mij weten!</span>
		<a class="btn btn-primary expand_form_btn">Stel uw vraag</a>

		<div class="form_holder">
			<div style="height:40px;"></div>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="phonenumber">
						<span>Bel direct:</span> <br>
						<?php if(get_option('telefoon')){ ?>
							<i class="fa fa-phone"></i> <?php echo get_option('telefoon'); ?>
						<?php } ?>
					</div>
				</div>
				<div class="col-sm-8 col-xs-12">
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="20"]'); ?>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div id="top_blocks">
	<div class="row nomargin">
		<div class="col-xs-12 col-sm-6 col-md-3 nopadding">
			<?php 
			$term_id_1 = 6;
			$term = get_term_by('id', $term_id_1, 'soort');  
			?>
			<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>">
				<div class="block odd">
					<div class="term-img"> 
						<?php echo z_taxonomy_image($term_id_1, 'home-term-thumbs'); ?>
					</div>
					<h3 class="title"><?php echo $name = $term->name; ?></h3>
					<span class="btn btn-line">Lees meer</span>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-6  col-md-3 nopadding">
			<?php 
			$term_id_2 = 4;
			$term = get_term_by('id', $term_id_2, 'soort');  
			?>
			<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>">
				<div class="block even">
					<div class="term-img"> 
						<?php echo z_taxonomy_image($term_id_2, 'home-term-thumbs'); ?>
					</div>
					<h3 class="title"><?php echo $name = $term->name; ?></h3>
					<span class="btn btn-line">Lees meer</span>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 nopadding">
			<?php 
			$term_id_3 = 7;
			$term = get_term_by('id', $term_id_3, 'soort');  
			?>
			<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>">
				<div class="block odd">
					<div class="term-img"> 
						<?php echo z_taxonomy_image($term_id_3, 'home-term-thumbs'); ?>
					</div>
					<h3 class="title"><?php echo $name = $term->name; ?></h3>
					<span class="btn btn-line">Lees meer</span>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 nopadding">
			<?php 
			$term_id_4 = 5;
			$term = get_term_by('id', $term_id_4, 'soort');  
			?>
			<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>">
				<div class="block even">
					<div class="term-img"> 
						<?php echo z_taxonomy_image($term_id_4, 'home-term-thumbs'); ?>
					</div>
					<h3 class="title"><?php echo $name = $term->name; ?></h3>
					<span class="btn btn-line">Lees meer</span>
				</div>
			</a>
		</div>
	</div>
</div>


<!-- <div id="bottom_blocks">
	<div class="container">
		<div class="row nomargin">
			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block">
					<i class="fa fa-thumbs-o-up"></i>
					<h3 class="title">Ik ben flexibel</h3>
					<p>Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus</p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block middle">
					<i class="fa fa-coffee"></i>
					<h3 class="title">Jaren lange ervaring</h3>
					<p>Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus</p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block">
					<i class="fa fa-users"></i>
					<h3 class="title">Altijd de beste</h3>
					<p>Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus</p>
				</div>
			</div>
		</div>
	</div>
</div> -->
	
<?php get_footer(); ?>
