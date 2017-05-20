<?php

/**
* Plugin Name:	Tuts+ Post Notice
* Plugin URI:	http://wtechlife.com
* Description:	Display a short notice above the post content,
* Version:		1.0.0
* Author:		Denis Rohlinsky
* Author URI: 	http://site.com
* License:		GPL-2.0+
*/


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


// Requirements
require_once( plugin_dir_path( __FILE__ ) . 'class-tutsplus-post-notice-display.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-tutsplus-post-notice-editor.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-tutsplus-post-notice.php' );


// Functions
function tutsplus_post_notice_start() {
	if ( is_admin() ) {
		$post_editor = new TutsPlus_Post_Notice_Editor();
		$post_notice = new TutsPlus_Post_Notice( $post_editor );
	} else {
		$post_notice = new TutsPlus_Post_Notice_Display();
	}
	$post_notice->initialize();

}
tutsplus_post_notice_start();