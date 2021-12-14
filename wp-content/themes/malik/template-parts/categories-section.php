    <?php
        $cause_cats = get_terms(array(
            'taxonomy' => 'causescategories',
            'hide_empty' => false,
            ));
    ?>
            <div class="nfeed_area pt-110 pb-115">
                <div class="container">
                    
                    
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section_title mb-50 text-center">
                                <span class="sub_title sub_title_2">Causes</span>
                                <h3 class="title title_2">Donate by category</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div id="cat-slider" class="owl-carousel">
                            <?php foreach($cause_cats as $cat): 
                            $cat_img = get_field('cat_image', $cat);
                            ?>
                            <div class="post-slide">
                              <div class="post-img">
                                <img src="<?php echo $cat_img['sizes']['cat-thumb']; ?>" alt="">
                                <a href="<?php echo get_category_link($cat); ?>" class="over-layer"><i class="fa fa-link"></i></a>
                              </div>
                              <div class="post-content">
                                <h3 class="post-title">
                                  <a href="<?php echo get_category_link($cat); ?>"><?php echo $cat->name; ?></a>
                                </h3>
                              </div>
                            </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                     </div>


                    
                    
                    
                </div>
            </div>
            <!-- newsfeed area end -->
            
