<?php

function add_theme_style() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'add_theme_style' );

function add_theme_script() {
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/custom.js', null, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'add_theme_script' );
