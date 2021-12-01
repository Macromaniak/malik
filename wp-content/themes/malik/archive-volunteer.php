<?php
get_header('innerpage'); 
get_template_part( 'template-parts/title-section');
?>

<!-- Team area start -->
            <div class="team_area pt-110 pb-90">
                <div class="container">
                    <div class="row">
                    	<?php
			         	if ( have_posts() ) :
			    		while ( have_posts() ) : the_post();
			            global $post;
			         	?>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-sm-6 text-center">
                            <div class="single_team mb-30">
                                 <div class="team_thumb img_effect_white">
                                     <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></a>
                                 </div>
                                 <span class="designation"><?php echo get_field('volunteer_designation'); ?></span>
                                 <h5 class="member_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                 <div class="member_social">
                                     <a href="volunteer.html#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                     <a href="volunteer.html#" class="twitter"><i class="fab fa-twitter"></i></a>
                                     <a href="volunteer.html#" class="behance"><i class="fab fa-behance"></i></a>
                                     <a href="volunteer.html#" class="youtube"><i class="fab fa-youtube"></i></a>
                                 </div>
                            </div>
                        </div>
                      <?php
			            endwhile;
						else :
						    _e( 'Sorry, no posts were found.', 'textdomain' );
						endif;
			            ?>                     
                    
                    </div>
                </div>
            </div>
             <!-- Team area end -->

<?php
get_footer('innerpage');
?>