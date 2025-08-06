<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?>Leeside Coaching</title>
    <?php wp_head(); ?>
</head>

<div class="grid grid-cols-2 grid-rows-5 min-h-screen">
    <div class="col-span-1 row-start-2 pl-40">
        <div class="prose max-w-none">
            <?php
            $front_page_id = get_option('page_on_front');
            $front_page = get_post($front_page_id);
            echo apply_filters('the_content', $front_page->post_content);
            ?>
        </div>
    </div>

    <div class="col-span-1">
    </div>
</div>