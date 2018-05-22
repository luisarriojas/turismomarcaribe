<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada El Botuto (SUPERIOR)";

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
                    Se trata de una agradable posada  con 6 habitaciones con baño privado, jardín interno y ventiladores de techo y de pie en cada habitación. Cada cama con su mosquitero para mayor comodidad de los turistas. Se encuentra frente al mar en una zona tranquila del pueblo del Gran Roque. La capacidad de la posada es para 15 personas repartidas en 3 habitaciones matrimoniales 3 habitaciones triples (cama matrimonial e individual o individual y litera), con posibilidad para 2 personas más en  dos camas adicionales.
                </p>

                <p class="packP">
                    Se ofrecen los servicios de   alojamiento, pensión completa con una variada y exquisita comida criolla e internacional, alquiler de accesorios de playa, paseos a los cayos del archipiélago y esmerada atención.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS / 1 NOCHE</span>
                        <br />
                        Incluye: alojamiento y desayuno.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS /1 NOCHE</span>
                        <br />
                        Incluye: alojamiento, desayuno y cena.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS/ 1 NOCHE</span>
                        <br />
                        Incluye: alojamiento, desayuno, lunch y cena.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION (2 DIAS/ 1 NOCHE)</span>
                        <br />
                        Incluye: alojamiento, desayuno, lunch, cena y traslados.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED AND BREAKFAST (2 DIAS/ 1 NOCHE)</span>
                        <br />
                        Incluye: alojamiento, desayuno y traslados.
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED AND BREAKFAST (2 DIAS/ 1 NOCHE)</span>
                        <br />
                        Incluye: alojamiento, desayuno, cena y traslados.
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
                $base = "posada-el-botuto";
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