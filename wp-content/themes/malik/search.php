<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header('innerpage'); ?>
    <section class="breadcrumb_area breadcrumb_overlay" data-background="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/breadcrum_bg_2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <div class="breadcrumb_title">
                                   <h2 class="page-title">
		                    <?php
			                printf(
				            /* translators: %s: Search term. */
				            esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				            '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			                );?>
		                </h2> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php if ( have_posts() ) { ?>
        <div class="single_donation_area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
		            
                        <div class="search-result-count default-max-width">

	                    </div><!-- .search-result-count -->
                    	<?php
                    	// Start the Loop.
                    	while ( have_posts() ) {
                    		the_post(); ?>
                    
                    	
                    		<ul>
                    		    <li><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></li>
                    		</ul>
                    	<?php } // End the loop.
                    } else { ?>
                    	<p>Sorry, no posts matched your criteria.</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer('innerpage');
