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

    if (isset($_SESSION['error_message'])) {
        echo '<div id="error">';
        echo '<div id="content">';
        echo $_SESSION['error_message'];
        echo '<div id="close_button">';
        echo '<input type="button" value="OK" onclick="div_delete(\'error\')" />';
        echo '</div>';
        echo '<div id="space"></div>';
        echo '</div>';
        echo '</div>';
        unset($_SESSION['error_message']);
    }
    ?>

    <div id="package_container">
        <h1>PARQUE NACIONAL MORROCOY- EDO. FALCON</h1>

        <p>El Parque Nacional Morrocoy está ubicado en el estado Falcón, en el noroeste de Venezuela cerca de las poblaciones de Boca de Aroa, Tucacas, Sanare, Chichiriviche, Flamenco y Tocuyo de la Costa. Fue declarado parque nacional en 1974 y consta de 32.090 hectáreas. El parque se extiende tanto por zonas terrestres como acuáticas del Golfo Triste donde contiene una extensa zona de manglares y gran cantidad de islotes o cayos entre los cuales se encuentran Borracho, Muerto, Sombrero, Sal, Las Animas, Peraza, Paiclá, Los Juanes, Playuela, Tucupido,, Boca Seca, entre otros. En el relieve se destacan el Cerro Chichiriviche, con elevaciones de 250 msnm así como un conjunto de ensenadas y manglares internos.</p>

        <h2>Clima</h2>
        <p>Temperatura relativamente uniforme durante el año entre 27 y 35 °C. Escasa pluviosidad, en época de frío se pueden observar temperaturas de entre 23 a 26 ºC.</p>

        <h2>Fauna</h2>
        <p>Con respecto a la fauna en el parque habitan numerosas especies de avifauna: Aproximadamente 266, reportadas para el Refugio de Fauna Silvestre de Cuare. Debido a que el Parque Nacional Morrocoy y el Refugio de Fauna Silvestre de Cuare se encuentran ubicados en una misma área geográfica, se infiere que para el parque debe existir un número similar, entre las que se destacan el águila pescadora, especies vulnerables como el flamenco, la garza paleta, el pelícano, cotúa, el paují de copete, el loro real Amazona, la corocora roja y las especies consideradas de distribución restringida como la fragata o tijereta de mar. Habitan además numerosos reptiles marinos, entre los que se destacan las tortugas marinas como la tortuga verde, la tortuga carey, la tortuga cardón así como el caimán de la costa; todas ellas consideradas por el libro rojo en peligro de extinción. Entre los mamíferos se incluyen tanto los mamíferos marinos como delfines que utilizan el parque como refugio, así como las diferentes especies de mamíferos terrestres entre los que se pueden mencionar el venado matacán, el oso melero, el zorro cangrejero, el mono araguato, la pereza. Los peces que se reproducen en el parque son el mero, pargo, corvina, sábalo, róbalo, el pez sapo, así como peces que habitan en los arrecifes coralinos. Entre los moluscos y crustáceos: la ostra de mangle, liebres marinas, quigua, existen 2 tipos de langostas Panulirus argus y Panulirus grettatus, cangrejos azules y rojos, jaibas, entre otras especies. Existe una variedad diversa de insectos, aunque aún no existe un levantamiento de
            información para la zona.</p>

        <h2>Flora</h2>
        <p>Le Corresponde a la zona de vida de bosque seco tropical. Se presenta una vegetación bastante variada, donde se reportan desde plantas siempre verdes como el olivo, hasta plantas deciduas como el indio desnudo. Se encuentran plantas adaptadas a suelos de alta salinidad como en el caso de la hierba de vidrio. Siguiendo hacia la vertiente está el Cerro Chichiriviche, sector Mayorquina, donde se puede observar vegetación xerófita de la familia cactácea, tunas y cardones. También se encuentran cuatro especies de manglares reportadas para Venezuela: mangle rojo, mangle negro, mangle blanco y mangle de botoncillo. Entre la vegetación marina subacuática, existe una gran diversidad de algas entre ellas la fanerógama marina, la cual constituye uno de los alimentos predilectos de la Tortuga verde.</p>

        <h2>Actividades Turísticas</h2>
        <p>Las playas de Morrocoy son espectaculares, encontramos una cantidad de ellas en Cayo Sombrero, Playuela, Playuelita, Cayo Alemán, Mayorquina, Cayo de Pescadores, Playa Mero, Punta Brava, Boca Paiclás, Boca Seca, los Juanes, Bajo Caimán, Tucupido, etc. Por debajo de la superficie también se realizan actividades de recreación entre los los corales y los peces que ofrecen todo su esplendor a los submarinistas.</p>
        <p>Dentro del Parque Nacional Morrocoy fluyen grandes cantidades de turistas proveniente de todo el territorio nacional, quienes van a disfrutar de la variedad de playas: Algunos vienen a acampar y otros vienen con sus embarcaciones (lanchas). Además de disfrutar de sus excelentes playas en los cayos se puede practicar el snorkeling y el buceo, gracias a sus playas cristalinas y de poca profundidad lo que la hace perfecta para contemplar las formaciones coralinas y toda la diversidad de fauna que existen en estas formaciones. Como es parque nacional, está bajo la vigilancia de INPARQUES (Instituto Nacional de Parques), organismo encargado de mantener la custodia y control del mismo.</p>
        <p>Dentro del Parque se encuentran distintas comunidades, poblaciones, negocios, posadas. Están las poblaciones de Caño León, Morrocoy, Lizardo y Agua Salobre. Además existen pequeñas marinas que conforman la Asociación de Marinas Deportivas del Golfo Triste, como también se encuentran los embarcaderos, que son asociaciones de lancheros que se dedican al transporte de los turista a las distintas playas de Morrocoy. También hay pequeños puestos de venta de cocadas, empanadas, agua de coco y artesanía local.</p>

        <h2>Los Cayos</h2>
        <p><b>Cayo Sombrero: </b>Cayo sombrero es uno de los cayos preferidos por la gente. En efecto, cuenta con dos playas bastante grandes. Un bosque de palmeras ofrece sombra natural. Se practica mucho el snorkeling es y muy gratificante. En esta isla se puede acampar. Los vendedores ambulantes le ofrecerán ostras, "siete potencias", "levanta muertos" (y otras delicias con mariscos), así como helados y refrescos. Tiene 2 pequeños restaurantes y servicio de alquiler de toldos y sillas.</p>
        <p><b>Pescadores: </b>Es la isla más lejana, normalmente no muy concurrida, área poco profunda, lo que permite mucha libertad para los niños, zona protegida del oleaje por la barrera coralina, lo cual hace que tenga abundancia de peces; de allí su nombre. Tiene poca vegetacióny no tiene servicios. </p>
        <p><b>Los Juanes: </b>Es verdaderamente una piscina natural y es muy frecuentado por las lanchas deportivas, no tiene playa de arena, las lanchas se anclan o amarran unas a otras y algunos se bajan de la lancha con el agua por la cintura. Otros se quedan sobre la lancha, mucha música, muchas bebidas, lo último en moda de playa femenina... Pequeños botes vendiendo comidas y muchos de ellos se les puede pagar con tarjetas de crédito o débito. </p>
        <p><b>Playa Azul: </b>Una de las playas más concurridas, por su belleza, cercanía, con todos los servicios y de aguas limpias ya que está a la entrada de Boca Grande. </p>
        <p><b>Tucupido: </b>Es una pequeñísima isla con palmeras y muy poca concurrencia. No tiene ningún servicio, para llegar hay que conocer bien la zona y levantar el motor de la lancha pues hay que pasar zonas de aguas muy poco profundas. </p>
        <p><b>Boca Seca: </b>Playa bien protegida y muy buena para hacer snorkeling, tiene un caney restaurante administrado por uno de los hoteles más grandes de la zona, abundantes palmeras. </p>
        <p><b>Playuela: </b>Después de Cayo Sombrero es una de las islas más visitadas, tiene un pequeño restaurante, servicio de sillas y toldos en alquiler, vendedores ambulantes y es usada para actividades de buceo. Sus playas tienen abundantes palmeras. </p>
        <p><b>Playa Mero: </b>Una de las playas menos concurridas. Para llegar a la playa hay que caminar unos 200 mts., tiene vegetación de palmeras pero no muy abundante. Existen muy pocos servicios pero es ideal para quien  prefiere un sitio con poca gente. </p>
        <p><b>Cayo Paiclá: </b>Isla ideal para niños, ya que el agua se va haciendo profunda gradualmente, tiene restaurante, palmeras y es de tamaño medio. Es una de las islas más cercanas a los puertos de Morrocoy y Tucacas. </p>
        <p><b>Punta Brava: </b>Es la playa más cercana a Tucacas. En esta isla se construyó un puente, por lo que hoy día se le puede llegar en automóvil y pagar peaje de INPARQUES. Es una playa muy concurrida los fines de semana, tiene pocas palmeras y muchos vendedores ambulantes. En la laguna tiene servicios de botes de pedal y kayak. Tiene alquiler de toldos y sillas. </p>
        <p><b>Mallorquina: </b>A diferencia de casi todos los lugares dignos de visitarse en Morrocoy, Mallorquina no es un cayo sino una playa en tierra firme. Sin embargo, su acceso debe hacerse por mar, al igual que todos los cayos. </p>
        <p><b>Cayo Muerto: </b>Es la isla más cercana a Chichiriviche y con mayor abundancia de palmeras. </p>
        <p><b>Cayo Peraza: </b>Isla paradisíaca y muy pequeña ubicada en Chichiriviche con abundante vegetación, rodeada de corales. Sin servicios. </p>


        <p style="text-align: left;">
            <?php
            $base = "parque-nacional-morrocoy";
            $q = 8;

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