<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Tour Full Day Parque Nacional Morrocoy (Tucacas)";

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
                    Turismo Mar Caribe, C.A. lo llevará al Parque Nacional Morrocoy, ubicado en el Estado Falcón, Venezuela, saliendo de la población de Tucacas donde le permitirá explorar uno de nuestros más hermosos parques nacionales. En el mismo podrá disfrutar de una ecología marina llena de especies acuáticas que solo el Mar Caribe puede ofrecer. Además, verá y estará en las islas más bellas de nuestra encantadora Venezuela. Podrá practicar cualquier actividad acuática que desee.
                </p>

                <h2 class="packH2">El tour consiste en:</h2>

                <ul class="packUL">
                    <li>
                        Embarque a las 9:00 a.m. desde uno de los muelles de la población de Tucacas, estado Falcón. Tour guiado por personal bilingüe (español/inglés) por todo el paseo (también se ofrece el servicio de transporte ejecutivo desde Valencia con aire acondicionado, butacas confortables, MP3, con capacidad máxima de 12 personas).
                    </li>
                    <li>
                        Paseo en lancha de fibra de vidrio por  los cayos Boca Los Pájaros, Paiclá, Playa Mero, Playuela y Boca Seca con estancia en una playa seleccionada por los clientes.
                    </li>
                    <li>
                        Toldos y sillas plegables playeras
                    </li>
                    <li>
                        Almuerzo, agua mineral, hielo y refrescos (no se suministra bebidas alcohólicas).
                    </li>
                    <li>
                        Retorno a tierra firme a las 4:00 p.m.
                    </li>
                </ul>

                <p class="packP">
                    Todas nuestras embarcaciones son fabricadas en fibra de vidrio y cumplen con todas las regulaciones del Instituto Nacional de los Espacios Acuáticos en cuanto a seguridad marítima se refiere (marinero con licencia de patrón deportivo, chalecos salvavidas, radio, señales de emergencia, guía entrenado para primeros auxilios, kit de primeros auxilios, etc.).
                </p>
            </div>

            <div class="packAlert">
                <p class="packP">
                    Recomendaciones: gorra o sombrero, lentes de sol, bloqueador solar, zapatos de goma o sandalias, traje de baño, toalla.
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
                $base = "tour-parque-nacional-morrocoy-full-day-tucacas";
                $q = 5;

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