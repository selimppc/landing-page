<?php
/**
 * Template Name: Blog Template
 */
 	get_header();
 ?>
 
 <div class="row" style="margin-top:6px;">
		<div class="col-md-8">
 			<div class="row">
 				<div class="page_header">
					Blog
				</div>
	 			<div class="blog_container">	
	 				<?php
			            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			            $args = array( 'post_type' => 'post', 'posts_per_page' => 15, 'paged' => $paged );
			            $wp_query = new WP_Query($args);
			            while ( have_posts() ) : the_post(); 
			          ?>
			          <div class="post-content-inner">
			              <span class="post-header">
			                   <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			              </span>
			              <span class="post-admin">
							<div class="avatar_icon_box">
								<i class="avater-icon">&nbsp;</i>
								<?php //the_author_posts_link(); ?>
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
								<span class="border_seperator">|</span>
							</div>
							<div class="date_icon_box">
								<i class="date-icon">&nbsp;</i>
								<?php //echo date("F j Y"); ?>
								<?php echo get_the_date(); ?>
							</div>

							<div class="general_icon_box">
								<i class="general-icon">&nbsp;</i>
								<?php 
									$i = 0;
									$total_category = count(get_the_category());
									foreach((get_the_category()) as $category) { 					
										//echo '<a href="'.get_category_link($category->cat_ID ).'">'.$category->cat_name.'</a>';
									} 
								?>
							</div>

							<div class="content-box">
								<div class="post_container">
									<?php						
										$excerpt = get_the_excerpt();
				  						echo string_limit_words($excerpt,40);
									 ?>
								</div>
								<div class="read_more">
									<a href="<?php the_permalink(); ?>" rel="bookmark">Read More</a>
								</div>
							</div>
							
						</span>		
			          </div>
			         <?php endwhile; ?>
				        <div class="old_pagination">
						   <?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
						</div>
						<div class="next_pagination">
						   <?php previous_posts_link( 'Newer posts &rarr;' ); ?>
						</div>
	         		</div>
 			</div>
 		</div>
 		<?php
 			include('sidebar_post.php');
 		?>
 		

	</div>
<?php
	get_footer();
?>	