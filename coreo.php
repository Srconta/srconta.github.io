<?php
//llamada
$nombre=$_POST['nombre'];
$mensaje=$_POST['mensaje'];
$email=$_POST['email'];

//datoa para el coreo 
$destinatario ='srcontagt@gmail.com';
$asunto="contacto desde nuestra web";

$carta="Datos:\t $email,\n $nombre \n";


//enviando mensaje
mail($destinatario, $asunto,$carta,$mensaje);

header('location:mensaje-de-envio.html');
?>