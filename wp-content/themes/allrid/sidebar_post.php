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
 						
 					</div>
 					
 					<div class="home_facebook_like_button">
 						
 					</div>
 					<div class="latestpost_widget_area">

					    <?php if ( is_active_sidebar( 'latest-post-sidebar' ) ) : ?>				
						<?php dynamic_sidebar( 'latest-post-sidebar' ); ?>				
					    <?php endif; ?>
					</div>
 				</div>
 			</div>