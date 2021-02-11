<?php get_header(); ?>

<div class="container mx-auto px-4 py-10 flex-1 grid grid-cols-12 gap-10">
  <div class="col-span-4 text-center">
    <img class="w-80 h-80 inline-block mb-4" src="<?php echo get_template_directory_uri() . '/dist/img/foto-1.jpg' ?>" alt="">
    <ul class="flex justify-center">
      <li class="w-10 h-10 bg-red-50 rounded-full flex justify-center items-center mr-3">
        <i class="mdi mdi-twitter mdi-24px text-red-600"></i>
      </li>
      <li class="w-10 h-10 bg-red-50 rounded-full flex justify-center items-center">
        <i class="mdi mdi-email-outline mdi-24px text-red-600"></i>
      </li>
    </ul>
  </div>

  <div class="col-span-8 text-gray-700">
    <h2 class="text-4xl fold-semibold mb-6">
      Sobre la autora
    </h2>

    <p class="font-semibold flex-1 text-red-600 text-lg mb-6">
      Maritza Gómez
    </p>

    <p class="mb-3 font-semibold">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio magnam corporis, assumenda veniam sapiente omnis qui repudiandae asperiores totam itaque commodi! Quod, nisi ad officia sapiente atque similique totam eius?
    </p>

    <p class="mb-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta a sit minima modi, architecto quidem sunt illo numquam praesentium? Laboriosam beatae consequuntur doloremque repellat error molestias alias inventore maxime libero.
    </p>

    <p class="mb-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta a sit minima modi, architecto quidem sunt illo numquam praesentium? Laboriosam beatae consequuntur doloremque repellat error molestias alias inventore maxime libero.
    </p>
  </div>
</div>

<?php get_footer(); ?>
