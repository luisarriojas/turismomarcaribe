<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Hotel Puerta del Sol (Playa El Agua) (4&#9733;)";

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
                    Hotel con 233 habitaciones sencillas,  dobles, triples y cuádruples, aire acondicionado, baño privado, agua caliente, TV por cable, “Plan Todo Incluido” (todos los desayunos, almuerzos, cenas), bebidas, Club de Playa con toldos y sillas, animación y show nocturnos.
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
                $base = "hotel-puerta-del-sol-el-agua";
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