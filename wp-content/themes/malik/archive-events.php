<?php
// die('ff');
get_header('innerpage'); 
get_template_part( 'template-parts/title-section');
?>

<!--Recent causes area start-->
        <section class="event_causes_area pt-120 pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 text-center">
                        <div class="cause_button_wrapper mb-25">
                            <nav>
                                <?php
                                    $event_cats = get_terms(array(
                                     'taxonomy' => 'eventcategories',
                                     'hide_empty' => false,
                                   ));
                                    ?>
                                <div class="nav tab_buttons" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="0" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All Categories</button>
                                    
                                    <?php foreach($event_cats as $cat): ?>
                                      <button class="nav-link" id="<?php echo $cat->term_id; ?>" data-bs-toggle="tab" data-bs-target="#water" type="button" role="tab" aria-controls="water" aria-selected="false"><?php echo $cat->name; ?></button>
                                    <?php endforeach; ?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php
                                if ( have_posts() ) :
                                while ( have_posts() ) : the_post();
                                global $post;
                        ?>
                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="<?php the_permalink(); ?>"><?php the_field('event_timer_text'); ?></a></h5>
                                        <span><?php the_field('event_location'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="<?php the_field('event_date') ?>"></div>
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
                    <div class="tab-pane fade" id="water" role="tabpanel" aria-labelledby="nav-water">


                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause6.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Every Second Until the Event</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/08/19"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause5.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Trigger Event Every Second</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/09/19"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause4.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Each Second Until the Case</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/07/19"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="nav-education">

                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause14.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Every Second Until the Event</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/06/19"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause15.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Trigger Event Every Second</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/06/19"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause16.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Each Second Until the Case</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/05/19"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="medical" role="tabpanel" aria-labelledby="nav-medical">

                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause10.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Every Second Until the Event</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/09/01"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause11.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Trigger Event Every Second</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/09/09"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause12.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Each Second Until the Case</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/09/23"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="furniture" role="tabpanel" aria-labelledby="nav-furniture">

                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause26.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Every Second Until the Event</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/09/29"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause25.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Trigger Event Every Second</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/09/09"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single_events_wrapper tab-border mb-30">
                            <div class="row align-items-center">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 d-md-none d-lg-block">
                                    <div class="eventcount_img w_img">
                                        <a href="event-details.html"><img src="assets/img/causes/cause24.jpg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-5 text-center text-md-start">
                                    <div class="eventcount_text heading-clr">
                                        <h5><a href="event-details.html">Each Second Until the Case</a></h5>
                                        <span>Douglas Park, Chicago, IL</span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-7 text-center text-md-end">
                                    <div class="count_down_box heading-clr" data-countdown="2021/07/19"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="cause_button text-center mt-10 mb-30">
                        <a href="event.html" class="cause_btn g_btn to_right1 rad-30">Load More <i class="far fa-plus"></i> <span></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Recent causes area end-->

        <!-- donation area start -->
        <div class="donation_area bg_cover pt-120 pb-115" data-background="assets/img/bg/donate_bg2.jpg">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                        <div class="donation_wrappar">
                            <h4 class="donate_title">Make Donation</h4>
                            <span class="opacity_6">100% of your helping donation funds spinal  cord research.</span>
                            <div class="donate_progress_wrapper">
                                    <label class="event_lab">Raised: <span class="theme-3">$1,25,000</span></label>
                                    <div class="progress donate_progress">
                                        <div class="progress-bar theme-3" role="progressbar" data-width="30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>
                                <div class="support_search_section event_single mb-20">
                                    <input type="text" placeholder="50" id="Support" class="mb-10">
                                    <select class="support_btn support_select">
                                        <option value="Currency">USD</option>
                                        <option value="">EUR</option>
                                        <option value="">JPY</option>
                                        <option value="">BDT</option>
                                    </select>
                                    <p class="s_14">Please enter amount over 500 manually</p>
                                </div>
                                <button class="g_btn hbtn_1 to_left rad-30">Donate Now <span></span></button>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                        <div class="donate_img_wrapper ml-70">
                            <div class="donate_img_inner p-rel">
                                <img src="<?php echo get_field('event_page_bottom_first_image', 'event_options')['url'] ?>" alt="img">
                                <img src="<?php echo get_field('event_page_bottom_third_image', 'event_options')['url'] ?>" alt="img">
                                <img class="abs_img event_abs_img" src="<?php echo get_field('event_page_bottom_second_image', 'event_options')['url'] ?>" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- donation area end-->


<?php
get_footer('innerpage');
?>