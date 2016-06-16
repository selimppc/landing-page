<?php
	get_header();
?>
	<div class="row" style="margin-top:6px;">
		<div class="col-md-8">
 			<div class="row">
 				<?php 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
					
							if(get_the_title() == 'House' || get_the_title() == 'Family'){
								
								echo '<meta http-equiv="refresh" content="0; url=http://allridpests.com.au/residential-pest-control/" />';
							}

							if(get_the_title() == 'Termites'){
								
								echo '<meta http-equiv="refresh" content="0; url=http://allridpests.com.au/termite-inspection-treatment-protection/" />';
							}

							if(get_the_title() == 'Commercial'){
								
								echo '<meta http-equiv="refresh" content="0; url=http://allridpests.com.au/commercial-pest-control/" />';
							}

							if(get_the_title() == 'Cockroach infest'){
								
								echo '<meta http-equiv="refresh" content="0; url=http://allridpests.com.au/cockroaches/" />';
							}
						endwhile;	
					endif;
				?>
 			</div>
 		</div>
 		<?php get_sidebar(); ?>

	</div>
<?php
	get_footer();
?>