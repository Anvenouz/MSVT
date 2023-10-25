const horairepriSelect = document.getElementById('horaire-pri');
const activite1pri = document.querySelector('select[name="activite_1_pri"]');
const activite2pri = document.querySelector('select[name="activite_2_pri"]');
const activite3pri = document.querySelector('select[name="activite_3_pri"]');
const activite4pri = document.querySelector('select[name="activite_4_pri"]');
const activite3DivPri = document.getElementById('activite_3_pri');
const activite4DivPri = document.getElementById('activite_4_pri');

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
    cacherActivite(activite1pri, activite2pri);
    cacherActivite(activite2pri, activite1pri);
    cacherActivite(activite3pri, activite4pri);
    cacherActivite(activite4pri, activite3pri);
}

// Fonction pour gérer l'affichage des activités en fonction de l'horaire
function appear_pri() {
    if (horairepriSelect.value === "journée complète") {
        verifierActivites();
        activite3DivPri.style.display = 'block';
        activite4DivPri.style.display = 'block';
    } else {
        activite3DivPri.style.display = 'none';
        activite4DivPri.style.display = 'none';
    }
}

// Appeler les fonctions au chargement de la page et à chaque changement de sélection
window.addEventListener('load', () => {
    verifierActivites();
    appear_pri();
});

horairepriSelect.addEventListener('change', appear_pri);
activite1pri.addEventListener('change', verifierActivites);
activite2pri.addEventListener('change', verifierActivites);
activite3pri.addEventListener('change', verifierActivites);
activite4pri.addEventListener('change', verifierActivites);
