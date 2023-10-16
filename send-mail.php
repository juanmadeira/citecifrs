<?
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $body .= "E-mail: " . $email . "\n";
    $body .= "Subject: " . $subject . "\n";
    $body .= "Message: " . $message . "\n";

    mail("teste@email.com","E-mail",$body);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script>alert("Seu e-mail foi enviado. Obrigado!");</script>
        <meta HTTP-EQUIV="REFRESH" content="0; url=agenda.php">
    </head>
</html>