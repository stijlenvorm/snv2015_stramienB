<!DOCTYPE html>
<html lang="">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>
<body <?php body_class( ); ?>>
<div id="page_menu">
	<header role="banner">

		
		<div class="logo">
			<a href="<?php echo get_site_url(); ?>" title="<?php echo bloginfo('name'); ?> - <?php echo bloginfo('description'); ?>"><img src="<?php echo get_option('home-logo'); ?>" alt="<?php echo bloginfo( 'name' ); ?>"></a>
		</div>

	
		<div class="mobile_menuToggle">
			<span></span>
			<span></span>
			<span></span>
		</div>

		<nav role="navigation" id="main_navigation" class="header_menu hideMenuMobile">
			<?php //wp_nav_menu( array( 'header_menu' => 'header-menu' ) ); ?>
			<ul class="menu">
				
				<li class=""><a href="/">Home</a></li>
			    <?php $hiterms = get_terms("soort", array(
			    	"orderby" => "slug", 
			    	"parent" => 0
			    )); 

			    foreach($hiterms as $key => $hiterm) : ?>
			    	<?php if( $hiterm->term_id == get_queried_object()->term_id || $hiterm->term_id == get_queried_object()->parent){
						$class = "active";
					}else{
						$class = "non";
					} ?>

			        <li class="<?php echo $class; ?>">

			        	<a href="/<?php echo $hiterm->taxonomy; ?>/<?php echo $hiterm->slug; ?>">
			            <?php echo $hiterm->name; ?>
			            </a>
			            <?php $loterms = get_terms("soort", array(
			            	"orderby" => "slug", 
			            	"parent" => $hiterm->term_id
			            	)); 
			            
			            if($loterms) : ?>
			                <ul class="sub-menu">
			                    <?php foreach($loterms as $key => $loterm) : ?>
			                        <li><a href="/<?php echo $loterm->taxonomy; ?>/<?php echo $loterm->slug; ?>"><?php echo $loterm->name; ?></a></li>
			                    <?php endforeach; ?>
			                </ul>
			            <?php endif; ?>
			        </li>
			    <?php endforeach; ?>

					<li><a href="/contact">contact</a></li>
			</ul>


		</nav>

	</header>
</div>
<div id="page_content">