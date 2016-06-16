		<div class="row">
 			<div class="footer_container">
 				<div class="col-md-2 col-sm-3 col-xs-3 width50 marginbottom20">
 					<?php
                        $menu_args = array(
                            'theme_location'  => '',
                            'menu'            => 'footer-1',
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

 				<div class="col-md-2 col-sm-3 col-xs-3 width50 marginbottom20">
 					<?php
                        $menu_args = array(
                            'theme_location'  => '',
                            'menu'            => 'footer-2',
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

 				<div class="col-md-2 col-sm-3 col-xs-3 width50">
 					<?php
                        $menu_args = array(
                            'theme_location'  => '',
                            'menu'            => 'footer-3',
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

 				<div class="col-md-2 col-sm-3 col-xs-3 width50">
                 <div class="row">
 					<?php
                        $menu_args = array(
                            'theme_location'  => '',
                            'menu'            => 'footer-4',
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
 				</div>

                <div class="col-md-2 col-sm-2 col-xs-2 border-remove-980 ">
                    <div class="footer-border">&nbsp;</div>
                </div>

                <div class="col-md-2 col-sm-3 col-xs-3 footer-right ">
                    <div class="row">
                        <?php
                            $menu_args = array(
                                'theme_location'  => '',
                                'menu'            => 'footer-5',
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

                        <div class="social_container">
                            <a href="https://www.facebook.com/pages/Allrid-Pest-Services/637766449693447" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg">
                            </a>

                            <a href="https://plus.google.com/u/0/104495454842874823532/about" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/googleplug.png">
                            </a>
                        </div>
                        <div class="developers_company_info">
                            <p style="color:#ffffff;">Copyright 2015 &copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>">ALLRID Pest Services.</a> 
                            <br/>
                            <a href="http://www.visionads.com.au/" target="_blank" rel="nofollow">Seo & Website by VisionsAds</a></p>
                        </div>
                    </div>
                </div>
 			</div>
 			
 		</div>
 	</div>	<?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">

        $( document ).ready(function() {
            $(window).scroll(function() {
              
                var height = $(window).scrollTop();
                if(height > 100){

                    $('.menu_background').css({
                        'position':'fixed',
                        'top':'0px',
                        'z-index':'9999',
                        'width': $(".main_menu").width()
                    })

                }else{
                    
                    $('.menu_background').css({
                        'position':'relative'
                    })

                }
            });

        });

        
    </script>
	</body>
</html>