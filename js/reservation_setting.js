
//FCT AFFICHER TABLEAU

function afficherFormulaire() {

    var select = document.getElementById('activite_selected');
    var tableauScolaire = document.getElementById('tableauTarifs-scolaire');
    var tableauVisite = document.getElementById('tableauTarifs-visite');
    var tableauStagePhoto = document.getElementById('tableauTarifs-stagePhoto');
    var tableauStageCN = document.getElementById('tableauTarifs-stageCN');
    var tableauAnniv = document.getElementById('tableauTarifs-anniv');
    var tableauLocation = document.getElementById('tableauTarifs-location');

    tableauScolaire.style.display = 'none';
    tableauVisite.style.display = 'none';
    tableauStagePhoto.style.display = 'none';
    tableauStageCN.style.display = 'none';
    tableauAnniv.style.display = 'none';
    tableauLocation.style.display = 'none';

    if (select.value === 'Activites scolaire (maternelles)' ||
        select.value === 'Activites scolaire (primaires)' ||
        select.value === 'Activites scolaire (secondaires)') {
        tableauScolaire.style.display = 'table';
        tableauScolaire.style.margin = '35px auto';

    } else if (select.value === 'Visite guidee des carrieres') {
        tableauVisite.style.display = 'table';
        tableauVisite.style.margin = '35px auto';

    } else if (select.value === 'Stages "Photo nature"') {
        tableauStagePhoto.style.display = 'table';
        tableauStagePhoto.style.margin = '35px auto';

    } else if (select.value === 'Stages "Cirque et Nature"') {
        tableauStageCN.style.display = 'table';
        tableauStageCN.style.margin = '35px auto';

    } else if (select.value === 'Anniversaires') {
        tableauAnniv.style.display = 'table';
        tableauAnniv.style.margin = '35px auto';

    } else if (select.value === 'Service de location') {
        tableauLocation.style.display = 'table';
        tableauLocation.style.margin = '35px auto';
    }


}

//FCT APPARITION ENFANT STAGE CN

function appear_child() {
    var number1_CN = document.getElementById('number1_CN').value;
    var child_sup1 = document.querySelector('.child_sup1');
    var child_sup2 = document.querySelector('.child_sup2');

    if (number1_CN === '' || number1_CN === '1') {
        child_sup1.classList.add('hidden');
        child_sup2.classList.add('hidden');
    } else if (number1_CN === '2') {
        child_sup1.classList.remove('hidden');
        child_sup2.classList.add('hidden');
    } else if (number1_CN === '3') {
        child_sup1.classList.add('hidden');
        child_sup2.classList.remove('hidden');
    }
}

//FCT AFFICHAGE THEMES VISITES

function afficherDivEnFonctionDuTheme() {
    var visit_theme = document.querySelector('input[name="visit_theme"]:checked').value;

    var div_botanique = document.getElementById("div_bota");
    var div_entomologie = document.getElementById("div_entomo");
    var div_ornitho = document.getElementById("div_ornitho");

    div_botanique.style.display = "none";
    div_entomologie.style.display = "none";
    div_ornitho.style.display = "none";

    if (visit_theme === "Botanique") {
        div_botanique.style.display = "block";
    } else if (visit_theme === "Entomologie") {
        div_entomologie.style.display = "block";
    } else if (visit_theme === "Ornithologie") {
        div_ornitho.style.display = "block";
    }
}

//FCT AFFICHER IMAGE SPECIFIQUE FORMULAIRE

