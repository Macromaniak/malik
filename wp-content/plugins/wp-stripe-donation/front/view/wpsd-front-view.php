<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$wpsdGeneralSettings = stripslashes_deep( unserialize( get_option('wpsd_general_settings') ) );

if ( is_array( $wpsdGeneralSettings ) ) {

    $wpsdDonationEmail = $wpsdGeneralSettings['wpsd_donation_email'];
    $wpsdPaymentTitle = $wpsdGeneralSettings['wpsd_payment_title'];
    $wpsdDonationOptions = $wpsdGeneralSettings['wpsd_donation_options'];
    $wpsdDonateButtonText = $wpsdGeneralSettings['wpsd_donate_button_text'];
    $wpsdDonateCurrency = $wpsdGeneralSettings['wpsd_donate_currency'];

} else {

    $wpsdDonationEmail = "";
    $wpsdPaymentTitle = "Donate Us";
    $wpsdDonationOptions = "";
    $wpsdDonateButtonText = "Donate Now";
    $wpsdDonateCurrency = "USD";

}

$wpsd_donation_values   = isset( $wpsdGeneralSettings['wpsd_donation_values'] ) ? explode( ',', $wpsdGeneralSettings['wpsd_donation_values'] ) : array();
$wpsd_form_description  = isset( $wpsdGeneralSettings['wpsd_form_description'] ) ? $wpsdGeneralSettings['wpsd_form_description'] : '';

// ========================
// Form Settings
// ========================
foreach ( $wpsdFormSettings as $form_name => $form_value ) {
    
    if ( isset( $wpsdFormSettings[$form_name] ) ) {

        ${"" . $form_name} = $form_value;
    
    }
}

foreach ( $wpsdFormSyleSettings as $fs_name => $fs_value ) {
    
    if ( isset( $wpsdFormSyleSettings[$fs_name] ) ) {

        ${"" . $fs_name}  = $fs_value;
    
    }
}

$wpsdDonOpVals = ( $wpsdDonationOptions != '' ) ? explode(',', $wpsdDonationOptions) : array();
// Load Styling
include WPSD_PATH . 'assets/css/wpsd-front.php';

