<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Hotel Las Palmas Inn (4&#9733;)";

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
                    Es un hotel ubicado en Punto Fijo que cuenta con 122 habitaciones y 4 suites de lujo, televisor LCD con cable, nevera ejecutiva, caja de seguridad, acceso a internet WiFi, piscinas, varios restaurantes, planta eléctrica, amplio estacionamiento, bodegón Zona Libre, vigilancia las 24 horas, salón de conferencias, salón de eventos, oficinas de negocios.
                </p>
            </div>

            <div class="packInfo">
                <?php
                include ("paquete-peninsula-paraguana-relacionados.php");
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
                $base = "hotel-las-palmas-inn";
                $q = 2;

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