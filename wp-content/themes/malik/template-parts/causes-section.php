<!-- causes area start-->
<section class="causes_area grey-bg pt-105 pb-385" data-background="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/causes/cause_map.png">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12 text-center">
            <div class="section_title mb-45">
               <span class="sub_title"><i class="fal fa-heart"></i> Causes</span>
               <h3 class="title">Latest Causes</h3>
            </div>
         </div>
      </div>
      <div class="swiper-container cause_container_active">
         <div class="swiper-wrapper">
            <?php
            $args = array(
              'numberposts' => -1,
              'post_type'   => 'causes',
              'order' => 'ASC',
              'orderby' => 'date',
              'status' => 'publish'
            );
            $latest_causes = get_posts( $args );
            // var_dump($latest_causes);
            // $count = 0;
            foreach ($latest_causes as $cause) {
            //   echo $count;
            //   $count++;
            ?>

            <div class="single_cause swiper-slide mb-30">
               <div class="single_cause_img img_effect_white p-rel">
                   
                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <?php $slider_images = get_field('cause_slider_images', $cause); 
                    $count = 0;
                      foreach($slider_images as $image):
                      ?>
                    <div class="carousel-item <?php if($count==0){ echo "active";} ?>">
                        <a href="<?php echo get_the_permalink($cause); ?>">
                            <img src="<?php echo $image['images']['sizes']['cause-thumb']; ?>" class="d-block w-100" alt="img">
                        </a>
                      <!--<img class="d-block w-100" src="<?php //echo $image['images']['url']; ?>" alt="First slide">-->
                    </div>
                    <?php 
                    $count++;
                    endforeach; ?>
                    
                  </div>
                 
                </div>  
                 
                  <!--<a href="<?php //echo get_the_permalink($cause); ?>"><img src="<?php //echo get_the_post_thumbnail_url($cause); ?>" alt="img"></a>-->
                  <?php
                  $goal = get_field('cause_goal', $cause);
                  $cause_raised = get_field('cause_raised', $cause);
                  $goal_to_go = get_field('goal_to_go', $cause);
                  $percentage = ($cause_raised / $goal) * 100;

                  $cats = get_the_terms($cause->ID, 'causescategories');
                  $cats = $cats[0]->name;
                  ?>
                  <div class="progress_wrapper pbar_1">
                     <div class="progress_circle" data-percentage="<?php echo intval($percentage);  ?>">
                        <span class="progress-left">
                        <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                        <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                           <div>
                              <?php echo $percentage;  ?>%
                           </div>
                        </div>
                     </div>
                     <span><?php echo $cats; ?></span>
                  </div>
               </div>
               <div class="single_cause_content single_cause_content_2">
                  <div class="single_cause">
                     <h3 class="title"><a href="<?php echo get_the_permalink($cause); ?>"><?php echo get_the_title($cause); ?></a></h3>
                  </div>
                  <div class="single_cause_meta">
                     <div class="single_meta d-inline-block">
                        <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                        <span class="meta_price clr_theme1"><?php echo '$'.$goal; ?></span>
                     </div>
                     <div class="single_meta d-inline-block">
                        <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                        <span class="meta_price clr_theme2"><?php echo '$'.$cause_raised; ?></span>
                     </div>
                     <div class="single_meta d-inline-block">
                        <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                        <span class="meta_price clr_theme3"><?php echo '$'.$goal_to_go; ?></span>
                     </div>
                  </div>
               </div>
            </div>
            
         <?php } ?>


         </div>
      </div>
   </div>
</section>
<!-- causes area end-->