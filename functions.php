<?php
function rodrigoaiz_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('rodrigoaiz-style', get_template_directory_uri() . "/style.css", array('rodrigoaiz-bootstrap'), $version, 'all');
    wp_enqueue_style('rodrigoaiz-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", array(), '5.2.0', 'all');
}
add_action('wp_enqueue_scripts', 'rodrigoaiz_register_styles');

function rodrigoaiz_register_scripts(){
    wp_enqueue_script('rodrigoaiz-script', get_template_directory_uri() . "/main.js", array(), '1.0', true);
    wp_enqueue_script('rodrigoaiz-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js", array(), '5.2.0', true);
    wp_enqueue_script('rodrigoaiz-jquery', "https://code.jquery.com/jquery-3.6.0.slim.min.js", array(), '3.6.0', true);
}
add_action( 'wp_enqueue_scripts' , 'rodrigoaiz_register_scripts' );
?>