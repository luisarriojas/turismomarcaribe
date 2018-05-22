<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada El Paraíso Azul (SUPERIOR)";

    include ("metatags.php");

    include ("style-script.php");
    ?>
</head>
<body>
    <?php
    include ("google-analytics.php");

    include ("header.php");

    if (isset($_SESSION['error_message'])) {
        include ("error-message.php");
    }
    ?>

    <div id="packContainer">
        <div id="packColumn1">
            <div class="packInfo">
                <h1 id="packH1"><?php echo $metaTitle; ?></h1>

                <p class="packP">
                    Posada Paraíso Azul, es una posada tipo superior con capacidad para 22 personas, Cuenta con 8 habitaciones grandes y baños privados, 2 de las habitaciones tiene una cama adicional. Sus habitaciones cuentan con todos los servicios y comodidades.  También  cuenta con salón de descanso con televisión satelital y una hermosa terraza con living al aire libre, ideal para descansar de un soleado día de playa. Igualmente  tiene un restaurant al estilo mediterráneo donde podrá degustar exquisitos platos en la mejor compañía y con un ambiente espectacular.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Estadía en habitaciones sencillas, dobles y triples
                    </li>
                    <li>
                        Todas las habitaciones con aire acondicionado
                    </li>
                    <li>
                        Baño privado y lencería de primera calidad
                    </li>
                    <li>
                        Desayunos típicos y cenas inigualables en restaurante de la posada
                    </li>
                    <li>
                        Traslados diarios a los Cayos cercanos al Gran Roque
                    </li>
                    <li>
                        Visitas en zonas de interés en el Archipielago “ Los Roques”
                    </li>
                    <li>
                        Almuerzos servidos durante la permanencia en la playa
                    </li>
                    <li>
                        Cava con hielo , refrescos y agua mineral para la playa
                    </li>
                    <li>
                        Servicio de sillas y toldos
                    </li>
                    <li>
                        Tv satelital
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PLAN TODO INCLUIDO CON EXCURSIONES (2 DIAS/ 1 NOCHE)</span>
                        <br />
                        Incluye: alojamiento, 2 almuerzos, 1 desayuno, 1 cena y paseos a cayos cercanos.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA SIN EXCURSIONES</span>
                        <br />
                        Incluye: alojamiento, 2 almuerzos, 1 desayuno, 1 cena
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA + EXCURSION</span>
                        <br />
                        Incluye: alojamiento, 1 desayuno, 1 almuerzo tipo lunch box, 1 cena y paseo a cayo cercano.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA</span>
                        <br />
                        Incluye: alojamiento con desayuno, lunch box y cena.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION</span>
                        <br />
                        Incluye: alojamiento con desayuno y cena
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <?php
                include ("paquete-los-roques-relacionados.php");
                ?>
            </div>
        </div>

        <div id="packColumn2">
            <?php
            $formFull = TRUE;
            $formUrl = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
            include ("cotizador.php");
            ?>

            <div id="packPhotos">
                <?php
                $base = "posada-el-paraiso-azul";
                $q = 8;

                include ("album-fotos.php");
                ?>

                <div class="space"></div>
            </div>
        </div>

        <div class="space"></div>
    </div>

    <?php
    include ("footer.php");
    ?>
</body>