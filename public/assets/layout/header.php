<header class="bg-transparent z-[1000] 2xl:h-[150px]">
    <!-- header desktop -->
    <div class="container mx-auto flex flex-row md:h-[100px] md:visible xl:h-[150px] 2xl:visible menu-desktop">
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
    <div class="visible md:hidden">
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
