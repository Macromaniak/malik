<?php get_header(); 
   get_template_part( 'template-parts/slider');
   get_template_part( 'template-parts/about-section');
   get_template_part( 'template-parts/causes-section'); ?>
<!--support area start-->
<div class="support_area mtm-294 pb-90">
   <div class="container">
      <div class="support_bg white-bg">
         <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
               <div class="support_images_active swiper-container dots_style">
                  <div class="swiper-wrapper">
                     <div class="support_img_single swiper-slide img_effect_white">
                        <a href="volunteer.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/support1.jpg" alt="img"></a>
                     </div>
                     <div class="support_img_single swiper-slide img_effect_white">
                        <a href="volunteer.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/support3.jpg" alt="img"></a>
                     </div>
                     <div class="support_img_single swiper-slide img_effect_white">
                        <a href="volunteer.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/support4.jpg" alt="img"></a>
                     </div>
                     <div class="support_img_single swiper-slide img_effect_white">
                        <a href="volunteer.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/support3.jpg" alt="img"></a>
                     </div>
                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination-join text-center"></div>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 d-flex align-items-center">
               <div class="support_wrapper">
                  <div class="section_title">
                     <span class="sub_title"><i class="fal fa-users"></i> Join Us</span>
                     <h3 class="title">Become an volunteer
                        for save children
                     </h3>
                  </div>
                  <p class="mb-45">NewLook unlike many traditional plastic surgery centers in San
                     Diego, are industry recognized experts in a wide variety of with an
                     cosmetic procedure and are dedicated
                  </p>
                  <a href="volunteer.html" class="g_btn theme1_bg to_right2 i_right rad-30 p-45">Apply Here<i class="fal fa-long-arrow-right"></i><span></span></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container pt-120">
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
                           connecting nonprofits.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                  <div class="choose_single_card p-rel theme-3 mb-30">
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
               <form action="#">
                  <div class="support-wrapper p-rel">
                     <h4 class="support_title">Support Us</h4>
                     <p class="mb-35 opacity_6">Charity is the largest global for crowdfunding</p>
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
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!--support area end-->
<?php get_template_part( 'template-parts/newsfeeds-homepage');
   get_footer(); ?>