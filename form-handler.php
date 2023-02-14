<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    

    $email_from = 'rossogus@ca11.toservers.com';
    $email_subject = 'Nuevo correo desde fides-rocca.com.ar';

    $email_body = "Nombre: $name.\n".
    "Email: $visitor_email.\n\n\n".
    "Asunto: $subject.\n\n\n\n\n\n".
    "Mensaje: $message.\n";

    $to = "estudio@fides-rocca.com.ar";

    $headers = "From: $email_from \r\n";

    

    mail($to,$email_subject,$email_body,$headers);
    
    header("Location:https://www.fides-rocca.com.ar/thanks.html");
       

?>