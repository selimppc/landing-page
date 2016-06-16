<?php
	/**
	 * Template Name: Contact us Template
	 */
	get_header();
?>
	<div class="row" style="margin-top:6px;">
		<div class="col-md-12">
 			<div class="row">

 				<?php 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
				?>
							<div class="page_header">
								<?php the_title(); ?>
							</div>
							<div class="page_description">
								
								<div class="contact_form_container">
									<?php the_content(); ?>
								</div>
							</div>
				<?php
						endwhile;
					endif;
				?>
 			</div>
 		</div>
 		

	</div>
<?php
	get_footer();
?>