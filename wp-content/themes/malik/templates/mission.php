<?php /* Template Name: Mission */ 
   get_header('innerpage'); 
   get_template_part( 'template-parts/title-section');
?>
 <!--about single area start -->
        <div class="about_single_area pt-120 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="about_signle_video mb-40">
                            <div class="img_effect_white about_video_image_wrapper">
                                <a href="event.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/mission.jpg" alt="img"></a>
                            </div>
                            
                            <a href="https://www.youtube.com/watch?v=opCE7J_LHp4" class="video_icon">
                                <i class="fal fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about_wrapper pl-50 mb-40">
                            <div class="section_title mb-30">
                                <span class="sub_title sub_title_2">Work Program</span>
                                <h3 class="title title_2 no_br">Keep Track of Our <br>
                                    Annual Charity Program</h3>
                            </div>
                            <p class="mb-55">NewLook unlike many traditional plastic surgery centers in San Diego, are
                                industry recognized experts in a wide variety of cosmetic procedure and are
                                dedicated to providing customers.</p>
                            <div class="mission_progress_wrapper">
                                <div class="mission_progress_single">
                                    <div class="progress_circle theme-1" data-percentage="65">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div class="value">65<span>%</span></div>
                                        </div>
                                    </div>
                                    <span class="progress_text">Annual Program</span>
                                </div>
                                <div class="mission_progress_single">
                                    <div class="progress_circle theme-3" data-percentage="75">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div class="value">75<span>%</span></div>
                                        </div>
                                    </div>
                                    <span class="progress_text">Monthly Program</span>
                                </div>
                                <div class="mission_progress_single">
                                    <div class="progress_circle theme-2" data-percentage="55">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div class="value">55<span>%</span></div>
                                        </div>
                                    </div>
                                    <span class="progress_text">Global Program</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about single area end -->

        <!-- Support area start -->
        <div class="support_area gray-bg pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-sm-12">
                        <div class="section_title mb-55">
                            <span class="sub_title"><i class="fal fa-heart"></i>Why Choose Us</span>
                            <h3 class="title">The perfect help</h3>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                                <div class="choose_single_card theme-2 p-rel mb-30">
                                    <div class="choose_abs theme-2">
                                        <i class="flaticon-map"></i>
                                    </div>
                                    <span class="card_number">01</span>
                                    <div class="choose_card_content">
                                        <h5 class="choose_card_title">Places to get lost</h5>
                                        <p>Charity is the largest global for
                                            crowdfunding community with
                                            connecting nonprofits.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                                <div class="choose_single_card theme-3 p-rel mb-30">
                                    <div class="choose_abs theme-3">
                                        <i class="flaticon-user"></i>
                                    </div>
                                    <span class="card_number clr-theme-3">02</span>
                                    <div class="choose_card_content">
                                        <h5 class="choose_card_title">Free Refuge Shelter</h5>
                                        <p>Lorem ipsum dolor sit ametco bns ectetur adi pisicing elit sed do eiusmod tempor incid.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-sm-12 d-flex align-items-center text-center">
                        <div class="single-support p-rel ml-50 mb-30" data-background="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/support_bg.jpg">
                            <div class="support-wrapper p-rel">
                                <h4 class="support_title">Support Us</h4>
                                <p class="mb-35">Charity is the largest global for crowdfunding</p>
                                <div class="support_form">
                                    <form action="#">
                                        <div class="support_search_section mb-20">
                                            <input type="text" placeholder="$100" id="Support">
                                            <button class="amount_btn">Amount</button>
                                            <select class="support_btn support_select">
                                                <option value="Currency">USD</option>
                                                <option value="">EUR</option>
                                                <option value="">JPY</option>
                                                <option value="">BDT</option>
                                            </select>
                                        </div>
                                        <div class="donar_section support_currency d-sm-flex d-inline-block justify-content-center">
                                            <div class="donar_currency mb-30">
                                                <button class="currency">$5</button>
                                                <button class="currency ml-10">$10</button>
                                                <button class="currency ml-10">$50</button>
                                                <button class="currency ml-10">$100</button>
                                            </div>
                                            <button type="submit" class="g_btn curr_btn rad-30 ml-10">Donate<span></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support area end -->

                
        <!--about single area start -->
        <div class="about_single_area about_subscribe pt-105 pb-120">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/mission_bg.jpg" alt="img">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 offset-xl-6 col-md-10 offset-md-1">
                        <div class="about_wrapper subscribe_mission pl-50">
                            <div class="section_title">
                                <a href="mission.html#" class="sub_title sub_title_2">subscribe</a>
                                <h3 class="title title_2 text_white">Get every weekly update
                                    from here.</h3>
                            </div>
                            <p class="mb-45">NewLook unlike many traditional plastic surgery centers in San Diego, are
                                industry recognized experts in a wide variety of cosmetic procedure and are
                                dedicated to providing customers.</p>
                                <div class="subscribe_form height_70">
                                    <form action="#">
                                        <input type="text" placeholder="Enter email address">
                                        <button class="submit_btn abs_submit" type="submit"><i class="fal fa-envelope i_left"></i>Subscribe Now</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about single area end -->

        
            <!-- Icon Box area start -->
            <div class="icon_box_area pt-120 pb-80">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="cause.html" class="single_iconbox text-center theme-1 mb-40">
                                <i class="flaticon-lotus-flower"></i>
                                <h5 class="icon_title">Community & Culture</h5>
                            </a>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="cause.html" class="single_iconbox text-center theme-2 mb-40">
                                <i class="flaticon-graduation-cap"></i>
                                <h5 class="icon_title">Family & Education</h5>
                            </a>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="cause.html" class="single_iconbox text-center theme-3 mb-40">
                                <i class="flaticon-care"></i>
                                <h5 class="icon_title">Charity & Causes</h5>
                            </a>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="cause.html" class="single_iconbox text-center theme-5 mb-40">
                                <i class="flaticon-dumbbell"></i>
                                <h5 class="icon_title">Sports & Fitness</h5>
                            </a>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <a href="cause.html" class="single_iconbox text-center theme-6 mb-40">
                                <i class="flaticon-creativity"></i>
                                <h5 class="icon_title">Conference & Ideas</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
              <!-- Icon Box area end -->
<?php get_footer('innerpage'); ?>
