<?php
get_header();
?>

<div class="bg-[url(http://leeside.local/wp-content/themes/leeside/assets/images/bg-flow.svg)] bg-no-repeat bg-cover min-h-screen">
  <?php
//   get_template_part('template-parts/menu');
  get_template_part('template-parts/hero');
  get_template_part('template-parts/about');
  get_template_part('template-parts/sessions');
  get_template_part('template-parts/contact');
  ?>
</div>

<?php
get_footer();
?>