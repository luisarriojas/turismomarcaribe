<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Full Day de Snorkeling (Parque Nacional Morrocoy)";

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
                    En Turismo Mar Caribe, C.A. proporciona permanentemente paseos “Full Day” con actividades acuáticas como el snorkeling en el Parque Nacional Morrocoy. Nuestro tour guiado comprende visitas a varios arrecifes coralinos de ésta gran geografía marina, donde Ud. vivirá una experiencia inolvidable,  fotografiando y observando peces marinos tropicales, tales como damiselas, cirujanos, peces ángeles, mariposas, tortugas marinas, entre otras especies,  que con su gran variedad de colores conforman un jardín submarino. Si lo prefiere, Ud. podrá alimentar a estas especies desde la palma de su mano. En Turismo Mar Caribe, C.A. estamos comprometidos con el medio ambiente acuático principalmente, y es por ello que damos gran importancia a la conservación de nuestros parques nacionales. De este modo, durante este tour guiado se proveerá de información muy enriquecedora acerca de nuestra fauna marina venezolana y como contribuir a su conservación.
                </p>

                h2 class="packH2">El tour consiste en:</h2>
                <ul class="packUL">
                    <li>
                        Embarque a las 9:00 a.m. desde uno de los muelles de la población de Tucacas, Estado Falcón. También se ofrece el servicio de transporte ejecutivo desde Valencia con aire acondicionado, butacas confortables, MP3 (Costo opcional).
                    </li>
                    <li>
                        Tour guiado por personal bilingüe (español/inglés).
                    </li>
                    <li>
                        Paseo en lancha de fibra de vidrio por los principales cayos del Parque Nacional Morrocoy con paradas para hacer snorkeling en los arrecifes coralinos designados.
                    </li>
                    <li>
                        Suministro del equipo de snorkeling.
                    </li>
                    <li>
                        Estancia en una playa seleccionada por los clientes para tomar un baño de playa.
                    </li>
                    <li>
                        Toldos y sillas plegables playeras
                    </li>
                    <li>
                        Almuerzo, agua mineral, hielo y refrescos (no se suministran bebidas alcohólicas).
                    </li>
                    <li>
                        Retorno a tierra firme a las 4:00 p.m.
                    </li>
                </ul>

                <p class="packP">
                    NOTA: Todas nuestras embarcaciones son fabricadas en fibra de vidrio y cumplen con todas las regulaciones del Instituto Nacional de los Espacios Acuáticos en cuanto a seguridad marítima se refiere (Marinero con licencia de patrón deportivo, chalecos salvavidas, radio, señales de emergencia, guía entrenado para primeros auxilios, kit de primeros auxilios, etc.).
                </p>
            </div>

            <div class="packAlert">
                <p class="packP">
                    REQUISITO: Es requerido saber nadar.
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
                $base = "tour-parque-nacional-morrocoy-full-day-snorkeling";
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