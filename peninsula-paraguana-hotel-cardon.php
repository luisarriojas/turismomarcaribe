<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Hotel Cardón - Punto Fijo (4&#9733;)";

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
                    El Hotel Cardón cuenta con habitaciones amplias y confortables, con aire acondicionado, nevera ejecutiva, TV por satélite, servicio en las habitaciones, servicio de fax,  teléfono con línea directa, zona WiFi, lavandería, parque infantil, salón de conferencias, tienda, ambiente residencial y tranquilo.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Habitaciones Matrimoniales: Habitaciones compuestas por una cama matrimonial, nevera ejecutiva y aire acondicionado integral.
                    </li>
                    <li>
                        Habitaciones Dobles: Habitaciones compuestas por dos camas matrimoniales.
                    </li>
                    <li>
                        Suites: Habitaciones compuestas por dos niveles.
                    </li>
                    <li>
                        Trailers: Lujoso trailer de dos habitaciones con una cama matrimonial, una litera y un sofá-cama en la sala.
                    </li>
                    <li>
                        Town House: Es un edificio de dos plantas con un área de 433 m² de construcción.
                    </li>
                    <li>
                        Salón de Conferencias
                    </li>
                </ul>
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
                $base = "hotel-cardon";
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