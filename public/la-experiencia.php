<!doctype html>
<html lang="es">
<?php include 'assets/layout/variables.php'; ?>

<head>
    <title><?php echo $titulo ?> | <?php echo $experiencia ?></title>
    <?php include 'assets/layout/head.php'; ?>
</head>

<body>

<!-- SECTION HEADER -->
<?php include 'assets/layout/header.php'; ?>
<!-- IMAGEN PRINCIPAL HOME -->

<section class="bg-cover bg-bottom bg-no-repeat z-[10] bg-la-experiencia mt-[-92px] md:bg-la-experiencia md:mt-[-100px] md:h-screen xl:mt-[-150px]">

    <div class="container mx-auto">
        <div class="flex flex-col justify-items-center align-middle items-center justify-center md:h-screen">
            <div class="md:w-10/12">
                <h3 class="text-[#d9c1ab] font-avenir font-medium text-center text-[28px] tracking-[0.2em] md:text-[30px] xl:text-[36px] md:tracking-[0.2em] 2xl:text-[40px] pt-[120px] pb-[30px] md:py-[40px]">LA EXPERIENCIA</h3>

                <p class="text-center font-normal text-white font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] px-[40px] md:px-0">La experiencia virtual simula la ascensión al cerro El Plomo, mediante un <strong>recorrido guiado por Kuntur,</strong> el espíritu de un cóndor que habita en el mundo celestial de los incas.</p>
                <p class="text-center font-normal text-white font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:pt-[20px] px-[40px] md:px-0 pb-[20px] md:pb-0">El recorrido está compuesto por <strong>6 estaciones</strong> que emplazan al usuario en distintos puntos de la ruta, mediante la utilización de fotografías en 360°. En cada una de estas paradas se aborda un tema en particular, transmitiendo distintos conocimientos sobre la cultura y cosmovisión inca, por medio de recursos informativos, videos animados y juegos interactivos. </p>
                <p class="text-center font-normal text-white font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:pt-[20px] px-[40px] md:px-0 pb-[20px] md:pb-0">Finalmente, el usuario logrará entender cómo fue que el Niño del cerro El Plomo llegó hasta la cumbre de la montaña y permaneció allí, casi inmutable por más de 500 años, hasta su descubrimiento. </p>
                <p class="text-center font-normal text-white font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:pt-[20px] px-[40px] md:px-0 pb-[40px] md:pb-0">A continuación, se presentan los contenidos educativos que se abordan en el recorrido.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#D2BBA6] py-[40px] md:py-[100px] 2xl:py-[120px]">
    <div class="container mx-auto">
        <div class="flex flex-col">

            <div class="mb-[40px] md:mb-[40px] px-[20px] md:px-0">
                <ul class="flex flex-wrap font-normal text-center font-avenir md:text-[22px] 2xl:text-[25px]" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="tab-estaciones" role="presentation">
                        <button class="inline-block py-4 md:py-4 px-[10px] md:px-[25px] 2xl:px-[40px] border-b-[6px]" id="estacionuno-tab" data-tabs-target="#estacionuno" type="button" role="tab" aria-controls="estacionuno" aria-selected="false">ESTACIÓN 1</button>
                    </li>
                    <li class="tab-estaciones" role="presentation">
                        <button class="inline-block py-4 md:py-4 px-[10px] md:px-[25px] 2xl:px-[40px] border-b-[6px]" id="estaciondos-tab" data-tabs-target="#estaciondos" type="button" role="tab" aria-controls="estaciondos" aria-selected="false">ESTACIÓN 2</button>
                    </li>
                    <li class="tab-estaciones" role="presentation">
                        <button class="inline-block py-4 md:py-4 px-[10px] md:px-[25px] 2xl:px-[40px] border-b-[6px]" id="estaciontres-tab" data-tabs-target="#estaciontres" type="button" role="tab" aria-controls="estaciontres" aria-selected="flase">ESTACIÓN 3</button>
                    </li>
                    <li class="tab-estaciones" role="presentation">
                        <button class="inline-block py-4 md:py-4 px-[10px] md:px-[25px] 2xl:px-[40px] border-b-[6px]" id="estacioncuatro-tab" data-tabs-target="#estacioncuatro" type="button" role="tab" aria-controls="estacioncuatro" aria-selected="false">ESTACIÓN 4</button>
                    </li>
                    <li class="tab-estaciones" role="presentation">
                        <button class="inline-block py-4 md:py-4 px-[10px] md:px-[25px] 2xl:px-[40px] border-b-[6px]" id="estacioncinco-tab" data-tabs-target="#estacioncinco" type="button" role="tab" aria-controls="estacioncinco" aria-selected="false">ESTACIÓN 5</button>
                    </li>
                    <li class="tab-estaciones" role="presentation">
                        <button class="inline-block py-4 md:py-4 px-[10px] md:px-[25px] 2xl:px-[40px] border-b-[6px]" id="estacionseis-tab" data-tabs-target="#estacionseis" type="button" role="tab" aria-controls="estacionseis" aria-selected="false">ESTACIÓN 6</button>
                    </li>
                </ul>
            </div>

            <hr class="block md:hidden mx-[20px] mb-[40px] bg-[#53171a] border-s-[1px] border-[#53171a]">

            <!-- CONTENIDO DE TABS -->
            <div id="myTabContent">
                <div class="hidden" id="estacionuno" role="tabpanel" aria-labelledby="estacionuno-tab">
                    <?php include 'assets/layout/estacionuno.php'?>
                </div>
                <div class="hidden" id="estaciondos" role="tabpanel" aria-labelledby="estaciondos-tab">
                    <?php include 'assets/layout/estaciondos.php'?>
                </div>
                <div class="hidden" id="estaciontres" role="tabpanel" aria-labelledby="estaciontres-tab">
                    <?php include 'assets/layout/estaciontres.php'?>
                </div>
                <div class="hidden" id="estacioncuatro" role="tabpanel" aria-labelledby="estacioncuatro-tab">
                    <?php include 'assets/layout/estacioncuatro.php'?>
                </div>

                <div class="hidden" id="estacioncinco" role="tabpanel" aria-labelledby="estacioncinco-tab">
                    <?php include 'assets/layout/estacioncinco.php'?>
                </div>

                <div class="hidden" id="estacionseis" role="tabpanel" aria-labelledby="estacionseis-tab">
                    <?php include 'assets/layout/estacionseis.php'?>
                </div>

            </div>

            <hr class="border-[#707070] border-s-[1px] bg-[#707070] opacity-80 mt-[60px]">

            <!-- Navigation buttons
            <div class="flex justify-between mt-4">
                <button class="btn-prev button" aria-label="Anterior">Anterior</button>
                <button class="btn-next button" aria-label="Siguiente">Siguiente</button>
            </div>-->

        </div>
    </div>
