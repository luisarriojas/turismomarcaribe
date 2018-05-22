<?php
ob_start('ob_gzhandler');
session_start();
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada Steviewonderland (VIP)";

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
                    STEVIE WONDERLAND es una exclusiva y lujosa posada con 7 habitaciones donde se da al huésped un trato VIP. Es un lugar  ideal para pasar unas vacaciones tranquilas, un fin de semana deportivo o unos días románticos con todos los servicios incluidos. Estamos situados en las Lomas del Yaque a tan solo 300 metros de la bellísima playa con una vista espectacular al mar y rodeados por el Parque Nacional de la Laguna de Los Marites.
                </p>

                <p class="packP">
                    Además del servicio básico de hospedaje, podemos prepararle la cena a su gusto, o sorprenderlos con una parrilla inolvidable, servicio de traslado al aeropuerto; organización y/o reservación de sus actividades deportivas.
                </p>

                <p class="packP">
                    STEVIE WONDERLAND también se alquila como Casa Vacacional con todos los servicios, para pasar unas vacaciones en privado con su familia o amigos. Es un lugar estupendo para eventos especiales, que podemos organizar en su totalidad, o sólo los servicios y actividades que usted solicite.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        7 habitaciones con capacidad hasta 02 personas + 2 niños
                    </li>
                    <li>
                        TV Satelite con DVD
                    </li>
                    <li>
                        Aire Acondicionado
                    </li>
                    <li>
                        Ventilador
                    </li>
                    <li>
                        Mini Bar
                    </li>
                    <li>
                        Restaurante
                    </li>
                    <li>
                        Churuata
                    </li>
                    <li>
                        Piscina
                    </li>
                    <li>
                        Terraza solarium
                    </li>
                    <li>
                        Estacionamiento
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
                $base = "posada-steviewonderland";
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