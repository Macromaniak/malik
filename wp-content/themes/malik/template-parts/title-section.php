<!--breadcrumb area start-->
    <section class="breadcrumb_area breadcrumb_overlay" data-background="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/breadcrum_bg_2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                                <?php if(is_archive()){ ?>
                                <li><span class="active"><?php echo get_the_archive_title(); ?></span></li>
                                <?php } else{ ?>
                                    <li><span class="active"><?php the_title(); ?></span></li>
                                <?php } ?>
                            </ul>
                            <div class="breadcrumb_title">
                                <?php if(is_archive()){ ?>
                                    <h2><?php echo get_the_archive_title(); ?></h2>
                                <?php } else{ ?>
                                    <h2><?php the_title(); ?></h2>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb area end-->