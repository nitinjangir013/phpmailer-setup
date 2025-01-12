<?php
    // Created By Nitin Jangir
    // Git Hub Id - nitinjangir013
    


    // Mailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require './phpmailer/src/Exception.php';
    require './phpmailer/src/PHPMailer.php';
    require './phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'YOUR_SMTP'; // Gmail SMTP server - Eg.smtp.gmail.com
    $mail->SMTPAuth = true;
    $mail->Username = 'YOUR_USERNAME'; // Your Gmail address
    $mail->Password = 'YOUR_PASSWORD'; // Use app password if 2FA is enabled
    $mail->SMTPSecure = 'ssl'; // Encryption method - 'PHPMailer::ENCRYPTION_STARTTLS', 'ssl'
    $mail->Port = 465; // SMTP port for Gmail - 587, 465


    // Set email sender and recipient
    $mail->setFrom('your-email@gmail.com', 'Your Name'); // Your email and name
    $mail->addAddress('recipient-email@example.com', 'Recipient Name'); // Recipient's email and name

    $mail->isHTML(true);
    $mail->Subject = 'DEMO';
    $mail->Body = 'Hi, My Name Nitin Jangir!';
    if ($mail->send()) {
        echo 'Demo email has been sent successfully!';
    } else {
        echo 'Demo email could not be sent.';
    }
?>