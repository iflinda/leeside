<?php
$menu_page = get_page_by_title('Menu');
$menu_id = $menu_page ? $menu_page->ID : null;

// $logo = $menu_id ? get_field('logo_image', $menu_id) : null;
$meet = $menu_id ? get_field('meet_button', $menu_id) : '';
$sessions = $menu_id ? get_field('sessions_button', $menu_id) : '';
$testimonials = $menu_id ? get_field('testimonials_button', $menu_id) : '';
$contact = $menu_id ? get_field('contact_button', $menu_id) : '';
?>

<nav class="px-8 flex justify-between items-end">
  <a href="#hero" class="logo">
    <img src="/wp-content/themes/leeside/assets/images/logo.svg" alt="Site Logo" class="h-10 w-auto">
  </a>

  <ul class="nav-links flex space-x-8">
    <li><a href="#meet" class="hover:text-brandBlue"><?php echo esc_html($meet); ?></a></li>
    <li><a href="#sessions" class="hover:text-brandBlue"><?php echo esc_html($sessions); ?></a></li>
    <li><a href="#testimonials" class="hover:text-brandBlue"><?php echo esc_html($testimonials); ?></a></li>
    <li><a href="#contact" class="hover:text-brandBlue"><?php echo esc_html($contact); ?></a></li>
  </ul>
</nav>