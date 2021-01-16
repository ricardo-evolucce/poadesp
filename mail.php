<?php


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require_once 'includes/PHPMailer-master/src/Exception.php';
    require_once 'includes/PHPMailer-master/src/PHPMailer.php';
    require_once 'includes/PHPMailer-master/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'email-ssl.com.br';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'atendimento@poadesp.com.br';                     // SMTP username
    $mail->Password   = 'Detran@21';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('atendimento@poadesp.com.br', 'Site PoaDesp');
    $mail->addAddress('ricardomuller90@gmail.com', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contato de '.$_POST['nome'].' - Site PoaDesp';
    $mail->Body    = '<b>Nome:</b> '.$_POST['email'].'<br>
    <b>Email:</b> '.$_POST['nome'].'<br>
    <b>Telefone:</b> '.$_POST['telefone'].'<br>
    <b>Placa:</b> '.$_POST['placa'].'<br>
    <b>Renavam:</b> '.$_POST['renavam'].'<br>
    <b>Mensagem:</b> '.$_POST['mensagem'].'<br>

    ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->CharSet = 'UTF-8';

    $mail->send();
    
    echo '<script>alert("Mensagem enviada! Retornaremos em breve.");
    window.location.replace("http://www.poadesp.com.br");
    </script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



?>