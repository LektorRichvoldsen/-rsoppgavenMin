var klikkeKnappEl = document.getElementById("klikkeknapp");
var utskriftEl = document.getElementById("utskrift");
var oppgradering1El = document.getElementById("oppgradering1");
var oppgradering2El = document.getElementById("oppgradering2");


klikkeKnappEl.addEventListener("click", beregnKlikk);
oppgradering1El.addEventListener("click", oekPoengPerKlikkMed1)
oppgradering2El.addEventListener("click", oekPoengPerKlikkMed10)

var antallKlikk = 0;
var poengPerKlikk = 1;

function beregnKlikk(e) {
    antallKlikk = antallKlikk + poengPerKlikk;
    utskriftEl.innerHTML = "Du har klikket " + antallKlikk + " ganger.";

}

function oekPoengPerKlikkMed1(e) {
    if (antallKlikk > 99) {
        antallKlikk = antallKlikk - 100;
        poengPerKlikk = poengPerKlikk + 100;
        klikkeKnappEl.innerHTML = "+" + poengPerKlikk;
        utskriftEl.innerHTML = "Du har kjøpt en oppgradering og har nå " + antallKlikk + " poeng igjen."
    } else {
        alert("Du har ikke nok poeng enda. Klikk mer.");
    }
}

function oekPoengPerKlikkMed10(e) {
    if (antallKlikk > 999) {
        antallKlikk = antallKlikk - 1000;
        poengPerKlikk = poengPerKlikk + 10;
        klikkeKnappEl.innerHTML = "+" + poengPerKlikk;
        utskriftEl.innerHTML = "Du har kjøpt en oppgradering og har nå " + antallKlikk + " poeng igjen."
    } else {
        alert("Du har ikke nok poeng enda. Klikk mer.");
    }
}