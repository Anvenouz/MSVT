<?php include_once "front-end/header.php" ?>
<?php include_once "front-end/navbar.php" ?>
<?php include_once "front-end/images.php" ?>

<section class="section-100 reveal">
    <div class="block-85 block-text-header reveal-2">
        <!-- Texte -->
        <h1 class="block-title" id="title-galerie"><span>Galerie</span>Photos réalisées dans les anciennes carrières d'Obourg</h1>
        <div>
            <p>
                Voici une sélection de photos prises par les stagiaires lors de nos <a class="text-dark" href="https://www.photo-biodiversite.be/"> stages photos nature</a> dans les anciennes carrière d'Obourg.
            </p>
            <p class="strong">
                Veuillez noter que les photos ci-dessous sont un aperçu des images capturées lors de notre stage photo nature. Ces images sont la propriété de nos stagiaires et ne sont pas libres de droit. <span class="underline"></span> Toute reproduction ou utilisation non autorisée est strictement interdite.
            </p>
        </div>
        <!-- Galerie -->
        <div class="container">
            <div class="row mt50 flash">
                <?php foreach ($images as $image) { ?>
                    <div class="col-md-4 gallery-item">
                        <img src="<?php echo $image['src']; ?>" width="250" alt="<?php echo $image['alt']; ?>" onclick="zoomImage(this)">
                        <p class="copyright-galery">Copyright © <?php echo $image['author']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- Fonction Zoom -->
        <div class="zoomed-image" onclick="closeZoomedImage()">
            <img src="" alt="Image zoomée">
        </div>
    </div>
</section>

<?php include_once "front-end/footer.php" ?>

</body>

</html>