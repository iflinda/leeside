<?php
$contact_page = get_page_by_title('Contact');

if ($contact_page) {
    echo apply_filters('the_content', $contact_page->post_content);
} else {
    echo '<p>Contact page not found.</p>';
}
?>