<?php 

$args = [
  'post_type' => 'post',       // Or your custom post type slug
  'posts_per_page' => -1,      // Get all posts
  'category_name' => 'sessions',  // The category slug (not the name)
  'orderby' => 'date',
  'order' => 'DESC',
];

$query = new WP_Query($args);

if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();
    ?>
    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
    <?php
  endwhile;

  wp_reset_postdata();
else :
  echo '<p>No posts found in this category.</p>';
endif;