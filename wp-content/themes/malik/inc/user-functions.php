<?php


class UserFunctions
{
	public function __construct()
	{
		add_action('admin_init', array($this,'add_user_role'));
		// add_action('admin_init', array($this,'filter_posts_by_author'));
		add_filter('manage_edit-causes_sortable_columns', array($this,'filter_causes_by_user'));
	}

	public function add_user_role()
	{
		add_role(
		    'trust',
		    'Trust',
		    array(
		        'read'         => true,  // true allows this capability
		        'edit_posts'   => true,
		        'delete_posts' => true, // Use false to explicitly deny
		        'publish_posts' => true,
		        'upload_files' => true,
		        'edit_published_posts' => true,
		    )
		);

	}

    public function filter_causes_by_user($columns)
    {
    	if( is_user_logged_in() ) {
            if( !current_user_can( 'administrator' ) ) {
                $current_user = wp_get_current_user();
                $columns['author'] = $current_user->ID;
            }
        }
    }
    
}
$users = new UserFunctions;
?>