
//Tooltip
$(document).ready(function () {
    $("body").tooltip({
        selector: '[data-toggle=tooltip]'
    });
});

//Redirect
function scrollToProgramme() {
    var programmeDiv = document.getElementById("programme-activite");
    programmeDiv.scrollIntoView({
        behavior: "smooth"
    });
}

//Filtre 
function filterSelection(selection) {
    const buttons = document.getElementsByClassName('button-filter-scolaire');
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('active');
    }

    const selectedButton = document.getElementById(`btn-${selection}`);
    selectedButton.classList.add('active');

    const elements = document.getElementsByClassName('column');
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.display = 'none';
        if (selection === 'all' || elements[i].classList.contains(selection)) {
            elements[i].style.display = 'block';
        }
    }
}
document.getElementById('btn-all').classList.add('active');
document.getElementById('btn-all').addEventListener('click', function () {
    filterSelection('all');
});
document.getElementById('btn-maternelles').addEventListener('click', function () {
    filterSelection('maternelles');
});
document.getElementById('btn-primaires').addEventListener('click', function () {
    filterSelection('primaires');
});
document.getElementById('btn-secondaires').addEventListener('click', function () {
    filterSelection('secondaires');
});
$(document).ready(function () {
    $('#scolaire-filter').trigger('click');
});
