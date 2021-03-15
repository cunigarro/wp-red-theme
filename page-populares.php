<?php get_header(); ?>

<?php
    while(have_posts()) {
        the_post(); ?>
        <div class="relative">
          <div class="text-container absolute left-0 top-0 h-full w-full px-4">
            <div class="container flex items-center h-full w-full mx-auto text-white px-4 flex justify-center">
                <div class="w-full md:w-10/12">
                <div class="text-left w-full sm:w-2/4">
                    <h1 class="font-bold text-4xl lg:text-7xl leading-none mb-0 sm:mb-3">
                    <?php the_title(); ?>
                    </h1>
                    <?php if (has_excerpt()): ?>
                    <p class="font-light text-sm md:text-lg hidden sm:block">
                        <?php the_excerpt(); ?>
                    </p>
                    <?php endif; ?>
                </div>
                </div>
            </div>
          </div>
          <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
          <img class="object-cover w-full h-80" src="<?php echo $url ?>">
        </div>

        <div class="container mx-auto text-sm py-10 text-gray-600 px-4 content flex justify-center">
          <div class="w-full md:w-10/12">
            <?php
              $args = array(
                  'excerpt_format' => 1,
                  'excerpt_length' => 150,
                  'post_html' => '
                    <div>
                      <h2 class="text-md mb-0">
                        {title}
                      </h2>
                      <p class="mb-3 text-xs">
                        Número de vistas: {views}
                      </p>
                      <p class="mb-0">
                        {summary}
                      </p>
                    </div>
                  '
              );

              wpp_get_mostpopular($args);
            ?>
          </div>
        </div>
    <?php }
?>

<?php get_footer(); ?>
