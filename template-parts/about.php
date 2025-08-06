<?php
// Get the About page object by title
$about_page = get_page_by_title('About');

// Check and render the content
if ($about_page) {
    echo apply_filters('the_content', $about_page->post_content);
} else {
    echo '<p>About page not found.</p>';
}
?>