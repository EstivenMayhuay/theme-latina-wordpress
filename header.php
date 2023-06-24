<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latina Theme - Estiven Mayhuay</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">
</head>
<body class="bg-white h-screen">
    <!-- Header Mobile -->
    <header class="headerMobile w-full lg:hidden bg-purple-dark p-4 flex items-center justify-center relative">
        <p class="headerMobile__btn text-white absolute left-4">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/icon-menu.svg'; ?>" alt="Latina" width="36">
        </p>
        <p class="headerMobile__logo">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/logo-movil.png'; ?>" alt="Latina" width="140" role="img">
        </p>
        <p class="headerMobile__latinatv absolute right-4">
            <a href="https://www.latina.pe/tvenvivo" title="Latina TV En Vivo">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/icon_tv_fondo.png'; ?>" alt="Latina TV en Vivo" width="48" role="img">
            </a>
        </p>
    </header>

    <!-- Header Desktop -->
    <header class="headerDesktop hidden lg:flex bg-white relative">
        <div class="headerDesktop relative flex items-center justify-between gap-8 px-4 py-5 bg-white-grayish lg:w-10/12 mx-auto">
            <p class="headerDesktop__logo">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/latina_pe.png'; ?>" alt="Latina" width="80" role="img">
            </p>
            <nav class="menuDesktop flex gap-4" role="navigation">
                <button class="menuDesktop__btn flex items-center" role="button">
                    <img src="<?php echo get_template_directory_uri() .'/assets/images/icon-menu-black.svg'; ?>" alt="Latina" width="36" role="img">
                    <span class="font-bold text-xl">Menu</span>
                </button>
                <ul role="menu" class="menuDesktop__list flex items-center gap-4">
                    <li role="menuitem" class="menuDesktop__item text-purple-dark font-bold text-xl"><a href="#">NOTICIAS</a></li>
                    <li role="menuitem" class="menuDesktop__item text-purple-dark font-bold text-xl"><a href="#">PROGRAMAS</a></li>
                    <li role="menuitem" class="menuDesktop__item text-purple-dark font-bold text-xl"><a href="#">NOVELAS</a></li>
                    <li role="menuitem" class="menuDesktop__item text-purple-dark font-bold text-xl"><a href="#">DEPORTES</a></li>
                </ul>
                <button class="menuDesktop__search" role="button">                
                    <img src="<?php echo get_template_directory_uri() .'/assets/images/icon-search.svg'; ?>" alt="Latina" width="22" role="img">
                </button>
                <a href="https://play.latina.pe/" class="menuDesktop__latinaPlay flex items-center" title="Latina Play" role="link">
                    <img src="<?php echo get_template_directory_uri() .'/assets/images/latina_play.png'; ?>" alt="Latina" width="109" role="img">
                </a>
            </nav>  
            <div class="tv-en-vivo">
                <a href="https://www.latina.pe/tvenvivo" title="Latina TV en vivo" role="link" class="flex flex-col items-center">
                    <img src="<?php echo get_template_directory_uri() .'/assets/images/tv_envivo.png'; ?>" alt="Latina" width="80" role="img">
                    <span class="text-black-primary font-bold">Reporte <br> Semanal</span>
                </a>
            </div>            
        </div>
    </header>
