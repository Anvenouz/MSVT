
const adContainer = document.getElementById("ad-container");
const closeButton = document.getElementById("close-button");

// Ouvrir l'ad container
function openAdContainer() {
    adContainer.classList.remove("hidden");
    adContainer.style.bottom = "10px"; // Apparition en bas
}

// Fermer l'ad container
function closeAdContainer() {
    adContainer.style.bottom = "-100%"; // Disparition en bas
}

// Gérer le clic sur le conteneur publicitaire
adContainer.addEventListener("click", closeAdContainer);

// Gérer le clic sur le bouton de fermeture
closeButton.addEventListener("click", closeAdContainer);

// Gérer le scroll pour masquer la publicité en bas de page
window.addEventListener("scroll", () => {
    const bottomThreshold = 100; // Marge de 100px depuis le bas de la page
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - bottomThreshold) {
        closeAdContainer();
    }
});

// Appeler la fonction pour ouvrir l'ad container après un délai
setTimeout(openAdContainer, 2000); // Exemple : après 2 secondes


document.addEventListener("DOMContentLoaded", function () {
    const bannerImages = ["1.webp", "2.webp", "3.webp", "4.webp"];
    const randomIndex = Math.floor(Math.random() * bannerImages.length);
    const bannerAd = document.getElementById("banner_ad");

    bannerAd.src = "img/banner/" + bannerImages[randomIndex];
});