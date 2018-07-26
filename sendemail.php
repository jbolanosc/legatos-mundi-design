<?php 

    $destinatary = "josue.carit@gmail.com";
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    $Message = $_POST["Message"]; 

    $Content = "Nombre:" . $Name . "\n Correo:" . $Email . "\n Telefono:" . $Phone . "\n Mensaje:" . $Message;

    mail($destinatary, "Pagina web consulta", $Content);
    echo 
    '<script language="javascript">alert("Mensaje enviado.!Muchas gracias por visitarnos!.");
    
    var Nombre = document.querySelector("#Name");
    var Email = document.querySelector("#Email");
    var Phone = document.querySelector("#Phone");
    var Message = document.querySelector("#Message");

    Nombre.innerHTML = "";
    Email.innerHTML = "";
    Phone.innerHTML = "";
    Message.innerHTML = "";

    </script>'; 

    header( 'Location: /index.html' ) ; 

?>