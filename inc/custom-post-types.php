<?php
function leeside_register_custom_post_types() {
  register_post_type('project', [
    'labels' => [
      'name' => __('Projects'),
      'singular_name' => __('Project')
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'projects'],
    'supports' => ['title', 'editor', 'thumbnail'],
    'menu_icon' => 'dashicons-portfolio',
    'show_in_rest' => true
  ]);
}
add_action('init', 'leeside_register_custom_post_types');