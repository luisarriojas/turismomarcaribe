<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Tour Guiado a Paraguaná";

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

                <h2 class="packH2">Paraguaná Espléndida (Tour Guiado 3 días / 2 noches)</h2>

                <p class="packP">
                    La Península de Paraguaná es uno de los destinos en Venezuela con una alta afluencia de turistas venezolanos y  extranjeros durante todo el año, ya que combina el turismo geográfico con una gran historia y cultura. Turismo Mar Caribe, C.A. lo lleva a  esta encantadora tierra donde usted realizará un recorrido por distintos lugares para observar y disfrutar de sus bellas playas, sus hermosos médanos con una vista incomparable al mar, paseos por las salinas de color rojizo, antiguas iglesias coloniales y su capital Coro.  Este tour ofrece  3 días/ 2 noches, en alojamiento en una acogedora y cómoda  posada con todas las comodidades, transponte turístico de lujo, desayunos y cenas incluidos.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Itinerario</h2>

                <ul class="packUL">
                    <li>
                        <span class="packLITitle">DIA 1</span>
                        <br />
                        Salida temprano (06:00 am) desde el lugar de origen (Caracas, Maracay o Valencia) para Adícora. Durante el recorrido en transporte turístico de lujo se ofrecerá el desayuno con croissants,  jugo de frutas y café. Al mediodía realizaremos parada en La Vela de Coro para almorzar en un restaurant de la zona. Luego nos dirigiremos al Parque Nacional Médanos de Coro para disfrutar de ese hermoso lugar y tomar fotos. Es uno de los sitios más visitados en el país. Continuaremos nuestro viaje hacia la Península de Paraguaná y pasaremos por el majestuoso istmo de Paraguaná, único en el continente americano. Disfrutará las playas de Adícora, Buchuaco, El Supí, Tiraya, conocidas internacionalmente para la práctica del kitesurf  y windsurf.  Más tarde llegaremos a  la posada donde podrá  descansar,  tomar un baño en la piscina o en la playa y luego la cena y pernocta en la posada clase turista.
                    </li>
                    <li>
                        <span class="packLITitle">DIA 2</span>
                        <br />
                        Desayuno a las 7:15 a.m. y a las 8:00 a.m. paseo al Cabo San Román. Pasaremos por las bellísimas salinas de Cumaragua, vía Piedras Negras, para llegar al norte de la Península de Paraguaná,  el punto más septentrional de Venezuela. Allí, desde el famoso faro, veremos la isla de Aruba a cierta distancia y la bahía de Puerto Escondido de aguas profundas y movidas, fuerte viento y la esplendorosa vista de un barco encallado. Al mediodía tomaremos el almuerzo en restaurant  de la zona. Luego pasearemos por Pueblo Nuevo, visitaremos la iglesia, tiendas de artesanías y podrá disfrutar el exquisito dulce de leche  que venden en la avenida principal. No deje de probar las ricas arepas peladas típicas de la región.
                    </li>
                    <li>
                        <span class="packLITitle">DIA 3</span>
                        <br />
                        Desayuno a las 7:15 a.m. y a las 8:00 a.m. salida hacia la ciudad de Coro, “Patrimonio Histórico de la Humanidad”, visitando la Catedral, el Museo Diocesano, el Centro de Historia, La Casa de Las Ventanas de Hierro y otros sitios de interés. Al mediodía almuerzo en un restaurant de la zona y regreso a la ciudad de origen. Fin del tour.
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Transporte turístico de lujo
                    </li>
                    <li>
                        Alojamiento en posadas con todas las comodidades
                    </li>
                    <li>
                        Paseos
                    </li>
                    <li>
                        Desayunos y cenas
                    </li>
                    <li>
                        Guía turístico
                    </li>
                    <li>
                        Atención personalizada
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <?php
                include ("tour-paraguana-relacionados.php");
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
                $base = "tour-paraguana-guiado";
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