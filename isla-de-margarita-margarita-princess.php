<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Margarita Princess (4&#9733;)";

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
                    El Hotel Margarita Princess está ubicado en la Avenida 4 de Mayo y muy cercano a la Avenida Santiago mariño, en el área perimetral de los centros comerciales tradicionales de la Isla de Margarita, tales como C.C. Rattan, C.C. Galerías, C.C. Jumbo, restaurantes y tiendas de afamadas marcas.
                </p>

                <p class="packP">
                    El Hotel Margarita Princess está ideado para todo tipo de viajeros, nacionales e internacionales para que puedan disfrutar de la isla. Está solo a pocos minutos de Playa Bella Vista, La Caracola y muchas otras.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        4 Suites, 4 pent-houses, 16 Familiares, 14 estándar y 4 ejecutivas con capacidad máxima hasta 6 personas, con 2 baños y 2 ambientes, equipadas con nevera,  jacuzzi, bañera, secador de pelo, teléfono con discado directo y auxiliar en el baño,  DirecTV, aire acondicionado central, agua caliente, balcón con vista a la Avenida 4 de Mayo o a la piscina y caja de seguridad.
                    </li>
                    <li>
                        Centro de Internet en el lobby con servicio WiFi y fax.
                    </li>
                    <li>
                        Mini bar en el lobby.
                    </li>
                    <li>
                        Piscina.
                    </li>
                    <li>
                        Lavandería.
                    </li>
                    <li>
                        2 salones de conferencias.
                    </li>
                    <li>
                        Estacionamiento.
                    </li>
                    <li>
                        Línea de taxi.
                    </li>
                    <li>
                        Vigilancia las 24 horas.
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
                $base = "hotel-margarita-princess";
                $q = 6;

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