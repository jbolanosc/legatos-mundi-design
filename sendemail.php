<?php 

    $destinatary = "lgpruebam@gmail.com";
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    $Message = $_POST["Message"]; 

    $Content = "Nombre:" . $Name . "\n Correo:" . $Email . "\n Telefono:" . $Phone . "\n Mensaje:" . $Message;

    mail($destinatary, "Pagina web consulta", $Content);
    header( 'Location: /index.html' ) ; 

?>