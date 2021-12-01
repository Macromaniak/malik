<?php
Class MalikACFHandler {

	public function __construct() {

		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_sub_page( array(
							'page_title'  => 'Causes settings',
							'parent_slug' => 'edit.php?post_type=causes',
							'menu_title'  => 'Causes settings',
							'post_id'     => 'causes_settings',
						) );
		}
		// add_filter('acf/load_field/name=contact_page_form', array($this,'populate_acf_select_choices_cf7'));

		acf_add_options_sub_page( array(
				'page_title'  => 'Events Settings',
				'parent_slug' => 'edit.php?post_type=events',
				'menu_title'  => 'Events Settings',
				'post_id'     => 'event_options',
			) );


		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page(array(
                'page_title' => 'Theme General Settings',
                'menu_title' => 'Theme Settings',
                'menu_slug' => 'mp-theme-settings',
                'capability' => 'edit_posts',
                'post_id' => 'theme_options',
                'redirect' => false
            ));

		}
	

	}

	public function populate_acf_select_choices_cf7()
	{
		$args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
		$cf7Forms = get_posts( $args );
		// var_dump($cf7Forms);

		$field['choices'] = array();

		foreach($cf7Forms as $form)
		{
			// var_dump($form);
			$form_id = $form->ID;
			if($form_id)
			{
			$value = $form->post_title;
			$key = '[contact-form-7 id="'.$form_id.'" title="'.$value.'"]';
			$field['choices'][ $key ] = $value;
			}
		}
		// var_dump($field);
    	return $field;
	}


}
new MalikACFHandler();