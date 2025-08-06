<?php get_header(); ?>

<main id="main-content">

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>