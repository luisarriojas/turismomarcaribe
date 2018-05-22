<?php
ob_start('ob_gzhandler');
?>
<!doctype html>
<head>
    <?php
    $metaDescription = "";
    $metaKeywords = "";
    $metaTitle = "Quienes somos";

    include("metatags.php");

    include("style-script.php");
    ?>
</head>
<body>
    <?php
    include("google-analytics.php");

    include("header.php");
    ?>

    <div id="aboutContainer">
        <h1 id="aboutH1">Nosotros</h1>

        <p class="aboutP">Turismo y Recreación Mar Caribe, C.A., es una empresa operadora turística que tiene como objetivo proveer turismo de alta calidad al público en general. Somos especialistas en crear turismo especialmente para las zonas costeras e insulares venezolanas y ofrecer las mejores alternativas en destinos y costos a nuestros viajeros.</p>

        <p class="aboutP">Somos un equipo de profesionales dedicados a presentar todo tipo de alternativas turísticas; desde paquetes y tours guiados solidarios hasta lo más sofisticado que puedan exigir nuestros clientes.</p>
        
        <p class="aboutP">En Turismo y Recreación Mar Caribe, C.A.,  ofrecemos la posibilidad de realizar turismo nacional a través de nuestro sistema de pago, donde el cliente puede cómodamente programar y cancelar su destino. De ésta manera, nuestra empresa provee la posibilidad para que todos puedan viajar, descansar y disfrutar de días bien merecidos o simplemente por el placer de viajar.</p>

        <p class="aboutP">Contamos con la más avanzada tecnología disponible y un gran equipo humano, serio, profesional y motivado hacia la excelencia, lo cual unido a nuestra experiencia nos permite asegurarle que lo podemos asesorar convenientemente en todo lo relacionado a viajes de placer, negocios, planes corporativos, estudiantiles, tercera edad o de cualquier otro tipo.</p>

        <p class="aboutP">En Turismo y Recreación Mar Caribe, C.A. nuestro norte es hacer conocer nuestras bellas costas venezolanas.</p>
    </div>

    <?php
    include("footer.php");
    ?>
</body>