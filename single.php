<?php get_header(); ?>

<?php
    while(have_posts()) {
      the_post(); ?>
      <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>

      <div class="relative img-opacity">
        <div class="text-container absolute left-0 top-0 h-full w-full px-4">
          <div class="container px-4 flex items-center h-full w-full mx-auto text-white flex justify-center">
            <div class="w-full md:w-10/12">
              <div class="text-left w-full">
                <h1 class="font-bold text-4xl leading-none mb-0 sm:mb-3">
                  <?php the_title(); ?>
                </h1>
                <p class="text-sm italic mb-0">
                  Publicado el <?php the_time( 'l, j \d\e F \d\e Y' ); ?>.
                </p>
                <p class="text-sm mb-0">
                  <span class="italic">Por</span> <?php the_author() ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <?php if ($url): ?>
          <img class="w-full h-80 sm:h-96 object-cover" src="<?php echo $url ?>">
        <?php else: ?>
          <div class="w-full object-cover bg-gray-200 flex items-center justify-center text-gray-400 text-sm uppercase py-28">
            Agregar Imagen
          </div>
        <?php endif; ?>
      </div>

      <div class="container mx-auto px-4 py-10 flex-1">
        <div class="grid gap-0 lg:gap-5 grid-cols-12">
          <div class="col-span-1 hidden md:block">
            <ul>
              <?php if (esc_attr(get_option('facebook'))): ?>
                <li class="w-10 h-10 bg-red-50 text-red-600 rounded-full flex justify-center items-center mb-3">
                  <a href="<?php echo esc_attr(get_option('facebook')); ?>" target="_blank">
                  <i class="mdi mdi-facebook mdi-24px"></i>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (esc_attr(get_option('instagram'))): ?>
                <li class="w-10 h-10 bg-red-50 text-red-600 rounded-full flex justify-center items-center mb-3">
                  <a href="<?php echo esc_attr(get_option('instagram')); ?>" target="_blank">
                  <i class="mdi mdi-instagram mdi-24px"></i>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (esc_attr(get_option('youtube'))): ?>
                <li class="w-10 h-10 bg-red-50 text-red-600 rounded-full flex justify-center items-center mb-3">
                  <a href="<?php echo esc_attr(get_option('youtube')); ?>" target="_blank">
                  <i class="mdi mdi-youtube mdi-24px"></i>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (esc_attr(get_option('twitter'))): ?>
                <li class="w-10 h-10 bg-red-50 text-red-600 rounded-full flex justify-center items-center mb-3">
                  <a href="<?php echo esc_attr(get_option('twitter')); ?>" target="_blank">
                  <i class="mdi mdi-twitter mdi-24px"></i>
                  </a>
                </li>
              <?php endif; ?>

              <li class="w-10 h-10 bg-red-50 text-red-600 rounded-full flex justify-center items-center mb-3">
                <a href="/contacto">
                  <i class="mdi mdi-email-outline mdi-24px"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-span-12 md:col-span-11 text-gray-700">
            <div class="font-content text-lg wp-content">
              <?php the_content(); ?>
            </div>

            <hr class="border-red-600 border-1 my-10">
            <div class="flex">
              <img class="w-28 h-28 mr-7 hidden sm:inline-block" src="<?php echo get_template_directory_uri() . '/dist/img/foto-2.jpg' ?>" alt="">
              <div class="flex-1">
                <div class="mb-3 flex items-center">
                  <p class="font-semibold flex-1 text-red-600 text-lg font-content mb-0">
                    Maritza Gómez
                  </p>
                  <ul class="flex">
                    <?php if (esc_attr(get_option('facebook'))): ?>
                      <li class="w-8 h-8 bg-red-50 rounded-full flex justify-center items-center mr-2">
                        <a href="<?php echo esc_attr(get_option('facebook')); ?>" target="_blank">
                          <i class="mdi mdi-facebook mdi-18px text-red-600"></i>
                        </a>
                      </li>
                    <?php endif; ?>

                    <?php if (esc_attr(get_option('instagram'))): ?>
                      <li class="w-8 h-8 bg-red-50 rounded-full flex justify-center items-center mr-2">
                        <a href="<?php echo esc_attr(get_option('instagram')); ?>" target="_blank">
                          <i class="mdi mdi-instagram mdi-18px text-red-600"></i>
                        </a>
                      </li>
                    <?php endif; ?>

                    <?php if (esc_attr(get_option('youtube'))): ?>
                      <li class="w-8 h-8 bg-red-50 rounded-full flex justify-center items-center mr-2">
                        <a href="<?php echo esc_attr(get_option('youtube')); ?>" target="_blank">
                          <i class="mdi mdi-youtube mdi-18px text-red-600"></i>
                        </a>
                      </li>
                    <?php endif; ?>

                    <?php if (esc_attr(get_option('twitter'))): ?>
                      <li class="w-8 h-8 bg-red-50 rounded-full flex justify-center items-center mr-2">
                        <a href="<?php echo esc_attr(get_option('twitter')); ?>" target="_blank">
                          <i class="mdi mdi-twitter mdi-18px text-red-600"></i>
                        </a>
                      </li>
                    <?php endif; ?>

                    <li class="w-8 h-8 bg-red-50 rounded-full flex justify-center items-center">
                      <a href="/contacto">
                        <i class="mdi mdi-email-outline mdi-18px text-red-600"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <p class="mb-1 font-content">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, molestias iure sit inventore reprehenderit voluptates et alias voluptas eaque in maxime neque odio, dolor dolorem enim ratione nostrum sunt. Corporis.
                </p>
                <a href="/sobre-la-autora" class="inline-block font-bold text-red-600 text-md flex items-center justify-end cursor-pointer hover:underline">
                  <span class="mr-1 font-content font-medium">
                    Leer más
                  </span>
                  <i class="mdi mdi-chevron-right mdi-24px"></i>
                  <i class="mdi mdi-chevron-right mdi-24px -ml-4"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php }
?>

<?php get_footer(); ?>
