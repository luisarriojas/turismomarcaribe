<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Sunsol Hotel Isla Caribe - Playa El Tirano (4&#9733;)";

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
                    El SUNSOL HOTEL ISLA CARIBE le ofrece en la Isla de Margarita, en Playa El Tirano, una excelente estadía con sus hermosas y amplias habitaciones.
                </p>

                <p class="packP">
                    Con su sistema TODO INCLUIDO este complejo hotelero, de categoría 4 estrellas, se encuentra a sólo 40 minutos del Aeropuerto Internacional  “Santiago Mariño”, a 20 minutos de los mejores centros comerciales y a tan sólo 5  minutos de Playa El Agua y Playa Parguito.
                </p>

                <p class="packP">
                    El complejo consta de tres diferentes áreas donde se fusionan el estilo caribeño con una arquitectura fresca y moderna como son Área Real, Área Tropical y Área de Cascada, todos con diferentes ambientes arquitectónicos.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Todas las habitaciones tienen una habitación principal con cama king size
                    <li>
                        Baño con ducha y closet
                    </li>
                    <li>
                        TV por cable
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Caja de seguridad
                    </li>
                    <li>
                        Secador de cabello
                    </li>
                    <li>
                        5 restaurantes
                    </li>
                    <li>
                        7 bares
                    </li>
                    <li>
                        3 piscinas
                    </li>
                    <li>
                        Teatro show musical
                    </li>
                    <li>
                        Discoteca
                    </li>
                    <li>
                        Parque infantil
                    </li>
                    <li>
                        Sala de juegos
                    </li>
                    <li>
                        Servicio WiFi y video juegos
                    </li>
                    <li>
                        Gimnasio
                    </li>
                    <li>
                        Servicio de masajes
                    </li>
                    <li>
                        Tiendas de mini market y souvenirs
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
                $base = "sunsol-hotel-isla-caribe";
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
