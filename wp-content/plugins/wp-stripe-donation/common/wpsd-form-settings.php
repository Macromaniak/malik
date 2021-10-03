<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
* Trait: Slide Settings
*/
trait Wpsd_Form_Settings
{
    protected $fields, $settings, $options;
    
    protected function wpsd_set_form_content_settings( $post ) {

        $this->fields   = $this->wpsd_form_content_option_fileds();

        $this->options  = $this->wpsd_build_set_settings_options( $this->fields, $post );

       $this->settings = apply_filters( 'wpsd_temp_settings', $this->options, $post );

        return update_option( 'wpsd_temp_settings', serialize( $this->settings ) );

    }

    protected function wpsd_get_form_content_settings() {

        $this->fields   = $this->wpsd_form_content_option_fileds();
		$this->settings = stripslashes_deep( unserialize( get_option('wpsd_temp_settings') ) );
        
        return $this->wpsd_build_get_settings_options( $this->fields, $this->settings );
	}

    protected function wpsd_form_content_option_fileds() {

        return [
            [
                'name'      => 'wpsd_select_template',
                'type'      => 'number',
                'default'   => 0,
            ],
            [
                'name'      => 'wpsd_display_banner',
                'type'      => 'boolean',
                'default'   => false,
            ],
            [
                'name'      => 'wpsd_form_banner',
                'type'      => 'text',
                'default'   => '',
            ],
            [
                'name'      => 'wpsd_donation_for_label',
                'type'      => 'text',
                'default'   => 'Donation For',
            ],
            [
                'name'      => 'wpsd_donator_name_label',
                'type'      => 'text',
                'default'   => 'Full Name',
            ],
            [
                'name'      => 'wpsd_donator_email_label',
                'type'      => 'text',
                'default'   => 'Email',
            ],
            [
                'name'      => 'wpsd_donate_amount_label',
                'type'      => 'text',
                'default'   => 'Amount',
            ],
            [
                'name'      => 'wpsd_other_amount_text',
                'type'      => 'text',
                'default'   => '',
            ],
            [
                'name'      => 'wpsd_hide_label',
                'type'      => 'boolean',
                'default'   => false,
            ],
            [
                'name'      => 'wpsd_display_phone',
                'type'      => 'boolean',
                'default'   => false,
            ],
            [
                'name'      => 'wpsd_hide_donation_for',
                'type'      => 'boolean',
                'default'   => false,
            ],
            [
                'name'      => 'wpsd_form_button_width',
                'type'      => 'number',
                'default'   => 100,
            ],
            [
                'name'      => 'wpsd_form_button_width_type',
                'type'      => 'string',
                'default'   => '%',
            ],
            [
                'name'      => 'wpsd_form_width',
                'type'      => 'number',
                'default'   => 100,
            ],
            [
                'name'      => 'wpsd_form_width_type',
                'type'      => 'string',
                'default'   => '%',
            ],
            [
                'name'      => 'wpsd_form_header_type',
                'type'      => 'string',
                'default'   => 'tdb',
            ],
        ];
    }
}