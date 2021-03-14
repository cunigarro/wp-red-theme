    <footer class="bg-red-50">
      <div class="container mx-auto px-4 border-b border-red-600">
        <div class="pt-12 pb-6 grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
            <img class="mb-1 w-auto h-16 -mt-3 -ml-3" src="<?php echo get_template_directory_uri() . '/dist/img/logotipo.svg' ?>" alt="">
            <h4 class="mb-0 text-lg text-gray-600">
              Tiene que ver con la vida plena, incluso viendo la muerte como parte de la vida misma.
            </h4>
          </div>

          <div class="flex px-0 lg:px-14">
            <ul class="flex-1 text-gray-600">
              <li>
                <a class="text-xs hover:underline" href="/post-recientes">
                  Post recientes
                </a>
              </li>
              <li>
                <a class="text-xs hover:underline" href="/post-populares">
                  Populares
                </a>
              </li>
              <li>
                <a class="text-xs hover:underline" href="/sobre-la-autora">
                  Sobre la autora
                </a>
              </li>
            </ul>
            <a href="/contactanos" class="block text-center cursor-pointer hover:underline text-red-700">
              <p class="text-sm font-semibold mb-0">
                Escríbenos
              </p>
              <i class="mdi mdi-email-outline mdi-24px inline-block"></i>
            </a>
          </div>

          <div>
            <div class="flex items-center mb-3 hover:underline text-red-600 cursor-pointer">
              <i class="mdi mdi-instagram mdi-24px inline-block mr-2"></i>
              <span class="font-semibold text-sm">
                Instagram
              </span>
            </div>
            <div class="-mx-1 text-right mb-3">
              <img class="inline-block mx-1" src="https://picsum.photos/id/1005/50" alt="">
              <img class="inline-block mx-1" src="https://picsum.photos/id/1006/50" alt="">
              <img class="inline-block mx-1" src="https://picsum.photos/id/1009/50" alt="">
              <img class="inline-block mx-1" src="https://picsum.photos/id/1008/50" alt="">
            </div>
            <div class="text-right">
              <a href="#" class="text-xs mb-0 hover:underline text-gray-600">
                Visitar cuenta
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container mx-auto px-4 py-3 flex text-gray-600">
        <p class="text-xs">
          @ <strong><?= date('Y'); ?></strong> Voz Propia
        </p>
        <div class="flex-1 py-2 text-xs font-semibold text-right">
          Creado por Sumapinta
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
