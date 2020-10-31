
let turnLeft = 3;
function rollDice() {

    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        const currentDieIsChecked = document.getElementById('die' + dieNumber + 'Check');
        if (!currentDieIsChecked.checked) {
            const dieValue = rollDie();
            document.getElementById("die" + dieNumber).innerHTML = dieValue;
        }
    }
    turnLeft--;
    document.getElementById("turnsLeft").innerHTML = turnLeft;

    if (turnLeft == 0) {
        endOfTheGame();
    }
}
function reset() {
    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        document.getElementById("die" + dieNumber + "Check").checked = false;
        const dieValue = rollDie();
        document.getElementById("die" + dieNumber).innerHTML = dieValue;
    }
    turnLeft = 3;
    document.getElementById("turnsLeft").innerHTML = turnLeft;
    document.getElementById("roll").disabled = false;


}

function rollDie() {
    return Math.floor(Math.random() * Math.floor(6) + 1);
}
/*
function numberOfTurn() {

    for (turnleft = 3; turnLeft >= 0; turnLeft--) {
        document.getElementById("turnLeft").innerHTML = "there is " + turnLeft + " ."
    }

    */
function endOfTheGame() {
    document.getElementById("roll").disabled = true;
    document.getElementById("information").innerHTML = "The game is over";
    turnLeft = 0;
    document.getElementById("turnsLeft").innerHTML = turnLeft;

}
/*
    if (turnLeft == 0) {
        document.getElementById("roll").disabled = true;
    }
}*/
