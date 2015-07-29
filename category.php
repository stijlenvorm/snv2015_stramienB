<?php if (have_posts()) : ?>
 <?php if (is_month()){
$year = get_the_time('Y');
$month = get_the_time('m');
$the_query = new WP_Query( 'monthnum=$month&year=$year&$cat=5' );
// The Loop
while ( $the_query->have_posts() ) :
	$the_query->the_post();
	echo '<li>' . get_the_title() . '</li>';
endwhile;

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
*/
wp_reset_postdata();
 ?>