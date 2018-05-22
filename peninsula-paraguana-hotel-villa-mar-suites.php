<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Hotel Villa Mar Suites - Punto Fijo (3&#9733;)";

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
                    El Hotel Villa Mar Suites está ubicado a 5 minutos de la zona libre y a sólo 25 minutos de nuestra hermosa playa Villa Marina, en la Urb. Santa Irene de Punto Fijo, Estado Falcón. El hotel ofrece cómodas habitaciones sencillas, dobles  y triples en apartamentos y cabañas. Disfrute del confort y la seguridad de nuestras instalaciones. Además, Ud. podrá realizar sus compras y visitar las hermosas playas que solo la Península de Paraguaná puede ofrecer.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Habitaciones sencillas, dobles y triples
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Baño con ducha
                    </li>
                    <li>
                        Agua caliente
                    </li>
                    <li>
                        TV por cable
                    </li>
                    <li>
                        Secador de cabello
                    </li>
                    <li>
                        Restaurant
                    </li>
                    <li>
                        Bar y Pool Bar
                    </li>
                    <li>
                        Piscina
                    </li>
                    <li>
                        Servicio de taxi
                    </li>
                    <li>
                        Servicio de lavandería y tintorería
                    </li>
                    <li>
                        Estacionamiento y seguridad privada
                    </li>
                    <li>
                        Internet Wifi
                    </li>
                    <li>
                        Salón de eventos
                    </li>
                    <li>
                        Servicios en las habitaciones
                    </li>
                    <li>
                        Ubicado en la zona de Libre Comercio de Paraguaná.
                    </li>
                </ul>
            </div>

            <div class="packAlert">
                <p class="packP">
                    Los precios incluyen desayuno.
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
                $base = "hotel-villa-mar-suites";
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