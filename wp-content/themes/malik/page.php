<?php 
   get_header('innerpage'); 
   get_template_part( 'template-parts/title-section');
?>
<div class="single_donation_area pt-120 pb-120">
    <div class="container">
        <div class="row">
          	<div class="col-xxl-12 col-xl-12 col-lg-12">
          		<?php the_content(); ?>
          	</div>
        </div>
    </div>
</div>
<?php get_footer('innerpage');?>