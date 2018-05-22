<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Tour Full Day Parque Nacional Morrocoy (Chichiriviche)";

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
                    Turismo Mar Caribe, C.A. lo llevará al Parque Nacional Morrocoy, ubicado en el Estado Falcón, Venezuela, donde le permitirá explorar uno de nuestros más hermosos parques nacionales. En el mismo podrá disfrutar y estar en contacto con la ecología marina de la zona llena de especies acuáticas que solo el Mar Caribe puede ofrecer. Además, verá encantadores canales paradisíacos lleno de especies silvestres y bello paisaje acuático.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Itinerario</h2>

                <ul class="packUL">
                    <li>
                        Embarque a las 9:00 a.m. desde uno de los muelles de la población de Chichiriviche, Estado Falcón. Paseo guiado por personal bilingüe (español/inglés) por todo el paseo. También se ofrece el servicio de transporte turístico ejecutivo desde Valencia si el cliente lo requiere, con aire acondicionado, butacas confortables, MP3, con capacidad máxima de 12-15 personas (costo adicional).
                    </li>
                    <li>
                        Paseo en lancha por Cayo Pelón, Cayo Muerto, Cayo Peraza, Cayo Sal y Punta Varadero con estancia en una playa seleccionada por el cliente. Ofrecemos almuerzo tipo lunch box, (no se suministra bebidas alcohólicas).
                    </li>
                    <li>
                        Retorno a tierra firme a las 4:00 p.m.
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Recorrido en lancha/ peñero por todo el Parque Nacional Morrocoy, sector Chichiriviche.
                    </li>
                    <li>
                        Paseo guiado por personal bilingüe.
                    </li>
                    <li>
                        Estancia en una isla de preferencia por el cliente
                    </li>
                    <li>
                        Almuerzo tipo lunch box, snacks, agua mineral, refrescos y hielo.
                    </li>
                    <li>
                        Toldos y sillas plegables playeras
                    </li>
                </ul>

                <p class="packP">
                    NOTA: Todas nuestras embarcaciones son fabricadas en fibra de vidrio y cumplen con las regulaciones del Instituto Nacional de los Espacios Acuáticos en cuanto a seguridad marítima se refiere (marinero con licencia de patrón deportivo, chalecos salvavidas, radio, señales de emergencia, guía entrenado para primeros auxilios, kit de primeros auxilios).
                </p>

                <p class="packP">
                    Recomendaciones para el paseo: Gorra o sombrero, lentes de sol, bloqueador solar, zapatos de goma o sandalias, traje de baño, toalla.
                </p>

            </div>

            <div class="packInfo">
                <?php
                include ("tour-parque-nacional-morrocoy-relacionados.php");
                ?>
            </div>
        </div>

        <div id="packColumn2">
            <?php
            $formUrl = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
            include ("cotizador.php");
            ?>

            <div id="packPhotos">
                <?php
                $base = "tour-parque-nacional-morrocoy-full-day-chichiriviche";
                $q = 4;

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