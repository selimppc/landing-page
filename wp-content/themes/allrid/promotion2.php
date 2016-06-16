<?php
   
  /**
	 * Template Name: Promotion 2 Template
  */

if ( function_exists( 'ot_get_option' ) ) {
          $phone_number = ot_get_option( 'phone_number' );
          $banner_image = ot_get_option( 'banner_image' );
          $banner_text = ot_get_option( 'banner_text' );
		  $banner_bottom_image = ot_get_option ('banner_bottom_image');
		  $pest_control_specialists = ot_get_option ('pest_control_specialists');
		  $pest_control_specialists_background_image = ot_get_option('pest_control_specialists_background_image');
		  $why_all_rids_pest_control = ot_get_option('why_all_rids_pest_control');
		  $our_offer = ot_get_option('our_offer');
		  $gallery_r = ot_get_option('gallery');
		  $why_are_you_waiting_for_r = ot_get_option('why_are_you_waiting_for');
      }
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
        
	<title><?php wp_title(); ?></title>
	
    
	<link href="<?php echo get_template_directory_uri(); ?>/css/menu.css" rel="stylesheet">

	<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<!-- Don't use media queries on ipad landscape -->
	<link rel="stylesheet" media="not screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape)" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

<div class="container2">
<nav class="navbar navbar-default">
        <div class="container">
        
     
        </div><!--/.container-fluid -->
      </nav>	
	<div class="header-container clearfix">
		<header class="header">
			<h1 class="ir site-name">Strike Force Pest Control<span></span></h1>
			<!-- <a href="#" rel="index" title="Go to homepage" class="ir site-name">Site Name<span></span></a> -->
			<p>Call Now: <a href="tel:<?php echo $phone_number; ?>" onClick="ga('send', 'event', 'Call', 'Click to call - top bar', 'Click the phone number');" id="number_link" style="color:#ffaf03" > <span><?php echo $phone_number; ?></span></a></p>
		</header>
		<!-- / header -->
		
	</div>
	
	<!-- / header-container -->
	<hr>

	<div class="get-a-quote-container" style='background:url("<?php echo $banner_image; ?>")'>
		<div class="get-a-quote">

			<div class="get-your-obligation">
				<h2>Get Your Obligation <span>free <span>quote now</span></span></h2>
                
                
                
                
 <!-- DO NOT change ANY of the php sections -->
           
                
                
                
                
<div id="formstyle2">
  <p>Please leave the following field blank: </p>
  <input type="text" name="name6">
</div> 

          
<?php echo do_shortcode('[contact-form-7 id="914" title="Promotion 2"]'); ?>			   
               
			</div>
			<!-- / get-your-obligation -->
			<div class="quality-carpet-cleaning">
			 
			 <?php echo $banner_text; ?>
				
			  
			</div>
			<!-- / quality-carpet-cleaning -->

		</div>
		<!-- / get-a-quote -->
	</div>
	<!-- / get-a-quote-container -->
	<hr>

	<div class="free-quote-why-angel-and-our-sydney">

		<div class="free-quote-container">
			<div class="free-quote" style='background:url("<?php echo $banner_bottom_image; ?>");'>
				<p>Call Us Now: <a href="tel:<?php echo $phone_number; ?>" style="color:#FFFFFF" onClick="ga('send', 'event', 'Call', 'Click to call - middle banner', 'Click the phone number');" id="number_link2"><?php echo $phone_number; ?></a>  for a <span>Free Quote</span></p>
			</div>
			<!-- / free-quote -->
		</div>
		<!-- / free-quote-container -->
		<hr>

		<div class="why-angel-carpet-cleaning clearfix">

			<div class="carpet-cleaning-specialists" style="background:white url(' <?php echo $pest_control_specialists_background_image; ?>') no-repeat right center">
				<?php echo $pest_control_specialists; ?>

			
		  </div>
			<!-- / carpet-cleaning-specialists -->

			<div class="why-angel">
			  <h2 id="eight-reasons"> Why AllRids Pest Control?</h2>
				<?php echo $why_all_rids_pest_control; ?>
			</div>
			<!-- / why-angel -->

		</div>
		<!-- / why-angle-carpet-cleaning -->
		<hr>

		<div class="our-sydney-carpet-cleaning-process clearfix">

		  <div class="our-sydney">
				<?php echo $our_offer; ?>
		  </div>
			<!-- / our-sydney -->

			<div class="before-and-after">
			<?php
				if(!empty($gallery_r)){
					
					foreach($gallery_r as $gallery){
						
						
				?>
						<p><img src="<?php echo $gallery['image']; ?>" alt="" width="287" height="200"></p>
				<?php
					}
				}
			?>
				
			</div>
			<!-- / before-and-after -->




<!-- paragraph text -->
<p></p>





      </div>
		<!-- / our-sydney-carpet-cleaning-process -->

	</div>
	<!-- / free-quote-why-angel-and-our-sydney -->

	
<footer class="footer">

		
			
			<?php
				if(!empty($why_are_you_waiting_for_r)){
					
					foreach($why_are_you_waiting_for_r as $why_are_you_waiting_for){
						
			?>	
					<div class="what-are-you-waiting-for" style="background:url('<?php echo $why_are_you_waiting_for['image']; ?>')">
						<div class="what-are-you-waiting-for-inner" >

							<div class="what-are-you">
								<h2><?php echo $why_are_you_waiting_for['title']; ?></h2>
								<p><?php echo $why_are_you_waiting_for['description']; ?></p>
							</div>
							<!-- / what-are-you -->

							<div class="freecall">
								<p>Call: <a href="tel:<?php echo $phone_number; ?>" style="color:#606060" onClick="ga('send', 'event', 'Call', 'Click to call - bottom banner', 'Click the phone number');" id="number_link3"><span><?php echo $phone_number; ?></span></a> <span><span>Or</span> <span>complete the FREE quote request form above</span></span></p>
							</div>
							<!-- / freecall -->

						</div>
					</div>
			<?php
					}
				}
			?>
			
			<!-- / what-are-you-waiting-for -->

		
		<!-- / what-are-you-waiting-for -->

		

		<div class="copyright">

			<p><strong>&copy; 2016 <a href="../index.html" style="text-decoration:none; color:#fff";>AllRids Pest Control</a></strong></p>
           <!-- / <p>Marketing by <a href="http://mrsearch.com.au" target="_blank" style="text-decoration:none; color:#fff";>Mr Search</a>® </p> -->

		</div>
		<!-- / copyright -->

	</footer>
	<!-- / footer -->

</div>
<!-- / container -->


</body>
<html>