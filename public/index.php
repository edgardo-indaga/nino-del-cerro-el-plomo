<!doctype html>
<html lang="es">
<?php include 'assets/layout/variables.php'; ?>

<head>
    <title><?php echo $titulo ?></title>
    <?php include 'assets/layout/head.php'; ?>
</head>

<body>

<!-- SECTION HEADER -->
<?php include 'assets/layout/header.php'; ?>
<!-- IMAGEN PRINCIPAL HOME -->

<section
        class="h-screen bg-cover bg-bottom bg-no-repeat z-[10] bg-principal mt-[-92px] md:bg-principal md:mt-[-100px] md:h-screen xl:mt-[-150px]">
    <div class="container mx-auto flex flex-col h-[100vh] md:flex-row xl:h-[100vh]">
        <div class="order-2 flex flex-row items-end justify-center h-[50vh] md:h-[80vh] md:mt-[20vh] md:order-1 md:w-6/12">
            <img alt="" class="h-[50vh] md:h-[80vh]" src="assets/img/img-01.svg">
        </div>
        <div class="order-1 flex flex-col items-center h-[50vh] md:h-[60vh] md:mt-[40vh] md:order-2 md:w-4/12 md:items-end xl:h-[60vh] xl:mt-[40vh] 2xl:h-[55vh] 2xl:mt-[45vh] 2xl:w-4/12">
            <h2 class="text-white uppercase font-avenir font-light text-[30px] mt-[40%] md:mt-0 md:text-[30px] xl:text-[32px] 2xl:text-[38px] xl:shadow-[0, 0, 0, 0.16]">
                acércate al</h2>
            <h2 class="text-white uppercase font-avenir font-medium text-[46px] leading-[42px] md:text-[46px] md:leading-[48px] xl:text-[60px] 2xl:text-[76px] xl:leading-[64px] 2xl:leading-[77px] xl:tracking-[1px] xl:shadow-[0, 0, 0, 0.16]">
                niño del</h2>
            <h2 class="text-white uppercase font-avenir font-medium text-[46px] leading-[42px] md:text-[46px] md:leading-[48px] xl:text-[60px] 2xl:text-[76px] xl:leading-[64px] 2xl:leading-[77px] xl:tracking-[1px] xl:shadow-[0, 0, 0, 0.16]">
                cerro el</h2>
            <h2 class="text-white uppercase font-avenir font-medium text-[46px] leading-[42px] md:text-[46px] md:leading-[48px] xl:text-[60px] 2xl:text-[76px] xl:leading-[64px] 2xl:leading-[77px] xl:tracking-[1px] xl:shadow-[0, 0, 0, 0.16]">
                plomo</h2>
        </div>
    </div>
</section>

<!-- SECTION EXPERIENCIA -->

<section class="bg-cover bg-bottom bg-no-repeat bg-experiencia md:bg-experiencia md:h-screen">
    <div class="container mx-auto px-[40px] md:px-0">
        <div class="flex flex-col items-center justify-center justify-items-center">
            <div class="flex flex-col justify-end h-[15vh] md:h-[35vh] xl:h-[35vh]">
                <img alt="icono-01" class="w-[70px] md:w-[80px] xl:w-[100px] 2xl:w-[130px]"
                     src="assets/img/control.svg">
            </div>
            <div class="flex flex-col items-center pt-[40px] pb-[80px] md:h-[65vh] md:pt-[46px] md:w-8/12 md:pb-0 xl:h-[60vh] xl:pt-[50px] 2xl:pt-[80px]">
                <h3 class="text-center font-light font-avenir text-[20px] leading-[32px] md:text-[20px] md:leading-[28px] xl:text-[22px] xl:leading-[30px] 2xl:text-[28px] 2xl:leading-[40px]">
                    La experiencia inmersiva “El Niño del Cerro El Plomo” es un <strong>recorrido de realidad
                        virtual</strong>, que permite a niños y niñas ascender a la cumbre del Cerro El Plomo para
                    conocer
                    la historia de un niño inca que fue encontrado en este lugar, tras haber sido ofrendado a los
                    dioses, hace más de 500 años.</h3>
            </div>
        </div>
    </div>
</section>

<!-- CAROUSEL -->

