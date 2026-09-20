<?php
/**
 * Theme functions.
 *
 * @package test-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function hkTheme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'hkTheme_setup' );

function hkTheme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'hkTheme_enqueue_styles' );