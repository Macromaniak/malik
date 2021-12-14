<?php
get_header('innerpage'); 
get_template_part( 'template-parts/title-section');
?>

<!--Recent causes area start-->
            <section class="causes_area gray-bg pt-120 pb-85">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12 text-center">
                            <div class="cause_button_wrapper mb-25">
                                <nav>
                                    <?php
                                    $cause_cats = get_terms(array(
                                     'taxonomy' => 'causescategories',
                                     'hide_empty' => false,
                                   ));
                                //   var_dump($cause_cats);
                                    ?>
                                    <div class="nav tab_buttons" id="nav-tab" role="tablist">

                                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All Categories</button>
                                      <?php foreach($cause_cats as $cat): ?>
                                      <button class="nav-link" id="nav-<?php echo $cat->name; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $cat->name; ?>" type="button" role="tab" aria-controls="<?php echo $cat->term_id; ?>" aria-selected="false"><?php echo $cat->name; ?></button>
                                      <?php endforeach; ?>
                                      
                                    </div>
                                    
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                            <div class="row">
                                <?php
                                if ( have_posts() ) :
                                while ( have_posts() ) : the_post();
                                global $post;
                                // var_dump($post);


                                  $goal = get_field('cause_goal');
                                //   var_dump($goal);
                                  $cause_raised = get_field('cause_raised');
                                  $goal_to_go = get_field('goal_to_go');
                                  $percentage = ($cause_raised / $goal) * 100;

                                  $cats = get_the_terms($post->ID,'causescategories');
                                  $cats = $cats[0]->name;
                                  $cause_expiry = strtotime(get_field('cause_expiry'));
                                  $now = strtotime(date('d/m/Y'));

                                  if($goal_to_go >0 )
                                  {
                                  
                                ?>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_cause mb-30">
                                        <div class="single_cause_img_wrapper">
                                            <div class="single_cause_img w_img img_effect_white">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></a>
                                            </div>
                                            <div class="progress cause_progress">
                                                <div class="progress-bar" role="progressbar" data-width="<?php echo $percentage ?>%" aria-valuenow="<?php echo $percentage ?>" aria-valuemin="0" aria-valuemax="100"><span><?php echo $percentage; ?>%</span></div>
                                            </div>
                                        </div>

                                        <div class="single_cause_content">
                                            <div class="single_cause">
                                                <span class="sub_title"><?php echo $cats; ?></span>
                                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <div class="single_cause_meta">
                                                <div class="single_meta d-inline-block">
                                                    <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                    <span class="meta_price clr_theme1"><i class="fa fa-inr"></i><?php echo $goal; ?></span>
                                                </div>
                                                <div class="single_meta d-inline-block">
                                                    <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                    <span class="meta_price clr_theme2"><?php echo '<i class="fa fa-inr"></i>'.$cause_raised; ?></span>
                                                </div>
                                                <div class="single_meta d-inline-block">
                                                    <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                    <span class="meta_price clr_theme3"><?php echo '<i class="fa fa-inr"></i>'.$goal_to_go; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                endwhile;
                                else :
                                    _e( 'Sorry, no posts were found.', 'textdomain' );
                                endif;
                                ?>
                            </div>

                        </div>
                        <?php
                        //  $cause_cats = get_terms(array(
                        //              'taxonomy' => 'causescategories',
                        //              'hide_empty' => false,
                        //           ));
                        foreach($cause_cats as $cat):
                        ?>
                        <div class="tab-pane fade" id="<?php echo $cat->name ?>" role="tabpanel" aria-labelledby="nav-<?php echo $cat->name ?>">

                            <div class="row">
                                <?php
                                // if ( have_posts() ) :
                                // while ( have_posts() ) : the_post();
                                // global $post;


                                  
                                  
                                  
                                  
                                  $args = array(
                                    'post_type' => 'causes',
                                    'posts_per_page' => -1 ,
                                    'order' => 'DESC',
                                    'orderby' => 'ID'
                                    );
            
                                 $args['tax_query'] = array(
                                      array(
                                          'taxonomy' => 'causescategories',
                                          'terms' => $cat->term_id,
                                          'field' => 'term_id',
                                      )
                                    );
                                    
                                $cause_list = new WP_Query( $args ); 
                                
                                if( $cause_list->have_posts() ): 
                                while ( $cause_list->have_posts() ) : $cause_list->the_post();
                                
                                  $goal = get_field('cause_goal');
                                  $cause_raised = get_field('cause_raised');
                                  $goal_to_go = get_field('goal_to_go');
                                  $percentage = ($cause_raised / $goal) * 100;

                                  $cats = get_the_terms($post->ID,'causescategories');
                                  $cats = $cats[0]->name;
                                  $cause_expiry = strtotime(get_field('cause_expiry'));
                                  $now = strtotime(date('d/m/Y'));

                                  if($goal_to_go >0)
                                  {
                                      
                                     
                                  
                                ?>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_cause mb-30">
                                        <div class="single_cause_img_wrapper">
                                            <div class="single_cause_img w_img img_effect_white">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></a>
                                            </div>
                                            <div class="progress cause_progress">
                                                <div class="progress-bar" role="progressbar" data-width="<?php echo $percentage ?>%" aria-valuenow="<?php echo $percentage ?>" aria-valuemin="0" aria-valuemax="100"><span><?php echo $percentage; ?>%</span></div>
                                            </div>
                                        </div>

                                        <div class="single_cause_content">
                                            <div class="single_cause">
                                                <span class="sub_title"><?php echo $cats; ?></span>
                                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <div class="single_cause_meta">
                                                <div class="single_meta d-inline-block">
                                                    <span class="meta_text clr_theme1"><i class="fal fa-globe"></i> Goal</span>
                                                    <span class="meta_price clr_theme1"><i class="fa fa-inr"></i><?php echo $goal; ?></span>
                                                </div>
                                                <div class="single_meta d-inline-block">
                                                    <span class="meta_text clr_theme2"><i class="fal fa-users"></i> Raised</span>
                                                    <span class="meta_price clr_theme2"><?php echo '<i class="fa fa-inr"></i>'.$cause_raised; ?></span>
                                                </div>
                                                <div class="single_meta d-inline-block">
                                                    <span class="meta_text clr_theme3"><i class="fal fa-reply"></i> To go</span>
                                                    <span class="meta_price clr_theme3"><?php echo '<i class="fa fa-inr"></i>'.$goal_to_go; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                endwhile;
                                else :
                                    _e( 'Sorry, no posts were found.', 'textdomain' );
                                endif;
                                
                                ?>
                            </div>

                        </div>
                        <?php endforeach; ?>

                    </div>
                    <!--<div class="row">-->
                    <!--    <div class="cause_button text-center mt-10 mb-30">-->
                    <!--        <a href="cause.html" class="cause_btn g_btn to_right1 rad-30">Load More <i class="far fa-plus"></i> <span></span></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </section>
            <!--Recent causes area end-->

<?php
get_footer('innerpage');
?>