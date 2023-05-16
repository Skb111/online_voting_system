<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "skbaz25@gmail.com";
    $mail->Password = "exbixrpjaemknsxr";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465; 

    $mail->setFrom("skbaz25@gmail.com");

    $mail->addAddress("skbaz25@gmail.com");

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    //$mail->Body = $_POST["message"];
    $mail->Body = $_POST["body"] .' From '. $_POST["email"];

    $mail->send();

    echo "<script>
                alert('Sent Successfully');
                document.location.href='index.php';
            </script>";
}


?>