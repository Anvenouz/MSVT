const horairesecSelect = document.getElementById('horaire-sec');
const activite1sec = document.querySelector('select[name="activite_1_sec"]');
const activite2sec = document.querySelector('select[name="activite_2_sec"]');
const activite3sec = document.querySelector('select[name="activite_3_sec"]');
const activite4sec = document.querySelector('select[name="activite_4_sec"]');
const activite3DivSec = document.getElementById('activite_3_sec');
const activite4DivSec = document.getElementById('activite_4_sec');

// Fonction pour cacher une activité
function cacherActivite(activiteSelect, activiteDiv) {
    if (activiteSelect.value.includes("(3h)")) {
        activiteDiv.disabled = true;
        activiteDiv.value = "";
    } else {
        activiteDiv.disabled = false;
    }
}

// Fonction pour gérer l'affichage des activités en fonction des options
function verifierActivites() {
    cacherActivite(activite1sec, activite2sec);
    cacherActivite(activite2sec, activite1sec);
    cacherActivite(activite3sec, activite4sec);
    cacherActivite(activite4sec, activite3sec);
}

// Fonction pour gérer l'affichage des activités en fonction de l'horaire
function appear_sec() {
    if (horairesecSelect.value === "journée complète") {
        verifierActivites();
        activite3DivSec.style.display = 'block';
        activite4DivSec.style.display = 'block';
    } else {
        activite3DivSec.style.display = 'none';
        activite4DivSec.style.display = 'none';
    }
}

// Appeler les fonctions au chargement de la page et à chaque changement de sélection
window.addEventListener('load', () => {
    verifierActivites();
    appear_sec();
});

horairesecSelect.addEventListener('change', appear_sec);
activite1sec.addEventListener('change', verifierActivites);
activite2sec.addEventListener('change', verifierActivites);
activite3sec.addEventListener('change', verifierActivites);
activite4sec.addEventListener('change', verifierActivites);
