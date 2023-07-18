<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">

    <title>El Niño del Cerro el Plomo | La Experiencia</title>

    <!-- INFORMACIÓN PARA EL SEO -->
    <meta content="text/html; ISO-8859-1" http-equiv="content-Type">
    <meta content="Spanish" name="DC.Language" scheme="RFC1766">
    <meta content="Indaga" name="author">
    <meta content="edgardo@indaga.me" name="reply-to">
    <link href="mailto:edgardo@indaga.me" rev="made">
    <meta content="" name="Acércate al Niño del Cerro El Plomo | Experiencia de realidad virtual de la Corporación Cultura del Lo Barnechea"/>
    <meta content="" name="realidad virtual, RV, experiencia inmersiva, Niño cerro El Plomo, Lo Barnechea, educación, divulgación, incas, capacocha">
    <meta content="Document" name="Resource-type">
    <meta content="Sat, 11 May 2023 00:00:00 GMT-4" name="DateCreated">
    <meta content="4 days" name="Revisit-after">
    <meta content="ALL" name="robots">

    <!-- CSS PERSONALIZADO -->
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="assets/css/style.css " rel="stylesheet">

</head>

<body>

<!-- SECTION MENU -->

<header class="bg-transparent z-[1000] 2xl:h-[200]">
    <!-- header desktop -->
    <div class="container invisible mx-auto flex flex-row md:h-[100px] md:visible xl:h-[150px] 2xl:visible">
        <div class="flex flex-row items-center md:w-3/12">
            <a class="cursor-pointer" href="index.php"><img alt="Logo" class="md:w-[40%] xl:w-[40%]"
                                                            src="assets/img/logo-nino.svg"></a>
        </div>
        <div class="flex flex-row items-center justify-end menu-item md:w-9/12">
            <div class="menu-item">
                <a class="item-menu-1 uppercase text-white font-avenir cursor-pointer font-black tracking-wider md:text-[14px] md:leading-[14px] xl:text-[16px] xl:leading-[16px] md:pr-[20px] xl:pr-[40px] hover:text-[#812C27]"
                   href="index.php">Inicio</a>
            </div>
            <div class="menu-item">
                <a class="item-menu-2 uppercase text-white font-avenir cursor-pointer font-black tracking-wider md:text-[14px] md:leading-[14px] xl:text-[16px] xl:leading-[16px] md:pr-[20px] xl:pr-[40px] hover:text-[#812C27]"
                   href="el-proyecto.php">El proyecto</a>
            </div>
            <div class="menu-item">
                <a class="item-menu-3 uppercase text-white font-avenir cursor-pointer font-black tracking-wider md:text-[14px] md:leading-[14px] xl:text-[16px] xl:leading-[16px]  hover:text-[#812C27] flex justify-end"
                   href="la-experiencia.php">La Experiencia</a>
            </div>
            <a href="https://corporacionculturaldelobarnechea.cl/home" target="_blank" class="flex justify-end"><img
                    alt="Corporación Cultural de Lo Barnechea" src="assets/img/logo-corporacion.svg"
                    class="w-[60%]"></a>

        </div>
    </div>

    <!-- header mobile -->
    <div class="visible mt-[-40px] md:hidden">
        <!-- Navbar start -->
        <div class="container mx-auto flex flex-row bg-transparent">
            <div class="w-9/12">
                <div class="pl-[20px]">
                    <a href="index.php" class="inline"><img src="assets/img/logo-nino.svg" alt="Logo" class="w-[90px]"></a>
                </div>
            </div>
            <div class="w-3/12 justify-end">
                <nav id="navbar" class="fixed z-50 flex w-full flex-row bg-transparent px-4">
                    <button id="btnSidebarToggler" type="button"
                            class="text-2xl text-[#54171A] bg-white hover:text-[#54171A] h-[50px] w-[50px] pl-[9px] mt-[20px] rounded-[50%] ">
                        <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5"
                             stroke="currentColor" class="h-8 w-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                        <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5"
                             stroke="currentColor" class="hidden h-8 w-8" onclick="openNav()">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </nav>
            </div>
        </div>
        <!-- Navbar end -->
        <!-- Sidebar start-->
        <div id="containerSidebar" class="z-40">
            <div class="relative z-40 navbar-menu">
                <nav id="sidebar"
                     class="fixed left-0 bottom-0 flex w-full -translate-x-full flex-col overflow-y-auto bg-[#611013] pt-6 pb-8 sm:max-w-xs lg:w-80 mt-[-90px]">
                    <!-- one category / navigation group -->
                    <div class="flex h-screen items-center justify-center px-4 pb-6 pt-[40px]">
                        <ul class="mb-8">
                            <li>
                                <a onclick="closeNav()"
                                   class="flex py-4 font-semibold text-white font-avenir text-[18px] tracking-[0.2em] mt-[20px] pl-[30%]"
                                   href="inicio.php">INICIO
                                </a>
                            </li>
                            <li>
                                <a onclick="closeNav()"
                                   class="flex py-4 font-semibold text-white font-avenir text-[18px] tracking-[0.2em] mt-[20px] pl-[8%]"
                                   href="el-proyecto.php">EL PROYECTO
                                </a>
                            </li>
                            <li>
                                <a onclick="closeNav()"
                                   class="flex py-4 font-semibold text-white font-avenir text-[18px] tracking-[0.2em] mt-[20px]"
                                   href="la-experiencia.php">LA EXPERIENCIA
                                </a>
                            </li>
                            <li>
                                <a onclick="closeNav()"
                                   class="flex py-4 font-semibold text-white font-avenir text-[18px] tracking-[0.2em] mt-[20px] pl-[24%]"
                                   href="/360/index.htm">GALERÍA
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="mx-auto lg:ml-80"></div>
        </div>
        <!-- Sidebar end -->
    </div>

