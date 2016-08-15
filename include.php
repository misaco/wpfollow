<?php 

// All we need for wpfollow enqueue to this file 

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'wpfollow__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'wpfollow__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once('wpfollow.class.php');
require_once('wpfollow.database.class.php');
require_once('admin/admin.menu.php');


?>

