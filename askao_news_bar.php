<?php
	/*
    Plugin Name: Askao News Bar
    Plugin URI: http://www.MarvelServ.com
    Description: displaying News in a bar
    Author: Askao Ahmed Saad
    Version: 1.0
    Author URI: https://www.facebook.com/askao
    */
	function newsbar_getnews() {
		// english newsbar
		include('shownewsbar_en.php');
		// arabic newsbar
        	//include('shownewsbar_ar.php');
	}
	// include the bar in site header
	add_action('wp_head', 'newsbar_getnews');
?>

