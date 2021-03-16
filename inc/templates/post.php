<a href="<?php the_permalink(); ?>" class="block bg-red-50">
  <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
  <?php if (!empty($url)): ?>
    <img class="w-full h-56 object-cover" src="<?php echo $url ?>">
  <?php else: ?>
    <img class="w-full h-56 object-cover" src="https://picsum.photos/id/999/200/100" alt="">
  <?php endif; ?>

  <div class="p-4 text-center text-black">
    <p class="mb-3 text-sm uppercase text-red-600 font-semibold">
      <?php the_title(); ?>
    </p>
    <div class="mb-0 text-md text-gray-600 font-light leading-6">
      <?php the_excerpt(); ?>
    </div>
  </div>
</a>
