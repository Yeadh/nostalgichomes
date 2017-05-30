<?php
/**
 * Nostalgic Homes Theme Functions
 *
 * @package nostalgichomes
 */

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );


function nostalgic_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}

 function nostal_scripts() {
	 wp_enqueue_style( 'nostal-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', 	get_template_directory_uri() . '/css/plugins.css', array(), '1.0' );
	wp_enqueue_style( 'font-awesome.min', 		get_template_directory_uri() . '/css/style-min.css', array(), '1.0' );


	wp_enqueue_script( 'borabor-plugin', 	get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'nostalgic');
}
add_action( 'wp_enqueue_scripts', 'nostal_scripts' );

 //Register widgets
 
 function nostal_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widgets' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your Footer.', 'twentyseventeen' ),
		'before_widget' => '<div class="row col-lg-4">
        <div class="footer-buildings-nav">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Blog Right Sidebar' ),
		'id'            => 'sidebar_right_blog',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyseventeen' ),
		'before_widget' => '<div class="blog-right-social-area blog-border">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );


}
add_action( 'widgets_init', 'nostal_widgets_init' );

add_action( 'after_setup_theme', 'nostal_menu' );
function nostal_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}
