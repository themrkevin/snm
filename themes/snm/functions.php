<?php

function snm_setup() {
  register_nav_menus(array(
    'main' => __('main', 'snm'),
  ));
}
add_action('after_setup_theme', 'snm_setup');

function snm_stylesheets() {
	wp_enqueue_style('snm-style', get_stylesheet_uri());
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array('snm-style'), '20141010');
	wp_enqueue_style('defaults', get_template_directory_uri() . '/css/defaults.css', array('snm-style'), '20141010');
	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array('snm-style'), '20141010');
	wp_enqueue_style('nav', get_template_directory_uri() . '/css/component/nav.css', array('snm-style'), '20141010');
	wp_enqueue_style('helper', get_template_directory_uri() . '/css/helper.css', array('snm-style'), '20141010');
}
add_action('wp_enqueue_scripts', 'snm_stylesheets');

function snm_javascripts() {
  wp_enqueue_script('myjquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '20141010', true);
  wp_enqueue_script('nav', get_template_directory_uri() . '/js/nav.js', array('myjquery'), '20141010', true);
}
add_action('wp_enqueue_scripts', 'snm_javascripts');
?>
