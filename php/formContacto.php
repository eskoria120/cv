<?php 
$sendTo = "salj8009@gmail.com"; 
$subject = "Contacto"; 
$nombre = $_POST["nombre"]; 
$contraseña = $_POST["correo"]; 
$observacion = $_POST["mensaje"]; 
$headers .= "correo de soporte"; 
$message = "\nNombre: " . $nombre . "\nNombre: " . $correo . "\nCorreo: " . $mensaje . "\nMensaje: "; 
mail($sendTo, $subject, $message, $headers); 
?>