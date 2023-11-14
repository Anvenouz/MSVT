
// Settings
function handleDateChange(dateInput) {
    var selectedDate = $(dateInput).val();
    console.log("Date sélectionnée : " + selectedDate);
}
function initDatepicker(inputId, availableDays, nonAvailableDates) {
    $("#" + inputId).datepicker({
        firstDay: 1,
        dateFormat: "dd/mm/yy",
        minDate: 0,
        showButtonPanel: false,
        showOn: "focus",
        beforeShowDay: function (date) {
            if (!availableDays.includes(date.getDay())) {
                return [false, ""];
            }

            if (nonAvailableDates.some(function (nonAvailableDate) {
                return nonAvailableDate.getTime() === date.getTime();
            })) {
                return [false, ""];
            }

            return [true, ""];
        },
        monthNames: [
            "janvier", "février", "mars", "avril", "mai", "juin",
            "juillet", "août", "septembre", "octobre", "novembre", "décembre"
        ],
        dayNamesMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],

        onSelect: function (dateText, inst) {
            handleDateChange(inst.input);
            $(inst.input).datepicker("hide");
        }
    });
}

// AGENDA

// Jour disponibles :
// 1 : Lundi        // 5 : Vendredi
// 2 : Mardi        // 6 : Samedi
// 3 : Mercredi     // 7 : Dimanche
// 4 : Jeudi

// Jours indisponibles :
// 0 : Janvier     4 : Mai        8 : Septembre
// 1 : Février     5 : Juin       9 : Octobre
// 2 : Mars        6 : Juillet    10 : Novembre
// 3 : Avril       7 : Aout       11 : Décembre

// Ajout nouvelle date indisponible :
// new Date(Année, mois, jour)
// new Date(2023, 5, 28)

$(document).ready(function () {

    /* ================================== */
    /* === DATES POUR LES MATERNELLES === */
    /* ================================== */

    // Jours disponibles :
    var dateMatAvailableDays = [1, 2, 3, 4, 5];

    // Jours indisponibles :
    var dateMatNonAvailableDates = [
        // new Date(2023, 10, 25),
        // new Date(2023, 7, 28)

    ];

    initDatepicker("date_mat", dateMatAvailableDays, dateMatNonAvailableDates);

    /* ================================== */
    /* ==== DATES POUR LES PRIMAIRES ==== */
    /* ================================== */

    // Jours disponibles :
    var datePriAvailableDays = [1, 2, 3, 4, 5];

    // Jours indisponibles :
    var datePriNonAvailableDates = [
        // new Date(2023, 7, 18),
        // new Date(2023, 7, 25)
    ];

    initDatepicker("date_pri", datePriAvailableDays, datePriNonAvailableDates);


    /* ================================== */
    /* === DATES POUR LES SECONDAIRES === */
    /* ================================== */

    // Jours disponibles :
    var dateSecAvailableDays = [1, 2, 3, 4, 5];

    // Jours indisponibles :
    var dateSecNonAvailableDates = [
        // new Date(2023, 7, 18),
        // new Date(2023, 7, 28) 
    ];

    initDatepicker("date_sec", dateSecAvailableDays, dateSecNonAvailableDates);

    /* ================================= */
    /* == DATES POUR LES ANNIVERSAIRES = */
    /* ================================= */

    // Jours disponibles :
    var dateAnnivAvailableDays = [3];

    // Jours indisponibles :
    var dateAnnivNonAvailableDates = [
        // new Date(2023, 7, 18),
        // new Date(2023, 7, 25), 
        // new Date(2023, 7, 28) 
    ];

    initDatepicker("date_anniv", dateAnnivAvailableDays, dateAnnivNonAvailableDates);

    /* ================================= */
    /* ==== DATES POUR LES LOCATION ==== */
    /* ================================= */

    // Jours disponibles :
    var dateLocationAvailableDays = [0, 1, 2, 3, 4, 5, 6];

    // Jours indisponibles :
    var dateLocationNonAvailableDates = [
        // new Date(2023, 7, 18),
        // new Date(2023, 7, 25), 
        // new Date(2023, 7, 28) 
    ];
    initDatepicker("date_location", dateLocationAvailableDays, dateLocationNonAvailableDates); initDatepicker("date_location-resp", dateLocationAvailableDays, dateLocationNonAvailableDates);
});

// Visites en carrière (Dates Disponibles)

var subjectObject = {
    "Botanique": {
        "31.12.23 (botanique)": ["10h à 12h", "14h à 16h"],
        "31.12.23 (botanique)": ["10h à 12h"],
        "31.12.23 (botanique)": ["14h à 16h"]
    },
    "Ornithologie": {
        "date 1 (ornitho)": ["10h à 12h", "14 à 16h"],
        "date 2 (ornitho)": ["10h à 12h", "14 à 16h"],
        "date 3 (ornitho)": ["10h à 12h", "14 à 16h"]
    },
    "Entomologie": {
        "date 1 (entomo)": ["10h à 12h", "14 à 16h"],
        "date 2 (entomo)": ["14h à 16h"],
        "date 3 (entomo)": ["14h à 16h"]
    }
};



// Settings
window.onload = function () {
    var subjectSel = document.getElementById("select-theme");
    var topicSel = document.getElementById("select-date");
    var chapterSel = document.getElementById("select-heure");

    for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
    }

    subjectSel.onchange = function () {
        chapterSel.length = 1;
        topicSel.length = 1;
        for (var y in subjectObject[this.value]) {
            topicSel.options[topicSel.options.length] = new Option(y, y);
        }
    }
    topicSel.onchange = function () {
        chapterSel.length = 1;
        var z = subjectObject[subjectSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
        }
    }
}