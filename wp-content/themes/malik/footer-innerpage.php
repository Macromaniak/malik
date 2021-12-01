 </main>

<!-- Main Area End-->
<?php get_template_part( 'template-parts/backtotop');?>
        <!-- Footer Area Start -->
        <footer>
            <div class="footer_top_area footer_top_2">
                <div class="footer_top_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-7 col-sm-7">
                                <div class="footer_widget footer_about mb-50">
                                   <div class="footer_logo mb-35">
                                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/logo_white.png" alt="img">
                                   </div>
                                    <p class="mb-30">
                                        <?php echo get_field('block_1_description', 'theme_options'); ?>
                                    </p>
                                        <div class="footer_social_2">
                                            <a href="<?php echo get_field('social_facebook', 'theme_options'); ?>" class="facebook"><i class="fab fa-facebook-f"></i></a>

                                            <a href="<?php echo get_field('social_twitter', 'theme_options'); ?>" class="twitter"><i class="fab fa-twitter"></i></a>

                                            <a href="<?php echo get_field('social_linkedin', 'theme_options'); ?>" class="behance"><i class="fab fa-linkedin"></i></a>

                                            <a href="<?php echo get_field('social_instagram', 'theme_options'); ?>" class="youtube"><i class="fab fa-instagram"></i></a>
                                         </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-5 col-sm-5">
                                <div class="footer_widget mb-50 pl_15">
                                    <div class="footer_widget_title mb-25">
                                        <h4 class="footer_title footer_title_2"><?php echo get_field('block_2_title', 'theme_options'); ?></h4>
                                    </div>
                                    <div class="footer_links footer_links_2">
                                        <ul>
                                            <!-- <li><a href="about.html">About Us</a></li>
                                            <li><a href="volunteer.html">Meet The Team</a></li>
                                            <li><a href="volunteer.html">Volenteers</a></li>
                                            <li><a href="about.html">Service Provided</a></li>
                                            <li><a href="blog.html">Latest News</a></li>
                                            <li><a href="contact.html">Contact Us</a></li> -->
                                            <?php $block2 = get_field('block_2', 'theme_options');
                                            foreach($block2 as $b2):
                                            ?>
                                            <li><a href="<?php echo $b2['link']['url'] ?>" <?php if($b2['link']['target']){ ?>target="<?php echo $b2['link']['target']?>" <?php } ?>><?php echo $b2['link']['title']; ?></a></li>

                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-7 col-sm-7"> 
                                <div class="footer_widget mb-50 pl_25">
                                    <div class="footer_widget_title mb-25">
                                        <h4 class="footer_title footer_title_2"><?php echo get_field('block_3_title', 'theme_options'); ?></h4>
                                    </div>
                                    <div class="footer_links footer_links_2">
                                        <ul>
                                            <?php $block3 = get_field('block_3', 'theme_options');
                                            foreach($block3 as $b3):
                                            ?>
                                            <li><a href="<?php echo $b3['link']['url'] ?>" <?php if($b3['link']['target']){ ?>target="<?php echo $b3['link']['target']?>" <?php } ?>><?php echo $b3['link']['title']; ?></a></li>
                                            
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <!-- <div class="footer_btn">
                                        <a href="about.html" class="g_btn fbtn_2 to_right1 p-40 rad-50">Get Support<span></span></a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-sm-5">
                                <div class="footer_widget footer_news mb-50">
                                    <div class="footer_widget_title mb-25">
                                        <h4 class="footer_title footer_title_2"><?php echo get_field('block_4_title', 'theme_options'); ?></h4>
                                    </div>
                                    <div class="footer_info_content">
                                        <p><span><strong>Address :</strong>
                                            <?php echo get_field('block_4_footer_address', 'theme_options'); ?>
                                        </span></p>

                                        <p><a href="tel:<?php echo get_field('block_4_footer_phone', 'theme_options'); ?>"><span><strong>Phone :</strong>
                                            <?php echo get_field('block_4_footer_phone', 'theme_options'); ?>
                                        </span></a></p>

                                        <p><a href="mailto:<?php echo get_field('block_4_footer_email', 'theme_options'); ?>"><span><strong>Email :</strong>
                                            <?php echo get_field('block_4_footer_email', 'theme_options'); ?>
                                        <span class="__cf_email__" data-cfemail="5930373f36191c21383429353c773a3634">
                                            
                                        </span></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-12">
                                <div class="fcta_sigle has_bg mb-30">
                                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/footer/fcta2_1.png" alt="img">
                                    <div class="fcta_text">
                                        <h4>Help & Support Now</h4>
                                        <span>Might as well say Would you Could be you be mine? </span>
                                    </div>
                                    <div class="fcta_button">
                                        <a href="donation.html" class="g_btn fca_btn1 to_right2 p-40 rad-50">Donate <span></span></a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-12">
                                <div class="fcta_sigle has_bg pad_170s mb-30">
                                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/footer/fcta2_2.png" alt="img">
                                    <div class="fcta_text">
                                        <h4>Join as Volunteer</h4>
                                        <span>Might as well say Would you Could be you be mine? </span>
                                    </div>
                                    <div class="fcta_button">
                                        <a href="about.html" class="g_btn fca_btn to_left p-40 rad-50">Join <span></span></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12 text-center">
                            <p>Copyright © <?php echo get_the_date( 'Y'); ?> All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
         <!-- Footer Area End -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<?php wp_footer(); ?>
</body>

</html>         