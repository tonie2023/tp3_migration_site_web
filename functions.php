<?php

/* Loads parent stylesheet */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-Astra-style', get_template_directory_uri() . '/style.css' );
}