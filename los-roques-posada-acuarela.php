<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada Acuarela (VIP)";

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
                    Posada Acuarela es una de las más hermosa posadas en Los Roques. Tiene un ambiente tropical único, con una arquitectura interior de bellos acabados llenos de plantas exóticas multicolores y muchísimos detalles que hacen de ella una diferencia. Acuarela, atendida por Angelo, su propietario, es quien hace la diferencia al momento de su estadía por algo más allá de su agradable y personalizada atención, pues también ofrece algo más cautivante, "su buen gusto al cocinar."
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        12 habitaciones
                    </li>
                    <li>
                        Jardines y terrazas
                    </li>
                    <li>
                        Ventilador
                    </li>
                    <li>
                        Baño privado
                    </li>
                    <li>
                        TV Cable
                    </li>
                    <li>
                        Restaurant
                    </li>
                    <li>
                        Actividades de buceo
                    </li>
                    <li>
                        Snorkeling
                    </li>
                    <li>
                        Winsurfing
                    </li>
                    <li>
                        Pesca deportiva
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS/ 1 NOCHE</span>
                        <br />
                        Incluye: alojamiento, desayuno, snack y cena
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED & BREAKFAST</span>
                        <br />
                        Incluye: alojamiento y desayuno
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION</span>
                        <br />
                        Incluye: alojamiento, 1 desayuno y 1 cena
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA</span>
                        <br />
                        Incluye: alojamiento, desayuno, almuerzo tipo snack y cena
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
                $base = "posada-acuarela";
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

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.lightbox').lightbox();
        });
    </script>
</body>