<section>
    <div id="animation-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden h-[650px] md:h-[700px] 2xl:h-[920px]">
            <!-- Item 1 -->
            <div class="hidden duration-200 ease-linear bg-slider-1 bg-cover bg-bottom bg-no-repeat flex flex-col align-middle items-center justify-center" data-carousel-item>

                <h2 class="font-avenir text-center text-white text-[30px] leading-[38px] md:text-[46px] md:leading-[52px] 2xl:text-[65px] 2xl:leading-[76px] md:font-black px-[40px] ">¿Eres docente y quieres <br>tener la experiencia virtual <br>con tu curso?</h2>
                <br>
                <a class="font-avenir items-center text-[#69322a] md:text-[#ffffff] bg-[#d9c1ab] md:bg-transparent md:text-[#ffffff] text-[18px] md:text-[17px] xl:text-[18px] md:border-[1.5px] md:border-[#ffffff] py-[12px] md:py-[12px] xl:py-[14px] px-[30px] md:px-[36px] xl:px-[40px] rounded-[26px] hover:bg-[#ffffff] hover:text-[#621416] tracking-[0.1em]"
                   href="eres-docente.php">INFÓRMATE AQUÍ</a>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-200 ease-linear bg-slider-2 bg-cover bg-bottom bg-no-repeat flex flex-col align-middle items-center justify-center" data-carousel-item>
                <h2 class="font-avenir text-center text-white text-[30px] leading-[38px] md:text-[46px] md:leading-[52px] 2xl:text-[65px] 2xl:leading-[76px] md:font-black px-[40px] ">¿Quieres venir en familia <br>o con tus amigos?</h2>
                <br>
                <a class="font-avenir items-center text-[#69322a] md:text-[#ffffff] bg-[#d9c1ab] md:bg-transparent md:text-[#ffffff] text-[18px] md:text-[17px] xl:text-[18px] md:border-[1.5px] md:border-[#ffffff] py-[12px] md:py-[12px] xl:py-[14px] px-[30px] md:px-[36px] xl:px-[40px] rounded-[26px] hover:bg-[#ffffff] hover:text-[#621416] tracking-[0.1em]"
                   href="#"
                   target="_blank">INSCRÍBETE AQUÍ</a>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>
</section>

<!-- SECTION EL PROYECTO -->

<section
        class="bg-cover bg-bottom bg-no-repeat bg-proyecto py-[50px] md:bg-proyecto md:py-[40px] xl:py-[70px] 2xl:py-[160px]">
    <div class="container mx-auto flex flex-col items-center">
        <div class="md:w-12/12">
            <h3 class="text-[#d9c1ab] font-avenir font-medium text-[28px] tracking-[0.2em] md:text-[30px] xl:text-[36px] md:tracking-[0.2em] 2xl:text-[40px]">
                EL PROYECTO</h3>
        </div>
    </div>
    <div class="container mx-auto flex flex-row px-[40px] md:px-0">
        <div class="items-center icono-1 md:w-3/12">
            <img alt="Icono 2" class="md:h-[70vh] md:pt-[20px] 2xl:h-[80vh] 2xl:pt-[100px]" src="assets/img/img-02.png">
        </div>
        <div class="pt-[40px] md:pt-[40px] md:w-6/12 xl:pt-[70px] 2xl:pt-[90px]">
            <h3 class="text-center font-normal text-white font-avenir text-[18px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px]">
                Esta experiencia surge en el marco del proyecto “Niño del Cerro El Plomo: Patrimonio cultural nacional”,
                diseñado y ejecutado por la <strong>Corporación Cultural de Lo Barnechea</strong> y que considera
                diversas estrategias para la divulgación y valoración de este hallazgo arqueológico, tanto en la comuna
                de Lo Barnechea como en el resto del país.</h3>

            <h3 class="text-center font-normal text-white font-avenir text-[18px] leading-[30px] pt-[15px] md:text-[18px] md:leading-[28px] md:pt-[10px] xl:text-[19px] xl:leading-[30px] xl:pt-[15px] 2xl:text-[25px] 2xl:leading-[40px] 2xl:pt-[26px]">
                El proyecto cuenta con el apoyo del <strong>Museo Nacional de Historia Natural y la Facultad de
                    Comunicaciones de la Universidad Católica de Chile.</strong></h3>

            <div class="flex flex-row items-center justify-center pt-[40px] md:pt-[40px] xl:pt-[60px] 2xl:pt-[90px]">
                <a class="font-avenir items-center text-[#621416] bg-[#d9c1ab] md:bg-transparent md:text-[#d9c1ab] text-[18px] md:text-[17px] xl:text-[18px] md:border-[1.5px] md:border-[#d9c1ab] py-[10px] md:py-[12px] xl:py-[14px] px-[30px] md:px-[36px] xl:px-[40px] rounded-[26px] hover:bg-[#d9c1ab] hover:text-[#621416] tracking-[0.1em]"
                   href="#"
                   target="_blank">CONOCE MÁS</a>
            </div>

        </div>
        <div class="icono-2 md:w-3/12">
            <img alt="Icono 3" class="md:pt-[150px] xl:pt-[200px] 2xl:pt-[380px]" src="assets/img/img-03.png">
        </div>
    </div>
