
let turnLeft = 3;
function rollDice() {

    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        const currentDieIsChecked = document.getElementById('die' + dieNumber + 'Check');
        if (!currentDieIsChecked.checked) {
            const dieValue = rollDie();
            document.getElementById("die" + dieNumber).innerHTML = dieValue;
        }
    }
    document.getElementById("turnsLeft").innerHTML = turnLeft;
    turnLeft--;

    /* if (turnLeft == 0) {
         document.getElementById("roll").disabled = true;
     }*/
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
    


    }
/*
    if (turnLeft == 0) {
        document.getElementById("roll").disabled = true;
    }
}*/
