<?php /* Template Name: About */ 
   get_header('innerpage'); ?>
<!--about area start-->
<section class="about_area pt-120">
   <div class="about_white_bg">
      <div class="container">
         <div class="row">
            <div class="col-xxl-6 col-xl-4 col-lg-4">
               <div class="donate_img_wrapper about_img_wrapper mr-10">
                 <?php  $about_us_about_image_1 = get_field('about_us_about_image_1')['url'];
                        $about_us_about_image_2 = get_field('about_us_about_image_2')['url'];
                 ?>
                  <div class="donate_img_inner about_img_inner p-rel">
                     <img class="about_block" src="<?php echo $about_us_about_image_1;  ?>" alt="img">
                     <img class="space_t30" src="<?php echo $about_us_about_image_2;  ?>" alt="img">
                     <div class="about_champ_card about_abs_single">
                        <i class="flaticon-creativity"></i>
                        <h3 class="abs_numb">40 <span class="plus">+</span></h3>
                        <span>Years Experience</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-8 col-lg-8">
               <div class="about_wrapper pl-30">
                  <div class="section_title">
                     <span class="sub_title sub_title_2">About Us</span>
                     <h3 class="title title_2 mb-20">
                        <?php echo get_field('about_us_about_title'); ?>
                     </h3>
                  </div>
                  <p class="mb-40">
                     <?php echo get_field('about_us_about_description'); ?>
                  </p>
                  <div class="about_summary">
                     <p>Helped Fund <span class="theme-1">24,537</span> Projects in <span class="theme-4">24 Countries</span>, <br>
                        Benefiting Over <span class="theme-2">8.2 Million</span> People.
                     </p>
                  </div>
                  <?php if(!empty($about_us_about_button_label = get_field('about_us_about_button_label'))): ?>
                     <a href="<?php echo get_field('about_us_about_button_link'); ?>" class="g_btn trans_btn rad-50 p-45"><?php echo $about_us_about_button_label ?> <span></span></a>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--about area end-->
<!--about feature area start -->
<div class="about_features_area soft-grey-2 pt-205 pb-390">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="section_title text-center mb-60">
               <span class="sub_title sub_title_2">Why Choose Us</span>
               <h3 class="title title_2"><?php echo get_field('about_us_why_choose_title'); ?></h3>
            </div>
         </div>
      </div>
      <div class="row">
       <?php  $about_us_why_choose_box_content = get_field('about_us_why_choose_box_content');
       $i = 1;
       foreach($about_us_why_choose_box_content as $why):
       ?>

         <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="choose_single_card theme-<?php echo $i+1; ?> p-rel bg-white mb-30">
               <div class="choose_abs theme-<?php echo $i+1; ?>">
                  <i class="<?php echo $why['about_us_why_choose_icon']; ?>"></i>
               </div>
               <span class="card_number"><?php echo $i; ?></span>
               <div class="choose_card_content">
                  <h5 class="choose_card_title"><?php echo $why['about_us_why_choose_title']; ?></h5>
                  <p>
                     <?php echo $why['about_us_why_choose_description']; ?>
                  </p>
               </div>
            </div>
         </div>

         <?php
         $i++;
         endforeach; ?>
      </div>
      <div class="row d-none">
         
         
         
      </div>
   </div>
</div>
<!--about feature area end-->
<!-- about videos area start -->
<div class="about_videos_area mtm-300">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="about_video_section text-center p-250 bg_cover" data-background="<?php echo get_field('about_us_why_choose_video_thumbnail')['url']; ?>">
               <a href="<?php echo get_field('about_us_why_choose_video') ?>" class="play_btn p-rel popup-video ab_4"><i class="fas fa-play"></i></a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--about videos area end-->
<!--about_faq area start -->
<div class="about_faq_area pt-110 pb-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-5 col-xl-5">
            <div class="accordion_wrapper mr-30">
               <div class="section_title mb-50">
                  <span class="sub_title sub_title_2">FAQ</span>
                  <h3 class="title title_2">
                     <?php echo get_field('about_us_faq_title'); ?>
                  </h3>
               </div>
               <div class="accordion" id="accordionExample">
               <?php  $about_us_faq_faqs = get_field('about_us_faq_faqs'); 
                  foreach($about_us_faq_faqs as $faq) :
               ?>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button faq_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <?php echo $faq->post_title ?>
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php echo $faq->post_content; ?>
                        </div>
                     </div>
                  </div>
                  
                  <?php endforeach; ?>
                  
               </div>
            </div>
         </div>
         <div class="col-xxl-7 col-xl-7">
            <div class="contact_section has_border mt-60">
               <?php echo do_shortcode('[contact-form-7 id="35" title="Get In Touch"]'); ?>   
            </div>
         </div>
      </div>
   </div>
</div>
<!-- about_faq_area end -->
<?php get_footer('innerpage');?>