<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Yate VIOLA FESTIVAL";

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
                    El yate M/N VIOLA FESTIVAL mide 23 mts de eslora y 6,10 mts de manga. Posee dos cubiertas, una al aire libre, otra con aire acondicionado y ventanas panorámicas para una mejor travesía con lujo, confort y comodidad. Tenemos dos (2) destinos turísticos para nuestros clientes: Isla de Coche e Isla de Cubagua.
                </p>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Full Day en la Isla de Coche</h2>

                <p class="packP">
                    Disfrute a bordo de nuestra M/N VIOLA FESTIVAL, de una excitante y placentera excursión a la Isla de Coche, Todo Incluido, durante la navegación usted podrá gozar de buena música, concursos y la atención de nuestro personal, al mismo tiempo, sentirá la maravillosa magia de navegar y observar el excelente paisaje de nuestras costas margariteñas, hasta llegar a la paradisíaca Isla de Coche, donde su espectacular y pintoresca Playa La Punta, con arenas blancas y sol caribeño nos sumergirán en un verdadero paraíso. Al  regreso, Ud. podrá observar la famosa puesta del sol desde la cubierta de la embarcación.
                </p>

                <p class="packP">
                    El Full Day tiene una duración de ocho (08) horas aproximadamente, con una travesía desde la Bahía del Hotel Concorde en la Isla de Margarita, hasta Playa la Punta en la Isla de Coche de una hora, veinte minutos (1:20)
                </p>

                <p class="packP">
                    El servicio "Full Day" a Isla de Coche incluye:
                </p>

                <ul class="packUL">
                    <li>
                        Traslado Hotel/ Marina/ Hotel
                    </li>
                    <li>
                        Desayuno Ligero (Sandwich, Jugo de Naranja y Frutas)
                    </li>
                    <li>
                        Open Bar Bebidas Nacionales (Cerveza, Ron, Vodka, Ginebra, Refrescos y Agua).
                    </li>
                    <li>
                        Música, Concursos y Actividades
                    </li>
                    <li>
                        Almuerzo en Restaurante de Playa en la Isla de Coche
                    </li>
                    <li>
                        Sillas y toldos.
                    </li>
                    <li>
                        Juegos de playas.
                    </li>
                    <li>
                        Asistencia de nuestro excelente personal.
                    </li>
                    <li>
                        Salida: 09:30 a.m.  Marina Puerto Miguel (Hotel Concorde)
                    </li>
                    <li>
                        Regreso: 17:00 p.m. Marina Puerto Miguel (Hotel Concorde)
                    </li>
                </ul>
            </div>

            <div class="packInfo">
                <h2 class="packH2">Full Day en la Isla de Cubagua</h2>

                <p class="packP">
                    En nuestra embarcación, durante el viaje, usted podrá disfrutar de áreas al aire libre o si prefiere un salón con aire acondicionado. Para su mayor comodidad le recordamos que Viola Festival zarpa desde una marina cercana a los principales Hoteles ubicados en Porlamar y Pampatar.
                </p>

                <p class="packP">
                    El servicio "Full Day" a Isla de Cubagua incluye:
                </p>

                <ul class="packUL">
                    <li>
                        Desayuno ligero
                    </li>
                    <li>
                        Open Bar de bebidas nacionales (Cerveza, Ron, Vodka, Ginebra, Refrescos y Agua)
                    </li>
                    <li>
                        Almuerzo (Catering tipo menú el cual es servido en la playa)
                    </li>
                    <li>
                        Música y actividades en el barco
                    </li>
                    <li>
                        Actividades en la playa (Snorkeling en el ferry hundido, raquetas, voleibol, actividades de Integración).
                    </li>
                    <li>
                        Lodoterapia
                    </li>
                    <li>
                        Asistencia al usuario con personal capacitado.
                    </li>
                    <li>
                        Hora de salida desde Marina Pto. Miguel (Hotel Concorde): 08:30 am.
                    </li>
                    <li>
                        Hora de salida desde la Isla de Cubagua: 15:00 pm
                    </li>
                    <li>
                        Hora de llegada a la Marina Pto. Miguel (Hotel Concorde): 17:00 pm
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
                $base = "catamaran-viola-festival";
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