<?php /* Template Name: Contact */ 
   get_header('innerpage'); 
?>
<!--breadcrumb area start-->
<section class="breadcrumb_area breadcrumb_overlay" data-background="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/breadcrum_bg_2.jpg">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="breadcrumb_section">
               <ul class="breadcrumb-list volunteer_breadcrumb">
                  <li class="bhas_border"><a href="index.html">Home</a></li>
                  <li><span class="active">Contact</span></li>
               </ul>
               <div class="breadcrumb_title">
                  <h2>Get In Touch</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--breadcrumb area end-->
<?php 
   get_template_part( 'template-parts/get-in-touch');
?>
<!--google map area start -->
<div class="contact_map_area">
   <div class="container-fluid g-0">
      <div class="contact_map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d193595.91489303828!2d-74.1197634!3d40.6974034!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!2z4Kao4Ka_4KaJIOCmh-Cmr-CmvOCmsOCnjeCmlSwg4Kau4Ka-4Kaw4KeN4KaV4Ka_4KaoIOCmr-CngeCmleCnjeCmpOCmsOCmvuCmt-CnjeCmn-CnjeCmsA!5e0!3m2!1sbn!2sbd!4v1618211532935!5m2!1sbn!2sbd" allowfullscreen="" loading="lazy"></iframe>
      </div>
   </div>
</div>
<!--google map area end -->
<?php get_footer('innerpage');?>