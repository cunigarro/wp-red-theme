<!doctype html>
<html class="h-full" lang="es">
  <head>
    <title>Voz propia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/dist/img/favicon.png' ?>" type="image/png">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
  </head>
  <body class="flex flex-col h-full">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <header class="sticky top-0 bg-white z-10 py-5 shadow">
      <div class="container mx-auto flex items-center px-4">
        <a href="/" class="inline-block mr-3">
          <img class="w-auto h-16" src="<?php echo get_template_directory_uri() . '/dist/img/logotipo.svg' ?>" alt="">
        </a>
        <div class="flex-1 text-right">
          <div class="-mx-2">
            <?php if (esc_attr(get_option('facebook'))): ?>
              <a class="px-2 inline-block" href="<?php echo esc_attr(get_option('facebook')); ?>" target="_blank">
                <i class="mdi mdi-facebook mdi-24px text-red-600"></i>
              </a>
            <?php endif; ?>

            <?php if (esc_attr(get_option('instagram'))): ?>
              <a class="px-2 inline-block" href="<?php echo esc_attr(get_option('instagram')); ?>" target="_blank">
                <i class="mdi mdi-instagram mdi-24px text-red-600"></i>
              </a>
            <?php endif; ?>

            <?php if (esc_attr(get_option('youtube'))): ?>
              <a class="px-2 inline-block" href="<?php echo esc_attr(get_option('youtube')); ?>" target="_blank">
                <i class="mdi mdi-youtube mdi-24px text-red-600"></i>
              </a>
            <?php endif; ?>

            <?php if (esc_attr(get_option('twitter'))): ?>
              <a class="px-2 inline-block" href="<?php echo esc_attr(get_option('twitter')); ?>" target="_blank">
                <i class="mdi mdi-twitter mdi-24px text-red-600"></i>
              </a>
            <?php endif; ?>
          </div>

          <?php
            wp_nav_menu(array(
              'menu'              => 'header-menu',
              'container'         => false,
              'menu_class'        => 'list-none -mx-2 text-gray-600 hidden md:block',
              'walker'            => new Walker_Nav_Main_Menu()
            ));
          ?>
        </div>
      </div>
      <div class="container mx-auto px-4">
        <?php
          wp_nav_menu(array(
            'menu'              => 'header-menu',
            'container'         => false,
            'menu_class'        => 'list-none -mx-2 text-gray-600 block md:hidden text-right mt-4',
            'walker'            => new Walker_Nav_Main_Menu()
          ));
        ?>
      </div>
    </header>
