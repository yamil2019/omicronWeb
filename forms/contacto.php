<?php

if (isset($_POST["name"])) {
    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $header = "From: noreply@example.com" . "\r\n";
        $header. = "Reply-to: grupoomicronsrl@gmail.com" . "\r\n";
        $header. = "X-Mailer: PHP/". phpversion();
        $mail = @mail($email, $subject,$message, $header);
        if($mail) {
            echo "<h4> Email enviado exitosamente!</h4>";
        }else{
            echo "<h4> Ocurrio un error al intentar enviar el email";
        }

    }
}