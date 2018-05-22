<?php
ob_start('ob_gzhandler');
session_start();
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada Casa Caracol (VIP)";

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
                    En la costa norte de la Isla de Margarita,  cerca de la población de Juan Griego, se encuentra Playa Caribe, caracterizada por dos kilómetros de playa coralina famosa por sus atardeceres. Justo en las adyacencias de Playa Caribe, se encuentra Casa Caracol.
                </p>

                <p class="packP">
                    El conjunto de la Casa Caracol fue construido sobre una superficie de aproximadamente tres mil metros cuadrados, de los cuales seiscientos están edificados. La posada está constituida por diez cabañas, de las cuales ocho están destinadas al servicio de hospedaje y están distribuidas alrededor de una piscina de agua dulce.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Recepción
                    </li>
                    <li>
                        Churuata
                    </li>
                    <li>
                        Piscina
                    </li>
                    <li>
                        Playa
                    </li>
                    <li>
                        Boutique
                    </li>
                    <li>
                        Spa
                    </li>
                    <li>
                        Servicios de taxi
                    </li>
                    <li>
                        Alquier de vehículos
                    </li>
                    <li>
                        Lavandería
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
                $base = "posada-casa-caracol";
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