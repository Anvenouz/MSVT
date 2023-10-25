<?php include_once "front-end/header.php" ?>
<?php include_once "front-end/navbar.php" ?>

<!-- // Header + bouttons -->

<section class="section-100">
    <div class="block-90 reveal">
        <div class="section-flex-center reveal-2">
            <div class="block-flex-img block-flex-img-CN reveal-3">
                <img class="CN-img zoom-image hidden-resp" id="CN-img1" src="img/img_stage_CN/CN1.jpg" alt="Image cirque">
            </div>
            <div class="block-text-70 reveal-3">
                <h1 class="block-title" id="CN-title"><span>Découvrez nos stages</span>Cirqu'et Nature pour les enfants de 8 à 12 ans</h1>
                <p class="block-text-main">
                    Découvrez nos stages extra-scolaires pour les enfants âgés de 8 à 12 ans. Rejoignez-nous pour une aventure pleine de surprises, où le cirque et la nature se rencontrent pour offrir une expérience unique à votre enfant.</p>
                <p class="block-text-main">
                    Les enfants auront l'occasion de développer leur créativité et leur agilité mais également d'approndir leur amour pour la nature grâce à des activités amusantes, stimulantes et éducatives en plein air. Un mélange parfait entre aventures circassiennes et découverte de l'environnement !</p>
                <div class="button-activity-90">
                    <button type="button" class="button-main reveal-4" data-toggle="modal" data-target="#ModalCN">Infos pratiques</button>
                    <button type="button" class="button-secondary reveal-4" id="button-programme-CN" onclick="scrollToProgrammeCN()">Programme des activités</button>
                    <button type="button" class="button-secondary reveal-4" onclick="scrollToStageCN()">Stages 2024</button>
                </div>
                <div class="modal fade" id="ModalCN" tabindex="-1" role="dialog" aria-labelledby="ModalCN" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="modal-content-act">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalCN">Infos pratiques (Stage Cirqu'et Nature)</h5>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <table>
                                        <tr>
                                            <td class="td-tarif">Age </td>
                                            <td class="td-tarif">8 - 12 ans</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Groupe</td>
                                            <td class="td-tarif">min. 6 / max. 12</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Horaire</td>
                                            <td class="td-tarif">9h - 16h</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Garderies</td>
                                            <td class="td-tarif">7h30 - 9h / 16h - 17h</td>
                                        </tr>
                                        <tr>
                                            <td class="td-tarif">Tarif</td>
                                            <td class="td-tarif">80€ / enfant</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="nb-table no-bg">- L'ASBL se réserve le droit d'annuler un stage 15 jours à l'avance si le nombre d'inscription est inférieur à 6.</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="nb-table no-bg">- Garderies gratuites uniquement sur réservation</td>
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

<!-- // Programme CIRQUE -->

