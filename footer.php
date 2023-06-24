
    <footer class="bg-black-primary p-4 md:px-14 md:py-11 w-full grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-12 ">
        <div class="footer__info flex flex-col gap-6 col-span-3">
            <div class="footer__address">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo_latina_pe.png'; ?>" alt="Latina" width="56" role="img">
                <div class="address">
                    <h6 class="text-white text-sm">Latina</h6>
                    <p class="text-white text-sm">Av. San Felipe 968 - Jesús María</p>
                    <span class="text-white text-sm">Télefono: 219 1000</span>
                </div>
            </div>
            <div class="socialMedia flex gap-2">
                <span class="text-white font-bold text-sm">Síguenos en: </span>
                <ul class="socialMedia__list flex gap-4" role="list">
                    <li class="socialMedia__item" role="listitem">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-facebook.svg'; ?>" alt="Latina" width="24" role="img">
                    </li>
                    <li class="socialMedia__item" role="listitem">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-twitter.svg'; ?>" alt="Latina" width="24" role="img">
                    </li>
                    <li class="socialMedia__item" role="listitem">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-instagram.svg'; ?>" alt="Latina" width="24" role="img">
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer__links col-span-6">
            <nav role="navigation" class="grid lg:grid-cols-2 lg:gap-4">
                <ul role="list" class="links text-white">
                    <li role="listitem" class="links__item"><a href="#">Politicas de privacidad</a></li>
                    <li role="listitem" class="links__item"><a href="#">Términos y condiciones</a></li>
                    <li role="listitem" class="links__item"><a href="#">Quienes Somos</a></li>
                </ul>
                <ul role="list" class="links text-white">
                    <li role="listitem" class="links__item"><a href="#">Noticias</a></li>
                    <li role="listitem" class="links__item"><a href="#">Programas</a></li>
                    <li role="listitem" class="links__item"><a href="#">Deportes</a></li>
                    <li role="listitem" class="links__item"><a href="#">Latina Play</a></li>
                    <li role="listitem" class="links__item"><a href="#">TV en vivo</a></li>
                </ul>
            </nav>
        </div>

        <div class="footer__apps col-span-3">
            <h6 class="text-white font-bold mb-4">Encuentranos también en: </h6>
            <ul class="apps" role="list">
                <li class="apps__item flex gap-4 items-center" role="listitem">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-playstore.svg'; ?>" alt="Latina" width="32" role="img" />
                    <span class="text-white">Descárgala ahora en Google Play</span>
                </li>
                <li class="apps__item flex gap-4 items-center" role="listitem">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-apple.svg'; ?>" alt="Latina" width="32" role="img" />
                    <span class="text-white">Descárgala ahora en App Store</span>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>