
<?php 
 $destinatario ='mathiastanta059@gmail.com';
 // este el correo que se enviara a todos los mensajes
 $nombre = $_POST['nombre'];
 $asunto = $_POST['asunto'];
 $mensaje = $_POST['mensaje'];
 $email = $_POST['email'];

 $header ="Enviado desde la pagina de edesseperu";
$mensajecompleto = $mensaje ."\nAtentamente:" .$nombre;

mail($destinatario, $asunto, $mensajecompleto ,$header);

 echo "<script>alert('correo enviado existosamente')</script>";
 echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
 ?>