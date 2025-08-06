<?php
$menu_page = get_page_by_title('Menu');
$menu_id = $menu_page ? $menu_page->ID : null;

$logo = get_field('logo_image', $menu_id);
$meet = get_field('meet_button', $menu_id);
$sessions = get_field('sessions_button', $menu_id);
$testimonials = get_field('testimonials_button', $menu_id);
$contact = get_field('contact_button', $menu_id);
?>

<nav class="site-nav">
  <a href="#hero" class="logo">
    <?php if ($logo): ?>
      <img src="<?php echo esc_url($logo['url']); ?>" alt="Site Logo">
    <?php endif; ?>
  </a>

  <ul class="nav-links">
    <li><a href="#meet"><?php echo esc_html($meet); ?></a></li>
    <li><a href="#sessions"><?php echo esc_html($sessions); ?></a></li>
    <li><a href="#testimonials"><?php echo esc_html($testimonials); ?></a></li>
    <li><a href="#contact"><?php echo esc_html($contact); ?></a></li>
  </ul>
</nav>