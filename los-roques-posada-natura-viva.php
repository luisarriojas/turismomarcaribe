<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada Natura Viva (VIP)";

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
                    Está ubicada a la orilla del mar y está conformada por 16 habitaciones con cama  King size, de las cuales tres son dobles con ático y una cama single, 12 habitaciones dobles y  1 junior suite con terraza privada y acceso directo a la playa. Para las excursiones a las islas, existe el servicio de cavas refrigeradas con comidas y bebidas frescas, gaseosas, igualmente sombrillas, sillas y toallas.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Teléfono con línea Internacional
                    </li>
                    <li>
                        Internet
                    </li>
                    <li>
                        Caja Fuerte
                    </li>
                    <li>
                        Baño privado
                    </li>
                    <li>
                        Ducha con agua caliente y agua fría
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Ventilador
                    </li>
                    <li>
                        Tv satelital
                    </li>
                    <li>
                        Nevera ejecutiva
                    </li>
                    <li>
                        Restaurant con comida italiana e internacional
                    </li>
                    <li>
                        Piano Bar
                    </li>
                    <li>
                        Boutique
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS/ 1 NOCHE</span>
                        <br />
                        Dia 1: traslado a isla cercana, almuerzo para la playa en lunch box, cena y alojamiento
                        <br />
                        Dia 2: desayuno, traslado a isla cercana y almuerzo para la playa en lunch box.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED & BREAKFAST/ NOCHE ADICIONAL</span>
                        <br />
                        Incluye: alojamiento y desayuno
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION</span>
                        <br />
                        Incluye: alojamiento con desayuno y cena
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA</span>
                        <br />
                        Incluye: alojamiento, desayuno, traslado a isla cercana, almuerzo en la playa en lunch box y cena
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <?php
                include ("paquete-los-roques-relacionados.php");
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
                $base = "posada-natura-viva";
                $q = 7;

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