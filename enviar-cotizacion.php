<?php

session_start();

$email_content = 'Enviado desde: ' . $_POST['id'] . '
        Página web: ' . $_POST['url'] . '
        Nombre: ' . $_POST['contactName'] . '
        Favor responder al teléfono: ' . $_POST['contactPhone'] . '
        Favor responder al email: ' . $_POST['contactEmail'];

if (isset($_POST['formCheckInDate'])) {
    $email_content .= 'Fecha de Entrada: ' . $_POST['formCheckInDate'] . '
                    Fecha de Salida: ' . $_POST['formCheckOutDate'] . '
                    Cantidad de Adultos: ' . $_POST['formQAdults'] . '
                    Cantidad de Niños: ' . $_POST['formQChilds'];
}
$email_content .= '
    Comentario:
    ' . $_POST['contactObservations'];

mail("turismomarcaribe.ve@gmail.com", $_POST['contactName'], $email_content, "From: TurismoMarCaribe.com <ventas@turismomarcaribe.com>");

$_SESSION['error_message'] = "El mensaje ha sido enviado satisfactoriamente.<br />Gracias por comunicarse con Turismo Mar Caribe.";
header("location: " . $_SERVER['HTTP_REFERER']);
?>