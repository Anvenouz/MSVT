<section class="section-100">
    <div class="block-90 reveal">
        <div class="section-flex-reverse reveal-2">
            <h1 class="block-title align-left hidden-no-resp" id="location-title"><span>Service de location</span>de locaux situés juste en face des carrières</h1>
            <!-- Carousel -->
            <div class="block-flex-img reveal-1" id="carousel-location">
                <div class="carousel slide carousel-fade carousel-max" data-ride="carousel">
                    <div class="carousel-inner block-location-img">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/assets/img/img_carousel/location/slide1.jpg" alt="slide 1">
                        </div>
                        <?php
                        for ($i = 2; $i < 8; $i++) {
                            echo '<div class="carousel-item"><img class="d-block w-100" src="/assets/img/img_carousel/location/slide' . $i . '.jpg" alt="slide ' . $i . '">
                            </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Texte + modale infos -->
            <div class="block-text-70 reveal-3">
                <!-- Texte -->
                <h1 class="block-title hidden-resp" id="location-title"><span>Service de location</span>de locaux situés juste en face des carrières</h1>
                <p class="block-text-main">
                    Découvrez nos locaux situés en face des carrières d'Obourg. Profitez d'une vue imprenable sur ce paysage naturel pour une expérience de travail inspirante. Nos espaces modernes et flexibles sont adaptés à vos besoins professionnels.
                </p>
                <p class="block-text-main">
                    Organisez des réunions, formations ou événements dans un cadre harmonieux et propice à la créativité. N'hésitez pas à nous contactez-nous pour en savoir plus.
                </p>
                <div class="button-activity-100">
                    <button type="button" class="button-main reveal-4" data-toggle="modal" data-target="#ModalLocation1">Infos pratiques</button>
                    <button type="button" class="button-secondary reveal-4" id="button-tarif-location" data-toggle="modal" data-target="#ModalLocation2">Tarifs et suppléments</button>
                    <button type="button" class="button-secondary hidden-resp reveal-4" onclick="scrollToLocationEquip()">Équipements et services</button>
                </div>
                <!-- Modale infos -->
                <div class="modal fade" id="ModalLocation1" tabindex="-1" role="dialog" aria-labelledby="ModalLocation1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="modal-content-act">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLocation1">Infos pratiques (Location)</h5>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <table>
                                        <tr>
                                            <td class="td-tarif">Capacité d'acceuil</td>
                                            <td class="td-tarif">50 - 60 personnes</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Salles</td>
                                            <td class="td-tarif">2 salles + hall d'acceuil</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif" rowspan="2">Horaire</td>
                                            <td class="td-tarif">9h - 12h</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">13h - 16h</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Tarif</td>
                                            <td class="td-tarif">Voir "Tarifs et suppléments"</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="nb-table no-bg">- Reservation min. 15 jours à l'avance</td>
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
                <!-- Modale Suppléments -->
                <div class="modal fade" id="ModalLocation2" tabindex="-1" role="dialog" aria-labelledby="ModalLocation2" aria-hidden="true">
                    <div class="modal-dialog" role="document" id="Modal-dialog-location">
                        <div class="modal-content" id="modal-content-act">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLocation2">Infos pratiques (tarifs)</h5>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <table>
                                        <colgroup>
                                            <col style="width: 33.33%;">
                                            <col style="width: 33.33%;">
                                            <col style="width: 33.33%;">
                                        </colgroup>
                                        <tr>
                                            <td class="td-tarif">Tarifs</td>
                                            <td class="td-tarif">Demi-journée</td>
                                            <td class="td-tarif">Journée</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">ASBL</td>
                                            <td class="td-tarif">100€</td>
                                            <td class="td-tarif">150€</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Entreprise</td>
                                            <td class="td-tarif">250€</td>
                                            <td class="td-tarif">350€</td>
                                        </tr>
                                    </table>
                                    <table class="mt-2">
                                        <colgroup>
                                            <col style="width: 33.33%;">
                                            <col style="width: 33.33%;">
                                            <col style="width: 33.33%;">
                                        </colgroup>
                                        <tr>
                                            <td class="td-tarif" rowspan="3">Suppléments (casse-croute)</td>
                                            <td class="td-tarif">Sandwichs<sup>
                                                    <a href="javascript:;" data-toggle="tooltip" title="Plusieurs sortes de sandwichs garnis"><img src="/assets/img/icon/question.png" width="12" alt="tooltip"></a></sup></td>
                                            <td class="td-tarif">6€ / pers.</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Viennoiseries</td>
                                            <td class="td-tarif">5€ / pers.</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Patisseries</td>
                                            <td class="td-tarif">5€ / pers.</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif" rowspan="2">Supplément (visite guidée)<sup>
                                                    <a href="javascript:;" data-toggle="tooltip" title="Visite guidée dans anciennes carrières. Groupe de 15 maximum"><img src="/assets/img/icon/question.png" width="12" alt="tooltip"></a></sup></td>
                                            <td class="td-tarif">Durée : 1h</td>
                                            <td class="td-tarif">5€ / pers.</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Durée : 2h</td>
                                            <td class="td-tarif">10€ / pers.</td>
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
    </div>
</section>

<!-- Les 3 Blocs -->

<section class="section-100 bg-white">
    <div class="block-90 reveal" id="location-equip">
        <div class="section-flex-row reveal-2">
            <!-- Bloc Salle -->
            <div class="block-3x-flex hidden-resp reveal-3" id="block-salle">
                <img class="icon-theme-loc" src="/assets/img/icon/icon-theme/loc1.png" alt="icone location salle" width="110">
                <h2 class="block-title reveal-2 block-title-theme"><span>Plusieurs espaces</span>de travail</h2>
                <p class="block-text-main pb10">
                    Nous vous proposons plusieurs espaces disponibles selon vos besoins
                </p>
                <div class="accordion" id="accordionLocation1">
                    <div class="accordion-item no-bg no-border">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Salle "Accueil"
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionLocation1">
                            <div class="accordion-body">
                                <img src="/assets/img/img_carousel/location/slide1.jpg" class="block-location-accordion-img" alt="location collapse 1">
                                <ul class="block-list-location reveal-3">
                                    <li>Environ 50m²</li>
                                    <li>Capacité 30 personnes</li>
                                    <li>Accueil et réception</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item no-bg no-border mt-2">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Salle "Exposition"
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionLocation1">
                            <div class="accordion-body">
                                <img src="/assets/img/img_carousel/location/slide2.jpg" class="block-location-accordion-img" alt="location collapse 2">
                                <ul class="block-list-location reveal-3">
                                    <li>Environ 80m²</li>
                                    <li>Capacité 40 personnes</li>
                                    <li>Accès libre à notre exposition "Biodiversité"</li>
                                    <li>Un mur pour projection</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item no-bg no-border mt-2">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" id="button-accordion-location-last" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Salle "Panorama"
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionLocation1">
                            <div class="accordion-body">
                                <img src="/assets/img/img_carousel/location/slide6.jpg" class="block-location-accordion-img" alt="location collapse 3">
                                <ul class="block-list-location reveal-3">
                                    <li>Environ 50m²</li>
                                    <li>Capacité 20 personnes</li>
                                    <li>Vue sur les carrières</li>
                                    <li>Un tableau blanc magnétique fixe</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bloc Equipements -->
            <div class="block-3x-flex hidden-resp reveal-3" id="block-equip">
                <img class="icon-theme-loc" src="/assets/img/icon/icon-theme/loc2.png" alt="icone équipement" width="110">
                <h3 class="block-title reveal-2 block-title-theme"><span>Infrastructures</span>et équipements fournis</h3>
                <p class="block-text-main pb10 reveal-3">
                    Vous trouverez ci-dessous les différents équipements compris dans notre offre de location
                </p>
                <div class="accordion" id="accordionLocation2">
                    <div class="accordion-item no-bg no-border">
                        <h3 class="accordion-header" id="headingOne1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                Infrastructures
                            </button>
                        </h3>
                        <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1" data-bs-parent="#accordionLocation2">
                            <div class="accordion-body">
                                <ul class="block-list-location reveal-3">
                                    <li>Grand hall de réception</li>
                                    <li>2 larges espaces de travail</li>
                                    <li>Cuisine disponible sur demande</li>
                                    <li>Toilettes</li>
                                    <li>Parking</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item no-bg no-border mt-2">
                        <h3 class="accordion-header" id="headingTwo1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                Equipements et services
                            </button>
                        </h3>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionLocation2">
                            <div class="accordion-body">
                                <ul class="block-list-location reveal-3">
                                    <li>Thés, cafés et biscuits divers</li>
                                    <li>Retroprojecteurs</li>
                                    <li>Tables et chaises</li>
                                    <li>Système audio</li>
                                    <li>Paperboard et marqueurs</li>
                                    <li>Un large écran de projection</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bloc Question -->
            <div class="block-3x-flex reveal-3" id="block-question">
                <img class="icon-theme-loc" src="/assets/img/icon/icon-theme/loc3.png" alt="icone question" width="110">
                <h2 class="block-title reveal-2 block-title-theme"><span>Questions</span>ou une demande sur mesure ?</h2>
                <p class="block-text-main block-text-responsive pb10 reveal-3">
                    Vous avec des questions ou vous souhaitez nous soumettre une demande sur mesure ? N'hésitez pas à nous contacter, nous mettrons tout en oeuvre pour répondre à vos attentes !
                </p>
                <div class="button-activity-90 mt10-resp">
                    <a type="button" class="button-main reveal-4" href="/reservation">Réservez</a>
                    <a type="button" class="button-secondary reveal-4" id="button-contact-location" href="/contact">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    //Redirect
    function scrollToLocationEquip() {
        document.getElementById("location-equip").scrollIntoView({
            behavior: "smooth"
        });
    }

    //Tooltip
    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
    });

    // Code plus utilisé j'ai tout commenté
    //Collapse-buttons
    // const collapseInfra = document.querySelector('#collapseInfra');
    // const collapseService = document.querySelector('#collapseService');
    // const collapsePanorama = document.querySelector('#collapsePanorama');
    // const collapseExpo = document.querySelector('#collapseExpo');
    // collapseInfra.addEventListener('show.bs.collapse', function() {
    //     if (collapseService.classList.contains('show')) {
    //         collapseService.classList.remove('show');
    //     }
    // });
    // collapseService.addEventListener('show.bs.collapse', function() {
    //     if (collapseInfra.classList.contains('show')) {
    //         collapseInfra.classList.remove('show');
    //     }
    // });
    // collapsePanorama.addEventListener('show.bs.collapse', function() {
    //     if (collapseExpo.classList.contains('show')) {
    //         collapseExpo.classList.remove('show');
    //     }
    // });
    // collapseExpo.addEventListener('show.bs.collapse', function() {
    //     if (collapsePanorama.classList.contains('show')) {
    //         collapsePanorama.classList.remove('show');
    //     }
    // });
</script>
