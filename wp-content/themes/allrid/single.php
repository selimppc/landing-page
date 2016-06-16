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
								<span class="individual_post_date">
								<?php

									  $user_id = $post->post_author;						
									  $key_first = 'first_name';
									  $single = true;
									  $user_first = get_user_meta( $user_id, $key_first, $single ); 

									  $key_second = 'last_name';
									  $single = true;
									  $user_second = get_user_meta( $user_id, $key_second, $single ); 

									  echo $user_first . ' ' . $user_second;
									  
								?> 
								&nbsp;&nbsp;|&nbsp;&nbsp;
								<?php echo get_the_date(); ?>
								</span>
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
 		<?php
 			include('sidebar_post.php');
 		?>

	</div>
<?php
	get_footer();
?>