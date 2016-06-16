<?php
	get_header();
?>
	<div class="row" style="margin-top:6px;">
		<div class="col-md-8">
 			<div class="row">
 				<?php 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
				?>
							<div class="page_header">
								<?php the_title(); ?>
							</div>
							<div class="page_description">
								<?php the_content(); ?>
							</div>
				<?php
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