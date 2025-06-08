<?php
$to = "sigmamdx@gmail.com";  // L'adresse email de confirmation
$subject = "Nouvelle demande d'adhésion VIP";

// Récupérer les détails du paiement
$payment_info = $_POST['payment_details'];  // Exemple, à personnaliser selon ton API de paiement

// Corps du message
$message = "
    <html>
    <head>
        <title>Nouvelle demande d'adhésion VIP</title>
    </head>
    <body>
        <p>Un utilisateur a payé pour l'accès VIP. Détails du paiement :</p>
        <p>$payment_info</p>
        <p>Merci de confirmer l'adhésion en envoyant un lien de confirmation.</p>
    </body>
    </html>
";

// En-têtes pour l'email HTML
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Envoi de l'email
mail($to, $subject, $message, $headers);
?>