if ( 'tdb' === $wpsd_form_header_type ) {
    $form_header_type = ['title', 'description', 'banner'];
} else if ( 'btd' === $wpsd_form_header_type ) {
    $form_header_type = ['banner', 'title', 'description'];
} else {
    $form_header_type = ['title', 'banner', 'description'];
}
?>
<div class="wpsd-master-wrapper wpsd-template-<?php printf('%d', $wpsd_select_template); ?>" id="wpsd-wrap-all">

    <div id="wpsd-pageloader">
        <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="<?php _e('Processing', WPSD_TXT_DOMAIN); ?>..." />
    </div>
    
    <?php
    $fht = 0;
    foreach ( $form_header_type as $type ) {
        
        if ( 'title' ===  $type ) {
            ?>
            <h3 class="wpsd-form-title"><?php esc_html_e( $wpsdPaymentTitle ); ?></h3>
            <!-- Title Border -->
            <div class="wpsd-form-title-border"></div><br>
            <?php
        }

        if ( 'description' === $type ) {
            ?>
            <p class="wpsd-form-description"><?php esc_html_e( $wpsd_form_description ); ?></p>
            <?php
        }

        if ( 'banner' === $type ) {
            if ( $wpsd_display_banner ) {
                if ( intval( $wpsd_form_banner ) > 0 ) {
                    echo wp_get_attachment_image( $wpsd_form_banner, 'full', false, array('class' => 'wpsd-form-banner') );
                }
            }
        }

        $fht++;
    }
    ?>

    <!-- Main Form -->
    <div class="wpsd-wrapper-content">

        <form action="" method="POST" id="wpsd-donation-form-id" autocomplete="off">
            
            <?php
            // Donation/Payment For
            if ( ! $wpsd_hide_donation_for ) {
                
                if ( ! $wpsd_hide_label ) {
                    ?>
                    <label for="wpsd_donation_for" class="wpsd-donation-form-label"><?php esc_html_e( $wpsd_donation_for_label ); ?>:</label>
                    <?php
                }
                ?>
                <select name="wpsd_donation_for" id="wpsd_donation_for" class="wpsd-text-field">
                    <?php
                    if ( count( $wpsdDonOpVals ) > 0 ) {
                        foreach ( $wpsdDonOpVals as $wpsdDonOpVal ) {
                        ?>
                        <option value="<?php esc_attr_e( trim( $wpsdDonOpVal ) ); ?>"><?php esc_html_e( trim( $wpsdDonOpVal ) ); ?></option>
                        <?php 
                        }
                    } 
                    ?>
                </select>
            <?php
            } else {
                ?>
                <input type="hidden" name="wpsd_donation_for" id="wpsd_donation_for" value="<?php esc_attr_e( $wpsdDonationOptions ); ?>" >
                <?php
            }

            // Full Name
            if ( ! $wpsd_hide_label ) {
                ?>
                <label for="wpsd_donator_name" class="wpsd-donation-form-label"><?php esc_html_e( $wpsd_donator_name_label ); ?>:</label>
                <?php
            }
            ?>
            <input type="text" name="wpsd_donator_name" id="wpsd_donator_name" class="wpsd-text-field" placeholder="<?php esc_attr_e( $wpsd_donator_name_label ); ?>">
            
            <!-- Email -->
            <?php
            if ( ! $wpsd_hide_label ) {
                ?>
                <label for="wpsd_donator_email" class="wpsd-donation-form-label"><?php esc_html_e( $wpsd_donator_email_label ); ?>:</label>
                <?php
            }
            ?>
            <input type="email" name="wpsd_donator_email" id="wpsd_donator_email" class="wpsd-text-field" placeholder="<?php esc_attr_e( $wpsd_donator_email_label ); ?>">
            
            <!-- Phone -->
            <?php if ( $wpsd_display_phone ) { ?>
                <label for="wpsd_donator_phone" class="wpsd-donation-form-label"><?php echo esc_html( $wpsd_donator_phone_label ); ?>:</label>
                <input type="text" name="wpsd_donator_phone" id="wpsd_donator_phone" class="wpsd-text-field" placeholder="<?php esc_attr_e( $wpsd_donator_phone_label ); ?>">
            <?php } ?>
            
            <!-- Amount -->
            <?php
            if ( ! $wpsd_hide_label ) {
                ?>
                <label for="wpsd_donate_amount" class="wpsd-donation-form-label"><?php esc_html_e( $wpsd_donate_amount_label ); ?>:</label>
                <?php
            }
            ?>

            <ul id="wpsd_donate_amount">
                <?php
                if ( count( $wpsd_donation_values ) > 0 ) {
                    foreach( $wpsd_donation_values as $wpsdDonationVal ) {
                        if( '' !== $wpsdDonationVal ) {
                    ?>
                    <li>
                        <div class="form-group">
                            <input type="radio" id="amount_<?php esc_attr_e( trim( $wpsdDonationVal ) ); ?>" name="wpsd_donate_amount"
                                value="<?php esc_attr_e( trim( $wpsdDonationVal ) ); ?>">
                            <label for="amount_<?php esc_attr_e( trim( $wpsdDonationVal ) ); ?>"><?php esc_html_e( number_format( $wpsdDonationVal ) ); ?></label>
                        </div>
                    </li>
                    <?php
                        } 
                    }
                }

                if ( '' !== $wpsd_other_amount_text ) {
                ?>
                <li>
                    <div class="form-group"><?php esc_html_e( $wpsd_other_amount_text ); ?></div>
                </li>
                <?php } ?>
                <li>
                    <div class="form-group">
                        <input id="wpsd_donate_other_amount" type="text" class="wpsd_donate_other_amount"
                            name="wpsd_donate_other_amount" placeholder="<?php _e('Amount', WPSD_TXT_DOMAIN); ?>"> <?php esc_html_e( $wpsdDonateCurrency ); ?>
                    </div>
                </li>
            </ul>

            <!-- Card --->
            <?php
            if ( ! $wpsd_hide_label ) {
                ?>
                <label class="wpsd-donation-form-label"><?php _e('Card Details', WPSD_TXT_DOMAIN); ?>:</label>
                <?php
            }
            ?>
            <div id="card-element"></div>
            <div id="card-errors" class="wpsd-alert" role="alert"></div>
            <!---card end-->
            <br>
            <input type="submit" name="wpsd-donate-button" class="wpsd-donate-button" value="<?php esc_attr_e( $wpsdDonateButtonText ); ?>">
        </form>

        <!-- p class="wpsd-total-donation-today">
            Total&nbsp;<span id="wpsd-total-donation-number">0
                <?php //echo esc_html($wpsdDonateCurrency); 
                ?></span>&nbsp;Donation Today
        </p -->
    </div>
</div>