<?php

function learnword_script_enqueue(){


	wp_enqueue_style('customstyle',get_template_directory_uri().'/css/learnword.css','','','all');

	wp_enqueue_style('customstyle2',get_template_directory_uri().'/css/bootstrap.min.css','','','all');

	wp_enqueue_script('customjs',get_template_directory_uri().'/js/learnword.js','','',true);
}


add_action('wp_enqueue_scripts','learnword_script_enqueue');



function learnword_theme_setup(){

add_theme_support('menus');
register_nav_menu('primary','Primary Header Navigation');
register_nav_menu('secondary','Footer Navigation');
}

add_action('init','learnword_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5',array('search-form'));

	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

/*sidebar */

function learnword_widget_setup(){

	register_sidebar(
array(

'name'=>'sidebarone',
'id'=>'sidebar-1',
'class'=>'custom',
'description'=>'standard sidebar',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget'  => '</aside>',
'before_title'  => '<h3 class="widgettitle">',
'after_title'   => '</h3>' 

	)

		);



	// copy and paste register sidebar to register new sidebar and change id and class
}

add_action('widgets_init','learnword_widget_setup');


//head function

function learnword_remove_version(){

	return '';
}

add_filter('the_generator','learnword_remove_version');
















?>