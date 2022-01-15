<?php /* Template Name: Donation */ 
   get_header('innerpage'); 
   get_template_part( 'template-parts/title-section');?>
  <!--single donation area start -->
        <div class="single_donation_area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-5">
                        <div class="single_donation_img_wrapper pr-30">
                            <?php $images = get_field('general_cause_images'); 
                            foreach($images as $image){
                            ?>
                            <div class="single_donation_img mb-40">
                                <img src="<?php echo $image['cause_image']['url']; ?>" alt="img">
                            </div>
                            <?php } ?>
                           
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-7">
                        <div class="single_donation_content donation_border">
                            <div class="section_title">
                                <a href="donation.html#" class="sub_title sub_title_2"><?php echo get_field('general_cause_cat'); ?></a>
                            </div>
                            <h4 class="donation_title"><?php echo get_field('general_cause_title'); ?></h4>
                            
                            <?php echo get_field('general_cause_details'); ?>
                           
                        </div>
                        
                         <div class="single_donation_input single_border mb-50 pb-30">
                                       
                                        <h5 class="single_title mb-0">Donate</h5>
                                        <br>
                                        <?php
                                        // $preset_amounts = get_field('preset_amounts', 'causes_settings');
                                        ?>
                                       
                                        <div class ="crypt-pay">
                                            <select id="select-coin">
                                            <?php //echo do_shortcode('[mcc_donations alignment="" currencies="BTC" primary_currency="BTC" show_currencies_as_icons="" show_currencies_as_select="1" show_currency_as_text="1" show_address="" qr_code_enabled="1" qr_code_max_width="180"]');  
                                            echo //do_shortcode('[mcc_donations alignment="" currencies="BTC" primary_currency="random" show_currencies_as_icons="1" show_currencies_as_select="1" show_currency_as_text="1" show_address="1" qr_code_enabled="1" qr_code_max_width="180"]');
                                            $paylinks = get_field('donation_options', 'donation_options');
                                            $count = 1;
                                            $first_link = '';
                                            foreach($paylinks as $pl):
                                                if($count == 1)
                                                $first_link = $pl['pay_link'];
                                            ?>
                                            
                                                <option value = '<?php echo $pl['pay_link']; ?>'><?php echo $pl['coin']; ?></option>
                                            
                                            <?php
                                            $count++;
                                            endforeach; ?>
                                            </select>
                                            <a class="g_btn hbtn_1 to_right1 rad-30" id='pay-link' target="_blank" href="<?php echo $first_link; ?>">Donate<span></span></a>
                                        </div>
                            </div>
                            <div class="single_donation_info single_border mb-50 pb-45">
                                        <h5 class="single_title">Submit the transaction details</h5>
                                           
                                        <div class="submit_info_wrapper">
                                            <div class="donation_submit_wrapper">
                                                <form action="" method="POST">
                                                <div class="donation_submit_box w_208">
                                                    <!--<button type="submit">Donate</button>-->
                                                    <!--<input type="text" placeholder="Amount" name="amount" required>-->
                                                    <input type="hidden" name="cause_id" value="<?php echo $post->ID; ?>">
                                                    <input type="hidden" name="cause_title" value="<?php echo get_the_title($post); ?>">
                                                    <input type="text" placeholder='Transaction ID' name="trans_id" required>
                                                    <input type='submit' name=submit-transac-id value='Submit'>
                                                </div>
                                                </form>
                                            </div>
                                            <?php 
                                            if(isset($_POST['submit-transac-id'])){
                                            $cause_id = 'General cause';
                                            $cause_name = 'General cause';
                                            $trans_id = $_POST['trans_id'];
                                            $embed = '<h2><strong>Cause title : </strong>'.$cause_name.'</h2><br><h2><strong>Cause ID : </strong>'.$cause_id.'</h2>';
                                            
                                            if(!empty($trans_id))
                                            {
                                                $post_id = wp_insert_post(array (
                                			    'post_type' => 'donations',
                                			    'post_title' => $trans_id,
                                			    'post_content' => $embed,
                                			    'post_status' => 'publish',
                                			    'comment_status' => 'closed',
                                			    'ping_status' => 'closed',      
                                				));
                                				
                                				if(!empty($post_id))
                                				{
                                				    echo "<h3 class='success-msg-donation'>Thank you for the donation</h3>";
                                				}
                                            }
                                            
                                            }?>
                                            
                                            
                                        </div>
                                    </div>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!--single donation area end -->

<?php get_footer('innerpage');?>