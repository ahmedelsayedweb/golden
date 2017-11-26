<?php
/**
 * Template Name: Page about Template
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
				
			<div class="col-md-12 col-sm-12 col-xs-12">
				<?php the_content();?>
			</div>
		</div>
	</div>
<?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
<?php get_footer(); ?>