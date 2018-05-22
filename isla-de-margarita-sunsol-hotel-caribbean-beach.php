<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Sunsol Hotel Caribbean Beach - Playa El Agua (4&#9733;)";

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
                    Con la infraestructura más moderna y ubicado en pleno corazón de Playa El Agua, la playa más famosa de la Isla de Margarita, se encuentra SUNSOL HOTEL CARIBBEAN BEACH.
                </p>

                <p class="packP">
                    Es un exclusivo apart-hotel que cuenta con un esmerado servicio hotelero para ofrecer a sus distinguidos huéspedes unas vacaciones inolvidables. Los apartamentos  cuentan con una vista privilegiada al mar, un amplio y cómodo balcón que le ofrece un verdadero contacto con el Mar Caribe Venezolano o una confortable terraza con salida directa a la piscina.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Habitaciones principales con cama king size
                    </li>
                    <li>
                        Sofá con doble cama individual
                    </li>
                    <li>
                        Baño con ducha y closet
                    </li>
                    <li>
                        TV por cable
                    </li>
                    <li>
                        Kitchenett
                    </li>
                    <li>
                        Microondas
                    </li>
                    <li>
                        Nevera
                    </li>
                    <li>
                        Utensilios de cocina
                    </li>
                    <li>
                        Vajilla
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Caja de seguridad
                    </li>
                    <li>
                        Secador de cabello
                    </li>
                    <li>
                        Restaurantes
                    </li>
                    <li>
                        Piscina
                    </li>
                    <li>
                        Tiendas de Minimarket y souvenirs
                    </li>
                    <li>
                        Servicio de internet
                    </li>
                    <li>
                        Servicio de toldos y toallas en la piscina
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
                $base = "sunsol-hotel-caribbean-beach";
                $q = 5;

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
