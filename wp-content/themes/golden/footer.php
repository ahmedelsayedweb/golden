<!-- FOOTER-->
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $title_about_footer = ot_get_option( 'title_about_footer' );
	  $description_about_footer = ot_get_option( 'description_about_footer' );
	  $contact_title = ot_get_option( 'contact_title' );
	  $logo = ot_get_option( 'logo' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $call = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
	  $address_footer = ot_get_option( 'address_footer' );
	}
    ?>
<!--Footer Content Start-->
	    	<footer class="tl-footer">
				
				<!--Footer Middle Section start-->
				<section class="tl-footer-middle-section pd-t-80">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<!--Widget Start-->
								<div class="widget widget-about">
									<h3><?php echo $title_about_footer; ?></h3>
									<?php echo $description_about_footer; ?>
								</div><!--Widget End-->
							</div>
							<div class="col-md-2 col-sm-6 col-xs-12 ">
								<!--Widget Start-->
								<div class="widget widget-location">
									<h3>SERVICES</h3>
									<ul class="ft-listed">
										<li><a href="#">SERVICES 1</a></li>
										<li><a href="#">SERVICES 2</a></li>
										<li><a href="#">SERVICES 3</a></li>
										<li><a href="#">SERVICES 4</a></li>
									</ul>
								</div><!--Widget End-->
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<!--Widget Start-->
								<div class="widget widget-about">
									<h3><?php echo $contact_title; ?></h3>
									<ul class="ft-listed">
										<li>
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<?php echo $address_footer; ?>
										</li>
										<li>
											<i class="fa fa-phone" aria-hidden="true"></i>
											<?php echo $call; ?>
										</li>
										<li>
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
											<a href="mailto:<?php echo $email; ?>">
											<?php echo $email; ?></a>
										</li>

									</ul>
								</div><!--Widget End-->
							</div>
						</div>
					</div>
				</section><!--Footer Middle Section End-->

				<!--CopyRight Row start-->
				<div class="tl-copyright-row">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<p>© 2017. All Rights Reserved | Design & Developer by psolvingegypt</p>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<!--Social Links Start-->
								<ul class="top-social-links">
									<li>
										<a href="<?php echo $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="<?php echo $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="<?php echo $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									</li>									
								</ul><!--Social Links End-->
							</div>
						</div>
					</div>
				</div><!--CopyRight Row End-->
	    	</footer><!--Footer Content End-->

	    </div>
<?php wp_footer(); ?>
	
</body>	
</html>