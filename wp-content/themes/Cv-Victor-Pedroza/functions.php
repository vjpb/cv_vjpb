<?php 

  function register_my_menu() {
      register_nav_menu('header-menu',__( 'Header Menu' ));


    }
    add_action( 'init', 'register_my_menu' );

    if (function_exists('register_sidebar')) {
      register_sidebar(array(
      'name' => 'Footer Menu',
      'id'   => 'footer_menu',
      'description'   => 'Widget Area',
  
      ));
      }
?>