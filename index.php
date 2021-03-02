<?php get_header(); ?>

<div class="container mx-auto text-light-orange px-4 flex-1">
  <img src="https://picsum.photos/1500/700" alt="">

  <div class="grid grid-cols-3 gap-8 py-10">

    <?php
      $currentPage = get_query_var('paged');
      $paginationPosts = new WP_Query(array(
        'posts_per_page' => 6,
        'paged' => $currentPage
      ));

      if ($paginationPosts->have_posts()):
    ?>
      <?php
        while($paginationPosts->have_posts()) {
          $paginationPosts->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="block bg-red-50">
            <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
            <?php if (!empty($url)): ?>
              <img class="w-96 h-56 object-cover" src="<?php echo $url ?>">
            <?php else: ?>
              <img class="w-96 h-56 object-cover" src="https://picsum.photos/id/999/200/100" alt="">
            <?php endif; ?>

            <div class="p-4 text-center text-black">
              <p class="mb-3 text-xs uppercase text-red-600 font-semibold">
                <?php the_title(); ?>
              </p>
              <p class="mb-0 text-sm text-gray-600">
                <?php the_excerpt(); ?>
              </p>
            </div>
          </a>
        <?php }
      ?>
    <?php endif; ?>
  </div>
  <div class="text-center pb-6">
    <p class="mb-3 text-xs uppercase text-red-900 font-semibold flex flex-col cursor-pointer hover:underline">
      <span>
        Ver todos los artículos
      </span>
      <span class="inline-block mt-2 text-red-600">
        <i class="mdi mdi-chevron-down mdi-24px"></i>
      </span>
    </p>
  </div>
</div>

<?php get_footer(); ?>
