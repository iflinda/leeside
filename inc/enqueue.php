<?php
/**
 * Enqueue theme styles and scripts
 */

function leeside_enqueue_assets() {
  // Main CSS Stylesheet
  wp_enqueue_style(
    'leeside-style',
    get_template_directory_uri() . '/assets/css/style.css',
    [],
    filemtime(get_template_directory() . '/assets/css/style.css')
  );

  // Load JavaScript
  wp_enqueue_script(
    'leeside-script',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    filemtime(get_template_directory() . '/assets/js/main.js'), // Cache
    true // Load in footer
  );

  // Load Google Fonts
  wp_enqueue_style(
    'leeside-fonts',
    'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap',
    [],
    null
  );
}
add_action('wp_enqueue_scripts', 'leeside_enqueue_assets');