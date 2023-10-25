<?php
$images = array(
    array(
        "src" => "img/img_galerie/entomo/entomo11.jpg",
        "alt" => "Image 1",
        "author" => "Anne Jocqué"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo12.jpg",
        "alt" => "Image 1",
        "author" => "Patrick Vandendael"
    ),
    array(
        "src" => "img/img_galerie/ornitho/ornitho2.jpg",
        "alt" => "Image 2",
        "author" => "Luc Baligant"
    ),
    array(
        "src" => "img/img_galerie/flore/flore2.jpg",
        "alt" => "Image 1",
        "author" => "Benoit Staumont"
    ),
    array(
        "src" => "img/img_galerie/paysage/paysage1.jpg",
        "alt" => "Image 1",
        "author" => "ASBL MSVT"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo1.jpg",
        "alt" => "Image 1",
        "author" => "Luc Baligant"
    ),
    array(
        "src" => "img/img_galerie/ornitho/ornitho3.jpg",
        "alt" => "Image 2",
        "author" => "Martine Goret"
    ),
    array(
        "src" => "img/img_galerie/ornitho/ornitho4.jpg",
        "alt" => "Image 2",
        "author" => "Guy Bonneels"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo2.jpg",
        "alt" => "Image 1",
        "author" => "Annick Gantois"
    ),
    array(
        "src" => "img/img_galerie/flore/flore3.jpg",
        "alt" => "Image 1",
        "author" => "Nadette Vandeghinste"
    ),
    array(
        "src" => "img/img_galerie/paysage/paysage2.jpg",
        "alt" => "Image 2",
        "author" => "Michel Van Reysen"
    ),
    array(
        "src" => "img/img_galerie/ornitho/ornitho5.jpg",
        "alt" => "Image 2",
        "author" => "Pierre Libois"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo9.jpg",
        "alt" => "Image 1",
        "author" => "Jackie Verreet"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo10.jpg",
        "alt" => "Image 1",
        "author" => "Pierre Libois"
    ),
    array(
        "src" => "img/img_galerie/flore/flore4.jpg",
        "alt" => "Image 1",
        "author" => "Omer Laventurier"
    ),
    array(
        "src" => "img/img_galerie/ornitho/ornitho6.jpg",
        "alt" => "Image 2",
        "author" => "Michel Chevalier"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo3.jpg",
        "alt" => "Image 1",
        "author" => "Catherine Josson"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo4.jpg",
        "alt" => "Image 1",
        "author" => "Benoit Thirionet"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo7.jpg",
        "alt" => "Image 1",
        "author" => "Guy Bonneels"
    ),
    array(
        "src" => "img/img_galerie/ornitho/ornitho7.jpg",
        "alt" => "Image 2",
        "author" => "Dominique Jacobs"
    ),
    array(
        "src" => "img/img_galerie/flore/flore5.jpg",
        "alt" => "Image 1",
        "author" => "Anne Jocqué"
    ),
    array(
        "src" => "img/img_galerie/ornitho/ornitho8.jpg",
        "alt" => "Image 2",
        "author" => "Michel Debrocq"
    ),
    array(
        "src" => "img/img_galerie/paysage/paysage4.jpg",
        "alt" => "Image 2",
        "author" => "Bernadette Schreurs"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo5.jpg",
        "alt" => "Image 1",
        "author" => "Bernadette Schreurs"
    ),
    array(
        "src" => "img/img_galerie/entomo/entomo6.jpg",
        "alt" => "Image 1",
        "author" => "Hubert Poiret"
    ),
    array(
        "src" => "img/img_galerie/flore/flore6.jpg",
        "alt" => "Image 1",
        "author" => "Yvette Boisdequin"
    ),
    array(
        "src" => "img/img_galerie/paysage/paysage5.jpg",
        "alt" => "Image 1",
        "author" => "Michel Van Reysen"
    ),
    array(
        "src" => "img/img_galerie/paysage/paysage6.jpg",
        "alt" => "Image 2",
        "author" => "Manu Kodeck"
    ),
    array(
        "src" => "img/img_galerie/flore/flore1.jpg",
        "alt" => "Image 1",
        "author" => "Muriel Fauconnier"
    ),
    array(
        "src" => "img/img_galerie/ornitho/ornitho1.jpg",
        "alt" => "Image 2",
        "author" => "Christophe Jurdan"
    )
);
?>
<script>
    function zoomImage(image) {
        const imageUrl = image.getAttribute('src');
        const zoomedImage = document.querySelector('.zoomed-image');
        const zoomedImageImg = zoomedImage.querySelector('img');

        zoomedImageImg.setAttribute('src', imageUrl);
        zoomedImage.style.display = 'flex';
    }

    function closeZoomedImage() {
        const zoomedImage = document.querySelector('.zoomed-image');
        zoomedImage.style.display = 'none';
    }
</script>