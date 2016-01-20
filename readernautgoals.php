<?php
/*
Plugin Name: ReadernautGoals
Plugin URI: http://github.com/nitinthewiz/readernautgoals
Description: Show your Readernaut goals on your WordPress site!
Author: Nitin Khanna
Version: 0.1
Author URI: http://nitinkhanna.com/
*/

function readernautgoals( $atts ){
	$output = '';
 
	$readernaut_atts = shortcode_atts( array(
		'username' => 'My username',
		'api_key' => 'api_key',
		'goalid' => 'goalid',
		'return' => 'bookgoal',
	), $atts );

	$readernauturl = "http://readernaut.com/api/v1/goals/goal/".$readernaut_atts['goalid'].
		"/?username=".$readernaut_atts['username'].
		"&api_key=".$readernaut_atts['api_key'].
		"&format=json";
	$books_json = file_get_contents($readernauturl);
	$book_object = json_decode($books_json);

	switch ($readernaut_atts['return']) {
		case 'bookgoal':
			return $book_object->{'current_amount'}.'/'.$book_object->{'total'};
			break;
		case 'bookname':
			return $book_object->{'book_edition'}->{'title'};
			break;
		default:
			# code...
			break;
	}

}
add_shortcode( 'readernaut', 'readernautgoals' );

?>
