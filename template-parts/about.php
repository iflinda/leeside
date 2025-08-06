<?php
$about_page = get_page_by_title('About');

if ($about_page) {
    echo apply_filters('the_content', $about_page->post_content);
} else {
    echo '<p>About page not found.</p>';
}
?>