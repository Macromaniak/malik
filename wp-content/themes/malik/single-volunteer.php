<?php
get_header('innerpage'); 
get_template_part( 'template-parts/title-section');
global $post;
?>

<!--team single area start -->
        <div class="team_single_area pt-120 pb-90">
            <div class="container">
                <div class="row align-items-center mb-80">
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="team_single_img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="team_single_info_wrapper pl-50">
                            <div class="section_title">
                                <span class="sub_title sub_title_2"><?php echo get_field('volunteer_designation'); ?></span>
                                <h3 class="title title_2"><?php the_title(); ?></h3>
                            </div>
                            <p class="mb-40">
                            	<?php echo get_field('volunteer_description'); ?>
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="team_person_info">
                                        <a href="tell:<?php echo get_field('volunteer_phone'); ?>"><strong>Phone:</strong> <?php echo get_field('volunteer_phone'); ?></a>
                                        <a href="#"><strong>Email:</strong> <span class="__cf_email__" data-cfemail="c7a2bfa6aab7aba287a0aaa6aeabe9a4a8aa"><?php echo get_field('volunteer_email'); ?></span></a>
                                        <a href="volunteer-details.html#"><strong>Working Area:</strong> <?php echo get_field('volunteer_working_area'); ?></a>
                                        <a href="volunteer-details.html#"><strong>Nationality:</strong> <?php echo get_field('volunteer_nationality'); ?></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="team_person_info">
                                        <a href="volunteer-details.html#"><strong>Website:</strong> <?php echo get_field('volunteer_website'); ?></a>
                                        <a href="volunteer-details.html#"><strong>Linkedin:</strong> <?php echo get_field('volunteer_linkedin'); ?></a>
                                        <a href="volunteer-details.html#"><strong>Address:</strong> <?php echo get_field('volunteer_address'); ?> </a>
                                        <div class="team_info_social">
                                            <a href="volunteer-details.html#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="volunteer-details.html#" class="google"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="volunteer-details.html#" class="twitter"><i class="fab fa-twitter"></i></a>
                                            <a href="volunteer-details.html#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="team_person_description d_flex mb-20">
                        	<?php $volunteer_description_highlight = get_field('volunteer_description_highlight');
                        	$first_char = substr($volunteer_description_highlight, 0, 1);
                        	$rest = substr($volunteer_description_highlight, 1);
                        	if(!empty($volunteer_description_highlight)){
                        	 ?>
                            <span class="first_letter"><?php echo $first_char; ?></span>
                            <p>
                            	<?php echo $rest; ?>
                            </p>
                        	<?php } ?>
                        </div>
                        <div class="team_person_description mb-50">
                            <?php echo get_field('volunteer_main_description'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<?php $progress_bar_items = get_field('progress_bar_items'); 
                	foreach($progress_bar_items as $item)
                	{
                	?>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="team_progress_wrapper mb-30">
                            <span><?php echo $item['item']; ?></span>
                            <span class="progress_value theme-1"><?php echo $item['progress']; ?>%</span>
                            <div class="progress team_progress">
                                <div class="progress-bar theme-1" role="progressbar" data-width="<?php echo $item['progress']; ?>%" aria-valuenow="<?php echo $item['progress']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!--team single area end -->

<?php
get_footer('innerpage');
?>