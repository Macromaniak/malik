<?php
get_header('innerpage'); 
get_template_part( 'template-parts/title-section');
global $post;
?>
<!-- cause_details_area start  -->
        <div class="cause_details_area pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-7">
                        <div class="single_details_wrapper mb-40">
                            <div class="single_details_img">
                                <img src="<?php echo get_the_post_thumbnail_url($post, 'custom-banner-cause'); ?>" alt="img">
                            </div>
                            <?php
                            $goal = get_field('cause_goal');
			                $cause_raised = get_field('cause_raised');
			                $goal_to_go = get_field('goal_to_go');
			                $percentage = ($cause_raised / $goal) * 100;

			                $cats = get_the_terms($post->ID,'causescategories');
			                $cats = $cats[0]->name;
                            ?>
                            <div class="single_details_content">
                                <div class="single_donation_content single_border pb-45 mb-45">
                                    <div class="section_title">
                                        <a href="cause-details.html#" class="sub_title_details line_h2_2"><?php echo $cats; ?></a>
                                    </div>
                                    <h4 class="details_title">
                                    	<?php the_title(); ?>
                                    </h4>
                                    <p>
                                    	<?php echo get_field('content_on_top'); ?>
                                    </p>
                                    <div class="feature_progress_wrapper mb-25 mt-35">
                                        <div class="progress feature_progress">
                                            <div class="progress-bar" role="progressbar" data-width="<?php echo $percentage; ?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                    <div class="single_cause_meta">
                                        <div class="single_meta feature_meta feature_border d-inline-block">
                                            <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                            <span class="meta_price single_price clr_theme1"><?php echo '<i class="fa fa-inr"></i>'.$goal; ?></span>
                                        </div>
                                        <div class="single_meta feature_meta feature_border d-inline-block">
                                            <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                            <span class="meta_price single_price clr_theme2"><?php echo '<i class="fa fa-inr"></i>'.$cause_raised; ?></span>
                                        </div>
                                        <div class="single_meta feature_meta d-inline-block">
                                            <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                            <span class="meta_price single_price clr_theme3"><?php echo '<i class="fa fa-inr"></i>'.$goal_to_go; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p class="mb-30">When I was 21 I had just finished my second year at Uni studying to be a primary school teacher, which is a
                                    career I have always dreamed of achieving. However, during my summer break in August 2017, my world
                                    turned upside down when I was diagnosed with an incredibly rare and aggressive cancer called Alveolar
                                    Rhabdomyosarcoma, stage 4.</p>
                                <p class="mb-45">The symptoms were so minimal (agonising back and leg pain) it had made its way around my full body by the
                                    time I was diagnosed. Since then I have undergone over 20 cycles of chemotherapy, 50 sessions of
                                    radiotherapy and numerous operations to try and stabilise my disease.</p> -->

                                <!-- <div class="row mb-45">
                                    <div class="col-6 w_img">
                                        <img src="assets/img/causes/casuse_s1.jpg" alt="img">
                                    </div>
                                    <div class="col-6 w_img">
                                        <img src="assets/img/causes/cause_s2.jpg" alt="img">
                                    </div>
                                </div> -->

                                <!-- <p class="mb-45">I have always dreamed of achieving. However, during my summer break in August 2017, my world turned upside
                                    down when I was diagnosed with an incredibly rare and aggressive cancer called Alveolar Rhabdomyosarcoma,
                                    stage 4. The symptoms were so minimal (agonising back and leg pain) it had made its way around my full body
                                    time I was diagnosed. Since then I have undergone over 20 cycles of chemotherapy, 50 sessions of
                                    radiotherapy and numerous operations to try and stabilise my disease.</p> -->

                                    <?php echo get_field('main_content'); ?>

                                    <?php $volunteer = get_field('causes_volunteer');
                                    $vol_description = get_field('volunteer_description', $volunteer);
                                    $volunteer_image = get_the_post_thumbnail_url($volunteer, 'custom-thumb-volunteer');
                                    $volunteer_title = get_the_title($volunteer);
                                    $volunteer_designation = get_field('volunteer_designation', $volunteer);
                                     ?>
                                <div class="single_person_quote">
                                    <i class="icofont-speech-comments"></i>
                                    <div class="person_image"><a href="volunteer-details.html"><img src="<?php echo $volunteer_image; ?>" alt="img"></a></div>
                                    <div class="person_quote_text">
                                        <p>
                                        	<?php echo $vol_description; ?>
                                        </p>
                                        <div class="person_designation">
                                            <h5 class="person_nam"><a href="cause-details.html#"><?php echo $volunteer_title; ?></a></h5>
                                            <span class="person_surname"><?php echo $volunteer_designation; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <p class="single_border pb-45 mb-50">
                                	<?php echo get_field('content_on_bottom'); ?>
                                </p>

                                    <div class="single_donation_input single_border mb-50 pb-30">
                                        <!-- <div class="donation_submit_wrapper mb-20">
                                            <div class="donation_submit_box">
                                                <button type="submit">$</button>
                                                <input type="text" placeholder="$100">
                                            </div>
                                        </div> -->
                                        <?php
                                        $preset_amounts = get_field('preset_amounts', 'causes_settings');
                                        ?>
                                        <div class="input_value_wrapper">
                                        	<?php foreach ($preset_amounts as $amount) {
                                        		
                                        	 ?>
                                            <button class="input_value" value="<?php echo $amount['amount']; ?>"><i class="fa fa-inr"></i><?php echo $amount['amount']; ?></button>
                                            <?php
                                        	}
                                            ?>
                                        	<!-- <button class="input_value">Custom</button> -->
                                        </div>
                                    </div>
                                    <div class="single_donation_payment single_border mb-50 pb-30">
                                        <h5 class="single_title mb-0">Payment Method</h5>
                                        <div class="payment_icons">
                                            <a href="cause-details.html#"><i class="icofont-amazon"></i></a>
                                            <a href="cause-details.html#"><i class="icofont-paypal"></i></a>
                                            <a href="cause-details.html#"><i class="icofont-visa"></i></a>
                                            <a href="cause-details.html#"><i class="icofont-cash-on-delivery"></i></a>
                                            <a href="cause-details.html#"><i class="icofont-google-wallet-alt-3"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_donation_info single_border mb-50 pb-45">
                                        <h5 class="single_title">Personal Information</h5>
                                            <div class="input_info_wrapper">
                                                <form action="<?php echo site_url() ?>/stripe-donation/" method="POST">
                                                    <div class="input_info_name info_input"><input type="text" placeholder="Enter full name" name="payee-name"><i class="fal fa-user"></i></div>
                                                    <div class="input_info_email info_input"><input type="email" placeholder="Enter email" name="payee-email"><i class="fal fa-envelope"></i></div>
                                                
                                            </div>
                                        <div class="submit_info_wrapper d-inline-flex">
                                            <div class="donation_submit_wrapper">
                                                <div class="donation_submit_box w_208">
                                                    <button type="submit">Donate</button>
                                                    <input type="text" placeholder="Amount" name="amount" required>
                                                    <input type="hidden" name="cause_id" value="<?php echo $post->ID; ?>">
                                                    <input type="hidden" name="cause_title" value="<?php echo get_the_title($post); ?>">
                                                </div>
                                                </form>
                                            </div>
                                            <div class="submit_info_button">
                                                <a href="cause.html" class="g_btn hbtn_1 to_right1 i_left rad-30 p-35"><i class="fal fa-heart"></i> Explore Causes<span></span></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <?php
                                    $prev = get_previous_post();
                                    $next = get_next_post();
                                    ?>
                                    <div class="page_pagination_withimg">
                                        <a href="<?php echo get_permalink($prev); ?>" class="img_pagination img_pagination_left">
                                            <div class="left_img"><img src="<?php echo get_the_post_thumbnail_url($prev, 'custom-thumb-cause'); ?>" alt="img">
                                            </div>
                                            <div class="left_text">
                                                <span class="sub_pagination">Prev Cause</span>
                                                <h5 class="pagination_title"><?php echo get_the_title($prev) ?></h5>
                                            </div>
                                        </a>
                                        
                                        <a href="<?php echo get_permalink($next); ?>" class="img_pagination img_pagination_right">
                                            <div class="right_text text-sm-end">
                                                <span class="sub_pagination">Next Cause</span>
                                                <h5 class="pagination_title"><?php echo get_the_title($next) ?></h5>
                                            </div>
                                            <div class="right_img"><img src="<?php echo get_the_post_thumbnail_url($next, 'custom-thumb-cause'); ?>" alt="img"></div>
                                        </a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5">
                        <div class="single_sidebar_wrapper pl-15 mb-40">

                            <div class="single_widget has_border person_widget text-center mb-40">
                                <div class="widget_person_img">
                                    <a href="volunteer-details.html"><img src="<?php echo site_url().'/wp-content/themes/malik/assets/img/user.jpeg' ?>" alt="img"></a>
                                    <span class="check_sign"><i class="fal fa-check"></i></span>
                                </div>
                                <?php  ?>
                                <div class="person_designation widget_mb25">
                                    <h5 class="person_nam f_size24"><a href="volunteer-details.html"><?php echo get_the_author_meta( 'display_name', $post->post_author ) ?></a></h5>
                                    <span class="person_surname"><?php echo get_the_author_meta('user_email', $post->post_author) ?></span>
                                </div>
                                <div class="feature_buttons widget_buttons">
                                    <a href="donation.html" class="g_btn hbtn_1 to_right1 i_left rad-30"><i class="fal fa-heart"></i>Donate Now<span></span></a>
                                    <a href="cause-details.html#" class="reply_btn theme-2"><i class="fal fa-reply"></i></a>
                                </div>
                            </div>

                            <div class="single_widget has_border post_widget mb-40">
                                <div class="single_widget_title">
                                    <h4 class="widget_title_text has_border">Donors</h4>
                                </div>
                                <?php $donors = get_field('donations'); ?>
                                <div class="donor_post_wrapper">
                                    <div class="single_donor_post">
                                        <div class="donar_post_img"><a href="volunteer-details.html"><img src="assets/img/causes/donar1.jpg" alt="img"></a></div>
                                        <div class="donar_post_content">
                                            <h5 class="donar_name"><a href="volunteer-details.html">Nilmarendra Max</a></h5>
                                            <div class="donar_meta">
                                                <a href="cause-details.html#" class="donar_amount theme-1 sep">$900</a>
                                                <a href="cause-details.html#" class="donar_date theme-2"><i class="fal fa-calendar-alt"></i> February 20, 2022</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cause_details_area end  -->
<?php
get_footer('innerpage');
?>