</section>

<!-- PRE-FOOTER & FOOTER -->
<?php include 'assets/layout/footer.php';?>

<!-- Asegúrate de tener jQuery incluido en tu proyecto -->

<script>
    // Al cargar la página, ocultamos los controles del video
    $('#vdEstacion3').attr('controls', false);
    $('#vdEstacion5').attr('controls', false);

    // ESTACIÓN 3.
    $(document).ready(function() {
        $('#playButtonEstacion3').on('click', function() {
            var video = document.getElementById('vdEstacion3');
            if (video.paused) {
                video.play();
                $(this).hide();
            }
        });

        $('#vdEstacion3').on('play', function() {
            $(this).attr('controls', true);
            $('#playButtonEstacion3').hide();
        });

        $('#vdEstacion3').on('pause', function() {
            $(this).attr('controls', false);
            $('#playButtonEstacion3').show();
        });
    });

    // ESTACIÓN 5.
    $(document).ready(function() {
        $('#playButtonEstacion5').on('click', function() {
            var video = document.getElementById('vdEstacion5');
            if (video.paused) {
                video.play();
                $(this).hide();
            }
        });

        $('#vdEstacion5').on('play', function() {
            $(this).attr('controls', true);
            $('#playButtonEstacion5').hide();
        });

        $('#vdEstacion5').on('pause', function() {
            $(this).attr('controls', false);
            $('#playButtonEstacion5').show();
        });
    });

</script>


</body>
</html>