<section class="section-70 relative pb0" id="programme-CN">
    <div class="block-flex reveal">
        <div class="relative ml90 reveal-2">
            <h2 class="block-title reveal-3" id="title-prog-cirque"><span>Pratiquez et découvrez</span>les différentes techniques de cirque !</h2>
            <div class="block-flex-img hidden-no-resp reveal-2" id="carousel-cirque">
                <div id="carouselCN" class="carousel frame-effect-rt slide carousel-max carousel-fade reveal-2" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/img_stage_CN/CNc1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/img_stage_CN/CNc2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/img_stage_CN/CNc3.jpg" alt="First slide">
                        </div>
                    </div>
                </div>
            </div>
            <p class="block-text-justify reveal-3">
                Durant nos stages, vos enfants auront la possibilité de s'initier à l'ensemble des disciplines de cirques ! Au programme :
            </p>
            <ul class="block-list font-montserrat reveal-3">
                <li>Acrobatie (équilibre au sol, acroporté, acrobaties de base, ...) ;</li>
                <li>Jonglerie (foulards, balles, massues, assiettes, diabolo, bâtons du diable, ...) ;</li>
                <li>Théâtre (mîmes, jeux d'impro, jeux théâtraux créatifs, ...) ;</li>
                <li>Création de son propre matériel de jonglerie ;</li>
                <li>Grand spectacle de Cirque le vendredi</li>
            </ul>
        </div>
        <div class="block-flex-img hidden-resp reveal-2" id="carousel-cirque">
            <div id="carouselCN" class="carousel frame-effect-rt slide carousel-max carousel-fade reveal-2" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/img_stage_CN/CNc1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img_stage_CN/CNc2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img_stage_CN/CNc3.jpg" alt="First slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- // Programme NATURE -->

<section class="section-70 no-pt-resp relative">
    <div class="block-flex reveal">
        <div class="carousel frame-effect-lt hidden-resp slide carousel-fade carousel-max reveal-2" id="carousel-nature" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/img_stage_CN/CNn1.jpg" alt="slide 1">
                </div>
                <?php
                for ($i = 2; $i < 7; $i++) {
                    echo '<div class="carousel-item"><img class="d-block w-100" src="img/img_stage_CN/CNn' . $i . '.jpg" alt="slide ' . $i . '">
                            </div>';
                }
                ?>
            </div>
        </div>
        <div class="block-flex-text-right mr90 reveal-2">
            <h2 class="block-title reveal-3" id="title-prog-nature"><span>Explorer la nature</span>au coeur des anciennes carrières</h2>
            <div class="carousel frame-effect-lt hidden-no-resp slide carousel-fade carousel-max reveal-2" id="carousel-nature" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/img_stage_CN/CNn1.jpg" alt="slide 1">
                    </div>
                    <?php
                    for ($i = 2; $i < 7; $i++) {
                        echo '<div class="carousel-item"><img class="d-block w-100" src="img/img_stage_CN/CNn' . $i . '.jpg" alt="slide ' . $i . '">
                            </div>';
                    }
                    ?>
                </div>
            </div>
            <p class="block-text-justify reveal-3">
                Les enfants auront également la possibilités d'apprendre et de découvrir la nature en explorant les anciennes carrières réamménagées. Au programme :
            </p>
            <ul class="block-list font-montserrat reveal-3">
                <li>Grand jeux et chasse aux trésors en pleine nature ;</li>
                <li>Randonnées en bord de lac ;</li>
                <li>Observation et étude des êtres vivant ;</li>
                <li>Quizz interactifs, ludiques et pédagogiques sur la nature et la biodiversité ;</li>
                <li>Réalisation de bricolages et d'un carnet de route "nature" ;</li>
                <li>Construction de cabanes dans les bois ;</li>
                <li>Fouille paléonthologique en pleine carrière <span class="hidden-resp">, ...</span></li>
            </ul>
        </div>
    </div>
</section>

<!-- // Prochain Stages -->

<section class="section-100" id="stage-CN-dates">
    <div class="block-80 bg-visit reveal">
        <h3 class="block-title reveal-2 " id="next-stage-title"><span>Stages Cirqu'et Nature</span>Nos prochains stages</h3>
        <div class="block-flex-CN hidden-resp reveal-2">
            <div class="block-flex-CN-item reveal-3" id="stagesDispo-CN">
                <h4 class="block-title mb20 reveal-4">Stages 2024</h4>
                <ul class="block-list font-montserrat reveal-4">
                    <li class="li-CN align-left">Carnaval 2024 (26 février au 1 mars)</li>
                    <li class="li-CN align-left">Pâques 2024 (29 avril au 3 mai)</li>
                    <li class="li-CN align-left">Été semaine 1 (29 avril au 3 mai) </li>
                    <li class="li-CN align-left">Été semaine 2 (29 avril au 3 mai) </li>
                    <li class="li-CN align-left">Été semaine 3 (29 avril au 3 mai) </li>
                    <li class="li-CN align-left">Toussaint (29 avril au 3 mai)</li>
                </ul>
                <div class="button-center">
                    <button class="button-main d-block reveal-4" onclick="window.location.href='reservation'">
                        Réserver
                    </button>
                </div>
            </div>
            <div class="block-flex-CN-item" id="flyer-CN">
                <h3 class="block-title mb20 ">Prochain stage</h3>
                <img class="img-flyer-CN" src="img/img_stage_CN/flyer/ete_2023.jpg" alt="flyer stage img">
            </div>
        </div>

        <div id="carouselCN" class="carousel slide hidden-no-resp" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h4 class="block-title mb20 reveal-4">Stages 2024</h4>
                    <ul class="block-list reveal-4">
                        <li class="li-CN align-left">Carnaval 2024 (26 février au 1 mars)</li>
                        <li class="li-CN align-left">Pâques 2024 (29 avril au 3 mai)</li>
                        <li class="li-CN align-left">Été semaine 1 (29 avril au 3 mai) </li>
                        <li class="li-CN align-left">Été semaine 2 (29 avril au 3 mai) </li>
                        <li class="li-CN align-left">Été semaine 3 (29 avril au 3 mai) </li>
                        <li class="li-CN align-left">Toussaint (29 avril au 3 mai)</li>
                    </ul>
                    <div class="button-center">
                        <button class="button-main d-block reveal-4" onclick="window.location.href='reservation'">
                            Réserver
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/img_stage_CN/flyer/ete_2023.jpg" width="180" alt="flyer stage img">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once "front-end/footer.php" ?>

<script>
    function scrollToStageCN() {
        document.getElementById("stage-CN-dates").scrollIntoView({
            behavior: "smooth"
        });
    }

    function scrollToProgrammeCN() {
        document.getElementById("programme-CN").scrollIntoView({
            behavior: "smooth"
        });
    }
</script>

</body>

</html>