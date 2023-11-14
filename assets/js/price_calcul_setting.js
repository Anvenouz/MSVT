


//CALCUL DE PRIX SCOLAIRE
$(document).ready(function () {
    $('#number1_mat, #horaire-mat').change(function () {
        calculatePrice('#number1_mat', '#horaire-mat', '#prixTotal');
    });
    $('#number1_pri, #horaire-pri').change(function () {
        calculatePrice('#number1_pri', '#horaire-pri', '#prixTotal_pri');
    });
    $('#number1_sec, #horaire-sec').change(function () {
        calculatePrice('#number1_sec', '#horaire-sec', '#prixTotal_sec');
    });

    function calculatePrice(elevesId, periodeId, prixTotalId) {
        var nbEleves = parseInt($(elevesId).val());
        var periode = $(periodeId).val();

        if (isNaN(nbEleves)) {
            $(prixTotalId).val('');
            return;
        }

        var coutParEleve;

        if (elevesId === '#number1_mat' || elevesId === '#number1_pri') {
            coutParEleve = (periode === 'journée complète') ? 9 : 6;

        } else if (elevesId === '#number1_sec') {
            coutParEleve = (periode === 'journée complète') ? 13 : 9;
        }

        var prixTotal = nbEleves * coutParEleve;
        $(prixTotalId).val(prixTotal + " €");
    }
});

//CALCUL PRIX VISITE
function calculerPrixTotalvisit() {
    var prixTotal_visit = 0;
    var number_visit_adult = parseInt(document.getElementById("number_visit_adult").value);
    var number_visit_ado = parseInt(document.getElementById("number_visit_ado").value);

    prixTotal_visit = number_visit_adult * 11 + number_visit_ado * 6;

    document.getElementById("prixTotal_visit").value = prixTotal_visit + " €";

}

//CALCUL DE PRIX ANNIVERSAIRE
const partAnniv = document.getElementById("part_anniv");
const prixTotalAnniv = document.getElementById("prixTotal_anniv");
partAnniv.addEventListener("input", calculateTotalPriceAnniv);

function calculateTotalPriceAnniv() {
    const participants = parseInt(partAnniv.value);
    let totalPrice = 156;

    if (participants > 12) {
        const extraParticipants = participants - 12;
        totalPrice += extraParticipants * 13;
    }

    prixTotalAnniv.value = totalPrice + " €";
}

//CALCUL DE PRIX LOCATION
const elements = {
    org: document.getElementById("org_location"),
    horaire: document.getElementById("horaire_location"),
    supp1: document.getElementById("supp_location1"),
    number1: document.getElementById("number1_location"),
    supp2Duree: document.getElementById("supp_location2_duree"),
    prixTotal: document.getElementById("prixTotal_location")
};
Object.values(elements).forEach(element => {
    element.addEventListener("change", calculateTotalPriceLoc);
});
function calculateTotalPriceLoc() {
    const {
        org,
        horaire,
        supp1,
        number1,
        supp2Duree,
        prixTotal
    } = elements;
    const orgValue = org.value;
    const horaireValue = horaire.value;
    const supp1Value = supp1.value;
    const number1Value = parseInt(number1.value);
    const supp2DureeValue = supp2Duree.value;
    let totalPrice = 0;
    switch (orgValue) {
        case "ASBL":
            if (horaireValue === "demi-journée (AM)" || horaireValue === "demi-journée (PM)") {
                totalPrice += 100;
            } else {
                totalPrice += 140;
            }
            break;
        case "entreprise":
            if (horaireValue === "demi-journée (AM)" || horaireValue === "demi-journée (PM)") {
                totalPrice += 250;
            } else {
                totalPrice += 350;
            }
            break;
    }
    switch (supp1Value) {
        case "sandwichs":
            totalPrice += number1Value * 6;
            break;
        case "viennoiseries":
        case "patisseries":
            totalPrice += number1Value * 5;
            break;
    }
    switch (supp2DureeValue) {
        case "1h":
            totalPrice += number1Value * 6;
            break;
        case "2h":
            totalPrice += number1Value * 10;
            break;
    }

    prixTotal.value = totalPrice + " €";
}

//(AFFICHAGE SUPPLEMENT LOCATION)
const suppLocation2 = document.getElementById("supp_location2");
const supp2 = document.getElementById("supp-2");
const supp3 = document.getElementById("supp-3");
suppLocation2.addEventListener("change", function () {
    const selectedValue = this.value;

    if (selectedValue === "inclure visite") {
        supp2.style.display = "block";
        supp3.style.display = "block";
    } else {
        supp2.style.display = "none";
        supp3.style.display = "none";
        totalPrice * 1;
    }
});

