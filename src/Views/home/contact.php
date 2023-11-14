<!-- Section Contact -->
<section class="section-100 no-pt-resp no-pb-resp bg-linear">
    <!-- Bloc FORMULAIRE -->
    <div class="block-80 w100-resp reveal">
        <div class="form-contact-flex" id="contact-form">
            <!-- Image -->
            <div class="block-img-contact">
                <img src="/assets/img/img_contact/contact-img.jpg" class="hidden-resp" alt="img contact">
            </div>
            <!-- Formulaire -->
            <form class="form-contact" action="/back-end/form_action_contact.php" method="POST" id="form-contact">
                <h1 class="block-title center" id="contact-title-form">Formulaire de contact</h1>
                <!-- Nom / Prénom -->
                <div class="row">
                    <div class="col-md-5 col-6">
                        <div class="form-group">
                            <label class="form-label required-field" for="contact_name">Nom</label>
                            <input type="text" class="form-control" id="contact_name" name="contact_name" required>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-resp">
                    </div>
                    <div class="col-md-5 col-6">
                        <div class="form-group">
                            <label class="form-label" for="contact_surname">Prénom</label>
                            <input type="text" class="form-control" id="contact_surname" name="contact_surname">
                        </div>
                    </div>
                </div>
                <!-- E-mail / téléphone -->
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="form-group">
                            <label class="form-label required-field" for="contact_email">Email</label>
                            <input type="email" class="form-control" id="contact_email" name="contact_email" required>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label required-field" for="contact_phone">Téléphone</label>
                            <input type="tel" class="form-control" id="contact_phone" name="contact_phone" required>
                        </div>
                    </div>
                </div>
                <!-- Sujet + Fichier-->
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label strong required-field" for="contact_sujet">Sujet :</label>
                            <select class="form-control" name="contact_sujet" id="contact_sujet">
                                <optgroup label="-- Choississez un sujet --">
                                    <option class="form-control" value="sujet-scolaire">Activités scolaires</option>
                                    <option class="form-control" value="sujet-visite">Visites guidées thématiques</option>
                                    <option class="form-control" value="sujet-stage-photos">Stages photos</option>
                                    <option class="form-control" value="sujet-stage-CN">Stages Cirque et Nature</option>
                                    <option class="form-control" value="sujet-anniv">Organisation d'anniversaires</option>
                                    <option class="form-control" value="sujet-location">Location de nos locaux</option>
                                    <option class="form-control" value="sujet-general">Suggestion(s) et/ou remarque(s)</option>
                                    <option class="form-control" value="sujet-part">Collaboration ou partenariat</option>
                                    <option class="form-control" value="sujet-candidature">Candidature spontanée</option>
                                    <option class="form-control" value="sujet-autre">Autre</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-resp">
                    </div>
                </div>
                <!-- Message -->
                <div class="row">
                    <div class="col-md-10">
                        <label type="text" class="form-label required-field strong" for="contact_form_message">Message</label>
                        <textarea id="contact_form_message" name="contact_form_message" rows="7" cols="38" class="form-control" spellchecked placeholder="Écrivez ici votre message"></textarea>
                    </div>
                </div>
                <!-- Submit -->
                <div class="row">
                    <div class="col-md-10">
                        <button class="button-main g-recaptcha" data-sitekey="6LdnoOMnAAAAANLToOlQhEug151yNNfaJYcaTqEN" data-callback="onSubmit" type="submit" title="Envoyer" value="Envoyer" class="button-main mt-4">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Bloc INFOS -->
    <div class="block-85 block-index-themes mt50 reveal-3 hidden-resp">
        <img src="/assets/img/logo/logo_v2.1.png " alt="logo MSVT" width="180" id="contact-img">
        <h3 class="block-title">ASBL "Maison des Sciences de la Vie et de la Terre"</h3>
        <p class="block-contact-details center">
            N° de compte : BE38 3701 1363 4072
        </p>
        <p class="block-contact-details center">
            BIC : BBRUBEBB
        </p>
        <p class="block-contact-details center">
            NE : 0476.039.673
        </p>
        <a class="button-main mt20 reveal-4" href="/contact">Nous contacter</a>
        <!-- 3 Blocs Infos  -->
        <div class="flex-table">
            <!-- Table infos -->
            <div class="table-info">
                <table class="table-contact-info">
                    <h4 class="block-title mb25 ">Infos</h4>
                    <tr>
                        <td style="width: 45%;">
                            <p class="block-text-contact align-left">
                                <span class="strong">Adresse </span>
                            </p>
                        </td>
                        <td style="width: 55%;">
                            <p class="block-text-contact align-left no-y">
                                31, Rue d'Empire, 7034 Obourg
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">Téléphone </span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left no-y">
                                065/84 40 65
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">Fax </span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left">
                                065/84 83 74
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">E-mail </span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left">
                                info@msvt.be
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">Site internet</span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left">
                                https://www.msvt.be
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- Table horaire -->
            <div class="table-horaire">
                <table class="table-contact-horaire">
                    <h4 class="block-title mb25 ">Horaire</h4>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">Lundi</span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left">
                                9h - 16h
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">Mardi</span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left">
                                9h - 16h
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">Mercredi</span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left">
                                9h - 16h
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">Jeudi</span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left">
                                9h - 16h
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">Vendredi</span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left">
                                9h - 16h
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="block-text-contact align-left">
                                <span class="strong">Samedi/Dimanche</span>
                            </p>
                        </td>
                        <td>
                            <p class="block-text-contact align-left">
                                Fermé
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- Table Map -->
            <div class="table-map">
                <h4 class="block-title mb25">Localisation</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.851466618852!2d3.9961583121504374!3d50.476190850396115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c24ffdeb25c04b%3A0xf65e28c2833d9182!2sASBL%20Maison%20des%20Sciences%20de%20la%20Vie%20et%20de%20la%20Terre!5e0!3m2!1sfr!2sbe!4v1689339803041!5m2!1sfr!2sbe" width="330" height="220" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- @todo j'ai commenté le captcha attention !!! -->
<!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
<!--<script>-->
<!--    function onSubmit() {-->
<!--        document.getElementById("form-contact").submit();-->
<!--    }-->
<!--</script>-->