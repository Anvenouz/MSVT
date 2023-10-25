<?php

// Traitement des données

$tableau_loc = [
    "first_loc",
    "last_loc",
    "email_loc",
    "phone_loc",
    "org_location",
    "name_location",
    "number1_location",
    "date_location",
    "horaire_location",
    "supp_location1",
    "supp_location2",
    "supp_location2_duree",
    "supp_location2_horaire",
    "prixTotal_location",
    "message_loc"
];

$datas_input = [
    "Personne de contact (prénom)",
    "Personne de contact (nom)",
    "Personne de contact (email)",
    "Personne de contact (téléphone)",
    "Organisme",
    "Nom de l'organisme",
    "Participants",
    "Date souhaitée",
    "Horaire",
    "Supplément",
    "Inclure une visite",
    "Durée de la visite",
    "Début de la visite",
    "Prix",
    "message"
];

$datas = [];

foreach ($tableau_loc as $t) {
    if (isset($_POST[$t])) {
        $secureData = htmlspecialchars($_POST[$t]);
        $datas[$t] = $secureData;
    } else {
        header("Location: ../form_echec.php");
        exit();
    }
}

$nom = $datas["first_loc"];
$prenom = $datas["last_loc"];
$email = $datas["email_loc"];
$telephone = $datas["phone_loc"];
$organisme = $datas["org_location"];
$nomOrganisme = $datas["name_location"];
$participants = $datas["number1_location"];
$date = $datas["date_location"];
$horaire = $datas["horaire_location"];
$supplement1 = $datas["supp_location1"];
$supplement2 = $datas["supp_location2"];
$supplement2_duree = $datas["supp_location2_duree"];
$supplement2_horaire = $datas["supp_location2_horaire"];
$prix = $datas["prixTotal_location"];
$message_text = $datas["message_loc"];

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
$subjectMSVT = "Nouvelle réservation (location)";
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
            <h1>Nouvelle réservation (location)</h1>
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
                    <th><strong>Organisme :</strong></th>
                    <td>$organisme</td>
                </tr>
                <tr>
                    <th><strong>Nom de l'organisme :</strong></th>
                    <td>$nomOrganisme</td>
                </tr>
                <tr>
                    <th><strong>Participants :</strong></th>
                    <td>$participants</td>
                </tr>
                <tr>
                    <th><strong>Date souhaitée :</strong></th>
                    <td>$date</td>
                </tr>
                <tr>
                    <th><strong>Horaire :</strong></th>
                    <td>$horaire</td>
                </tr>
                <tr>
                    <th><strong>Supplément :</strong></th>
                    <td>$supplement1</td>
                </tr>
                <tr>
                    <th><strong>Inclure une visite :</strong></th>
                    <td>$supplement2</td>
                </tr>
                <tr>
                    <th><strong>Durée de la visite :</strong></th>
                    <td>$supplement2_duree</td>
                </tr>
                <tr>
                    <th><strong>Début de la visite :</strong></th>
                    <td>$supplement2_horaire</td>
                </tr>     
                <tr>
                    <th><strong>Prix :</strong></th>
                    <td>$prix</td>
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

//Envoi mail
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
            Nous avons bien reçu votre demande de réservation pour une location le $date.
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
                <th><strong>Organisme :</strong></th>
                <td>$organisme</td>
            </tr>
            <tr>
                <th><strong>Nom de l'organisme :</strong></th>
                <td>$nomOrganisme</td>
            </tr>
            <tr>
                <th><strong>Participants :</strong></th>
                <td>$participants</td>
            </tr>
            <tr>
                <th><strong>Date souhaitée :</strong></th>
                <td>$date</td>
            </tr>
            <tr>
                <th><strong>Horaire :</strong></th>
                <td>$horaire</td>
            </tr>            
            <tr>
                <th><strong>Supplément :</strong></th>
                <td>$supplement1</td>
            </tr>
            <tr>
                <th><strong>Inclure une visite :</strong></th>
                <td>$supplement2</td>
            </tr>
            <tr>
                <th><strong>Durée de la visite :</strong></th>
                <td>$supplement2_duree</td>
            </tr>
            <tr>
                <th><strong>Début de la visite :</strong></th>
                <td>$supplement2_horaire</td>
            </tr>     
            <tr>
                <th><strong>Prix :</strong></th>
                <td>$prix</td>
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
        <i>Si vous souhaitez modifier ou annuler cette réservation, n'hésitez pas à nous contacter</i>.
            </p>
        <p>
            Nous vous confirmons que votre demande de location nous a bien été transmise. Dès à présent, notre équipe se mobilise pour prendre contact avec vous dans les plus brefs délais afin de finaliser tous les détails de votre réservation.
        </p>
        <p>
            Nous tenons à vous remercier pour votre confiance. Notre équipe reste à votre disposition pour répondre à toutes vos questions.
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
</html>";

$mailSentUser = mail($toUser, $subjectUser, $message_html_User, $headersUser);

// Redirections

if ($mailSentMSVT && $mailSentUser) {
    header("Location: ../form_confirmation.php");
    exit();
} else {
    header("Location: ../form_echec.php");
    exit();
};
