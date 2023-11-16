<footer class="text-center text-lg-start text-muted pt-4">
    <div class="container container-footer text-center text-md-start">
        <div class="row row-footer">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 resp-center mb-65-resp">
                <img src="<?= Path::getFile("/img/logo/logo_v2.1.png"); ?>" class="mb20" width="170" alt="logo MSVT">
                <p class="footer-info footer-icon1">
                    31, Rue d'Empire, 7034 - Obourg</p>
                <p class="footer-info footer-icon2">
                    065/84 40 65</p>
                <p class="footer-info footer-icon3">
                    info@msvt.be</p>
                <p class="footer-info footer-icon4">
                    <a href="<?= Path::getUrl("/"); ?>">https://www.msvt.be</a>
                </p>
                <button type="button" class="button-secondary reveal-4" onclick="openContactPageFooter()" id="button-contact-footer">contact</button>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase text-center fw-bold">
                    Horaire
                </h6>
                <ul class="footer-ul">
                    <?php
                    $horaire_ind = "9h - 16h";
                    $horaires_all = [
                        "Lundi" => $horaire_ind,
                        "Mardi" => $horaire_ind,
                        "Mercredi" => $horaire_ind,
                        "Jeudi" => $horaire_ind,
                        "Vendredi" => $horaire_ind,
                        "Samedi" => "Fermé",
                        "Dimanche" => "Fermé"
                    ];
                    foreach ($horaires_all as $x => $val) {
                        echo '<li class="footer-info">' . $x . ' : ' . $val . '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase text-center fw-bold">
                    A propos
                </h6>
                <p class="footer-info about center"><a href="<?= Path::getUrl("/historique"); ?>">Qui sommes-nous ?</a></p>
                <p class="footer-info about center"><a href="https://goo.gl/maps/PGNfeRjG91UcMExN9">Nous localiser</a></p>
                <p class="footer-info about center"><a href="<?= Path::getUrl("/contact"); ?>">Aide et support</a></p>
                <p class="footer-info about center"><a href="<?= Path::getUrl("/privacy"); ?>">Privacy policy</a></p>
                <p class="footer-info about center"><a href="<?= Path::getUrl("/terms"); ?>">Terms of use</a></p>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-3">
                <h6 class="text-uppercase fw-bold text-center mb-4">
                    En collaboration avec :
                </h6>
                <div class="logo-partners text-center text-uppercase">
<?php
                $urls = array(
                    "https://ardenne-et-gaume.be/",
                    "https://cercles-naturalistes.be/",
                    "https://www.holcim.be/fr",
                    "https://atelier-mirage.com/",
                    "https://www.wallonie.be/fr",
                    "https://www.mnemolia.com/msvt"
                );

                for ($i = 1; $i < 7; $i++) {
                    echo '<a href="' . $urls[$i - 1] . '" target="_blank"><img class="logo-part-icon" src=" '. Path::getFile("/img/logo/Logo_partners/logo_part_$i.png") . '" width="80px" alt="logo part' . $i . '"></a>';
                }
?>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center p-2 copyright">
        © <?php echo date("Y"); ?> Copyright :
        <a class="text-reset" href="<?= Path::getUrl("/"); ?>">ASBL - Maison des Sciences de la Vie et de la Terre</a>
    </div>
</footer>
<script>
    function openContactPageFooter() {
        window.location.href = "contact.php#contact-form";
    }
</script>

</body>

</html>