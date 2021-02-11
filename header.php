<!doctype html>
<html class="h-full" lang="es">
  <head>
    <title>Voz propia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/dist/img/favicon.png' ?>" type="image/png">
    <?php wp_head(); ?>
  </head>
  <body class="flex flex-col h-full">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <header class="sticky top-0 bg-white z-10 py-5 shadow">
      <div class="container mx-auto flex items-center px-4">
        <img class="mr-3 w-auto h-16" src="<?php echo get_template_directory_uri() . '/dist/img/logotipo.svg' ?>" alt="">
        <div class="flex-1 text-right">
          <div>
            <i class="mdi mdi-instagram mdi-24px text-red-600"></i>
          </div>
          <ul class="list-none -mx-2 text-gray-600">
            <li class="inline-block mx-2">
              <a class="font-semibold" href="">
                Post recientes
              </a>
            </li>
            <li class="inline-block mx-2">
              <a href="">
                Post recientes
              </a>
            </li>
            <li class="inline-block mx-2">
              <a href="">
                Post recientes
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
