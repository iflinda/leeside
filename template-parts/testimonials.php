<?php
$args = [
  'post_type' => 'testimonials', // Your custom post type slug
  'posts_per_page' => -1,        // Show all testimonials
  'orderby' => 'date',           // Order by date (newest first)
  'order' => 'DESC',
];

$testimonial_query = new WP_Query($args);

if ($testimonial_query->have_posts()) :
  echo '<div class="testimonials">';
  while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
    ?>
    <div class="testimonial-item">
      <h3><?php the_title(); ?></h3>
      <div class="testimonial-content">
        <?php the_content(); ?>
      </div>
    </div>
    <?php
  endwhile;
  echo '</div>';

  wp_reset_postdata();
else :
  echo '<p>No testimonials found.</p>';
endif;
?>