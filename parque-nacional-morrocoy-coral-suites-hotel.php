<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Coral Suites Hotel & Spa - Chichiriviche (5&#9733;)";

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
                    Hotel Coral Suites ubicado en Chichiriviche, en el Estado Falcón, se ha convertido en una de las mejores opciones de hospedaje para los visitantes del Parque Nacional Morrocoy y sus playas.
                </p>

                <p class="packP">
                    Este hotel  fue edificado pensando en el total entretenimiento, relax y descanso de sus huéspedes, lo cual se puede ver reflejado en la cantidad de atracciones y servicios que ofrece para que sus visitantes puedan disfrutar durante su hospedaje en Morrocoy.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Todas y cada una de sus habitaciones, goza de los implementos necesarios para hacer su estadía lo más cómoda posible, de esta manera satisfacer los gustos y necesidades de sus visitantes.
                    </li>
                    <li>
                        Cuenta con habitaciones con capacidad para seis (6) personas y el equipamiento de cada una comprende televisor con control, nevera ejecutiva, camas queen, sofás cama y aire acondicionado.
                    </li>
                    <li>
                        En su restaurante tipo bufet podrá degustar de comida nacional e internacional, todo preparado por un esmerado equipo de cocina el cual le sorprenderá con un variado menú cada día de su estadía en Chichiriviche.
                    </li>
                    <li>
                        Dentro de la amplia piscina del Coral Suites disfrutará de un bar preparado para atenderle, sin detener su diversión, con una gran cantidad de bebidas para su elección. Además, dentro de la misma encontrará tobogán para la diversión de los más pequeños.
                    </li>
                    <li>
                        Canchas multiples (tennis, basket, volleyball, football, ping pong).
                    </li>
                    <li>
                        Salón de ejercicios.
                    </li>
                    <li>
                        Jardines y áreas de esparcimiento.
                    </li>
                    <li>
                        Tiendas.
                    </li>
                    <li>
                        Piscina para adultos y niños.
                    </li>
                    <li>
                        Información turística.
                    </li>
                    <li>
                        Spa.
                    </li>
                    <li>
                        Caja de seguridad (no incluida).
                    </li>
                    <li>
                        Salones de conferencias.
                    </li>
                    <li>
                        Animación y recreación, diurna y nocturna.
                    </li>
                </ul>

                <p class="packP">
                    Por esto y mucho más el Coral Suites se ha convertido en uno de los hoteles en Morrocoy más cotizados, que indudablemente usted no puede dejar de conocer durante sus vacaciones.
                </p>
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
                $base = "coral-suites-hotel";
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