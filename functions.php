<?php
/**
 * A lot of code here were based in the twentyseventeen wordpress theme
 * @see  https://core.trac.wordpress.org/browser/trunk/src/wp-content/themes/twentyseventeen?order=name
 */

/*
 * Make theme available for translation.
 */
load_theme_textdomain( 'appsetc-massively' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 * @see https://core.trac.wordpress.org/browser/trunk/src/wp-content/themes/twentyseventeen/functions.php
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support( 'post-thumbnails' );

/**
 * Based in the images available in the theme 
 */
add_image_size( 'appsetc-massively-featured-image', 896, 436, true );
add_image_size( 'appsetc-massively-thumbnail', 448, 273, true );

/**
 * Enqueue all the need files to be included by wordpress engine
 */
function appsetc_massively_scripts() {
  // add the theme scripts
  wp_enqueue_script( 'appsetc-massively-scrollex', get_theme_file_uri( '/assets/js/jquery.scrollex.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'appsetc-massively-scrolly', get_theme_file_uri( '/assets/js/jquery.scrolly.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'appsetc-massively-skel', get_theme_file_uri( '/assets/js/skel.min.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'appsetc-massively-util', get_theme_file_uri( '/assets/js/util.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'appsetc-massively-main', get_theme_file_uri( '/assets/js/mains.js' ), array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'appsetc_massively_scripts' );
