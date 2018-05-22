<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada Malibú (VIP)";

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
                    La posada tiene una arquitectura mediterránea donde se sirve la comida en el patio interno observando el cielo. Las paredes blancas imperan como contraste entre el marco amplio de techo abierto con vista al cielo azul,  entre los jardines internos y las vigas de madera de árbol de teca traídas desde Cojedes para instalarse en tierra roqueña y servir de soporte a este bello lugar. Su especialidad culinaria es la comida mediterránea y venezolana.
                </p>

                <p class="packP">
                    Disponemos de habitaciones de diferentes tipos: Matrimoniales, Triples, Cuádruples, todas con baño privado, ventiladores de techo y casi todas con aire acondicionado: Además tiene a la disposición de los huéspedes una terraza espaciosa y acogedoras con áreas comunes. Nuestra amplia experiencia como posada de luxe, nos distingue por la calidad de servicio particularmente atento a cada pequeño detalle, ofreciendo también la posibilidad de reservar con exclusividad cualquier servicio adicional.
                </p>

                <p class="packP">
                    La posada cuenta con una bella embarcación propia y ofrecemos excursiones a los cayos cercanos, con servicio de sillas y sombrilla en la playa.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Habitaciones matrimoniales, triples y cuádruples
                    </li>
                    <li>
                        Baño Privado
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Ventiladores
                    </li>
                    <li>
                        Restaurant
                    </li>
                    <li>
                        Excursiones a los cayos en lancha propia
                    </li>
                    <li>
                        Servicio de sillas y toldos
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS/ 1 NOCHE</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">3 DIAS/ 2 NOCHES</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA SIN EXCURSIONES</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION (SOLO ALOJAMIENTO)</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED AND BREAKFAST (ALOJAMIENTO Y DESAYUNO)</span>
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
                $base = "posada-malibu";
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