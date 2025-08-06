<?php
function mytheme_setup() {
  // Add featured image support
  add_theme_support('post-thumbnails');

  // Add custom logo support
  add_theme_support('custom-logo');

  // Add title tag support
  add_theme_support('title-tag');

  // Enable HTML5 markup support
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

  // Register navigation menu
  register_nav_menus([
    'primary' => __('Primary Menu', 'mytheme'),
    'footer'  => __('Footer Menu', 'mytheme')
  ]);
}
add_action('after_setup_theme', 'mytheme_setup');