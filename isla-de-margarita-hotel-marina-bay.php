<?php
ob_start('ob_gzhandler');
session_start();
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Hotel Marina Bay (4&#9733;)";

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
                    El Hotel Marina Bay está ubicado en la más prestigiosa zona de la Isla de Margarita: Urbanización Costa Azul, muy cerca del mar y en especial de los mejores centros comerciales de la isla. El hotel ofrece unas bellísimas instalaciones que además de resultar placenteras para el descanso se acoplan de manera simultánea con el bienestar, la intimidad y el espacio, apto para brindar la misma calidad a la familia que busca disfrutar de unas vacaciones merecidas, al igual que el ejecutivo o empresario que contrata sus servicios para complementar una exitosa reunión de negocios.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Habitaciones estándar con camas king size o queen size
                    </li>
                    <li>
                        Habitaciones presidenciales con camas King size
                    </li>
                    <li>
                        Jacuzzi en la terraza
                    </li>
                    <li>
                        Cable TV a color
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Teléfono
                    </li>
                    <li>
                        Secador de cabello
                    </li>
                    <li>
                        Piscina
                    </li>
                    <li>
                        Restaurantes
                    </li>
                    <li>
                        Piano bar
                    </li>
                    <li>
                        Servicio de taxi
                    </li>
                    <li>
                        Club de playa
                    </li>
                    <li>
                        Estacionamiento privado
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
                $base = "hotel-marina-bay";
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