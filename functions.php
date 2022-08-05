<?php
function rodrigoaiz_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','rodrigoaiz_theme_support');

function rodrigoaiz_menus(){
  $locations = array(
    'primary' => "Destop top menu",
    'footer' => "Footer menu"
  );
  register_nav_menus($locations);
}
add_action('init', 'rodrigoaiz_menus');

function rodrigoaiz_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('rodrigoaiz-style', get_template_directory_uri() . "/style.css", array('rodrigoaiz-bootstrap'), $version, 'all');
    wp_enqueue_style('rodrigoaiz-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", array(), '5.2.0', 'all');
}
add_action('wp_enqueue_scripts', 'rodrigoaiz_register_styles');

function rodrigoaiz_register_scripts(){
    wp_enqueue_script('rodrigoaiz-script', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
    wp_enqueue_script('rodrigoaiz-menu', get_template_directory_uri() . "/assets/js/menu.js", array(), '1.0', true);
    wp_enqueue_script('rodrigoaiz-redes', get_template_directory_uri() . "/assets/js/cerrarredes.js", array(), '1.0', true);
    #wp_enqueue_script('rodrigoaiz-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js", array(), '5.2.0', true);
    wp_enqueue_script('rodrigoaiz-jquery', "https://code.jquery.com/jquery-3.6.0.slim.min.js", array(), '3.6.0', true);
}
add_action( 'wp_enqueue_scripts' , 'rodrigoaiz_register_scripts' );
?>
