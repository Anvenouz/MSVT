<?php

// Traitement des données

$tableau_visit = [
    "first_visit",
    "last_visit",
    "email_visit",
    "phone_visit",
    "number_visit_adult",
    "number_visit_ado",
    "number_visit_enfant",
    "prixTotal_visit",
    "select-theme",
    "select-date",
    "select-heure",
    "message_vis"
];

$datas_input = [
    "Personne de contact (prénom)",
    "Personne de contact (nom)",
    "Personne de contact (email)",
    "Personne de contact (téléphone)",
    "Adulte(s)",
    "Ados(s)",
    "Enfant(s)",
    "Prix",
    "Thème",
    "Date",
    "Heure",
    "Message"
];

$datas = [];

foreach ($tableau_visit as $t) {
    if (isset($_POST[$t])) {
        $secureData = htmlspecialchars($_POST[$t]);
        $datas[$t] = $secureData;
    } else {
        header("Location: ../form_echec.php");
        exit();
    }
}

// Donner variables simples aux éléments sécurisés

$nom = $datas["first_visit"];
$prenom = $datas["last_visit"];
$email = $datas["email_visit"];
$telephone = $datas["phone_visit"];
$adulte = $datas["number_visit_adult"];
$ado = $datas["number_visit_ado"];
$enfant = $datas["number_visit_enfant"];
$prix = $datas["prixTotal_visit"];
$theme = $datas["select-theme"];
$date = $datas["select-date"];
$heure = $datas["select-heure"];
$message_text = $datas["message_vis"];

// MAIL POUR ASBL

// Variables header
$destinataireMSVT = "informationmsvt@gmail.com";
$mail_senderMSVT = "From: Site MSVT <siteMSVT@msvt.com>\r\n";
$replyMSVT = "Reply-To: $email\r\n";
$content_typeMSVT = "Content-Type: text/html; charset=utf-8\r\n";
$mailerMSVT = "X-Mailer: PHP/" . phpversion();

//Header
$headersMSVT = $mail_senderMSVT;
$headersMSVT .= $replyMSVT;
$headersMSVT .= $content_typeMSVT;
$headersMSVT .= $mailerMSVT;
$toMSVT = $destinataireMSVT;

//Objet et message
$subjectMSVT = "Nouvelle réservation (visite carrière $theme)";
$message_html_MSVT = "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        section {
            max-width: 800px;
            margin: 25px auto 15px auto;
            padding: 20px;
            background-color: #fafafa;
            border: 2px solid #3b3b3b;
            border-radius: 10px;
            
        }
        table {
            width: 75%;
            margin: 0 auto;
            border-collapse: collapse;
            border: 2px solid rgba(0, 110, 0, 0.15);
            padding: 15px;
        }
        th, td {
            padding: 15px;
            border-bottom: 2px solid rgba(0, 110, 0, 0.15);
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            font-size: 25px;
            margin: 20px 0 40px 0;
            text-align: center;
            color:rgb(0, 110, 0);
        }
        strong {
            font-weight: bold;
        }
        </style>
    </head>
    <body>
        <section>
            <h1>Nouvelle réservation (visite $theme)</h1>
            <table>
                <tr>
                    <th><strong>Nom :</strong></th>
                    <td>$nom</td>
                </tr>
                <tr>
                    <th><strong>Prénom :</strong></th>
                    <td>$prenom</td>
                </tr>
                <tr>
                    <th><strong>E-mail :</strong></th>
                    <td>$email</td>
                </tr>
                <tr>
                    <th><strong>Téléphone :</strong></th>
                    <td>$telephone</td>
                </tr>
                <tr>
                    <th><strong>Adulte(s) :</strong></th>
                    <td>$adulte</td>
                </tr>
                <tr>
                    <th><strong>Ado(s) :</strong></th>
                    <td>$ado</td>
                </tr>
                <tr>
                    <th><strong>Enfant(s) :</strong></th>
                    <td>$enfant</td>
                </tr>
                <tr>
                    <th><strong>Prix :</strong></th>
                    <td>$prix</td>
                </tr>
                <tr>
                    <th><strong>Date souhaitée :</strong></th>
                    <td>$date</td>
                </tr>
                <tr>
                    <th><strong>Heure :</strong></th>
                    <td>$heure</td>
                </tr>                                                                                          
                <tr>
                    <th colspan=\"2\"><strong>Message:</strong></th>
                </tr>
                <tr>
                    <td colspan=\"2\">$message_text</td>
                </tr>
            </table>
        </section>
    </body>
