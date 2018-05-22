<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Tour de compras a Paraguaná";

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

                <h2 class="packH2">Itinerario</h2>

                <ul class="packUL">
                    <li>
                        <span class="packLITitle">Día 1</span>
                        <br />
                        Salida muy temprano desde la ciudad de origen, en transporte turístico de lujo, hacia la ciudad de Punto Fijo. Se servirá un desayuno a bordo con croissant, jugo de fruta, café. Al mediodía almuerzo en restaurant en la Vela de Coro. Continuamos el viaje hasta llegar a Punto Fijo, donde será llevado a una posada u hotel clase turista, y luego lo llevaremos a un centro comercial hasta las 8 de la noche; más tarde será trasladado a su lugar de hospedaje, cena y descanso.
                    </li>
                    <li>
                        <span class="packLITitle">Día 2</span>
                        <br />
                        A las 7:30 am desayuno en la posada y luego será trasladado al centro de compras de Paraguaná, tales como el Centro Comercial Sambil,  Centro Comercial Paraguaná Mall, Centro Comercial Las Virtudes, entre otros, todo el día para que Ud. pueda hacer sus compras cómodamente. Se recomienda guardar sus facturas ya que le serán solicitadas por la aduana al salir de la zona franca.
                    </li>
                    <li>
                        <span class="packLITitle">Día 3</span>
                        <br />
                        A las 7:30 am desayuno y salida con destino a Valencia ó Maracay. Parada en el casco histórico de la ciudad de Coro. Al mediodía almuerzo en restaurant de la Vela de Coro. Fin del tour.
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2"><?php echo $metaTitle; ?> ofrece</h2>

                <ul class="packUL">
                    <li>
                        Traslado en transporte turístico de lujo.
                    </li>
                    <li>
                        Alojamiento (hotel/ posada clase estándar).
                    </li>
                    <li>
                        3 desayunos y 2 cenas
                    </li>
                    <li>
                        Traslados a los centros de compras de la zona franca
                    </li>
                    <li>
                        Paseo por el casco histórico de Coro
                    </li>
                    <li>
                        Atención personalizada durante todo el recorrido.
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
                $base = "tour-paraguana-compras";
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