<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Tour de compras en Margarita";

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
                    Agradable paseo en el que podrán disfrutar  y adquirir en las tiendas mejor surtidas de la isla y a precios de puerto libre, una gran variedad de productos. En el recorrido visitará el centro de Porlamar,  Av. Santiago Mariño, Av. 4 de Mayo y Bulevares Guevara y Gómez donde podrán comprar ropa, perfumes, joyas de excelente calidad y gran belleza, lencería, etc. También podrán visitar un centro licorero para adquirir bebidas nacionales o importadas. Por último, visitará el Centro Sambil Margarita, bello centro comercial con excelentes tiendas y gran variedad de marcas y productos.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Recorrido en transporte ejecutivo de lujo  con aire acondicionado
                    </li>
                    <li>
                        Asistencia turística
                    </li>
                    <li>
                        Bebidas no alcohólicas (agua y refrescos)
                    </li>
                </ul>
            </div>

            <div class="packAlert">
                <p class="packP">
                    Salidas con grupos mínimo de 10 PAX
                </p>
            </div>

            <div class="packInfo">
                <?php
                include ("tour-margarita-relacionados.php");
                ?>
            </div>
        </div>

        <div id="packColumn2">
            <?php
            $formUrl = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
            include ("cotizador.php");
            ?>

            <div id="packPhotos">
                <?php
                $base = "tour-margarita-compra";
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