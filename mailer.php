<?php

if (filter_input(INPUT_POST, 'email') !== null) {
    include_once 'phpMailer/class.phpmailer.php';

    function invia_mail($destinatario, $oggetto) {

        $spunta_marketing = "";
        if (filter_input(INPUT_POST, 'spunta_marketing') !== null) {
            $spunta_marketing = "<br>L'utente ha accettato l'utilizzo dei suoi dati personali per scopi pubblicitari e di marketing.";
        }

        $mail = new PHPMailer();
        $body = '<html><head></head><body>Nome: '
                . filter_input(INPUT_POST, 'nome') . ' <br>Telefono: '
                . filter_input(INPUT_POST, 'phone') . ' <br>Email: '
                . filter_input(INPUT_POST, 'email') . '<br>Messaggio: '
                . filter_input(INPUT_POST, 'message')
                . '<br>Data: ' . date("d/m/Y H:i:s")
                . ' - Indirizzo IP:' . filter_input(INPUT_POST, 'REMOTE_ADDR')
                . $spunta_marketing . '</body></html>';
        $body = preg_replace("[\\\]", '', $body);
        $mail->IsSMTP();
        $mail->Host = "smtp.clion.email";
        $mail->From = "info@asdsottotiro.it";
        $mail->FromName = "asdsottotiro.it";
        $mail->Subject = $oggetto;
        $mail->AltBody = "Per vedere correttamente il messaggio ti preghiamo di utilizzare un visualizzatore HTML!";
        $mail->MsgHTML($body);
        $mail->AddAddress($destinatario, $destinatario);
        //$mail->SMTPDebug = 2;
        $mail->Send();
    }

    invia_mail('info@asdsottotiro.it', "Richiesta di contatto da asdsottotiro.it");
    echo "<script>alert('Grazie per averci contattato');</script>";
}