</section>

<!-- SECTION LA EXPERIENCIA -->

<section
        class="bg-cover bg-bottom bg-no-repeat bg-laexperiencia py-[50px] md:bg-laexperiencia md:py-[40px] xl:py-[70px] 2xl:py-[160px]">
    <div class="container mx-auto px-[40px] md:px-0">
        <div class="flex flex-col items-center">
            <img alt="" class="w-[70%] md:w-[22%] xl:w-[26%] 2xl:w-[30%]" src="assets/img/condor.png">
            <div class="md:w-12/12">
                <h3 class="text-[#d9c1ab] font-avenir font-medium text-[26px] tracking-[0.2em] md:text-[30px] xl:text-[36px] md:tracking-[0.2em] 2xl:text-[40px]">
                    LA
                    EXPERIENCIA</h3>
            </div>
            <div class="mt-[20px] md:mt-[20px] md:w-7/12 xl:mt-[36px] 2xl:mt-[42px]">
                <h3 class="text-center font-normal text-white font-avenir text-[18px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px]">
                    La experiencia virtual está orientada a público general, con especial foco en niños y niñas. El
                    recorrido simula la <strong>ascensión al cerro El Plomo</strong>, transportando al usuario a
                    distintos puntos de la ruta. En cada uno de ellos se aborda, mediante recursos informativos, videos
                    animados y juegos interactivos, una temática en particular sobre la cultura y cosmovisión inca,
                    hasta llegar a conocer en la cumbre al Niño del Cerro El Plomo.
                </h3>
            </div>
            <div class="flex flex-row items-center justify-center pt-[30px] md:pt-[30px] xl:pt-[50px] 2xl:pt-[90px]">
                <a class="font-avenir items-center text-[#621416] bg-[#d9c1ab] md:bg-transparent md:text-[#d9c1ab] text-[18px] md:text-[17px] xl:text-[18px] md:border-[1.5px] md:border-[#d9c1ab] py-[10px] md:py-[12px] xl:py-[14px] px-[30px] md:px-[36px] xl:px-[40px] rounded-[26px] hover:bg-[#d9c1ab] hover:text-[#621416] tracking-[0.1em]"
                   href="#"
                   target="_blank">CONOCE MÁS</a>
            </div>
            <div class="flex flex-col items-center justify-center pt-[30px] md:pt-[30px] xl:pt-[50px] 2xl:pt-[90px]">
                <p class="font-avenir text-[#ffffff] font-normal text-[16px] leading-[24px] text-center md:leading-[40px] md:text-[18px] 2xl:text-[20px]  ">* El fabricante recomienda que el uso de los lentes de realidad virtual sea para personas mayores de 13 años.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION GALLERIA -->

<section class="h-screen bg-cover bg-bottom bg-no-repeat bg-galleria md:bg-galleria md:h-screen">
    <div class="container mx-auto">
        <div class="flex h-screen flex-col items-center justify-center md:h-screen">
            <img alt="Icono 360" class="w-[100px] md:w-[110px] xl:w-[130px]" src="assets/img/icono360.svg">
            <a class="font-avenir items-center text-[#812C27] md:text-[#ffffff] text-[18px] md:text-[17px] xl:text-[18px] mt-[40px] md:mt-[30px] xl:mt-[40px] bg-[#D2BBA6] md:bg-transparent md:border-[1.5px] md:border-[#ffffff] py-[10px] md:py-[12px] xl:py-[14px] px-[30px] md:px-[36px] xl:px-[40px] rounded-[26px] hover:bg-[#812C27] hover:border-[#812C27] hover:text-[#ffffff] tracking-[0.1em]"
               href="/360/index.htm">GALERÍA 360°</a>

        </div>
    </div>
</section>

<!-- PRE-FOOTER & FOOTER -->
<?php include 'assets/layout/footer.php';?>

</body>
</html>