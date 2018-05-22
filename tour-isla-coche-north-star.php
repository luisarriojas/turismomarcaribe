<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Catamarán NORTH STAR";

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

                <h2 class="packH2">North Star es Relax!!!!</h2>

                <p class="packP">
                    Experimente el romance y la emoción de navegar a vela en nuestro trimarán de 47 pies de eslora y 26 pies de manga con capacidad para 35 pasajeros más tripulación.
                </p>

                <p class="packP">
                    Disfrute el relax de la navegación  con nuestro producto VIP: música, servicio de bar abierto, frutas tropicales y recorrido por la costa sur de la Isla de Coche. Durante la travesía nuestro staff se hará cargo de brindarle una atención esmerada y personalizada haciendo que su experiencia sea inolvidable. Realizaremos parada en el Bajo de Piedras Negras para la  práctica de snorkeling con nuestros modernos equipos para observar las atracciones submarinas que nos brinda el Mar Caribe.
                </p>

                <p class="packP">
                    Al llegar a la paradisíaca isla de Coche, desembarcamos en Playa La Punta, de tranquilas aguas y finas arenas blancas, donde le ofrecemos sillas y toldos, el bar abierto, la atención personalizada de nuestro staff y el servicio de baños. Luego disfrutará de un exquisito almuerzo tipo buffet con vino incluido en nuestro comedor tipo churuata.
                </p>

                <p class="packP">
                    En el retorno le ofrecemos una merienda con un rico cafecito y al término del Full Day le espera la unidad de transporte que le conducirá hasta su destino.
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
                $base = "catamaran-north-star";
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