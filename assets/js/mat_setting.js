const horaireMatSelect = document.getElementById('horaire-mat');
const activite1Mat = document.querySelector('select[name="activite_1_mat"]');
const activite2Mat = document.querySelector('select[name="activite_2_mat"]');
const activite3Mat = document.querySelector('select[name="activite_3_mat"]');
const activite4Mat = document.querySelector('select[name="activite_4_mat"]');
const activite3DivMat = document.getElementById('activite_3_mat');
const activite4DivMat = document.getElementById('activite_4_mat');

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
    cacherActivite(activite1Mat, activite2Mat);
    cacherActivite(activite2Mat, activite1Mat);
    cacherActivite(activite3Mat, activite4Mat);
    cacherActivite(activite4Mat, activite3Mat);
}

// Fonction pour gérer l'affichage des activités en fonction de l'horaire
function appear_mat() {
    if (horaireMatSelect.value === "journée complète") {
        verifierActivites();
        activite3DivMat.style.display = 'block';
        activite4DivMat.style.display = 'block';
    } else {
        activite3DivMat.style.display = 'none';
        activite4DivMat.style.display = 'none';
    }
}

// Appeler les fonctions au chargement de la page et à chaque changement de sélection
window.addEventListener('load', () => {
    verifierActivites();
    appear_mat();
});

horaireMatSelect.addEventListener('change', appear_mat);
activite1Mat.addEventListener('change', verifierActivites);
activite2Mat.addEventListener('change', verifierActivites);
activite3Mat.addEventListener('change', verifierActivites);
activite4Mat.addEventListener('change', verifierActivites);

