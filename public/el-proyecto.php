<!doctype html>
<html lang="es">
<?php include 'assets/layout/variables.php'; ?>

<head>
    <title><?php echo $titulo ?> | <?php echo $proyecto ?></title>
    <?php include 'assets/layout/head.php'; ?>
</head>

<body>

<!-- SECTION HEADER -->
<?php include 'assets/layout/header.php'; ?>
<!-- IMAGEN PRINCIPAL HOME -->

<!-- IMAGEN PRINCIPAL HOME -->
<section class="bg-cover bg-bottom bg-no-repeat z-[10] bg-elproyecto mt-[-92px] md:bg-elproyecto md:mt-[-100px] md:h-screen xl:mt-[-150px]">
    <div class="container mx-auto">
        <div class="flex flex-col justify-items-center align-middle items-center justify-center md:h-screen">
            <div class="md:w-10/12">
                <h3 class="text-[#d9c1ab] font-avenir font-medium text-center text-[28px] tracking-[0.2em] md:text-[30px] xl:text-[36px] md:tracking-[0.2em] 2xl:text-[40px] pt-[120px] pb-[30px] md:py-[40px]">EL PROYECTO</h3>
                <p class="text-center font-normal text-white font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] px-[40px]">La Corporación Cultural de Lo Barnechea es una entidad privada sin fines de lucro que tiene por misión trabajar para mejorar la calidad de vida y fomentar la integración social de las personas de la comuna, entregando experiencias culturales significativas, junto con contribuir a la educación, la formación integral y el desarrollo humano con una mirada transformadora y contemporánea, incorporando la identidad y tradición del territorio.</p>
                <p class="text-center font-normal text-white font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:pt-[20px] px-[40px] pb-[40px]">En este contexto y tomando dos ejes fundamentales para la comuna: <strong>relevar el patrimonio natural y generar experiencias innovadoras y de impacto,</strong> es que la Corporación Cultural de Lo Barnechea ha impulsado el proyecto “Niño del cerro El Plomo: patrimonio cultural nacional” que despliega diversas estrategias que se explican más adelante, relevando que el año 2024 se cumplen 70 años de su hallazgo.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#D2BBA6] pt-[60px] md:py-[100px] 2xl:py-[120px]">
    <div class="container mx-auto">
        <div class="flex flex-col justify-items-center align-middle items-center justify-center">
            <div class="md:w-10/12 2xl:w-8/12 px-[40px]">
                <p class="text-center font-normal text-[#141414] font-avenir text-[22px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px]">El proyecto contempla diversas iniciativas en diferentes etapas, comenzando en 2023 y proyectándose a futuro, con el objetivo de difundir la importancia de este hallazgo científico, antropológico y cultural tanto para la comuna de Lo Barnechea como para el país.</p>
                <p class="text-center font-bold text-[#141414] font-avenir text-[22px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[20px] md:pt-[20px]">Para este plan, la Corporación Cultural de Lo Barnechea formalizó alianzas con dos importantes instituciones:</p>
            </div>
        </div>
    </div>
    <!-- ITEMS MUSEO Y FACULTAD EN DESKTOP -->
    <div class="container mx-auto md:mt-[70px] hidden md:block">
        <div class="grid md:grid-cols-2">
            <div class="md:mx-[15px]">
                <div class="flex flex-col md:bg-[#53171A] justify-items-center align-middle items-center justify-center md:h-[550px] 2xl:h-[650px] md:cursor-pointer" onmouseover="mostrarMuseo()" id="frontmuseo">
                    <img src="assets/img/logo-museo.svg" alt="Museo Nacional de Historia Natural" class="md:h-[180px]">
                </div>
                <div class="flex flex-col md:bg-[#c5ab98] md:pt-[90px] 2xl:pt-[110px] md:px-[40px] md:h-[550px] 2xl:h-[650px] md:cursor-pointer md:hidden" onmouseout="mostrarFrontMuseo()" id="museo">
                    <h3 class="text-center font-bold uppercase font-avenir text-[#53171A] text-[18px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px]">MUSEO NACIONAL <br>DE HISTORIA NATURAL</h3>
                    <p class="text-center font-normal text-[#141414] font-avenir text-[18px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] md:pt-[30px]">Institución que conserva el cuerpo del Niño del cerro El Plomo desde su llegada al Museo en 1954 en una cámara de frío, que fluctúa entre -2 y -4 grados Celsius con una humedad constante en torno al 40 y 45%. Desde entonces, han custodiado y estudiado al Niño y su contexto, siendo la institución que más sabe del hallazgo y con más investigaciones a su haber.</p>
                </div>
            </div>

            <div class="md:mx-[15px]">
                <div class="flex flex-col md:bg-[#53171A] justify-items-center align-middle items-center justify-center md:h-[550px] 2xl:h-[650px]" id="frontfacultad" onmouseover="mostrarFacultad()">
                    <img src="assets/img/logo-facultad.svg" alt="Facultad de Comunicaciones Pontificia" class="md:h-[100px]">
                </div>

                <div class="flex flex-col md:bg-[#c5ab98] md:pt-[80px] md:px-[40px] md:h-[550px] 2xl:h-[650px] md:cursor-pointer md:hidden" id="facultad" onmouseout="mostrarFrontFacultad()">
                    <h3 class="text-center font-bold uppercase font-avenir text-[#53171A] text-[18px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px]">Pontificia Universidad Católica de <br>Chile, a través de su Facultad de <br>Comunicaciones</h3>
                    <p class="text-center font-normal text-[#141414] font-avenir text-[18px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] md:pt-[30px]">La cual por más de cinco años, con un equipo conformado por profesores, exalumnos y colaboradores de la Facultad de Comunicaciones de la Universidad Católica, ha unido sus esfuerzos para dar vida a producciones audiovisuales que acercan la historia del Niño del cerro el Plomo a diferentes públicos, narrando a través del lenguaje audiovisual la vida del Niño, la sociedad en la que vivió y el camino que recorrió.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ITEM MUSEO Y FACULTAD EN MOBILE -->

    <div class="container mx-auto block md:hidden py-[40px] bg-[#D2BBA6]">
        <div class="flex flex-col justify-items-center align-middle items-center justify-center">
            <div class="flex flex-col px-[40px] mt-[30px] bg-[#c5ab98] py-[20px] mx-[20px]">
                <img src="assets/img/logo-museo.svg" alt="Museo Nacional de Historia Natural" class="md:h-[100px] mt-[40px]">
                <h3 class="text-center font-bold uppercase font-avenir text-[#53171A] text-[22px] leading-[35px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] py-[20px]">MUSEO NACIONAL <br>DE HISTORIA NATURAL</h3>
                <p class="text-center font-normal text-[#141414] font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] pb-[40px] md:pt-[30px]">Institución que conserva el cuerpo del Niño del cerro El Plomo desde su llegada al Museo en 1954 en una cámara de frío, que fluctúa entre -2 y -4 grados Celsius con una humedad constante en torno al 40 y 45%. Desde entonces, han custodiado y estudiado al Niño y su contexto, siendo la institución que más sabe del hallazgo y con más investigaciones a su haber.</p>
            </div>
            <div class="flex flex-col px-[40px] mt-[30px] bg-[#c5ab98] py-[20px] mx-[20px]">
                <img src="assets/img/logo-facultad.svg" alt="Facultad de Comunicaciones Pontificia" class="md:h-[100px] mt-[40px]">
                <h3 class="text-center font-bold uppercase font-avenir text-[#53171A] text-[22px] leading-[35px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] py-[20px]">Pontificia Universidad Católica de Chile, a través de su Facultad de Comunicaciones</h3>
                <p class="text-center font-normal text-[#141414] font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] pb-[40px] md:pt-[30px]">La cual por más de cinco años, con un equipo conformado por profesores, exalumnos y colaboradores de la Facultad de Comunicaciones de la Universidad Católica, ha unido sus esfuerzos para dar vida a producciones audiovisuales que acercan la historia del Niño del Cerro el Plomo a diferentes públicos, narrando a través del lenguaje audiovisual la vida del Niño, la sociedad en la que vivió y el camino que recorrió. </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#53171A] md:bg-[#53171A] py-[80px] md:py-[100px] 2xl:py-[120px]">
    <div class="container mx-auto">
        <div class="flex flex-col justify-items-center align-middle items-center justify-center">
            <h4 class="text-center font-avenir text-[#d2bba6] font-bold md:shadow-[0, 0, 0, 0.16] text-[28px] md:text-[28px] md:leading-[36px] 2xl:text-[35px] 2xl:leading-[45px] pb-[80px] md:pb-[100px] 2xl:pb-[120px]">¿Qué acciones considera el proyecto <br>
                “Niño del cerro El Plomo: <br>
                Patrimonio cultural nacional”?</h4>
        </div>
        <!-- REALIDAD VIRTUAL -->
        <div class="container mx-auto">
            <div class="flex flex-col bg-[#101010] justify-items-center align-middle items-center justify-center md:h-[600px] 2xl:h-[750px] md:cursor-pointer" id="frontvirtual" onmouseover="mostrarVirtual()">
                <img class="md:w-[110px] 2xl:w-[140px] md:mb-[40px] 2xl:mb-[60px]" src="assets/img/icon-realidad.svg" alt="Realidad Virtual">
                <h4 class="font-avenir font-bold text-white md:text-[28px] md:leading-[36px] 2xl:text-[35px] 2xl:leading-[45px]">REALIDAD VIRTUAL</h4>
            </div>

            <div class="flex flex-col bg-[#101010] justify-items-center align-middle items-center justify-center px-[40px] py-[60px] md:px-[60px] 2xl:px-[100px] md:h-[600px] 2xl:h-[750px] md:cursor-pointer md:hidden" id="virtual" onmouseout="mostrarFrontVirtual()">
                <img class="w-[120px] md:w-[60px] 2xl:w-[80px] mb-[30px] md:mb-[40px] 2xl:mb-[60px]" src="assets/img/icon-realidad.svg" alt="Realidad Virtual">

                <h4 class="font-avenir font-bold text-white uppercase text-center text-[25px] leading-[35px] md:text-[28px] md:leading-[36px] 2xl:text-[35px] 2xl:leading-[45px] md:hidden">REALIDAD VIRTUAL</h4>

                <p class="text-center font-normal text-[#ffffff] font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:pt-[30px]">Acércate al Niño del cerro El Plomo: Es una experiencia educativa que se desarrolla sobre la base de la tecnología de realidad virtual, representando escenas que son creadas por un programa, lo que le permite al espectador una sensación realista, como si se encontrara en el lugar que es recreado. De esta manera, se crean los escenarios de la travesía de la Capacocha que ayudan a relevar la importancia del Niño y algunos antecedentes del Imperio Inca en términos científicos, históricos y simbólicos.</p>
            </div>
        </div>
        <!-- EXPOSICION -->
        <div class="container mx-auto mt-[40px] md:mt-[40px]">
            <div class="flex flex-col bg-[#101010] justify-items-center align-middle items-center justify-center md:h-[600px] 2xl:h-[750px] md:cursor-pointer" id="frontexposicion" onmouseover="mostrarExposicion()">
                <img class="md:w-[110px] 2xl:w-[140px] md:mb-[40px] 2xl:mb-[60px]" src="assets/img/icon-exposicion.svg" alt="Exposición">
                <h4 class="font-avenir font-bold text-white uppercase text-center md:text-[28px] md:leading-[36px] 2xl:text-[35px] 2xl:leading-[45px]">Exposición El Niño y El Plomo: <br>GUARDIANES TUTELARES</h4>
            </div>

            <div class="flex flex-col bg-[#101010] justify-items-center align-middle items-center justify-center px-[40px] py-[60px] md:px-[60px] 2xl:px-[100px] md:h-[600px] 2xl:h-[750px] md:cursor-pointer md:hidden" id="exposicion" onmouseout="mostrarFrontExposicion()">
                <img class="w-[140px] md:w-[60px] 2xl:w-[80px] mb-[30px] md:mb-[40px] 2xl:mb-[60px]" src="assets/img/icon-exposicion.svg" alt="Exposición">

                <h4 class="font-avenir font-bold text-white uppercase text-center text-[25px] leading-[35px] md:text-[28px] md:leading-[36px] 2xl:text-[35px] 2xl:leading-[45px] md:hidden">Exposición El Niño y El Plomo: <br>GUARDIANES TUTELARES</h4>

                <p class="text-center font-normal text-[#ffffff] font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:pt-[30px]">Exposición desarrollada  en el Centro Cívico de Lo Barnechea, entre mayo y octubre de 2023. Su fin es divulgar la relevancia y trascendencia del hallazgo del Niño del cerro El Plomo. A partir de esta exposición, se proyecta la intención de levantar un museo de sitio en el Refugio Von Kiesling, inserto en el Santuario de la Naturaleza Parque Yerba Loca. Este refugio tiene una vista privilegiada hacia el cerro El Plomo y se proyecta como un espacio que además de promover el patrimonio natural y el deporte, puede difundir la historia del Niño del cerro El Plomo desde una perspectiva antropológica, social, espiritual y cultural.</p>
            </div>
        </div>
        <!-- LIBRO -->
        <div class="container mx-auto mt-[40px] md:mt-[40px]">
            <div class="flex flex-col bg-[#101010] justify-items-center align-middle items-center justify-center md:h-[600px] 2xl:h-[750px] md:cursor-pointer" id="frontlibro" onmouseover="mostrarLibro()">
                <img class="md:w-[110px] 2xl:w-[140px] md:mb-[40px] 2xl:mb-[60px]" src="assets/img/icono-libro.svg" alt="Libro el niño el plomo">
                <h4 class="font-avenir font-bold text-white uppercase text-center md:text-[28px] md:leading-[36px] 2xl:text-[35px] 2xl:leading-[45px]">LIBRO El NIÑO EL PLOMO</h4>
                <p class="text-center font-normal text-[#ffffff] font-avenir text-[18px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] md:pt-[30px]">(Material provisto por el Museo Natural de Historia Natural <br>y edición de ediciones UC proyectado para el año 2024)</p>
            </div>

            <div class="flex flex-col bg-[#101010] justify-items-center align-middle items-center justify-center px-[40px] py-[60px] md:px-[60px] 2xl:px-[100px] md:h-[600px] 2xl:h-[750px] md:cursor-pointer md:hidden" id="libro" onmouseout="mostrarFrontLibro()">
                <img class="w-[140px] md:w-[60px] 2xl:w-[80px] mb-[30px] md:mb-[40px] 2xl:mb-[60px]" src="assets/img/icono-libro.svg" alt="Libro el niño el plomo">

                <h4 class="font-avenir font-bold text-white uppercase text-center text-[25px] leading-[35px] md:text-[28px] md:leading-[36px] 2xl:text-[35px] 2xl:leading-[45px] md:hidden">LIBRO El NIÑO EL PLOMO</h4>

                <p class="text-center font-normal text-[#ffffff] font-avenir text-[20px] leading-[30px] italic md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:hidden">(Material provisto por el Museo Natural de Historia Natural <br>y edición de ediciones UC proyectado para el año 2024)</p>

                <p class="text-center font-normal text-[#ffffff] font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:pt-[30px]">El hallazgo del cuerpo del Niño del cerro El Plomo es sin duda un hito de relevancia mundial, no solo por haber sido el primer cuerpo de gran antigüedad encontrado en condiciones de conservación excepcionales, sino también porque constituye un reservorio de información biológica único sobre las poblaciones ancestrales de nuestro país, además de las claves históricas que nos proporciona este hallazgo. </p>
                <p class="text-center font-normal text-[#ffffff] font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:pt-[30px]">La magnífica preservación de los tejidos corporales ha permitido que, a lo largo de casi siete décadas, el cuerpo todavía siga entregando información relevante, la que ha sido posible recuperar gracias a los continuos avances tecnológicos en biomedicina. El Museo Nacional de Historia Natural ha ido realizando, en un transcurso de varios años, distintas investigaciones a partir de estos restos bioantropológicos. Muchas de ellas ya han sido publicadas en revistas de investigación científica y difundidas por los diversos canales de divulgación del Museo, del mismo modo, hay otras que están en procesos de revisión para ser presentadas en el futuro.</p>
            </div>
        </div>
        <!-- OBRA -->
        <div class="container mx-auto mt-[40px] md:mt-[40px]">
            <div class="flex flex-col bg-[#101010] justify-items-center align-middle items-center justify-center md:h-[600px] 2xl:h-[750px] md:cursor-pointer" id="frontobra" onmouseover="mostrarObra()">
                <img class="md:w-[110px] 2xl:w-[140px] md:mb-[40px] 2xl:mb-[60px]" src="assets/img/icon-obra.svg" alt="Obra de Teatro">
                <h4 class="font-avenir font-bold text-white uppercase text-center md:text-[28px] md:leading-[36px] 2xl:text-[35px] 2xl:leading-[45px]">Obra de teatro Canta Cuento: <br>Niño del cerro El Plomo</h4>
            </div>

            <div class="flex flex-col bg-[#101010] justify-items-center align-middle items-center justify-center px-[40px] py-[60px] md:px-[60px] 2xl:px-[100px] md:h-[600px] 2xl:h-[750px] md:cursor-pointer md:hidden" id="obra" onmouseout="mostrarFrontObra()">
                <img class="w-[140px] md:w-[60px] 2xl:w-[80px] mb-[30px] md:mb-[40px] 2xl:mb-[60px]" src="assets/img/icon-obra.svg" alt="Obra de Teatro">

                <h4 class="font-avenir font-bold text-white uppercase text-center text-[25px] leading-[35px] md:text-[28px] md:leading-[36px] 2xl:text-[35px] 2xl:leading-[45px] md:hidden">Obra de teatro Canta Cuento: <br>Niño del cerro El Plomo</h4>

                <p class="text-center font-normal text-[#ffffff] font-avenir text-[20px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px] pt-[30px] md:pt-[30px]">Con la intención de abordar el tema del Niño del cerro El Plomo desde las artes escénicas, la Corporación Cultural de Lo Barnechea, junto a la compañía Tryo Teatro Banda, proyectan para el 2024 la realización de “Canta Cuento: Niño del cerro El Plomo”, espectáculo de teatro musical que cuenta la historia del Niño del Plomo, desde sus orígenes dentro de la cultura Inca dominante en el valle del Río Mapocho durante el siglo XV hasta su hallazgo casual por unos buscadores de tesoros en el siglo XX, y la profunda significación que hoy tiene para la identidad chilena.</p>
            </div>
        </div>

        <div class="flex flex-col justify-items-center align-middle items-center justify-center pt-[80px] px-[40px] md:pt-[100px] 2xl:pt-[120px]">
            <p class="text-center font-normal text-[#D2BBA6] font-avenir text-[20px] leading-[28px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px]">Mayor información a <a class="font-bold" href="mailto:patrimonio@cclb.cl">patrimonio@cclb.cl</a></p>
        </div>
    </div>

</section>

<!-- PRE-FOOTER & FOOTER -->
<?php include 'assets/layout/footer.php';?>
<script src="assets/js/mostrar.js"></script>

</body>
</html>

