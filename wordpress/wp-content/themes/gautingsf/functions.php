<?php

add_theme_support('post-thumbnails');

function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' ); 



function UD_CSS_REGIST() {
    wp_register_style('style', '/wp-content/themes/gautingsf/style.css');
    wp_enqueue_style('style', '', 'general', '1.0', 'screen');
}

add_action( 'init', 'UD_CSS_REGIST');
 
