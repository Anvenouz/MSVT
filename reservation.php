<?php include_once "front-end/header.php" ?>
<?php include_once "front-end/navbar.php" ?>

<section class="section-100">
    <!-- Bloc général -->
    <div class="block-90 reveal relative">

        <!-- Apparition d'image -->
        <div class="apparition-image">
            <?php
            $imageIds = ["scolaire", "visite", "location", "anniv", "photo", "stageCN"];
            foreach ($imageIds as $id) {
                echo '<img class="zoom-image" id="activite_image_' . $id . '" src="" style="display: none;">';
            }
            ?>
        </div>

        <!-- Carousel -->
        <div class="zoom-image reveal-3">
            <div class="carousel slide carousel-fade carousel-max carousel-max-height carousel-resp-reservation" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/img_carousel/reservation/slide1.jpg" alt="slide 1">
                    </div>
                    <?php
                    for ($i = 2; $i < 7; $i++) {
                        echo '<div class="carousel-item"><img class="d-block w-100" src="img/img_carousel/reservation/slide' . $i . '.jpg" alt="slide ' . $i . '">
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Texte + Select + bouttons + Modales -->
        <div class="block-text-70 reveal-3" id="block-reservation">

            <!-- Texte -->
            <h1 class="block-title reveal-2" id="title-reservation"><span>Tarifs et formulaires</span>de réservation</h1>
            <div class="text-res">
                <p>
                    Pour faciliter votre réservation, nous mettons à disposition des formulaires accessibles en ligne. Remplissez le formulaire correspondant à l'activité et notre équipe se fera un plaisir de revenir vers vous.
                </p>
                <p>
                    Si vous avez des questions supplémentaires ou besoin d'assistance, n'hésitez pas à nous contacter. Nous sommes là pour vous accompagner dans votre démarche et rendre votre expérience avec nous inoubliable.
                </p>
            </div>

            <!-- Select -->
            <form class="select_reservation_activite">
                <label for="activite_selected" class="text-select-reservation strong">Pour quelle activité souhaitez-vous effectuer une réservation ?</label>
                <select id="activite_selected" name="activite_selected" onchange="afficherFormulaire(); afficherImage()">
                    <option value="#" disabled selected>-- Choisissez une activité --</option>
                    <option value="Activites scolaire (maternelles)">Scolaires (maternelles)</option>
                    <option value="Activites scolaire (primaires)">Scolaires (primaires)</option>
                    <option value="Activites scolaire (secondaires)">Scolaires (secondaires)</option>
                    <option value='Stages "Photo nature"'>Stages "Photo nature"</option>
                    <option value='Stages "Cirque et Nature"'>Stages "Cirque et Nature"</option>
                    <option value="Anniversaires">Organisation d'anniversaires</option>
                    <option value="Visite guidee des carrieres">Visite guidée des carrières</option>
                    <option value="Service de location">Service de location</option>
                </select>
            </form>

            <!-- Tous les tableau infos -->
            <div class="table-group">
                <!-- Tableau scolaire -->
                <table class="table-reservation-resp" id="tableauTarifs-scolaire" style="display: none;">
                    <tr>
                        <th class="no-bg" colspan="3">
                            <h2 class="block-title block-title-resp">Formules et tarifs</h2>
                        </th>
                    </tr>
                    <tr>
                        <th class="th-tarif no-bg no-border"></th>
                        <th class="th-tarif">Demi-journée <sup>
                                <a href="javascript:;" data-toggle="tooltip" title="1 demi-journée = 3h d'activités"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup></th>
                        <th class="th-tarif">Journée</th>
                    </tr>
                    <tr>
                        <td class="td-tarif">Maternelles</td>
                        <td class="td-tarif">6€ / élève</td>
                        <td class="td-tarif">9€ / élève</td>
                    </tr>
                    <tr>
                        <td class="td-tarif">Primaires</td>
                        <td class="td-tarif">6€ / élève</td>
                        <td class="td-tarif">9€ / élève</td>
                    </tr>
                    <tr>
                        <td class="td-tarif">Secondaires</td>
                        <td class="td-tarif">9€ / élève</td>
                        <td class="td-tarif">13€ / élève</td>
                    </tr>
                </table>
                <!-- Tableau visite -->
                <table class="table-reservation-resp" id="tableauTarifs-visite" style="display: none;">
                    <tr>
                        <th class="no-bg" colspan="3">
                            <h2 class="block-title block-title-resp">Formules et tarifs</h2>
                        </th>
                    </tr>
                    <tr>
                        <th class="th-tarif no-bg no-border"></th>
                        <th class="th-tarif">Samedi (10-12h)</th>
                        <th class="th-tarif">Samedi (14-16h)</th>
                    </tr>
                    <tr>
                        <td class="td-tarif">Adulte</td>
                        <td class="td-tarif">11€</td>
                        <td class="td-tarif">11€</td>
                    </tr>
                    <tr>
                        <td class="td-tarif">Ados (12-18 ans)</td>
                        <td class="td-tarif">6€</td>
                        <td class="td-tarif">6€</td>
                    </tr>
                    <tr>
                        <td class="td-tarif">Enfants (- de 12 ans)</td>
                        <td class="td-tarif">Gratuit</td>
                        <td class="td-tarif">Gratuit</td>
                    </tr>

                </table>
                <!-- Tableau photo -->
                <table class="table-reservation-resp" id="tableauTarifs-stagePhoto" style="display: none;">
                    <tr>
                        <th class="no-bg" colspan="3">
                            <h2 class="block-title block-title-resp">Formules et tarifs</h2>
                        </th>
                    </tr>
                    <tr>
                        <th class="th-tarif no-bg no-border"></th>
                        <th class="th-tarif">Samedi ou Dimanche<sup>
                                <a href="javascript:;" data-toggle="tooltip" title="Voir les dates disponibles ci-dessous"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup></th>
                    </tr>
                    <tr>
                        <td class="td-tarif">Adulte</td>
                        <td class="td-tarif">100 €</td>
                    </tr>
                </table>
                <!-- Tableau stage CN -->
                <table class="table-reservation-resp" id="tableauTarifs-stageCN" style="display: none;">
                    <tr>
                        <th class="no-bg" colspan="3">
                            <h2 class="block-title block-title-resp">Formules et tarifs</h2>
                        </th>
                    </tr>
                    <tr>
                        <th class="th-tarif no-bg no-border"></th>
                        <th class="th-tarif">Vacances scolaires<sup>
                                <a href="javascript:;" data-toggle="tooltip" title="Stages disponibles ci-dessous"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup></th>
                    </tr>
                    <tr>
                        <td class="td-tarif">Enfant (8-12ans)</td>
                        <td class="td-tarif">80 €</td>
                    </tr>
                </table>
                <!-- Tableau anniversaire -->
                <table class="table-reservation-resp" id="tableauTarifs-anniv" style="display: none;">
                    <tr>
                        <th class="no-bg" colspan="3">
                            <h2 class="block-title block-title-resp">Formules et tarifs</h2>
                        </th>
                    </tr>
                    <tr>
                        <th class="th-tarif no-bg no-border"></th>
                        <th class="th-tarif" colspan="2">Mercredi (14-17h) <sup>
                                <a href="javascript:;" data-toggle="tooltip" title="Anniversaire organisé exclusivement le mercredi après-midi"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup></th>
                    </tr>
                    <tr>
                        <th class="th-tarif">Activités</th>
                        <th class="th-tarif">≤ 12 enfants</th>
                        <th class="th-tarif">> 12 enfants</th>
                    </tr>
                    <tr>
                        <td class="td-tarif">Cirque</td>
                        <td class="td-tarif">156 €</td>
                        <td class="td-tarif">+ 13€ / enfant</td>
                    </tr>
                    <tr>
                        <td class="td-tarif">Nature</td>
                        <td class="td-tarif">156 €</td>
                        <td class="td-tarif">+ 13€ / enfant</td>
                    </tr>
                    <tr>
                        <td class="td-tarif">Mix</td>
                        <td class="td-tarif">156 €</td>
                        <td class="td-tarif">+ 13€ / enfant</td>
                    </tr>
                    <tr>
                        <td class="td-tarif no-bg" colspan="3">Forfait minimum applicable 156€ (12 enfants)</td>
                    </tr>
                </table>
                <!-- Tableau location -->
                <table class="table-reservation-resp" id="tableauTarifs-location" style="display: none;">
                    <tr>
                        <th class="no-bg" colspan="4">
                            <h2 class="block-title block-title-resp">Formules et tarifs</h2>
                        </th>
                    </tr>
                    <tr>
                        <th class="th-tarif no-bg no-border"></th>
                        <th class="th-tarif">Demi-journée<sup>
                                <a href="javascript:;" data-toggle="tooltip" title="1 demi-journée correspond à 3h de location"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup></th>
                        <th class="th-tarif">Journée<sup>
                                <a href="javascript:;" data-toggle="tooltip" title="1 journée correspond à 2 x 3h de location"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup></th>
                    </tr>
                    <tr>
                        <td class="td-tarif">ASBL</td>
                        <td class="td-tarif">100 €</td>
                        <td class="td-tarif">140 €</td>
                    </tr>
                    <tr>
                        <td class="td-tarif">Entreprise</td>
                        <td class="td-tarif">250 €</td>
                        <td class="td-tarif">350 €</td>
                    </tr>
                </table>
            </div>

            <!-- Tous les boutons -->
            <div class="buttons-group">
                <button type="button" class="text-decoration-none button-res-resp button-main" style="display: none;" data-toggle="modal" data-target="#ModalPrimaire" id="ButtonPrimaire">Vers le formulaire de réservation</button>
                <button type="button" class="text-decoration-none button-res-resp button-main" style="display: none;" data-toggle="modal" data-target="#ModalSecondaire" id="ButtonSecondaire">Vers le formulaire de réservation</button>
                <button type="button" class="text-decoration-none button-res-resp button-main" style="display: none;" data-toggle="modal" data-target="#ModalMaternelle" id="ButtonMaternelle">Vers le formulaire de réservation</button>
                <button type="button" class="text-decoration-none button-res-resp button-main" style="display: none;" data-toggle="modal" data-target="#ModalVisit" id="ButtonVisit">Vers le formulaire de réservation</button>
                <button type="button" class="text-decoration-none button-res-resp button-main" style="display: none;" data-toggle="modal" data-target="#ModalCN" id="ButtonCN">Vers le formulaire de réservation</button>
                <button type="button" class="text-decoration-none button-res-resp button-main" style="display: none;" data-toggle="modal" data-target="#ModalLocation" id="ButtonLocation">Vers le formulaire de réservation</button>
                <button type="button" class="text-decoration-none button-res-resp button-main" style="display: none;" data-toggle="modal" data-target="#ModalAnniversaire" id="ButtonAnniversaire">Vers le formulaire de réservation</button>
                <button onclick="openLink('activites_scolaires')" class="text-decoration-none button-secondary" id="bouton_infos_scolaires" style="display: none;">Infos et programme</button>
                <button onclick="openLink('visites')" class="text-decoration-none button-secondary" id="bouton_dates_disponibles_visites" style="display: none;">Infos et dates disponibles</button>
                <button onclick="openLink('stages_CN')" class="text-decoration-none button-secondary" id="bouton_dates_disponibles_stageCN" style="display: none;">Infos et stages disponibles</button>
                <button onclick="openLink('location')" class="text-decoration-none button-secondary" id="bouton_dates_disponibles_location" style="display: none;">Plus d'infos</button>
                <button onclick="openLink('anniversaires')" class="text-decoration-none button-secondary" id="bouton_dates_disponibles_anniv" style="display: none;">Plus d'infos</button>
                <button onclick="openLink('https://www.photo-biodiversite.be/index.php/demande-dinscription/')" class="text-decoration-none button-main" id="bouton_dates_disponibles_stagePhoto" style="display: none;">Réservations et dates disponibles</button>
            </div>

            <!-- Modale Maternelles -->
            <div class="modal fade" id="ModalMaternelle" tabindex="-1" role="dialog" aria-labelledby="ModalMaternelle" aria-hidden="true">
                <div class="modal-dialog modal-perso" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title block-title no-bottom mx-auto" id="ModalMaternelle">Formulaire de réservation</h5>
                            <button type="button" class="button-close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section class="res-form">
                                <form class="block-form" action="/back-end/form_action_mat.php" method="POST" novalidate>
                                    <div id="div1mat">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 0%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Personne de contact</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="first_mat">Nom</label>
                                                    <input type="text" class="form-control required-field-input" id="first_mat" name="first_mat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="last_mat">Prénom</label>
                                                    <input type="text" class="form-control required-field-input" id="last_mat" name="last_mat" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="email_mat">Email</label>
                                                    <input type="email" class="form-control required-field-input" id="email_mat" name="email_mat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="phone_mat">Téléphone</label>
                                                    <input type="tel" class="form-control required-field-input" id="phone_mat" name="phone_mat" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonSuivant1mat" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="next">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div2mat" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 50%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Votre réservation</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="school_name_mat">Nom de l'établissement</label>
                                                    <input type="text" class="form-control required-field-input" id="school_name_mat" name="school_name_mat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="number1_mat">Participants</label>
                                                    <input type="number" id="number1_mat" class="form-control required-field-input" min="0" name="number1_mat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <label class="form-label required-field" for="inlineCheckBoxMat">Année scolaire</label>
                                                <div class="form-group required-field">
                                                    <input class="form-check-input form-res-input" name="inlineCheckBoxMat[]" type="checkbox" id="inlineCheckbox1-mat" value="M2">
                                                    <label class="form-check-label form-res-input" for="inlineCheckbox1-mat">M2</label>
                                                    <input class="form-check-input form-res-input" name="inlineCheckBoxMat[]" type="checkbox" id="inlineCheckbox2-mat" value="M3">
                                                    <label class="form-check-label form-res-input" for="inlineCheckbox2-mat">M3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="form-label required-field" for="school_address_mat">Adresse de l'établissement</label>
                                                <input type="text" class="form-control required-field-input" id="school_address_mat" name="school_address_mat" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-5">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="date_mat">Date</label>
                                                    <input class="form-control datepicker required-field-input" type="text" id="date_mat" name="date_mat" onchange="handleDateChange(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-7">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="horaire-mat">Horaire</label>
                                                    <select class="form-select" id="horaire-mat" name="horaire-mat" onchange="appear_mat()" required>
                                                        <option value="journée complète">Journée (9h-16h)</option>
                                                        <option value="demi-journée (AM)">Matin (9h-12h)</option>
                                                        <option value="demi-journée (PM)">Après-midi (13-16h)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 hidden-resp">
                                            </div>
                                            <div class="col-md-3 hidden-resp">
                                                <div class="form-group">
                                                    <label class="form-label" for="prixTotal">Prix total</label><sup>
                                                        <a href="javascript:;" data-toggle="tooltip" title="Coût indicatif, vous n'avez rien à payer lors d'une demande de réservation"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup>
                                                    <input type="text" id="prixTotal" name="prixTotal" class="form-control disabled" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent2mat" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <button type="button" id="boutonSuivant2mat" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="suivant">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div3mat" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 100%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Choix des activités</h3>
                                        <div class="row no-y">
                                            <div class="col-md-6">
                                                <label class="form-label strong" id="activite_1_mat" for="activite_1_mat_select"><b>Activité 1</b></label>
                                                <select name="activite_1_mat" class="form-select" id="activite_1_mat_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 1-">-- Choisissez une activité --</option>
                                                    <option value="Pic-Pic le hérisson">La rencontre de Pic Pic le hérisson</option>
                                                    <option value="La faune du sol">La faune du sol</option>
                                                    <option value="De la graine à plante">De la graine à la plante</option>
                                                    <option value="L'eau dans tous ses états">L'eau dans tous ses états</option>
                                                    <option value="L'écosystème mare">L'écosystème "mare"</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label strong" id="activite_2_mat" for="activite_2_mat_select"><b>Activité 2</b></label>
                                                <select name="activite_2_mat" class="form-select" id="activite_2_mat_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 2)">-- Choisissez une activité --</option>
                                                    <option value="Pic-Pic le hérisson">La rencontre de Pic Pic le hérisson</option>
                                                    <option value="La faune du sol">La faune du sol</option>
                                                    <option value="De la graine à plante">De la graine à la plante</option>
                                                    <option value="L'eau dans tous ses états">L'eau dans tous ses états</option>
                                                    <option value="L'écosystème mare">L'écosystème "mare"</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row no-y">
                                            <div class="col-md-6" id="activite_3_mat">
                                                <label class="form-label strong" for="activite_3_mat_select"><b>Activité 3</b></label>
                                                <select name="activite_3_mat" class="form-select" id="activite_3_mat_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 3)">-- Choisissez une activité --</option>
                                                    <option value="Pic-Pic le hérisson">La rencontre de Pic Pic le hérisson</option>
                                                    <option value="La faune du sol">La faune du sol</option>
                                                    <option value="De la graine à plante">De la graine à la plante</option>
                                                    <option value="L'eau dans tous ses états">L'eau dans tous ses états</option>
                                                    <option value="L'écosystème mare">L'écosystème "mare"</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6" id="activite_4_mat">
                                                <label class="form-label strong" for="activite_4_mat_select"><b>Activité 4</b></label>
                                                <select name="activite_4_mat" class="form-select" id="activite_4_mat_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 4)">-- Choisissez une activité --</option>
                                                    <option value="Pic-Pic le herisson">La rencontre de Pic Pic le hérisson</option>
                                                    <option value="La faune du sol">La faune du sol</option>
                                                    <option value="De la graine a plante">De la graine à la plante</option>
                                                    <option value="L'eau dans tous ses etats">L'eau dans tous ses états</option>
                                                    <option value="L'ecosystème mare">L'écosystème "mare"</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label hidden-resp" for="message_mat">Message <span class="form-detail">(optionnel)</span></label>
                                                <textarea id="message_mat" name="message_mat" rows="4" cols="38" class="form-control textarea-reservation" placeholder="Une question ? Une remarque ?" spellcheck="true"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="checkbox" name="CGS" class="CGs required-field-input" id="CGs_mat" required>
                                                <label class="form-label required-field label-CG" for="CGs_mat" value="conditions générales"> Lire et accepter les <a href="conditions-generales.html" target="_blank">conditions générales</a>.</label>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent3mat" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <input type="submit" title="Envoyer" value="Envoyer" class="button-main button-submit-resp">
                                            <button type="button" class="button-secondary no-border" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modale Primaires -->
            <div class="modal fade" id="ModalPrimaire" tabindex="-1" role="dialog" aria-labelledby="ModalPrimaire" aria-hidden="true">
                <div class="modal-dialog modal-perso" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title block-title no-bottom mx-auto" id="ModalPrimaire">Formulaire de réservation</h5>
                            <button type="button" class="button-close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section class="res-form">
                                <form class="block-form" action="/back-end/form_action_pri.php" method="POST" novalidate>
                                    <div id="div1pri">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 0%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Personne de contact</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="first_pri">Nom</label>
                                                    <input type="text" class="form-control required-field-input" id="first_pri" name="first_pri" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="last_pri">Prénom</label>
                                                    <input type="text" class="form-control required-field-input" id="last_pri" name="last_pri" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="email_pri">Email</label>
                                                    <input type="email" class="form-control required-field-input" id="email_pri" name="email_pri" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="phone_pri">Téléphone</label>
                                                    <input type="tel" class="form-control required-field-input" id="phone_pri" name="phone_pri" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="boutton-flex">
                                            <button type="button" id="boutonSuivant1pri" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="suivant">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div2pri" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 50%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Votre réservation</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="school_name_pri">Nom de l'établissement</label>
                                                    <input type="text" class="form-control required-field-input" id="school_name_pri" name="school_name_pri" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="number1_pri">Participants</label>
                                                    <input type="number" id="number1_pri" class="form-control required-field-input" min="0" name="number1_pri" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-7">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="inlineCheckBoxPri">Année scolaire</label><br>
                                                    <div class="flex-primaire">
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxPri[]" type="checkbox" id="inlineCheckbox1-pri" value="P1">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox1-pri">P1</label>

                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxPri[]" type="checkbox" id="inlineCheckbox2-pri" value="P2">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox2-pri">P2</label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxPri[]" type="checkbox" id="inlineCheckbox3-pri" value="P3">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox3-pri">P3</label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxPri[]" type="checkbox" id="inlineCheckbox4-pri" value="P4">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox4-pri">P4</label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxPri[]" type="checkbox" id="inlineCheckbox5-pri" value="P5">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox5-pri">P5</label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxPri[]" type="checkbox" id="inlineCheckbox6-pri" value="P6">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox6-pri">P6</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="form-label required-field" for="school_address_pri">Adresse de l'établissement</label>
                                                <input type="text" class="form-control required-field-input" id="school_address_pri" name="school_address_pri">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-5">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="date_pri">Date</label>
                                                    <input class="form-control datepicker required-field-input" type="text" id="date_pri" name="date_pri" onchange="handleDateChange(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-7">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="horaire-pri">Horaire </label>
                                                    <select class="form-select" id="horaire-pri" name="horaire-pri" onchange="appear_pri()">
                                                        <option value="journée complète">Journée (9h-16h)</option>
                                                        <option value="demi-journée (AM)">Matin (9h-12h)</option>
                                                        <option value="demi-journée (PM)">Après-midi (13-16h)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 hidden-resp">
                                            </div>
                                            <div class="col-md-3 hidden-resp">
                                                <div class="form-group">
                                                    <label class="form-label" for="prixTotal_pri">Prix total</label><sup>
                                                        <a href="javascript:;" data-toggle="tooltip" title="Coût indicatif, vous n'avez rien à payer lors d'une demande de réservation"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup>
                                                    <input type="text" id="prixTotal_pri" name="prixTotal_pri" class="form-control disabled" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent2pri" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <button type="button" id="boutonSuivant2pri" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="suivant">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div3pri" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 100%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Choix des activités</h3>
                                        <div class="row no-y">
                                            <div class="col-md-6 relative">
                                                <label class="form-label strong" id="activite_1_pri" for="acivite_1_pri_select"><b>Activité 1</b></label>
                                                <select name="activite_1_pri" class="form-select" id="acivite_1_pri_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 1)">-- Choisissez une activité --</option>
                                                    <optgroup label="-- À la carte (1h30)--">
                                                        <option value="Exposition">Exposition "Biodiversité"</option>
                                                        <option value="Etude et analyse de l'eau">Étude et analyse de l'eau</option>
                                                        <option value="Ecosystème mare">L'écosystème "mare"</option>
                                                        <option value="Faune du sol">La faune du sol</option>
                                                        <option value="Empreintes animales">Les empreintes animales</option>
                                                        <option value="Les chauves-souris">Les chauves-souris</option>
                                                        <option value="Tri et recyclage">Tri et recyclage</option>
                                                        <option value="Becs et pattes">Becs et pattes</option>
                                                        <option value="Les oiseaux">Les oiseaux de nos carrières</option>
                                                        <option value="Les phasmes : maîtres du mimétisme">Les phasmes : maîtres du mimétisme</option>
                                                    </optgroup>
                                                    <optgroup label="-- Demi-journées (3h) --" id="opt-demi-pri1">
                                                        <option value="Le monde végétal (3h)">Le monde végétal</option>
                                                        <option value="La mare et ses habitants (3h)">La mare et ses habitants</option>
                                                        <option value="Nature et préservation (3h)">La nature et sa préservation</option>
                                                        <option value="L'univers de l'eau (3h)">L'univers de l'eau</option>
                                                        <option value="Arbres et la vie souterraine (3h)">Arbres et la vie souterraine</option>
                                                        <option value="Découverte des oiseaux (3h)">Découverte des oiseaux</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label strong" id="activite_2_pri" for="acivite_2_pri_select"><b>Activité 2</b></label>
                                                <select name="activite_2_pri" class="form-select" id="acivite_2_pri_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 2)">-- Choisissez une activité --</option>
                                                    <optgroup label="-- À la carte (1h30)--">
                                                        <option value="Exposition">Exposition "Biodiversité"</option>
                                                        <option value="Etude et analyse de l'eau">Étude et analyse de l'eau</option>
                                                        <option value="Ecosystème mare">L'écosystème "mare"</option>
                                                        <option value="Faune du sol">La faune du sol</option>
                                                        <option value="Empreintes animales">Les empreintes animales</option>
                                                        <option value="Les chauves-souris">Les chauves-souris</option>
                                                        <option value="Tri et recyclage">Tri et recyclage</option>
                                                        <option value="Becs et pattes">Becs et pattes</option>
                                                        <option value="Les oiseaux">Les oiseaux de nos carrières</option>
                                                        <option value="Les phasmes : maîtres du mimétisme">Les phasmes : maîtres du mimétisme</option>
                                                    </optgroup>
                                                    <optgroup label="-- Demi-journées (3h) --" id="opt-demi-pri2">
                                                        <option value="Le monde végétal (3h)">Le monde végétal</option>
                                                        <option value="La mare et ses habitants (3h)">La mare et ses habitants</option>
                                                        <option value="Nature et préservation (3h)">La nature et sa préservation</option>
                                                        <option value="L'univers de l'eau (3h)">L'univers de l'eau</option>
                                                        <option value="Arbres et la vie souterraine (3h)">Arbres et la vie souterraine</option>
                                                        <option value="Découverte des oiseaux (3h)">Découverte des oiseaux</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row no-y">
                                            <div class="col-md-6" id="activite_3_pri">
                                                <label class="form-label strong" for="acivite_3_pri_select"><b>Activité 3</b></label>
                                                <select name="activite_3_pri" class="form-select" id="acivite_3_pri_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 3)">-- Choisissez une activité --</option>
                                                    <optgroup label="-- À la carte (1h30)--">
                                                        <option value="Exposition">Exposition "Biodiversité"</option>
                                                        <option value="Etude et analyse de l'eau">Étude et analyse de l'eau</option>
                                                        <option value="Ecosystème mare">L'écosystème "mare"</option>
                                                        <option value="Faune du sol">La faune du sol</option>
                                                        <option value="Empreintes animales">Les empreintes animales</option>
                                                        <option value="Les chauves-souris">Les chauves-souris</option>
                                                        <option value="Tri et recyclage">Tri et recyclage</option>
                                                        <option value="Becs et pattes">Becs et pattes</option>
                                                        <option value="Les oiseaux">Les oiseaux de nos carrières</option>
                                                        <option value="Les phasmes : maîtres du mimétisme">Les phasmes : maîtres du mimétisme</option>
                                                    </optgroup>
                                                    <optgroup label="-- Demi-journées (3h) --" id="opt-demi-pri3">
                                                        <option value="Le monde végétal (3h)">Le monde végétal</option>
                                                        <option value="La mare et ses habitants (3h)">La mare et ses habitants</option>
                                                        <option value="Nature et préservation (3h)">La nature et sa préservation</option>
                                                        <option value="L'univers de l'eau (3h)">L'univers de l'eau</option>
                                                        <option value="Arbres et la vie souterraine (3h)">Arbres et la vie souterraine</option>
                                                        <option value="Découverte des oiseaux (3h)">Découverte des oiseaux</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-md-6" id="activite_4_pri">
                                                <label class="form-label" for="acivite_4_pri_select"><b>Activité 4</b></label>
                                                <select name="activite_4_pri" class="form-select" id="acivite_4_pri_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 4)">-- Choisissez une activité --</option>
                                                    <optgroup label="-- À la carte (1h30)--">
                                                        <option value="Exposition">Exposition "Biodiversité"</option>
                                                        <option value="Etude et analyse de l'eau">Étude et analyse de l'eau</option>
                                                        <option value="Ecosystème mare">L'écosystème "mare"</option>
                                                        <option value="La Faune du sol">La faune du sol</option>
                                                        <option value="Les empreintes animales">Les empreintes animales</option>
                                                        <option value="Les chauves-souris">Les chauves-souris</option>
                                                        <option value="Tri et recyclage">Tri et recyclage</option>
                                                        <option value="Becs et pattes">Becs et pattes</option>
                                                        <option value="Les oiseaux">Les oiseaux de nos carrières</option>
                                                        <option value="Les phasmes : maîtres du mimétisme">Les phasmes : maîtres du mimétisme</option>
                                                    </optgroup>
                                                    <optgroup label="-- Demi-journées (3h) --" id="opt-demi-pri4">
                                                        <option value="Le monde végétal (3h)">Le monde végétal</option>
                                                        <option value="La mare et ses habitants (3h)">La mare et ses habitants</option>
                                                        <option value="Nature et préservation (3h)">La nature et sa préservation</option>
                                                        <option value="L'univers de l'eau (3h)">L'univers de l'eau</option>
                                                        <option value="Arbres et la vie souterraine (3h)">Arbres et la vie souterraine</option>
                                                        <option value="Découverte des oiseaux (3h)">Découverte des oiseaux</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label hidden-resp" for="message_pri">Message <span class="form-detail">(optionnel)</span></label>
                                                <textarea id="message_pri" name="message_pri" rows="4" cols="38" class="form-control textarea-reservation" placeholder="Une question ? Une remarque ?" spellcheck="true"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="checkbox" name="CGS" class="CGs required-field-input" id="CGs_pri" required>
                                                <label class="form-label required-field label-CG" for="CGs_pri" value="conditions générales"> Lire et accepter les <a href="conditions-generales.html" target="_blank">conditions générales</a>.</label>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent3pri" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <input type="submit" title="Envoyer" value="Envoyer" class="button-main button-submit-resp">
                                            <button type="button" class="button-secondary no-border" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modale Secondaires -->
            <div class="modal fade" id="ModalSecondaire" tabindex="-1" role="dialog" aria-labelledby="ModalSecondaire" aria-hidden="true">
                <div class="modal-dialog modal-perso" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title block-title no-bottom mx-auto" id="ModalSecondaire">Formulaire de réservation</h5>
                            <button type="button" class="button-close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section class="res-form">
                                <form class="block-form" action="/back-end/form_action_sec.php" method="POST" novalidate>
                                    <div id="div1sec">
                                        <div class="progress-bar">
                                            <div id="progress1" class="progress" style="width: 0%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Personne de contact</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="first_sec">Nom</label>
                                                    <input type="text" class="form-control required-field-input" name="first_sec" id="first_sec" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="last_sec">Prénom</label>
                                                    <input type="text" class="form-control required-field-input" name="last_sec" id="last_sec" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="email_sec">Email</label>
                                                    <input type="email" class="form-control required-field-input" name="email_sec" id="email_sec" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="phone_sec">Téléphone</label>
                                                    <input type="tel" class="form-control required-field-input" name="phone_sec" id="phone_sec" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonSuivant1sec" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="next">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div2sec" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 50%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Votre réservation</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="school_name_sec">Nom de l'établissement</label>
                                                    <input type="text" class="form-control required-field-input" name="school_name_sec" id="school_name_sec" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="number1_sec">Participants</label>
                                                    <input type="number" class="form-control required-field-input" id="number1_sec" name="number1_sec" min="0" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-7">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="inlineCheckBoxSec">Année scolaire</label><br>
                                                    <div class="flex-secondaire">
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxSec[]" type="checkbox" id="inlineCheckbox1-sec" value="S1">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox1-sec">S1</label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxSec[]" type="checkbox" id="inlineCheckbox2-sec" value="S2">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox2-sec">S2</label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxSec[]" type="checkbox" id="inlineCheckbox3-sec" value="S3">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox3-sec">S3</label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxSec[]" type="checkbox" id="inlineCheckbox4-sec" value="S4">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox4-sec">S4</label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxSec[]" type="checkbox" id="inlineCheckbox5-sec" value="S5">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox5-sec">S5</label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input form-res-input" name="inlineCheckBoxSec[]" type="checkbox" id="inlineCheckbox6-sec" value="S6">
                                                            <label class="form-check-label form-res-input" for="inlineCheckbox6-sec">S6</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="school_address_sec">Adresse de l'établissement</label>
                                                    <input type="text" class="form-control required-field-input" name="school_address_sec" id="school_address_sec" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-5">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="date_sec">Date</label>
                                                    <input class="form-control datepicker required-field-input" name="date_sec" type="text" id="date_sec" onchange="handleDateChange(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-7">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="horaire-sec">Horaire</label>
                                                    <select class="form-select" id="horaire-sec" name="horaire-sec" onchange="appear_sec()" required>
                                                        <option value="journée complète">Journée (9h-16h)</option>
                                                        <option value="demi-journée (AM)">Matin (9h-12h)</option>
                                                        <option value="demi-journée (PM)">Après-midi (13-16h)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 hidden-resp">
                                            </div>
                                            <div class="col-md-3 hidden-resp">
                                                <div class="form-group">
                                                    <label class="form-label" for="prixTotal_sec">Prix total</label><sup>
                                                        <a href="javascript:;" data-toggle="tooltip" title="Coût indicatif, vous n'avez rien à payer lors d'une demande de réservation"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup>
                                                    <input type="text" id="prixTotal_sec" name="prixTotal_sec" class="form-control disabled" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent2sec" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <button type="button" id="boutonSuivant2sec" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="suivant">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div3sec" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 100%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Choix des activités</h3>
                                        <div class="row no-y">
                                            <div class="col-md-6" id="activite_1_sec">
                                                <label class="form-label strong" id="activite_1_sec" for="acivite_1_sec_select">Activité 1</label>
                                                <select name="activite_1_sec" class="form-select" id="acivite_1_sec_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 1)">-- Choisissez une activité --</option>
                                                    <optgroup label="-- À la carte (1h30)--">
                                                        <option value="Visite (botanique)">Visite des carrières (Botanique)</option>
                                                        <option value="Visite (écosystème)">Visite des carrières (Écosystème)</option>
                                                        <option value="Visite (énergie)">Visite des carrières (Énergie)</option>
                                                        <option value="Exposition biodiversité">Exposition "Biodiversité"</option>
                                                        <option value="Pollution et énergie">Pollution et énergie durable</option>
                                                        <option value="Interaction écosystème">Interactions au sein des écosystèmes</option>
                                                        <option value="Développement durable">Notion de développement durable</option>
                                                    </optgroup>
                                                    <optgroup label="-- Demi-journées (3h) --" id="opt-demi-sec1">
                                                        <option value="Visite de la cimenterie (3h)">Visite de la cimenterie</option>
                                                        <option value="Biologie végétale (3h)">Biologie végétale</option>
                                                        <option value="Etude des écosystèmes (3h)">Étude des écosystèmes</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-md-6" id="activite_2_sec">
                                                <label class="form-label strong" id="activite_2_sec" for="acivite_2_sec_select">Activité 2</label>
                                                <select name="activite_2_sec" class="form-select" id="acivite_2_sec_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 2)">-- Choisissez une activité --</option>
                                                    <optgroup label="-- À la carte (1h30)--">
                                                        <option value="Visite (botanique)">Visite des carrières (Botanique)</option>
                                                        <option value="Visite (écosystème)">Visite des carrières (Écosystème)</option>
                                                        <option value="Visite (énergie)">Visite des carrières (Énergie)</option>
                                                        <option value="Exposition biodiversité">Exposition "Biodiversité"</option>
                                                        <option value="Pollution et énergie">Pollution et énergie durable</option>
                                                        <option value="Interaction écosystème">Interactions au sein des écosystèmes</option>
                                                        <option value="Développement durable">Notion de développement durable</option>
                                                    </optgroup>
                                                    <optgroup label="-- Demi-journées (3h) --" id="opt-demi-sec2">
                                                        <option value="Visite de la cimenterie (3h)">Visite de la cimenterie</option>
                                                        <option value="Biologie végétale (3h)">Biologie végétale</option>
                                                        <option value="Etude des écosystèmes (3h)">Étude des écosystèmes</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row no-y">
                                            <div class="col-md-6" id="activite_3_sec">
                                                <label class="form-label strong" for="acivite_3_sec_select">Activité 3</label>
                                                <select name="activite_3_sec" class="form-select" id="acivite_3_sec_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 3)">-- Choisissez une activité --</option>
                                                    <optgroup label="-- À la carte (1h30)--">
                                                        <option value="Visite (botanique)">Visite des carrières (Botanique)</option>
                                                        <option value="Visite (écosystème)">Visite des carrières (Écosystème)</option>
                                                        <option value="Visite (énergie)">Visite des carrières (Énergie)</option>
                                                        <option value="Exposition biodiversité">Exposition "Biodiversité"</option>
                                                        <option value="Pollution et énergie">Pollution et énergie durable</option>
                                                        <option value="Interaction écosystème">Interactions au sein des écosystèmes</option>
                                                        <option value="Développement durable">Notion de développement durable</option>
                                                    </optgroup>
                                                    <optgroup label="-- Demi-journées (3h) --" id="opt-demi-sec3">
                                                        <option value="Visite de la cimenterie (3h)">Visite de la cimenterie</option>
                                                        <option value="Biologie végétale (3h)">Biologie végétale</option>
                                                        <option value="Etude des écosystèmes (3h)">Étude des écosystèmes</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-md-6" id="activite_4_sec">
                                                <label class="form-label strong" for="acivite_4_sec_select">Activité 4</label>
                                                <select name="activite_4_sec" class="form-select" id="acivite_4_sec_select">
                                                    <option class="hidden" disabled selected value="(Pas d'activité 4)">-- Choisissez une activité --</option>
                                                    <optgroup label="-- À la carte (1h30)--">
                                                        <option value="Visite (botanique)">Visite des carrières (Botanique)</option>
                                                        <option value="Visite (écosystème)">Visite des carrières (Écosystème)</option>
                                                        <option value="Visite (énergie)">Visite des carrières (Énergie)</option>
                                                        <option value="Exposition biodiversité">Exposition "Biodiversité"</option>
                                                        <option value="Pollution et énergie">Pollution et énergie durable</option>
                                                        <option value="Interaction écosystème">Interactions au sein des écosystèmes</option>
                                                        <option value="Développement durable">Notion de développement durable</option>
                                                    </optgroup>
                                                    <optgroup label="-- Demi-journées (3h) --" id="opt-demi-sec4">
                                                        <option value="Visite de la cimenterie (3h)">Visite de la cimenterie</option>
                                                        <option value="Biologie végétale (3h)">Biologie végétale</option>
                                                        <option value="Etude des écosystèmes (3h)">Étude des écosystèmes</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label hidden-resp" for="message_sec">Message <span class="form-detail">(optionnel)</span></label>
                                                <textarea id="message_sec" name="message_sec" rows="4" cols="38" class="form-control textarea-reservation" placeholder="Une question ? Une remarque ?" spellcheck="true"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="checkbox" name="CGS" class="CGs required-field-input" id="CGs_sec" required>
                                                <label class="form-label required-field label-CG" for="CGs_sec" value="conditions générales"> Lire et accepter les <a href="conditions-generales.html" target="_blank">conditions générales</a>.</label>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent3sec" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <input type="submit" title="Envoyer" value="Envoyer" class="button-main button-submit-resp">
                                            <button type="button" class="button-secondary no-border" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modale Visites -->
            <div class="modal fade" id="ModalVisit" tabindex="-1" role="dialog" aria-labelledby="ModalVisit" aria-hidden="true">
                <div class="modal-dialog modal-perso" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title block-title no-bottom mx-auto" id="ModalVisit">Formulaire de réservation</h5>
                            <button type="button" class="button-close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section class="res-form">
                                <form class="block-form" action="/back-end/form_action_visite.php" method="POST" novalidate>
                                    <div id="div1vis">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 0%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Personne de contact</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="first_visit">Nom</label>
                                                    <input type="text" class="form-control required-field-input" id="first_visit" name="first_visit" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="last_visit">Prénom</label>
                                                    <input type="text" class="form-control required-field-input" id="last_visit" name="last_visit" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="email_visit">Email</label>
                                                    <input type="email" class="form-control required-field-input" id="email_visit" name="email_visit" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="phone_visit">Téléphone</label>
                                                    <input type="tel" class="form-control required-field-input" id="phone_visit" name="phone_visit" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonSuivant1vis" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="suivant">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div2vis" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 100%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Votre réservation</h3>
                                        <div class="row">
                                            <div class="col-md-3 col-4">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="number_visit_adult">Adulte(s)</label>
                                                    <input type="number" class="form-control" id="number_visit_adult" name="number_visit_adult" value="0" min="0" required onchange="calculerPrixTotalvisit()">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="number_visit_ado">Ado(s)</label><sup>
                                                        <a href="javascript:;" data-toggle="tooltip" title="(12 à 18 ans)"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup>
                                                    <input type="number" class="form-control" id="number_visit_ado" name="number_visit_ado" value="0" min="0" required onchange="calculerPrixTotalvisit()">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="number_visit_enfant">Enfant(s)</label><sup>
                                                        <a href="javascript:;" data-toggle="tooltip" title="(- de 12 ans)"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup>
                                                    <input type="number" class="form-control" id="number_visit_enfant" name="number_visit_enfant" value="0" min="0" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 hidden-resp">
                                                <div class="form-group">
                                                    <label class="form-label" for="prixTotal_visit">Prix total</label><sup>
                                                        <a href="javascript:;" data-toggle="tooltip" title="Coût indicatif, vous n'avez rien à payer lors d'une demande de réservation"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup>
                                                    <input type="text" id="prixTotal_visit" name="prixTotal_visit" class="form-control disabled" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group" id="select-1">
                                                    <label class="form-label required-field" for="select-theme">Thèmes</label>
                                                    <select name="select-theme" class="form-select required-field-input" id="select-theme">
                                                        <option class="hidden italic" value="#" selected disabled>- Thème -</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="select-2">
                                                    <label class="form-label required-field" for="select-date">Dates</label>
                                                    <select name="select-date" class="form-select required-field-input" id="select-date">
                                                        <option class="hidden italic" value="#" selected disabled>- Date -</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="select-3">
                                                    <label class="form-label required-field" for="select-heure">Heure</label>
                                                    <select name="select-heure" class="form-select required-field-input" id="select-heure">
                                                        <option class="hidden italic" value="#" selected disabled>- Heure -</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label hidden-resp" for="message_vis">Message <span class="form-detail">(optionnel)</span></label>
                                                <textarea id="message_vis" name="message_vis" rows="4" cols="38" class="form-control textarea-reservation" placeholder="Une question ? Une remarque ?" spellcheck="true"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="checkbox" name="CGS" class="CGs required-field-input" id="CGs_vis" required>
                                                <label class="form-label required-field label-CG" for="CGs_vis" value="conditions générales"> Lire et accepter les <a href="conditions-generales.html" target="_blank">conditions générales</a>.</label>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent3vis" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <input type="submit" title="Envoyer" value="Envoyer" class="button-main button-submit-resp">
                                            <button type="button" class="button-secondary no-border" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modale CN -->
            <div class="modal fade" id="ModalCN" tabindex="-1" role="dialog" aria-labelledby="ModalCN" aria-hidden="true">
                <div class="modal-dialog modal-perso" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title block-title no-bottom mx-auto" id="ModalCN">Formulaire de réservation</h5>
                            <button type="button" class="button-close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section class="res-form">
                                <form class="block-form" action="/back-end/form_action_CN.php" method="POST" novalidate>
                                    <div id="div1CN">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 0%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Personne de contact</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="first_CN">Nom</label>
                                                    <input type="text" class="form-control required-field-input" id="first_CN" name="first_CN" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="last_CN">Prénom</label>
                                                    <input type="text" class="form-control required-field-input" id="last_CN" name="last_CN" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="email_CN">Email</label>
                                                    <input type="email" class="form-control required-field-input" id="email_CN" name="email_CN" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="phone_CN">Téléphone</label>
                                                    <input type="tel" class="form-control required-field-input" id="phone_CN" name="phone_CN" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" id="boutonSuivant1CN" class="button-main button-next">
                                            <img class="next-prev-icon" src="img/icon/next.png" alt="suivant">
                                        </button>
                                    </div>
                                    <div id="div2CN" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 100%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Votre réservation</h3>
                                        <div class="row">
                                            <div class="col-md-5 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="first_child_CN" required>Nom (enfant)</label>
                                                    <input type="text" class="form-control required-field-input" id="first_child_CN" name="first_child_CN" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="last_child_CN">Prénom (enfant)</label>
                                                    <input type="text" class="form-control required-field-input" id="last_child_CN" name="last_child_CN" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-3">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="age_CN">Age</label>
                                                    <input type="number" class="form-control required-field-input" id="age_CN" min="8" max="12" name="age_CN" required>
                                                </div>
                                            </div>
                                            <div class="col-9 hidden-no-resp">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="stage-CN">Stage</label>
                                                    <select class="form-select" id="stage-CN" name="stage-CN">
                                                        <option value="Carnaval">Date 1</option>
                                                        <option value="Paques">Date 2</option>
                                                        <option value="Eté sem 1">Date 3</option>
                                                        <option value="Eté sem 2">Date 4</option>
                                                        <option value="Eté sel 3">Date 5</option>
                                                        <option value="Toussaint">Date 6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-9 hidden-resp">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="stage_CN">Stage </label>
                                                    <select class="form-select" id="stage_CN" name="stage_CN">
                                                        <option value="XX/XX/XX au XX/XX/XX (Toussaint)">Date 1</option>
                                                        <option value="XX/XX/XX au XX/XX/XX (Paques)">Date 2</option>
                                                        <option value="XX/XX/XX au XX/XX/XX (Ete1)">Date 3</option>
                                                        <option value="XX/XX/XX au XX/XX/XX (Ete2)">Date 4</option>
                                                        <option value="XX/XX/XX au XX/XX/XX (Ete3)">Date 5</option>
                                                        <option value="XX/XX/XX au XX/XX/XX (Toussaint)">Date 6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="garderie_AM">Garderie (matin)<sup>
                                                            <a href="javascript:;" data-toggle="tooltip" title="Garderie gratuite de 7h30 à 9h (inscription obligatoire)"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup></label>
                                                    <select class="form-select" id="garderie_AM" name="garderie_AM">
                                                        <option value="Garderie Oui">Oui</option>
                                                        <option value="Garderie Non">Non</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="garderie_PM">Garderie (soir)<sup>
                                                            <a href="javascript:;" data-toggle="tooltip" title="Garderie gratuite de 16h à 17h (inscription obligatoire)"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup></label>
                                                    <select class="form-select" id="garderie_PM" name="garderie_PM">
                                                        <option value="Garderie Oui">Oui</option>
                                                        <option value="Garderie Non">Non</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label hidden-resp" for="message_CN">Message <span class="form-detail">(optionnel)</span></label>
                                                <textarea id="message_CN" name="message_CN" rows="4" cols="38" class="form-control textarea-reservation" placeholder="Une question ? Une remarque ?"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="checkbox" name="CGS" class="CGs required-field-input" id="CGs_CN" required>
                                                <label class="form-label required-field label-CG" for="CGs_CN" value="conditions générales"> Lire et accepter les <a href="conditions-generales.html" target="_blank">conditions générales</a>.</label>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent3CN" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <input type="submit" title="Envoyer" value="Envoyer" class="button-main button-submit-resp">
                                            <button type="button" class="button-secondary no-border" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modale Anniversaire -->
            <div class="modal fade" id="ModalAnniversaire" tabindex="-1" role="dialog" aria-labelledby="ModalAnniversaire" aria-hidden="true">
                <div class="modal-dialog modal-perso" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title block-title no-bottom mx-auto" id="ModalAnniversaire">Formulaire de réservation</h5>
                            <button type="button" class="button-close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section class="res-form">
                                <form class="block-form" action="/back-end/form_action_anniversaire.php" method="POST" novalidate>
                                    <div id="div1anniv">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 0%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Personne de contact</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="first_anniv">Nom</label>
                                                    <input type="text" class="form-control required-field-input" id="first_anniv" name="first_anniv" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="last_anniv">Prénom</label>
                                                    <input type="text" class="form-control required-field-input" id="last_anniv" name="last_anniv" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="email_anniv">Email</label>
                                                    <input type="email" class="form-control required-field-input" id="email_anniv" name="email_anniv" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="phone_anniv">Téléphone</label>
                                                    <input type="tel" class="form-control required-field-input" id="phone_anniv" name="phone_anniv" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonSuivant1anniv" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="suivant">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div2anniv" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 100%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Votre réservation</h3>
                                        <div class="row">
                                            <div class="col-md-4 col-9">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="first_child_anniv" required>Prénom de l'enfant</label>
                                                    <input type="text" class="form-control required-field-input" id="first_child_anniv" name="first_child_anniv" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-3">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="age_anniv">Age</label>
                                                    <input type="number" class="form-control required-field-input" id="age_anniv" min="6" max="12" name="age_anniv" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="part_anniv">Participants</label>
                                                    <input type="number" class="form-control required-field-input" id="part_anniv" min="0" max="16" name="part_anniv" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-7">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="date_anniv">Date souhaitée</label>
                                                    <input class="form-control datepicker required-field-input" type="text" id="date_anniv" name="date_anniv" onchange="handleDateChange(this)" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-4">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="theme_anniv">Thèmes</label>
                                                    <select class="form-select" id="theme_anniv" name="theme_anniv" required>
                                                        <option selected value="nature">Nature</option>
                                                        <option value="cirque">Cirque</option>
                                                        <option value="mix">Mix</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="gateau_anniv">Gateau</label>
                                                    <select class="form-select" id="gateau_anniv" name="gateau_anniv" required>
                                                        <option selected value="chocolat">Chocolat</option>
                                                        <option value="marbré">Marbré</option>
                                                        <option value="nature">Nature</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-4">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="deco_anniv">Déco</label>
                                                    <select class="form-select" id="deco_anniv" name="deco_anniv" required>
                                                        <option selected value="massepain">Massepain</option>
                                                        <option value="ganaché">Ganaché</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 hidden-resp">
                                                <div class="form-group">
                                                    <label class="form-label" for="prixTotal_anniv">Prix total</label><sup>
                                                        <a href="javascript:;" data-toggle="tooltip" title="Coût indicatif, vous n'avez rien à payer lors d'une demande de réservation"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup>
                                                    <input type="text" id="prixTotal_anniv" name="prixTotal_anniv" class="form-control disabled" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label hidden-resp" for="message_anniv">Message <span class="form-detail">(optionnel)</span></label>
                                                <textarea id="message_anniv" name="message_anniv" rows="4" cols="38" class="form-control textarea-reservation" placeholder="Une question ? Une remarque ?" spellchecked></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="checkbox" name="CGS" class="CGs required-field-input" id="CGs_anniv" required>
                                                <label class="form-label required-field label-CG" for="CGs_anniv" value="conditions générales"> Lire et accepter les <a href="conditions-generales.html" target="_blank">conditions générales</a>.</label>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent3anniv" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <input type="submit" title="Envoyer" value="Envoyer" class="button-main button-submit-resp">
                                            <button type="button" class="button-secondary no-border" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modale Location -->
            <div class="modal fade" id="ModalLocation" tabindex="-1" role="dialog" aria-labelledby="ModalLocation" aria-hidden="true">
                <div class="modal-dialog modal-perso" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title block-title no-bottom mx-auto" id="ModalLocation">Formulaire de réservation</h5>
                            <button type="button" class="button-close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <section class="res-form">
                                <form class="block-form" action="/back-end/form_action_location.php" method="POST" novalidate>
                                    <div id="div1loc">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 0%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Personne de contact</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="first_loc">Nom</label>
                                                    <input type="text" class="form-control required-field-input" id="first_loc" name="first_loc" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="last_loc">Prénom</label>
                                                    <input type="text" class="form-control required-field-input" id="last_loc" name="last_loc" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="email_loc">Email</label>
                                                    <input type="email" class="form-control required-field-input" id="email_loc" name="email_loc" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="phone_loc">Téléphone</label>
                                                    <input type="tel" class="form-control required-field-input" id="phone_loc" name="phone_loc" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonSuivant1loc" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="suivant">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div2loc" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 50%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Votre réservation</h3>
                                        <div class="row">
                                            <div class="col-md-3 col-5">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="org_location">Organisme</label>
                                                    <select class="form-select" id="org_location" name="org_location">
                                                        <option value="ASBL">ASBL</option>
                                                        <option value="entreprise">Entreprise</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="name_location">Nom de l'organisme</label>
                                                    <input type="text" class="form-control required-field-input" id="name_location" name="name_location" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-5">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="number1_location">Part.</label>
                                                    <input type="number" id="number1_location" class="form-control required-field" min="0" name="number1_location" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-7 hidden-no-resp">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="date_location">Date souhaitée</label>
                                                    <input class="form-control datepicker" type="text" id="date_location" onchange="handleDateChange(this)" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 hidden-resp">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="date_location">Date souhaitée</label>
                                                    <input class="form-control datepicker" type="text" name="date_location" id="date_location-resp" onchange="handleDateChange(this)" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="form-group">
                                                    <label class="form-label required-field" for="horaire_location">Horaire</label>
                                                    <select class="form-select" name="horaire_location" id="horaire_location">
                                                        <option value="journée complète">Journée (9h-16h)</option>
                                                        <option value="demi-journée (AM)">Matin (9h-12h)</option>
                                                        <option value="demi-journée (PM)">Après-midi (13-16h)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="supp_location1">Supplément</label>
                                                    <select class="form-select" name="supp_location1" id="supp_location1">
                                                        <option selected value="pas de supplément" selected>Pas de supplément</option>
                                                        <option value="sandwichs">Sandwichs garnis</option>
                                                        <option value="viennoiseries">Viennoiseries</option>
                                                        <option value="patisseries">Patisseries</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent2loc" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <button type="button" id="boutonSuivant2loc" class="button-main button-next">
                                                <img class="next-prev-icon" src="img/icon/next.png" alt="suivant">
                                            </button>
                                        </div>
                                    </div>
                                    <div id="div3loc" class="hidden">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 100%;"></div>
                                        </div>
                                        <h3 class="block-subtitle">Ajouter une visite des carrières</h3>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group" id="supp-1">
                                                    <label class="form-label" for="supp_location2">Supplément (visite guidée)<sup>
                                                            <a href="javascript:;" data-toggle="tooltip" title="Visite guidée des anciennes carrières d'Obourg réhabilitées"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup></label>
                                                    <select class="form-select" name="supp_location2" id="supp_location2">
                                                        <option selected value="pas de visite" selected>Ne pas inclure une visite</option>
                                                        <option value="inclure visite">Inclure une visite</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <div class="form-group" id="supp-2" style="display:none">
                                                    <label class="form-label" for="supp_location2_duree">Durée</label>
                                                    <select class="form-select" name="supp_location2_duree" id="supp_location2_duree">
                                                        <option value="(Pas de visite)" selected> </option>
                                                        <option value="1h">1h</option>
                                                        <option value="2h">2h</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <div class="form-group" id="supp-3" style="display:none">
                                                    <label class="form-label" for="supp_location2_horaire">Départ</label>
                                                    <select class="form-select" name="supp_location2_horaire" id="supp_location2_horaire">
                                                        <option value="(Pas de visite)" selected> </option>
                                                        <option value="13h">13h</option>
                                                        <option value="14h">14h</option>
                                                        <option value="14h">15h</option>
                                                        <option value="14h">16h</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 hidden-resp">
                                                <div class="form-group">
                                                    <label class="form-label" for="prixTotal_location">Prix total</label><sup>
                                                        <a href="javascript:;" data-toggle="tooltip" title="Coût indicatif, vous n'avez rien à payer lors d'une demande de réservation"><img src="img/icon/question.png" width="12" alt="tooltip"></a></sup>
                                                    <input type="text" id="prixTotal_location" name="prixTotal_location" class="form-control disabled" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label hidden-resp" for="message_loc">Message<span class="form-detail">(optionnel)</span></label>
                                                <textarea id="message_loc" name="message_loc" rows="4" cols="38" class="form-control textarea-reservation" placeholder="Une question ? Une remarque ?" spellcheck="true"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="checkbox" name="CGS" class="CGs required-field-input" id="CGs_location" required>
                                                <label class="form-label required-field label-CG" for="CGs_location" value="conditions générales"> Lire et accepter les <a href="conditions-generales.html" target="_blank">conditions générales</a>.</label>
                                            </div>
                                        </div>
                                        <div class="button-flex">
                                            <button type="button" id="boutonPrecedent3loc" class="button-main button-prev">
                                                <img class="next-prev-icon" src="img/icon/prev.png" alt="précédent">
                                            </button>
                                            <input type="submit" title="Envoyer" value="Envoyer" class="button-main button-submit-resp">
                                            <button type="button" class="button-secondary no-border" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once "front-end/footer.php" ?>

<script src="js/reservation_setting.js"></script>
<script src="js/error_setting.js"></script>
<script src="js/mat_setting.js"></script>
<script src="js/pri_setting.js"></script>
<script src="js/sec_setting.js"></script>
<script src="js/price_calcul_setting.js"></script>
<script src="js/dates_reservation.js"></script>

</body>

</html>