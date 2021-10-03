<?php /* Template Name: News */ 
   get_header('innerpage'); 
   get_template_part( 'template-parts/title-section');?>

 <!--breadcrumb area start-->
        <!-- <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/bg/breadcrum_bg_2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="index.html">Home</a></li>
                                <li><span class="active">Blog</span></li>
                            </ul>
                            <div class="breadcrumb_title">
                                <h2>News Insights</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--breadcrumb area end-->
<?php $posts = get_posts(); ?>
        <!-- cause_details_area start  -->
        <div class="blog_details_area pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-7">
                        <div class="blog_area mb-40">
                            <div class="blog_image_wrapper mb-40">
                                <div class="blog_image">
                                    <a href="blog-details.html" class="w_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_image.jpg" alt="img"></a>
                                    <div class="admin_meta has_abs">
                                        <a href="blog-details.html" class="blog_cat">Business</a>
                                        <div class="blog_admin">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/admin.jpg" alt="img"></a>
                                            <a href="volunteer-details.html" class="admin_by">By Hetmayer</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_content">
                                    <h4 class="blog_title"><a href="blog-details.html">Become a monthly giver and save a child’s life today</a></h4>
                                    <p>Novia's spaciously two bedroom apartments are perfect for families and even business partners. Look out into the Manhattan skyline from the open fully equipped kitchen.</p>
                                    <div class="blog_meta has_border_top">
                                        <a href="#" class="eye sep"><i class="fal fa-eye"></i>100 Views</a>
                                        <a href="#" class="comments sep"><i class="fal fa-comments"></i>30 Comments</a>
                                        <a href="#" class="calendar"><i class="fal fa-calendar-alt"></i>24 March 2022</a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_video_wrapper mb-40">
                                <div class="blog_image">
                                    <a href="#" class="w_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_video.jpg" alt="img"></a>
                                    <a href="https://www.youtube.com/watch?v=LiydZUP8__I" class="video_play has_abs"><i class="fal fa-play"></i></a>
                                    <div class="admin_meta has_abs">
                                        <a href="blog-details.html" class="blog_cat">Medical</a>
                                        <div class="blog_admin">
                                            <a href="volunteer-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/admin.jpg" alt="img"></a>
                                            <a href="volunteer-details.html" class="admin_by">By Mark</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_content">
                                    <h4 class="blog_title"><a href="blog-details.html">What takes an online fundraising site from good to great?</a></h4>
                                    <p>Novia's spaciously two bedroom apartments are perfect for families and even business partners. Look out into the Manhattan skyline from the open fully equipped kitchen.</p>
                                    <div class="blog_meta has_border_top">
                                        <a href="#" class="eye sep"><i class="fal fa-eye"></i>150 Views</a>
                                        <a href="#" class="comments sep"><i class="fal fa-comments"></i>20 Comments</a>
                                        <a href="#" class="calendar"><i class="fal fa-calendar-alt"></i>24 March 2021</a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_image_wrapper mb-40">
                                <div class="blog_image">
                                    <a href="#" class="w_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_image2.jpg" alt="img"></a>
                                    <div class="admin_meta has_abs">
                                        <a href="blog-details.html" class="blog_cat">Education</a>
                                        <div class="blog_admin">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/admin.jpg" alt="img"></a>
                                            <a href="#" class="admin_by">By Salim</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_content">
                                    <h4 class="blog_title"><a href="#">Themepure always offers for everybody to enrich knowledge by yourself</a></h4>
                                    <p>Novia's spaciously two bedroom apartments are perfect for families and even business partners. Look out into the Manhattan skyline from the open fully equipped kitchen.</p>
                                    <div class="blog_meta has_border_top">
                                        <a href="#" class="eye sep"><i class="fal fa-eye"></i>300 Views</a>
                                        <a href="#" class="comments sep"><i class="fal fa-comments"></i>30 Comments</a>
                                        <a href="#" class="calendar"><i class="fal fa-calendar-alt"></i>21 March 2022</a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_audio_wrapper mb-40">
                                <div class="blog_audio_img">
                                    <a href="#" class="w_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_audio.jpg" alt="img"></a>
                                    <a href="#" class="audio_logo_abs"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/audio_logo.png" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <h4 class="blog_title"><a href="#">How to Survive a Recession When the Future Feels Uncertain</a></h4>
                                    <p>Novia's spaciously two bedroom apartments are perfect for families and even business partners. Look out into the Manhattan skyline from the open fully equipped kitchen.</p>
                                    <div class="blog_meta has_border_top">
                                        <a href="#" class="eye sep"><i class="fal fa-eye"></i>100 Views</a>
                                        <a href="#" class="comments sep"><i class="fal fa-comments"></i>30 Comments</a>
                                        <a href="#" class="calendar"><i class="fal fa-calendar-alt"></i>14 March 2022</a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_noimg_wrapper mb-40">
                                <div class="blog_content noimg_content">
                                    <h4 class="blog_title"><a href="#">All People can help others but can not do normally for a social restriction</a></h4>
                                    <p>Novia's spaciously two bedroom apartments are perfect for families and even business partners. Look out into the Manhattan skyline from the open fully equipped kitchen.</p>
                                    <div class="blog_meta has_border_top">
                                        <a href="#" class="eye sep"><i class="fal fa-eye"></i>100 Views</a>
                                        <a href="#" class="comments sep"><i class="fal fa-comments"></i>30 Comments</a>
                                        <a href="#" class="calendar"><i class="fal fa-calendar-alt"></i>24 March 2022</a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_blockquote_wrapper bg_cover mb-40" data-background="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_quote.jpg">
                                <div class="blog_blockquote_content">
                                    <i class="fas fa-quote-left"></i>
                                    <h4 class="blog_title"><a href="blog-details.html">Dharma Home Suites at Novia offers fully plain
                                        furnished</a></h4>
                                </div>
                            </div>
                            
                            <div class="page_pagination text-center mt-10">
                                <a href="#"><i class="fal fa-chevron-double-left"></i></a>
                                <a href="#">1</a>
                                <a href="#" class="current">2</a>
                                <a href="#">1</a>
                                <a href="#">...</a>
                                <a href="#">10</a>
                                <a href="#"><i class="fal fa-chevron-double-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5">
                        <div class="blog_sidebar_wrapper pl-15 mb-40">

                            <div class="sidebar_widget has_border about_widget mb-40">
                                <div class="sidebar_title">
                                    <h4 class="sidebar_title_text has_border"><span class="theme-1">//</span>About Me</h4>
                                </div>
                                <div class="about_widget_content text-center">
                                    <div class="widget_about_img">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_person.jpg" alt="img"></a>
                                    </div>
                                    
                                    <h6 class="about_person_title"><a href="#l">Rosalina D. Willaimson</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    <div class="widget_social">
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="behance"><i class="fab fa-behance"></i></a>
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>

                                    </div>
                                </div>
                            </div>

                            <div class="sidebar_widget has_border search_widget mb-40">
                                <div class="sidebar_title">
                                    <h4 class="sidebar_title_text has_border"><span class="theme-1">//</span>Search Here</h4>
                                </div>
                                <div class="search_widget_content">
                                    <form action="#">
                                        <input type="text" placeholder="Search your keyword...">
                                        <button type="submit"><i class="fal fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            
                            
                            <div class="sidebar_widget has_border feed_widget mb-40">
                                <div class="sidebar_title">
                                    <h4 class="sidebar_title_text has_border"><span class="theme-1">//</span>Popular Feeds</h4>
                                </div>
                                <div class="feed_widget_content">
                                    <div class="single_feed_widget has_border">
                                        <div class="feed_widget_img"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_feed1.jpg" alt="img"></a></div>
                                        <div class="feed_widget_text">
                                            <h5 class="feed_widget_title theme-1"><a href="#">How to improve knowledge for myself</a></h5>
                                            <a href="#" class="feed_widget_date theme-1"><i class="fal fa-calendar-alt"></i>24th March 2022</a>
                                        </div>
                                    </div>
                                    <div class="single_feed_widget has_border">
                                        <div class="feed_widget_img"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_feed2.jpg" alt="img"></a></div>
                                        <div class="feed_widget_text">
                                            <h5 class="feed_widget_title theme-1"><a href="#">Everybody needs to know how to help myself</a></h5>
                                            <a href="#" class="feed_widget_date theme-1"><i class="fal fa-calendar-alt"></i>24th March 2022</a>
                                        </div>
                                    </div>
                                    <div class="single_feed_widget has_border">
                                        <div class="feed_widget_img"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_feed3.jpg" alt="img"></a></div>
                                        <div class="feed_widget_text">
                                            <h5 class="feed_widget_title theme-1"><a href="#">Good foods available on behalf of fundraise</a></h5>
                                            <a href="#" class="feed_widget_date theme-1"><i class="fal fa-calendar-alt"></i>24th Sep 2021</a>
                                        </div>
                                    </div>
                                    <div class="single_feed_widget">
                                        <div class="feed_widget_img"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_feed4.jpg" alt="img"></a></div>
                                        <div class="feed_widget_text">
                                            <h5 class="feed_widget_title theme-1"><a href="#">Keep focus on you to find out yourself</a></h5>
                                            <a href="#" class="feed_widget_date theme-1"><i class="fal fa-calendar-alt"></i>24th March 2022</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            
                            <div class="sidebar_widget has_border categories_widget mb-40">
                                <div class="sidebar_title">
                                    <h4 class="sidebar_title_text has_border"><span class="theme-1">//</span>Categories</h4>
                                </div>
                                <ul>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Consultant</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">UI/UX</a></li>
                                    <li><a href="#">Technology</a></li>
                                </ul>
                            </div>

                            <div class="sidebar_widget has_border instagram_widget mb-40">
                                <div class="sidebar_title">
                                    <h4 class="sidebar_title_text has_border"><span class="theme-1">//</span>Instagram Feeds</h4>
                                </div>
                                <div class="instagram_widget_img_wrapper">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta1.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta2.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta3.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta4.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta5.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta6.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta7.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta8.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta9.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta10.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta11.jpg" alt="img"></a>
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/insta12.jpg" alt="img"></a>
                                </div>
                            </div>

                            <div class="sidebar_widget has_border tagcloud_widget mb-40">
                                <div class="sidebar_title">
                                    <h4 class="sidebar_title_text has_border"><span class="theme-1">//</span>Tags</h4>
                                </div>
                                <div class="tagcloud">
                                    <a href="#">Popular</a>
                                    <a href="#">Design</a>
                                    <a href="#">UX</a>
                                    <a href="#">UX</a>
                                    <a href="#">Usability</a>
                                    <a href="#">Develop</a>
                                    <a href="#">Icon</a>
                                    <a href="#">Icon</a>
                                    <a href="#">Business</a>
                                    <a href="#">Consult</a>
                                    <a href="#">Kit</a>
                                    <a href="#">Kit</a>
                                    <a href="#">Keyboard</a>
                                    <a href="#">Mouse</a>
                                    <a href="#">Tech</a>
                                    <a href="#">Tech</a>
                                </div>
                            </div>

                            <div class="sidebar_widget has_border addverise_widget mb-40">
                                <div class="sidebar_title">
                                    <h4 class="sidebar_title_text has_border"><span class="theme-1">//</span>Sponsor Adds</h4>
                                </div>
                                <div class="advertise_img">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news/blog_add.jpg" alt="img"></a>
                                    <div class="advertise_abs">
                                        <span>270x240</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cause_details_area end  -->
<?php get_footer('innerpage');?>