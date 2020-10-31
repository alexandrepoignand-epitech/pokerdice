
function rollDice() {

    for (let dieNumber = 1; dieNumber <= 5; dieNumber++) {
        const currentDieIsChecked = document.getElementById('die' + dieNumber + 'Check');
        if (!currentDieIsChecked.checked) {
            const dieValue = rollDie();
            document.getElementById("die" + dieNumber).innerHTML = dieValue;
        }
    }
}

function rollDie() {
    return Math.floor(Math.random() * Math.floor(6) + 1);
}
