<?php 

 function Optimoz() {
	 wp_enqueue_style('Optimoz_bootstrap', get_template_directory_uri() . './css/bootstrap.min', array(), '4.1.2', 'all'); 
	 wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
     wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	 wp_enqueue_style('Optimoz_font', '//fontlibrary.org/face/bebas');
	 wp_enqueue_style('Optimoz_Style', get_stylesheet_uri());
	 wp_deregister_script('jquery');
	 wp_enqueue_script('Optimoz-script','https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);
     wp_enqueue_script('Optimoz_scripts', get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);
	 
 }

add_action('wp_enqueue_scripts','Optimoz');  


function Optimoz_features() {
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
    add_theme_support('custom-header');
	add_theme_support('post-formats',array('aside','image','video'));
}

add_action('after_setup_theme', 'Optimoz_features');

function add_linebreak_shortcode() {
    return '<br />';
}
add_shortcode('br', 'add_linebreak_shortcode' );