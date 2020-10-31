
function rollDice() {

    const de1 = rollDie();
    document.getElementById("de1").innerHTML = "le dé 1 affiche " + de1;
    const de2 = rollDie();
    document.getElementById("de2").innerHTML = "le dé 2 affiche " + de2;
    const de3 = rollDie();
    document.getElementById("de3").innerHTML = "le dé 3 affiche " + de3;
    const de4 = rollDie();
    document.getElementById("de4").innerHTML = "le dé 4 affiche " + de4;
    const de5 = rollDie();
    document.getElementById("de5").innerHTML = "le dé 5 affiche " + de5;
    document.getElementById("reroll").disabled = false;
    document.getElementById("roll").disabled = true;
    $(':hidden').attr('disabled', 'disabled').css('display', 'none');
}
var nbretour = 1;
function rerollDice() {

    const de1 = rollDie();
    document.getElementById("de1").innerHTML = "le dé 1 affiche " + de1;
    const de2 = rollDie();
    document.getElementById("de2").innerHTML = "le dé 2 affiche " + de2;
    const de3 = rollDie();
    document.getElementById("de3").innerHTML = "le dé 3 affiche " + de3;
    const de4 = rollDie();
    document.getElementById("de4").innerHTML = "le dé 4 affiche " + de4;
    const de5 = rollDie();
    document.getElementById("de5").innerHTML = "le dé 5 affiche " + de5;

    if (nbretour < 2) {
        nbretour = nbretour + 1;
    }
    else {
        document.getElementById("reroll").disabled = true;
        document.getElementById("fin").innerHTML = "fin de la partie"
    
    }
}
document.getElementById("de5").innerHTML = nbretour;



function rollDie() {
    return Math.floor(Math.random() * Math.floor(6) + 1);
}
