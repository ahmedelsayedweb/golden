<?php
/**
 * Template Name: Page Homefds Template
 * Template Post Type: page
 * The template for displaying Page Home
 */
?>
<?php get_header(); ?>
  
	<!--Bannear Section Start-->
	    	<section class="tl-banner-section">
	    		<!--Banner Slider Start-->
	    		<div id="tl-banner-slider" class="owl-carousel">
	    			<!--Banner Item Start-->
					<?php 
		if ( function_exists( 'ot_get_option' ) ) {			
		  $slides = ot_get_option( 'banner', array() );	
		  if ( ! empty( $slides ) ) {
			foreach( $slides as $slide ) {
			  echo '
			  <div class="tl-sider-item">
	    				<img src="' . $slide['image'] . '" alt="">
	    			</div> ';
			}
		  }
		}	
	  ?>	
	    			<!--Banner Slider End-->
	    			<!--Banner Item Start-->
	    			<div class="tl-sider-item">
	    				<img src="<?php bloginfo('template_directory'); ?>/assets/images/blog-lrg-img-01.jpg" alt="">
	    			</div><!--Banner Slider End-->
	    		</div><!--Banner Slider End-->
	    	</section><!--Bannear Section End-->


	    	<!--Main Content Start-->
	    	<div class="tl-main-content">
				
				<!--Properties Section Start-->
				<section class="tl-properties-section pd-tb-80">
					<div class="container">
						<!--Heading Outer Start-->
						<div class="tl-heading-outer">
							<h2>Properties</h2>
						</div><!--Heading Outer End-->
						<?php
						$args = array(
								'post_type' => 'properties',
								'posts_per_page' => 6,
						);
						$team_query = new WP_Query( $args );
							 ?>
						<?php if ( $team_query->have_posts() ) : ?>
						<div id="tl-featured-slider" class="owl-carousel">
								 <?php $i = 1; ?>
							<?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
							<div class="item">
								<!--Properties Box Start-->
								<div class="tl-properties-item">
									<figure class="tl-properties-thumb">
										<img src="<?php bloginfo('template_directory'); ?>/assets/images/properties-md-img-01.jpg" alt="">
										<figcaption class="tl-caption">
											<div class="bottom-text">
												<h3><?php the_title(); ?></h3>	
											</div>
										</figcaption>
									</figure>
									<!--Text Holder Start-->
									<div class="tl-text-holder">
										<h4><?php the_excerpt(); ?></h4>
										<ul class="tl-meta-listed">
											<li><img src="<?php bloginfo('template_directory'); ?>/assets/images/bag-img.jpg" alt=""> <?php the_field('bedrooms'); ?></li>
											<li><img src="<?php bloginfo('template_directory'); ?>/assets/images/cart-sm-img.jpg" alt=""> <?php the_field('bathrooms'); ?></li>
										</ul>
										<a class="contact_a" href="http://localhost/psolvingegypt/golden/contact-us/">Contact Us</a>
									</div><!--Text Holder End-->
								</div><!--Properties Box End-->
							</div>
							<?php $i++;
									?>
								<?php endwhile; endif; ?>
						</div>
					</div>
				</section><!--Properties Section End-->

					<!--Blog Section Start-->
				<section class="tl-blog-section pd-t-80">
					<div class="container">
						<!--Heading Outer Start-->
						<div class="tl-heading-outer">
							<h2>SERVICES </h2>
						</div><!--Heading Outer End-->
						<div class="row">
							<?php
						$args = array(
								'post_type' => 'services',
								'posts_per_page' => 6,
						);
						$news_query = new WP_Query( $args );
							 ?>
						<?php if ( $news_query->have_posts() ) : ?>
							<?php $i = 1; ?>
							<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<!--Blog Box Start-->
								<div class="tl-blog-box">
									<figure class="tl-thumb">
										<a href="<?php echo get_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
									</figure>
									<div class="tl-text-holder">
										<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
									</div>
								</div><!--Blog Box Start-->
							</div>
							<?php $i++;
									?>
								<?php endwhile; endif; ?>
						</div>
					</div>
				</section><!--Blog Section End-->

				<!--Team Section Start-->
				<section class="tl-team-section pd-tb-80">
					<!--Heading Outer Start-->
					<div class="tl-heading-outer">
						<h2>Contact Us</h2>
					</div><!--Heading Outer End-->

					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12">
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

				</section><!--Team Section End-->
<?php
			if ( function_exists( 'ot_get_option' ) ) {
				$images = explode( ',', ot_get_option( 'brand', '' ) );
?>
				<!--Partners Section Start-->
				<section class="tl-partners-section pd-tb-80">
					<div class="container">
						<!--Partners Listed Start-->
						<ul id="tl-partners-listed" class="owl-carousel">
							<?php
								if ( ! empty( $images ) ) {
							foreach( $images as $id ) {
								if ( ! empty( $id ) ) {
							$full_img_src = wp_get_attachment_image_src( $id, 'custom-thumb' );
								  echo '
								  	<li class="item">
								<a href="#"><img src="' . $full_img_src[0] . '" alt=""></a>
									</li> ';
								}
							  }
							}	
						}
					?>
						</ul><!--Partners Listed End-->
					</div>
				</section><!--Partners Section End-->

			</div><!--Main Content End-->
	
<?php get_footer(); ?>