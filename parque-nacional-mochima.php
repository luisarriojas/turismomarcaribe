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
        <h1>PARQUE NACIONAL MOCHIMA- ESTADO ANZOATEGUI</h1>

        <p>El Parque Nacional Mochima se encuentra a 600 m. sobre el nivel del mar, al noreste de Venezuela, entre las ciudades de Barcelona, Puerto la Cruz y Cumaná, y se extiende a lo largo de la costa a lo largo de un área de 94,935 hectáreas. </p>

        <p>Su belleza es diversa: Playas espectaculares como el Golfo de Santa Fe, el Archipiélago de la Borracha, la Península de Manare y la Bahía de Mochima, múltiples islas, muchas de ellas prácticamente vírgenes, como las Islas Caracas y las Islas Chimaná, y una singular combinación de montañas que besan el mar.  A todas estas maravillas se puede llegar con el servicio de botes del área. </p>

        <p>El Parque Nacional  Mochima es uno de los destinos turísticos más deseados de Venezuela. Playa Colorada es mundialmente famosa por su fina arena de color dorado, casi rojizo, que da nombre al lugar.</p>

        <h2>FAUNA</h2>
        <p>Áreas de nidificación y alimentación de varias especies de tortugas marinas; gran número de aves marinas residentes y migratorias. Enorme diversidad de invertebrados marinos y gran riqueza de peces de importancia para la pesca artesanal. Entre los mamíferos se encuentran el venado carameludo, ballena arenquera y el  delfín común. </p>

        <h2>FLORA</h2>
        <p>En la zona alta, la vegetación es exuberante y abundan los helechos y las orquídeas, la flor nacional venezolana. Se encuentran también el mangle y especies costeras como hierba de vidrio, batatilla de playa, varias cactáceas como los cardones, el guamacho, leguminosas como el cují yaque  y el dividive.</p>

        <h2>TURISMO</h2>
        <p>La belleza de este parque, radica en la combinación de montañas que caen al mar, playas espectaculares y cantidades de islas (muchas de ellas prácticamente vírgenes). Posee diversidad de posadas, restaurantes y tiendas donde comprar suministros. En el puerto de Mochima se pueden tomar lanchas o peñeros para realizar diversos recorridos marítimos.</p>

        <p>Este parque es ideal para la práctica del submarinismo y el velerismo, gracias a sus aguas cálidas del Mar Caribe. Existen una gran cantidad de playas con acceso por carretera como Playa Arapito y Playa Colorada, además de playas en las islas como Playa Las Maritas, Playa Blanca, Playa Cautaro, a las cuales se puede llegar desde distintos embarcaderos. </p>

        <p style="text-align: left;">
            <?php
            $base = "parque-nacional-mochima";
            $q = 5;

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