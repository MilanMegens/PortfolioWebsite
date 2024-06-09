<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verzamel de formuliergegevens
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Ontvangst e-mailadres
    $to = "milanoss2007@gmail.com";
    $subject = "Nieuw bericht van contactformulier milanmegens.nl";

    // Inhoud van de e-mail
    $body = "Voornaam: $first_name\n";
    $body .= "Achternaam: $last_name\n";
    $body .= "E-mail: $email\n";
    if (!empty($phone)) {
        $body .= "Telefoon nummer: $phone\n\n";
    }
    $body .= "Bericht:\n$message\n";

    // Headers
    $headers = "From: $email\r\n";

    // Verzend de e-mail naar de site eigenaar
    $mailSent = mail($to, $subject, $body, $headers);

    // Verzend de bevestigingsmail naar de gebruiker
    $confirmation_subject = "Bevestiging van je bericht";
    $confirmation_body = "Beste $first_name $last_name,\n\n";
    $confirmation_body .= "Ik heb je bericht succesvol ontvangen! Ik zal zo snel mogelijk contact opnemen.\n\n";
    $confirmation_body .= "Met vriendelijke groet,\n\n";
    $confirmation_body .= "Milan Megens\n\n";
    $confirmation_headers = "From: no-reply@milanmegens.nl\r\n";

    $confirmationMailSent = mail($email, $confirmation_subject, $confirmation_body, $confirmation_headers);

    if ($mailSent && $confirmationMailSent) {
        header("Location: ../contact.php?status=success");
        exit();
    } else {
        header("Location: ../contact.php?status=error");
        exit();
    }
} else {
    header("Location: ../contact.php?status=invalid");
    exit();
}
?>
