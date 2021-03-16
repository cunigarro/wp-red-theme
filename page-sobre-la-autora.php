<?php get_header(); ?>

<div class="container mx-auto px-4 py-10 flex-1 grid grid-cols-12 gap-10">
  <div class="col-span-4 text-center">
    <img class="w-80 h-80 inline-block mb-4" src="<?php echo get_template_directory_uri() . '/dist/img/foto-1.jpg' ?>" alt="">
    <ul class="flex justify-center">
      <?php if (esc_attr(get_option('facebook'))): ?>
        <li class="w-10 h-10 bg-red-50 rounded-full flex justify-center items-center mr-3">
          <a href="<?php echo esc_attr(get_option('facebook')); ?>" target="_blank">
            <i class="mdi mdi-facebook mdi-24px text-red-600"></i>
          </a>
        </li>
      <?php endif; ?>

      <?php if (esc_attr(get_option('instagram'))): ?>
        <li class="w-10 h-10 bg-red-50 rounded-full flex justify-center items-center mr-3">
          <a href="<?php echo esc_attr(get_option('instagram')); ?>" target="_blank">
            <i class="mdi mdi-instagram mdi-24px text-red-600"></i>
          </a>
        </li>
      <?php endif; ?>

      <?php if (esc_attr(get_option('youtube'))): ?>
        <li class="w-10 h-10 bg-red-50 rounded-full flex justify-center items-center mr-3">
          <a href="<?php echo esc_attr(get_option('youtube')); ?>" target="_blank">
            <i class="mdi mdi-youtube mdi-24px text-red-600"></i>
          </a>
        </li>
      <?php endif; ?>

      <?php if (esc_attr(get_option('twitter'))): ?>
        <li class="w-10 h-10 bg-red-50 rounded-full flex justify-center items-center mr-3">
          <a href="<?php echo esc_attr(get_option('twitter')); ?>" target="_blank">
            <i class="mdi mdi-twitter mdi-24px text-red-600"></i>
          </a>
        </li>
      <?php endif; ?>

      <li class="w-10 h-10 bg-red-50 rounded-full flex justify-center items-center">
        <a href="/contacto">
          <i class="mdi mdi-email-outline mdi-24px text-red-600"></i>
        </a>
      </li>
    </ul>
  </div>

  <div class="col-span-8 text-gray-700 font-content">
    <h2 class="text-4xl fold-semibold mb-6">
      Sobre la autora
    </h2>

    <p class="font-semibold flex-1 text-red-600 text-lg mb-6">
      Maritza Gómez
    </p>

    <p class="mb-3 font-semibold">
      Nací en 1965, perteneciente a una generación de transición. Cuando era niña debía hacer lo que decían mis padres, cuando fui madre escuché lo que querían mis hijos. He tenido que romper muchas cadenas y estereotipos para ser la mujer que soy ahora.
    </p>

    <p class="mb-3">
      Amo la naturaleza, soy humanista y optimista. Encuentro la diversidad como la fuerza que enriquece el mundo.
    </p>

    <p class="mb-3">
      Bienvenido a mi blog, quiero compartir contigo mis escritos. Te invito a recorrer el camino desde las experiencias, los sueños y las reflexiones.
    </p>

    <p class="mb-3">
      Aquí encontrarás las ideas e imágenes que han pasado y pasan por la vida de una mujer, hija de su tiempo, que ha aprendido y lo sigue haciendo, a seguir su corazón en contra de las enseñanzas y las directrices sociales de su época.
    </p>
  </div>
</div>

<?php get_footer(); ?>
