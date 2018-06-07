<?php 

/**
 *======================================
 * for browser cash 
 *======================================
 */
if (site_url() == 'http://localhost/learnwp' ) {
    define( 'VERSION', time() );
}else {
    define( 'VERSION', wp_get_theme()->get('Version') );
} 


/**
 *======================================
 * CSS and JS Enqueue
 *======================================
 */
function projectone_assets(){
    wp_enqueue_style( 'projectone-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

	wp_enqueue_style( 'projectone-css', get_stylesheet_uri() , null, VERSION, 'all' );

}
add_action( 'wp_enqueue_scripts', 'projectone_assets' ); 


/**
*======================================
*text Domain, Theme support
*======================================
*/
function projectone_bootstrapping() {
    load_theme_textdomain( 'alpha' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    
     //custom image size
     add_image_size( 'projectone-square', 350, 220, true );

}
add_action( 'after_setup_theme', 'projectone_bootstrapping' );