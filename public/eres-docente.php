<!doctype html>
<html lang="es">
<?php include 'assets/layout/variables.php'; ?>

<head>
    <?php include 'assets/layout/head.php'; ?>
    <title><?php echo $titulo ?> | <?php echo $docente ?></title>
</head>

<body>

<!-- SECTION HEADER -->
<?php include 'assets/layout/header.php'; ?>
<!-- IMAGEN PRINCIPAL HOME -->

<section class="h-screen bg-cover bg-bottom bg-no-repeat z-[10] bg-docente mt-[-92px] md:bg-docente md:mt-[-100px] md:h-screen xl:mt-[-150px] ">
    <div class="flex flex-col justify-items-center align-middle items-center justify-center h-screen">
        <h1 class="font-avenir text-center text-white font-bold md:text-[52px] 2xl:text-[65px] md:leading-[60px] 2xl:leading-[76px] shadow-[0, 0, 0, 0.16]">¿Eres docente y quieres <br>tener la experiencia virtual <br>con tu curso?</h1>
    </div>
</section>

<section class="bg-[#D2BBA6] md:py-[70px] 2xl:py-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center justify-items-center">
            <div class="flex flex-col items-center md:w-8/12 md:w-9/12">
                <p class="text-center font-avenir font-normal text-[#141414] md:text-[18px] md:leading-[32px] 2xl:text-[25px] 2xl:leading-[38px]"><strong>“Acércate al Niño del cerro El Plomo”</strong> es una experiencia educativa desarrollada en realidad virtual, recreando los escenarios de la travesía de la Capacocha. Con ella, buscamos relevar la importancia del Niño y algunos antecedentes del Imperio Inca en términos científicos, históricos y simbólicos. </p>
                <p class="text-center font-avenir font-normal text-[#141414] md:text-[18px] md:leading-[32px] 2xl:text-[25px] 2xl:leading-[38px] md:mt-[30px]">Durante la experiencia, los participantes podrán adentrarse en una aventura que los llevará a entender la sacralidad de la montaña. La experiencia es individual y considera el uso de un visor y dos joysticks para que puedan interactuar con los contenidos allí expuestos.</p>
                <p class="text-center font-avenir font-normal text-[#141414] md:text-[18px] md:leading-[32px] 2xl:text-[25px] 2xl:leading-[38px] md:mt-[30px]"><strong>Si quieres que tu curso viva esta experiencia debes tener en cuenta lo siguiente:</strong></p>
            </div>
        </div>
    </div>
    <div class="container mx-auto md:py-[80px] 2xl:py-[100px]">
        <div class="flex flex-row items-center justify-center justify-items-center">
            <div class="flex flex-row items-center md:w-9/12">
                <div class="grid grid-cols-2 gap-2">
                    <div class="flex flex-row items-start">
                        <img class="md:w-[100px]" src="assets/img/reloj.svg" alt="reloj">
                        <p class="font-avenir font-normal text-[#141414] md:text-[18px] md:leading-[32px] 2xl:text-[25px] 2xl:leading-[38px] md:pl-[25px] md:pr-[10px]">La duración aproximada de la experiencia es de <strong>30 minutos.</strong></p>
                    </div>
                    <div class="flex flex-row items-start">
                        <img class="md:w-[100px]" src="assets/img/epilepsia.svg" alt="Epilepsia">
                        <p class="font-avenir font-normal text-[#141414] md:text-[18px] md:leading-[32px] 2xl:text-[25px] 2xl:leading-[38px] md:pl-[25px] md:pr-[10px]">La experiencia <strong>no es recomendable</strong> para personas con epilepsia o problemas de oído medio.</p>
                    </div>

                    <div class="flex flex-row mt-[40px] items-start">
                        <img class="md:w-[100px]" src="assets/img/grupos.svg" alt="Grupos">
                        <p class="font-avenir font-normal text-[#141414] md:text-[18px] md:leading-[32px] 2xl:text-[25px] 2xl:leading-[38px] md:pl-[25px] md:pr-[10px]">Tiene un <strong>tope de 30 inscritos</strong>, los cuales podrán acceder a la experiencia en 2 tandas de 15 personas. En el entretanto, los que esperan su turno tendrán una visita guiada por la exposición “El Niño y el Plomo, Guardianes Tutelares”.</p>
                    </div>
                    <div class="flex flex-row mt-[40px] items-start">
                        <img class="md:w-[100px] align-top" src="assets/img/edad.svg" alt="Edad">
                        <p class="font-avenir font-normal text-[#141414] md:text-[18px] md:leading-[32px] 2xl:text-[25px] 2xl:leading-[38px] md:pl-[25px] md:pr-[10px]">La actividad está <strong>recomendada para mayores de 13 años.</strong> Para excepciones debidamente justificadas, deberá firmar una autorización el tutor legal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#53171A] md:py-[70px] 2xl:py-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col align-middle items-center justify-center">
            <p class="font-avenir text-center text-[#D2BBA6] md:text-[18px] md:leading-[32px] 2xl:text-[25px] 2xl:leading-[38px] tracking-wide">Si deseas <strong>coordinar una visita</strong> con tu curso, puedes <br>comunicarte con Macarena Silva a través del siguiente <br>correo: <a href="mailto:msilva@cclb.cl" class="font-bold hover:text-white">msilva@cclb.cl</a> <br>¡Te esperamos!</p>
        </div>
    </div>
</section>

<!-- PRE-FOOTER & FOOTER -->
<?php include 'assets/layout/footer.php';?>

</body>
</html>


