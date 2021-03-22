<div id="comments">
  <?php
    if(have_comments()):
  ?>

    <ol class="comment-list">
      <?php
        $args = array(
          'walker' => null,
          'max_depth' => '',
          'style' => 'ol',
          'callback' => null,
          'end-callback' => null,
          'type' => 'all',
          'replay_text' => 'Repostear',
          'page' => '',
          'per_page' => '',
          'avatar_size' => 0,
          'reverse_top_level' => true,
          'reverse_children' => null,
          'format' => 'html5',
          'short_ping' => false,
          'echo' => true
        );

        wp_list_comments($args);
      ?>
    </ol>

    <?php
      if(!comments_open() && get_comments_number()):
    ?>
      <p class="comments">
        <?php esc_html_e('Comments are closed', 'vozpropia') ?>
      </p>
    <?php
      endif;
    ?>


  <?php
    endif;
  ?>

  <hr class="border-gray-400 border-1 my-8">

  <div class="comments-form">
    <?php comment_form() ?>
  </div>
</div>
