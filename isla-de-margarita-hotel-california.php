<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Hotel California (3&#9733;)";

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
                    El Hotel California está localizado en la Isla de Margarita, a tan solo 8 minutos del Aeropuerto Santiago Mariño, en Playa El Yaque, sitio muy conocido como uno de los mejores lugares para la práctica del Windsurfing y Kitesurfing.
                </p>

                <p class="packP">
                    Es un edificio de 4 pisos a una distancia de 50 metros de Playa El Yaque. Ofrece 1 suite panorámica (con 2 habitaciones), 46 habitaciones, con vista al mar o al jardín, todas equipadas con las siguientes comodidades.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Aire acondicionado central
                    <li>
                        Terraza
                    </li>
                    <li>
                        Baño con ducha
                    </li>
                    <li>
                        Teléfono
                    </li>
                    <li>
                        Caja de seguridad
                    </li>
                    <li>
                        TV con canales por satélite
                    </li>
                    <li>
                        Piscina con Jacuzzi
                    </li>
                    <li>
                        Restaurante Italiano y Bar
                    </li>
                    <li>
                        Servicio de Club de Playa en el Restaurante Rocco y Paolo (Costo adicional)
                    </li>
                    <li>
                        Estacionamiento privado
                    </li>
                    <li>
                        Vigilancia las 24 horas
                    </li>
                    <li>
                        Servicio de Internet
                    </li>
                    <li>
                        Depósito de kitesurfing a exclusiva disposición de sus huéspedes (gratuito)
                    </li>
                </ul>
            </div>

            <div class="packAlert">
                <p class="packP">
                    "NO INCLUYE BOLETO AEREO".
                </p>
                <p class="packP">
                    El pasaje aéreo se cotiza por separado.
                </p>
            </div>

            <div class="packInfo">
                <?php
                include ("paquete-isla-margarita-relacionados.php");
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
                $base = "hotel-california";
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