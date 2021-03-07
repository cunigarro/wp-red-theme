<?php
    $currentNewsPage = get_query_var('paged');
    $quantiyOfPosts = 0;
    $pagitationNewsPosts = new WP_Query(array(
      'posts_per_page' => 9,
      'paged' => $currentNewsPage,
      'category_name' => 'archivo'
    ));

    if ($pagitationNewsPosts->have_posts()):
  ?>
    <div class="mx-auto pt-4">
      <h2 class="font-bold text-4xl mb-8">
        Archivo de Noticias
      </h2>
    </div>

    <div class="mx-auto">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
        <?php
          while($pagitationNewsPosts->have_posts()) {
              $pagitationNewsPosts->the_post();
              $quantiyOfPosts += 1; ?>
              <div class="text-left flex flex-col mb-6">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                <?php if (!empty($url)): ?>
                  <img class="mb-3 object-cover h-64 sm:h-32 lg:h-64 w-100" src="<?php echo $url ?>">
                <?php else: ?>
                  <div class="mb-3 h-64 sm:h-32 lg:h-64 bg-gray-100 flex items-center">
                    <img class="object-cover" src="<?php echo get_template_directory_uri() . '/dist/img/imagen-predeterminada-para-posts.png' ?>" alt="">
                  </div>
                <?php endif; ?>
                <div class="flex flex-col flex-1">
                  <h3 class="font-bold flex-none sm:flex-1 lg:flex-none">
                    <?php the_title(); ?>
                  </h3>
                  <div class="block sm:hidden lg:block flex-1 mt-3">
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="text-right mt-4">
                    <a class="text-sm text-blue hover:underline font-semibold" href="<?php the_permalink(); ?>">
                      Ir al artículo
                    </a>
                  </div>
                </div>
              </div>
          <?php }
        ?>
      </div>
        <div class="flex py-5 justify-center">
            <?php
                echo paginate_links(array(
                    'total' => $pagitationNewsPosts->max_num_pages,
                    'prev_text' => __('<i class="mdi mdi-chevron-left mdi-36px text-green"></i>'),
                    'next_text' => __('<i class="mdi mdi-chevron-right mdi-36px text-green"></i>')
                ));
            ?>
        </div>
    </div>
<?php endif; ?>
