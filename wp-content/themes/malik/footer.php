<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Malik
 * @since Malik 1.0
 */

?>
</main>

<!-- Main Area End-->
<?php get_template_part( 'template-parts/backtotop');?>
<!-- Footer Area Start -->
<footer>
	<div class="footer_top_area footer_default_area p-rel bg_cover" data-background="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/footer_bg.jpg">
		<div class="footer_top_wrapper p-rel">
			<div class="container">
				<div class="row">
					<div class="col-xxl-3 col-xl-3 col-lg-7 col-md-7 col-sm-7">
						<div class="footer_widget mb-50">
							<div class="footer_widget_title mb-30">
								<h4 class="footer_title">About Us</h4> </div>
							<p class="mb-25">Because it does not spend hours selling to customers, maintaining a brick and mortar stores, or paying for a commissions, Carify Auto Center can run more with in efficiently than a traditional.</p>
							<div class="footer_locate_link theme-1">
								<ul>
									<li><a href="tel:00997722717"><i class="fal fa-phone"></i><strong>Phone:</strong>00997722717</a></li>
									<li><a href="../../../cdn-cgi/l/email-protection.html#2d404c5e58406d4a404c4441034e4240"><i class="fal fa-envelope"></i><strong>Phone:</strong><span class="__cf_email__" data-cfemail="e78a8694928aa7808a868e8bc984888a">[email&#160;protected]</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-xl-3 col-lg-5 col-md-5 col-sm-5">
						<div class="footer_widget mb-50 pl_37">
							<div class="footer_widget_title mb-30">
								<h4 class="footer_title">Our Pages</h4> </div>
							<div class="footer_links theme-1">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">Features</a></li>
									<li><a href="about.html">Services</a></li>
									<li><a href="about.html">Pricing</a></li>
									<li><a href="volunteer.html">Team</a></li>
									<li><a href="about.html">Terms & condition</a></li>
									<li><a href="about.html">Privacy Policy</a></li>
									<li><a href="blog.html">News Insights</a></li>
									<li><a href="faq.html">Faq</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-xl-3 col-lg-5 col-md-5 col-sm-5">
						<div class="footer_widget mb-50 pl_17">
							<div class="footer_widget_title mb-30">
								<h4 class="footer_title">Causes</h4> </div>
							<div class="footer_links theme-1">
								<ul>
									<li><a href="cause.html">Water</a></li>
									<li><a href="cause.html">Education</a></li>
									<li><a href="cause.html">Medicine</a></li>
									<li><a href="cause.html">Medical</a></li>
									<li><a href="cause.html">Fresh Food</a></li>
									<li><a href="cause.html">Shelter</a></li>
									<li><a href="cause.html">Refuse Camp</a></li>
									<li><a href="cause.html">Donation</a></li>
									<li><a href="cause.html">Blood Donation</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-xl-3 col-lg-7 col-md-7 col-sm-7">
						<div class="footer_widget footer_news mb-50">
							<div class="footer_widget_title mb-30">
								<h4 class="footer_title">News Feeds</h4> </div>
							<div class="footer_news_content">
								<div class="single_fnews d-flex mb-30">
									<div class="fnews_img"><a href="blog-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/fnews1.jpg" alt="img"></a> </div>
									<div class="fnews_content">
										<div class="fnews_meta"> <a href="blog-details.html" class="fnews_author theme-1 sep">Charity</a> <span class="fnews_date">August 22th,2021</span> </div>
										<h5 class="fnews_title theme-1">
                                            <a href="blog-details.html">Tips How to repair you by myself</a>
                                        </h5> 
                                    </div>
								</div>
								<div class="single_fnews d-flex mb-30">
									<div class="fnews_img"><a href="blog-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/fnews2.jpg" alt="img"></a> </div>
									<div class="fnews_content">
										<div class="fnews_meta"> <a href="blog-details.html" class="fnews_author theme-1 sep">Charity</a> <span class="fnews_date">August 22th,2021</span> </div>
										<h5 class="fnews_title theme-1">
                                                    <a href="blog-details.html">Tips How to keep yourself good health</a>
                                                </h5> </div>
								</div>
								<div class="single_fnews d-flex mb-30">
									<div class="fnews_img"><a href="blog-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/fnews3.jpg" alt="img"></a> </div>
									<div class="fnews_content">
										<div class="fnews_meta"> <a href="blog-details.html" class="fnews_author theme-1 sep">Charity</a> <span class="fnews_date">August 22th,2021</span> </div>
										<h5 class="fnews_title theme-1">
                                                    <a href="blog-details.html">make you happy by yourself</a>
                                                </h5> </div>
								</div>
							</div>
						</div>
					</div>
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
<!-- Fullscreen search -->
<div class="search-wrap">
	<div class="search-inner"> <i class="fas fa-times search-close" id="search-close"></i>
		<div class="search-cell">
			<form method="get">
				<div class="search-field-holder">
					<input type="search" class="main-search-input" placeholder="Search Your Keyword..."> </div>
			</form>
		</div>
	</div>
</div>
<!-- end fullscreen search -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<?php wp_footer(); ?>
</body>

</html>


