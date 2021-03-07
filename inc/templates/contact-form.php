<div class="mb-10 bg-green p-3 flex items-center text-white rounded js-contact-alert hidden">
    <div class="flex items-center flex-1">
        <i class="mdi mdi-email-check mdi-24px mr-2"></i>
        Tu mensaje ha sido enviado de manera exitosa.
    </div>
    <i class="mdi mdi-close mdi-18px cursor-pointer js-close-contact-alert"></i>
</div>

<div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 md:col-span-7">
        <form class="flex flex-col" id="contactForm" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
            <div class="mb-4">
                <label class="block mb-2" for="">
                    Escribe tu nombre
                </label>
                <input class="border-2 p-3 w-full" type="text" placeholder="" id="name" name="name" required="required">
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="">
                    Escribe tu correo electrónico
                </label>
                <input class="border-2 p-3 w-full" type="email" placeholder="" id="email" name="email" required="required">
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="">
                    Escribe tu mensaje
                </label>
                <textarea class="border-2 p-3 w-full" name="message" id="message" cols="30" rows="10" required="required"></textarea>
            </div>

            <div class="text-left">
                <button
                    class="inline-flex items-center justify-center px-5 py-2 border border-transparent text-sm font-medium rounded-sm text-white uppercase bg-green"
                    type="submit"
                >
                    Enviar mensaje
                </button>
            </div>
        </form>
    </div>
    <div class="col-span-12 md:col-span-5">
        <p class="mb-4">
            Para informaciones e inquietudes sobre la campaña por favor escribir a ambos correos, o bien se puede poner en contacto a través del formulario.
        </p>
        <p class="mb-4">
            <span class="text-green mb-0">
                <strong>
                    Linda Vera
                </strong>
            </span>
            <br>
            <span>
                Coordinadora de Incidencia
            </span>
            <br>
            <a class="text-green hover:underline" href="mailto:linda.v@vozpropia-comerciojusto.org">
                linda.v@vozpropia-comerciojusto.org
            </a>
        </p>
        <p class="mb-3">
            <strong>
                Contacto en WFTO-LA:
            </strong>
        </p>
        <p class="mb-4">
            <span class="text-green mb-0">
                <strong>
                    Zulma Brítez
                </strong>
            </span>
            <br>
            <span>
                Secretaria Regional
            </span>
            <br>
            <a class="text-green hover:underline" href="mailto:secretaria@wfto-la.org">
                secretaria@wfto-la.org
            </a>
        </p>

        <p>
            También nos encuentras en <a class="text-green hover:underline" href="https://www.facebook.com/ciudadescomerciojusto/" target="_blank">Facebook</a>
        </p>
    </div>
</div>
