<?php
// Get the front page ID
$front_page_id = get_option('page_on_front');

// Get the post object for the front page
$front_page = get_post($front_page_id);

// Output the content (which includes your Markdown block rendered as HTML)
echo apply_filters('the_content', $front_page->post_content);
?>