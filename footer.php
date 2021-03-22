    <footer class="bg-red-50">
      <div class="container mx-auto px-4 border-b border-red-600">
        <div class="pt-12 pb-4 grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
            <img class="mb-1 w-auto h-16 -mt-3 -ml-3" src="<?php echo get_template_directory_uri() . '/dist/img/logotipo.svg' ?>" alt="">
            <h4 class="mb-0 text-lg text-gray-600">
              Tiene que ver con la vida plena, incluso viendo la muerte como parte de la vida misma.
            </h4>
          </div>

          <div class="flex px-0 lg:px-14">
            <?php
              wp_nav_menu(array(
                'menu'              => 'footer-menu',
                'container'         => false,
                'menu_class'        => 'list-none text-gray-600 text-sm flex-1',
                'walker'            => new Walker_Nav_Footer_Menu()
              ));
            ?>
            <a href="/contacto" class="block text-center cursor-pointer hover:underline text-red-700">
              <p class="text-sm font-semibold mb-0">
                Escríbenos
              </p>
              <i class="mdi mdi-email-outline mdi-24px inline-block"></i>
            </a>
          </div>

          <div>
            <?= do_shortcode("[instagram-feed]"); ?>
          </div>
        </div>
      </div>
      <div class="container mx-auto px-4 py-5 flex text-gray-600 flex items-center">
        <p class="text-xs mb-0">
          @ <strong><?= date('Y'); ?></strong> Voz Propia
        </p>
        <div class="flex-1 text-xs font-semibold text-right">
          Creado por Sumapinta
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