function afficherImage() {
    if (window.innerWidth > 502) {
        var select = document.getElementById('activite_selected');
        var selectedValue = select.options[select.selectedIndex].value;

        var imageSco = document.getElementById('activite_image_scolaire');
        var imageLoc = document.getElementById('activite_image_location');
        var imagePhoto = document.getElementById('activite_image_photo');
        var imageCN = document.getElementById('activite_image_stageCN');
        var imageVisite = document.getElementById('activite_image_visite');

        switch (selectedValue) {
            case 'Activites scolaire (maternelles)':
            case 'Activites scolaire (primaires)':
            case 'Activites scolaire (secondaires)':
                imageSco.src = './img/img_reservation/sco-app.jpg';
                imageSco.style.display = 'block';
                imageLoc.style.display = 'none';
                imagePhoto.style.display = 'none';
                imageCN.style.display = 'none';
                imageVisite.style.display = 'none';
                break;
            case 'Service de location':
                imageLoc.src = './img/img_reservation/loc-app.jpg';
                imageLoc.style.display = 'block';
                imageSco.style.display = 'none';
                imagePhoto.style.display = 'none';
                imageCN.style.display = 'none';
                imageVisite.style.display = 'none';
                break;
            case 'Visite guidee des carrieres':
                imageVisite.src = './img/img_reservation/vis-app.jpg';
                imageLoc.style.display = 'none';
                imageSco.style.display = 'none';
                imagePhoto.style.display = 'none';
                imageCN.style.display = 'none';
                imageVisite.style.display = 'block';
                break;
            case 'Stages "Photo nature"':
                imagePhoto.src = './img/img_reservation/photo-app.jpg';
                imageCN.style.display = 'none';
                imageVisite.style.display = 'none';
                imageSco.style.display = 'none';
                imageLoc.style.display = 'none';
                imagePhoto.style.display = 'block';
                break;
            case 'Stages "Cirque et Nature"':
                imageCN.src = './img/img_reservation/CN-app.jpg';
                imageCN.style.display = 'block';
                imageVisite.style.display = 'none';
                imageSco.style.display = 'none';
                imageLoc.style.display = 'none';
                imagePhoto.style.display = 'none';
                break;
            case 'Anniversaires':
                imageCN.src = './img/img_reservation/anniv-app.jpg';
                imageCN.style.display = 'block';
                imageVisite.style.display = 'none';
                imageSco.style.display = 'none';
                imageLoc.style.display = 'none';
                imagePhoto.style.display = 'none';

                break;
        }
    }
}

//BOUTONS

function openLink(url) {
    window.open(url, '_blank');
}

