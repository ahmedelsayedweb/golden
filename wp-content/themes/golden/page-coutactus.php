<?php
/**
 * Template Name: Page contact us Template
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
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13814.671755819518!2d31.317507!3d30.046383!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ba56aa8a0550a65!2sProblem+Solving+Egypt!5e0!3m2!1sen!2sus!4v1511279197977" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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