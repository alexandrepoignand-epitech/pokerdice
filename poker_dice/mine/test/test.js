let turnsLeft;
const rollButton = document.getElementById("rollButton");
const informationSpan = document.getElementById("information");
function rollDice() {

    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        const currentDieIsChecked = document.getElementById('die' + dieNumber + 'Check');
        if (!currentDieIsChecked.checked) {
            const dieValue = rollDie();
            document.getElementById("die" + dieNumber).innerHTML = dieValue;
        }
    }
    turnsLeft--;
    document.getElementById("turnsLeft").innerHTML = turnsLeft;
    if (turnsLeft == 0) {
        endGame();
    }
}

function startNewGame() {
    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        document.getElementById("die" + dieNumber + "Check").checked = false;
    }
    turnsLeft = 3;
    rollButton.disabled = false;
    informationSpan.style.visibility = "hidden";
    rollDice();
}

function rollDie() {
    return Math.floor(Math.random() * Math.floor(6) + 1);
}

function endGame() {
    rollButton.disabled = true;
    turnsLeft = 0;
    document.getElementById("turnsLeft").innerHTML = turnsLeft;
    informationSpan.style.visibility = "visible";
    const die1Value = document.getElementById('die1').innerHTML;
    const die2Value = document.getElementById('die2').innerHTML;
    const die3Value = document.getElementById('die3').innerHTML;
    const die4Value = document.getElementById('die4').innerHTML;
    const die5Value = document.getElementById('die5').innerHTML;
}
