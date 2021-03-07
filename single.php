<?php get_header(); ?>

<?php
    while(have_posts()) {
      the_post(); ?>
      <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
      <img class="w-100 h-80 object-cover" src="<?php echo $url ?>">

      <div class="container mx-auto px-4 py-10 flex-1">
        <div class="grid gap-10 grid-cols-12">
          <div class="col-span-1">
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
                <i class="mdi mdi-email-outline mdi-24px"></i>
              </li>
            </ul>
          </div>
          <div class="col-span-8 pt-5 text-gray-700">
            <h2 class="text-4xl fold-semibold mb-6">
              <?php the_title(); ?>
            </h2>

            <?php the_content(); ?>

            <hr class="border-red-600 border-1 my-10">
            <div class="flex">
              <img class="w-28 h-28 mr-7" src="<?php echo get_template_directory_uri() . '/dist/img/foto-2.jpg' ?>" alt="">
              <div class="flex-1">
                <div class="mb-4 flex items-center">
                  <p class="font-semibold flex-1 text-red-600 text-lg">
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
                      <i class="mdi mdi-email-outline mdi-18px text-red-600"></i>
                    </li>
                  </ul>
                </div>
                <p class="mb-0">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, molestias iure sit inventore reprehenderit voluptates et alias voluptas eaque in maxime neque odio, dolor dolorem enim ratione nostrum sunt. Corporis.
                </p>
                <a href="/sobre-la-autora" class="inline-block font-bold text-red-600 text-md flex items-center justify-end cursor-pointer hover:underline">
                  <span class="mr-1">
                    Leer más
                  </span>
                  <i class="mdi mdi-chevron-right mdi-24px"></i>
                  <i class="mdi mdi-chevron-right mdi-24px -ml-4"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-span-3 text-gray-700">
            <hr class="border-red-600 w-5/12 border-1 mb-4">
            <h3 class="mb-4 text-xl font-semibold">
              Lo más leído
            </h3>
            <div class="mb-6">
              <img class="mb-3" src="https://picsum.photos/id/1010/400/200" alt="">
              <p class="text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
            <div class="mb-6">
              <img class="mb-3" src="https://picsum.photos/id/1011/400/200" alt="">
              <p class="text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
            <div class="mb-6">
              <img class="mb-3" src="https://picsum.photos/id/1012/400/200" alt="">
              <p class="text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
          </div>
        </div>
      </div>
    <?php }
?>

<?php get_footer(); ?>
