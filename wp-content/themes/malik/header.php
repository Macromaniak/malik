<?php
/**
 * Header file for the Online Test WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Malik
 * @since Malik 1.0
 */

?><!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!-- Header One Start-->
        <header class="header-area header-transparent">
            <div id="sticky-header" class="header_menu_area res_padd">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-6">
                            <div class="logo">
                                <?php  if ( function_exists( 'the_custom_logo' ) ) {
                                        $logo = get_theme_mod( 'custom_logo' );
                                        $image = wp_get_attachment_image_src( $logo , 'full' );
                                        $image_url = $image[0];
                                        $image_width = $image[1];
                                        $image_height = $image[2];
                                        // var_dump($image_url);
                                        ?>
                                        <a href="<?php site_url() ?>" class="custom-logo-link">
                                            <img src="<?php echo $image_url; ?>">
                                        </a>
                                        <?php
                                } 
                                else{
                                    ?>
                                <div class="logo">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                                    </a>
                                </div>
            
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-8 d-none d-lg-block">
                            <div class="main-menu theme-1 text-center">
                                <nav id="mobile-menu">
                                   <?php wp_nav_menu( array(
                                    'menu'           => 'primary_menu', ) );
                                    ?> 
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-2 col-md-6 col-6">
                            <div class="header-right d-flex align-items-center justify-content-end">
                                <div class="header-icon d-inline-block">
                                    <a class="nav-search search-trigger" href="javascript:void(0)"><i class="fal fa-search"></i></a>
                                </div>
                                <div class="header-sing d-inline-block ml-20 d-none d-xl-block">
                                    <a class="g_btn hbtn_1 to_right1 rad-30" href="<?php echo get_site_url(); ?>/donation/">Make Donation<span></span></a>
                                </div>
                                <div class="hamburger-menu menu-bar info-bar d-inline-block ml-20">
                                    <button class="hamburger-btn open-mobile-menu"><i class="fal fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header One End-->
        <?php get_template_part( 'template-parts/sidebar-menu');?>
        <!-- Main Area Start-->
        <main>