</html>
";

$mailSentMSVT = mail($toMSVT, $subjectMSVT, $message_html_MSVT, $headersMSVT);

// MAIL POUR USER

// Variables header
$mail_senderUser = "From: ASBL \"MSVT\" <info@msvt.be>\r\n";
$replyUser = "Reply-To: <info@msvt.be>\r\n";
$content_typeUser = "Content-Type: text/html; charset=utf-8\r\n";
$mailerUser = "X-Mailer: PHP/" . phpversion();

//Header
$headersUser = $mail_senderUser;
$headersUser .= $replyUser;
$headersUser .= $content_typeUser;
$headersUser .= $mailerUser;
$toUser = $email;

//Objet + message
$subjectUser = "Merci pour votre demande de réservation !";
$message_html_User = "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style>

    </style>
    </head>
    <body>
        <p>
            Bonjour M. $nom,
        </p>
        <p>
        Nous avons bien reçu votre demande de réservation pour une visite dans les anciennes carrières d'Obourg le $date à $heure.
        </p>
        <section>
        <p>Votre réservation :</p>
            <table>
                <tr>
                    <th><strong>Nom :</strong></th>
                    <td>$nom</td>
                </tr>
                <tr>
                    <th><strong>Prénom :</strong></th>
                    <td>$prenom</td>
                </tr>
                <tr>
                    <th><strong>E-mail :</strong></th>
                    <td>$email</td>
                </tr>
                <tr>
                    <th><strong>Téléphone :</strong></th>
                    <td>$telephone</td>
                </tr>
                <tr>
                    <th><strong>Adulte(s) :</strong></th>
                    <td>$adulte</td>
                </tr>
                <tr>
                    <th><strong>Ado(s) :</strong></th>
                    <td>$ado</td>
                </tr>
                <tr>
                    <th><strong>Enfant(s) :</strong></th>
                    <td>$enfant</td>
                </tr>
                <tr>
                    <th><strong>Date souhaitée :</strong></th>
                    <td>$date</td>
                </tr>
                <tr>
                    <th><strong>Heure :</strong></th>
                    <td>$heure</td>
                </tr>                                                                                          
                <tr>
                    <th colspan=\"2\"><strong>Message:</strong></th>
                </tr>
                <tr>
                    <td colspan=\"2\">$message_text</td>
                </tr>
            </table> 
        </section>
        </p>
        <p>
            Si vous souhaitez modifier cette réservation, n'hésitez pas à nous contacter.
        </p>
        <p>
            Le montant total de la visite s'élève à $prix :
                <ul>
                    <li>$adulte adultes(s)</li>
                    <li>$ado enfant(s) (12 à 18 ans)</li>
                    <li>$enfant enfant(s) (- de 12 ans)</li>
                </ul>
        </p>
        <p>
            Vous trouverez ci-dessous les informations nécessaires pour effectuer le paiement:
        </p>
        <p>
            <ul>
                <li>NOM: ASBL \"MSVT\"</li>
                <li>IBAN: BE38 3701 1363 4072</li>
                <li>Communication: Nom, date et heure de la visite.</li>
            </ul>
        </p>
        <p>
            Une fois ce dernier effectué, <strong>veuillez nous envoyer une preuve de paiement par mail à info@msvt.be</strong>. Votre réservation sera alors confirmée et nous vous enverrons les modalités pratiques pour votre visite.
        </p>
        <p>
            Nous vous remercions de votre confiance.
        </p>
        <p>
            Bien cordialement,
        </p>
        <p>
            L'équipe de l'ASBL \"Maison des Sciences de la Vie et de la Terre\"<br>
            31, Rue d'Empire - 7034 Obourg <br>
            065/84 40 65<br>
            info@msvt.be<br>
            https://www.msvt.be
        </p>
    </body>
</html>
";

$mailSentUser = mail($toUser, $subjectUser, $message_html_User, $headersUser);

// Redirections

if ($mailSentMSVT && $mailSentUser) {
    header("Location: ../form_confirmation.php");
    exit();
} else {
    header("Location: ../form_echec.php");
    exit();
}
