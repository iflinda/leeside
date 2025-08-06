<?php
function mytheme_register_custom_post_types() {
  // Example: Project post type
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
add_action('init', 'mytheme_register_custom_post_types');