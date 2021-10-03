<?php
get_header('innerpage'); 
get_template_part( 'template-parts/title-section');
?>

<div class="accordion_area pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="accordion_wrapper mr-35 mb-40">
                            <div class="accordion" id="accordionExample">
                               <?php
                                if ( have_posts() ) :
                                while ( have_posts() ) : the_post();
                                global $post;
                                ?>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button faq_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php the_title(); ?></button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <?php the_content(); ?>
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
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

<?php
get_template_part( 'template-parts/get-in-touch');
get_footer('innerpage');
?>