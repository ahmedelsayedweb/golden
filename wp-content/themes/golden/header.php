<!DOCTYPE html>
<html <?php get_bloginfo('language') ?>>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo = ot_get_option( 'logo' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $call = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
	}
    ?>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/ico" href="<?php echo $logo; ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	  <body>
	    <!--Wrapper Content Start-->
	    <div class="tl-wrapper">
	    	<!--Header Content Start-->
	    	<header class="tl-header" id="tl-header_v1">
	    		<!--Topbar Row Start-->
	    		<div class="tl-top-row">
	    			<div class="container">
	    				<div class="row">
	    					<div class="col-md-6 col-sm-6 col-xs-12">
	    						<!--Top Listed Start-->
	    						<ul class="tl-top-listed">
	    							<li>
	    								<i class="fa fa-phone" aria-hidden="true"></i>
	    								<?php echo $call; ?>
	    							</li>
	    							<li>
	    								<i class="fa fa-envelope-o" aria-hidden="true"></i>
	    								<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
	    							</li>
	    						</ul>
								 <?php
									if(is_active_sidebar('header')){
									dynamic_sidebar('header');
									}
								?>
	    					</div>
	    					<div class="col-md-6 col-sm-6 col-xs-12">
	    						<!--Top Right Listed Start-->
	    						<div class="tl-top-right">
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
	    						</div><!--Top Right Listed End-->
	    					</div>
	    				</div>
	    			</div>
	    		</div><!--Topbar Row End-->  		
	    		<!--Navigation Row Start-->
	    		<div class="tl-navigation-row">
	    			<div class="container">
	    				<div class="row">
	    					<div class="col-md-2 col-sm-2">
	    						<!--Logo Start-->
								<strong class="tl-logo">
									<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $logo; ?>" alt=""></a>
								</strong><!--Logo End-->
	    					</div>
	    					<div class="col-md-10 col-sm-10">
	    						<!--Nav Holder Start-->
	    						<div class="tl-nav-holder">
	    							<!--Menu Holder Start-->
										   <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo ' <nav class="navbar navbar-default"> 
							            <div class="navbar-header">
							              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							            </div>
							            
							            <!-- Collect the nav links, forms, and other content for toggling -->
							            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							              <ul class="nav navbar-nav">
							                <li class="dropdown"> 
							                	<a href="http://localhost/psolvingegypt/golden/ar/" class="dropdown-toggle">الرئيسية <span class="caret"></span></a>
								                </li>
							                <li>
							                	<a href="http://localhost/psolvingegypt/golden/ar/about/">عن الشركة</a>
							                </li>
							                <li class="dropdown"> <a href="properties.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الخدمات <span class="caret"></span></a>
							                  <ul class="dropdown-menu">
							                    <li><a href="#">SERVICES</a></li>
							                    <li><a href="#">SERVICES</a></li>
							                    <li><a href="#">SERVICES</a></li>
							                    <li><a href="#">SERVICES</a></li>
							                    <li><a href="#">SERVICES</a></li>
							                    </ul>
							                </li>
							                <li>
							                	<a href="http://localhost/psolvingegypt/golden/ar/contact_ar">اتصل بنا</a>
							                </li>
							              </ul>
							            </div>
							            <!-- /.navbar-collapse --> 
							          </nav>'; 
		}elseif($lang == 'en'){
		echo ' <nav class="navbar navbar-default"> 
							            <div class="navbar-header">
							              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							            </div>
							            
							            <!-- Collect the nav links, forms, and other content for toggling -->
							            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							              <ul class="nav navbar-nav">
							                <li class="dropdown"> 
							                	<a href="http://localhost/psolvingegypt/golden" class="dropdown-toggle">Home <span class="caret"></span></a>
								                </li>
							                <li>
							                	<a href="http://localhost/psolvingegypt/golden/about-us/">About Us</a>
							                </li>
							                <li class="dropdown"> <a href="properties.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES <span class="caret"></span></a>
							                  <ul class="dropdown-menu">
							                    <li><a href="#">SERVICES</a></li>
							                    <li><a href="#">SERVICES</a></li>
							                    <li><a href="#">SERVICES</a></li>
							                    <li><a href="#">SERVICES</a></li>
							                    <li><a href="#">SERVICES</a></li>
							                    </ul>
							                </li>
							                <li>
							                	<a href="http://localhost/psolvingegypt/golden/contact-us-2">Contact Us</a>
							                </li>
							              </ul>
							            </div>
							            <!-- /.navbar-collapse --> 
							          </nav>'; 
	};
	?>  

							          
	    						</div><!--Nav Holder End-->
	    					</div>
	    				</div>
	    			</div>

	    		</div><!--Navigation Row End-->
	    	</header><!--Header Content End-->
   