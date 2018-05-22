<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Casa Tramonto (SUPERIOR)";

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
                    Cada apartamento está acondicionado para alojar un máximo de 4 personas en una habitación con 1 cama matrimonial y 2 individuales.  Además cuenta con un cómodo baño, cocina y un pequeño comedor. En cada una de ellas encontrará cocina equipada con vajilla, cristalería y cubiertería para cuatro personas, utensilios de cocina, cafetera, jarras, vasos y copas. El baño cuenta con toallas de baño, toalla de pies, manos y cara. Además de secador de pelo y agua caliente. Para la comodidad de sus excursiones: toallas, sillas y cava para la playa.
                </p>

            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Apartamentos confortables de lujo para 4 personas
                    </li>
                    <li>
                        Servicio de limpieza diaria
                    </li>
                    <li>
                        Servicio médico
                    </li>
                    <li>
                        Atención personalizada
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
                $base = "casa-tramonto";
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