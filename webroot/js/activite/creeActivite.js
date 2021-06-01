function activiteForm() {
    var coderet = true;
    if (nomForm() == false) {
        coderet = false;
    }
    if (prenomForm() == false) {
        coderet = false;
    }
    if (genreForm() == false) {
        coderet = false;
    }
    if (dateForm() == false) {
        coderet = false;
    }
    if (texteForm() == false) {
        coderet = false;
    }
    if (titreForm() == false) {
        coderet = false;
    }
    return coderet;
}

function nomForm() {
    var tooltip = document.getElementById('tooltipNOM');
    var NOM = document.getElementById("NOM");
    if (NOM.value.length >= 2) {
        NOM.className = 'correct';
        tooltip.style.display = 'none';
        return true;
    } else {
        NOM.className = 'incorrect';
        tooltip.style.display = 'inline-block';
        return false;
    }
}

function prenomForm() {
    var tooltip = document.getElementById('tooltipprenom');
    var prenom = document.getElementById("prenom");
    if (prenom.value.length >= 2) {
        prenom.className = 'correct';
        tooltip.style.display = 'none';
        return true;
    } else {
        prenom.className = 'incorrect';
        tooltip.style.display = 'inline-block';
        return false;
    }
}

function genreForm() {
    var tooltip = document.getElementById('tooltipgenre');
    var genre = document.getElementById("genre");
    if (genre.value.length >= 2) {
        genre.className = 'correct';
        tooltip.style.display = 'none';
        return true;
    } else {
        genre.className = 'incorrect';
        tooltip.style.display = 'inline-block';
        return false;
    }
}

function dateForm() {
    var tooltip = document.getElementById('tooltipdate');
    var date = document.getElementById("date");
    if (date.value.length >= 9) {
        date.className = 'correct';
        tooltip.style.display = 'none';
        return true;
    } else {
        date.className = 'incorrect';
        tooltip.style.display = 'inline-block';
        return false;
    }
}

function texteForm() {
    var tooltip = document.getElementById('tooltiptexte');
    var texte = document.getElementById("texte");
    if (texte.value.length >= 1 && texte.value.length <= 250) {
        texte.className = 'correct';
        tooltip.style.display = 'none';
        return true;
    } else {
        texte.className = 'incorrect';
        tooltip.style.display = 'inline-block';
        return false;
    }
}

function titreForm() {
    var tooltip = document.getElementById('tooltiptitre');
    var titre = document.getElementById("titre");
    if (titre.value.length >= 2 && titre.value.length <= 50) {
        titre.className = 'correct';
        tooltip.style.display = 'none';
        return true;
    } else {
        titre.className = 'incorrect';
        tooltip.style.display = 'inline-block';
        return false;
    }
}