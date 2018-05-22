<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Sunsol Hotel Punta Blanca - Isla de Coche (4&#9733;)";

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
                    Es un hotel  de la cadena SUNSOL HOTELES que está ubicado en Playa La Punta, hermosa playa de arenas blancas y aguas cristalinas en la Isla de Coche, donde se combina la exclusividad y la elegancia caribeña de un hotel boutique.
                </p>

                <p class="packP">
                    Dista de unos 20 minutos de navegación de la Isla de Margarita donde se ofrece el servicio TODO INCLUIDO con una categoría de 4 Estrellas Superior.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        124 habitaciones estandar con camas king size ó 2 camas full.
                    </li>
                    <li>
                        30 habitaciones tipo Suites con dos ambientes: Sofá-cama matrimonial y baño; la habitación principal cuenta con cama king size y baño.
                    </li>
                    <li>
                        Restaurantes
                    </li>
                    <li>
                        Piscina
                    </li>
                    <li>
                        Aire acondicionado
                    </li>
                    <li>
                        Televisión satelital
                    </li>
                    <li>
                        Mini nevera
                    </li>
                    <li>
                        Secador de cabello
                    </li>
                    <li>
                        Cajas de Seguridad
                    </li>
                    <li>
                        Transporte marítimo (ida y vuelta a la Isla de Margarita)
                    </li>
                    <li>
                        Sala de juegos
                    </li>
                    <li>
                        Parque infantil
                    </li>
                    <li>
                        Servicio de masajes
                    </li>
                    <li>
                        Mini bodegón
                    </li>
                    <li>
                        Actividades acuáticas
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
                include ("paquete-isla-de-coche-relacionados.php");
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
                $base = "sunsol-hotel-punta-blanca";
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