<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?>Leeside Coaching</title>
  <?php wp_head(); ?>
</head>

<?php
$front_page_id = get_option('page_on_front');
$front_page = get_post($front_page_id);
echo apply_filters('the_content', $front_page->post_content);
?>