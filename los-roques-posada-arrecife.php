<?php
ob_start('ob_gzhandler');
session_start();
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada Arrecife (VIP)";

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
                    Posada Arrecife refleja un ambiente caribeño, colonial y moderno; detalles de confort y elegancia impregnan sus amplias áreas comunes. La fachada es amplia y con floreados jardines de trinitarias durante todo el año. En el porche se encuentran distribuidas las mesas donde nuestros huéspedes degustan sus desayunos y cenas al aire libre, al mismo tiempo que se deleitan con los atardeceres, el aire fresco y el colorido del pueblo de Los Roques.
                </p>

                <p class="packP">
                    Las habitaciones de Posada Arrecife Los Roques preservan un estilo en su decoración, que integra al huésped con el mundo marítimo, y cada uno de los cuartos exhibe fotografías submarinas. Cada habitación cuenta con todos los servicios que se le pueden ofrecer a nuestros exclusivos visitantes.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Ventilador
                    </li>
                    <li>
                        Baño privado
                    </li>
                    <li>
                        Agua caliente
                    </li>
                    <li>
                        Televisión con señal DirecTV
                    </li>
                    <li>
                        Teléfono
                    </li>
                    <li>
                        Caja de seguridad
                    </li>
                    <li>
                        Internet
                    </li>
                    <li>
                        WiFi
                    </li>
                    <li>
                        Traslados a las islas
                    </li>
                    <li>
                        Sombrillas y sillas playeras
                    </li>
                    <li>
                        Planta eléctrica
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS / 1 NOCHE</span>
                        <br />
                        Incluye: alojamiento, 1 desayuno, 2 almuerzos tipo lunch para la playa, 2 traslados en lancha a las islas cercanas, 1 cena.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">FULL PENSION</span>
                        <br />
                        Incluye: alojamiento, 1 desayuno, 1 almuerzo tipo lunch para la playa con cava (hielo, refrescos, agua, snacks y 2 cervezas), 1 traslado en lancha a las islas cercanas Francisquí y Madrizquí, con sombrilla/ silla y 1 cena.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION</span>
                        <br />
                        Incluye: alojamiento, 1 desayuno y 1 cena
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED & BREAKFAST</span>
                        <br />
                        Incluye: alojamiento y desayuno
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED</span>
                        <br />
                        Incluye: Sólo alojamiento
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
                $base = "posada-arrecife";
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