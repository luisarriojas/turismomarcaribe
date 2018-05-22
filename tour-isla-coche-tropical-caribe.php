<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Catamarán TROPICAL CARIBE";

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
                    Este catamarán tiene una capacidad para 150 pasajeros, tiene un calado de 1.30 m, lo que permite llegar a partes muy bajas donde otras embarcaciones no pueden hacerlo. Posee una cubierta principal con mesas y sillas tipo cafetería para 80 personas sentadas, una cubierta superior tipo solárium con capacidad de 40 personas sentadas y en la cubierta inferior 2 cabinas de cristal con capacidad para 30 personas.
                </p>

                <p class="packP">
                    Nuestro servicio incluye el traslado ida y vuelta desde su hotel al Puerto de La Isleta. Una vez allí, los pasajeros serán conducidos al catamarán donde se ofrecerá una bienvenida y un desayuno ligero.
                </p>

                <p class="packP">
                    Durante la travesía, los pasajeros contarán con la atención del personal anfitrión y de  recreación de la embarcación, disfrutando de bebidas, refrigerios y frutas variadas.
                </p>

                <p class="packP">
                    El catamarán fondeará sobre una zona de coral de arrecife donde podrán disfrutar del mundo submarino a través de nuestras cabinas de cristal.
                </p>

                <p class="packP">
                    Llegando al destino, serán acomodados en las zonas de playas asignándose los toldos y sillas para disfrutar de la hermosa playa de Coche hasta la hora de servir el almuerzo tipo buffet.
                </p>

                <p class="packP">
                    Finalizada  las actividades, los pasajeros serán reembarcados para regresar al Puerto de La Isleta y ser traslado a sus diferentes alojamientos.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Desayuno ligero
                    </li>
                    <li>
                        Frutas
                    </li>
                    <li>
                        Almuerzo tipo buffet
                    </li>
                    <li>
                        Open bar de bebidas nacionales
                    </li>
                    <li>
                        Refrescos
                    </li>
                    <li>
                        Sillas y toldos en playa
                    </li>
                    <li>
                        Visión submarina
                    </li>
                    <li>
                        Actividades recreacionales abordo y en la playa
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <?php
                include ("tour-isla-coche-relacionados.php");
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
                $base = "catamaran-tropical-caribe";
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