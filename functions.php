<?php
function appsetc_massively_scripts() {
  // add the theme scripts
  wp_enqueue_script( 'appsetc-massively-scrollex', get_theme_file_uri( '/assets/js/jquery.scrollex.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'appsetc-massively-scrolly', get_theme_file_uri( '/assets/js/jquery.scrolly.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'appsetc-massively-skel', get_theme_file_uri( '/assets/js/skel.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'appsetc-massively-util', get_theme_file_uri( '/assets/js/util.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'appsetc-massively-main', get_theme_file_uri( '/assets/js/mains.js' ), array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'appsetc_massively_scripts' );
