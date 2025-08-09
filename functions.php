<?php
function leeside_theme_setup() {
    add_theme_support( 'title-tag' );
}
    add_action( 'after_setup_theme', 'leeside_theme_setup' );

    require get_template_directory() . '/inc/setup.php';
    require get_template_directory() . '/inc/enqueue.php';
    require get_template_directory() . '/inc/custom-post-types.php';
?>