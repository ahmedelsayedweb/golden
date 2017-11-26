<?php
/**
 * Template Name: Page contact Template
 * Template Post Type: page
 * The template for displaying Page Home
 */
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12 con">
			<div class="bottom_text_1">
					<h3><?php the_title(); ?></h3>	
				</div>
				<!--Contact Form Start-->
				<form action="#" class="tl-contact-form">
				<?php
				  $lang = custom_get_current_lang();
					if($lang == 'ar'){
						 echo do_shortcode('[contact-form-7 id="28" title="Contact ar"]'); 
						}elseif($lang == 'en'){
						echo do_shortcode('[contact-form-7 id="27" title="Contact en"]'); 
					};
					?> 
				</form>
			</div>
	</div>
<?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
<?php get_footer(); ?>