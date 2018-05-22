<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Playa Sirena Hotel & Club (4&#9733;)";

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
                    Apartamentos para 2, 4 y 6 personas e incluye todos los servicios de un hotel 4 estrellas. Todos  con un ambiente privado, camas confortables, ambientes compartidos con sofá camas, cocina, comedor, lencería, nevera, cocina, microondas, vajilla, TV por cable y una impresionante vista al mar, servicios de restaurant, bodegón, y paseos a los cayos. Vista al mar desde todos nuestros apartamentos. Salida directa a las playas del Parque Nacional Morrocoy.
                </p>
            </div>

            <div class="packInfo">
                <?php
                include ("paquete-parque-nacional-morrocoy-relacionados.php");
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
                $base = "playa-sirena-hotel-club";
                $q = 2;

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