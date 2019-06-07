<?php
/*
Plugin Name: WordPress Book First Plugin
Description: First Plugin For WordPress: Learn By Coding
Version:     1.0
Author:      Scott Hughes
*/

// Add Javascript to header
function wpbook_header_scripts() {
  include 'wpbook-header-scripts.php';
}
add_action( 'wp_head', 'wpbook_header_scripts' );
