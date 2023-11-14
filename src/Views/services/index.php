<section class="section-100">
    <div class="block-90 reveal">
        <div class="block-flex reveal-2">
            <h1 class="block-title hidden-no-resp align-left scolaire-title"><span>Activités scolaires à la carte</span>Maternelles, primaires et secondaires</h1>
            <!-- Carousel images -->
            <div class="block-scolaire-img zoom-image reveal-3">
                <div class="carousel slide carousel-fade carousel-max_sup" id="carousel-activities" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/assets/img/img_scolaire/carousel/slide1.jpg" alt="slide 1">
                        </div>
                        <?php for ($i = 2; $i < 4; $i++) { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/assets/img/img_scolaire/carousel/slide<?php echo $i; ?>.jpg" alt="slide <?php echo $i; ?>">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Texte + Boutons + modale infos -->
            <div class="block-text-65 reveal-3">
                <h1 class="block-title hidden-resp scolaire-title"><span>Activités scolaires à la carte</span>Maternelles, primaires et secondaires</h1>
                <p>
                    Depuis plus de 15 ans, notre ASBL est dédiée à la promotion des sciences naturelles auprès des élèves de maternelles, primaires et secondaires.
                </p>
                <p>
                    Nos activités scolaires sont adaptées à chaque niveau d'enseignement et conçues pour favoriser la curiosité, l'apprentissage actif et l'émerveillement pour la nature. Que ce soit à travers des ateliers pratiques ou une approche de terrain, nous offrons des activités enrichissantes en accord avec le programme scolaire officiel.
                </p>
                <p>
                    Nous vous proposons des activités <span class="strong">à la carte</span> mais également des formules <span class="strong">d'une demi-journée</span> (3h).
                </p>
                <p>
                    N'hésitez pas à nous <a href="/contact" target="_blank">contacter</a> pour plus d'informations ou pour planifier une visite.
                </p>
                <div class="button-activity-100">
                    <button type="button" class="button-main reveal-4" data-toggle="modal" data-target="#ModalTarif">Formules et tarifs</button>
                    <button type="button" class="button-secondary reveal-4" id="button-programme-scolaire" onclick="scrollToProgramme()">Programme 2023-2024</button>
                    <a href="/reservation" class="button-secondary reveal-4">Réserver</a>
                </div>
                <div class="modal fade" id="ModalTarif" tabindex="-1" role="dialog" aria-labelledby="ModalTarifLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="modal-content-act">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalTarifLabel">Formules et tarifs</h5>
                            </div>
                            <div class="modal-body">
                                <div class="table-tarif">
                                    <table>
                                        <tr>
                                            <th class="th-tarif">Classes</th>
                                            <th class="th-tarif">Demi-journée<sup>
                                                    <a href="javascript:;" data-toggle="tooltip" title="9h-12h ou 13h-16h"><img src="/assets/img/icon/question.png" width="12" alt="tooltip"></a></sup></th>
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
                                        <tr>
                                            <td colspan="3" class="nb-table no-bg">Les bons communaux sont acceptés</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="nb-table no-bg">Réservation minimum 15 jours à l'avance</td>
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

<!-- Programme scolaire -->
<section class="section-100 no-bg" id="programme-activite">
    <!-- Bloc Programme -->
    <div class="block-90">
        <h1 class="block-title no-margin-resp center"><span>Programme des activités</span>2023 - 2024</h1>
        <div class="card-resp card card-body reveal-2">
            <!-- Filtre Niveaux scolaire(s) concerné(s)s -->
            <div class="filter_selector" id="scolaire-filter">
              <button class="button-filter-scolaire hidden-resp" id="btn-all"
                      onclick="filterSelection('all')">Toutes les activités
              </button>
              <button class="button-filter-scolaire" id="btn-maternelles"
                      onclick="filterSelection('maternelles')">Maternelles
              </button>
              <button class="button-filter-scolaire" id="btn-primaires"
                      onclick="filterSelection('primaires')">Primaires
              </button>
              <button class="button-filter-scolaire" id="btn-secondaires"
                      onclick="filterSelection('secondaires')">Secondaires
              </button>
            </div>
            <!-- Maternelles -->
            <section class="row-scolaire section-80 w100-resp">
                <div class="column maternelles">
                    <!-- 1. Pic Pic -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/mat/mat_picpic.jpg" alt="animation maternelles 1">
                        </div>
                        <div class="mr90">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">À la rencontre de Pic-Pic le hérisson</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">M2 - M3</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="icone time">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="icone int/ext">
                                        <p class="scolaire-sub-item">int./ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Un petit hérisson s'est faufilé et se cache dans nos locaux, mais où est-il ? Et que mange-t-il pour se nourrir ? Les enfants pourront le découvrir en partant à la rencontre de Pic Pic le hérisson !
                                </p>
                                <p class="text-scolaire-resp">
                                    "À la rencontre de Pic Pic le hérisson" est une activité ludique, éducative et participative sur le mode de vie des hérissons. Les enfants apprendront leurs caractéristiques, leurs alimentations, leurs comportements, ...
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 2. Graine -->
                    <div class="block-flex reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">De la graine à la plante</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">M2 - M3</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int./ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Découvrez "De la Graine à la Plante" ! Une activité passionnante conçue pour les élèves de maternelles. Les enfants apprendront les secrets des arbres en découvrant leur cycle de croissance.
                                </p>
                                <p class="text-scolaire-resp">
                                    Ils participeront également à des activités ludiques qui les transporteront dans un monde magique. Il s'agit d'une aventure éducative où les petits apprennent, s'amusent et développent leur amour pour la nature et les arbres.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>
                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/mat/mat_graine_plante.jpg" alt="animation maternelles 2">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 3. Eau -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/mat/mat_eau.jpg" alt="animation maternelles 3">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">L'eau dans tous ses états</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">M2 - M3</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Les petits scientifiques exploreront ici les secrets de l'eau et découvriront ses différentes formes, du liquide au solide en passant par le gazeux. À travers des expériences scientifiques et ludiques, ils apprendront également ses propriétés uniques.
                                </p>
                                <p class="text-scolaire-resp">
                                    Rejoignez-nous pour une aventure éducative pleine de découvertes, où les enfants développeront leur curiosité sur cet or bleu indispensable à la vie.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 4. Mare -->
                    <div class="block-flex reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">L'écosystème "mare"</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">M2 - M3</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Notre activité plein air sur la mare permet de découvrir et d'apprendre sur cet écosystème unique. Les petits aventuriers auront l'occasion d'observer ses habitants fascinants, tels que les grenouilles, les tritons, ou les insectes aquatiques.
                                </p>
                                <p class="text-scolaire-resp">
                                    Une aventure pleine de découvertes, où les enfants s'émerveilleront devant la diversité étonnante de cet écosystème de plus en plus menacé.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>
                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/mat/mat_mare.jpg" alt="animation maternelles 4">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 5. Sol -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/mat/mat_faune_sol.jpg" alt="animation maternelles 5">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">La faune du sol</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">M2 - M3 </p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Les enfants auront l'opportunité d'étudier et d'observer les petits habitants du sol. À travers des activités ludiques amusantes, ils développeront une fascination pour ces petites créatures et comprendront l'importance de leur préservation.
                                </p>
                                <p class="text-scolaire-resp">
                                    Une aventure éducative passionnante où les enfants deviendront de véritables explorateurs de la faune du sol.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                </div>
            </section>

            <!-- Primaires -->
            <section class="row-scolaire section-80 w100-resp">
                <div class="column primaires">
                    <!-- 1. Expo biodiversité -->
                    <div class="block-flex reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Exposition "Biodiversité"</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Découvrez une exposition interactive sur la biodiversité et l'environnement, conçue exclusivement pour les établissements scolaires. Les élèves participeront à des ateliers interactifs, jeux et activités qui les sensibiliseront à la nature et à l'environnement.
                                <p class="text-scolaire-resp">
                                    Des exemples concrets encourageront les élèves à réfléchir à leur propre empreinte écologique. Cette exposition vise à inspirer les élèves pour qu'ils deviennent des acteurs de la préservation de la biodiversité.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>

                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri1.jpg" alt="animation primaire 1">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 2. Eau -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_etude_eau.jpg" alt="animation primaire 2">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Étude et analyse de l'eau</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6 </p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Les élèves développeront ici leur curiosité et leur compréhension de l'eau, cette matière essentielle à la vie. Ils vont notamment suivre la démarche scientifique pour observer, expérimenter et comprendre les mystères de cette ressource.
                                </p>
                                <p class="text-scolaire-resp">
                                    Les élèves repartiront avec de nouvelles connaissances et une meilleure compréhension de son rôle crucial dans notre environnement. </p>
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 3. Mare -->
                    <div class="block-flex reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">L'écosystème "mare"</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Destinée aux élèves de classes primaires, cette activité permettra aux enfants de découvrir de près de nombreuses espèces peuplant cet écosystème unique. Ils auront l'opportunité d'observer et d'étudier divers habitants, tels que les grenouilles, les insectes aquatiques et bien d'autres.
                                </p>
                                <p class="text-scolaire-resp">
                                    Ils apprendront comment ces différentes espèces interagissent pour maintenir l'équilibre fragile de cet écosystème. Une occasion exceptionnelle d'apprécier la nature de manière concrète et éducative, tout en se sensibilisant à l'importance de préserver ces habitats précieux.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>

                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_mare.jpg" alt="animation primaire 3">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 4. Sol -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_faune_sol.jpg" alt="animation priamire 4">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">La faune du sol</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    À travers des activités interactives et des expériences amusantes, les jeunes explorateurs pourront observer ces petites créatures qui peuplent le sol et comprendront l'importance cruciale de leur rôle dans l'écosystème.
                                </p>
                                <p class="text-scolaire-resp">
                                    Ils apprendront de manière ludique et apprécieront la complexité de ce milieu souvent méconnu. Une opportunité unique d'élargir leur compréhension de la nature et de développer un amour pour la biodiversité.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 5. Le monde végétal -->
                    <div class="block-flex relative reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2" id="demi-vegetal">Le monde végétal</h2>
                                <img src="/assets/img/icon/icon-scolaire/img-demi.png" class="img-demi-ml reveal-1" alt="formule 3h">
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P5 - P6</p>
                                    </div>
                                    <div title="Mininmum et Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">20 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">3h</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int./ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Rejoignez-nous pour une aventure fascinante d'une demi-journée au cœur du monde végétal ! Les élèves auront l'opportunité de découvrir les multiples facettes des plantes. De la physiologie des arbres aux processus biologiques, les enfants plongeront dans les secrets de la vie végétale.
                                </p>
                                <p class="text-scolaire-resp">
                                    Sur le terrain, ils pourront mettre leurs connaissances en pratique en tentant d'identifier certains arbres qui peuplent les anciennes carrières. Ils découvriront l'importance des plantes pour notre environnement et la nécessité de les protéger.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_monde_veg.jpg" alt="animation primaire 5">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 6. Plantes et insectes -->
                    <div class="block-flex relative reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_plante_insecte.jpg" alt="animation primaires 6">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2" id="demi-plante">Arbres et vie souterraine</h2>
                                <img src="/assets/img/icon/icon-scolaire/img-demi.png" class="img-demi-mr reveal-1" alt="formule 3h">
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Mininmum et Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">20 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">3h</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int./ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Lors de cette activité, les élèves auront l'occasion de reconnaître et d'apprécier les différentes espèces d'arbres et arbustes qui peuplent les anciennes carrières.
                                </p>
                                <p class="text-scolaire-resp">
                                    De plus, ils plongeront sous terre pour découvrir un monde caché, où les racines des plantes cohabitent avec des petites créatures fascinants.
                                </p>
                            </div>

                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 7. Les chauves souris -->
                    <div class="block-flex reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Les chauves-souris</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Les enfants auront ici l'opportunité de découvrir ces petits chiroptères et d'apprendre sur leur mode de vie unique. </p>
                                <p class="text-scolaire-resp">
                                    Ils apprendront comment les chauves-souris chassent, se déplacent et se repèrent dans l'obscurité. Ils comprendront également l'importance de préserver l'obscurité de la nuit pour la survie de ces animaux. </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_chauve_souris.jpg" alt="animation primaire 7">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 8. Tri et recyclage -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_tri.jpg" alt="animation primaires 8">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Tri et recyclage</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Lors de cette activcité, les élèves apprendront à trier et à recycler les déchets grâce à des jeux et des quiz interactifs.
                                </p>
                                <p class="text-scolaire-resp">
                                    Après cette aventure éducative, les élèves deviendront de véritables experts trieurs en apprenant les bonnes pratiques de tri et en découvrant les différentes filières de recyclage.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 9. Demi-journée oiseau -->
                    <div class="block-flex relative reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2" id="demi-oiseau">Découverte des oiseaux</h2>
                                <img src="/assets/img/icon/icon-scolaire/img-demi.png" class="img-demi-ml reveal-1" alt="formule 3h">
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Mininmum et Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">20 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">3h00</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int./ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Les élèves partiront pour une aventure à travers le monde fascinant des oiseaux. Pendant cette demi-journée immersive, les élèves apprendront à reconnaître différentes espèces d'oiseaux et découvriront les adaptations étonnantes qui leur permettent de survivre dans différents habitats.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>

                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_decouverte_oiseaux.jpg" alt="animation primaire 9">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 10. Les empreintes animales -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_empreinte.jpg" alt="animation primaires 10">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Les empreintes animales</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Les enfants pourront découvrir toutes une série d'empreintes animales grâce à notre nouvel outil révolutionnaire : l'empreintoscope. De plus, ils pourront tester leurs connaissances avec notre quizz interactif en fin d'activité.
                                </p>
                                <p class="text-scolaire-resp">
                                    Une expérience ludique et éducative qui éveillera leur curiosité sur les animaux et la nature.</p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 11. Becs et pattes -->
                    <div class="block-flex reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Becs et pattes</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Avec "Becs et pattes", les enfants apprendront à faire des liens directs entre les régimes alimentaires et la forme du bec des oiseaux. Ils découvriront également leur mode de vie en étudiant leurs différentes pattes.
                                </p>
                                <p class="text-scolaire-resp">
                                    Une activité éducative où la curiosité et la compréhension s'épanouissent à travers l'observation et l'exploration du monde ornithologique.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>

                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_becs_pattes.jpg" alt="animation primaire 11">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 12. Oiseaux de nos carrières -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_oiseaux_carriere.jpg" alt="animation primaires 12">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Les oiseaux de nos carrières</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Au cœur des anciennes carrières réaménagées, les enfants auront l'opportunité d'observer les oiseaux en pleine nature. Ils pourront également s'amuser à travers un jeu de piste passionnant, mettant en lumière la richesse ornithologique de cette zone préservée.
                                </p>
                                <p class="text-scolaire-resp">
                                    Une expérience immersive où la découverte et l'amusement se rencontrent au rythme des chants mélodieux des oiseaux.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 13. La mare et ses habitants -->
                    <div class="block-flex relative reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2" id="demi-mare">La mare et ses habitants</h2>
                                <img src="/assets/img/icon/icon-scolaire/img-demi.png" class="img-demi-ml reveal-1" alt="formule 3h">
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Mininmum et Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">20 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">3h00</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int./ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Au cours de cette demi-journée, les élèves autont l'occasion de découvrir les secrets cachés de la mare, de s'émerveiller devant sa biodiversité et de comprendre les incroyables transformations qui s'y déroulent.
                                </p>
                                <p class="text-scolaire-resp">
                                    Les élèves auront la chance d'explorer, d'observer et de plonger dans ce milieu naturel unique et fascinant.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>

                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_habitant_mare.jpg" alt="animation primaire 11">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 14. La nature et sa préservation -->
                    <div class="block-flex relative reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_nature_preservation.jpg" alt="animation primaires 12">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2" id="demi-envi">La nature et sa préservation</h2>
                                <img src="/assets/img/icon/icon-scolaire/img-demi.png" class="img-demi-mr reveal-1" alt="formule 3h">
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Mininmum et Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">20 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">3h</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int./ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Cette activité permet aux enfants d'explorer la diversité du vivant tout en comprenant l'impact profond de l'homme sur notre environnement. Cette expérience interactive vise à sensibiliser à la nature en mettant en évidence les merveilles de la biodiversité et leurs interactions complexes. </p>
                                <p class="text-scolaire-resp">
                                    Les élèves participeront ensuite à des activcités ludiques et pédagogiques qui mettront en évidence l'importance du tri et du recyclage des déchets pour tenter de préserver cette biodiversité. </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 15. L'univers de l'eau -->
                    <div class="block-flex relative reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2" id="demi-eau">L'univers de l'eau</h2>
                                <img src="/assets/img/icon/icon-scolaire/img-demi.png" class="img-demi-ml reveal-1" alt="formule 3h">
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P6</p>
                                    </div>
                                    <div title="Mininmum et Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">20 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">3h00</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Cette aventure est spécialement conçue pour s'émerveiller et apprendre sur l'eau et tous ses états.
                                <p class="text-scolaire-resp">
                                    A travers des expériences ludiques et des expériences interactives, ils découvriront notamment comment l'eau peut se métamorphoser d'un état à un autre. </p>
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>

                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_univers-eau.jpg" alt="animation primaire 11">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 16. Les phasmes -->
                    <div class="block-flex relative reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri_phasme.jpg" alt="animation primaires 12">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Les phasmes : maîtres du mimétisme</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">P1 - P4</p>
                                    </div>
                                    <div title="Mininmum et Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Découvrez notre expérience éducative qui initie les élèves au monde des phasmes, ces créatures étonnantes qui excellent dans l'art du mimétisme.
                                </p>
                                <p class="text-scolaire-resp">
                                    Les enfants auront la chance d'apprendre en se divertissant et d'observer ces créatures de près.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                </div>
            </section>
            <!-- Secondaires -->
            <section class="row-scolaire w100-resp section-80">
                <div class="column secondaires">
                    <!-- 1. Visites thématiques -->
                    <div class="block-flex reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Visites des carrières</h2>
                                <img src="/assets/img/icon/icon-scolaire/img-demi.png" class="img-demi-mr reveal-1" alt="formule 3h">
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">S1 - S6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">20 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">3h</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Explorez les anciennes carrières d'Obourg avec nos visites thématiques spécialement conçues pour les élèves du secondaire.
                                </p>
                                <p class="text-scolaire-resp">
                                    Choisissez parmis des thèmes captivants tels que la botanique, la découverte de l'écosystème "mare", l'ornithologie ou encore l'énergie durable. Chaque visite offre une expérience unique, permettant aux élèves de découvrir et d'apprendre au cœur d'un environnement unique.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>

                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/sec/sec_visite_carriere.jpg" alt="animation secondaire 3">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 2. Visite de la cimenterie -->
                    <div class="block-flex relative reveal" id="section-usine">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/sec/sec_usine.jpg" alt="animation secondaire 1">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 ml90 text-center reveal-2">Visite de la cimenterie Holcim</h2>
                                <img src="/assets/img/icon/icon-scolaire/img-demi.png" class="img-demi-mr reveal-1" alt="formule 3h">
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">S4 - S6</p>
                                    </div>
                                    <div title="Mininmum et Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">20 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">3h</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Partez à la découverte des anciennes carrières de craie, désormais totalement réhabilitées pour offrir un regard unique sur notre patrimoine industriel.
                                </p>
                                <p class="text-scolaire-resp">
                                    Ensuite, plongez au cœur de la cimenterie d'Obourg, où vous serez témoin d'une série de procédés modernes qui orchestrent la naissance du ciment. Une demi-journée immersive qui mêle histoire, écologie et innovation industrielle.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 4. Polution et énergie -->
                    <div class="block-flex reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Polution et énergie durable</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">S1 - S4</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int./ext.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Au sein des anciennes carrières, les élèves seront sensibilisés aux panneaux solaires et à l'énergie verte.
                                </p>
                                <p class="text-scolaire-resp">
                                    Ils comprendront leur fonctionnement et leur rôle crucial dans la lutte contre la pollution. </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/sec/sec_pollution.jpg" alt="animation secondaire 9">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 3. Expo biodiversité -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/pri/pri1.jpg" alt="animation secondaire 2">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Expo biodiversité</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">S1 - S6 </p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Explorez une exposition interactive dédiée à la biodiversité et à l'environnement. Par une visite guidée, es élèves auront l'opportunité de s'interroger sur la complexité et la fragilité de la nature et des écosystèmes.
                                </p>
                                <p class="text-scolaire-resp">
                                    Les élèves seront ensuite invités à remplir un questionnaire qui ouvrira des débats sur la biodiversité et sa préservation. Cette exposition immersive a pour ambition d'éveiller l'esprit critique des élèves.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 6. Biologie végétale -->
                    <div class="block-flex reveal relative">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2" id="demi-biologie">Biologie végétale</h2>
                                <img src="/assets/img/icon/icon-scolaire/img-demi.png" class="img-demi-ml reveal-1" alt="formule 3h">
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">S1 - S6</p>
                                    </div>
                                    <div title="Mininmum et Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">20 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">3h</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">ext./int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Explorez le monde de la biologie lors d'une demi-journée d'excursion enrichissante : débutez par la découverte des carrières en mettant en avant la botanique et les plantes sauvages, puis plongez dans une activité en intérieur dédiée aux écosystèmes et à leurs interactions complexes.
                                </p>
                                <p class="text-scolaire-resp">
                                    Cette demi-journée offre une opportunité d'appréhender la diversité végétale, ainsi que les relations entre les êtres vivants et leur environnement, offrant un aperçu captivant des dynamiques vitales qui façonnent notre planète.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>

                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/sec/sec_bota.jpg" alt="animation secondaire 9">
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 5 Interactions au sein d'un écosystème -->
                    <div class="block-flex reveal">
                        <div class="frame-effect-lt rotate-lt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/sec/sec_interaction.jpg" alt="animation primaires 6">
                        </div>
                        <div class="mr90 bg-radial-effect">
                            <div class="block-scol-icon-container  reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Interactions au sein d'un écosystème</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">S1 - S6</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Cette activité met en lumière la fragilité de nos écosystèmes et explore les différentes interactions complexes qui les animent. Plongez dans une aventure où vous apprendrez l'importance cruciale de préserver ces équilibres délicats pour un avenir durable.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>
                        </div>
                    </div>
                    <hr class="hr1 my-5">
                    <!-- 7. Développement durable -->
                    <div class="block-flex reveal">
                        <div class="ml90 bg-radial-effect">
                            <div class="block-scol-icon-container reveal-2">
                                <h2 class="block-title mb10 text-center reveal-2">Notion de développement durable</h2>
                                <div class="scolaire-icon-flex reveal-2">
                                    <div title="Niveaux scolaire(s) concerné(s)" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon1.png" alt="class icon">
                                        <p class="scolaire-sub-item">S1 - S2</p>
                                    </div>
                                    <div title="Nombre maximum de participants" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon2.png" alt="min icon">
                                        <p class="scolaire-sub-item">45 élèves max.</p>
                                    </div>
                                    <div title="Durée de l'activité" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon3.png" alt="time icon">
                                        <p class="scolaire-sub-item">1h30</p>
                                    </div>
                                    <div title="Activité intérieure et/ou extérieure" class="block-scolaire-item-img">
                                        <img src="/assets/img/icon/icon-scolaire/icon4.png" alt="int/ext icon">
                                        <p class="scolaire-sub-item">int.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-text-justify reveal-3 mt30">
                                <p class="text-scolaire-resp">
                                    Explorez les fondements du concept de développement durable, en découvrant à la fois ses atouts, ses limites et ses défis.
                                </p>
                                <p class="text-scolaire-resp">
                                    Cette activité dynamique allie un apport de connaissances sur ce concept, des jeux interactifs captivants et des débats stimulants.
                                </p>
                            </div>
                            <a class="button-main d-block reveal-4" href="/reservation">
                                Réserver
                            </a>
                        </div>
                        <div class="frame-effect-rt rotate-rt reveal-1">
                            <img class="block-img-scolaire" src="/assets/img/img_scolaire/sec/sec_DD.jpg" alt="animation secondaire 9">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<script src="/assets/js/filter_scolaire.js"></script>

