<?php
        
 $destino = "admirapublicidad.info@gmail.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $email . "\nNúmero: " . $numero . "\nAsunto: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location: https://4913robertbarrios.github.io/admirapublicidad/index.html");

?>
