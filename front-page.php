<?php get_header(); ?>

<div class="min-h-screen bg-no-repeat bg-cover bg-[url('/wp-content/themes/leeside/assets/images/bg-mobile-flow.svg')] sm:bg-[url('/wp-content/themes/leeside/assets/images/bg-flow.svg')] animate-fade animate-duration-[3000ms]">
    <?php
    get_template_part('template-parts/menu');
    get_template_part('template-parts/hero');
    get_template_part('template-parts/about');
    get_template_part('template-parts/sessions');
    get_template_part('template-parts/contact');
    ?>
</div>

<?php get_footer(); ?>