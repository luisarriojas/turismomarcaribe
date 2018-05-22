<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Hotel Coche Paradise - Isla de Coche (4&#9733;)";

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
                    Ubicado en Playa La Punta, Isla de Coche a sólo 20 minutos en lancha de la Isla Margarita. Hermoso hotel ideal para el descanso, la práctica del deporte y la aventura.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        65 habitaciones
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Caja de Seguridad
                    </li>
                    <li>
                        TV
                    </li>
                    <li>
                        Teléfono
                    </li>
                    <li>
                        Terraza Privada
                    </li>
                    <li>
                        Mini Nevera
                    </li>
                    <li>
                        Baño con ducha
                    </li>
                    <li>
                        1 Cancha de Tenis
                    </li>
                    <li>
                        Cancha de Mini Golf
                    </li>
                    <li>
                        Cancha de Bolas Criollas
                    </li>
                    <li>
                        Piscina para adultos y niños
                    </li>
                    <li>
                        Deportes acuáticos
                    </li>
                    <li>
                        Parque Infantil
                    </li>
                    <li>
                        Churuata para la realización de eventos y convenciones
                    </li>
                    <li>
                        Estacionamiento
                    </li>
                    <li>
                        Restaurant
                    </li>
                    <li>
                        Bar
                    </li>
                    <li>
                        Area Comercial
                    </li>
                </ul>

                <h2 class="packH2">Servicios todo incluido</h2>

                <ul class="packUL">
                    <li>
                        Traslados en Lancha desde El Yaque - Coche – El Yaque
                    </li>
                    <li>
                        Bebidas Nacionales
                    </li>
                    <li>
                        Todas las comidas
                    </li>
                    <li>
                        Actividades deportivas (Bicicleta, Kayac, Voleyball, etc)
                    </li>
                    <li>
                        Shows nocturnos (Sólo los Sábados)
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
                include ("paquete-isla-de-coche-relacionados.php");
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
                $base = "hotel-coche-paradise";
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