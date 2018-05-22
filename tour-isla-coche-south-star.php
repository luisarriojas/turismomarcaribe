<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Catamarán SOUTH STAR";

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

                <h2 class="packH2">South Star es Aventura!!!</h2>

                <p class="packP">
                    Viva la aventura de navegar a vela y a motor en nuestro catamarán de 57 pies de eslora y 24 pies de manga, con capacidad para 35 pasajeros más tripulación.
                </p>

                <p class="packP">
                    Disfrute la travesía con música amena,  tomando el sol, apreciando el paisaje o bien bajo la sombra de nuestra cubierta techada, siempre con la característica y esmerada atención de nuestro staff. Servicio de bar abierto durante toda la travesía, snack ligero y frutas tropicales todo incluido.
                </p>

                <p class="packP">
                    Luego tendremos la parada programada en el Bajo de Care Care para hacer snorkeling con nuestros modernos equipos y observar las atracciones submarinas que nos brinda el Mar Caribe.
                </p>

                <p class="packP">
                    Al llegar a la paradisíaca isla de Coche, desembarcamos en Playa La Punta, de tranquilas aguas y finas arenas blancas, en donde le estará esperando la unidad de transporte para realizar un recorrido que le permitirá conocer las bondades y atractivos de esta hermosa isla.
                </p>

                <p class="packP">
                    Al regreso del paseo le ofrecemos sillas y toldos, el bar abierto, actividades recreativas, la atención personalizada de nuestro staff y servicio de baños.  Luego disfrutará de un exquisito almuerzo, tipo buffet en nuestro comedor tipo churuata.
                </p>

                <p class="packP">
                    En el retorno le ofrecemos merienda con un rico cafecito y al término del Full Day le espera la unidad de transporte que le conducirá hasta su destino.
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
                $base = "catamaran-south-star";
                $q = 3;

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