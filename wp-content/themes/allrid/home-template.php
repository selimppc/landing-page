<?php
/**
 * Template Name: Home Template
 */
 	get_header();
 ?>
 
 	

 		

 		<div class="row" style="margin-top:8px;">
 			<div class="col-md-12">
 				<div class="row">
		 			<div class="home_slider">
						<?php echo do_shortcode( '[advps-slideshow optset="1"]' ); ?>
						<!-- <div class="home_banner_button">
							<a href="<?php //echo esc_url( home_url( '/' ) ); ?>/pest_control/termites/" class="home_banner_anchor">
								<img title="Termites Control" alt="Termites Control - termite inspecttion & control" src="<?php echo get_template_directory_uri(); ?>/images/termites.png">
							</a>

							<a href="<?php //echo esc_url( home_url( '/' ) ); ?>/pest_control/bed-bugs/" class="home_banner_anchor">
								<img title="Bedbugs Control" alt="Bedbugs Control - Get rid of bedbugs" src="<?php echo get_template_directory_uri(); ?>/images/bed-bug.png">
							</a>

							<a href="<?php //echo esc_url( home_url( '/' ) ); ?>/pest_control/cockroaches/" class="home_banner_anchor">
								<img title="Cockroach Control" alt="Cockroach Control -Get rid of cockroches" src="<?php echo get_template_directory_uri(); ?>/images/cockroach.png">
							</a>

							<a href="<?php //echo esc_url( home_url( '/' ) ); ?>/pest_control/spiders/" class="home_banner_anchor">
								<img title="Spider Control" alt="Spider Control- Get rid of dangerous spiders" src="<?php echo get_template_directory_uri(); ?>/images/spider.png">
							</a>
							<a href="<?php //echo esc_url( home_url( '/' ) ); ?>/pest_control/rodents/" class="home_banner_anchor">
								<img title="Rodent Control" alt="Rodent Control - Get rid of rats & mice" src="<?php echo get_template_directory_uri(); ?>/images/rodant.png">
							</a>
						</div> -->
		 			</div>

		 			
	 			</div>
 			</div>
 			
 		</div>

 		

 		<div class="row" style="margin-top:8px;">
 			<div class="col-md-8">
 				<div class="row">
 					<div class="home_services_container">
		 				<?php
		 					$query = new WP_Query();
	                		$query->query('post_type=pest-control&orderby=menu_order&order=ASC&posts_per_page=6');
	                		while ($query->have_posts()) : $query->the_post(); 
	                		$eventmeta = get_post_meta(get_the_ID(), 'short-description', true);
	                		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	                		
		 				?>
		 					<div class="col-md-4 col-sm-4 col-xs-4 width100 middle-width-sm-xs">
		 						<a href="<?php the_permalink(); ?>">
		 							<div class="home_service_image">
				 						<img title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?php echo $feat_image; ?>">
				 					</div>
		 							<div class="home_service_heading">
				 						<?php the_title(); ?>
				 					</div>
				 					<div class="home_service_short_description">
					 					<?php echo $eventmeta[0]['short-description']; ?>
					 				</div>
		 						</a>
		 					</div>
		 				<?php
		 					endwhile;
		 				?>
		 				
		 			</div>

		 			<div class="home_container">
		 				<?php 
							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
									the_content();
								endwhile;
							endif;
						?>
		 				
		 			</div>
 				</div>

 			</div>



 			<div class="col-md-4">
 				<div class="row">
 					<div class="home_right_side_container">
 						<div class="quate_header">
 							Get a Free Quote
 						</div>
 						<div class="quate_short_description">
 						Fill in the form and we will contact you shortly
 						</div>
 						<?php echo do_shortcode("[contact-form-7 id='228' title='Get a quote']"); ?>
 						<!-- <div class="quate_filed">
 							<form>
 								<div class="form_field"><input type="text" name="name" placeholder="Name"></div>
 								<div class="form_field"><input type="text" name="email_address" placeholder="Email Address"></div>
 								<div class="form_field"><input type="text" name="phone_numner" placeholder="Phone Number"></div>
 								<div class="form_field"><input type="text" name="location" placeholder="Location/Area"></div>
 								<div class="form_field">
 									<div class="radio_button"><input type="radio" name="type" value="Residential"><span>Residentail</span></div>
									<div class="radio_button"><input type="radio" name="type" value="Commercial"><span>Commercial</span></div>
								</div>
								<div class="form_field">
 									<textarea placeholder="Message" name="message"></textarea>
 								</div>
 								<div class="form_field">
 									<input class="submit" type="submit" name="submit" value="Submit">
 								</div>
 							</form>
 						</div> -->
 					</div>
 					
 					
 				</div>
 			</div>

 		</div>
 <?php 
 	get_footer();
 ?>