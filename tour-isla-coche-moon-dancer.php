<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Catamarán MOON DANCER";

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

                <h2 class="packH2">Moon Dancer es Diversión!!!</h2>

                <p class="packP">
                    El placer de navegar entre las dos islas en nuestro atractivo catamarán a motor, de 62 pies de eslora y 22  pies de manga, con capacidad para 130 pasajeros, perdurará en su recuerdo.
                </p>

                <p class="packP">
                    Disfrute la travesía en nuestra hermosa cubierta superior en donde podrá, además de bailar, admirar el paisaje marino y la navegación al aire libre; o bien en nuestra cubierta inferior con la comodidad del aire acondicionado con servicio de bar abierto y karaoke  todo bajo la esmerada atención personalizada de nuestro staff de anfitriones.
                </p>

                <p class="packP">
                    Al llegar a la paradisíaca isla de Coche, desembarcamos en Playa La Punta, de tranquilas aguas y finas arenas blancas, donde le ofrecemos sillas y toldos, el bar abierto, actividades recreativas, la atención personalizada de nuestro staff y servicio de baños.  Luego disfrutará de un exquisito almuerzo tipo buffet en nuestro comedor tipo churuata.
                </p>

                <p class="packP">
                    Durante el retorno continúa la diversión, con música, bailes, concursos, juegos y rifas. Le ofrecemos una merienda con un rico cafecito.
                </p>

                <p class="packP">
                    Al término del Full Day le espera la unidad de transporte que le conducirá hasta su destino.
                </p>
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
                $base = "catamaran-moon-dancer";
                $q = 4;

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