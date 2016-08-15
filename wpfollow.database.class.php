<?php 

// All functions and query to work with database comes here...

class wpfollow_database {

// call fucntions when activated plugin for trust to database is it
	function __construct(){
		register_activation_hook( dirname(__FILE__).'/wpfollow.php', 'wpfollow_activated' );
	}

// made database if is not exist ____ Store social list in database 
	function wpfollow_activated() {

		global $jal_db_version;
		$jal_db_version = '1.0';
		global $wpdb;
		global $jal_db_version;

		$table_name = $wpdb->prefix . 'wpfollow';

		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
		id int(11) NOT NULL AUTO_INCREMENT,
		name varchar(255) NOT NULL,
		url varchar(2048) NOT NULL,
		image varchar(4096) NOT NULL,
		state int(11) NOT NULL,
		position int(11) NOT NULL,
		UNIQUE KEY id (id)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

		add_option( 'jal_db_version', $jal_db_version );
	}



// Add new social
	function add_new_social($name,$link,$image) {

		global $wpdb;

		if (isset($name)) {
			$name = $name;
		}
		if (isset($image)) {
			$image = $image;			
		}
		if (isset($link)) {
			$link = $link;
		}

		$table_name = $wpdb->prefix. 'wpfollow';

		$wpdb->insert(
			$table_name,
			array(
				'name' => $name,
				'url' => $link,
				'image' => $image,
				'state' => 0,
				'position' => 0,
				)
			);
	}


// Get data social form database 
	function get_all_social(){
		global $wpdb;

		$table_name = $wpdb->prefix. 'wpfollow';
		
		$data = $wpdb->get_results("SELECT * FROM $table_name  ");

		return $data;
	}

// Get social with state
	function get_social_with_state($state){
		global $wpdb;

		$table_name = $wpdb->prefix.'wpfollow';

		$data = $wpdb->get_results("SELECT * FROM $table_name WHERE `state` = '$state' ORDER BY `position` ASC");
		return $data;
	}

// Change State of social 
	function change_state($social_id , $state){
		global $wpdb;

		$table_name = $wpdb->prefix.'wpfollow';

		$data = $wpdb->update( $table_name , array('state' => $state), array('id' => $social_id ) );
		return $data;
	}


// update data of a social , $data is array 
	function change_data($data){
		global $wpdb;

		if (!is_array($data)) {
			echo $data. ' must be array';
		}
		$table_name = $wpdb->prefix.'wpfollow';

		$data = $wpdb->update( $table_name , array('position' => $data[1] , 'state' => $data[2]), array('id' => $data[0] ) );
		return $data;
	}


}

?>