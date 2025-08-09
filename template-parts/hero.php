<header class="min-h-screen pt-[25vh]">
    <div class="grid grid-cols-[50%_50%]">
        <div class="col-span-1 pl-10 md:pl-40 max-w-[60vw]">
            <div class="prose max-w-none animate-fade-up">
                <?php
                $front_page_id = (int) get_option('page_on_front');
                if ($front_page_id) {
                    $content = get_post_field('post_content', $front_page_id);
                    echo apply_filters('the_content', $content);
                }

                if ($button_text = get_field('call_to_action_button')) {
                    echo '<a href="#contact" class="btn">' . esc_html($button_text) . '</a>';
                }
                ?>
            </div>
        </div>
    </div>
</header>