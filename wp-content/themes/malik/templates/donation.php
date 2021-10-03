<?php /* Template Name: Donation */ 
   get_header('innerpage'); 
   get_template_part( 'template-parts/title-section');?>
  <!--single donation area start -->
        <div class="single_donation_area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-5">
                        <div class="single_donation_img_wrapper pr-30">
                            <div class="single_donation_img mb-40">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/donation/donation_single1.jpg" alt="img">
                            </div>
                            <div class="single_donation_img mb-40">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/donation/donation_single2.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-7">
                        <div class="single_donation_content donation_border">
                            <div class="section_title">
                                <a href="donation.html#" class="sub_title sub_title_2">Water</a>
                            </div>
                            <h4 class="donation_title">The community state of the art <br>
                                recurring donation.</h4>
                            <p>generous actions or donations to aid the poor, ill, or needy: to devote
                                one's life to charity. something given to a person or persons in need;
                                alms: She asked for work, not charity. a charitable act or work.</p>
                            <div class="feature_progress_wrapper mb-25 mt-35">
                                <div class="progress feature_progress">
                                    <div class="progress-bar" role="progressbar" data-width="50%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </div>
                            <div class="single_cause_meta mb-20">
                                <div class="single_meta feature_meta feature_border d-inline-block">
                                    <span class="meta_text red_clr"><i class="fal fa-globe"></i> Goal</span>
                                    <span class="meta_price red_clr"><i class="fa fa-inr"></i>4,5100</span>
                                </div>
                                <div class="single_meta feature_meta feature_border d-inline-block">
                                    <span class="meta_text red_clr"><i class="fal fa-users"></i> Raised</span>
                                    <span class="meta_price red_clr"><i class="fa fa-inr"></i>45,300</span>
                                </div>
                                <div class="single_meta feature_meta d-inline-block">
                                    <span class="meta_text red_clr"><i class="fal fa-reply"></i> To go</span>
                                    <span class="meta_price red_clr"><i class="fa fa-inr"></i>45,200</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_donation_input donation_border">
                            <div class="donation_submit_wrapper mb-20">
                                <!-- <div class="donation_submit_box">
                                    <button type="submit">$</button>
                                    <input type="text" placeholder="$100">
                                </div> -->
                            </div>
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
                        <div class="single_donation_payment donation_border">
                            <h5 class="single_title mb-0">Payment Method</h5>
                            <div class="payment_icons">
                                <a href="donation.html#"><i class="icofont-amazon"></i></a>
                                <a href="donation.html#"><i class="icofont-paypal"></i></a>
                                <a href="donation.html#"><i class="icofont-visa"></i></a>
                                <a href="donation.html#"><i class="icofont-cash-on-delivery"></i></a>
                                <a href="donation.html#"><i class="icofont-google-wallet-alt-3"></i></a>
                            </div>
                        </div>
                        <div class="single_donation_info">
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
                                        <input type="hidden" name="cause_id" value="general">
                                        <input type="hidden" name="cause_title" value="">
                                    </div>
                                    </form>
                                </div>
                                <div class="submit_info_button">
                                    <a href="cause.html" class="g_btn hbtn_1 to_right1 i_left rad-30 p-35"><i class="fal fa-heart"></i> Explore Causes<span></span></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- <div class="single_donation_info paypal">
                            <div class="paypal-submit-block">
                                <?php //echo do_shortcode('[wpedon id=262]'); ?>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!--single donation area end -->

<?php get_footer('innerpage');?>