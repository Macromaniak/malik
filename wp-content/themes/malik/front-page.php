<?php get_header('innerpage'); 
    get_template_part( 'template-parts/slider');
    get_template_part( 'template-parts/categories-section');
    get_template_part( 'template-parts/about-section');
    get_template_part( 'template-parts/causes-section');
   ?>
   
<!--support area start-->
<div class="support_area mtm-294 pb-90">
   <div class="container">
      <div class="support_bg white-bg">
         <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
               <div class="support_images_active swiper-container dots_style">
                  <div class="swiper-wrapper">
                     <?php $slider_images = get_field('slider');
                     foreach($slider_images as $img) :
                     ?>
                     <div class="support_img_single swiper-slide img_effect_white">
                        <a href="#"><img src="<?php echo $img['home_join_us_image']['url']; ?>" alt="img"></a>
                     </div>
                     <?php endforeach; ?>
                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination-join text-center"></div>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 d-flex align-items-center">
               <div class="support_wrapper">
                  <div class="section_title">
                     <span class="sub_title"><i class="fal fa-users"></i> Join Us</span>
                     <h3 class="title">
                        <?php echo get_field('home_join_us_title'); ?>
                     </h3>
                  </div>
                  <p class="mb-45">
                     <?php echo get_field('home_join_us_description'); ?>
                  </p>
                  <a href="<?php echo get_field('home_join_us_button_link'); ?>" class="g_btn theme1_bg to_right2 i_right rad-30 p-45"><?php echo get_field('home_join_us_button_label'); ?><i class="fal fa-long-arrow-right"></i><span></span></a>
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
               <h3 class="title"><?php echo get_field('home_why_choose_title'); ?></h3>
            </div>
            <div class="row">
               <?php $home_why_choose_box_content = get_field('home_why_choose_box_content');
               $i=1;
               foreach($home_why_choose_box_content as $box) :
               ?>
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6">
                  <div class="choose_single_card theme-<?php echo $i+1 ?> p-rel mb-30">
                     <div class="choose_abs theme-<?php echo $i+1 ?>">
                        <i class="<?php echo $box['about_us_why_choose_icon'] ?>"></i>
                     </div>
                     <span class="card_number"><?php echo $i; ?></span>
                     <div class="choose_card_content">
                        <h5 class="choose_card_title"><?php echo $box['about_us_why_choose_title'] ?></h5>
                        <p>
                           <?php echo $box['about_us_why_choose_description'] ?>
                        </p>
                     </div>
                  </div>
               </div>
               <?php 
               $i++;
               endforeach; ?>
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
<?php //get_template_part( 'template-parts/newsfeeds-homepage');
get_footer('innerpage'); ?>