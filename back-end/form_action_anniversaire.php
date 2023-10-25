<?php

$tableau_anniv = [
    "first_anniv",
    "last_anniv",
    "email_anniv",
    "phone_anniv",
    "first_child_anniv",
    "age_anniv",
    "date_anniv",
    "part_anniv",
    "theme_anniv",
    "gateau_anniv",
    "deco_anniv",
    "prixTotal_anniv",
    "message_anniv"
];

$datas_input = [
    "Personne de contact (prénom)",
    "Personne de contact (nom)",
    "Personne de contact (email)",
    "Personne de contact (téléphone)",
    "Prénom de l'enfant",
    "Age de l'enfant",
    "Date souhaitée",
    "Participants",
    "Thème",
    "Gateau",
    "Décoration souhaitée",
    "Prix",
    "Message"
];

$datas = [];

foreach ($tableau_anniv as $t) {
    if (isset($_POST[$t])) {
        $secureData = htmlspecialchars($_POST[$t]);
        $datas[$t] = $secureData;
    } else {
        header("Location: ../form_echec.php");
        exit();
    }
}

$nom = $datas["first_anniv"];
$prenom = $datas["last_anniv"];
$email = $datas["email_anniv"];
$telephone = $datas["phone_anniv"];
$prenomEnfant = $datas["first_child_anniv"];
$ageEnfant = $datas["age_anniv"];
$date = $datas["date_anniv"];
$participants = $datas["part_anniv"];
$theme_anniv = $datas["theme_anniv"];
$gateau = $datas["gateau_anniv"];
$deco = $datas["deco_anniv"];
$prix = $datas["prixTotal_anniv"];
$message_text = $datas["message_anniv"];

// MAIL POUR ASBL

// Variables header
$destinataireMSVT = "informationmsvt@gmail.com";
$mail_senderMSVT = "From: Site MSVT <siteMSVT@msvt.com>\r\n";
$replyMSVT = "Reply-To: $email\r\n";
$content_typeMSVT = "Content-Type: text/html; charset=utf-8\r\n";
$mailerMSVT = "X-Mailer: PHP/" . phpversion();

// Header
$headersMSVT = $mail_senderMSVT
    . $replyMSVT
    . $content_typeMSVT
    . $mailerMSVT;
$toMSVT = $destinataireMSVT;

// Objet + message
$subjectMSVT = "Nouvelle réservation (Anniversaire)";
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
            <h1>Nouvelle réservation (anniversaire)</h1>
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
                    <th><strong>Prénom (enfant) :</strong></th>
                    <td>$prenomEnfant</td>
                </tr>
                <tr>
                    <th><strong>Age :</strong></th>
                    <td>$ageEnfant</td>
                </tr>
                <tr>
                    <th><strong>Participants :</strong></th>
                    <td>$participants</td>
                </tr>
                <tr>
                    <th><strong>Date :</strong></th>
                    <td>$date</td>
                </tr>
                <tr>
                    <th><strong>Thème :</strong></th>
                    <td>$theme_anniv</td>
                </tr>
                <tr>
                    <th><strong>Gateau :</strong></th>
                    <td>$gateau</td>
                </tr>
                <tr>
                    <th><strong>Décoration (gateau)</strong></th>
                    <td>$deco</td>
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
    </head>
    <body>
        <p>
            Bonjour M. $nom,
        </p>
        <p>
            Nous avons le plaisir de vous confirmer que votre réservation pour l'anniversaire $prenomEnfant en date du $date de 14h à 17h a bien été enregistrée. 
        </p>
        <p>
            Cependant, <strong>pour garantir votre participation, nous vous invitons à procéder au paiement du forfait de 156 euros (de 1 à 12 enfants) dans les plus brefs délais </strong>. Le cas échant, la somme de 13 euros par enfant supplémentaire devra être payée en liquide <strong>sur place</strong> (attention, nous n'avons pas d'argent en caisse, merci de prévoir le montant exact).        
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
                    <th><strong>Prénom (enfant) :</strong></th>
                    <td>$prenomEnfant</td>
                </tr>
                <tr>
                    <th><strong>Age :</strong></th>
                    <td>$ageEnfant</td>
                </tr>
                <tr>
                    <th><strong>Participants :</strong></th>
                    <td>$participants</td>
                </tr>
                <tr>
                    <th><strong>Date :</strong></th>
                    <td>$date</td>
                </tr>                
                <tr>
                    <th><strong>Thème choisi :</strong></th>
                    <td>$theme_anniv</td>
                </tr>
                <tr>
                    <th><strong>Gateau :</strong></th>
                    <td>$gateau</td>
                </tr>
                <tr>
                    <th><strong>Décoration :</strong></th>
                    <td>$deco</td>
                </tr>     
                <tr>
                    <th><strong>Prix :</strong></th>
                    <td>$prix</td>
                </tr>                                                                                           
                <tr>
                    <th><strong>Message <i>(opt.)</i>:</strong></th>
                    <td>$message_text</td>
                </tr>
            </table>
        </section>
        <p>
            <i>Si vous souhaitez modifier cette réservation, n'hésitez pas à nous contacter.</i>
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
            Une fois ce dernier effectué, veuillez <strong>nous transmettre une preuve de paiement</strong> par mail à info@msvt.be
        </p>
        <p>
            Veuillez noter que les activités \"Nature\" seront organisées en intérieur en cas de mauvais temps.
        </p>
        <p>
            Nous vous remercions pour votre confiance et sommes impatients d'accueillir $prenomEnfant !
        </p>
        <p>
            Nous restons à votre disposition pour répondre à toutes vos questions supplémentaires.
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
