<section class="section-100 bg-grey">
    <div class="block-90 reveal">
        <!-- Bloc Général -->
        <div class="section-flex-reverse pb50 reveal-2">
            <!-- Image -->
            <div>
                <img class="reveal-2" id="vis-img1" src="assets/img/img_carousel/reservation/slide2.jpg" alt="image visite carrière">
            </div>
            <!-- texte + video + boutons + modale infos -->
            <div class="block-text-70">
                <!-- Texte -->
                <h1 class="block-title reveal-2" id="vis-title"><span>Explorer les anciennes carrières</span>avec nos visites guidées thématiques</h1>
                <p class="block-text-main reveal-3">
                    Découvrez les anciennes carrières d'Obourg lors de nos visites guidées thématiques. Vous plongerez dans l'histoire de ce lieu tout en explorant des écosystèmes riches et préservés.
                </p>
                <p class="block-text-main reveal-3">
                    Une aventure à vivre en famille ou entre amis, où la beauté de la nature rencontre l'héritage industriel !
                </p>
                <!-- Vidéo -->
                <div class="video">
                    <video class="iframe-yt-visit" src="/vid/vid1.mp4" type="video/mp4" controls autoplay muted>
                    </video>
                </div>
                <!-- Boutons -->
                <div class="button-activity-90">
                    <button type="button" class="button-main reveal-4" data-toggle="modal" data-target="#ModalVisite">Infos pratiques</button>
                    <button type="button" class="button-secondary hidden-resp reveal-4" id="button-date-visite" onclick="scrollToProgrammeVis()">Voir les dates 2024</button>
                </div>
                <!-- //Modal Infos -->
                <div class="modal fade" id="ModalVisite" tabindex="-1" role="dialog" aria-labelledby="ModalVisite" aria-hidden="true">
                    <div class="modal-dialog modal-margin" role="document">
                        <div class="modal-content" id="modal-content-act">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalVisite">Infos pratiques</h5>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <table>
                                        <tr>
                                            <td class="td-tarif strong">Age </td>
                                            <td class="td-tarif">Tout public</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif strong">Groupe</td>
                                            <td class="td-tarif">max. 18</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif strong">Dates</td>
                                            <td class="td-tarif">Samedis exclusivement<sup>
                                                    <a href="javascript:;" data-toggle="tooltip" title='Voir "Dates 2024"'><img src="/assets/img/icon/question.png" width="12" alt="tooltip"></a></sup></td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif strong">Horaire</td>
                                            <td class="td-tarif">10h - 12h ou 14h - 16h</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif strong">Départ</td>
                                            <td class="td-tarif">ASBL "Maison des Sciences de la vie et de la Terre"<sup>
                                                    <a href="javascript:;" data-toggle="tooltip" title="Adresse : 31, Rue d'Empire - 7034 Obourg (Mons)"><img src="/assets/img/icon/question.png" width="12" alt="tooltip"></a></sup></td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif strong" rowspan="3">Tarifs</td>
                                            <td class="td-tarif">11€ (+18 ans)</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">6€ (12-18 ans)</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Gratuit (- de 12 ans)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button-secondary" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thèmes et dates DESKTOP -->
        <div class="section-flex-row hidden-resp reveal-2" id="visit-dates">
            <div class="block-3x-flex" id="block-bota">
                <img class="icon-theme" src="/assets/img/icon/icon-theme/plant.png" alt="icone thème plante">
                <h2 class="block-title reveal-2 block-title-theme"><span>Botanique</span>Plantes sauvages comestibles</h2>
                <p class="block-text-main align-left reveal-3">
                    Partez à la découverte de la biodiversité locale, en particulier de la flore exceptionnelle que ce site abrite. Notre guide vous emmènera dans les coins les plus reculés des anciennes carrières pour vous faire découvrir une grande variété de plantes sauvages comestibles et médicinales.
                </p>
                <ul class="block-list list-visit reveal-3">
                    <li class="li-vis align-left">Carnaval 2024 (26 février au 1 mars)</li>
                    <li class="li-vis align-left">Pâques 2024 (29 avril au 3 mai)</li>
                    <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                    <li class="li-vis align-left">Été semaine 2 (29 avril au 3 mai) </li>
                    <li class="li-vis align-left">Été semaine 3 (29 avril au 3 mai) </li>
                    <li class="li-vis align-left">Toussaint (29 avril au 3 mai)</li>
                </ul>
                <div class="button-center">
                    <a class="button-main d-block reveal-4" href="/reservation">
                        Réserver
                    </a>
                </div>
            </div>
            <div class="block-3x-flex" id="block-ornitho">
                <img class="icon-theme" src="/assets/img/icon/icon-theme/bird.png" alt="iconee thème ornithologie">
                <h2 class="block-title reveal-2 block-title-theme"><span>Ornithologie</span>Observation des oiseaux</h2>
                <p class="block-text-main align-left reveal-3">
                    Avec notre guide passionné, vous découvrirez les nombreux oiseaux qui peuplent ces lieux exceptionnels. Observez les espèces locales et migratrices dans leur habitat naturel et apprenez-en plus sur leur comportement et leurs habitudes.
                </p>
                <ul class="block-list list-visit reveal-3">
                    <li class="li-vis align-left">Carnaval 2024 (26 février au 1 mars)</li>
                    <li class="li-vis align-left">Pâques 2024 (29 avril au 3 mai)</li>
                    <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                    <li class="li-vis align-left">Été semaine 2 (29 avril au 3 mai) </li>
                    <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                    <li class="li-vis align-left">Été semaine 2 (29 avril au 3 mai) </li>
                </ul>
                <div class="button-center">
                    <a class="button-main d-block reveal-4" href="/reservation">
                        Réserver
                    </a>
                </div>
            </div>
            <div class="block-3x-flex" id="block-entomo">
                <img class="icon-theme" src="/assets/img/icon/icon-theme/bug.png" alt="iconee thème insectes">
                <h2 class="block-title reveal-2 block-title-theme"><span>Entomologie</span>Découverte des insectes</h2>
                <p class="block-text-main align-left reveal-3">
                    Découvrez le monde fascinant des insectes ! Notre guide vous emmènera dans les carrières pour vous faire découvrir la diversité incroyable des insectes qui y habitent. Vous apprendrez à identifier les différentes espèces et à comprendre leur rôle dans l'écosystème local.
                </p>
                <ul class="block-list list-visit reveal-3">
                    <li class="li-vis align-left">Carnaval 2024 (26 février au 1 mars)</li>
                    <li class="li-vis align-left">Pâques 2024 (29 avril au 3 mai)</li>
                    <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                    <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                    <li class="li-vis align-left">Été semaine 2 (29 avril au 3 mai) </li>
                </ul>
                <div class="button-center">
                    <a class="button-main d-block reveal-4" href="/reservation">
                        Réserver
                    </a>
                </div>
            </div>
        </div>

        <!-- Thèmes et dates RESPONSIVE-->
        <div id="carouselResponsiveVisit" class="carousel slide carousel-resp-visit hidden-no-resp" data-ride="carousel">
            <div class="carousel-indicators indicators-visit">
                <button class="carousel-ind-visit active" type="button" data-bs-target="#carouselResponsiveVisit" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button class="carousel-ind-visit" type="button" data-bs-target="#carouselResponsiveVisit" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button class="carousel-ind-visit" type="button" data-bs-target="#carouselResponsiveVisit" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item resp-item-visit active">
                    <img class="icon-theme" src="/assets/img/icon/icon-theme/plant.png" alt="icone thème plante">
                    <h2 class="block-title reveal-2 block-title-theme"><span>Botanique</span>Plantes sauvages comestibles</h2>
                    <p class="block-text-main hidden-resp reveal-3">
                        Partez à la découverte de la biodiversité locale, en particulier de la flore exceptionnelle que ce site abrite. Notre guide vous emmènera dans les coins les plus reculés des anciennes carrières pour vous faire découvrir une grande variété de plantes sauvages comestibles et médicinales.
                    </p>
                    <ul class="block-list list-visit reveal-3">
                        <li class="li-vis align-left">Carnaval 2024 (26 février au 1 mars)</li>
                        <li class="li-vis align-left">Pâques 2024 (29 avril au 3 mai)</li>
                        <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                        <li class="li-vis align-left">Été semaine 2 (29 avril au 3 mai) </li>
                        <li class="li-vis align-left">Été semaine 3 (29 avril au 3 mai) </li>
                        <li class="li-vis align-left">Toussaint (29 avril au 3 mai)</li>
                    </ul>
                    <div class="button-activity-90">
                        <a type="button" class="button-main" href="/reservation">Réserver</a>
                    </div>
                </div>
                <div class="carousel-item resp-item-visit">
                    <img class="icon-theme" src="/assets/img/icon/icon-theme/bird.png" alt="icone thème ornithologie">
                    <h2 class="block-title reveal-2 block-title-theme"><span>Ornithologie</span>Observation des oiseaux</h2>
                    <p class="block-text-main hidden-resp reveal-3">
                        Avec notre guide passionné, vous découvrirez les nombreux oiseaux qui peuplent ces lieux exceptionnels. Observez les espèces locales et migratrices dans leur habitat naturel et apprenez-en plus sur leur comportement et leurs habitudes.
                    </p>
                    <ul class="block-list list-visit reveal-3">
                        <li class="li-vis align-left">Carnaval 2024 (26 février au 1 mars)</li>
                        <li class="li-vis align-left">Pâques 2024 (29 avril au 3 mai)</li>
                        <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                        <li class="li-vis align-left">Été semaine 2 (29 avril au 3 mai) </li>
                        <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                        <li class="li-vis align-left">Été semaine 2 (29 avril au 3 mai) </li>
                    </ul>
                    <div class="button-activity-90">
                        <a class="button-main d-block reveal-4" href="/reservation">
                            Réserver
                        </a>
                    </div>
                </div>
                <div class="carousel-item resp-item-visit">
                    <img class="icon-theme" src="/assets/img/icon/icon-theme/bug.png" alt="icone thème insectes">
                    <h2 class="block-title reveal-2 block-title-theme"><span>Entomologie</span>Découverte des insectes</h2>
                    <p class="block-text-main hidden-resp reveal-3">
                        Découvrez le monde fascinant des insectes ! Notre guide vous emmènera dans les carrières pour vous faire découvrir la diversité incroyable des insectes qui y habitent. Vous apprendrez à identifier les différentes espèces et à comprendre leur rôle dans l'écosystème local.
                    </p>
                    <ul class="block-list list-visit reveal-3">
                        <li class="li-vis align-left">Carnaval 2024 (26 février au 1 mars)</li>
                        <li class="li-vis align-left">Pâques 2024 (29 avril au 3 mai)</li>
                        <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                        <li class="li-vis align-left">Été semaine 1 (29 avril au 3 mai) </li>
                        <li class="li-vis align-left">Été semaine 2 (29 avril au 3 mai) </li>
                    </ul>
                    <div class="button-activity-90">
                        <a type="button" class="button-main" href="/reservation">Réserver</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev carousel-control-visit" href="#carouselResponsiveVisit" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" id="carousel-control-visit-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next carousel-control-visit" href="#carouselResponsiveVisit" role="button" data-slide="next">
                <span class="carousel-control-next-icon" id="carousel-control-visit-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</section>

<script>
    function scrollToProgrammeVis() {
        document.getElementById("visit-dates").scrollIntoView({
            behavior: "smooth"
        });
    }

    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
    });
</script>
