<?php
/*
Plugin Name: Query Plugin Code
Plugin URI:
Description: Adds code to get the playerID
Author: Evan Grob
Version: 1.01
Author URI:
*/

function playerID_query_vars ($vars) {
  $vars[] = "playerID";
  
  //var_dump($vars);
  return $vars;
}

add_filter('query_vars', 'playerID_query_vars');


function set_page_id(){
	//get the data from ajax() call
	$name = $_POST['formData'];
	die();
	//return $name;
}
add_action( 'wp_ajax_setPageID', 'set_page_id'  );




?>