<?php

// Traitement des données

$tableau_pri = [
    "first_pri",
    "last_pri",
    "email_pri",
    "phone_pri",
    "school_name_pri",
    "school_address_pri",
    "number1_pri",
    "date_pri",
    "horaire-pri",
    "prixTotal_pri",
    "message_pri"
];

$datas_input = [
    "Personne de contact (prénom)",
    "Personne de contact (nom)",
    "Personne de contact (email)",
    "Personne de contact (téléphone)",
    "Établissement (nom)",
    "Établissement (adresse)",
    "Participants",
    "Date",
    "Horaire",
    "Prix",
    "Message"
];

$datas = [];

foreach ($tableau_pri as $t) {
    if (isset($_POST[$t])) {
        $secureData = htmlspecialchars($_POST[$t]);
        $datas[$t] = $secureData;
    } else {
        header("Location: ../form_echec.php");
        exit();
    }
}

// Affectation des données sécurisées aux variables

$nom = $datas["first_pri"];
$prenom = $datas["last_pri"];
$email = $datas["email_pri"];
$telephone = $datas["phone_pri"];
$etablissement = $datas["school_name_pri"];
$adresseEtablissement = $datas["school_address_pri"];
$participants = $datas["number1_pri"];
$anneeScolaire = implode(', ', $_POST['inlineCheckBoxPri']);
$date = $datas["date_pri"];
$horaire = $datas["horaire-pri"];
$prix = $datas["prixTotal_pri"];
$message_text_pri = $datas["message_pri"];
$activite1 = htmlspecialchars($_POST["activite_1_pri"]);
$activite2 = htmlspecialchars($_POST["activite_2_pri"]);
$activite3 = htmlspecialchars($_POST["activite_3_pri"]);
$activite4 = htmlspecialchars($_POST["activite_4_pri"]);

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
$subjectMSVT = "Nouvelle réservation (primaire)";
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
            <h1>Nouvelle réservation (pri.)</h1>
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
                    <th><strong>Établissement :</strong></th>
                    <td>$etablissement</td>
                </tr>
                <tr>
                    <th><strong>Adresse :</strong></th>
                    <td>$adresseEtablissement</td>
                </tr>
                <tr>
                    <th><strong>Participants :</strong></th>
                    <td>$participants</td>
                </tr>
                <tr>
                    <th><strong>Année scolaire :</strong></th>
                    <td>$anneeScolaire</td>
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
                    <th><strong>Prix :</strong></th>
                    <td>$prix</td>
                </tr>                
                <tr>
                    <th><strong>Activité 1 :</strong></th>
                    <td>$activite1</td>
                </tr>
                <tr>
                    <th><strong>Activité 2 :</strong></th>
                    <td>$activite2</td>
                </tr>
                <tr>
                    <th><strong>Activité 3 :</strong></th>
                    <td>$activite3</td>
                </tr>
                <tr>
                    <th><strong>Activité 4 :</strong></th>
                    <td>$activite4</td>
                </tr>                                                                                                  
                <tr>
                    <th colspan=\"2\"><strong>Message:</strong></th>
                </tr>
                <tr>
                    <td colspan=\"2\">$message_text_pri</td>
                </tr>
            </table>
        </section>
    </body>
</html>
";

$mailSentMSVT = mail($toMSVT, $subjectMSVT, $message_html_MSVT, $headersMSVT);

// MAIL POUR USER

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
        Nous tenons à vous remercier de l'intérêt que vous portez à notre ASBL et ses activités. Nous sommes ravis de pouvoir contribuer à cette expérience éducative et enrichissante pour vos élèves.
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
                        <th><strong>Établissement :</strong></th>
                        <td>$etablissement</td>
                    </tr>
                    <tr>
                        <th><strong>Adresse :</strong></th>
                        <td>$adresseEtablissement</td>
                    </tr>
                    <tr>
                        <th><strong>Participants :</strong></th>
                        <td>$participants</td>
                    </tr>
                    <tr>
                        <th><strong>Année scolaire :</strong></th>
                        <td>$anneeScolaire</td>
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
                        <th><strong>Activité 1 :</strong></th>
                        <td>$activite1</td>
                    </tr>
                    <tr>
                        <th><strong>Activité 2 :</strong></th>
                        <td>$activite2</td>
                    </tr>
                    <tr>
                        <th><strong>Activité 3 :</strong></th>
                        <td>$activite3</td>
                    </tr>
                    <tr>
                        <th><strong>Activité 4 :</strong></th>
                        <td>$activite4</td>
                    </tr>
                    <tr>
                        <th><strong>Prix :</strong></th>
                        <td>$prix</td>
                    </tr>     
                </table>
            </section>
        </p>
        <p>
            <i>Si vous souhaitez modifier ou annuler cette réservation, n'hésitez pas à nous contacter</i>.
        </p>
        <p>
            Nous tenons à vous informer que la facture correspondant à cette réservation (d'un montant de $prix) sera envoyée à l'école après votre visite.
        </p>
        <p>
            Veuillez noter que nous acceptons les bons communaux. Le cas échéant, merci de nous fournir les détails nécessaires afin que nous puissions établir au mieux notre facturation.
        </p>
        <p>
            Nous tenons également à attirer votre attention sur le fait que <strong>toute réservation non annulée au moins 14 jours calendrier à l'avance vous sera facturée </strong>.
        </p>
        <p>
            Pour préparer au mieux votre visite, merci de prévoir :
        </p>
        <p>
            <ul>
                <li>Un sac à dos contenant une gourde, les collations et, le cas échéant, le repas du midi</li>
                <li>Des chaussures de marche ou des bottes ainsi que des chaussures et des chaussettes de rechange (en cas d'activité(s) exterieure(s)</li>
                <li>Un pantalon long et de la crème solaire si nécessaire (en cas d'activité(s) exterieure(s)</li>
            </ul>
        </p>
        <p>
            Pour toute question ou demande d'informations supplémentaires, n'hésitez pas à nous contacter par téléphone au 065/844065 ou par e-mail à info@msvt.be.        </p>
        <p>
            Au plaisir de vous recevoir chez nous,
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
}
