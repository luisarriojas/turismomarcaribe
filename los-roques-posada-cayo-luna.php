<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Posada Cayo Luna (SUPERIOR)";

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
                    Posada Cayo Luna es una exclusiva posada con 6 habitaciones y capacidad total para 18 personas. Es atendida por sus propios dueños desde 1996, quienes de manera muy profesional harán de su visita por Los Roques una experiencia única, inolvidable y muy satisfactoria. Tiene una decoración cálida y acogedora que lo hará sentir como en su propia casa. En Posada Cayo Luna podrá degustar la cocina tradicional Venezolana y los platos más innovadores de la cocina Internacional a manos de nuestro chef.
                </p>

                <p class="packP">
                    La Posada Cayo Luna cuenta con su propia embarcación techada y rápida que los llevará a conocer todos los diferentes cayos permitidos del archipiélago, ya sea las islas cercanas que están incluidas en nuestros paquetes o si desea ir más allá de lo convencional para observar las tortugas, estrellas de mar, los cayos más recónditos y solitarios, o los fascinantes arrecifes para hacer snorkeling.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Recibimiento y despedida en la pista del Gran Roque
                    <li>
                        Apoyo en el chequeo de los vuelos de regreso.
                    </li>
                    <li>
                        Alojamiento en confortables habitaciones dobles, triples y cuádruples dependiendo del plan escogido
                    </li>
                    <li>
                        Aire acondicionado en todas las habitaciones
                    </li>
                    <li>
                        Baño privado
                    </li>
                    <li>
                        TV satelital
                    </li>
                    <li>
                        Desayunos a la carta ( Ligero a base de frutas frescas y yogurt casero, Americano, Venezolano con arepas y perico, Caribeño con las deliciosas empanadas de pescado con una salsa de la casa y el desayuno dulce con nuestra torta del día y panquecas con sirop o miel. Incluye: Jugos naturales, café, mermelada, mantequilla, galletas y un plato principal.
                    </li>
                    <li>
                        Almuerzos ligeros  fríos tipo lunch box para llevar a la playa. Elaboramos una lonchera  con bebidas (agua,refrescos, jugos,  almuerzo y merienda, que consta de un plato fuerte como ensalada de vegetales, de atún, de pasta y de arroz, chapatis, sándwiches y el dulce del día acompañado de una porción de frutas
                    </li>
                    <li>
                        Meriendas a su llegada de la playa
                    </li>
                    <li>
                        Cenas a base de pescado y langostas que son elaborados exclusivamente por nuestro chef.  Comprende una entrada, un plato principal, postre y café o té.
                    </li>
                    <li>
                        Todas las bebidas no alcohólicas ilimitadas en las comidas,  a base de jugos naturales, té y  gaseosas.
                    </li>
                    <li>
                        Excursiones  diarias a una isla por día, en nuestra rápida embarcación a los  cayos  cercanos del archipiélago (Madrisqui, Francisqui arriba, abajo y del medio, Cayo Muerto ò Cayo Fabián)
                    </li>
                    <li>
                        Servicio de sillas,  sombrilla y cava con hielo
                    </li>
                </ul>

                <h2 class="packH2"><?php echo $metaTitle; ?> no incluye</h2>

                <ul class="packUL">
                    <li>
                        Boletos aéreos
                    </li>
                    <li>
                        Tasa aeroportuaria
                    </li>
                    <li>
                        Entrada al parque nacional
                    </li>
                    <li>
                        Bebidas alcohólicas
                    </li>
                    <li>
                        Desayuno del día de llegada
                    </li>
                    <li>
                        Equipos de snorkeling
                    </li>
                    <li>
                        Propinas
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes en <?php echo $metaTitle; ?></h2>

                <ul class="packUL">
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">2 DIAS/ 1 NOCHE (TODO INCLUIDO)</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">PENSION COMPLETA + EXCURSION</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">MEDIA PENSION</span>
                    </li>
                    <li style="margin-bottom:5px;">
                        <span class="packLITitle">BED & BREAKFAST</span>
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
                $base = "posada-cayo-luna";
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
