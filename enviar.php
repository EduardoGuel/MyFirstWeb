<?php
  $destino = "fba97.mty@gmail.com";
  $nombre = $_Post["name"];
  $correo = $_Post["email"];
  $nombre = $_Post["name"];
  $mensaje = $_Post["message"];
  $contenido = "Nombre: " . $name . "\nEmail: " . $email . "\nMensaje: " . $mensaje;
  mail($destino,"Mensaje PaginaWeb", $contenido);
  header("location:contacto.html");
?>
