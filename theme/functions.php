<?php
/**
 * MePlann iOS Theme Functions
 */

function meplann_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'meplann_theme_setup');

function meplann_theme_scripts() {
    wp_enqueue_style('meplann-style', get_stylesheet_uri(), array(), '2.0.0');
}
add_action('wp_enqueue_scripts', 'meplann_theme_scripts');

function meplann_excerpt_length($length) {
    return 24;
}
add_filter('excerpt_length', 'meplann_excerpt_length');

function meplann_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'meplann_excerpt_more');
