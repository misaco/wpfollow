<?php 

// All we need for wpfollow enqueue to this file 



define( 'wpfollow__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'wpfollow__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );




/**
 * Include CSS files.
 */
function wpfollow_css() {
    wp_register_style( 'wpfollowcss',  plugin_dir_url( __FILE__ ) . '/assets/css/main.css' );
    wp_enqueue_style( 'wpfollowcss' );
}
add_action( 'admin_init', 'wpfollow_css' );



require_once('admin/admin.menu.php');


?>