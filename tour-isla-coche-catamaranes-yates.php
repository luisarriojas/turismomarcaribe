<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Excursiones Full Day a la Isla de Coche";

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
                    Juntos iremos navegando por las aguas cristalinas del Mar Caribe hacia la Isla de Coche. Nuestra cálida y atenta tripulación se encargará de guiarles para que pasen un día inolvidable y disfruten de una exótica experiencia de acuerdo a su escogencia de tour, experimentando la belleza y las riquezas naturales e históricas que guarda ésta isla.
                </p>

                <p class="packP">
                    Nuestras tarifas incluyen el servicio de transporte en unidades semiprivadas desde su alojamiento en  la isla de Margarita hasta nuestro terminal de embarque en La Isleta y retorno.
                </p>

                <h2 class="packH2">Adicionalmente todo en un mismo lugar!!!</h2>

                <ul class="packUL">
                    <li>
                        Snack ligero al embarcar.
                    </li>
                    <li>
                        Bebidas alcohólicas nacionales, refrescos, jugos y agua incluidos a bordo de nuestros catamaranes durante toda la excursión.
                    </li>
                    <li>
                        Servicio de toldos y sillas en nuestra exclusiva área de playa.
                    </li>
                    <li>
                        Actividades recreativas y juegos.
                    </li>
                    <li>
                        Almuerzo tipo buffet completo y variado en nuestro restaurante ubicado en la churuata más grande, fresca y acogedora de la Isla de Coche.
                    </li>
                    <li>
                        Atención personalizada y bar abierto durante su estadía en la playa.
                    </li>
                    <li>
                        Servicio de Baños.
                    </li>
                </ul>
            </div>

            <div class="packAlert">
                <p class="packP">
                    Recomendaciones: Traer toalla, traje de baño, protector solar, cámara fotográfica, camiseta extra y sobre todo muchas ganas de divertirse y pasar un día bien diferente.
                </p>
            </div>

            <div class="packInfo">
                <?php include ("tour-isla-coche-relacionados.php"); ?>
            </div>
        </div>

        <div id="packColumn2">
            <?php
            $formUrl = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
            include ("cotizador.php");
            ?>
        </div>

        <div class="space"></div>
    </div>

    <?php
    include ("footer.php");
    ?>
</body>