<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'navigation-menu' => ( 'Navigation Menu' ),
      'expanded-footer' => ( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function default_header_nav() { // HTML markup for a default message in menu location
    echo "<ul class='nav'>                    
        <li>Create the Header Menu</li>
    </ul>";
}

function get_leftbar() {
    include "leftbar.php";
}

add_theme_support( 'custom-logo', array(
    'height'      => 120,
    'width'       => 120,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

function hfrk_custom_logo() {
   if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
   }
}

$args = array(
    'width'         => 1600,
    'height'        => 300,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

add_theme_support( 'post-thumbnails' );


?>
