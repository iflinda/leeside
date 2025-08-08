<header class="min-h-screen pt-[25vh]">
  <div class="grid grid-cols-2">
    <div class="col-span-1 pl-40 max-w-full">
      <div class="content max-w-none">
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
    <div class="col-span-1"></div>
  </div>
</header>