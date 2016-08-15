<?php 

/*
*	Main class for wpfollow
*
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if (! class_exists('wpfollow') ):

	class wpfollow {


		public function __construct()
		{
			add_action('admin_menu' , array($this, 'wpfollow_admin_menu') );
			add_action( 'admin_init', array($this,'wpfollow_enqueue') );
		}


		// include all we need css and js files
		public function wpfollow_enqueue()
		{

		// include css files
			wp_register_style( 'wpfollowcss', wpfollow__PLUGIN_URL . '/assets/css/main.css' );
			wp_enqueue_style( 'wpfollowcss');

		// include js files
			wp_enqueue_script('jquery');
			wp_enqueue_script('jquery-ui-sortable');
			wp_enqueue_script( 'mainjs', plugin_dir_url(__FILE__) . '/assets/js/main.js');
			
			wp_enqueue_media();

		}

		// Create menu in admin panel 
		public function wpfollow_admin_menu()
		{
			add_menu_page(
				'wpfollow',
				'wpfollow',
				'manage_options',
				'wpfollow_setting',
				'wpfollow_setting'
				);
		}



	}

	endif;
	return new wpfollow();

	?>