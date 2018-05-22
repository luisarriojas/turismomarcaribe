<?php
session_start();
?>
<!doctype html>
<head>
    <?php
    $meta_description = "";
    $meta_keywords = "";
    $meta_title = "Home";

    include("metatags.php");

    include("style-script.php");
    ?>
<!--    <script type="text/javascript" src="../js/prototype.js"></script>
    <script type="text/javascript" src="../js/scriptaculous.js?load=effects,builder"></script>
    <script type="text/javascript" src="../js/lightbox.js"></script>
    <link href="../css/lightbox.css" rel="stylesheet" type="text/css" media="screen" />-->
</head>
<body>
    <?php
    include("google-analytics.php");

    include("header.php");
    ?>

    <div id="package_container">
        <h1>PARQUE NACIONAL MEDANOS DE CORO</h1>

        <p>Los Médanos de Coro fué declarado Parque Nacional el 06 de Febrero de 1974. Es un paisaje desértico único en Venezuela. El Parque abarca una extensión de 91.280 hectáreas, de las cuales 42.160 son de tierras continentales y más de 49.120 de  superficies marinas.</p>

        <p>Los Médanos de Coro están ubicados exactamente en jurisdicción de los Distritos Miranda y Falcón del Estado Falcón. Los Médanos se inician en Coro y abarca el territorio del istmo que  lleva su nombre. Los Médanos de Coro son una de las presentaciones naturales más importantes del paisaje venezolano.</p>

        <h2>FORMACION DE LOS MEDANOS</h2>
        <p>Los Médanos de Coro se formaron por la acción constante de los vientos alisios que soplan por lo general de este a oeste. En general, el proceso de formación de los desiertos como los Médanos que son dunas o acumulaciones de arena es un proceso erosivo de mucho tiempo de la acción constante del viento sobre las rocas. El viento al desplazar las rocas continuamente y por un período largo de tiempo, las parte en pedazos muy pequeños convirtiéndolos en arena. Luego esta arena al desplazarse, por la constante acción del viento, se va acumulando en montones, sobre todo cuando encuentra algo que las detiene, y así se van formando las dunas, que continuamente cambian de forma ya que están en continuo movimiento. Por ello también los Médanos han recibido el nombre de arenas nómadas.</p>

        <h2>ACCESO</h2>
        <p>Las vías de acceso a los Médanos son varias, sin embargo las más comunes son: La entrada desde la Plaza La Madre en la Avenida Independencia y la entrada ubicada en la carretera de Coro-Punto Fijo, cerca de la alcabala de Los Médanos ubicada en el norte de la ciudad. </p>

        <h2>HORARIOS DE VISITA</h2>
        <p>El horario de visita al Parque Nacional Médanos de Coro es desde las 9:00 a.m hasta las 6:00 p.m, recomendado especialmente a los visitantes que no estén muy familiarizados con las diferentes áreas del Parque. </p>

        <h2>PAISAJE</h2>
        <p>El paisaje en su conjunto está dominado por el istmo de los Médanos, que une al resto del estado con la Península de Paraguaná, y el cual consiste en una faja de 30 kilómetros de largo por 5 Kilómetros de ancho, con una altura promedio de 20 metros sobre el nivel del mar, un rasgo fisiográfico único en Venezuela, a cuyos atractivos naturales se suma la presencia de los Médanos, constituidos por la acumulación de arena, que se desplazan bajo la acción del viento.</p>

        <h2>VEGETACION</h2>
        <p>En términos generales, la vegetación pertenece a la de monte espinoso tropical donde la pluviosidad va desde los 250 a 500 mm. Los árboles dominantes de los Médanos de Coro son el cují, el yaque, el yabo, y el espinito. También predominan las plantas bajas y rastreras, las comunidades arbustivas de manglares, los espinares que forman densos grupos de plantas armados como las cactáceas (los cardonales y las tunas) y algunas leguminosas, las plantas acuáticas marinas, entre las que destacan los lechos de Thalassia y las costas fangosas situadas al Sureste de la Península.</p>

        <h2>FAUNA MEDANAL </h2>
        <p>La fauna silvestre está representada mayormente por reptiles, lagartos e iguanas, comunes en estas tierras áridas. El halcón primito, la dara, la perdiz, la paloma guacoa, la paloma sabanera, el turpial, la paraulata llanera, el sangre de toro y el cardenal coriano son las especies más características de la avifauna. En la zona de los mangles y en las playas arenosas son comunes diversas especies de gaviotas y garzas. Por el grupo de mamíferos sobresalen el zorro, el oso hormiguero y el conejo.</p>

        <h2>CLIMA</h2>
        <p>El clima del Parque es uno de los más cálidos de Falcón, y su temperatura promedio es muy uniforme durante todo el año, oscilando entre los 27°C y los 30°C, con temperaturas extremas de 47°C en sombra y mínimos por debajo de los 16°C. Las lluvias son muy escasas en la parte norte del istmo y en la Península de Paraguaná. Solamente un quinto de los desiertos en el mundo son arenosos como los Médanos de Coro. Las montañas de arena que observamos en los Médanos se llaman dunas. Las dunas de nuestros Médanos llegan a formar montículos de arena de hasta 40 metros de altura.</p>

        <h2>SITIOS DE INTERES EN LA PENINSULA DE PARAGUANA</h2>
        <p>Paraguaná, con 750 kilómetros de costas, posee una variedad de bellezas naturales, sitios de valor histórico y patrimonial, arquitectura colonial y disfrutar de una amplia zona comercial con exoneración de pago de impuestos. </p>
        <p>Playas como las de Adícora, Buchuaco, El Supí, Tiraya, Las Salinas de Curumagua, Cabo San Román y Villa Marina, son sólo parte de la gran gama de opciones que esta región ofrece al turista. Uno de los atractivos de sus exquisitas playas es la existencia de médanos cerca del mar.</p>
        <p>Luego de un recorrido por su nutrido comercio, atractivo por la exención de impuestos, les recomendamos visitar el cabo de San Román. El faro de Punta Macolla y el monumento natural Cerro Santa Ana ubicado en el centro de la Península de Paraguaná, al cual se accede por carretera siguiendo la vía que une a Coro con Pueblo Nuevo , entre Santa Ana y Buena Vista. </p>

        <p style="text-align: left;">
            <?php
            $base = "parque-nacional-medanos-de-coro";
            $q = 4;

            for ($i = 1; $i <= $q; $i++) {
                echo '<a href = "../img/' . $base . '-' . $i . '.jpg" rel = "lightbox[package]" class = "package_a">
                        <img src = "reduce.php?file=' . $base . '-' . $i . '.jpg" class = "img_package" />
                      </a>';
            }
            ?>
        </p>
    </div>

    <?php
    $precio_cambiante = 1;
    include("footer.php");
    ?>
</body>