</header>

<!-- SECTION HEADER -->



<!-- PRE-FOOTER-->

<section class="bg-[#151515] py-[40px] md:py-[50px] 2xl:py-[80px]">
    <div class="container mx-auto">
        <div class="flex flex-row items-center justify-center">
            <div class="flex flex-col items-center justify-center md:flex-row xl:w-full">
                <img alt="Logo El Niño" class="h-[75px] md:h-[65px] xl:h-[80px] 2xl:h-[100px]"
                     src="assets/img/logo-nino.svg">

                <a href="https://corporacionculturaldelobarnechea.cl/home" target="_blank"><img alt="Logo Coporación"
                                                                                                class="h-[80px] pt-[10px] md:h-[70px] md:pt-[10px] xl:h-[90px] xl:pt-[15px] xl:pl-[20px] 2xl:h-[100px"
                                                                                                src="assets/img/logo-corporacion.svg"></a>

                <a href="https://www.mnhn.gob.cl/" target="_blank"><img alt="Logo Coporación"
                                                                        class="h-[75px] pt-[10px] md:h-[65px] xl:h-[80px] xl:pt-[10px] xl:pl-[20px] 2xl:h-[100px"
                                                                        src="assets/img/museo.png"></a>

                <a href="https://comunicaciones.uc.cl/" target="_blank"><img alt="Logo Coporación"
                                                                             class="h-[75px] pt-[10px] md:h-[65px] xl:h-[80px] xl:pt-[10px] xl:pl-[20px] 2xl:h-[100px"
                                                                             src="assets/img/fac-comunicacion.svg"></a>
                <div class="flex flex-col justify-items-center align-middle ml-[40px] items-end">
                    <a href="#" class="text-[#d9c1ab] font-avenir text-[16px] underline decoration-solid">¿Eres docente? Coordina una vista</a>
                    <a href="#" class="text-[#d9c1ab] font-avenir text-[16px] underline decoration-solid">¿Quieres participar?</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->

<footer class="bg-[#000000] py-[15px] md:py-[20px] xl:py-[30px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <p class="font-light text-white font-avenir text-[16px] md:text-[14px] xl:text-[16px] 2xl:text-[20px]">
                Desarrollado por <a class="font-medium hover:text-[#812C27]" href="https://indaga.me" target="_blank">Indaga</a>
                e <a class="font-medium hover:text-[#812C27]" href="https://invadelab.cl/"
                     target="_blank">Invadelab</a></p>
        </div>
    </div>
</footer>

<!-- JQ FLOWBITE -->

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
<script src="assets/jq/navbar.js"></script>

<script>
    function openNav() {
        document.getElementById("sidebar").style.width = "100%";
    }
    function closeNav() {
        document.getElementById("sidebar").style.width = "0";
    }
</script>

</body>
</html>