document.addEventListener("DOMContentLoaded", function () {
    var select = document.getElementById("activite_selected");

    function handleInputChange(value, buttonId) {
        var button = document.getElementById(buttonId);
        if (select.value === value) {
            button.style.display = 'block';
            button.style.margin = '20px auto';
        } else {
            button.style.display = 'none';
        }
    }

    select.addEventListener('change', function () {
        handleInputChange('Activites scolaire (maternelles)', 'ButtonMaternelle');
        handleInputChange('Activites scolaire (primaires)', 'ButtonPrimaire');
        handleInputChange('Activites scolaire (secondaires)', 'ButtonSecondaire');
        handleInputChange('Visite guidee des carrieres', 'ButtonVisit');
        handleInputChange('Stages "Cirque et Nature"', 'ButtonCN');
        handleInputChange('Service de location', 'ButtonLocation');
        handleInputChange('Anniversaires', 'ButtonAnniversaire');
        handleInputChange('Anniversaires', 'bouton_dates_disponibles_anniv');
        handleInputChange('Stages "Photo nature"', 'bouton_dates_disponibles_stagePhoto');
        handleInputChange('Service de location', 'bouton_dates_disponibles_location');
        handleInputChange('Stages "Cirque et Nature"', 'bouton_dates_disponibles_stageCN');
        handleInputChange('Visite guidee des carrieres', 'bouton_dates_disponibles_visites');

        if (select.value === 'Activites scolaire (maternelles)' ||
            select.value === 'Activites scolaire (primaires)' ||
            select.value === 'Activites scolaire (secondaires)') {
            handleInputChange(select.value, 'bouton_infos_scolaires');
        } else {
            var boutonInfosScolaires = document.getElementById('bouton_infos_scolaires');
            boutonInfosScolaires.style.display = 'none';
        }
    });



    //Boutons inside
    $(document).ready(function () {
        // Mat
        bindButtonClick('#boutonSuivant1mat', '#div1mat', '#div2mat');
        bindButtonClick('#boutonPrecedent2mat', '#div2mat', '#div1mat');
        bindButtonClick('#boutonSuivant2mat', '#div2mat', '#div3mat');
        bindButtonClick('#boutonPrecedent3mat', '#div3mat', '#div2mat');

        // Pri
        bindButtonClick('#boutonSuivant1pri', '#div1pri', '#div2pri');
        bindButtonClick('#boutonPrecedent2pri', '#div2pri', '#div1pri');
        bindButtonClick('#boutonSuivant2pri', '#div2pri', '#div3pri');
        bindButtonClick('#boutonPrecedent3pri', '#div3pri', '#div2pri');

        // Sec
        bindButtonClick('#boutonSuivant1sec', '#div1sec', '#div2sec');
        bindButtonClick('#boutonPrecedent2sec', '#div2sec', '#div1sec');
        bindButtonClick('#boutonSuivant2sec', '#div2sec', '#div3sec');
        bindButtonClick('#boutonPrecedent3sec', '#div3sec', '#div2sec');

        // Visites res
        bindButtonClick('#boutonSuivant1vis', '#div1vis', '#div2vis');
        bindButtonClick('#boutonPrecedent3vis', '#div2vis', '#div1vis');

        // Location
        bindButtonClick('#boutonSuivant1loc', '#div1loc', '#div2loc');
        bindButtonClick('#boutonPrecedent2loc', '#div2loc', '#div1loc');
        bindButtonClick('#boutonSuivant2loc', '#div2loc', '#div3loc');
        bindButtonClick('#boutonPrecedent3loc', '#div3loc', '#div2loc');

        // CN
        bindButtonClick('#boutonSuivant1CN', '#div1CN', '#div2CN');
        bindButtonClick('#boutonPrecedent3CN', '#div2CN', '#div1CN');


        bindButtonClick('#boutonSuivant1vis2', '#div1vis2', '#div2vis2');
        bindButtonClick('#boutonPrecedent3vis2', '#div2vis2', '#div1vis2');

        // Photo
        bindButtonClick('#boutonSuivant1photo', '#div1photo', '#div2photo');
        bindButtonClick('#boutonPrecedent3photo', '#div2photo', '#div1photo');

        // Anniversaire
        bindButtonClick('#boutonSuivant1anniv', '#div1anniv', '#div2anniv');
        bindButtonClick('#boutonPrecedent3anniv', '#div2anniv', '#div1anniv');

        function bindButtonClick(buttonId, hideDivId, showDivId) {
            $(buttonId).click(function () {
                $(showDivId).removeClass('hidden').hide().fadeIn(300);
                $(hideDivId).addClass('hidden');
            });
        }
    });

    //Scroll
    function scrollToBottom() {
        if (window.pageYOffset < 300) {
            window.scrollBy({
                top: 300,
                behavior: 'smooth'
            });
        }

        // Supprimer l'écouteur d'événements après le défilement
        document.getElementById('activite_selected').removeEventListener('change', scrollToBottom);
    }
    document.getElementById('activite_selected').addEventListener('change', scrollToBottom);


    //Tooltip
    $(document).ready(function () {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
    });

    // Sélection des éléments
    var selectTheme = document.getElementById('select-1');
    var selectDate = document.getElementById('select-2');
    var selectHeure = document.getElementById('select-3');

    // Masquer les éléments initialement
    selectDate.style.display = 'none';
    selectHeure.style.display = 'none';

    // Écouter l'événement de changement pour select-theme
    selectTheme.addEventListener('change', function () {
        if (selectTheme.value !== '') {
            selectDate.style.display = 'block';
        } else {
            selectDate.style.display = 'none';
            selectHeure.style.display = 'none';
        }
    });

    // Écouter l'événement de changement pour select-date
    selectDate.addEventListener('change', function () {
        if (selectDate.value !== '') {
            selectHeure.style.display = 'block';
        } else {
            selectHeure.style.display = 'none';
        }
    });

});


