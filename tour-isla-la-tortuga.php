<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Excursión a la Isla La Tortuga";

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
                    Venga a disfrutar con Turismo Mar Caribe, C.A. de las bellezas naturales que ofrece la Isla La Tortuga en embarcaciones tipo yate. Este es otro de los destinos escogidos tanto por los turistas extranjeros como nacionales ya que cuenta con una belleza inigualable. La Tortuga es la segunda isla más grande de Venezuela que está rodeada por acantilados, mangles, arrecifes, playas y los cayos Los Tortuguillos y Herradura o Isla Palomino.
                </p>

                <p class="packP">
                    La isla ofrece un excelente fondeadero para asegurar todo tipo de embarcaciones que la visitan. El Cayo Herradura proporciona abrigo para darse un baño en unas aguas bastantes tranquilas. Cuenta con todo lo pintoresco de la isla: arenas blancas de gran finura y aguas verde turquesa en constante cambio de matices hasta llegar al azul intenso.
                </p>

                <p class="packP">
                    La Isla de La Tortuga es uno de los lugares favoritos de propietarios de yates, lanchas y veleros donde todos  los fines de semana atracan embarcaciones de diversos tamaños frente a sus playas de arenas coralinas. Un paseo en bote, desde Higuerote, invita al viajero a descubrir sus bondades vírgenes.
                </p>

                <p class="packP">
                    Turismo Mar Caribe, C.A. le ofrece la posibilidad de disfrutar de ésta excursión con varias opciones:
                </p>

            </div>

            <div class="packInfo">
                <h2 class="packH2">Planes</h2>

                <ul class="packUL">
                    <li>
                        "Pernocta en la Tortuga"
                    </li>
                    <li>
                        2 Días / 1 noche (Todo Incluido)
                    </li>
                    <li>
                        3 Días / 2 noches (Todo Incluido)
                    </li>
                    <li>
                        4 Días / 3 noches (Todo Incluido)
                    </li>
                </ul>

                <h2 class="packH2">Todos estos planes incluyen:</h2>

                <ul class="packUL">
                    <li>
                        Travesía marítima desde Buche (Higuerote) hasta  Cayo Herradura (Isla La Tortuga).
                    </li>
                    <li>
                        Dinghy para traslado del yate a la playa.
                    </li>
                    <li>
                        Todas las Comidas (Desayunos, almuerzos y cenas).
                    </li>
                    <li>
                        Comedor techado.
                    </li>
                    <li>
                        Estadía en carpas con colchonetas.
                    </li>
                    <li>
                        Servicio de hielo, agua mineral y refrescos.
                    </li>
                    <li>
                        Servicio a bordo de baño, ducha rápida de agua dulce, ambiente musical.
                    </li>
                    <li>
                        Estacionamiento privado con vigilancia en Buche (Higuerote)
                    </li>
                </ul>
            </div>
        </div>

        <div id="packColumn2">
            <?php
            $formUrl = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
            include ("cotizador.php");
            ?>

            <div id="packPhotos">
                <?php
                $base = "tour-isla-la-tortuga";
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