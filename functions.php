<?php

  add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_styles' );
  function tt_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
  }

  add_action( 'pre_get_posts', 'tt_child_disable_pagination' );
  function tt_child_disable_pagination( $query ) {
    $query->set('nopaging', 1 );
  }

?>
