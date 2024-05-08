<?php

function andrew_themesupport(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme' , 'andrew_themesupport');

function andrew_menus(){

    $locations = array(

        'Primary' => "Desktop left side menu",
        'footer' => "register footer menue"
    );
 
register_nav_menus($locations);

}
add_action('init','andrew_menus');

function andrew_styles(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('andrew_styles_css', get_template_directory_uri() . "/style.css" ,array('andrew_styles_boots'),1.0,'all' );
    wp_enqueue_style('andrew_styles_boots',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" ,array(),$version,'all' );
    wp_enqueue_style('andrew_styles_fam',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" ,array(),1.0,'all' );
}

add_action('wp_enqueue_scripts' , 'andrew_styles');


function andrew_scripts(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('andrew_scripts_js', get_template_directory_uri() . "assets/js/main.css" ,array(),$version,'true' );
    wp_enqueue_script('andrew_scripts_jqry',"https://code.jquery.com/jquery-3.4.1.slim.min.js" ,array(),3.4,'true' );
    wp_enqueue_script('andrew_scripts_ppr',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ,array(),3.4,'true' );
    wp_enqueue_script('andrew_scripts_jqry',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ,array(),3.4,'true' );
}

add_action('wp_enqueue_scripts' , 'andrew_scripts');


function  followandrew_widget_areas(){

register_sidebar(
  
 array(
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    'before_widget' => '',
    'after_widget' => '',
     'name' => 'Sidebar Area',
     'id' => 'sidebar-1',
     'description' => 'sidebar widget area'   
     )


); 


}
add_action('widgets_init', 'followandrew_widget_areas');
?>