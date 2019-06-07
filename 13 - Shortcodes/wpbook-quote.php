<?php
/*
Plugin Name: WordPress Book Quote Plugin
Description: Quote Plugin For WordPress: Learn By Coding
Version:     1.0
Author:      Scott Hughes
*/

function wpbook_quote() {
  $quotes = array(
    'Learning never exhausts the mind -- Leonardo da Vinci',
    'There is no charm equal to tenderness of heart -- Jane Austen',
    'Good judgment comes from experience, and a lot of that comes from bad judgment -- Will Rogers',
    'When you reach the end of your rope, tie a knot in it and hang on -- Franklin D. Roosevelt',
    'The journey of a thousand miles begins with one step -- Lao Tzu'
  );
  return $quotes[rand(0, 4)];
}

add_shortcode( 'wpbook_quote', 'wpbook_quote' );
