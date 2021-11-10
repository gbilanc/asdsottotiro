<?php

if (filter_input(INPUT_POST, 'email') !== null) {
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $message = filter_input(INPUT_POST, 'message');
    $to = "gbilanc@tin.it";
    $subject = "Richiesta di contatto da asdsottotiro.it";
    $body = "Name: $name\r\nEmail: $email\r\nTelefono: $phone\r\nMessage: $message";
    $headers = "From: $email";
    mail($to, $subject, $body, $headers);
}
?>
