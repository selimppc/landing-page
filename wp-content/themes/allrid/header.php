<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html style="margin-top:0px!important;">
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>


	<?php wp_head(); ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66796786-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
<?php if (is_page('thank-you')): ?>
<!-- Google Code for Thank you your enquiry Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 931342089;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "c1tTCJvXl2QQic6MvAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/931342089/?label=c1tTCJvXl2QQic6MvAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php endif ?>
<script type="text/javascript">

	jQuery(document).ready(function(){
	    resize();
	    jQuery(window).resize(function(){
	    	resize();
	    });

	    function resize(){

	    	var window_width = $( window ).width();

		    if(window_width < 641){
		    	jQuery('.menu_icon img').click(function() {
				 //   $( ".mobile_menu" ).toggle( "slow", function() {
				 //    // Animation complete.
					// });
		    		jQuery('.open_icon').css({'display':'block'});
		    		jQuery(".mobile_menu").css({'display':'block'});
		    		jQuery('.menu_icon').css({'display':'none'});
				});

				jQuery('.open_icon img').click(function() {
									 
		    		
		    		jQuery(".mobile_menu").css({'display':'none'});
		    		jQuery('.menu_icon').css({'display':'block'});
		    		jQuery('.open_icon').css({'display':'none'});
				});
		    }else{
		    	jQuery(".mobile_menu").css({'display':'none'});
		    }
	    }
	    
	    
	});
	
   
		
	</script>
<div class="container">

 		<div class="row">
 			<div class="top_container">
 				&nbsp;
 			</div>
 			<div class="second_container">
	 			<div class="col-md-4 col-sm-4 col-xs-4 width100 aligncenter">
	 				<div class="row">
		 				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		 					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
		 				</a>
	 				</div>
	 			</div>
	 			<div class="col-md-4 col-sm-4 col-xs-4 width50 width100 aligncenter">
	 				<div class="row">
		 				<div class="sologan_one">
		 					Your Pest Management Solution
		 				</div>
	 				</div>
	 				<!-- <div class="sologan_two">
	 					The Hunter's Leading Pest Professional 
	 				</div> -->
	 			</div>
	 			<div class="col-md-4 col-sm-3 col-xs-3 width50 width100 aligncenter ">
	 				<div class="phone_container">
	 					<div class="phone_numner">
	 						02 8809 7945
	 					</div>
	 					<div class="phone_numner">
	 						0414 467 981
	 					</div>
	 				</div>
	 			</div>
 			</div>
 		</div>

 		<div class="row menu_background">
 			<div class="main_menu">
 			<?php
                $menu_args = array(
                    'theme_location'  => 'primary',
                    'menu'            => '',
                    'container'       => 'div',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );	
                wp_nav_menu( $menu_args );
                
            ?>
 			
			</div>
			<div class="menu_icon">
				<img src="<?php echo get_template_directory_uri(); ?>/images/menu.png">
			</div>
			<div class="open_icon">
				<img src="<?php echo get_template_directory_uri(); ?>/images/menu.png">
			</div>
			<div class="mobile_menu">
				<div class="mobile_left">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>who-we-are">
						Who we are
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>residential-pest-control">
						Your home
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>commercial-pest-control">
						Your business
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>helpful-tips">
						Helpful tips
					</a>	
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">
						Blog
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control-blacktown-hills">
						contact us
					</a>
				</div>
				<div class="mobile_left">
					<span class="common_pests">Common pests</span>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/cockroaches">
						Cockroaches
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/rodents">
						Rodents
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/spiders">
						Spiders
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/bed-bugs">
						Bed Bugs
					</a>	
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/fleas">
						Fleas
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/ants">
						Ants
					</a>
				
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/carpet-beetles">
						Carpet Beetles
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/silverfish">
						Silverfish
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/bees">
						Bees
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/wasps">
						Wasps
					</a>	
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/ticks">
						Ticks
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>pest-control/termites">
						Termites
					</a>
				</div>
			</div>
 		</div>