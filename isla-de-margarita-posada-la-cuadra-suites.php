<?php
ob_start('ob_gzhandler');
session_start();
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada La Cuadra Suites (SUPERIOR)";

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
                    Posada La Cuadra Suites se encuentra en Playa El Agua. Es la posada ideal para pasar sus vacaciones en la hermosa Isla de Margarita, acompañados de sol, playas y arena. Descanse, relájese y atrévase a disfrutar de nuestras confortables instalaciones en un ambiente de playa exquisito, un clima ideal en una zona privilegiada.  Con una refrescante piscina que le estará esperando al llegar de la playa o de sus compras favoritas. Cuenta también con sillas extensibles para que pueda relajarse cómodamente, leer un libro, broncearse o simplemente disfrutar de la tranquilidad de esta maravillosa posada. Entre las áreas recreativas está la churuata donde puede pasar una tarde riquísima mientras disfruta de la suave brisa u ordenar refrescantes bebidas a la carta.  Atendido por sus propios dueños.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        18 habitaciones
                    </li>
                    <li>
                        Tv por cable
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Agua caliente
                    </li>
                    <li>
                        Nevera ejecutiva
                    </li>
                    <li>
                        Piscina
                    </li>
                    <li>
                        Churuata
                    </li>
                    <li>
                        Estacionamiento
                    </li>
                    <li>
                        Zona WiFi
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
                $base = "posada-la-cuadra-suites";
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
</body>