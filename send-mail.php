<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $message = $_POST["message"];

    $to = "animefr3akz@gmail.com";  // Deine echte E-Mail-Adresse
    $subject = "Neue Nachricht von KANN Transporte";
    $headers = "From: " . $email;

    $mailBody = "Name: $name\nE-Mail: $email\nAnfrage zu: $service\n\nNachricht:\n$message";

    mail($to, $subject, $mailBody, $headers);

    // Erfolgsnachricht oder Weiterleitung
    header("Location: danke.html");
    exit;
}
?>